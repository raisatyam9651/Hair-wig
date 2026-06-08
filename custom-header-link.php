<?php
// Custom header link page - to be included in the <head> section for page-specific links
// Add custom CSS or script links specific to each page here

$custom_head_links = '';
$page = basename($_SERVER['PHP_SELF'], '.php');

// Example: Add page-specific styles or scripts
switch($page) {
    case 'about':
        // Add about page specific resources here
        break;
    case 'full-hair-wig':
        // Add full-hair-wig page specific resources here
        break;
    default:
        break;
}
?>