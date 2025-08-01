# HexaHost.de E-Mail-Konfiguration

## Übersicht

Das Kontaktformular von HexaHost.de benötigt eine korrekte SMTP-Konfiguration, um E-Mails zu versenden. Diese Anleitung erklärt, wie Sie die E-Mail-Funktionalität einrichten.

## Aktuelle Probleme

### 1. ✅ Behoben: Merge-Konflikt in contact-handler.php
- Der Git-Merge-Konflikt wurde aufgelöst
- Die Datei ist jetzt funktionsfähig

### 2. ⚠️ Zu beheben: SMTP-Konfiguration
- Die SMTP-Einstellungen sind noch auf Testwerte gesetzt
- Sie müssen mit echten SMTP-Daten konfiguriert werden

### 3. ⚠️ Zu beheben: PHPMailer-Installation
- Composer ist nicht installiert
- PHPMailer ist nicht verfügbar
- Fallback auf native PHP mail() Funktion ist aktiv

## SMTP-Konfiguration

### Option 1: Gmail SMTP (Empfohlen für Tests)

1. **Gmail-Konto einrichten:**
   - Gehen Sie zu Ihren Google-Kontoeinstellungen
   - Aktivieren Sie "2-Schritt-Verifizierung"
   - Erstellen Sie ein "App-Passwort"

2. **config.php bearbeiten:**
```php
'smtp_host' => 'smtp.gmail.com',
'smtp_port' => 587,
'smtp_username' => 'ihre-email@gmail.com',
'smtp_password' => 'ihr-app-passwort',
'smtp_encryption' => 'tls',
'from_email' => 'ihre-email@gmail.com',
'to_email' => 'info@hexahost.de',
```

### Option 2: Eigener Mail-Server

1. **SMTP-Daten von Ihrem Hosting-Provider erhalten**
2. **config.php bearbeiten:**
```php
'smtp_host' => 'mail.ihre-domain.de',
'smtp_port' => 587,
'smtp_username' => 'kontakt@ihre-domain.de',
'smtp_password' => 'ihr-smtp-passwort',
'smtp_encryption' => 'tls',
'from_email' => 'kontakt@ihre-domain.de',
'to_email' => 'info@hexahost.de',
```

### Option 3: Andere E-Mail-Provider

#### Outlook/Hotmail:
```php
'smtp_host' => 'smtp-mail.outlook.com',
'smtp_port' => 587,
'smtp_encryption' => 'tls',
```

#### GMX:
```php
'smtp_host' => 'mail.gmx.net',
'smtp_port' => 587,
'smtp_encryption' => 'tls',
```

#### Web.de:
```php
'smtp_host' => 'smtp.web.de',
'smtp_port' => 587,
'smtp_encryption' => 'tls',
```

## PHPMailer-Installation

### Composer installieren:

1. **Windows:**
   - Laden Sie Composer von https://getcomposer.org/download/
   - Führen Sie den Installer aus

2. **Linux/macOS:**
```bash
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

### PHPMailer installieren:

```bash
cd public
composer install
```

## Test der E-Mail-Funktionalität

### 1. Test-Datei verwenden:
- Öffnen Sie `test-email.php` im Browser
- Klicken Sie auf "Test-E-Mail senden"

### 2. Kontaktformular testen:
- Öffnen Sie `contact.html`
- Füllen Sie das Formular aus
- Überprüfen Sie die Antwort

## Sicherheitseinstellungen

### DNS-Einträge für Spam-Schutz:

1. **SPF Record (TXT):**
```
v=spf1 include:_spf.hexahost.de ~all
```

2. **DMARC Record (TXT):**
```
v=DMARC1; p=quarantine; rua=mailto:dmarc@hexahost.de
```

3. **DKIM (wird vom Mail-Server konfiguriert)**

## Fehlerbehebung

### Häufige Probleme:

1. **"SMTP connect() failed"**
   - Überprüfen Sie Host und Port
   - Prüfen Sie Firewall-Einstellungen

2. **"Authentication failed"**
   - Überprüfen Sie Benutzername und Passwort
   - Bei Gmail: App-Passwort verwenden

3. **"Connection timeout"**
   - Prüfen Sie Internetverbindung
   - Überprüfen Sie SMTP-Host

4. **"Mail function not available"**
   - PHP mail() Funktion ist deaktiviert
   - Kontaktieren Sie Ihren Hosting-Provider

## Debug-Modus aktivieren

In `config.php` setzen Sie:
```php
'debug_mode' => true,
```

## Logs überprüfen

E-Mail-Fehler werden in den PHP-Error-Logs gespeichert:
- Windows: Event Viewer
- Linux: `/var/log/php_errors.log`

## Nächste Schritte

1. ✅ Merge-Konflikt behoben
2. ⚠️ SMTP-Konfiguration anpassen
3. ⚠️ PHPMailer installieren (optional)
4. ⚠️ E-Mail-Funktionalität testen
5. ⚠️ DNS-Einträge für Spam-Schutz konfigurieren

## Support

Bei Problemen:
- Überprüfen Sie die PHP-Error-Logs
- Testen Sie mit `test-email.php`
- Kontaktieren Sie Ihren Hosting-Provider
