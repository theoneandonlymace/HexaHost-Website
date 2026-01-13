<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = '500 - Serverfehler | HexaHost.de';
$page_description = 'Ein interner Serverfehler ist aufgetreten.';
$current_page = '500';

// Set 500 header
http_response_code(500);

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main>
    <section class="error-page">
        <div class="container">
            <div class="error-content glass-card">
                <div class="error-code">500</div>
                <h1>Interner Serverfehler</h1>
                <p>Es ist ein unerwarteter Fehler aufgetreten. Wir arbeiten bereits an der Lösung.</p>
                <div class="error-actions">
                    <a href="index.php" class="btn btn-primary">Zur Startseite</a>
                    <a href="contact.php" class="btn btn-secondary">Support kontaktieren</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.error-page {
    min-height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 4rem 0;
}
.error-content {
    text-align: center;
    padding: 3rem;
    max-width: 500px;
}
.error-code {
    font-size: 6rem;
    font-weight: 700;
    background: linear-gradient(135deg, #ff51f9, #a348ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    margin-bottom: 1rem;
}
.error-content h1 {
    font-size: 1.75rem;
    margin-bottom: 1rem;
}
.error-content p {
    color: #888;
    margin-bottom: 2rem;
}
.error-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}
</style>

<?php
includeFooter();
?>
