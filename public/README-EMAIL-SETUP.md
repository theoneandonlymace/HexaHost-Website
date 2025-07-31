<<<<<<< HEAD
# HexaHost.de E-Mail-System Setup

## 📧 Kontaktformular E-Mail-Versand

Dieses System ermöglicht den E-Mail-Versand über das Kontaktformular mit SMTP-Integration und umfassendem Spam-Schutz.

## 🚀 Installation

### 1. SMTP-Konfiguration

Öffnen Sie die Datei `config.php` und tragen Sie Ihre SMTP-Daten ein:

```php
$smtp_config = [
    'smtp_host' => 'smtp.gmail.com',        // Ihr SMTP-Server
    'smtp_port' => 587,                      // Port (587 für TLS, 465 für SSL)
    'smtp_username' => 'info@hexahost.de',   // Ihr SMTP-Benutzername
    'smtp_password' => 'IHR_PASSWORT',       // Ihr SMTP-Passwort
    'smtp_encryption' => 'tls',              // 'tls' oder 'ssl'
    'from_email' => 'info@hexahost.de',      // Absender-E-Mail
    'to_email' => 'info@hexahost.de',        // Empfänger-E-Mail
];
```

### 2. E-Mail-Provider Beispiele

#### Gmail
```php
'smtp_host' => 'smtp.gmail.com',
'smtp_port' => 587,
'smtp_encryption' => 'tls',
```
**Hinweis:** Aktivieren Sie "Weniger sichere Apps" oder verwenden Sie App-Passwörter.

#### Outlook/Hotmail
```php
'smtp_host' => 'smtp-mail.outlook.com',
'smtp_port' => 587,
'smtp_encryption' => 'tls',
```

#### GMX
```php
'smtp_host' => 'mail.gmx.net',
'smtp_port' => 587,
'smtp_encryption' => 'tls',
```

#### Web.de
```php
'smtp_host' => 'smtp.web.de',
'smtp_port' => 587,
'smtp_encryption' => 'tls',
```

#### Eigener Mail-Server
```php
'smtp_host' => 'mail.ihre-domain.de',
'smtp_port' => 587,  // oder 465 für SSL
'smtp_encryption' => 'tls',  // oder 'ssl'
```

## 🔒 Sicherheitsfeatures

### Anti-Spam Schutz
- **Rate Limiting**: Max. 5 Anfragen pro Stunde pro IP
- **Honeypot**: Verstecktes Feld für Bot-Schutz
- **Input-Validierung**: Sanitization aller Eingaben
- **E-Mail-Validierung**: Format-Prüfung

### E-Mail-Headers für Spam-Schutz
```php
X-Mailer: HexaHost Contact Form
X-Priority: 3
X-MSMail-Priority: Normal
Importance: Normal
X-Report-Abuse: Please report abuse here: abuse@hexahost.de
```

## 📧 E-Mail-Template

### HTML-E-Mail
- Responsive Design
- HexaHost Branding
- Strukturierte Darstellung aller Formulardaten
- IP-Adresse und Zeitstempel für Tracking

### Text-Version
- Fallback für E-Mail-Clients ohne HTML-Support
- Alle wichtigen Informationen enthalten

## 🛠️ DNS-Konfiguration für Spam-Schutz

### SPF Record (TXT Record)
```
v=spf1 include:_spf.hexahost.de ~all
```

### DMARC Record (TXT Record)
```
v=DMARC1; p=quarantine; rua=mailto:dmarc@hexahost.de
```

### DKIM
- Wird über Ihren Mail-Server konfiguriert
- Erhöht die Zustellbarkeit erheblich

## 🔧 Debugging

### Debug-Modus aktivieren
```php
$debug_config = [
    'debug_mode' => true,
    'log_errors' => true,
    'log_file' => 'contact_form_errors.log',
];
```

### Log-Datei prüfen
```bash
tail -f contact_form_errors.log
```

## 📋 Dateistruktur
=======
# HexaHost.de E-Mail-Setup Anleitung

## Übersicht

Das Kontaktformular ist jetzt vollständig funktional mit einem PHP-Backend und PHPMailer. Sie müssen nur noch Ihre SMTP-Daten konfigurieren.

