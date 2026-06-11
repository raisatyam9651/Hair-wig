<?php
$template = file_get_contents('australian-hair-patch-dwarka.php');

$pages = [
    [
        'file' => 'bmw-hair-patch-dwarka.php',
        'name' => 'BMW',
        'slug' => 'bmw-hair-patch',
        'base_img' => 'assets/bmw-hair-patch-base.png',
        'hero_img' => 'assets/bmw-hair-patch-hero.png',
        'styling_img' => 'assets/bmw-hair-patch-styling.png',
        'before_after_img' => 'assets/bmw-hair-patch-before-after.png'
    ],
    [
        'file' => 'filament-hair-patch-dwarka.php',
        'name' => 'Filament',
        'slug' => 'filament-hair-patch',
        'base_img' => 'assets/filament-hair-patch-base.png',
        'hero_img' => 'assets/filament-hair-patch-hero.png',
        'styling_img' => 'assets/filament-hair-patch-styling.png',
        'before_after_img' => 'assets/filament-hair-patch-before-after.png'
    ],
    [
        'file' => 'superior-filament-hair-patch-dwarka.php',
        'name' => 'Superior Filament',
        'slug' => 'superior-filament-hair-patch',
        'base_img' => 'assets/filament-hair-patch-base.png',
        'hero_img' => 'assets/filament-hair-patch-hero.png',
        'styling_img' => 'assets/filament-hair-patch-styling.png',
        'before_after_img' => 'assets/filament-hair-patch-before-after.png'
    ],
    [
        'file' => 'monofilament-hair-patch-dwarka.php',
        'name' => 'Monofilament',
        'slug' => 'monofilament-hair-patch',
        'base_img' => 'assets/filament-hair-patch-base.png',
        'hero_img' => 'assets/filament-hair-patch-hero.png',
        'styling_img' => 'assets/filament-hair-patch-styling.png',
        'before_after_img' => 'assets/filament-hair-patch-before-after.png'
    ],
    [
        'file' => 'mono-silk-hair-patch-dwarka.php',
        'name' => 'Mono Silk',
        'slug' => 'mono-silk-hair-patch',
        'base_img' => 'assets/filament-hair-patch-base.png',
        'hero_img' => 'assets/filament-hair-patch-hero.png',
        'styling_img' => 'assets/filament-hair-patch-styling.png',
        'before_after_img' => 'assets/filament-hair-patch-before-after.png'
    ],
    [
        'file' => 'mirage-hair-patch-dwarka.php',
        'name' => 'Mirage',
        'slug' => 'mirage-hair-patch',
        'base_img' => 'assets/mirage-hair-patch-base.png',
        'hero_img' => 'assets/filament-hair-patch-hero.png',
        'styling_img' => 'assets/filament-hair-patch-styling.png',
        'before_after_img' => 'assets/filament-hair-patch-before-after.png'
    ],
    [
        'file' => 'french-lace-hair-patch-dwarka.php',
        'name' => 'French Lace',
        'slug' => 'french-lace-hair-patch',
        'base_img' => 'assets/lace-hair-patch-base.png',
        'hero_img' => 'assets/australian-hair-patch-hero.png',
        'styling_img' => 'assets/australian-hair-patch-styling.png',
        'before_after_img' => 'assets/australian-hair-patch-before-after.png'
    ],
    [
        'file' => 'front-lace-hair-patch-dwarka.php',
        'name' => 'Front Lace',
        'slug' => 'front-lace-hair-patch',
        'base_img' => 'assets/lace-hair-patch-base.png',
        'hero_img' => 'assets/australian-hair-patch-hero.png',
        'styling_img' => 'assets/australian-hair-patch-styling.png',
        'before_after_img' => 'assets/australian-hair-patch-before-after.png'
    ],
    [
        'file' => 'full-lace-hair-patch-dwarka.php',
        'name' => 'Full Lace',
        'slug' => 'full-lace-hair-patch',
        'base_img' => 'assets/lace-hair-patch-base.png',
        'hero_img' => 'assets/australian-hair-patch-hero.png',
        'styling_img' => 'assets/australian-hair-patch-styling.png',
        'before_after_img' => 'assets/australian-hair-patch-before-after.png'
    ],
    [
        'file' => 'poly-fuse-hair-patch-dwarka.php',
        'name' => 'Poly Fuse',
        'slug' => 'poly-fuse-hair-patch',
        'base_img' => 'assets/mirage-hair-patch-base.png',
        'hero_img' => 'assets/bmw-hair-patch-hero.png',
        'styling_img' => 'assets/bmw-hair-patch-styling.png',
        'before_after_img' => 'assets/bmw-hair-patch-before-after.png'
    ]
];

foreach ($pages as $p) {
    $content = $template;
    
    // First, temporarily replace image URLs so they don't get messed up by text replacements
    $content = str_replace('assets/australian-hair-patch-hero.png', $p['hero_img'], $content);
    $content = str_replace('assets/australian-hair-patch-base.png', $p['base_img'], $content);
    $content = str_replace('assets/australian-hair-patch-styling.png', $p['styling_img'], $content);
    $content = str_replace('assets/australian-hair-patch-before-after.png', $p['before_after_img'], $content);
    
    // Replace text content
    $content = str_replace('Australian', $p['name'], $content);
    $content = str_replace('australian', strtolower($p['name']), $content);
    $content = str_replace('AUSTRALIAN', strtoupper($p['name']), $content);
    
    // Add specific SEO description so they aren't completely identical
    $content = preg_replace('/<meta content="Looking for the best[^"]+" name="description"\/>/', 
                            '<meta content="Looking for the best ' . $p['name'] . ' hair patch in Dwarka? Growig Hair Solution offers premium, natural, and breathable ' . $p['name'] . ' hair patch services near you. Book a free consultation today!" name="description"/>', 
                            $content);
    
    // Add specific keywords
    $content = preg_replace('/<meta name="keywords" content="[^"]+" \/>/', 
                            '<meta name="keywords" content="' . $p['name'] . ' Hair Patch in Dwarka, Best ' . $p['name'] . ' Hair Patch in Dwarka, ' . $p['name'] . ' Hair Patch Service in Dwarka, ' . $p['name'] . ' Hair Patch Centre in Dwarka, ' . $p['name'] . ' Hair Patch Clinic in Dwarka, ' . $p['name'] . ' Hair Patch for Men in Dwarka, ' . $p['name'] . ' Hair Patch Near Me, ' . $p['name'] . ' Hair Patch Specialist in Dwarka, Premium ' . $p['name'] . ' Hair Patch in Dwarka" />', 
                            $content);
    
    file_put_contents($p['file'], $content);
    echo "Generated " . $p['file'] . "\\n";
}
echo "All pages generated.\\n";
?>
