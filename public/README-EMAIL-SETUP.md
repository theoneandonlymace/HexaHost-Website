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

```
public/
├── contact-handler.php      # E-Mail-Verarbeitung
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