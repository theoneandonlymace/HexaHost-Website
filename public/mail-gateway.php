<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'Mail Gateway - HexaHost.de';
$page_description = 'Professionelle E-Mail-Lösungen für Unternehmen. Spam-Schutz, Virus-Schutz und E-Mail-Archivierung von HexaHost.de';
$current_page = 'mail-gateway';

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main>
    <!-- Breadcrumb -->
    <div class="container">
        <?php
        generateBreadcrumbs([
            ['title' => 'Home', 'url' => 'index.php'],
            ['title' => 'Mail Gateway', 'url' => '']
        ]);
        ?>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Professionelle <span class="highlight">E-Mail-Lösungen</span>
                </h1>
                <p class="hero-description">
                    Schützen Sie Ihr Unternehmen mit unseren professionellen Mail Gateway-Lösungen. 
                    Von Spam-Schutz bis hin zu E-Mail-Archivierung - wir haben die perfekte Lösung 
                    für Ihre E-Mail-Sicherheit.
                </p>
                <div class="hero-actions">
                    <a href="#packages" class="btn btn-primary">Pakete entdecken</a>
                    <a href="contact.php" class="btn btn-secondary">Beratung anfordern</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-card glass-card">
                    <div class="server-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <h3>99.9% Spam-Schutz</h3>
                    <p>Zuverlässige E-Mail-Sicherheit</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Warum Mail Gateway?</h2>
                <p class="section-description">
                    Professionelle E-Mail-Sicherheit für Ihr Unternehmen
                </p>
            </div>
            <div class="features-grid">
                <div class="feature-card glass-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>Spam-Schutz</h3>
                    <p>Fortschrittliche Spam-Filterung mit maschinellem Lernen</p>
                </div>
                <div class="feature-card glass-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3>Virus-Schutz</h3>
                    <p>Echtzeit-Virus-Erkennung und -Entfernung</p>
                </div>
                <div class="feature-card glass-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14,2 14,8 20,8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10,9 9,9 8,9"/>
                        </svg>
                    </div>
                    <h3>E-Mail-Archivierung</h3>
                    <p>Sichere und konforme E-Mail-Archivierung</p>
                </div>
                <div class="feature-card glass-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Professioneller Support rund um die Uhr</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="packages">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Unsere Mail Gateway-Pakete</h2>
                <p class="section-description">
                    Wählen Sie das perfekte Paket für Ihre E-Mail-Sicherheit
                </p>
            </div>
            <div class="packages-grid">
                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3>Starter</h3>
                        <div class="package-price">
                            <span class="price">€29</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ Bis zu 1.000 E-Mails/Tag</div>
                        <div class="feature">✓ Spam-Schutz</div>
                        <div class="feature">✓ Virus-Schutz</div>
                        <div class="feature">✓ E-Mail-Archivierung (30 Tage)</div>
                        <div class="feature">✓ SSL/TLS-Verschlüsselung</div>
                        <div class="feature">✓ 24/7 Monitoring</div>
                    </div>
                    <a href="contact.php?package=mail-gateway-starter" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <div class="package-card glass-card featured">
                    <div class="package-badge">Beliebt</div>
                    <div class="package-header">
                        <h3>Business</h3>
                        <div class="package-price">
                            <span class="price">€59</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ Bis zu 5.000 E-Mails/Tag</div>
                        <div class="feature">✓ Erweiterter Spam-Schutz</div>
                        <div class="feature">✓ Virus-Schutz</div>
                        <div class="feature">✓ E-Mail-Archivierung (90 Tage)</div>
                        <div class="feature">✓ SSL/TLS-Verschlüsselung</div>
                        <div class="feature">✓ Backup-Service</div>
                        <div class="feature">✓ Snapshot-Funktion</div>
                    </div>
                    <a href="contact.php?package=mail-gateway-business" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3>Professional</h3>
                        <div class="package-price">
                            <span class="price">€99</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ Bis zu 15.000 E-Mails/Tag</div>
                        <div class="feature">✓ Premium Spam-Schutz</div>
                        <div class="feature">✓ Virus-Schutz</div>
                        <div class="feature">✓ E-Mail-Archivierung (1 Jahr)</div>
                        <div class="feature">✓ SSL/TLS-Verschlüsselung</div>
                        <div class="feature">✓ Backup-Service</div>
                        <div class="feature">✓ Priority Support</div>
                    </div>
                    <a href="contact.php?package=mail-gateway-professional" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3>Enterprise</h3>
                        <div class="package-price">
                            <span class="price">€199</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ Unbegrenzte E-Mails/Tag</div>
                        <div class="feature">✓ Enterprise Spam-Schutz</div>
                        <div class="feature">✓ Virus-Schutz</div>
                        <div class="feature">✓ E-Mail-Archivierung (unbegrenzt)</div>
                        <div class="feature">✓ SSL/TLS-Verschlüsselung</div>
                        <div class="feature">✓ Backup-Service</div>
                        <div class="feature">✓ Individuelle Konfiguration</div>
                    </div>
                    <a href="contact.php?package=mail-gateway-enterprise" class="btn btn-primary">Jetzt bestellen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Bereit für professionelle E-Mail-Sicherheit?</h2>
                <p>Starten Sie noch heute mit unserem Mail Gateway</p>
                <div class="cta-actions">
                    <a href="contact.php?product=mail-gateway" class="btn btn-primary">Jetzt bestellen</a>
                    <a href="contact.php" class="btn btn-secondary">Beratung anfordern</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php includeFooter(); ?> 