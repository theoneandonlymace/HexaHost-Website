# HexaHost.de - Zentralisierte Header und Footer Struktur

## Übersicht

Die Website wurde umstrukturiert, um Header und Footer in zentralen Dateien zu speichern. Dies reduziert Code-Duplikation und macht die Wartung einfacher.

## Neue Struktur

### Zentrale Dateien

- `includes/header.php` - Enthält den HTML-Header mit Navigation
- `includes/footer.php` - Enthält den HTML-Footer mit Links und Copyright
- `includes/functions.php` - Helper-Funktionen für die Website

### Konvertierte Seiten

- `index.php` - Startseite (vorher index.html)
- `contact.php` - Kontaktseite (vorher contact.html)
- `vpc.php` - Virtual Private Container (vorher vpc.html)
- `vps.php` - Virtual Private Server (vorher vps.html)
- `webhosting.php` - Webhosting (vorher webhosting.html)
- `about.php` - Über uns (vorher about.html)

## Verwendung

### Neue Seite erstellen

1. Erstellen Sie eine neue `.php` Datei
2. Fügen Sie die Konfiguration am Anfang hinzu:

```php
<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'Seitentitel - HexaHost.de';
$page_description = 'Seitenbeschreibung für SEO';
$current_page = 'seitenname'; // Für aktive Navigation
$additional_scripts = ['assets/js/script.js']; // Optional

// Include header
includeHeader($page_title, $page_description, $current_page, $additional_scripts);
?>

<main>
    <!-- Ihr Seiteninhalt hier -->
</main>

<?php
// Include footer
includeFooter();
?>
```

### Breadcrumbs hinzufügen

```php
<?php
generateBreadcrumbs([
    ['title' => 'Home', 'url' => 'index.html'],
    ['title' => 'Produkte', 'url' => 'products.html'],
    ['title' => 'Aktuelle Seite', 'url' => '']
]);
?>
```

## Vorteile

1. **Weniger Code-Duplikation** - Header und Footer werden nur einmal gepflegt
2. **Einfachere Wartung** - Änderungen müssen nur an einer Stelle gemacht werden
3. **Konsistenz** - Alle Seiten haben automatisch den gleichen Header/Footer
4. **SEO-Optimierung** - Einfache Anpassung von Meta-Tags pro Seite
5. **Aktive Navigation** - Automatische Hervorhebung der aktuellen Seite

## Migration von HTML zu PHP

### Vorher (HTML)
```html
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Seitentitel</title>
    <!-- Meta-Tags, CSS, etc. -->
</head>
<body>
    <header>
        <!-- Navigation -->
    </header>
    <main>
        <!-- Inhalt -->
    </main>
    <footer>
        <!-- Footer -->
    </footer>
</body>
</html>
```

### Nachher (PHP)
```php
<?php
require_once 'includes/functions.php';
includeHeader('Seitentitel', 'Beschreibung', 'seitenname');
?>
<main>
    <!-- Inhalt -->
</main>
<?php includeFooter(); ?>
```

## Nächste Schritte

1. Weitere HTML-Seiten zu PHP konvertieren
2. .htaccess für saubere URLs konfigurieren
3. Session-Management für CSRF-Token hinzufügen
4. Caching für bessere Performance implementieren

## Dateien

- `includes/header.php` - Zentrale Header-Datei
- `includes/footer.php` - Zentrale Footer-Datei  
- `includes/functions.php` - Helper-Funktionen
- `index.php` - Startseite (PHP-Version)
- `contact.php` - Kontaktseite (PHP-Version)
- `vpc.php` - Virtual Private Container (PHP-Version)
- `vps.php` - Virtual Private Server (PHP-Version)
- `webhosting.php` - Webhosting (PHP-Version)
- `about.php` - Über uns (PHP-Version)
- `contact.html` - Alte HTML-Version (kann gelöscht werden)
- `index.html` - Alte HTML-Version (kann gelöscht werden)
- `vpc.html` - Alte HTML-Version (kann gelöscht werden)
- `vps.html` - Alte HTML-Version (kann gelöscht werden)
- `webhosting.html` - Alte HTML-Version (kann gelöscht werden)
- `about.html` - Alte HTML-Version (kann gelöscht werden) 