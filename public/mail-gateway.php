<?php
require_once 'includes/functions.php';
require_once 'config/products-config.php';

// Produkt-Daten aus Config laden
$product = getProduct('mail-gateway');
$packages = getProductPackages('mail-gateway');

// Page configuration
$page_title = $product['page_title'];
$page_description = $product['page_description'];
$current_page = 'mail-gateway';

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main id="main-content">
    <!-- Product Hero -->
    <section class="product-hero">
        <div class="container">
            <div class="product-hero-content">
                <?php
                generateBreadcrumbs([
                    ['title' => 'Home', 'url' => 'index.php'],
                    ['title' => 'Mail Gateway', 'url' => '']
                ]);
                ?>
                <h1 class="product-hero-title">
                    Mail Gateway
                    <span class="highlight">für Unternehmen</span>
                </h1>
                <p class="product-hero-description">
                    Professionelle E-Mail-Infrastruktur mit maximalem Schutz vor Spam und Malware. 
                    Sichern Sie Ihre geschäftliche Kommunikation mit unseren Mail Gateway Lösungen.
                </p>
                <div class="product-hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>Spam & Virus Schutz</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span>E-Mail Archivierung</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                        <span>DSGVO-konform</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mail Gateway Packages -->
    <section class="packages">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mail Gateway Pakete</h2>
                <p class="section-description">
                    Wählen Sie das passende Mail Gateway Paket für Ihr Unternehmen
                </p>
            </div>
            <div class="packages-grid">
                <?php echo renderAllPackages('mail-gateway'); ?>
            </div>
        </div>
    </section>

    <!-- Security Features -->
    <section class="technical-details">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Sicherheit & Features</h2>
                <p class="section-description">
                    Maximaler Schutz für Ihre E-Mail-Kommunikation
                </p>
            </div>
            <div class="details-grid">
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>Spam-Schutz</h3>
                    <p>Mehrstufiger Spam-Filter mit KI-gestützter Erkennung filtert über 99% aller unerwünschten E-Mails zuverlässig heraus.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                    <h3>Virus-Schutz</h3>
                    <p>Echtzeit-Virenscanner prüft alle eingehenden und ausgehenden E-Mails auf Schadsoftware und blockiert gefährliche Anhänge.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                    </div>
                    <h3>Verschlüsselung</h3>
                    <p>TLS-Verschlüsselung für sichere Übertragung. Optional S/MIME und PGP für Ende-zu-Ende-verschlüsselte Kommunikation.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14,2 14,8 20,8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </div>
                    <h3>E-Mail Archivierung</h3>
                    <p>DSGVO-konforme Archivierung aller E-Mails. Revisionssichere Aufbewahrung für rechtliche Anforderungen.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases -->
    <section class="use-cases">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Einsatzbereiche</h2>
                <p class="section-description">
                    Perfekt für verschiedene Unternehmensanforderungen
                </p>
            </div>
            <div class="use-cases-grid">
                <div class="use-case-item glass-card">
                    <h3>Kleine Unternehmen</h3>
                    <p>Professionelle E-Mail-Adressen mit eigener Domain für ein seriöses Erscheinungsbild Ihres Unternehmens.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Mittelstand</h3>
                    <p>Skalierbare E-Mail-Infrastruktur mit Archivierung und erweitertem Spam-Schutz für wachsende Teams.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Großunternehmen</h3>
                    <p>Enterprise-Lösungen mit unbegrenzten Postfächern, langfristiger Archivierung und dedizierter Infrastruktur.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Behörden & Institutionen</h3>
                    <p>DSGVO-konforme E-Mail-Lösungen mit höchsten Sicherheitsstandards und revisionssicherer Archivierung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content glass-card">
                <h2>Bereit für professionelle E-Mail-Kommunikation?</h2>
                <p>Starten Sie noch heute mit unserem Mail Gateway</p>
                <div class="cta-actions">
                    <a href="contact.php?product=mail-gateway" class="btn btn-primary">Jetzt bestellen</a>
                    <a href="/contact" class="btn btn-secondary">Beratung anfordern</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Include footer
includeFooter();
?>
