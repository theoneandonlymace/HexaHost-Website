<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = 'Allgemeine Geschäftsbedingungen - HexaHost.de | AGB';
$page_description = 'Allgemeine Geschäftsbedingungen (AGB) von HexaHost.de für Hosting-Dienstleistungen.';
$current_page = 'agb';

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main>
    <!-- AGB Hero -->
    <section class="legal-hero">
        <div class="container">
            <div class="legal-hero-content">
                <?php
                generateBreadcrumbs([
                    ['title' => 'Home', 'url' => 'index.php'],
                    ['title' => 'AGB', 'url' => '']
                ]);
                ?>
                <h1 class="legal-hero-title">Allgemeine Geschäftsbedingungen</h1>
                <p class="legal-hero-description">
                    Stand: Januar 2026
                </p>
            </div>
        </div>
    </section>

    <!-- AGB Content -->
    <section class="legal-content">
        <div class="container">
            <div class="legal-container">
                
                <!-- § 1 Geltungsbereich -->
                <div class="legal-section glass-card">
                    <h2>§ 1 Geltungsbereich</h2>
                    <div class="legal-block">
                        <p>
                            (1) Diese Allgemeinen Geschäftsbedingungen (AGB) gelten für alle Verträge zwischen
                        </p>
                        <p>
                            <strong>HexaHost</strong><br>
                            Inh. Samuel Müller<br>
                            Richard-Miller-Straße 1<br>
                            94051 Hauzenberg<br>
                            Deutschland<br>
                            (nachfolgend "Anbieter" genannt)
                        </p>
                        <p>
                            und dem Kunden (nachfolgend "Kunde" genannt) über die Bereitstellung von 
                            Hosting-Dienstleistungen, insbesondere Virtual Private Server (VPS), 
                            Virtual Private Container (VPC), Webhosting und Mail Gateway Services.
                        </p>
                        <p>
                            (2) Abweichende, entgegenstehende oder ergänzende AGB des Kunden werden nur 
                            dann Vertragsbestandteil, wenn der Anbieter ihrer Geltung ausdrücklich 
                            schriftlich zugestimmt hat.
                        </p>
                        <p>
                            (3) Diese AGB gelten sowohl gegenüber Verbrauchern als auch gegenüber 
                            Unternehmern, es sei denn, in der jeweiligen Klausel wird eine 
                            Differenzierung vorgenommen.
                        </p>
                    </div>
                </div>

                <!-- § 2 Vertragsschluss -->
                <div class="legal-section glass-card">
                    <h2>§ 2 Vertragsschluss</h2>
                    <div class="legal-block">
                        <p>
                            (1) Die Darstellung der Produkte auf der Website stellt kein rechtlich 
                            bindendes Angebot, sondern eine Aufforderung zur Bestellung dar.
                        </p>
                        <p>
                            (2) Durch Absenden einer Bestellung über die Website gibt der Kunde ein 
                            verbindliches Angebot zum Abschluss eines Vertrages ab. Der Anbieter 
                            bestätigt den Eingang der Bestellung unverzüglich per E-Mail 
                            (Eingangsbestätigung). Diese Eingangsbestätigung stellt noch keine 
                            Annahme des Angebots dar.
                        </p>
                        <p>
                            (3) Der Vertrag kommt zustande, wenn der Anbieter die Bestellung durch 
                            eine Auftragsbestätigung annimmt oder mit der Ausführung der Leistung beginnt.
                        </p>
                        <p>
                            (4) Der Kunde muss zum Zeitpunkt der Bestellung mindestens 18 Jahre alt sein 
                            oder bei Minderjährigkeit die Zustimmung des gesetzlichen Vertreters haben.
                        </p>
                        <p>
                            (5) Der Vertragstext wird vom Anbieter nicht gespeichert und ist nach 
                            Abschluss des Bestellvorgangs nicht mehr abrufbar. Der Kunde kann den 
                            Vertragsinhalt vor Absenden der Bestellung ausdrucken oder speichern.
                        </p>
                    </div>
                </div>

                <!-- § 3 Leistungsbeschreibung -->
                <div class="legal-section glass-card">
                    <h2>§ 3 Leistungsbeschreibung</h2>
                    <div class="legal-block">
                        <p>
                            (1) Der Umfang der vom Anbieter zu erbringenden Leistungen ergibt sich aus 
                            der jeweiligen Produktbeschreibung zum Zeitpunkt der Bestellung sowie aus 
                            der Auftragsbestätigung.
                        </p>
                        <p>
                            (2) Der Anbieter erbringt seine Leistungen mit einer Verfügbarkeit von 
                            99% im Jahresmittel. Hiervon ausgenommen sind Zeiten, in denen die 
                            Server aufgrund von technischen oder sonstigen Problemen, die nicht im 
                            Einflussbereich des Anbieters liegen (höhere Gewalt, Verschulden Dritter 
                            etc.), nicht erreichbar sind.
                        </p>
                        <p>
                            (3) Der Anbieter ist berechtigt, die zur Erbringung der Leistungen 
                            eingesetzten technischen Einrichtungen zu ändern, zu erweitern oder 
                            auszutauschen, sofern dies ohne Einschränkungen der vertraglich 
                            geschuldeten Leistungen möglich ist.
                        </p>
                        <p>
                            (4) Wartungsarbeiten werden nach Möglichkeit außerhalb der 
                            Hauptnutzungszeiten durchgeführt. Der Anbieter wird den Kunden über 
                            geplante Wartungsarbeiten rechtzeitig informieren, sofern diese zu 
                            Einschränkungen der Erreichbarkeit führen können.
                        </p>
                    </div>
                </div>

                <!-- § 4 Preise und Zahlung -->
                <div class="legal-section glass-card">
                    <h2>§ 4 Preise und Zahlungsbedingungen</h2>
                    <div class="legal-block">
                        <p>
                            (1) Es gelten die zum Zeitpunkt der Bestellung auf der Website 
                            angegebenen Preise. Alle Preise verstehen sich inklusive der gesetzlichen 
                            Mehrwertsteuer, sofern nicht anders angegeben.
                        </p>
                        <p>
                            (2) Die Abrechnung erfolgt je nach gewähltem Abrechnungszeitraum 
                            (monatlich, vierteljährlich, halbjährlich oder jährlich) im Voraus.
                        </p>
                        <p>
                            (3) Folgende Zahlungsmethoden stehen zur Verfügung:
                        </p>
                        <ul>
                            <li>Überweisung</li>
                            <li>PayPal</li>
                            <li>Kreditkarte</li>
                        </ul>
                        <p>
                            (4) Die Zahlung ist innerhalb von 14 Tagen nach Rechnungsstellung fällig, 
                            sofern nicht anders vereinbart.
                        </p>
                        <p>
                            (5) Bei Zahlungsverzug ist der Anbieter berechtigt, Verzugszinsen in 
                            gesetzlicher Höhe zu berechnen. Bei Unternehmern beträgt der Verzugszins 
                            9 Prozentpunkte über dem Basiszinssatz, bei Verbrauchern 5 Prozentpunkte 
                            über dem Basiszinssatz.
                        </p>
                        <p>
                            (6) Der Anbieter behält sich das Recht vor, die Preise mit einer 
                            Ankündigungsfrist von 4 Wochen zum Ende der jeweiligen Vertragslaufzeit 
                            zu ändern. Der Kunde hat in diesem Fall ein Sonderkündigungsrecht.
                        </p>
                    </div>
                </div>

                <!-- § 5 Vertragslaufzeit und Kündigung -->
                <div class="legal-section glass-card">
                    <h2>§ 5 Vertragslaufzeit und Kündigung</h2>
                    <div class="legal-block">
                        <p>
                            (1) Die Mindestvertragslaufzeit ergibt sich aus der jeweiligen 
                            Produktbeschreibung. Nach Ablauf der Mindestlaufzeit verlängert sich 
                            der Vertrag automatisch um den ursprünglich vereinbarten Zeitraum, 
                            wenn er nicht fristgerecht gekündigt wird.
                        </p>
                        <p>
                            (2) Die Kündigungsfrist beträgt 14 Tage zum Ende der jeweiligen 
                            Vertragslaufzeit, sofern in der Produktbeschreibung nichts anderes 
                            angegeben ist.
                        </p>
                        <p>
                            (3) Die Kündigung bedarf der Textform (E-Mail ist ausreichend) und 
                            muss an <a href="mailto:support@hexahost.de">support@hexahost.de</a> 
                            gesendet werden.
                        </p>
                        <p>
                            (4) Das Recht zur außerordentlichen Kündigung aus wichtigem Grund 
                            bleibt unberührt. Ein wichtiger Grund liegt für den Anbieter 
                            insbesondere vor, wenn:
                        </p>
                        <ul>
                            <li>der Kunde mit der Zahlung von mindestens zwei Monatsbeträgen in 
                                Verzug ist</li>
                            <li>der Kunde gegen wesentliche Vertragspflichten verstößt</li>
                            <li>der Kunde verbotene Inhalte speichert oder verbreitet</li>
                            <li>die Nutzung der Dienste gegen geltendes Recht verstößt</li>
                        </ul>
                        <p>
                            (5) Bei Kündigung ist der Kunde selbst für die Sicherung seiner Daten 
                            verantwortlich. Nach Vertragsende werden alle Daten unwiderruflich gelöscht.
                        </p>
                    </div>
                </div>

                <!-- § 6 Widerrufsrecht für Verbraucher -->
                <div class="legal-section glass-card">
                    <h2>§ 6 Widerrufsrecht für Verbraucher</h2>
                    <div class="legal-block">
                        <h3>Widerrufsbelehrung</h3>
                        <p>
                            Verbraucher haben ein vierzehntägiges Widerrufsrecht.
                        </p>
                        <p>
                            <strong>Widerrufsrecht:</strong><br>
                            Sie haben das Recht, binnen vierzehn Tagen ohne Angabe von Gründen 
                            diesen Vertrag zu widerrufen. Die Widerrufsfrist beträgt vierzehn 
                            Tage ab dem Tag des Vertragsabschlusses.
                        </p>
                        <p>
                            Um Ihr Widerrufsrecht auszuüben, müssen Sie uns mittels einer 
                            eindeutigen Erklärung (z.B. ein mit der Post versandter Brief oder 
                            E-Mail) über Ihren Entschluss, diesen Vertrag zu widerrufen, informieren.
                        </p>
                        <p>
                            <strong>Widerrufsadresse:</strong><br>
                            HexaHost<br>
                            Inh. Samuel Müller<br>
                            Richard-Miller-Straße 1<br>
                            94051 Hauzenberg<br>
                            E-Mail: <a href="mailto:support@hexahost.de">support@hexahost.de</a>
                        </p>
                        <p>
                            <strong>Folgen des Widerrufs:</strong><br>
                            Wenn Sie diesen Vertrag widerrufen, haben wir Ihnen alle Zahlungen, 
                            die wir von Ihnen erhalten haben, unverzüglich und spätestens binnen 
                            vierzehn Tagen ab dem Tag zurückzuzahlen, an dem die Mitteilung über 
                            Ihren Widerruf dieses Vertrags bei uns eingegangen ist.
                        </p>
                        <p>
                            Haben Sie verlangt, dass die Dienstleistungen während der Widerrufsfrist 
                            beginnen soll, so haben Sie uns einen angemessenen Betrag zu zahlen, 
                            der dem Anteil der bis zu dem Zeitpunkt, zu dem Sie uns von der Ausübung 
                            des Widerrufsrechts hinsichtlich dieses Vertrags unterrichten, bereits 
                            erbrachten Dienstleistungen im Vergleich zum Gesamtumfang der im Vertrag 
                            vorgesehenen Dienstleistungen entspricht.
                        </p>
                    </div>
                </div>

                <!-- § 7 Pflichten des Kunden -->
                <div class="legal-section glass-card">
                    <h2>§ 7 Pflichten des Kunden</h2>
                    <div class="legal-block">
                        <p>
                            (1) Der Kunde ist verpflichtet, bei der Anmeldung vollständige und 
                            wahrheitsgemäße Angaben zu machen und diese stets aktuell zu halten.
                        </p>
                        <p>
                            (2) Der Kunde hat seine Zugangsdaten geheim zu halten und vor dem 
                            Zugriff Dritter zu schützen. Bei Verdacht auf Missbrauch ist der 
                            Anbieter unverzüglich zu informieren.
                        </p>
                        <p>
                            (3) Der Kunde ist für alle Aktivitäten verantwortlich, die unter 
                            Verwendung seiner Zugangsdaten erfolgen.
                        </p>
                        <p>
                            (4) Der Kunde verpflichtet sich, die gemieteten Ressourcen nicht 
                            missbräuchlich zu nutzen und keine Handlungen vorzunehmen, die zu 
                            einer übermäßigen Belastung der Systeme des Anbieters führen.
                        </p>
                        <p>
                            (5) Der Kunde ist für die regelmäßige Sicherung seiner Daten 
                            selbst verantwortlich, sofern keine Backup-Leistung vereinbart wurde.
                        </p>
                        <p>
                            (6) Der Kunde stellt den Anbieter von allen Ansprüchen Dritter frei, 
                            die aufgrund einer rechtswidrigen Nutzung der Dienste durch den 
                            Kunden oder mit dessen Duldung entstehen.
                        </p>
                    </div>
                </div>

                <!-- § 8 Verbotene Nutzung -->
                <div class="legal-section glass-card">
                    <h2>§ 8 Verbotene Nutzung</h2>
                    <div class="legal-block">
                        <p>
                            (1) Die folgenden Nutzungsarten sind untersagt:
                        </p>
                        <ul>
                            <li>Speichern oder Verbreiten von rechtswidrigen, insbesondere 
                                jugendgefährdenden, pornografischen, rassistischen, 
                                gewaltverherrlichenden oder extremistischen Inhalten</li>
                            <li>Versand von Spam-E-Mails oder unaufgeforderter Massenwerbung</li>
                            <li>Betreiben von Phishing-Seiten oder Verbreitung von Malware</li>
                            <li>DDoS-Angriffe oder andere Hackeraktivitäten</li>
                            <li>Mining von Kryptowährungen (sofern nicht ausdrücklich gestattet)</li>
                            <li>Betreiben illegaler Tauschbörsen oder Verbreitung 
                                urheberrechtlich geschützter Inhalte ohne Berechtigung</li>
                            <li>Nutzung von offenen Proxys, Tor-Exit-Nodes oder anonymen 
                                VPN-Diensten (sofern nicht ausdrücklich gestattet)</li>
                            <li>Jede sonstige Nutzung, die gegen deutsches Recht oder das Recht 
                                des Nutzerstandortes verstößt</li>
                        </ul>
                        <p>
                            (2) Bei Verstößen gegen diese Bestimmungen ist der Anbieter berechtigt, 
                            die Dienste sofort zu sperren und den Vertrag fristlos zu kündigen. 
                            Bereits gezahlte Entgelte werden nicht erstattet.
                        </p>
                        <p>
                            (3) Der Kunde haftet für alle Schäden, die dem Anbieter durch die 
                            verbotene Nutzung entstehen.
                        </p>
                    </div>
                </div>

                <!-- § 9 Sperrung -->
                <div class="legal-section glass-card">
                    <h2>§ 9 Sperrung von Diensten</h2>
                    <div class="legal-block">
                        <p>
                            (1) Der Anbieter ist berechtigt, die Dienste des Kunden vorübergehend 
                            zu sperren, wenn:
                        </p>
                        <ul>
                            <li>der Kunde mit der Zahlung fälliger Entgelte in Verzug ist</li>
                            <li>ein Verstoß gegen diese AGB vorliegt</li>
                            <li>ein begründeter Verdacht auf missbräuchliche Nutzung besteht</li>
                            <li>eine behördliche Anordnung vorliegt</li>
                            <li>die Sperrung zum Schutz des Anbieters oder Dritter erforderlich ist</li>
                        </ul>
                        <p>
                            (2) Der Anbieter wird den Kunden über die Sperrung und deren Gründe 
                            unverzüglich informieren, sofern dies rechtlich zulässig ist.
                        </p>
                        <p>
                            (3) Die Zahlungspflicht des Kunden besteht auch während der Sperrung 
                            fort, wenn die Sperrung vom Kunden zu vertreten ist.
                        </p>
                        <p>
                            (4) Die Entsperrung erfolgt, sobald der Sperrgrund entfallen ist. 
                            Der Anbieter kann für die Entsperrung eine angemessene Gebühr erheben.
                        </p>
                    </div>
                </div>

                <!-- § 10 Haftung -->
                <div class="legal-section glass-card">
                    <h2>§ 10 Haftung</h2>
                    <div class="legal-block">
                        <p>
                            (1) Der Anbieter haftet unbeschränkt für Schäden aus der Verletzung 
                            des Lebens, des Körpers oder der Gesundheit, die auf einer 
                            vorsätzlichen oder fahrlässigen Pflichtverletzung beruhen.
                        </p>
                        <p>
                            (2) Für sonstige Schäden haftet der Anbieter nur bei Vorsatz und 
                            grober Fahrlässigkeit sowie bei schuldhafter Verletzung wesentlicher 
                            Vertragspflichten (Kardinalpflichten). Bei leicht fahrlässiger 
                            Verletzung von Kardinalpflichten ist die Haftung auf den 
                            vertragstypischen, vorhersehbaren Schaden begrenzt.
                        </p>
                        <p>
                            (3) Die Haftung für Datenverlust ist auf den typischen 
                            Wiederherstellungsaufwand beschränkt, der bei regelmäßiger und 
                            gefahrentsprechender Anfertigung von Sicherungskopien durch den 
                            Kunden eingetreten wäre.
                        </p>
                        <p>
                            (4) Der Anbieter haftet nicht für Schäden, die durch höhere Gewalt, 
                            Stromausfälle, Ausfall von Telekommunikationsverbindungen oder 
                            sonstige Umstände entstehen, die außerhalb seines Einflussbereichs liegen.
                        </p>
                        <p>
                            (5) Die vorstehenden Haftungsbeschränkungen gelten auch zugunsten 
                            der Erfüllungsgehilfen des Anbieters.
                        </p>
                    </div>
                </div>

                <!-- § 11 Datensicherung -->
                <div class="legal-section glass-card">
                    <h2>§ 11 Datensicherung</h2>
                    <div class="legal-block">
                        <p>
                            (1) Der Kunde ist für die regelmäßige Sicherung seiner Daten selbst 
                            verantwortlich. Der Anbieter empfiehlt, mindestens täglich eine 
                            Sicherungskopie aller wichtigen Daten anzufertigen.
                        </p>
                        <p>
                            (2) Sofern im gebuchten Tarif Backup-Leistungen enthalten sind, 
                            erstellt der Anbieter regelmäßige Sicherungskopien gemäß der 
                            Produktbeschreibung. Diese Backups dienen der Disaster Recovery und 
                            ersetzen nicht die Eigenverantwortung des Kunden zur Datensicherung.
                        </p>
                        <p>
                            (3) Der Anbieter haftet nicht für den Verlust von Daten, wenn der 
                            Kunde seinen Sicherungspflichten nicht nachgekommen ist.
                        </p>
                    </div>
                </div>

                <!-- § 12 Datenschutz -->
                <div class="legal-section glass-card">
                    <h2>§ 12 Datenschutz</h2>
                    <div class="legal-block">
                        <p>
                            (1) Der Anbieter erhebt, verarbeitet und nutzt personenbezogene 
                            Daten des Kunden nur, soweit dies für die Begründung, inhaltliche 
                            Ausgestaltung oder Änderung des Vertragsverhältnisses erforderlich 
                            ist (Bestandsdaten).
                        </p>
                        <p>
                            (2) Einzelheiten zur Datenverarbeitung sind in der 
                            <a href="datenschutz.php">Datenschutzerklärung</a> geregelt.
                        </p>
                        <p>
                            (3) Sofern der Kunde personenbezogene Daten Dritter auf den gemieteten 
                            Systemen verarbeitet, bleibt er hierfür verantwortlich. Der Kunde 
                            stellt sicher, dass er alle datenschutzrechtlichen Anforderungen 
                            erfüllt und schließt bei Bedarf mit dem Anbieter einen 
                            Auftragsverarbeitungsvertrag ab.
                        </p>
                    </div>
                </div>

                <!-- § 13 Geheimhaltung -->
                <div class="legal-section glass-card">
                    <h2>§ 13 Geheimhaltung</h2>
                    <div class="legal-block">
                        <p>
                            (1) Beide Parteien verpflichten sich, alle im Rahmen des 
                            Vertragsverhältnisses erlangten vertraulichen Informationen geheim 
                            zu halten und nicht an Dritte weiterzugeben.
                        </p>
                        <p>
                            (2) Diese Verpflichtung gilt nicht für Informationen, die:
                        </p>
                        <ul>
                            <li>öffentlich bekannt sind oder werden</li>
                            <li>der empfangenden Partei bereits bekannt waren</li>
                            <li>von einem Dritten ohne Geheimhaltungspflicht erhalten wurden</li>
                            <li>aufgrund gesetzlicher Verpflichtung offengelegt werden müssen</li>
                        </ul>
                        <p>
                            (3) Die Geheimhaltungspflicht besteht auch nach Beendigung des 
                            Vertragsverhältnisses fort.
                        </p>
                    </div>
                </div>

                <!-- § 14 Änderungen der AGB -->
                <div class="legal-section glass-card">
                    <h2>§ 14 Änderungen der AGB</h2>
                    <div class="legal-block">
                        <p>
                            (1) Der Anbieter ist berechtigt, diese AGB mit einer Ankündigungsfrist 
                            von 4 Wochen zu ändern. Die Änderungen werden dem Kunden in Textform 
                            (z.B. per E-Mail) mitgeteilt.
                        </p>
                        <p>
                            (2) Die Änderungen gelten als genehmigt, wenn der Kunde nicht 
                            innerhalb von 4 Wochen nach Zugang der Änderungsmitteilung schriftlich 
                            widerspricht. Auf diese Folge wird der Anbieter in der 
                            Änderungsmitteilung besonders hinweisen.
                        </p>
                        <p>
                            (3) Im Falle eines Widerspruchs kann jede Partei den Vertrag mit 
                            einer Frist von 14 Tagen zum Ende des laufenden Abrechnungszeitraums 
                            kündigen.
                        </p>
                    </div>
                </div>

                <!-- § 15 Schlussbestimmungen -->
                <div class="legal-section glass-card">
                    <h2>§ 15 Schlussbestimmungen</h2>
                    <div class="legal-block">
                        <p>
                            (1) Es gilt das Recht der Bundesrepublik Deutschland unter Ausschluss 
                            des UN-Kaufrechts. Bei Verbrauchern gilt diese Rechtswahl nur insoweit, 
                            als nicht der durch zwingende Bestimmungen des Rechts des Staates, 
                            in dem der Verbraucher seinen gewöhnlichen Aufenthalt hat, gewährte 
                            Schutz entzogen wird.
                        </p>
                        <p>
                            (2) Sofern der Kunde Kaufmann, juristische Person des öffentlichen 
                            Rechts oder öffentlich-rechtliches Sondervermögen ist, ist 
                            ausschließlicher Gerichtsstand für alle Streitigkeiten aus diesem 
                            Vertrag der Geschäftssitz des Anbieters.
                        </p>
                        <p>
                            (3) Sollten einzelne Bestimmungen dieser AGB unwirksam sein oder 
                            werden, so wird hierdurch die Wirksamkeit der übrigen Bestimmungen 
                            nicht berührt.
                        </p>
                        <p>
                            (4) Die Vertragssprache ist Deutsch.
                        </p>
                    </div>
                </div>

                <!-- Kontakt -->
                <div class="legal-section glass-card">
                    <h2>Kontakt bei Fragen</h2>
                    <div class="legal-block">
                        <p>
                            Bei Fragen zu diesen Allgemeinen Geschäftsbedingungen wenden Sie 
                            sich bitte an:
                        </p>
                        <p>
                            <strong>E-Mail:</strong> <a href="mailto:info@hexahost.de">info@hexahost.de</a><br>
                            <strong>Telefon:</strong> +49 15566 175855
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
