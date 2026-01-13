<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'HexaHost.de - Zuverlässiges Hosting aus Niederbayern';
$page_description = 'HexaHost.de - Zuverlässiges und preiswertes Hosting aus Niederbayern. VPS, VPC, Mail Gateway und Webhosting Lösungen.';
$current_page = 'home';

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Zuverlässiges Hosting aus <span class="highlight">Niederbayern</span>
                </h1>
                <p class="hero-description">
                    Entdecken Sie unsere preiswerten und zuverlässigen Hosting-Lösungen. 
                    Von Virtual Private Servern bis hin zu Webhosting - wir haben die 
                    perfekte Lösung für Ihre Bedürfnisse.
                </p>
                <div class="hero-actions">
                    <a href="#products" class="btn btn-primary">Produkte entdecken</a>
                    <a href="/contact" class="btn btn-secondary">Kontakt aufnehmen</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-card glass-card">
                    <div class="server-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h3>99.9% Uptime</h3>
                    <p>Zuverlässige Infrastruktur</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Unsere Hosting-Lösungen</h2>
                <p class="section-description">
                    Modernste Technologie auf Proxmox-Basis für maximale Performance und Zuverlässigkeit
                </p>
            </div>
            <div class="products-grid">
                <div class="product-card glass-card">
                    <div class="product-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 7V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v3"/>
                            <path d="M4 7h16"/>
                            <path d="M4 7v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7"/>
                            <circle cx="9" cy="11" r="2"/>
                            <path d="m13 13 4 4"/>
                        </svg>
                    </div>
                    <h3>Virtual Private Container</h3>
                    <p>Leichtgewichtige Container-Lösungen für optimale Ressourcennutzung</p>
                    <ul class="product-features">
                        <li>Proxmox LXC Container</li>
                        <li>SSD Storage</li>
                        <li>DDoS Protection</li>
                        <li>99.9% Uptime</li>
                    </ul>
                    <a href="/vpc" class="btn btn-primary">Mehr erfahren</a>
                </div>
                <div class="product-card glass-card">
                    <div class="product-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h3>Virtual Private Server</h3>
                    <p>Vollständige Server-Umgebung mit maximaler Kontrolle</p>
                    <ul class="product-features">
                        <li>Dedizierte Ressourcen</li>
                        <li>Root-Zugriff</li>
                        <li>Backup-Service</li>
                        <li>24/7 Monitoring</li>
                    </ul>
                    <a href="/vps" class="btn btn-primary">Mehr erfahren</a>
                </div>
                <div class="product-card glass-card">
                    <div class="product-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <h3>Mail Gateway</h3>
                    <p>Professionelle E-Mail-Lösungen für Unternehmen</p>
                    <ul class="product-features">
                        <li>Spam & Virus Schutz</li>
                        <li>E-Mail Archivierung</li>
                        <li>Webmail Interface</li>
                        <li>Mobile Sync</li>
                    </ul>
                    <a href="/mail-gateway" class="btn btn-primary">Mehr erfahren</a>
                </div>
                <div class="product-card glass-card">
                    <div class="product-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14,2 14,8 20,8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10,9 9,9 8,9"/>
                        </svg>
                    </div>
                    <h3>Webhosting</h3>
                    <p>Einfache und zuverlässige Webhosting-Lösungen</p>
                    <ul class="product-features">
                        <li>cPanel/Webmin</li>
                        <li>SSL Zertifikate</li>
                        <li>Automatische Backups</li>
                        <li>PHP & MySQL</li>
                    </ul>
                    <a href="/webhosting" class="btn btn-primary">Mehr erfahren</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Warum HexaHost.de?</h2>
                <p class="section-description">
                    Wir bieten Ihnen mehr als nur Hosting - wir bieten Ihnen eine Partnerschaft
                </p>
            </div>
            <div class="features-grid">
                <div class="feature-item glass-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 7l-5-5-5 5M17 17l-5 5-5-5"/>
                        </svg>
                    </div>
                    <h3>Faire Preise</h3>
                    <p>Transparent kalkulierte Preise ohne versteckte Kosten</p>
                </div>
                <div class="feature-item glass-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 17v6"/>
                            <path d="M3.75 6.75l4.5 4.5"/>
                            <path d="M15.75 15.75l4.5 4.5"/>
                            <path d="M1 12h6"/>
                            <path d="M17 12h6"/>
                            <path d="M3.75 17.25l4.5-4.5"/>
                            <path d="M15.75 8.25l4.5-4.5"/>
                        </svg>
                    </div>
                    <h3>Performance</h3>
                    <p>Modernste Hardware und optimierte Konfigurationen für beste Leistung</p>
                </div>
                <div class="feature-item glass-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 7l-5-5-5 5M17 17l-5 5-5-5"/>
                        </svg>
                    </div>
                    <h3>Faire Preise</h3>
                    <p>Transparent kalkulierte Preise ohne versteckte Kosten</p>
                </div>
                <div class="feature-item glass-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <h3>Support aus Bayern</h3>
                    <p>Persönlicher Support direkt aus Niederbayern in deutscher Sprache</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content glass-card">
                <h2>Bereit für zuverlässiges Hosting?</h2>
                <p>Starten Sie noch heute mit HexaHost und erleben Sie den Unterschied</p>
                <div class="cta-actions">
                    <a href="/contact" class="btn btn-primary">Jetzt starten</a>
                    <a href="/about" class="btn btn-secondary">Mehr über uns</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Include footer
includeFooter();
?> 