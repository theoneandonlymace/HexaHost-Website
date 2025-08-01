<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'Kontakt - HexaHost.de | Hosting aus Niederbayern';
$page_description = 'Kontaktieren Sie HexaHost.de - Ihr Hosting-Partner aus Niederbayern. Persönlicher Support und kompetente Beratung.';
$current_page = 'contact';
$additional_scripts = ['assets/js/contact.js'];

// Include header
includeHeader($page_title, $page_description, $current_page, $additional_scripts);
?>

<main>
    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <?php
                generateBreadcrumbs([
                    ['title' => 'Home', 'url' => 'index.php'],
                    ['title' => 'Kontakt', 'url' => '']
                ]);
                ?>
                <h1 class="contact-hero-title">
                    Kontakt zu <span class="highlight">HexaHost.de</span>
                </h1>
                <p class="contact-hero-description">
                    Haben Sie Fragen zu unseren Hosting-Lösungen? Benötigen Sie Beratung oder 
                    Support? Unser Team aus Niederbayern steht Ihnen gerne zur Verfügung.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Options -->
    <section class="contact-options">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-item glass-card">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <h3>E-Mail</h3>
                    <p>Schreiben Sie uns eine E-Mail - wir antworten schnell und kompetent.</p>
                    <a href="mailto:info@hexahost.de" class="contact-link">info@hexahost.de</a>
                </div>
                <div class="contact-item glass-card">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </div>
                    <h3>Telefon</h3>
                    <p>Für dringende Anliegen erreichen Sie uns auch telefonisch.</p>
                    <a href="tel:+4985119999999" class="contact-link">+49 851 1999 9999</a>
                    <p class="contact-hours">Mo-Fr: 9:00-18:00 Uhr</p>
                </div>
                <div class="contact-item glass-card">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <h3>Discord</h3>
                    <p>Direkter Support über unseren Discord für schnelle Hilfe.</p>
                    <button class="contact-link chat-btn" onclick="window.open('https://discord.gg/DEIN-EINLADUNGS-LINK', '_blank')">Discord beitreten</button>
                </div>
                
                <div class="contact-item glass-card">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3>Unser Standort</h3>
                    <p>HexaHost.de<br>Niederbayern<br>Deutschland</p>
                    <p class="contact-hours">Regional verwurzelt</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-container">
                <div class="form-header">
                    <h2 class="section-title">Kontaktformular</h2>
                    <p class="section-description">
                        Senden Sie uns eine Nachricht - wir melden uns schnellstmöglich bei Ihnen
                    </p>
                </div>
                <form class="contact-form glass-card" id="contactForm" action="contact-handler.php" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">Vorname *</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Nachname *</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">E-Mail-Adresse *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company">Unternehmen</label>
                        <input type="text" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="subject">Betreff *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Bitte wählen...</option>
                            <option value="allgemeine-anfrage">Allgemeine Anfrage</option>
                            <option value="vpc-anfrage">Virtual Private Container</option>
                            <option value="vps-anfrage">Virtual Private Server</option>
                            <option value="mail-gateway-anfrage">Mail Gateway</option>
                            <option value="webhosting-anfrage">Webhosting</option>
                            <option value="support">Technischer Support</option>
                            <option value="beratung">Persönliche Beratung</option>
                            <option value="migration">Migration/Umzug</option>
                            <option value="sonstiges">Sonstiges</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Ihre Nachricht *</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Beschreiben Sie Ihr Anliegen..."></textarea>
                    </div>
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            Ich habe die <a href="#" target="_blank">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten zu. *
                        </label>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Nachricht senden</button>
                        <button type="reset" class="btn btn-secondary">Formular zurücksetzen</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Häufig gestellte Fragen</h2>
                <p class="section-description">
                    Schnelle Antworten auf die wichtigsten Fragen
                </p>
            </div>
            <div class="faq-grid">
                <div class="faq-item glass-card">
                    <div class="faq-question">
                        <h3>Wie schnell erhalte ich eine Antwort?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Wir antworten in der Regel innerhalb von 2-4 Stunden auf E-Mail-Anfragen. Bei dringenden Anliegen nutzen Sie bitte unseren Live Chat oder rufen Sie uns an.</p>
                    </div>
                </div>
                <div class="faq-item glass-card">
                    <div class="faq-question">
                        <h3>Bieten Sie kostenlose Beratung an?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ja, unsere Beratung ist völlig kostenfrei und unverbindlich. Wir helfen Ihnen gerne bei der Auswahl der richtigen Hosting-Lösung für Ihre Bedürfnisse.</p>
                    </div>
                </div>
                <div class="faq-item glass-card">
                    <div class="faq-question">
                        <h3>Können Sie bei der Migration helfen?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Selbstverständlich! Wir unterstützen Sie beim Umzug von Ihrem bisherigen Hosting-Anbieter zu uns. Unser Migrations-Service ist in vielen Fällen kostenlos.</p>
                    </div>
                </div>
                <div class="faq-item glass-card">
                    <div class="faq-question">
                        <h3>Gibt es eine Geld-zurück-Garantie?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ja, wir bieten eine 30-Tage Geld-zurück-Garantie. Wenn Sie nicht zufrieden sind, erhalten Sie Ihr Geld ohne Wenn und Aber zurück.</p>
                    </div>
                </div>
                <div class="faq-item glass-card">
                    <div class="faq-question">
                        <h3>Wo stehen Ihre Server?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Alle unsere Server stehen in deutschen Rechenzentren. Das gewährleistet DSGVO-Konformität und niedrige Latenzzeiten für deutsche Nutzer.</p>
                    </div>
                </div>
                <div class="faq-item glass-card">
                    <div class="faq-question">
                        <h3>Bieten Sie 24/7 Support?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Unser direkter Support ist Mo-Fr von 9:00-18:00 Uhr verfügbar. Außerhalb dieser Zeiten überwachen automatische Systeme die Infrastruktur und bei kritischen Problemen sind wir auch außerhalb der Geschäftszeiten erreichbar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Response Time -->
    <section class="response-time">
        <div class="container">
            <div class="response-content glass-card">
                <div class="response-stats">
                    <div class="stat-item">
                        <span class="stat-number">< 2h</span>
                        <span class="stat-label">Durchschnittliche Antwortzeit</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Kundenzufriedenheit</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Monitoring</span>
                    </div>
                </div>
                <div class="response-text">
                    <h3>Schnelle Hilfe garantiert</h3>
                    <p>Unser Support-Team ist darauf spezialisiert, Ihnen schnell und effektiv zu helfen. Die meisten Anfragen werden innerhalb von 2 Stunden beantwortet.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Include footer
includeFooter();
?> 