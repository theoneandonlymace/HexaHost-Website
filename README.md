# HexaHost.de - Hosting Website

Eine moderne und umfangreiche Website für das Hosting-Unternehmen HexaHost.de aus Niederbayern.

## 🚀 Features

- **Moderne Glasmorphism-Optik** mit lila/violetten Farbschema
- **Responsive Design** für alle Geräte
- **Vollständige Produktpräsentation** für alle Hosting-Lösungen
- **Interaktive Kontaktformulare** mit E-Mail-Versand
- **SEO-optimiert** mit Meta-Tags, Sitemap und robots.txt
- **Accessibility-Features** für bessere Nutzbarkeit
- **Cookie-Consent-Banner** DSGVO-konform
- **Rechtliche Seiten** (Impressum, Datenschutz, AGB)

## 📦 Produkte

### Virtual Private Container (VPC)
- Effiziente LXC-Container auf Proxmox-Basis
- 4 verschiedene Pakete (Starter bis Enterprise)
- Ab 4,99€/Monat

### Virtual Private Server (VPS)
- Vollwertige KVM-Virtualisierung 
- Alle Betriebssysteme unterstützt
- 4 verschiedene Pakete (Basic bis Enterprise)
- Ab 9,99€/Monat

### Mail Gateway
- Professioneller E-Mail-Schutz
- Spam-, Viren- und Phishing-Filter
- 4 verschiedene Pakete (Starter bis Enterprise)
- Ab 2,99€/Monat

### Webhosting
- Klassisches Hosting mit PHP, MySQL & SSL
- WordPress-ready mit cPanel
- 4 verschiedene Pakete (Starter bis Enterprise)
- Ab 1,99€/Monat

## 🛠️ Technologie-Stack

- **PHP 8.x** - Backend-Verarbeitung
- **HTML5** - Semantisches Markup
- **CSS3** - Moderne Styles mit Custom Properties
- **Vanilla JavaScript** - Keine Framework-Dependencies
- **PHPMailer** - E-Mail-Versand via SMTP
- **Glassmorphism Design** - Moderne Glaseffekte
- **CSS Grid & Flexbox** - Responsive Layouts
- **Inter Font** - Moderne Typografie

## 📁 Projektstruktur

```
HexaHost-Website/
├── public/                     # Webroot
│   ├── index.php               # Startseite
│   ├── vpc.php                 # Virtual Private Container
│   ├── vps.php                 # Virtual Private Server
│   ├── mail-gateway.php        # Mail Gateway
│   ├── webhosting.php          # Webhosting
│   ├── about.php               # Über uns
│   ├── contact.php             # Kontaktseite
│   ├── contact-handler.php     # Kontaktformular-Backend
│   ├── impressum.php           # Impressum
│   ├── datenschutz.php         # Datenschutzerklärung
│   ├── agb.php                 # Allgemeine Geschäftsbedingungen
│   ├── 404.php                 # Fehlerseite 404
│   ├── 500.php                 # Fehlerseite 500
│   ├── robots.txt              # SEO Robots
│   ├── sitemap.xml             # SEO Sitemap
│   ├── favicon.svg             # Website Icon
│   ├── .htaccess               # Apache Konfiguration
│   ├── composer.json           # PHP Dependencies
│   ├── config/
│   │   ├── config.php          # Allgemeine Konfiguration
│   │   └── mail-config.php     # E-Mail-Konfiguration
│   ├── includes/
│   │   ├── header.php          # Header-Template
│   │   ├── footer.php          # Footer-Template
│   │   └── functions.php       # Hilfsfunktionen
│   └── assets/
│       ├── css/
│       │   └── style.css       # Hauptstyles
│       └── js/
│           ├── main.js         # Haupt-JavaScript
│           ├── contact.js      # Kontaktformular-Logik
│           └── cookie-consent.js # Cookie-Banner
├── docs/                       # Dokumentation
│   ├── KONTAKTFORMULAR-STATUS.md
│   ├── README-EMAIL-SETUP.md
│   ├── README-OPTIMIZATION.md
│   └── README-STRUCTURE.md
├── scripts/
│   └── test-email.php          # E-Mail-Test-Script
├── .github/
│   └── ISSUE_TEMPLATE/         # GitHub Issue Templates
├── .gitignore                  # Git Ignore Rules
└── README.md                   # Diese Datei
```

