<?php
/**
 * HexaHost.de Contact Form Handler
 * Handles contact form submissions and sends emails with proper anti-spam headers
 */

// Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// Load configuration
require_once 'config/mail-config.php';

// Set headers for AJAX response
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');

// CSRF Protection
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Security token invalid']);
    exit;
}

// Rate limiting
session_start();
$timeWindow = 300; // 5 minutes
$maxRequests = 3;

if (!isset($_SESSION['contact_attempts'])) {
    $_SESSION['contact_attempts'] = [];
}

// Clean old attempts
$_SESSION['contact_attempts'] = array_filter($_SESSION['contact_attempts'], function($timestamp) use ($timeWindow) {
    return $timestamp > (time() - $timeWindow);
});

if (count($_SESSION['contact_attempts']) >= $maxRequests) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Zu viele Anfragen. Bitte warten Sie 5 Minuten.']);
    exit;
}

// Add current attempt
$_SESSION['contact_attempts'][] = time();

// Validate required fields
$requiredFields = ['firstName', 'lastName', 'email', 'subject', 'message', 'privacy'];
$errors = [];

foreach ($requiredFields as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        $errors[] = "Das Feld '$field' ist erforderlich.";
    }
}

// Validate email
if (isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Bitte geben Sie eine gültige E-Mail-Adresse ein.';
}

// Validate privacy checkbox
if (!isset($_POST['privacy']) || $_POST['privacy'] !== 'on') {
    $errors[] = 'Sie müssen der Datenschutzerklärung zustimmen.';
}

// Check for spam indicators
$spamScore = 0;
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Check message length
if (strlen($message) < 10) {
    $spamScore += 2;
}

if (strlen($message) > 5000) {
    $spamScore += 3;
}

// Check for suspicious patterns
$suspiciousPatterns = [
    '/\b(viagra|casino|loan|credit|debt)\b/i',
    '/\b(click here|buy now|free money)\b/i',
    '/\b(www\.|http:\/\/|https:\/\/)/i',
    '/\b[A-Z]{5,}/', // ALL CAPS
    '/\b\d{10,}/', // Too many numbers
];

foreach ($suspiciousPatterns as $pattern) {
    if (preg_match($pattern, $message)) {
        $spamScore += 1;
    }
}

// Check for too many links
$linkCount = preg_match_all('/https?:\/\/[^\s]+/', $message);
if ($linkCount > 2) {
    $spamScore += 2;
}

