<?php
/**
 * HexaHost.de Contact Form Handler
 * E-Mail-Verarbeitung mit SMTP-Integration und Spam-Schutz
 */

// Konfiguration laden
require_once 'config.php';

// Konfiguration verwenden
$config = getHexaHostConfig();

// CORS Headers für AJAX-Requests
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json; charset=utf-8');

// Nur POST-Requests erlauben
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Rate Limiting
function checkRateLimit($ip) {
    global $config;
    $cache_file = sys_get_temp_dir() . '/hexahost_contact_' . md5($ip) . '.txt';
    $current_time = time();
    
    if (file_exists($cache_file)) {
        $data = json_decode(file_get_contents($cache_file), true);
        if ($data && isset($data['requests'])) {
            // Entferne alte Einträge (älter als 1 Stunde)
            $data['requests'] = array_filter($data['requests'], function($timestamp) use ($current_time) {
                return ($current_time - $timestamp) < 3600;
            });
            
            if (count($data['requests']) >= $config['max_requests_per_hour']) {
                return false;
            }
        }
    }
    
    // Füge aktuellen Request hinzu
    $data = isset($data) ? $data : ['requests' => []];
    $data['requests'][] = $current_time;
    file_put_contents($cache_file, json_encode($data));
    
    return true;
}

// Honeypot Check
function checkHoneypot($data) {
    global $config;
    $honeypot_field = $config['honeypot_field'];
    
    // Das Honeypot-Feld sollte leer sein (verstecktes Feld)
    if (!empty($data[$honeypot_field])) {
        return false;
    }
    
    return true;
}

// E-Mail-Validierung
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Input-Sanitization
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

// SMTP E-Mail-Versand mit PHPMailer
function sendEmail($data) {
    global $config;
    
    // PHPMailer laden (falls verfügbar)
    if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
        // Fallback: Native PHP mail() Funktion
        return sendEmailNative($data);
    }
    
    try {
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        
        // Server-Einstellungen
        $mail->isSMTP();
        $mail->Host = $config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
        $mail->SMTPSecure = $config['smtp_encryption'];
        $mail->Port = $config['smtp_port'];
        $mail->CharSet = 'UTF-8';
        
        // Absender
        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addReplyTo($data['email'], $data['firstName'] . ' ' . $data['lastName']);
        
        // Empfänger
        $mail->addAddress($config['to_email'], $config['to_name']);
        
        // Betreff
        $subject_map = [
            'allgemeine-anfrage' => 'Allgemeine Anfrage',
            'vpc-anfrage' => 'Virtual Private Container Anfrage',
            'vps-anfrage' => 'Virtual Private Server Anfrage',
            'mail-gateway-anfrage' => 'Mail Gateway Anfrage',
            'webhosting-anfrage' => 'Webhosting Anfrage',
            'support' => 'Technischer Support',
            'beratung' => 'Persönliche Beratung',
            'migration' => 'Migration/Umzug',
            'sonstiges' => 'Sonstige Anfrage'
        ];
        
        $subject = isset($subject_map[$data['subject']]) ? $subject_map[$data['subject']] : 'Neue Kontaktanfrage';
        $mail->Subject = '[HexaHost.de] ' . $subject;
        
        // HTML E-Mail-Inhalt
        $html_content = generateEmailHTML($data);
        $mail->isHTML(true);
        $mail->Body = $html_content;
        $mail->AltBody = generateEmailText($data);
        
        // Anti-Spam Headers
        $mail->addCustomHeader('X-Mailer', 'HexaHost Contact Form');
        $mail->addCustomHeader('X-Priority', '3');
        $mail->addCustomHeader('X-MSMail-Priority', 'Normal');
        $mail->addCustomHeader('Importance', 'Normal');
        $mail->addCustomHeader('X-Report-Abuse', 'Please report abuse here: abuse@hexahost.de');
        
        // DKIM, SPF, DMARC werden über DNS konfiguriert
        
        $mail->send();
        return true;
        
    } catch (Exception $e) {
        error_log('HexaHost Contact Form Error: ' . $e->getMessage());
        return false;
    }
}

