<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'Datenschutzerklärung - HexaHost.de | Datenschutz';
$page_description = 'Datenschutzerklärung von HexaHost.de - Informationen zum Schutz Ihrer personenbezogenen Daten.';
$current_page = 'datenschutz';

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main id="main-content">
    <!-- Datenschutz Hero -->
    <section class="legal-hero">
        <div class="container">
            <div class="legal-hero-content">
                <?php
                generateBreadcrumbs([
                    ['title' => 'Home', 'url' => 'index.php'],
                    ['title' => 'Datenschutzerklärung', 'url' => '']
                ]);
                ?>
                <h1 class="legal-hero-title">Datenschutzerklärung</h1>
                <p class="legal-hero-description">
                    Informationen zum Schutz Ihrer personenbezogenen Daten
                </p>
            </div>
        </div>
    </section>

    <!-- Datenschutz Content -->
    <section class="legal-content">
        <div class="container">
            <div class="legal-container">
                
                <!-- Verantwortlicher -->
                <div class="legal-section glass-card">
                    <h2>1. Verantwortlicher</h2>
                    <div class="legal-block">
                        <p>Verantwortlicher im Sinne der Datenschutz-Grundverordnung (DSGVO) ist:</p>
                        <p>
                            <strong>HexaHost</strong><br>
                            Inh. Samuel Müller<br>
                            Richard-Miller-Straße 1<br>
                            94051 Hauzenberg<br>
                            Deutschland
                        </p>
                        <p>
                            <strong>Telefon:</strong> +49 15566 175855<br>
                            <strong>E-Mail:</strong> <a href="mailto:info@hexahost.de">info@hexahost.de</a>
                        </p>
                    </div>
                </div>

                <!-- Allgemeine Hinweise -->
                <div class="legal-section glass-card">
                    <h2>2. Allgemeine Hinweise zur Datenverarbeitung</h2>
                    <div class="legal-block">
                        <p>
                            Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre 
                            personenbezogenen Daten vertraulich und entsprechend der gesetzlichen 
                            Datenschutzvorschriften sowie dieser Datenschutzerklärung.
                        </p>
                        <p>
                            Die Nutzung unserer Website ist in der Regel ohne Angabe personenbezogener 
                            Daten möglich. Soweit auf unseren Seiten personenbezogene Daten erhoben werden, 
                            erfolgt dies, soweit möglich, stets auf freiwilliger Basis.
                        </p>
                        <p>
                            Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der 
                            Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser 
                            Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.
                        </p>
                    </div>
                </div>

                <!-- Rechtsgrundlagen -->
                <div class="legal-section glass-card">
                    <h2>3. Rechtsgrundlagen der Verarbeitung</h2>
                    <div class="legal-block">
                        <p>Die Verarbeitung personenbezogener Daten erfolgt auf Basis folgender Rechtsgrundlagen:</p>
                        <ul>
                            <li><strong>Art. 6 Abs. 1 lit. a DSGVO:</strong> Einwilligung der betroffenen Person</li>
                            <li><strong>Art. 6 Abs. 1 lit. b DSGVO:</strong> Erfüllung eines Vertrags oder Durchführung vorvertraglicher Maßnahmen</li>
                            <li><strong>Art. 6 Abs. 1 lit. c DSGVO:</strong> Erfüllung einer rechtlichen Verpflichtung</li>
                            <li><strong>Art. 6 Abs. 1 lit. f DSGVO:</strong> Berechtigtes Interesse unsererseits</li>
                        </ul>
                    </div>
                </div>

                <!-- Server-Logfiles -->
                <div class="legal-section glass-card">
                    <h2>4. Server-Logfiles</h2>
                    <div class="legal-block">
                        <p>
                            Der Provider der Seiten erhebt und speichert automatisch Informationen in 
                            sogenannten Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:
                        </p>
                        <ul>
                            <li>Browsertyp und Browserversion</li>
                            <li>Verwendetes Betriebssystem</li>
                            <li>Referrer URL</li>
                            <li>Hostname des zugreifenden Rechners</li>
                            <li>IP-Adresse</li>
                            <li>Uhrzeit der Serveranfrage</li>
                        </ul>
                        <p>
                            Diese Daten sind nicht bestimmten Personen zuordenbar. Eine Zusammenführung 
                            dieser Daten mit anderen Datenquellen wird nicht vorgenommen. Wir behalten 
                            uns vor, diese Daten nachträglich zu prüfen, wenn uns konkrete Anhaltspunkte 
                            für eine rechtswidrige Nutzung bekannt werden.
                        </p>
                        <p>
                            Die Rechtsgrundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. f DSGVO. 
                            Unser berechtigtes Interesse besteht in der Sicherstellung eines störungsfreien 
                            Betriebs unserer Website sowie der Verbesserung unseres Angebots.
                        </p>
                    </div>
                </div>

                <!-- Cookies -->
                <div class="legal-section glass-card">
                    <h2>5. Cookies</h2>
                    <div class="legal-block">
                        <p>
                            Unsere Website verwendet Cookies. Cookies sind kleine Textdateien, die auf 
                            Ihrem Endgerät gespeichert werden und die Ihr Browser speichert. Die meisten 
                            der von uns verwendeten Cookies sind sogenannte "Session-Cookies", die nach 
                            Ende Ihres Besuchs automatisch gelöscht werden.
                        </p>
                        <p>
                            Die Nutzung von Cookies oder vergleichbaren Technologien erfolgt gemäß 
                            § 25 Abs. 2 TDDDG. Die Verarbeitung personenbezogener Daten basiert auf 
                            Art. 6 Abs. 1 lit. f DSGVO mit dem berechtigten Interesse, die optimale 
                            Funktionalität der Website sowie eine nutzerfreundliche und effektive 
                            Gestaltung des Angebots zu gewährleisten.
                        </p>
                        <p>
                            Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies 
                            informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von 
                            Cookies für bestimmte Fälle oder generell ausschließen sowie das automatische 
                            Löschen der Cookies beim Schließen des Browsers aktivieren. Bei der 
                            Deaktivierung von Cookies kann die Funktionalität dieser Website eingeschränkt sein.
                        </p>
                    </div>
                </div>

                <!-- Kontaktformular -->
                <div class="legal-section glass-card">
                    <h2>6. Kontaktformular</h2>
                    <div class="legal-block">
                        <p>
                            Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre 
                            Angaben aus dem Anfrageformular inklusive der von Ihnen dort angegebenen 
                            Kontaktdaten zwecks Bearbeitung der Anfrage und für den Fall von 
                            Anschlussfragen bei uns gespeichert.
                        </p>
                        <p>
                            Die Verarbeitung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO 
                            (Vertragserfüllung und vorvertragliche Maßnahmen) sowie Art. 6 Abs. 1 lit. f 
                            DSGVO (berechtigtes Interesse an der Bearbeitung Ihrer Anfrage).
                        </p>
                        <p>
                            Wir speichern Ihre Anfragen für die Dauer von 6 Jahren, sofern keine 
                            längeren Aufbewahrungsfristen gesetzlich vorgeschrieben sind.
                        </p>
                    </div>
                </div>

                <!-- Hosting und Vertragsabwicklung -->
                <div class="legal-section glass-card">
                    <h2>7. Hosting-Dienstleistungen und Vertragsabwicklung</h2>
                    <div class="legal-block">
                        <p>
                            Zur Erbringung unserer Hosting-Dienstleistungen (VPS, VPC, Webhosting, 
                            Mail Gateway) erheben und verarbeiten wir folgende personenbezogene Daten:
                        </p>
                        <ul>
                            <li>Name und Anschrift</li>
                            <li>E-Mail-Adresse</li>
                            <li>Telefonnummer</li>
                            <li>Zahlungsdaten</li>
                            <li>Zugangsdaten zu den gebuchten Diensten</li>
                            <li>Technische Nutzungsdaten (IP-Adressen, Traffic-Daten)</li>
                        </ul>
                        <p>
                            Die Verarbeitung erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO 
                            zur Erfüllung des Vertrags. Die Daten werden für die Dauer der 
                            Geschäftsbeziehung sowie darüber hinaus gemäß den gesetzlichen 
                            Aufbewahrungspflichten (i.d.R. 10 Jahre gemäß HGB und AO) gespeichert.
                        </p>
                    </div>
                </div>

                <!-- SSL-Verschlüsselung -->
                <div class="legal-section glass-card">
                    <h2>8. SSL- bzw. TLS-Verschlüsselung</h2>
                    <div class="legal-block">
                        <p>
                            Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung 
                            vertraulicher Inhalte, wie zum Beispiel Bestellungen oder Anfragen, die 
                            Sie an uns als Seitenbetreiber senden, eine SSL- bzw. TLS-Verschlüsselung. 
                            Eine verschlüsselte Verbindung erkennen Sie daran, dass die Adresszeile des 
                            Browsers von "http://" auf "https://" wechselt und an dem Schloss-Symbol in 
                            Ihrer Browserzeile.
                        </p>
                        <p>
                            Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, 
                            die Sie an uns übermitteln, nicht von Dritten mitgelesen werden.
                        </p>
                    </div>
                </div>

                <!-- Speicherdauer -->
                <div class="legal-section glass-card">
                    <h2>9. Speicherdauer</h2>
                    <div class="legal-block">
                        <p>
                            Wir speichern personenbezogene Daten nur so lange, wie es für die 
                            Erfüllung des jeweiligen Zwecks erforderlich ist oder wie es gesetzliche 
                            Aufbewahrungsfristen vorsehen.
                        </p>
                        <p>
                            Nach Ablauf der Speicherfrist werden Ihre Daten gelöscht, sofern keine 
                            gesetzlichen Aufbewahrungspflichten entgegenstehen. Server-Logfiles werden 
                            nach spätestens 7 Tagen gelöscht.
                        </p>
                    </div>
                </div>

                <!-- Betroffenenrechte -->
                <div class="legal-section glass-card">
                    <h2>10. Ihre Rechte als betroffene Person</h2>
                    <div class="legal-block">
                        <p>Ihnen stehen folgende Rechte gegenüber dem Verantwortlichen zu:</p>
                        
                        <h3>Recht auf Auskunft (Art. 15 DSGVO)</h3>
                        <p>
                            Sie haben das Recht, Auskunft darüber zu verlangen, ob und welche 
                            personenbezogenen Daten wir über Sie verarbeiten.
                        </p>
                        
                        <h3>Recht auf Berichtigung (Art. 16 DSGVO)</h3>
                        <p>
                            Sie haben das Recht, die Berichtigung unrichtiger oder die Vervollständigung 
                            unvollständiger personenbezogener Daten zu verlangen.
                        </p>
                        
                        <h3>Recht auf Löschung (Art. 17 DSGVO)</h3>
                        <p>
                            Sie haben das Recht, die Löschung Ihrer personenbezogenen Daten zu verlangen, 
                            sofern keine gesetzlichen Aufbewahrungspflichten dem entgegenstehen.
                        </p>
                        
                        <h3>Recht auf Einschränkung der Verarbeitung (Art. 18 DSGVO)</h3>
                        <p>
                            Sie haben das Recht, unter bestimmten Voraussetzungen die Einschränkung der 
                            Verarbeitung Ihrer personenbezogenen Daten zu verlangen.
                        </p>
                        
                        <h3>Recht auf Datenübertragbarkeit (Art. 20 DSGVO)</h3>
                        <p>
                            Sie haben das Recht, Ihre personenbezogenen Daten in einem strukturierten, 
                            gängigen und maschinenlesbaren Format zu erhalten.
                        </p>
                        
                        <h3>Widerspruchsrecht (Art. 21 DSGVO)</h3>
                        <p>
                            Sie haben das Recht, aus Gründen, die sich aus Ihrer besonderen Situation 
                            ergeben, jederzeit der Verarbeitung Ihrer personenbezogenen Daten zu 
                            widersprechen, sofern diese auf Art. 6 Abs. 1 lit. f DSGVO basiert.
                        </p>
                        
                        <h3>Widerruf der Einwilligung (Art. 7 Abs. 3 DSGVO)</h3>
                        <p>
                            Sie haben das Recht, eine erteilte Einwilligung jederzeit zu widerrufen. 
                            Die Rechtmäßigkeit der aufgrund der Einwilligung bis zum Widerruf erfolgten 
                            Verarbeitung wird dadurch nicht berührt.
                        </p>
                    </div>
                </div>

                <!-- Beschwerderecht -->
                <div class="legal-section glass-card">
                    <h2>11. Beschwerderecht bei einer Aufsichtsbehörde</h2>
                    <div class="legal-block">
                        <p>
                            Sie haben gemäß Art. 77 DSGVO das Recht, sich bei einer Aufsichtsbehörde 
                            zu beschweren, wenn Sie der Ansicht sind, dass die Verarbeitung Ihrer 
                            personenbezogenen Daten gegen die DSGVO verstößt.
                        </p>
                        <p>
                            Zuständige Aufsichtsbehörde in Bayern ist:<br><br>
                            <strong>Bayerisches Landesamt für Datenschutzaufsicht (BayLDA)</strong><br>
                            Promenade 18<br>
                            91522 Ansbach<br>
                            Telefon: +49 (0) 981 180093-0<br>
                            E-Mail: <a href="mailto:poststelle@lda.bayern.de">poststelle@lda.bayern.de</a><br>
                            Website: <a href="https://www.lda.bayern.de" target="_blank" rel="noopener noreferrer">www.lda.bayern.de</a>
                        </p>
                    </div>
                </div>

                <!-- Datensicherheit -->
                <div class="legal-section glass-card">
                    <h2>12. Datensicherheit</h2>
                    <div class="legal-block">
                        <p>
                            Wir setzen technische und organisatorische Sicherheitsmaßnahmen ein, um 
                            Ihre personenbezogenen Daten gegen zufällige oder vorsätzliche 
                            Manipulationen, Verlust, Zerstörung oder den Zugriff unberechtigter 
                            Personen zu schützen. Unsere Sicherheitsmaßnahmen werden entsprechend 
                            der technologischen Entwicklung fortlaufend verbessert.
                        </p>
                        <p>
                            Unsere Server befinden sich in Deutschland und unterliegen den strengen 
                            deutschen Datenschutzgesetzen.
                        </p>
                    </div>
                </div>

                <!-- Änderungen -->
                <div class="legal-section glass-card">
                    <h2>13. Aktualität und Änderung dieser Datenschutzerklärung</h2>
                    <div class="legal-block">
                        <p>
                            Diese Datenschutzerklärung ist aktuell gültig und hat den Stand 
                            Januar 2026.
                        </p>
                        <p>
                            Durch die Weiterentwicklung unserer Website und Angebote oder aufgrund 
                            geänderter gesetzlicher beziehungsweise behördlicher Vorgaben kann es 
                            notwendig werden, diese Datenschutzerklärung zu ändern. Die jeweils 
                            aktuelle Datenschutzerklärung kann jederzeit auf dieser Website von 
                            Ihnen abgerufen werden.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
// Include footer
includeFooter();
?>