// Reject if spam score is too high
if ($spamScore >= 5) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Ihre Nachricht wurde als Spam erkannt.']);
    exit;
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// Sanitize input
$firstName = htmlspecialchars(trim($_POST['firstName']), ENT_QUOTES, 'UTF-8');
$lastName = htmlspecialchars(trim($_POST['lastName']), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8') : '';
$company = isset($_POST['company']) ? htmlspecialchars(trim($_POST['company']), ENT_QUOTES, 'UTF-8') : '';
$subject = htmlspecialchars(trim($_POST['subject']), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');
$newsletter = isset($_POST['newsletter']) && $_POST['newsletter'] === 'on';

// Map subject to readable text
$subjectMap = [
    'allgemeine-anfrage' => 'Allgemeine Anfrage',
    'vpc-anfrage' => 'Virtual Private Container Anfrage',
    'vps-anfrage' => 'Virtual Private Server Anfrage',
    'mail-gateway-anfrage' => 'Mail Gateway Anfrage',
    'webhosting-anfrage' => 'Webhosting Anfrage',
    'support' => 'Technischer Support',
    'beratung' => 'Persönliche Beratung',
    'migration' => 'Migration/Umzug',
    'sonstiges' => 'Sonstiges'
];

$subjectText = isset($subjectMap[$subject]) ? $subjectMap[$subject] : $subject;

// Prepare email content
$emailSubject = "Neue Kontaktanfrage: $subjectText - HexaHost.de";
$emailBody = "Eine neue Kontaktanfrage wurde über das Kontaktformular eingegangen:\n\n";
$emailBody .= "Name: $firstName $lastName\n";
$emailBody .= "E-Mail: $email\n";
if ($phone) $emailBody .= "Telefon: $phone\n";
if ($company) $emailBody .= "Unternehmen: $company\n";
$emailBody .= "Betreff: $subjectText\n";
$emailBody .= "Newsletter-Anmeldung: " . ($newsletter ? 'Ja' : 'Nein') . "\n\n";
$emailBody .= "Nachricht:\n$message\n\n";
$emailBody .= "---\n";
$emailBody .= "Diese E-Mail wurde automatisch generiert von hexahost.de\n";
$emailBody .= "IP-Adresse: " . $_SERVER['REMOTE_ADDR'] . "\n";
$emailBody .= "Zeitstempel: " . date('Y-m-d H:i:s') . "\n";

// Prepare HTML version
$htmlBody = "
<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <title>Neue Kontaktanfrage - HexaHost.de</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .header { background: #ff51f9; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; }
        .message { background: #f5f5f5; padding: 15px; border-left: 4px solid #ff51f9; }
        .footer { background: #f5f5f5; padding: 15px; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class='header'>
        <h1>Neue Kontaktanfrage - HexaHost.de</h1>
    </div>
    <div class='content'>
        <div class='field'>
            <span class='label'>Name:</span> $firstName $lastName
        </div>
        <div class='field'>
            <span class='label'>E-Mail:</span> $email
        </div>";

if ($phone) {
    $htmlBody .= "<div class='field'><span class='label'>Telefon:</span> $phone</div>";
}

if ($company) {
    $htmlBody .= "<div class='field'><span class='label'>Unternehmen:</span> $company</div>";
}

$htmlBody .= "
        <div class='field'>
            <span class='label'>Betreff:</span> $subjectText
        </div>
        <div class='field'>
            <span class='label'>Newsletter-Anmeldung:</span> " . ($newsletter ? 'Ja' : 'Nein') . "
        </div>
        <div class='field'>
            <span class='label'>Nachricht:</span>
            <div class='message'>" . nl2br($message) . "</div>
        </div>
    </div>
    <div class='footer'>
        <p>Diese E-Mail wurde automatisch generiert von hexahost.de</p>
        <p>IP-Adresse: " . $_SERVER['REMOTE_ADDR'] . "</p>
        <p>Zeitstempel: " . date('Y-m-d H:i:s') . "</p>
    </div>
</body>
</html>";

// Send email using PHPMailer
try {
    require_once 'vendor/autoload.php';
    
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
    // Server settings
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USERNAME;
    $mail->Password = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = SMTP_PORT;
    $mail->CharSet = 'UTF-8';
    
    // Anti-spam headers
    $mail->addCustomHeader('X-Mailer', 'HexaHost.de Contact Form');
    $mail->addCustomHeader('X-Priority', '3');
    $mail->addCustomHeader('X-MSMail-Priority', 'Normal');
    $mail->addCustomHeader('Importance', 'Normal');
    $mail->addCustomHeader('X-Report-Abuse', 'Please report abuse here: abuse@hexahost.de');
    $mail->addCustomHeader('List-Unsubscribe', '<mailto:unsubscribe@hexahost.de>');
    $mail->addCustomHeader('Precedence', 'bulk');
    
    // Recipients
    $mail->setFrom(SMTP_FROM_EMAIL, 'HexaHost.de Kontaktformular');
    $mail->addAddress(SMTP_TO_EMAIL, 'HexaHost Support');
    $mail->addReplyTo($email, "$firstName $lastName");
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = $emailSubject;
    $mail->Body = $htmlBody;
    $mail->AltBody = $emailBody;
    
    // Send email
    $mail->send();
    
    // Send confirmation to user
    $userMail = new PHPMailer\PHPMailer\PHPMailer(true);
    
    // Server settings
    $userMail->isSMTP();
    $userMail->Host = SMTP_HOST;
    $userMail->SMTPAuth = true;
    $userMail->Username = SMTP_USERNAME;
    $userMail->Password = SMTP_PASSWORD;
    $userMail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $userMail->Port = SMTP_PORT;
    $userMail->CharSet = 'UTF-8';
    
    // Anti-spam headers for user confirmation
    $userMail->addCustomHeader('X-Mailer', 'HexaHost.de Contact Form');
    $userMail->addCustomHeader('X-Priority', '3');
    $userMail->addCustomHeader('X-MSMail-Priority', 'Normal');
    $userMail->addCustomHeader('Importance', 'Normal');
    
    // Recipients
    $userMail->setFrom(SMTP_FROM_EMAIL, 'HexaHost.de');
    $userMail->addAddress($email, "$firstName $lastName");
    
    // Content
    $userMail->isHTML(true);
    $userMail->Subject = 'Vielen Dank für Ihre Nachricht - HexaHost.de';
    $userMail->Body = "
    <!DOCTYPE html>
    <html lang='de'>
    <head>
        <meta charset='UTF-8'>
        <title>Vielen Dank - HexaHost.de</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .header { background: #ff51f9; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .footer { background: #f5f5f5; padding: 15px; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h1>Vielen Dank für Ihre Nachricht!</h1>
        </div>
        <div class='content'>
            <p>Hallo $firstName,</p>
            <p>vielen Dank für Ihre Nachricht an HexaHost.de. Wir haben Ihre Anfrage erhalten und werden uns schnellstmöglich bei Ihnen melden.</p>
            <p><strong>Ihre Nachricht:</strong><br>" . nl2br($message) . "</p>
            <p>Unser Support-Team bearbeitet Ihre Anfrage und antwortet in der Regel innerhalb von 2-4 Stunden.</p>
            <p>Bei dringenden Anliegen erreichen Sie uns auch telefonisch unter +49 851 1999 9999.</p>
        </div>
        <div class='footer'>
            <p>Mit freundlichen Grüßen<br>Ihr HexaHost.de Team</p>
            <p>Niederbayern, Deutschland</p>
        </div>
    </body>
    </html>";
    
    $userMail->AltBody = "Vielen Dank für Ihre Nachricht an HexaHost.de. Wir haben Ihre Anfrage erhalten und werden uns schnellstmöglich bei Ihnen melden.";
    
    $userMail->send();
    
    // Success response
    echo json_encode([
        'success' => true, 
        'message' => 'Ihre Nachricht wurde erfolgreich gesendet! Sie erhalten in Kürze eine Bestätigung per E-Mail.'
    ]);
    
} catch (Exception $e) {
    error_log("Mail error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut oder kontaktieren Sie uns direkt.'
    ]);
}
?> 