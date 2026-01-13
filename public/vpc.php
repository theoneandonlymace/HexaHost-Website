<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'Virtual Private Container - Effiziente LXC Container | HexaHost.de';
$page_description = 'Virtual Private Container auf Proxmox LXC-Basis. Effiziente und preiswerte Container-Lösungen ab 4,99€/Monat bei HexaHost.de';
$current_page = 'vpc';

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
                    ['title' => 'Home', 'url' => 'index.php'],
                    ['title' => 'Virtual Private Container', 'url' => '']
                ]);
                ?>
                <h1 class="product-hero-title">
                    Virtual Private Container
                    <span class="highlight">auf Proxmox LXC</span>
                </h1>
                <p class="product-hero-description">
                    Erleben Sie die Effizienz von Linux-Containern mit der Zuverlässigkeit 
                    von Proxmox. Unsere VPC-Lösungen bieten optimale Performance bei 
                    minimalem Ressourcenverbrauch.
                </p>
                <div class="product-hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12,6 12,12 16,14"/>
                        </svg>
                        <span>Sofortige Bereitstellung</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                        <span>99.9% Uptime</span>
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                        <span>Maximale Performance</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VPC Packages -->
    <section class="packages">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">VPC Pakete</h2>
                <p class="section-description">
                    Wählen Sie das perfekte Container-Paket für Ihre Anforderungen
                </p>
            </div>
            <div class="packages-grid">
                <!-- Starter Package -->
                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3 class="package-name">VPC Starter</h3>
                        <div class="package-price">
                            <span class="price">4,99€</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-specs">
                        <div class="spec-item">
                            <span class="spec-label">CPU Kerne:</span>
                            <span class="spec-value">1 vCore</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">RAM:</span>
                            <span class="spec-value">1 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">SSD Speicher:</span>
                            <span class="spec-value">20 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Traffic:</span>
                            <span class="spec-value">1 TB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">IPv4 Adressen:</span>
                            <span class="spec-value">1</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ Proxmox LXC Container</div>
                        <div class="feature">✓ Root-Zugriff</div>
                        <div class="feature">✓ SSH-Zugang</div>
                        <div class="feature">✓ Backup inklusive</div>
                        <div class="feature">✓ 24/7 Monitoring</div>
                    </div>
                                            <a href="contact.php?package=vpc-starter" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <!-- Business Package -->
                <div class="package-card glass-card featured">
                    <div class="featured-badge">Beliebt</div>
                    <div class="package-header">
                        <h3 class="package-name">VPC Business</h3>
                        <div class="package-price">
                            <span class="price">9,99€</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-specs">
                        <div class="spec-item">
                            <span class="spec-label">CPU Kerne:</span>
                            <span class="spec-value">2 vCores</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">RAM:</span>
                            <span class="spec-value">4 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">SSD Speicher:</span>
                            <span class="spec-value">80 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Traffic:</span>
                            <span class="spec-value">3 TB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">IPv4 Adressen:</span>
                            <span class="spec-value">1</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ Proxmox LXC Container</div>
                        <div class="feature">✓ Root-Zugriff</div>
                        <div class="feature">✓ SSH-Zugang</div>
                        <div class="feature">✓ Tägliches Backup</div>
                        <div class="feature">✓ 24/7 Monitoring</div>
                        <div class="feature">✓ Snapshot-Funktion</div>
                    </div>
                                            <a href="contact.php?package=vpc-business" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <!-- Professional Package -->
                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3 class="package-name">VPC Professional</h3>
                        <div class="package-price">
                            <span class="price">19,99€</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-specs">
                        <div class="spec-item">
                            <span class="spec-label">CPU Kerne:</span>
                            <span class="spec-value">4 vCores</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">RAM:</span>
                            <span class="spec-value">8 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">SSD Speicher:</span>
                            <span class="spec-value">160 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Traffic:</span>
                            <span class="spec-value">5 TB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">IPv4 Adressen:</span>
                            <span class="spec-value">2</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ Proxmox LXC Container</div>
                        <div class="feature">✓ Root-Zugriff</div>
                        <div class="feature">✓ SSH-Zugang</div>
                        <div class="feature">✓ Stündliches Backup</div>
                        <div class="feature">✓ 24/7 Monitoring</div>
                        <div class="feature">✓ Snapshot-Funktion</div>
                        <div class="feature">✓ Priority Support</div>
                    </div>
                                            <a href="contact.php?package=vpc-professional" class="btn btn-primary">Jetzt bestellen</a>
                </div>

                <!-- Enterprise Package -->
                <div class="package-card glass-card">
                    <div class="package-header">
                        <h3 class="package-name">VPC Enterprise</h3>
                        <div class="package-price">
                            <span class="price">39,99€</span>
                            <span class="period">/Monat</span>
                        </div>
                    </div>
                    <div class="package-specs">
                        <div class="spec-item">
                            <span class="spec-label">CPU Kerne:</span>
                            <span class="spec-value">8 vCores</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">RAM:</span>
                            <span class="spec-value">16 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">SSD Speicher:</span>
                            <span class="spec-value">320 GB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Traffic:</span>
                            <span class="spec-value">10 TB</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">IPv4 Adressen:</span>
                            <span class="spec-value">3</span>
                        </div>
                    </div>
                    <div class="package-features">
                        <div class="feature">✓ Proxmox LXC Container</div>
                        <div class="feature">✓ Root-Zugriff</div>
                        <div class="feature">✓ SSH-Zugang</div>
                        <div class="feature">✓ Stündliches Backup</div>
                        <div class="feature">✓ 24/7 Monitoring</div>
                        <div class="feature">✓ Snapshot-Funktion</div>
                        <div class="feature">✓ Priority Support</div>
                        <div class="feature">✓ Individuelle Konfiguration</div>
                    </div>
                                            <a href="contact.php?package=vpc-enterprise" class="btn btn-primary">Jetzt bestellen</a>
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
                    Erfahren Sie mehr über unsere Container-Technologie
                </p>
            </div>
            <div class="details-grid">
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 7V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v3"/>
                            <path d="M4 7h16"/>
                            <path d="M4 7v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7"/>
                        </svg>
                    </div>
                    <h3>Proxmox LXC</h3>
                    <p>Modernste Container-Virtualisierung auf Basis von Linux Containers (LXC) mit Proxmox-Management für maximale Effizienz.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 1v6m0 6v6"/>
                        </svg>
                    </div>
                    <h3>High Performance</h3>
                    <p>Enterprise-Hardware mit NVMe SSD-Speicher und modernen Intel/AMD Prozessoren für beste Performance.</p>
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
                    <h3>Skalierbarkeit</h3>
                    <p>Einfache Anpassung der Ressourcen je nach Bedarf - CPU, RAM und Speicher können flexibel skaliert werden.</p>
                </div>
                <div class="detail-card glass-card">
                    <div class="detail-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>Sicherheit</h3>
                    <p>Isolierte Container-Umgebung mit automatischen Sicherheitsupdates und regelmäßigen Backups.</p>
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
                    <h3>Web-Entwicklung</h3>
                    <p>Ideale Testumgebung für Entwickler mit schneller Bereitstellung und flexibler Konfiguration.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Microservices</h3>
                    <p>Effiziente Containerisierung von Microservices mit optimaler Ressourcennutzung.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>CI/CD Pipelines</h3>
                    <p>Automatisierte Build- und Deployment-Prozesse in isolierten Container-Umgebungen.</p>
                </div>
                <div class="use-case-item glass-card">
                    <h3>Backup-Server</h3>
                    <p>Zuverlässige Backup-Lösungen mit redundanter Speicherung und automatischer Überwachung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content glass-card">
                <h2>Bereit für Ihren VPC?</h2>
                <p>Starten Sie noch heute mit einem Virtual Private Container</p>
                <div class="cta-actions">
                                    <a href="contact.php?product=vpc" class="btn btn-primary">Jetzt bestellen</a>
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