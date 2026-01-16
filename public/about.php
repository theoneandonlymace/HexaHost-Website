<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'Über uns - HexaHost.de | Hosting aus Niederbayern';
$page_description = 'Erfahren Sie mehr über HexaHost.de - Ihr zuverlässiger Hosting-Partner aus Niederbayern. Moderne Technologie mit persönlichem Service.';
$current_page = 'about';

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main id="main-content">
    <!-- About Hero -->
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content">
                <?php
                generateBreadcrumbs([
                    ['title' => 'Home', 'url' => 'index.php'],
                    ['title' => 'Über uns', 'url' => '']
                ]);
                ?>
                <h1 class="about-hero-title">
                    Über <span class="highlight">HexaHost.de</span>
                </h1>
                <p class="about-hero-description">
                    Wir sind Ihr zuverlässiger Partner für Hosting-Lösungen aus Niederbayern. 
                    Mit modernster Technologie und persönlichem Service sorgen wir dafür, 
                    dass Ihre Online-Projekte erfolgreich sind.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="company-story">
        <div class="container">
            <div class="story-content">
                <div class="story-text">
                    <h2 class="section-title">Unsere Geschichte</h2>
                    <p>
                        HexaHost.de wurde mit der Vision gegründet, zuverlässiges und preiswertes 
                        Hosting direkt aus Deutschland anzubieten. Als regionales Unternehmen aus 
                        Niederbayern verstehen wir die Bedürfnisse unserer Kunden und bieten 
                        persönlichen Support in deutscher Sprache.
                    </p>
                    <p>
                        Unsere Expertise liegt in der Bereitstellung moderner Hosting-Lösungen 
                        auf Basis von Proxmox-Technologie. Von Virtual Private Containern bis 
                        hin zu klassischem Webhosting - wir haben für jeden Bedarf die passende 
                        Lösung.
                    </p>
                    <p>
                        Vertrauen, Zuverlässigkeit und faire Preise sind die Grundpfeiler unseres 
                        Unternehmens. Wir setzen auf transparente Kommunikation und ehrliche 
                        Beratung, damit Sie die beste Lösung für Ihre Anforderungen erhalten.
                    </p>
                </div>
                <div class="story-visual glass-card">
                    <div class="location-info">
                        <div class="location-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="location-details">
                            <h3>Standort</h3>
                            <p>Niederbayern, Deutschland</p>
                            <p>Regional verwurzelt, global verfügbar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="values">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Unsere Werte</h2>
                <p class="section-description">
                    Das, was uns ausmacht und antreibt
                </p>
            </div>
            <div class="values-grid">
                <div class="value-item glass-card">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>Zuverlässigkeit</h3>
                    <p>99.9% Uptime-Garantie und 24/7 Monitoring für maximale Verfügbarkeit Ihrer Services.</p>
                </div>
                <div class="value-item glass-card">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 7l-5-5-5 5M17 17l-5 5-5-5"/>
                        </svg>
                    </div>
                    <h3>Faire Preise</h3>
                    <p>Transparente Preisgestaltung ohne versteckte Kosten und flexible Tarifmodelle.</p>
                </div>
                <div class="value-item glass-card">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <h3>Persönlicher Support</h3>
                    <p>Direkter Kontakt zu unserem Team aus Niederbayern in deutscher Sprache.</p>
                </div>
                <div class="value-item glass-card">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                    </div>
                    <h3>Innovation</h3>
                    <p>Moderne Technologie auf Proxmox-Basis für beste Performance und Skalierbarkeit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Unser Team</h2>
                <p class="section-description">
                    Die Menschen hinter HexaHost.de
                </p>
            </div>
            <div class="team-content">
                <div class="team-text">
                    <p>
                        Unser Team besteht aus erfahrenen IT-Experten mit langjähriger Erfahrung 
                        im Bereich Hosting und Server-Management. Wir sind leidenschaftlich 
                        daran interessiert, Ihnen die bestmöglichen Hosting-Lösungen zu bieten.
                    </p>
                    <p>
                        Als regionales Unternehmen aus Niederbayern kennen wir die lokalen 
                        Bedürfnisse und bieten persönlichen Support in deutscher Sprache. 
                        Unser Ziel ist es, Ihnen nicht nur technische Lösungen, sondern 
                        auch eine echte Partnerschaft zu bieten.
                    </p>
                </div>
                <div class="team-stats glass-card">
                    <div class="stat-item">
                        <span class="stat-number">5+</span>
                        <span class="stat-label">Jahre Erfahrung</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Zufriedene Kunden</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">99.9%</span>
                        <span class="stat-label">Uptime</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology -->
    <section class="technology">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Unsere Technologie</h2>
                <p class="section-description">
                    Moderne Infrastruktur für beste Performance
                </p>
            </div>
            <div class="tech-grid">
                <div class="tech-item glass-card">
                    <div class="tech-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h3>Proxmox VE</h3>
                    <p>Enterprise-Grade Virtualisierung mit Proxmox Virtual Environment für maximale Effizienz und Sicherheit.</p>
                </div>
                <div class="tech-item glass-card">
                    <div class="tech-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20M17 7l-5-5-5 5M17 17l-5 5-5-5"/>
                        </svg>
                    </div>
                    <h3>NVMe SSD</h3>
                    <p>Hochperformante NVMe SSD-Speicher für schnellste Ladezeiten und optimale I/O-Performance.</p>
                </div>
                <div class="tech-item glass-card">
                    <div class="tech-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3>DDoS Protection</h3>
                    <p>Umfassender DDoS-Schutz für maximale Sicherheit und Verfügbarkeit Ihrer Services.</p>
                </div>
                <div class="tech-item glass-card">
                    <div class="tech-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                            <polyline points="7.5,4.21 12,6.81 16.5,4.21"/>
                            <polyline points="7.5,19.79 7.5,14.6 3,12"/>
                            <polyline points="21,12 16.5,14.6 16.5,19.79"/>
                        </svg>
                    </div>
                    <h3>Redundante Infrastruktur</h3>
                    <p>Mehrfach redundante Systeme für höchste Verfügbarkeit und Ausfallsicherheit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content glass-card">
                <h2>Bereit für die Zusammenarbeit?</h2>
                <p>Lassen Sie uns gemeinsam Ihre Hosting-Lösung entwickeln</p>
                <div class="cta-actions">
                    <a href="/contact" class="btn btn-primary">Kontakt aufnehmen</a>
                    <a href="/vpc" class="btn btn-secondary">Produkte entdecken</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Include footer
includeFooter();
?> 