// Fallback: Native PHP mail() Funktion
function sendEmailNative($data) {
    global $config;
    
    $subject_map = [
        'allgemeine-anfrage' => 'Allgemeine Anfrage',
        'vpc-anfrage' => 'Virtual Private Container Anfrage',
        'vps-anfrage' => 'Virtual Private Server Anfrage',
        'mail-gateway-anfrage' => 'Mail Gateway Anfrage',
        'webhosting-anfrage' => 'Webhosting Anfrage',
        'support' => 'Technischer Support',
        'beratung' => 'Persönliche Beratung',
        'migration' => 'Migration/Umzug',
        'sonstiges' => 'Sonstige Anfrage'
    ];
    
    $subject = isset($subject_map[$data['subject']]) ? $subject_map[$data['subject']] : 'Neue Kontaktanfrage';
    $subject = '[HexaHost.de] ' . $subject;
    
    // Headers für Spam-Schutz
    $headers = [
        'From: ' . $config['from_name'] . ' <' . $config['from_email'] . '>',
        'Reply-To: ' . $data['firstName'] . ' ' . $data['lastName'] . ' <' . $data['email'] . '>',
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'X-Mailer: HexaHost Contact Form',
        'X-Priority: 3',
        'X-MSMail-Priority: Normal',
        'Importance: Normal',
        'X-Report-Abuse: Please report abuse here: abuse@hexahost.de'
    ];
    
    $message = generateEmailHTML($data);
    
    return mail($config['to_email'], $subject, $message, implode("\r\n", $headers));
}

