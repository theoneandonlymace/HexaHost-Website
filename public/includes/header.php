<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Performance: DNS Prefetch & Preconnect -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//cdn.hexahost.de">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.hexahost.de" crossorigin>
    
    <!-- Performance: Preload kritischer Ressourcen -->
    <link rel="preload" href="assets/css/style.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" as="style">
    
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'HexaHost.de - Zuverlässiges Hosting aus Niederbayern'; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($page_description) ? htmlspecialchars($page_description) : 'HexaHost.de - Zuverlässiges und preiswertes Hosting aus Niederbayern. VPS, VPC, Mail Gateway und Webhosting Lösungen.'; ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="HexaHost.de">
    <meta name="theme-color" content="#0d0821">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="HexaHost.de">
    <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : 'HexaHost.de'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? htmlspecialchars($page_description) : 'Zuverlässiges Hosting aus Niederbayern'; ?>">
    <meta property="og:locale" content="de_DE">
    
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Russo+One&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="apple-touch-icon" href="favicon.svg">
    
    <!-- Canonical URL (falls gesetzt) -->
    <?php if (isset($canonical_url)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    <?php endif; ?>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="/">
                        <img src="https://cdn.hexahost.de/assets/img/logo/8iFs123BynHQWHI5.png" alt="HexaHost.de Logo" class="logo-image">
                    </a>
                </div>
                <ul class="nav-menu">
                    <li><a href="/" class="nav-link <?php echo ($current_page === 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li class="nav-dropdown">
                        <a href="#" class="nav-link <?php echo (in_array($current_page, ['vpc', 'vps', 'mail-gateway', 'webhosting'])) ? 'active' : ''; ?>">Produkte</a>
                        <ul class="dropdown-menu">
                            <li><a href="/vpc" class="<?php echo ($current_page === 'vpc') ? 'active' : ''; ?>">Virtual Private Container</a></li>
                            <li><a href="/vps" class="<?php echo ($current_page === 'vps') ? 'active' : ''; ?>">Virtual Private Server</a></li>
                            <li><a href="/mail-gateway" class="<?php echo ($current_page === 'mail-gateway') ? 'active' : ''; ?>">Mail Gateway</a></li>
                            <li><a href="/webhosting" class="<?php echo ($current_page === 'webhosting') ? 'active' : ''; ?>">Webhosting</a></li>
                        </ul>
                    </li>
                    <li><a href="/about" class="nav-link <?php echo ($current_page === 'about') ? 'active' : ''; ?>">Über uns</a></li>
                    <li><a href="/contact" class="nav-link <?php echo ($current_page === 'contact') ? 'active' : ''; ?>">Kontakt</a></li>
                </ul>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header> 