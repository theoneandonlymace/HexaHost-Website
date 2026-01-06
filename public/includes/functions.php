<?php
/**
 * Helper functions for HexaHost.de
 */

// Start session for CSRF token
if (session_status() === PHP_SESSION_NONE) {
    session_start();
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