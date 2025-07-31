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

```
public/
├── contact-handler.php      # E-Mail-Verarbeitung
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