// HTML E-Mail-Template
function generateEmailHTML($data) {
    $subject_map = [
        'allgemeine-anfrage' => 'Allgemeine Anfrage',
        'vpc-anfrage' => 'Virtual Private Container Anfrage',
        'vps-anfrage' => 'Virtual Private Server Anfrage',
        'mail-gateway-anfrage' => 'Mail Gateway Anfrage',
        'webhosting-anfrage' => 'Webhosting Anfrage',
        'support' => 'Technischer Support',
        'beratung' => 'Persönliche Beratung',
        'migration' => 'Migration/Umzug',
        'sonstiges' => 'Sonstige Anfrage'
    ];
    
    $subject_text = isset($subject_map[$data['subject']]) ? $subject_map[$data['subject']] : 'Neue Kontaktanfrage';
    
    return '
    <!DOCTYPE html>
    <html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Neue Kontaktanfrage - HexaHost.de</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #ff51f9, #a348ff); color: white; padding: 20px; text-align: center; }
            .content { background: #f9f9f9; padding: 20px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #666; }
            .value { color: #333; }
            .message { background: white; padding: 15px; border-left: 4px solid #ff51f9; margin: 15px 0; }
            .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>Neue Kontaktanfrage</h1>
                <p>HexaHost.de Kontaktformular</p>
            </div>
            
            <div class="content">
                <div class="field">
                    <div class="label">Betreff:</div>
                    <div class="value">' . $subject_text . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Name:</div>
                    <div class="value">' . $data['firstName'] . ' ' . $data['lastName'] . '</div>
                </div>
                
                <div class="field">
                    <div class="label">E-Mail:</div>
                    <div class="value">' . $data['email'] . '</div>
                </div>';
    
    if (!empty($data['phone'])) {
        $html .= '
                <div class="field">
                    <div class="label">Telefon:</div>
                    <div class="value">' . $data['phone'] . '</div>
                </div>';
    }
    
    if (!empty($data['company'])) {
        $html .= '
                <div class="field">
                    <div class="label">Unternehmen:</div>
                    <div class="value">' . $data['company'] . '</div>
                </div>';
    }
    
    $html .= '
                <div class="field">
                    <div class="label">Nachricht:</div>
                    <div class="message">' . nl2br($data['message']) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Newsletter-Anmeldung:</div>
                    <div class="value">' . (!empty($data['newsletter']) ? 'Ja' : 'Nein') . '</div>
                </div>
                
                <div class="field">
                    <div class="label">IP-Adresse:</div>
                    <div class="value">' . $_SERVER['REMOTE_ADDR'] . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Zeitstempel:</div>
                    <div class="value">' . date('d.m.Y H:i:s') . '</div>
                </div>
            </div>
            
            <div class="footer">
                <p>Diese E-Mail wurde automatisch vom HexaHost.de Kontaktformular generiert.</p>
                <p>© 2024 HexaHost.de - Alle Rechte vorbehalten</p>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}

// Text-Version der E-Mail
function generateEmailText($data) {
    $subject_map = [
        'allgemeine-anfrage' => 'Allgemeine Anfrage',
        'vpc-anfrage' => 'Virtual Private Container Anfrage',
        'vps-anfrage' => 'Virtual Private Server Anfrage',
        'mail-gateway-anfrage' => 'Mail Gateway Anfrage',
        'webhosting-anfrage' => 'Webhosting Anfrage',
        'support' => 'Technischer Support',
        'beratung' => 'Persönliche Beratung',
        'migration' => 'Migration/Umzug',
        'sonstiges' => 'Sonstige Anfrage'
    ];
    
    $subject_text = isset($subject_map[$data['subject']]) ? $subject_map[$data['subject']] : 'Neue Kontaktanfrage';
    
    $text = "NEUE KONTAKTANFRAGE - HexaHost.de\n";
    $text .= "=====================================\n\n";
    $text .= "Betreff: " . $subject_text . "\n";
    $text .= "Name: " . $data['firstName'] . " " . $data['lastName'] . "\n";
    $text .= "E-Mail: " . $data['email'] . "\n";
    
    if (!empty($data['phone'])) {
        $text .= "Telefon: " . $data['phone'] . "\n";
    }
    
    if (!empty($data['company'])) {
        $text .= "Unternehmen: " . $data['company'] . "\n";
    }
    
    $text .= "\nNachricht:\n";
    $text .= "----------\n";
    $text .= $data['message'] . "\n\n";
    
    $text .= "Newsletter-Anmeldung: " . (!empty($data['newsletter']) ? "Ja" : "Nein") . "\n";
    $text .= "IP-Adresse: " . $_SERVER['REMOTE_ADDR'] . "\n";
    $text .= "Zeitstempel: " . date('d.m.Y H:i:s') . "\n\n";
    
    $text .= "---\n";
    $text .= "Diese E-Mail wurde automatisch vom HexaHost.de Kontaktformular generiert.\n";
    $text .= "© 2024 HexaHost.de - Alle Rechte vorbehalten";
    
    return $text;
}

// Hauptverarbeitung
try {
    // Rate Limiting Check
    $client_ip = $_SERVER['REMOTE_ADDR'];
    if (!checkRateLimit($client_ip)) {
        http_response_code(429);
        echo json_encode([
            'success' => false, 
            'message' => 'Zu viele Anfragen. Bitte versuchen Sie es später erneut.'
        ]);
        exit;
    }
    
    // Honeypot Check
    if (!checkHoneypot($_POST)) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Ungültige Anfrage.'
        ]);
        exit;
    }
    
    // Pflichtfelder prüfen
    $required_fields = ['firstName', 'lastName', 'email', 'subject', 'message', 'privacy'];
    $missing_fields = [];
    
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $missing_fields[] = $field;
        }
    }
    
    if (!empty($missing_fields)) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Bitte füllen Sie alle Pflichtfelder aus.',
            'missing_fields' => $missing_fields
        ]);
        exit;
    }
    
    // E-Mail-Validierung
    if (!validateEmail($_POST['email'])) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.'
        ]);
        exit;
    }
    
    // Daten sanitieren
    $data = [
        'firstName' => sanitizeInput($_POST['firstName']),
        'lastName' => sanitizeInput($_POST['lastName']),
        'email' => sanitizeInput($_POST['email']),
        'phone' => sanitizeInput($_POST['phone'] ?? ''),
        'company' => sanitizeInput($_POST['company'] ?? ''),
        'subject' => sanitizeInput($_POST['subject']),
        'message' => sanitizeInput($_POST['message']),
        'newsletter' => isset($_POST['newsletter']) ? true : false,
        'privacy' => isset($_POST['privacy']) ? true : false
    ];
    
    // E-Mail senden
    if (sendEmail($data)) {
        echo json_encode([
            'success' => true, 
            'message' => 'Ihre Nachricht wurde erfolgreich gesendet! Wir melden uns in Kürze bei Ihnen.'
        ]);
    } else {
        http_response_code(500);
        echo json_encode([
            'success' => false, 
            'message' => 'Beim Senden der Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.'
        ]);
    }
    
} catch (Exception $e) {
    error_log('HexaHost Contact Form Error: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Ein unerwarteter Fehler ist aufgetreten. Bitte versuchen Sie es später erneut.'
    ]);
}
?> 