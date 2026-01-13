<?php
/**
 * Helper functions for HexaHost.de
 */

// Sichere Session-Konfiguration
if (session_status() === PHP_SESSION_NONE) {
    // Session-Cookie-Sicherheit
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', isset($_SERVER['HTTPS']) ? 1 : 0);
    ini_set('session.cookie_samesite', 'Strict');
    ini_set('session.use_strict_mode', 1);
    ini_set('session.use_only_cookies', 1);
    
    session_start();
    
    // Session-ID regenerieren bei Login/wichtigen Aktionen (Schutz vor Session Fixation)
    if (!isset($_SESSION['initiated'])) {
        session_regenerate_id(true);
        $_SESSION['initiated'] = true;
    }
}

// PHP Error Display in Produktion deaktivieren
if (!defined('DEBUG_MODE') || !DEBUG_MODE) {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
    ini_set('log_errors', 1);
}

/**
 * Set page configuration and include header
 * 
 * @param string $title The page title
 * @param string $description The page description
 * @param string $page The current page identifier
 * @param array $scripts Additional scripts to include
 */
function includeHeader($title = '', $description = '', $page = '', $scripts = []) {
    global $page_title, $page_description, $current_page, $additional_scripts;
    
    // Set page configuration from parameters
    $page_title = !empty($title) 
        ? $title 
        : 'HexaHost.de - Zuverlässiges Hosting aus Niederbayern';
    
    $page_description = !empty($description) 
        ? $description 
        : 'HexaHost.de - Zuverlässiges und preiswertes Hosting aus Niederbayern. VPS, VPC, Mail Gateway und Webhosting Lösungen.';
    
    $current_page = $page;
    $additional_scripts = $scripts;
    
    include 'includes/header.php';
}

/**
 * Include footer
 */
function includeFooter() {
    include 'includes/footer.php';
}

/**
 * Generate breadcrumb navigation
 * 
 * @param array $breadcrumbs Array of breadcrumb items [['title' => 'Home', 'url' => 'index.html'], ...]
 */
function generateBreadcrumbs($breadcrumbs) {
    echo '<div class="breadcrumb">';
    $last_index = count($breadcrumbs) - 1;
    
    foreach ($breadcrumbs as $index => $item) {
        if ($index === $last_index) {
            // Last item (current page)
            echo '<span>' . htmlspecialchars($item['title']) . '</span>';
        } else {
            // Link to other pages
            echo '<a href="' . htmlspecialchars($item['url']) . '">' . htmlspecialchars($item['title']) . '</a>';
            echo '<span>/</span>';
        }
    }
    echo '</div>';
}

/**
 * Generate CSRF token for form security
 * 
 * @return string CSRF token
 */
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}
?> 