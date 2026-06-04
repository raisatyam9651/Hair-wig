<?php
// Common header code - included in the <head> section of all pages.
// It loads Tailwind CSS, Google Fonts, Material Symbols, and the global stylesheet/tailwind configurations.
?>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Inter:wght@300;400;500;600&amp;display=swap"
    rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="style.css?v=4">
<script src="tailwind-config.js?v=4"></script>
<?php echo isset($custom_head_links) ? $custom_head_links : ''; ?>
<meta name="google-site-verification" content="b4jZtRCRUzwu-P8BqcYvxgsJlOAQ_hbxmh3chDa4FOM" />