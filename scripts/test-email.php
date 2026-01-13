<?php
/**
 * HexaHost.de E-Mail Test
 * Testet die E-Mail-Funktionalität ohne PHPMailer
 */

// Konfiguration laden
require_once 'config.php';

// Test-E-Mail senden
function testEmail() {
    $config = getHexaHostConfig();
    
    // Test-Daten
    $test_data = [
        'firstName' => 'Test',
        'lastName' => 'Benutzer',
        'email' => 'test@example.com',
        'phone' => '+49 123 456789',
        'company' => 'Test GmbH',
        'subject' => 'test-email',
        'message' => 'Dies ist eine Test-E-Mail vom HexaHost.de Kontaktformular.'
    ];
    
    // E-Mail-Inhalt erstellen
    $subject = '[HexaHost.de] Test-E-Mail';
    $message = "Test-E-Mail von HexaHost.de\n\n";
    $message .= "Name: " . $test_data['firstName'] . " " . $test_data['lastName'] . "\n";
    $message .= "E-Mail: " . $test_data['email'] . "\n";
    $message .= "Telefon: " . $test_data['phone'] . "\n";
    $message .= "Unternehmen: " . $test_data['company'] . "\n";
    $message .= "Nachricht: " . $test_data['message'] . "\n\n";
    $message .= "Zeitstempel: " . date('d.m.Y H:i:s') . "\n";
    $message .= "IP-Adresse: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    // Headers
    $headers = [
        'From: ' . $config['from_name'] . ' <' . $config['from_email'] . '>',
        'Reply-To: ' . $test_data['firstName'] . ' ' . $test_data['lastName'] . ' <' . $test_data['email'] . '>',
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'X-Mailer: HexaHost Test Email'
    ];
    
    // E-Mail senden
    $result = mail($config['to_email'], $subject, $message, implode("\r\n", $headers));
    
    return $result;
}

// Test ausführen
if (isset($_GET['test'])) {
    $result = testEmail();
    
    if ($result) {
        echo "✅ Test-E-Mail wurde erfolgreich gesendet!";
    } else {
        echo "❌ Fehler beim Senden der Test-E-Mail.";
    }
} else {
    echo "<h1>HexaHost.de E-Mail Test</h1>";
    echo "<p>Klicken Sie auf den Link, um eine Test-E-Mail zu senden:</p>";
    echo "<a href='?test=1'>Test-E-Mail senden</a>";
    
    // Konfiguration anzeigen
    echo "<h2>Aktuelle Konfiguration:</h2>";
    $config = getHexaHostConfig();
    echo "<pre>";
    print_r($config);
    echo "</pre>";
}
?> 