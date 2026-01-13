<?php
/**
 * HexaHost.de Mail Configuration
 * 
 * Bitte passen Sie die folgenden SMTP-Einstellungen an Ihre E-Mail-Provider an.
 * 
 * Beispiele für gängige Provider:
 * 
 * Gmail:
 * - SMTP_HOST = 'smtp.gmail.com'
 * - SMTP_PORT = 587
 * - SMTP_USERNAME = 'ihre-email@gmail.com'
 * - SMTP_PASSWORD = 'ihr-app-passwort'
 * 
 * Outlook/Hotmail:
 * - SMTP_HOST = 'smtp-mail.outlook.com'
 * - SMTP_PORT = 587
 * 
 * GMX:
 * - SMTP_HOST = 'mail.gmx.net'
 * - SMTP_PORT = 587
 * 
 * Web.de:
 * - SMTP_HOST = 'smtp.web.de'
 * - SMTP_PORT = 587
 * 
 * 1&1:
 * - SMTP_HOST = 'smtp.1und1.de'
 * - SMTP_PORT = 587
 * 
 * Strato:
 * - SMTP_HOST = 'smtp.strato.de'
 * - SMTP_PORT = 587
 * 
 * Ionos:
 * - SMTP_HOST = 'smtp.ionos.de'
 * - SMTP_PORT = 587
 */

// SMTP Server Einstellungen
define('SMTP_HOST', 'smtp.ihre-domain.de');        // Ihr SMTP-Server
define('SMTP_PORT', 587);                          // SMTP-Port (meist 587 oder 465)
define('SMTP_USERNAME', 'kontakt@ihre-domain.de'); // Ihr SMTP-Benutzername
define('SMTP_PASSWORD', 'ihr-smtp-passwort');      // Ihr SMTP-Passwort

// E-Mail Adressen
define('SMTP_FROM_EMAIL', 'kontakt@hexahost.de');  // Absender-E-Mail (muss zu SMTP_USERNAME passen)
define('SMTP_TO_EMAIL', 'info@hexahost.de');       // Empfänger-E-Mail für Kontaktformular

// Sicherheitseinstellungen
define('ENABLE_CSRF_PROTECTION', true);            // CSRF-Schutz aktivieren
define('ENABLE_RATE_LIMITING', true);              // Rate-Limiting aktivieren
define('MAX_REQUESTS_PER_HOUR', 10);               // Max. Anfragen pro Stunde

// Spam-Schutz Einstellungen
define('ENABLE_SPAM_PROTECTION', true);            // Spam-Schutz aktivieren
define('MAX_MESSAGE_LENGTH', 5000);                // Max. Nachrichtenlänge
define('MIN_MESSAGE_LENGTH', 10);                  // Min. Nachrichtenlänge

// Debug-Einstellungen (nur für Entwicklung)
define('DEBUG_MODE', false);                       // Debug-Modus (true/false)
define('LOG_EMAILS', true);                        // E-Mails loggen (true/false)

// Zusätzliche Sicherheitsheader
define('ADDITIONAL_HEADERS', [
    'X-Mailer' => 'HexaHost.de Contact Form',
    'X-Priority' => '3',
    'X-MSMail-Priority' => 'Normal',
    'Importance' => 'Normal',
    'X-Report-Abuse' => 'Please report abuse here: abuse@hexahost.de',
    'List-Unsubscribe' => '<mailto:unsubscribe@hexahost.de>',
    'Precedence' => 'bulk'
]);

// Erlaubte Domains für E-Mail-Adressen (optional)
define('ALLOWED_EMAIL_DOMAINS', [
    // Leer lassen für alle Domains zu erlauben
    // 'gmail.com',
    // 'outlook.com',
    // 'web.de',
    // 'gmx.de'
]);

// Blacklist für E-Mail-Adressen (optional)
define('BLACKLISTED_EMAILS', [
    // 'spam@example.com',
    // 'test@test.com'
]);

// Validierung der Konfiguration
if (!defined('SMTP_HOST') || !defined('SMTP_USERNAME') || !defined('SMTP_PASSWORD')) {
    die('SMTP-Konfiguration ist unvollständig. Bitte überprüfen Sie die mail-config.php');
}

// Überprüfung der E-Mail-Adressen
if (!filter_var(SMTP_FROM_EMAIL, FILTER_VALIDATE_EMAIL)) {
    die('Ungültige SMTP_FROM_EMAIL Adresse');
}

if (!filter_var(SMTP_TO_EMAIL, FILTER_VALIDATE_EMAIL)) {
    die('Ungültige SMTP_TO_EMAIL Adresse');
}

// Logging-Funktion
function logEmail($type, $data) {
    if (!LOG_EMAILS) return;
    
    $logFile = __DIR__ . '/../logs/email.log';
    $logDir = dirname($logFile);
    
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[$timestamp] $type: " . json_encode($data) . "\n";
    
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

// Hilfsfunktion für E-Mail-Validierung
function isValidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    
    // Prüfe Blacklist
    if (in_array($email, BLACKLISTED_EMAILS)) {
        return false;
    }
    
    // Prüfe Domain-Whitelist (falls gesetzt)
    if (!empty(ALLOWED_EMAIL_DOMAINS)) {
        $domain = substr(strrchr($email, "@"), 1);
        if (!in_array($domain, ALLOWED_EMAIL_DOMAINS)) {
            return false;
        }
    }
    
    return true;
}

// CSRF Token generieren
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// CSRF Token validieren
function validateCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}
?> 