## Installation

### 1. Composer installieren

```bash
cd public
composer install
```

### 2. SMTP-Konfiguration

Bearbeiten Sie die Datei `config/mail-config.php` und passen Sie die SMTP-Einstellungen an:

```php
// SMTP Server Einstellungen
define('SMTP_HOST', 'smtp.ihre-domain.de');        // Ihr SMTP-Server
define('SMTP_PORT', 587);                          // SMTP-Port (meist 587 oder 465)
define('SMTP_USERNAME', 'kontakt@ihre-domain.de'); // Ihr SMTP-Benutzername
define('SMTP_PASSWORD', 'ihr-smtp-passwort');      // Ihr SMTP-Passwort

// E-Mail Adressen
define('SMTP_FROM_EMAIL', 'kontakt@hexahost.de');  // Absender-E-Mail
define('SMTP_TO_EMAIL', 'info@hexahost.de');       // Empfänger-E-Mail
```

## Gängige SMTP-Einstellungen

### Gmail
```php
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ihre-email@gmail.com');
define('SMTP_PASSWORD', 'ihr-app-passwort'); // App-Passwort erforderlich
```

### Outlook/Hotmail
```php
define('SMTP_HOST', 'smtp-mail.outlook.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ihre-email@outlook.com');
define('SMTP_PASSWORD', 'ihr-passwort');
```

### GMX
```php
define('SMTP_HOST', 'mail.gmx.net');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ihre-email@gmx.de');
define('SMTP_PASSWORD', 'ihr-passwort');
```

### Web.de
```php
define('SMTP_HOST', 'smtp.web.de');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ihre-email@web.de');
define('SMTP_PASSWORD', 'ihr-passwort');
```

### 1&1
```php
define('SMTP_HOST', 'smtp.1und1.de');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ihre-email@ihre-domain.de');
define('SMTP_PASSWORD', 'ihr-passwort');
```

### Strato
```php
define('SMTP_HOST', 'smtp.strato.de');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ihre-email@ihre-domain.de');
define('SMTP_PASSWORD', 'ihr-passwort');
```

### Ionos
```php
define('SMTP_HOST', 'smtp.ionos.de');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'ihre-email@ihre-domain.de');
define('SMTP_PASSWORD', 'ihr-passwort');
```

## Sicherheitsfeatures

### Anti-Spam Headers
Das System sendet E-Mails mit folgenden Anti-Spam-Headers:
- `X-Mailer`: Identifiziert das System
- `X-Priority`: Normale Priorität
- `X-Report-Abuse`: Abuse-Reporting
- `List-Unsubscribe`: Unsubscribe-Link
- `Precedence`: Bulk-Mail-Kennzeichnung

### Spam-Schutz
- Rate-Limiting: Max. 3 Anfragen pro 5 Minuten
- Spam-Score-System: Erkennt verdächtige Nachrichten
- Input-Validierung: Prüft alle Eingaben
- CSRF-Schutz: Verhindert Cross-Site-Request-Forgery

### Validierung
- E-Mail-Format-Prüfung
- Pflichtfeld-Validierung
- Nachrichtenlänge (10-5000 Zeichen)
- Verdächtige Wörter-Erkennung

## E-Mail-Templates

### An HexaHost (HTML)
- Professionelles HTML-Template
- Alle Formulardaten übersichtlich dargestellt
- HexaHost Branding

### Bestätigung an Kunde (HTML)
- Danke-Nachricht
- Bestätigung der Nachricht
- Support-Informationen

## Logging

E-Mails werden in `logs/email.log` protokolliert (falls aktiviert):
```php
define('LOG_EMAILS', true);
```

## Troubleshooting

### Häufige Probleme

1. **"SMTP connect() failed"**
   - Prüfen Sie SMTP_HOST und SMTP_PORT
   - Stellen Sie sicher, dass SMTP aktiviert ist

2. **"Authentication failed"**
   - Prüfen Sie SMTP_USERNAME und SMTP_PASSWORD
   - Bei Gmail: App-Passwort verwenden

