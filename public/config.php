<?php
/**
 * HexaHost.de SMTP Konfiguration
 * 
 * WICHTIG: Ändern Sie diese Werte entsprechend Ihren SMTP-Einstellungen!
 * 
 * Beispiele für verschiedene E-Mail-Provider:
 * 
 * Gmail:
 * - smtp_host: smtp.gmail.com
 * - smtp_port: 587
 * - smtp_encryption: tls
 * 
 * Outlook/Hotmail:
 * - smtp_host: smtp-mail.outlook.com
 * - smtp_port: 587
 * - smtp_encryption: tls
 * 
 * GMX:
 * - smtp_host: mail.gmx.net
 * - smtp_port: 587
 * - smtp_encryption: tls
 * 
 * Web.de:
 * - smtp_host: smtp.web.de
 * - smtp_port: 587
 * - smtp_encryption: tls
 * 
 * Eigener Mail-Server:
 * - smtp_host: mail.ihre-domain.de
 * - smtp_port: 587 (oder 465 für SSL)
 * - smtp_encryption: tls (oder ssl)
 */

// SMTP Konfiguration - HIER IHRE WERTE EINTRAGEN
$smtp_config = [
    // SMTP Server-Einstellungen
    'smtp_host' => 'smtp.gmail.com',           // z.B. smtp.gmail.com
    'smtp_port' => 587,                        // 587 für TLS, 465 für SSL
    'smtp_username' => 'test@hexahost.de',     // z.B. info@hexahost.de
    'smtp_password' => 'your-app-password',    // Ihr SMTP-Passwort
    'smtp_encryption' => 'tls',                // 'tls' oder 'ssl'
    
    // Absender-Einstellungen
    'from_email' => 'test@hexahost.de',        // Absender-E-Mail
    'from_name' => 'HexaHost.de Kontaktformular', // Absender-Name
    
    // Empfänger-Einstellungen
    'to_email' => 'info@hexahost.de',          // Empfänger-E-Mail
    'to_name' => 'HexaHost Support',           // Empfänger-Name
    
    // Sicherheitseinstellungen
    'max_requests_per_hour' => 5,              // Max. Anfragen pro Stunde pro IP
    'honeypot_field' => 'website',             // Verstecktes Feld für Bot-Schutz
    
    // E-Mail-Template-Einstellungen
    'email_template' => 'html',                // 'html' oder 'text'
    'include_ip_address' => true,              // IP-Adresse in E-Mail anzeigen
    'include_timestamp' => true,               // Zeitstempel in E-Mail anzeigen
];

// DNS-Einstellungen für Spam-Schutz (werden über DNS konfiguriert)
$dns_config = [
    // SPF Record (TXT Record in DNS)
    'spf_record' => 'v=spf1 include:_spf.hexahost.de ~all',
    
    // DMARC Record (TXT Record in DNS)
    'dmarc_record' => 'v=DMARC1; p=quarantine; rua=mailto:dmarc@hexahost.de',
    
    // DKIM wird über den Mail-Server konfiguriert
];

// Debug-Einstellungen (nur für Entwicklung)
$debug_config = [
    'debug_mode' => false,                     // Debug-Modus aktivieren
    'log_errors' => true,                      // Fehler loggen
    'log_file' => 'contact_form_errors.log',   // Log-Datei
];

// Exportiere Konfiguration für andere Dateien
if (!defined('HEXAHOST_CONFIG_LOADED')) {
    define('HEXAHOST_CONFIG_LOADED', true);
    
    // Globale Variablen für andere Dateien
    $GLOBALS['hexahost_smtp_config'] = $smtp_config;
    $GLOBALS['hexahost_dns_config'] = $dns_config;
    $GLOBALS['hexahost_debug_config'] = $debug_config;
}

// Hilfsfunktion zum Abrufen der Konfiguration
function getHexaHostConfig($key = null) {
    global $smtp_config, $dns_config, $debug_config;
    
    if ($key === null) {
        return array_merge($smtp_config, $dns_config, $debug_config);
    }
    
    if (isset($smtp_config[$key])) {
        return $smtp_config[$key];
    }
    
    if (isset($dns_config[$key])) {
        return $dns_config[$key];
    }
    
    if (isset($debug_config[$key])) {
        return $debug_config[$key];
    }
    
    return null;
}

// Debug-Funktion
function hexahostDebug($message, $type = 'info') {
    global $debug_config;
    
    if (!$debug_config['debug_mode']) {
        return;
    }
    
    $timestamp = date('Y-m-d H:i:s');
    $log_message = "[$timestamp] [$type] $message" . PHP_EOL;
    
    if ($debug_config['log_errors']) {
        error_log($log_message, 3, $debug_config['log_file']);
    }
    
    if ($debug_config['debug_mode']) {
        echo "<!-- HexaHost Debug: $message -->\n";
    }
}

// Validierung der SMTP-Konfiguration
function validateSMTPConfig() {
    $config = getHexaHostConfig();
    $errors = [];
    
    // Prüfe ob alle erforderlichen Felder ausgefüllt sind
    $required_fields = ['smtp_host', 'smtp_username', 'smtp_password', 'from_email', 'to_email'];
    
    foreach ($required_fields as $field) {
        if (empty($config[$field]) || $config[$field] === 'YOUR_SMTP_' . strtoupper(substr($field, 5))) {
            $errors[] = "Konfigurationsfehler: $field ist nicht korrekt eingestellt.";
        }
    }
    
    // Prüfe SMTP-Port
    if (!is_numeric($config['smtp_port']) || $config['smtp_port'] < 1 || $config['smtp_port'] > 65535) {
        $errors[] = "Konfigurationsfehler: Ungültiger SMTP-Port.";
    }
    
    // Prüfe E-Mail-Format
    if (!filter_var($config['from_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Konfigurationsfehler: Ungültige Absender-E-Mail.";
    }
    
    if (!filter_var($config['to_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Konfigurationsfehler: Ungültige Empfänger-E-Mail.";
    }
    
    return $errors;
}

// Zeige Konfigurationsfehler an (nur im Debug-Modus)
if (getHexaHostConfig('debug_mode')) {
    $config_errors = validateSMTPConfig();
    if (!empty($config_errors)) {
        hexahostDebug('SMTP-Konfigurationsfehler: ' . implode(', ', $config_errors), 'error');
    }
}
?> 