<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'Webhosting - Klassisches Hosting für Websites | HexaHost.de';
$page_description = 'Webhosting mit PHP, MySQL und SSL-Zertifikaten. Klassisches Hosting für Websites ab 1,99€/Monat bei HexaHost.de';
$current_page = 'webhosting';

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main>
    <!-- Product Hero -->
    <section class="product-hero">
        <div class="container">
            <div class="product-hero-content">
                <?php
                generateBreadcrumbs([
                    ['title' => 'Home', 'url' => 'index.html'],
                    ['title' => 'Webhosting', 'url' => '']
                ]);
                ?>
                <h1 class="product-hero-title">
                    Webhosting
                    <span class="highlight">Alles für Ihre Website</span>
                </h1>
                <p class="product-hero-description">
                    Klassisches Webhosting mit allem, was Sie für eine erfolgreiche Website benötigen. 
                    PHP, MySQL, SSL-Zertifikate und E-Mail-Postfächer - alles inklusive.
                </p>
                <div class="product-hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20"/>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                        <span>Domain inklusive</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>SSL-Zertifikate</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span>E-Mail inklusive</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Webhosting Packages -->
    <section class="packages">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Webhosting Pakete</h2>
                <p class="section-description">
                    Von der ersten Website bis zum professionellen Online-Shop
                </p>
            </div>
            <div class="packages-grid">
                <!-- Starter Package -->
                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3 class="package-name">Webhosting Starter</h3>
                        <div class="package-price">
                            <span class="price">1,99€</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-specs">
                        <div class="spec-item">
                            <span class="spec-label">Webspace:</span>
                            <span class="spec-value">5 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Domains:</span>
                            <span class="spec-value">1</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">E-Mail-Postfächer:</span>
                            <span class="spec-value">5</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Datenbanken:</span>
                            <span class="spec-value">1 MySQL</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Traffic:</span>
                            <span class="spec-value">10 GB</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ cPanel/Webmin</div>
                        <div class="feature">✓ PHP 8.1</div>
                        <div class="feature">✓ SSL-Zertifikat</div>
                        <div class="feature">✓ E-Mail-Postfächer</div>
                        <div class="feature">✓ MySQL Datenbank</div>
                    </div>
                    <a href="contact.html?package=webhosting-starter" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <!-- Business Package -->
                <div class="package-card glass-card featured">
                    <div class="featured-badge">Beliebt</div>
                    <div class="package-header">
                        <h3 class="package-name">Webhosting Business</h3>
                        <div class="package-price">
                            <span class="price">4,99€</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-specs">
                        <div class="spec-item">
                            <span class="spec-label">Webspace:</span>
                            <span class="spec-value">20 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Domains:</span>
                            <span class="spec-value">5</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">E-Mail-Postfächer:</span>
                            <span class="spec-value">25</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Datenbanken:</span>
                            <span class="spec-value">5 MySQL</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Traffic:</span>
                            <span class="spec-value">50 GB</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ cPanel/Webmin</div>
                        <div class="feature">✓ PHP 8.1</div>
                        <div class="feature">✓ SSL-Zertifikat</div>
                        <div class="feature">✓ E-Mail-Postfächer</div>
                        <div class="feature">✓ MySQL Datenbanken</div>
                        <div class="feature">✓ Backup-Service</div>
                    </div>
                    <a href="contact.html?package=webhosting-business" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <!-- Professional Package -->
                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3 class="package-name">Webhosting Professional</h3>
                        <div class="package-price">
                            <span class="price">9,99€</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-specs">
                        <div class="spec-item">
                            <span class="spec-label">Webspace:</span>
                            <span class="spec-value">50 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Domains:</span>
                            <span class="spec-value">Unbegrenzt</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">E-Mail-Postfächer:</span>
                            <span class="spec-value">100</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Datenbanken:</span>
                            <span class="spec-value">Unbegrenzt</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Traffic:</span>
                            <span class="spec-value">200 GB</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ cPanel/Webmin</div>
                        <div class="feature">✓ PHP 8.1</div>
                        <div class="feature">✓ SSL-Zertifikat</div>
                        <div class="feature">✓ E-Mail-Postfächer</div>
                        <div class="feature">✓ MySQL Datenbanken</div>
                        <div class="feature">✓ Backup-Service</div>
                        <div class="feature">✓ Priority Support</div>
                    </div>
                    <a href="contact.html?package=webhosting-professional" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <!-- Enterprise Package -->
                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3 class="package-name">Webhosting Enterprise</h3>
                        <div class="package-price">
                            <span class="price">19,99€</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-specs">
                        <div class="spec-item">
                            <span class="spec-label">Webspace:</span>
                            <span class="spec-value">100 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Domains:</span>
                            <span class="spec-value">Unbegrenzt</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">E-Mail-Postfächer:</span>
                            <span class="spec-value">Unbegrenzt</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Datenbanken:</span>
                            <span class="spec-value">Unbegrenzt</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Traffic:</span>
                            <span class="spec-value">500 GB</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ cPanel/Webmin</div>
                        <div class="feature">✓ PHP 8.1</div>
                        <div class="feature">✓ SSL-Zertifikat</div>
                        <div class="feature">✓ E-Mail-Postfächer</div>
                        <div class="feature">✓ MySQL Datenbanken</div>
                        <div class="feature">✓ Backup-Service</div>
                        <div class="feature">✓ Priority Support</div>
                        <div class="feature">✓ Individuelle Konfiguration</div>
                    </div>
                    <a href="contact.html?package=webhosting-enterprise" class="btn btn-primary">Jetzt bestellen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Details -->
    <section class="technical-details">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Technische Details</h2>
                <p class="section-description">
                    Erfahren Sie mehr über unsere Webhosting-Technologie
                </p>
            </div>
            <div class="details-grid">
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14,2 14,8 20,8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10,9 9,9 8,9"/>
                        </svg>
                    </div>
                    <h3>cPanel/Webmin</h3>
                    <p>Benutzerfreundliche Verwaltungsoberfläche für einfache Website-Verwaltung und E-Mail-Konfiguration.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>SSL-Zertifikate</h3>
                    <p>Automatische SSL-Zertifikate für sichere HTTPS-Verbindungen und bessere Suchmaschinen-Rankings.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <h3>E-Mail-Hosting</h3>
                    <p>Professionelle E-Mail-Lösungen mit Spam-Schutz, Webmail und Mobile-Sync für alle Geräte.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                            <polyline points="7.5,4.21 12,6.81 16.5,4.21"/>
                            <polyline points="7.5,19.79 7.5,14.6 3,12"/>
                            <polyline points="21,12 16.5,14.6 16.5,19.79"/>
                        </svg>
                    </div>
                    <h3>MySQL Datenbanken</h3>
                    <p>Zuverlässige MySQL-Datenbanken für dynamische Websites, Content Management Systeme und Online-Shops.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases -->
    <section class="use-cases">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Anwendungsbereiche</h2>
                <p class="section-description">
                    Perfekt geeignet für verschiedene Website-Typen
                </p>
            </div>
            <div class="use-cases-grid">
                <div class="use-case-item glass-card">
                    <h3>Private Websites</h3>
                    <p>Persönliche Websites, Blogs und Portfolios mit einfacher Verwaltung und zuverlässiger Performance.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Business Websites</h3>
                    <p>Professionelle Unternehmenswebsites mit E-Mail-Hosting und SSL-Zertifikaten für Vertrauen.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Online-Shops</h3>
                    <p>E-Commerce-Lösungen mit MySQL-Datenbanken für Produktverwaltung und Bestellabwicklung.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Content Management</h3>
                    <p>WordPress, Joomla und andere CMS-Systeme mit optimierter PHP-Umgebung und Datenbanken.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content glass-card">
                <h2>Bereit für Ihr Webhosting?</h2>
                <p>Starten Sie noch heute mit professionellem Webhosting</p>
                <div class="cta-actions">
                    <a href="contact.html?product=webhosting" class="btn btn-primary">Jetzt bestellen</a>
                    <a href="contact.html" class="btn btn-secondary">Beratung anfordern</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Include footer
includeFooter();
?> 