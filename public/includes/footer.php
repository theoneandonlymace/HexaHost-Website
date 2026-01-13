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
                        <li><a href="vpc.php">Virtual Private Container</a></li>
                        <li><a href="vps.php">Virtual Private Server</a></li>
                        <li><a href="mail-gateway.php">Mail Gateway</a></li>
                        <li><a href="webhosting.php">Webhosting</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Unternehmen</h4>
                    <ul>
                        <li><a href="about.php">Über uns</a></li>
                        <li><a href="contact.php">Kontakt</a></li>
                        <li><a href="impressum.php">Impressum</a></li>
                        <li><a href="datenschutz.php">Datenschutz</a></li>
                        <li><a href="agb.php">AGB</a></li>
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

    <script src="assets/js/main.js"></script>
    <?php if (isset($additional_scripts)): ?>
        <?php foreach ($additional_scripts as $script): ?>
            <script src="<?php echo $script; ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html> 