<?php
// Dynamic visual breadcrumbs navigation component.
// Included at the top of <main> sections on sub-pages.

$page = basename($_SERVER['PHP_SELF'], '.php');

// Don't show visual breadcrumbs on the homepage
if ($page !== 'index') {
    $breadcrumb_links = [
        ['name' => 'Home', 'url' => './']
    ];

    $is_service = in_array($page, ['premium-hair-patch', 'full-hair-wig', 'non-surgical-replacement', 'hair-bonding', 'maintenance-and-styling', 'custom-hairline-design']);

    if ($is_service) {
        $service_names = [
            'premium-hair-patch' => 'Premium Hair Patch',
            'full-hair-wig' => 'Full Hair Wigs',
            'non-surgical-replacement' => 'Non-Surgical Replacement',
            'hair-bonding' => 'Hair Bonding',
            'maintenance-and-styling' => 'Maintenance & Styling',
            'custom-hairline-design' => 'Custom Hairline Design'
        ];
        
        $breadcrumb_links[] = ['name' => 'Services', 'url' => './#services'];
        $breadcrumb_links[] = ['name' => isset($service_names[$page]) ? $service_names[$page] : 'Service', 'url' => ''];
    } else {
        $name_mapping = [
            'about' => 'About Us',
            'collection' => 'Collections',
            'contact' => 'Contact Us'
        ];
        $display_name = isset($name_mapping[$page]) ? $name_mapping[$page] : ucfirst($page);
        $breadcrumb_links[] = ['name' => $display_name, 'url' => ''];
    }
    
    // Render breadcrumbs
    ?>
    <div class="max-w-[1280px] w-full mx-auto px-margin-mobile md:px-margin-desktop pt-8 pb-2">
        <nav aria-label="Breadcrumb" class="flex items-center flex-wrap gap-2 text-xs md:text-sm text-secondary font-label-md">
            <?php foreach ($breadcrumb_links as $index => $link): ?>
                <?php if ($index > 0): ?>
                    <span class="material-symbols-outlined text-[14px] md:text-[16px] text-outline-variant shrink-0" style="font-size: 14px;">chevron_right</span>
                <?php endif; ?>
                
                <?php if (!empty($link['url'])): ?>
                    <a href="<?php echo htmlspecialchars($link['url']); ?>" class="hover:text-primary transition-colors duration-200"><?php echo htmlspecialchars($link['name']); ?></a>
                <?php else: ?>
                    <span class="text-primary font-semibold truncate" aria-current="page"><?php echo htmlspecialchars($link['name']); ?></span>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>
    </div>
    <?php
}
?>
