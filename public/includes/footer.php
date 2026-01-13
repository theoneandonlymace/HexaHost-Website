    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>HexaHost.de</h4>
                    <p>Zuverlässiges Hosting aus Niederbayern</p>
                    <div class="footer-location">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>Niederbayern, Deutschland</span>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Produkte</h4>
                    <ul>
                        <li><a href="/vpc">Virtual Private Container</a></li>
                        <li><a href="/vps">Virtual Private Server</a></li>
                        <li><a href="/mail-gateway">Mail Gateway</a></li>
                        <li><a href="/webhosting">Webhosting</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Unternehmen</h4>
                    <ul>
                        <li><a href="/about">Über uns</a></li>
                        <li><a href="/contact">Kontakt</a></li>
                        <li><a href="/impressum">Impressum</a></li>
                        <li><a href="/datenschutz">Datenschutz</a></li>
                        <li><a href="/agb">AGB</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="https://shop.hexahost.de/clientarea.php">Kunden-Center</a></li>
                        <li><a href="https://shop.hexahost.de/serverstatus.php">Status</a></li>
                        <li><a href="https://shop.hexahost.de/supporttickets.php">Support-Ticket</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> HexaHost.de - Alle Rechte vorbehalten</p>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Banner -->
    <div id="cookieConsent" class="cookie-consent" role="dialog" aria-labelledby="cookieConsentTitle" aria-describedby="cookieConsentDesc">
        <div class="cookie-consent-container">
            <div class="cookie-consent-content">
                <div class="cookie-consent-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <circle cx="8" cy="9" r="1" fill="currentColor"/>
                        <circle cx="15" cy="8" r="1" fill="currentColor"/>
                        <circle cx="10" cy="14" r="1" fill="currentColor"/>
                        <circle cx="16" cy="13" r="1" fill="currentColor"/>
                        <circle cx="13" cy="17" r="1" fill="currentColor"/>
                    </svg>
                </div>
                <div class="cookie-consent-text">
                    <h3 id="cookieConsentTitle">Cookie-Einstellungen</h3>
                    <p id="cookieConsentDesc">
                        Wir verwenden Cookies, um Ihnen die bestmögliche Erfahrung auf unserer Website zu bieten. 
                        Technisch notwendige Cookies sind für die Funktionalität erforderlich. 
                        <a href="/datenschutz">Mehr erfahren</a>
                    </p>
                </div>
            </div>
            <div class="cookie-consent-actions">
                <button type="button" id="cookieAcceptAll" class="btn btn-primary">Alle akzeptieren</button>
                <button type="button" id="cookieAcceptEssential" class="btn btn-secondary">Nur notwendige</button>
                <button type="button" id="cookieSettings" class="btn btn-text">Einstellungen</button>
            </div>
        </div>
        
        <!-- Erweiterte Cookie-Einstellungen (standardmäßig versteckt) -->
        <div id="cookieSettingsPanel" class="cookie-settings-panel" style="display: none;">
            <div class="cookie-settings-content">
                <h4>Cookie-Einstellungen</h4>
                <div class="cookie-option">
                    <div class="cookie-option-info">
                        <strong>Notwendige Cookies</strong>
                        <p>Diese Cookies sind für die Grundfunktionen der Website erforderlich.</p>
                    </div>
                    <label class="cookie-toggle disabled">
                        <input type="checkbox" checked disabled>
                        <span class="cookie-toggle-slider"></span>
                    </label>
                </div>
                <div class="cookie-option">
                    <div class="cookie-option-info">
                        <strong>Analyse-Cookies</strong>
                        <p>Helfen uns zu verstehen, wie Besucher unsere Website nutzen.</p>
                    </div>
                    <label class="cookie-toggle">
                        <input type="checkbox" id="cookieAnalytics">
                        <span class="cookie-toggle-slider"></span>
                    </label>
                </div>
                <div class="cookie-option">
                    <div class="cookie-option-info">
                        <strong>Marketing-Cookies</strong>
                        <p>Werden verwendet, um relevante Werbung anzuzeigen.</p>
                    </div>
                    <label class="cookie-toggle">
                        <input type="checkbox" id="cookieMarketing">
                        <span class="cookie-toggle-slider"></span>
                    </label>
                </div>
                <div class="cookie-settings-actions">
                    <button type="button" id="cookieSaveSettings" class="btn btn-primary">Einstellungen speichern</button>
                    <button type="button" id="cookieCloseSettings" class="btn btn-secondary">Abbrechen</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/cookie-consent.js" defer></script>
    <?php if (isset($additional_scripts)): ?>
        <?php foreach ($additional_scripts as $script): ?>
            <script src="<?php echo $script; ?>" defer></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html> 