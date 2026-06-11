<?php
// Dynamic visual breadcrumbs navigation component.
// Included at the top of <main> sections on sub-pages.

$page = basename($_SERVER['PHP_SELF'], '.php');

// Don't show visual breadcrumbs on the homepage
if ($page !== 'index' || (strpos($_SERVER['PHP_SELF'], '/blog/') !== false)) {
    $is_blog_dir = (strpos($_SERVER['PHP_SELF'], '/blog/') !== false);
    
    if ($is_blog_dir) {
        $breadcrumb_links = [
            ['name' => 'Home', 'url' => '../']
        ];
        if ($page === 'index') {
            $breadcrumb_links[] = ['name' => 'Blog', 'url' => ''];
        } else {
            $breadcrumb_links[] = ['name' => 'Blog', 'url' => './'];
            $breadcrumb_links[] = ['name' => isset($blog_post['title']) ? $blog_post['title'] : 'Article', 'url' => ''];
        }
    } else {
        $breadcrumb_links = [
            ['name' => 'Home', 'url' => './']
        ];

        $is_service = in_array($page, ['premium-hair-patch', 'full-hair-wig', 'non-surgical-replacement', 'hair-bonding', 'maintenance-and-styling', 'custom-hairline-design', 'australian-hair-patch-dwarka', 'bmw-hair-patch-dwarka', 'filament-hair-patch-dwarka', 'superior-filament-hair-patch-dwarka', 'monofilament-hair-patch-dwarka', 'mono-silk-hair-patch-dwarka', 'mirage-hair-patch-dwarka', 'french-lace-hair-patch-dwarka', 'front-lace-hair-patch-dwarka', 'full-lace-hair-patch-dwarka', 'poly-fuse-hair-patch-dwarka']);

        if ($is_service) {
            $service_names = [
                'premium-hair-patch' => 'Premium Hair Patch',
                'full-hair-wig' => 'Full Hair Wigs',
                'non-surgical-replacement' => 'Non-Surgical Replacement',
                'hair-bonding' => 'Hair Bonding',
                'maintenance-and-styling' => 'Maintenance & Styling',
                'custom-hairline-design' => 'Custom Hairline Design',
                'australian-hair-patch-dwarka' => 'Australian Hair Patch',
                'bmw-hair-patch-dwarka' => 'BMW Hair Patch',
                'filament-hair-patch-dwarka' => 'Filament Hair Patch',
                'superior-filament-hair-patch-dwarka' => 'Superior Filament Hair Patch',
                'monofilament-hair-patch-dwarka' => 'Monofilament Hair Patch',
                'mono-silk-hair-patch-dwarka' => 'Mono Silk Hair Patch',
                'mirage-hair-patch-dwarka' => 'Mirage Hair Patch',
                'french-lace-hair-patch-dwarka' => 'French Lace Hair Patch',
                'front-lace-hair-patch-dwarka' => 'Front Lace Hair Patch',
                'full-lace-hair-patch-dwarka' => 'Full Lace Hair Patch',
                'poly-fuse-hair-patch-dwarka' => 'Poly Fuse Hair Patch'
            ];
            
            $breadcrumb_links[] = ['name' => 'Services', 'url' => './#services'];
            $breadcrumb_links[] = ['name' => isset($service_names[$page]) ? $service_names[$page] : 'Service', 'url' => ''];
        } else {
            $name_mapping = [
                'about' => 'About Us',
                'contact' => 'Contact Us',
                'gallery' => 'Gallery'
            ];
            $display_name = isset($name_mapping[$page]) ? $name_mapping[$page] : ucfirst($page);
            $breadcrumb_links[] = ['name' => $display_name, 'url' => ''];
        }
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
