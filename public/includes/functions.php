<?php
/**
 * Helper functions for HexaHost.de
 */

/**
 * Set page configuration and include header
 * 
 * @param string $page_title The page title
 * @param string $page_description The page description
 * @param string $current_page The current page identifier
 * @param array $additional_scripts Additional scripts to include
 */
function includeHeader($page_title = '', $page_description = '', $current_page = '', $additional_scripts = []) {
    global $page_title, $page_description, $current_page, $additional_scripts;
    
    // Set default values if not provided
    if (empty($page_title)) {
        $page_title = 'HexaHost.de - Zuverlässiges Hosting aus Niederbayern';
    }
    if (empty($page_description)) {
        $page_description = 'HexaHost.de - Zuverlässiges und preiswertes Hosting aus Niederbayern. VPS, VPC, Mail Gateway und Webhosting Lösungen.';
    }
    
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