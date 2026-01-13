<?php
require_once 'includes/functions.php';

// Page configuration
$page_title = '404 - Seite nicht gefunden | HexaHost.de';
$page_description = 'Die angeforderte Seite wurde nicht gefunden.';
$current_page = '404';

// Set 404 header
http_response_code(404);

// Include header
includeHeader($page_title, $page_description, $current_page);
?>

<main>
    <section class="error-page">
        <div class="container">
            <div class="error-content glass-card">
                <div class="error-code">404</div>
                <h1>Seite nicht gefunden</h1>
                <p>Die angeforderte Seite existiert leider nicht oder wurde verschoben.</p>
                <div class="error-actions">
                    <a href="/" class="btn btn-primary">Zur Startseite</a>
                    <a href="/contact" class="btn btn-secondary">Kontakt aufnehmen</a>
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