## 🎨 Design-System

### Farben
- **Background**: `#0d0821` (Dunkelviolett/Navy)
- **Primary**: `#ff51f9` (Neonpink)
- **Accent 1**: `#a348ff` (Lila)
- **Accent 2**: `#3978ff` (Blau)

### Typografie
- **Logo Font**: Russo One
- **Slogan Font**: Source Sans Pro
- **Body Font**: Inter
- **Weights**: 300, 400, 500, 600, 700

### Effekte
- **Glassmorphism**: `backdrop-filter: blur(10px)`
- **Transitions**: `0.3s ease-in-out`
- **Border Radius**: `0.75rem - 1.5rem`
- **Neon Effects**: Neonpink und Lila-Gradienten

## 🚀 Installation & Verwendung

### Voraussetzungen
- PHP 8.0 oder höher
- Composer (für PHPMailer)
- Apache mit mod_rewrite (für .htaccess)

### Installation

1. **Repository klonen**
   ```bash
   git clone <repository-url>
   cd HexaHost-Website
   ```

2. **PHP Dependencies installieren**
   ```bash
   cd public
   composer install
   ```

3. **Konfiguration anpassen**
   ```bash
   cp public/config/mail-config.php.example public/config/mail-config.php
   # Dann mail-config.php mit SMTP-Daten bearbeiten
   ```

4. **Lokaler Development Server**
   ```bash
   php -S localhost:8000 -t public
   ```

5. **Website öffnen**
   ```
   http://localhost:8000
   ```

### Produktion
Für den Produktivbetrieb `public/` als Webroot konfigurieren.

## 📧 E-Mail-Konfiguration

Die E-Mail-Funktionalität benötigt eine SMTP-Konfiguration in `public/config/mail-config.php`:

```php
define('SMTP_HOST', 'mail.example.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'noreply@hexahost.de');
define('SMTP_PASS', 'your-password');
```

Siehe `docs/README-EMAIL-SETUP.md` für detaillierte Anweisungen.

## 📱 Responsive Breakpoints

- **Desktop**: > 768px
- **Tablet**: 768px - 480px
- **Mobile**: < 480px

## ✨ Features im Detail

### Navigation
- Sticky Header mit Glaseffekt
- Dropdown-Menü für Produkte
- Mobile Navigation Toggle
- Smooth Scrolling

### Produktseiten
- Detaillierte Paketvergleiche
- Technische Spezifikationen
- Anwendungsbereiche
- Call-to-Action Buttons

### Kontaktformular
- Server-seitige Validierung
- E-Mail-Versand via SMTP
- CSRF-Schutz
- Auto-Fill basierend auf URL-Parametern
- FAQ-Sektion mit Accordion

### Rechtliche Seiten
- Vollständiges Impressum
- DSGVO-konforme Datenschutzerklärung
- Allgemeine Geschäftsbedingungen
- Cookie-Consent-Banner

### Fehlerseiten
- Individuelle 404-Seite
- Individuelle 500-Seite

## 🔧 Anpassungen

### Farben ändern
CSS Custom Properties in `:root` anpassen:
```css
:root {
    --background-color: #0d0821;
    --primary-color: #ff51f9;
    --accent-color-1: #a348ff;
    --accent-color-2: #3978ff;
    /* ... weitere Farben */
}
```

### Inhalte anpassen
Texte und Preise direkt in den PHP-Dateien ändern.

### Neue Pakete hinzufügen
Paket-Cards in den entsprechenden Produktseiten duplizieren und anpassen.

## 📈 SEO & Performance

- **Meta Tags** für alle Seiten
- **Structured Data** ready
- **Optimierte Bilder** (SVG Icons)
- **Lazy Loading** für Bilder
- **Minifizierte Assets** (optional)
- **robots.txt** und **sitemap.xml**

## 🌐 Browser-Unterstützung

- Chrome/Edge 88+
- Firefox 78+
- Safari 14+
- Mobile Browser (iOS Safari, Chrome Mobile)

## 📄 Lizenz

Alle Rechte vorbehalten HexaHost.de

## 🤝 Beitragen

Für Verbesserungsvorschläge oder Bug-Reports bitte ein Issue erstellen.

---

**HexaHost.de** - Zuverlässiges Hosting aus Niederbayern 🚀