3. **"Connection refused"**
   - Firewall-Einstellungen prüfen
   - Port 587 oder 465 verwenden

4. **E-Mails landen im Spam**
   - SPF, DKIM und DMARC konfigurieren
   - Absender-Domain mit SMTP-Domain übereinstimmend

### Debug-Modus

Aktivieren Sie den Debug-Modus für detaillierte Fehlermeldungen:
```php
define('DEBUG_MODE', true);
```

## Dateistruktur
>>>>>>> 04d4c58eb4d5f176a9f19520e2976037b9466326

```
public/
├── contact-handler.php      # E-Mail-Verarbeitung
<<<<<<< HEAD
├── config.php              # SMTP-Konfiguration
├── contact.html            # Kontaktformular
├── assets/
│   ├── css/
│   │   └── style.css      # Styling
│   └── js/
│       └── contact.js     # Frontend-Logic
└── README-EMAIL-SETUP.md  # Diese Anleitung
```

## 🧪 Testing

### 1. Konfiguration testen
```bash
php -f config.php
```

### 2. E-Mail-Versand testen
1. Öffnen Sie `contact.html`
2. Füllen Sie das Formular aus
3. Senden Sie eine Test-Nachricht
4. Prüfen Sie Ihr E-Mail-Postfach

### 3. Fehlerbehebung
- Prüfen Sie die Browser-Konsole (F12)
- Prüfen Sie die PHP-Fehler-Logs
- Aktivieren Sie den Debug-Modus

## 🔧 Erweiterte Konfiguration

### PHPMailer Integration
Falls PHPMailer verfügbar ist, wird es automatisch verwendet:

```bash
composer require phpmailer/phpmailer
```

### Fallback
Falls PHPMailer nicht verfügbar ist, wird die native PHP `mail()` Funktion verwendet.

## 📊 Monitoring

### Erfolgreiche E-Mails
- Empfangen Sie strukturierte HTML-E-Mails
- Alle Formulardaten werden übersichtlich dargestellt
- IP-Adresse und Zeitstempel für Tracking

### Fehlerbehandlung
- Detaillierte Fehlermeldungen im Log
- Benutzerfreundliche Frontend-Meldungen
- Rate-Limiting-Schutz

## 🚨 Wichtige Hinweise

1. **Sicherheit**: Ändern Sie die Standard-Konfiguration
2. **Passwörter**: Verwenden Sie sichere SMTP-Passwörter
3. **SSL/TLS**: Verwenden Sie immer verschlüsselte Verbindungen
4. **DNS**: Konfigurieren Sie SPF, DMARC und DKIM
5. **Backups**: Sichern Sie die Konfigurationsdateien

## 📞 Support

Bei Problemen:
1. Prüfen Sie die Log-Dateien
2. Aktivieren Sie den Debug-Modus
3. Testen Sie die SMTP-Verbindung
4. Kontaktieren Sie Ihren Hosting-Provider

---

**© 2024 HexaHost.de - Alle Rechte vorbehalten** 
=======
├── config/
│   └── mail-config.php     # SMTP-Konfiguration
├── vendor/                 # Composer-Abhängigkeiten
├── logs/                   # E-Mail-Logs
└── composer.json           # Composer-Konfiguration
```

## Sicherheitshinweise

1. **SMTP-Passwort schützen**
   - Datei `config/mail-config.php` nicht öffentlich zugänglich machen
   - Passwort regelmäßig ändern

2. **HTTPS verwenden**
   - Kontaktformular nur über HTTPS bereitstellen
   - SSL-Zertifikat installieren

3. **Backup erstellen**
   - Regelmäßige Backups der Konfiguration
   - E-Mail-Logs sichern

## Support

Bei Problemen:
1. Debug-Modus aktivieren
2. E-Mail-Logs prüfen
3. SMTP-Einstellungen testen
4. Firewall-Einstellungen überprüfen

## Changelog

- **v1.0**: Vollständige E-Mail-Implementierung
- Anti-Spam-Headers
- Rate-Limiting
- CSRF-Schutz
- HTML-Templates
- Logging-System 
>>>>>>> 04d4c58eb4d5f176a9f19520e2976037b9466326
