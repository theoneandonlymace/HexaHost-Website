# HexaHost.de - Hosting Website

Eine moderne und umfangreiche Website für das Hosting-Unternehmen HexaHost.de aus Niederbayern.

## 🚀 Features

- **Moderne Glasmorphism-Optik** mit lila/violetten Farbschema
- **Responsive Design** für alle Geräte
- **Vollständige Produktpräsentation** für alle Hosting-Lösungen
- **Interaktive Kontaktformulare** mit Validierung
- **SEO-optimiert** mit Meta-Tags, Sitemap und robots.txt
- **Accessibility-Features** für bessere Nutzbarkeit

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

- **HTML5** - Semantisches Markup
- **CSS3** - Moderne Styles mit Custom Properties
- **Vanilla JavaScript** - Keine Framework-Dependencies
- **Glassmorphism Design** - Moderne Glaseffekte
- **CSS Grid & Flexbox** - Responsive Layouts
- **Inter Font** - Moderne Typografie

## 📁 Projektstruktur

```
HexaHost/
├── public/
│   ├── index.html              # Startseite
│   ├── vpc.html                # Virtual Private Container
│   ├── vps.html                # Virtual Private Server
│   ├── mail-gateway.html       # Mail Gateway
│   ├── webhosting.html         # Webhosting
│   ├── about.html              # Über uns
│   ├── contact.html            # Kontakt
│   ├── robots.txt              # SEO Robots
│   ├── sitemap.xml             # SEO Sitemap
│   ├── favicon.svg             # Website Icon
│   └── assets/
│       ├── css/
│       │   └── style.css       # Hauptstyles
│       └── js/
│           ├── main.js         # Haupt-JavaScript
│           └── contact.js      # Kontaktformular-Logik
├── .cursorrules                # Entwicklungsrichtlinien
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

1. **Repository klonen**
   ```bash
   git clone <repository-url>
   cd HexaHost
   ```

2. **Lokaler Development Server**
   ```bash
   # Mit Python
   python -m http.server 8000
   
   # Mit Node.js
   npx serve public
   
   # Mit PHP
   php -S localhost:8000 -t public
   ```

3. **Website öffnen**
   ```
   http://localhost:8000
   ```

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
- Validierung in Echtzeit
- Auto-Fill basierend auf URL-Parametern
- FAQ-Sektion mit Accordion
- Multiple Kontaktoptionen

### Interaktivität
- Hover-Effekte auf Karten
- Parallax Hero-Section
- Smooth Animations
- Loading States

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
Texte und Preise direkt in den HTML-Dateien ändern.

### Neue Pakete hinzufügen
Paket-Cards in den entsprechenden Produktseiten duplizieren und anpassen.

## 📈 SEO & Performance

- **Meta Tags** für alle Seiten
- **Structured Data** ready
- **Optimierte Bilder** (SVG Icons)
- **Lazy Loading** für Bilder
- **Minifizierte Assets** (optional)

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