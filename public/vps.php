<?php
require_once 'includes/functions.php';
require_once 'config/products-config.php';

// Produkt-Daten aus Config laden
$product = getProduct('vps');
$packages = getProductPackages('vps');

// Page configuration
$page_title = $product['page_title'];
$page_description = $product['page_description'];
$current_page = 'vps';

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
                    ['title' => 'Virtual Private Server', 'url' => '']
                ]);
                ?>
                <h1 class="product-hero-title">
                    Virtual Private Server
                    <span class="highlight">auf Proxmox KVM</span>
                </h1>
                <p class="product-hero-description">
                    Maximale Flexibilität und Kontrolle mit vollwertiger KVM-Virtualisierung. 
                    Installieren Sie jedes Betriebssystem und genießen Sie vollständigen Root-Zugriff.
                </p>
                <div class="product-hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                        <span>Vollwertiger Server</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                        <span>Alle Betriebssysteme</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 12l2 2 4-4"/>
                            <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"/>
                            <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"/>
                        </svg>
                        <span>Root-Zugriff</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VPS Packages -->
    <section class="packages">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">VPS Pakete</h2>
                <p class="section-description">
                    Wählen Sie das perfekte VPS-Paket für Ihre Anforderungen
                </p>
            </div>
            <div class="packages-grid">
                <?php echo renderAllPackages('vps'); ?>
            </div>
        </div>
    </section>

    <!-- Technical Details -->
    <section class="technical-details">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Technische Details</h2>
                <p class="section-description">
                    Erfahren Sie mehr über unsere KVM-Virtualisierung
                </p>
            </div>
            <div class="details-grid">
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h3>Proxmox KVM</h3>
                    <p>Vollwertige Hardware-Virtualisierung mit Kernel-based Virtual Machine (KVM) für maximale Performance und Kompatibilität.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3>Alle Betriebssysteme</h3>
                    <p>Installieren Sie Linux, Windows, BSD oder andere Betriebssysteme Ihrer Wahl - volle Flexibilität für Ihre Anwendungen.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 12l2 2 4-4"/>
                            <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"/>
                            <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"/>
                        </svg>
                    </div>
                    <h3>Vollständige Kontrolle</h3>
                    <p>Root-Zugriff und vollständige Kontrolle über Ihren Server - installieren Sie Software und konfigurieren Sie alles nach Ihren Wünschen.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>Enterprise-Hardware</h3>
                    <p>Moderne Server mit Intel/AMD Prozessoren, NVMe SSD-Speicher und redundanter Netzwerk-Anbindung für höchste Zuverlässigkeit.</p>
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
                    Perfekt geeignet für verschiedene Szenarien
                </p>
            </div>
            <div class="use-cases-grid">
                <div class="use-case-item glass-card">
                    <h3>Web-Server</h3>
                    <p>Hosting von Websites, Web-Anwendungen und APIs mit vollständiger Kontrolle über die Server-Umgebung.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Datenbank-Server</h3>
                    <p>Dedizierte Datenbank-Server für MySQL, PostgreSQL, MongoDB oder andere Datenbank-Systeme.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Game-Server</h3>
                    <p>Hosting von Game-Servern mit optimierter Performance für Multiplayer-Spiele und Communities.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Entwicklungsumgebung</h3>
                    <p>Isolierte Entwicklungsumgebungen für Teams mit vollständiger Kontrolle über Tools und Konfiguration.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content glass-card">
                <h2>Bereit für Ihren VPS?</h2>
                <p>Starten Sie noch heute mit einem Virtual Private Server</p>
                <div class="cta-actions">
                                    <a href="contact.php?product=vps" class="btn btn-primary">Jetzt bestellen</a>
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
