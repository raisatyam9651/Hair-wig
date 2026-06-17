<?php
// Script to generate localized SEO landing pages for "hair wig for man in [location]" in Gurugram (Gurgaon)
// Target structure: hair-patch-for-men/gurugram/[location]/index.php

$locations = [
    // DLF & Golf Course Road
    [
        'slug' => 'dlf-phase-1', 'name' => 'DLF Phase 1', 'type' => 'dlf',
        'landmarks' => ['Qutub Plaza', 'Sikanderpur Metro Station', 'Faridabad Road'],
        'metro_route' => 'Take the Rapid Metro to Sikanderpur, transfer to the Yellow Line to Hauz Khas, change to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10 Metro Station.',
        'road_route' => 'Drive via Golf Course Road to NH-48 towards Delhi, exit towards the Airport/Dwarka bypass, cross the Dwarka Flyover, and head straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'dlf-phase-2', 'name' => 'DLF Phase 2', 'type' => 'dlf',
        'landmarks' => ['Cyber City', 'Sikanderpur Metro', 'MG Road'],
        'metro_route' => 'Board the Yellow Line at Sikanderpur or MG Road Metro Station, travel to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10 Metro Station.',
        'road_route' => 'Drive via Cyber City and merge onto NH-48 towards Delhi. Exit at the Airport/Dwarka bypass road, cross the Dwarka Flyover, and head straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'dlf-phase-3', 'name' => 'DLF Phase 3', 'type' => 'dlf',
        'landmarks' => ['Ambience Mall', 'DLF Phase 3 Rapid Metro', 'Cyber Hub'],
        'metro_route' => 'Take the Rapid Metro to Sikanderpur, transfer to the Yellow Line to Hauz Khas, change to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10 Metro Station.',
        'road_route' => 'Drive via NH-48 directly from Ambience Mall towards Delhi, take the Airport/Dwarka bypass exit, cross the Dwarka Flyover, and proceed to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'dlf-phase-4', 'name' => 'DLF Phase 4', 'type' => 'dlf',
        'landmarks' => ['Galleria Market', 'Supermart 1', 'Vyapar Kendra'],
        'metro_route' => 'Take the Yellow Line from IFFCO Chowk or MG Road Metro Station to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Galleria Market road to NH-48 towards Delhi. Follow NH-48 to the Airport/Dwarka link road, cross the Dwarka Flyover, and head straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'dlf-phase-5', 'name' => 'DLF Phase 5', 'type' => 'dlf',
        'landmarks' => ['Horizon Centre', 'Club Drive', 'Sector 53-54 Rapid Metro'],
        'metro_route' => 'Board the Rapid Metro at Sector 53-54, transfer at Sikanderpur to the Yellow Line to Hauz Khas, take the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Golf Course Road to NH-48, follow NH-48 towards Delhi, take the Airport/Dwarka bypass road, cross the Dwarka Flyover, and proceed to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'golf-course-road', 'name' => 'Golf Course Road', 'type' => 'dlf',
        'landmarks' => ['One Horizon Center', 'Sikanderpur Metro', 'Mega Mall'],
        'metro_route' => 'Board the Rapid Metro along Golf Course Road, transfer to the Yellow Line at Sikanderpur to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive down Golf Course Road and merge onto NH-48 towards Delhi. Take the Airport/Dwarka bypass exit, cross the Dwarka Flyover, and proceed to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'golf-course-extension-road', 'name' => 'Golf Course Extension Road', 'type' => 'dlf',
        'landmarks' => ['Sector 55-56 Metro', 'AIPL Joy Street', 'St. Xavier\'s High School'],
        'metro_route' => 'Take the Rapid Metro from Sector 55-56, transfer to the Yellow Line at Sikanderpur to Hauz Khas, take the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Golf Course Extension Road to Sohna Road or NH-48. Follow NH-48 towards Delhi, exit at the Airport/Dwarka bypass, and follow the road to Dwarka Sector 7.'
    ],
    [
        'slug' => 'mg-road', 'name' => 'MG Road', 'type' => 'dlf',
        'landmarks' => ['MGF Metropolitan Mall', 'MG Road Metro Station', 'Sikanderpur'],
        'metro_route' => 'Board the Yellow Line Metro at MG Road Station, travel to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10 Metro Station.',
        'road_route' => 'Drive via MG Road to NH-48 towards Delhi. Exit onto the Airport/Dwarka bypass road, cross the Dwarka Flyover, and head straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sushant-lok', 'name' => 'Sushant Lok', 'type' => 'dlf',
        'landmarks' => ['IFFCO Chowk Metro', 'Gold Souk Mall', 'Vyapar Kendra'],
        'metro_route' => 'Board the Yellow Line Metro at IFFCO Chowk, travel to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10 Metro Station.',
        'road_route' => 'Drive via IFFCO Chowk to NH-48 towards Delhi. Exit at the Airport/Dwarka link road, cross the Dwarka Flyover, and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-56', 'name' => 'Sector 56', 'type' => 'dlf',
        'landmarks' => ['Sector 56 Metro Station', 'Huda Market', 'More Megastore'],
        'metro_route' => 'Board the Rapid Metro at Sector 56, transfer at Sikanderpur to the Yellow Line to Hauz Khas, take the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Golf Course Road to NH-48, proceed towards Delhi, exit at the Airport/Dwarka bypass, cross the Dwarka Flyover to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-57', 'name' => 'Sector 57', 'type' => 'dlf',
        'landmarks' => ['Hong Kong Bazaar', 'Boom Plaza', 'Artemis Hospital'],
        'metro_route' => 'Board the Rapid Metro at Sector 55-56, transfer at Sikanderpur to the Yellow Line to Hauz Khas, take the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Golf Course Extension Road or Sohna Road to NH-48 towards Delhi. Exit at the Airport/Dwarka bypass road to Dwarka Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-65', 'name' => 'Sector 65', 'type' => 'dlf',
        'landmarks' => ['M3M Golfestate', 'WorldMark Gurugram', 'St. Xavier\'s School'],
        'metro_route' => 'Take a short auto to Sector 55-56 Metro, board the Rapid Metro to Sikanderpur, transfer to the Yellow Line to Hauz Khas, change to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Golf Course Extension Road to Sohna Road or NH-48. Follow NH-48 towards Delhi, exit at the Airport/Dwarka bypass, and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-67', 'name' => 'Sector 67', 'type' => 'dlf',
        'landmarks' => ['Elan Town Centre', 'M3M Urbana', 'Ireo Victory Valley'],
        'metro_route' => 'Board the Rapid Metro at Sector 55-56, transfer at Sikanderpur to the Yellow Line to Hauz Khas, take the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Golf Course Extension Road to NH-48 towards Delhi. Exit at the Airport/Dwarka bypass road and proceed directly to Sector 7 Ramphal Chowk.'
    ],

    // Sohna Road & Central Gurugram
    [
        'slug' => 'sohna-road', 'name' => 'Sohna Road', 'type' => 'central',
        'landmarks' => ['Omaxe Celebration Mall', 'Vatika City', 'Subhash Chowk'],
        'metro_route' => 'Take an auto to Millennium City Centre Metro Station, board the Yellow Line to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Sohna Road to Subhash Chowk and merge onto NH-48 towards Delhi. Exit at the Airport/Dwarka link road, cross the Dwarka Flyover, and head straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-14', 'name' => 'Sector 14', 'type' => 'central',
        'landmarks' => ['OMAXE Mall', 'Sector 14 Market', 'DAV Public School'],
        'metro_route' => 'Take the Yellow Line Metro from MG Road or IFFCO Chowk to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Sector 14 Main Road to NH-48 towards Delhi. Follow NH-48 to the Airport/Dwarka bypass road, cross the Dwarka Flyover to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-15', 'name' => 'Sector 15', 'type' => 'central',
        'landmarks' => ['Sector 15 Part 1 & 2', '32nd Avenue', 'Google Gurugram Office'],
        'metro_route' => 'Board the Yellow Line Metro at IFFCO Chowk, travel to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via 32nd Avenue to NH-48 towards Delhi. Take the Airport/Dwarka bypass road exit, cross the Dwarka Flyover, and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-17', 'name' => 'Sector 17', 'type' => 'central',
        'landmarks' => ['Bata Chowk', 'Sector 17 Market', 'Sukhrali'],
        'metro_route' => 'Take the Yellow Line Metro from IFFCO Chowk to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via NH-48 towards Delhi, exit at the Airport/Dwarka bypass, cross the Dwarka Flyover, and head straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-31', 'name' => 'Sector 31', 'type' => 'central',
        'landmarks' => ['Sector 31 Huda Market', 'NH-48 Flyover', 'Ajit Stadium'],
        'metro_route' => 'Board the Yellow Line Metro at IFFCO Chowk, travel to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive directly onto NH-48 towards Delhi, exit at the Airport/Dwarka bypass road, cross the Dwarka Flyover, and arrive at Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-40', 'name' => 'Sector 40', 'type' => 'central',
        'landmarks' => ['Sector 40 Huda Market', 'Ryan International School', 'Sector 31 Border'],
        'metro_route' => 'Take the Yellow Line Metro from IFFCO Chowk to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via NH-48 towards Delhi. Exit at the Airport/Dwarka link road, cross the Dwarka Flyover, and proceed straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-45', 'name' => 'Sector 45', 'type' => 'central',
        'landmarks' => ['St. Angel\'s School', 'Huda Market Sector 45', 'Greenwood City'],
        'metro_route' => 'Take the Yellow Line Metro from Millennium City Centre to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Greenwood City to NH-48 towards Delhi. Take the Airport/Dwarka bypass road exit, cross the Dwarka Flyover, and proceed to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-46', 'name' => 'Sector 46', 'type' => 'central',
        'landmarks' => ['Huda Market Sector 46', 'Amity International School', 'Sector 46 Community Centre'],
        'metro_route' => 'Take the Yellow Line Metro from Millennium City Centre to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Netaji Subhash Marg to NH-48 towards Delhi. Exit at the Airport/Dwarka link road and proceed straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-47', 'name' => 'Sector 47', 'type' => 'central',
        'landmarks' => ['Malls on Sohna Road', 'Baani Square', 'Good Earth City Centre'],
        'metro_route' => 'Take an auto to Millennium City Centre Metro Station, board the Yellow Line to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Netaji Subhash Marg or Sohna Road to NH-48 towards Delhi. Take the Airport/Dwarka bypass road, cross the Dwarka Flyover to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-49', 'name' => 'Sector 49', 'type' => 'central',
        'landmarks' => ['Omaxe City Centre', 'Sohna Road', 'Vatika City'],
        'metro_route' => 'Take the Yellow Line from Millennium City Centre to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Sohna Road to NH-48 towards Delhi. Exit onto the Airport/Dwarka bypass road and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-52', 'name' => 'Sector 52', 'type' => 'central',
        'landmarks' => ['Ardee City', 'Tau Devi Lal Botanical Garden', 'Ardee Mall'],
        'metro_route' => 'Take the Yellow Line from Millennium City Centre to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Ardee City to NH-48 towards Delhi. Take the Airport/Dwarka bypass road exit and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-70', 'name' => 'Sector 70', 'type' => 'central',
        'landmarks' => ['Tulip Violet', 'Spaze Apres', 'Subhash Chowk'],
        'metro_route' => 'Take the Yellow Line Metro from Millennium City Centre to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Sohna Road to NH-48 towards Delhi. Exit at the Airport/Dwarka bypass road and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'nirvana-country', 'name' => 'Nirvana Country', 'type' => 'central',
        'landmarks' => ['Nirvana Courtyard', 'Fresco', 'Sector 50 Market'],
        'metro_route' => 'Take the Yellow Line from Millennium City Centre to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Sohna Road to NH-48 towards Delhi. Exit onto the Airport/Dwarka bypass road, cross the Dwarka Flyover, and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'south-city-1', 'name' => 'South City 1', 'type' => 'central',
        'landmarks' => ['Millennium City Centre Metro', 'Signature Towers', 'Unitech House'],
        'metro_route' => 'Board the Yellow Line Metro directly at Millennium City Centre, travel to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and switch to the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Signature Towers directly onto NH-48 towards Delhi. Exit at the Airport/Dwarka bypass road, cross the Dwarka Flyover, and arrive at Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'south-city-2', 'name' => 'South City 2', 'type' => 'central',
        'landmarks' => ['Arcadia Market', 'Soho brand shops', 'Sohna Road'],
        'metro_route' => 'Take the Yellow Line Metro from Millennium City Centre to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive via Sohna Road to NH-48 towards Delhi. Exit at the Airport/Dwarka bypass road and proceed directly to Sector 7 Ramphal Chowk.'
    ],

    // Border areas (Palam Vihar, Sector 22 & 23)
    [
        'slug' => 'palam-vihar', 'name' => 'Palam Vihar', 'type' => 'border',
        'landmarks' => ['Ansal Plaza', 'Spaniard Court', 'Carterpuri Road'],
        'metro_route' => 'Take a short 10-minute auto-rickshaw or cab directly to Dwarka Sector 21 Metro Station. Board the Blue Line and travel just two stations to Dwarka Sector 10 Metro Station.',
        'road_route' => 'Drive via Carterpuri Road or Bajghera Road across the Gurgaon-Delhi border directly into Dwarka. Follow the main sector roads straight to Sector 7 Ramphal Chowk (approx. 10-12 minutes).'
    ],
    [
        'slug' => 'sector-22', 'name' => 'Sector 22', 'type' => 'border',
        'landmarks' => ['Rotary Club', 'Sector 22 Market', 'Dundahera'],
        'metro_route' => 'Take a short auto or cab to Dwarka Sector 21 Metro Station, board the Blue Line, and deboard at Dwarka Sector 10 Metro Station.',
        'road_route' => 'Drive via Old Delhi Gurgaon Road across the border onto Kapashera-Dwarka link road, enter Dwarka, and head straight to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-23', 'name' => 'Sector 23', 'type' => 'border',
        'landmarks' => ['Sector 23 Huda Market', 'Chiranjiv Bharati School', 'Carterpuri'],
        'metro_route' => 'Take a short auto to Dwarka Sector 21 Metro Station, board the Blue Line, and deboard at Dwarka Sector 10 Metro Station.',
        'road_route' => 'Drive via Bajghera Road directly across the Gurgaon-Delhi border, follow the sector roads into Dwarka, and proceed straight to Sector 7 Ramphal Chowk.'
    ],

    // New Gurugram & Manesar (Dwarka Expressway routes)
    [
        'slug' => 'manesar', 'name' => 'Manesar', 'type' => 'expressway',
        'landmarks' => ['IMT Manesar', 'Heritage Village Resort', 'NH-48 Toll'],
        'metro_route' => 'Take a cab or bus to Millennium City Centre Metro Station, board the Yellow Line to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive onto the **Dwarka Expressway (NH-248BB)** directly from Northern Peripheral Road. Follow the signal-free expressway straight into Dwarka (approx. 25 minutes), exit towards Sector 9/10, and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'new-gurugram', 'name' => 'New Gurugram', 'type' => 'expressway',
        'landmarks' => ['Sector 82/83', 'Sapphire Eighty Three', 'Watika India Next'],
        'metro_route' => 'Take a cab to Millennium City Centre Metro Station, board the Yellow Line to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive onto the **Dwarka Expressway (NH-248BB)**. Follow the signal-free expressway straight into Dwarka (approx. 20 minutes), exit towards Sector 9/10, and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-82', 'name' => 'Sector 82', 'type' => 'expressway',
        'landmarks' => ['Sapphire Ninety', 'Vatika Town Square', 'Mapsko Casa Bella'],
        'metro_route' => 'Take a cab to Millennium City Centre Metro Station, board the Yellow Line to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive directly onto the **Dwarka Expressway (NH-248BB)**. Follow the signal-free expressway straight into Dwarka (approx. 20 minutes), exit towards Sector 9/10, and proceed directly to Sector 7 Ramphal Chowk.'
    ],
    [
        'slug' => 'sector-83', 'name' => 'Sector 83', 'type' => 'expressway',
        'landmarks' => ['Sapphire Eighty Three', 'Emaar Palm Gardens', 'Vatika G-Block'],
        'metro_route' => 'Take a cab to Millennium City Centre Metro Station, board the Yellow Line to Hauz Khas, transfer to the Magenta Line to Janakpuri West, and take the Blue Line to Dwarka Sector 10.',
        'road_route' => 'Drive directly onto the **Dwarka Expressway (NH-248BB)**. Follow the signal-free expressway straight into Dwarka (approx. 20 minutes), exit towards Sector 9/10, and proceed directly to Sector 7 Ramphal Chowk.'
    ]
];

$template = <<<'CODE'
<?php
// Predefine metadata for header-code.php
$path_prefix = '../../../';
$location_name = '##LOCATION_NAME##';
$location_slug = '##LOCATION_SLUG##';
$landmarks_str = '##LANDMARKS_STR##';
$metro_route = '##METRO_ROUTE##';
$road_route = '##ROAD_ROUTE##';

$current_metadata = [
    'title' => "Best Hair Wig for Man in $location_name | Hair Patch - Growig Hair Solution",
    'description' => "Looking for the best hair wig for man in $location_name? Growig Hair Solution is a trusted hair patch and wig store. Get natural-looking non-surgical hair replacement near $landmarks_str.",
    'url' => "https://growighairsolution.com/hair-patch-for-men/gurugram/$location_slug/",
    'image' => 'https://growighairsolution.com/assets/premium-har-pathc.png',
    'type' => 'website'
];

$breadcrumb_schema = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://growighairsolution.com/"
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Hair Patch for Men in Gurugram",
            "item" => "https://growighairsolution.com/hair-patch-for-men/gurugram/$location_slug/"
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => "$location_name",
            "item" => "https://growighairsolution.com/hair-patch-for-men/gurugram/$location_slug/"
        ]
    ]
];

include $path_prefix . 'custom-header-link.php';
?>
<!DOCTYPE html>
<html class="light scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Best Hair Wig for Man in <?php echo $location_name; ?> | Growig Hair Solution</title>
    <meta content="<?php echo $current_metadata['description']; ?>" name="description"/>
    <meta name="keywords" content="hair wig for man in <?php echo strtolower($location_name); ?>, best hair wig for man in <?php echo strtolower($location_name); ?>, hair patch for men <?php echo strtolower($location_name); ?>, hair wig shop in <?php echo strtolower($location_name); ?>, non surgical hair replacement <?php echo strtolower($location_name); ?>" />
    <meta name="robots" content="index, follow" />
    <?php include $path_prefix . 'header-code.php'; ?>
</head>
<body class="bg-background text-on-background font-body-md antialiased selection:bg-primary/20 selection:text-primary">
<?php include $path_prefix . 'header.php'; ?>

<main class="pt-20">
    <!-- Breadcrumbs -->
    <div class="max-w-[1280px] w-full mx-auto px-margin-mobile md:px-margin-desktop pt-8 pb-2">
        <nav aria-label="Breadcrumb" class="flex items-center flex-wrap gap-2 text-xs md:text-sm text-secondary font-label-md">
            <a href="<?php echo $path_prefix; ?>./" class="hover:text-primary transition-colors duration-200">Home</a>
            <span class="material-symbols-outlined text-[14px] md:text-[16px] text-outline-variant shrink-0" style="font-size: 14px;">chevron_right</span>
            <span class="text-primary font-semibold truncate" aria-current="page">Hair Wig for Man in <?php echo $location_name; ?></span>
        </nav>
    </div>

    <!-- Hero Section -->
    <section class="py-section-gap">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop flex flex-col gap-6 md:grid md:grid-cols-2 md:gap-16 items-center">
            <div class="z-10 md:space-y-8 space-y-6">
                <span class="inline-block py-1 px-4 rounded-full bg-primary/10 text-primary font-label-md">PREMIUM RESTORATION IN GURUGRAM</span>
                <h1 class="font-display-lg text-2xl md:text-headline-lg text-on-surface leading-tight text-balance">
                    Best Hair Wig for Man in <?php echo $location_name; ?>
                </h1>
                
                <!-- Mobile Hero Image -->
                <div class="block md:hidden relative group w-full my-4">
                    <div class="absolute -inset-4 bg-primary/5 rounded-[40px] blur-2xl transform"></div>
                    <img alt="Best Hair Wig for Man in <?php echo $location_name; ?>" class="relative rounded-[32px] royal-shadow w-full h-auto" src="<?php echo $path_prefix; ?>assets/main-hero-section.png"/>
                </div>

                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    Get a 100% natural, undetectable hair wig or hair patch custom-designed for you. We provide high-quality human hair wigs and non-surgical hair replacement options, serving clients from <?php echo $location_name; ?> and nearby landmarks like <?php echo $landmarks_str; ?>.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="<?php echo $path_prefix; ?>contact" class="bg-primary text-white px-10 py-4 rounded-full font-label-md hover:bg-primary-container transition-colors royal-shadow text-center">Schedule Free Consultation</a>
                    <a href="<?php echo $path_prefix; ?>./#collections" class="border border-outline text-on-surface px-10 py-4 rounded-full font-label-md hover:bg-surface-container transition-colors text-center">View Collections</a>
                </div>
            </div>
            <div class="hidden md:block relative group w-full">
                <div class="absolute -inset-4 bg-primary/5 rounded-[40px] blur-2xl transform group-hover:scale-105 transition-transform duration-700"></div>
                <img alt="Best Hair Wig for Man in <?php echo $location_name; ?>" class="relative rounded-[32px] royal-shadow w-full h-auto transition-transform duration-700 group-hover:scale-[1.02]" src="<?php echo $path_prefix; ?>assets/main-hero-section.png"/>
            </div>
        </div>
    </section>

    <!-- Content / About Section -->
    <section class="bg-surface-container-low py-section-gap">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <div class="lg:col-span-8 space-y-12">
                    <div class="space-y-6">
                        <h2 class="font-headline-lg text-[28px] md:text-headline-lg text-on-surface">Leading Hair Wig & Hair Patch Studio for <?php echo $location_name; ?></h2>
                        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                            Hair loss can affect your style and confidence, but you don't need surgery to restore your look. Growig Hair Solution provides top-grade, custom <strong>hair wig for man in <?php echo $location_name; ?></strong>. We specialize in custom fitting, styling, and securing hair systems that match your hair's natural density, texture, and wave.
                        </p>
                        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                            Our studio is located at Ramphal Chowk, Sector 7 Dwarka. We welcome clients from all across Gurugram to experience premium, private restoration sessions. Each hair patch is lightweight, breathable, and designed for an active lifestyle.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="glass-card p-8 rounded-3xl space-y-4 border-primary/10">
                            <span class="material-symbols-outlined text-primary text-4xl">verified</span>
                            <h3 class="font-headline-md text-headline-md text-primary">100% Human Hair</h3>
                            <p class="font-body-md text-on-surface-variant">We source premium Remy human hair with intact cuticles, ensuring a tangle-free, natural fall and seamless blending with your native hair.</p>
                        </div>
                        <div class="glass-card p-8 rounded-3xl space-y-4 border-primary/10">
                            <span class="material-symbols-outlined text-primary text-4xl">air</span>
                            <h3 class="font-headline-md text-headline-md text-primary">Breathable Bases</h3>
                            <p class="font-body-md text-on-surface-variant">Our systems feature French lace, Swiss lace, and ultra-thin monofilament bases that provide optimal scalp ventilation for hot weather.</p>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h2 class="font-headline-lg text-[28px] md:text-headline-lg text-on-surface">Bespoke Hair Patch Fitting & Fixing Near You</h2>
                        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                            Our master stylists perform precise digital scalp mapping to ensure the wig fits your head's unique contours. In a private consultation room, we match the shade gradients and cut the system to blend perfectly. Whether you prefer hair bonding, hair weaving, or clipping, we guarantee a secure hold that lets you swim, exercise, and live with complete freedom.
                        </p>
                    </div>

                    <!-- How to Reach Our Dwarka Studio -->
                    <div class="space-y-6 bg-surface-container/40 p-8 rounded-3xl border border-primary/15">
                        <h3 class="font-headline-md text-2xl text-on-surface flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">directions_car</span>
                            How to Reach Our Dwarka Studio from <?php echo $location_name; ?>
                        </h3>
                        <p class="font-body-md text-on-surface-variant leading-relaxed">
                            If you are traveling from <?php echo $location_name; ?>, here are the easiest ways to reach our flagship studio at <strong>Ramphal Chowk Road, Sector 7 Dwarka</strong>:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                            <div class="space-y-2">
                                <h4 class="font-label-md text-primary uppercase tracking-wider text-xs flex items-center gap-1.5 font-bold">
                                    <span class="material-symbols-outlined text-sm">train</span> By Metro (Public Transport)
                                </h4>
                                <p class="text-sm text-on-surface-variant leading-relaxed">
                                    <?php echo $metro_route; ?>
                                </p>
                            </div>
                            <div class="space-y-2">
                                <h4 class="font-label-md text-primary uppercase tracking-wider text-xs flex items-center gap-1.5 font-bold">
                                    <span class="material-symbols-outlined text-sm">directions_car</span> By Road (Personal Transport)
                                </h4>
                                <p class="text-sm text-on-surface-variant leading-relaxed">
                                    <?php echo $road_route; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4">
                    <div class="sticky top-32 glass-card p-10 rounded-[32px] royal-shadow space-y-8 border-primary/20">
                        <h4 class="font-headline-md text-headline-md text-on-surface">Why Choose Us?</h4>
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <p class="font-label-md text-on-surface">Undetectable Hairline</p>
                                    <p class="text-sm text-on-surface-variant">Bleached single knots at the front lace edge replicate natural growth.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <p class="font-label-md text-on-surface">Active Lifestyle Ready</p>
                                    <p class="text-sm text-on-surface-variant">Waterproof, sweat-resistant medical bonding holds up during sports.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="material-symbols-outlined text-primary">check_circle</span>
                                <div>
                                    <p class="font-label-md text-on-surface">Experienced Stylists</p>
                                    <p class="text-sm text-on-surface-variant">Over 10 years of experience in styling custom hair systems.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="<?php echo $path_prefix; ?>contact" class="w-full bg-primary text-white py-4 rounded-xl font-label-md hover:brightness-110 transition-all block text-center">Get a Free Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid Showcase -->
    <section class="py-section-gap bg-background">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center mb-16 space-y-4">
                <h2 class="font-display-lg text-[28px] md:text-headline-lg text-on-surface">Custom Hair Systems Available</h2>
                <p class="font-body-lg text-on-surface-variant max-w-2xl mx-auto">Explore our range of premium hair systems crafted for comfort, realism, and longevity.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 border-primary/10">
                    <h4 class="font-headline-md text-xl text-primary">Australian Hair Patch</h4>
                    <p class="font-body-md text-on-surface-variant">A hybrid system combining a highly breathable lace center with a micro-thin poly perimeter for natural hairlines and secure tape bonding.</p>
                </div>
                <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 border-primary/10">
                    <h4 class="font-headline-md text-xl text-primary">BMW Hair Patch</h4>
                    <p class="font-body-md text-on-surface-variant">Reinforced hybrid base with poly-skin borders and cross-strips for extra stability, durability, and easy cleaning during servicing.</p>
                </div>
                <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 border-primary/10">
                    <h4 class="font-headline-md text-xl text-primary">Filament / Monofilament</h4>
                    <p class="font-body-md text-on-surface-variant">Hand-tied Remy human hair on a sheer, fine mesh base that lets your natural scalp color show through for multidirectional parting styling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="bg-surface-container py-section-gap relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-primary/5 -skew-x-12 transform translate-x-1/2"></div>
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
            <div class="mb-20">
                <h2 class="font-display-lg text-[28px] md:text-headline-lg text-on-surface mb-6">Our Fitting Process</h2>
                <p class="font-body-lg text-on-surface-variant max-w-xl">4 steps to a completely transformed, natural look.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="relative group">
                    <div class="font-display-lg text-[120px] text-primary/10 absolute -top-12 -left-4">01</div>
                    <div class="relative pt-12 space-y-4">
                        <h4 class="font-headline-md text-on-surface">Consultation</h4>
                        <p class="font-body-md text-on-surface-variant">We evaluate your hair patterns, texture, and density in a private setup.</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="font-display-lg text-[120px] text-primary/10 absolute -top-12 -left-4">02</div>
                    <div class="relative pt-12 space-y-4">
                        <h4 class="font-headline-md text-on-surface">Scalp Mapping</h4>
                        <p class="font-body-md text-on-surface-variant">We design a custom base matching the exact curvature of your scalp.</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="font-display-lg text-[120px] text-primary/10 absolute -top-12 -left-4">03</div>
                    <div class="relative pt-12 space-y-4">
                        <h4 class="font-headline-md text-on-surface">Shade Blending</h4>
                        <p class="font-body-md text-on-surface-variant">We match the hair color gradients with your side hair to avoid any line of separation.</p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="font-display-lg text-[120px] text-primary/10 absolute -top-12 -left-4">04</div>
                    <div class="relative pt-12 space-y-4">
                        <h4 class="font-headline-md text-on-surface">Styling & Cut</h4>
                        <p class="font-body-md text-on-surface-variant">Our stylist cuts and styles the system on your head for a perfectly integrated look.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Local FAQ Section -->
    <section class="py-section-gap">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-20">
            <div>
                <h2 class="font-display-lg text-[28px] md:text-headline-lg text-on-surface mb-8">Frequently Asked Questions</h2>
                <p class="font-body-lg text-on-surface-variant mb-12">Learn more about getting a hair wig or hair patch in <?php echo $location_name; ?>.</p>
                <div class="w-full h-[400px] flex items-center justify-center bg-white rounded-3xl royal-shadow overflow-hidden border border-surface-variant/30">
                    <img alt="FAQ hair wig" class="w-full h-full object-cover" src="<?php echo $path_prefix; ?>assets/hair-patch.jpg"/>
                </div>
            </div>
            <div class="space-y-4">
                <details class="group glass-card p-6 rounded-2xl border-primary/10 royal-shadow" open>
                    <summary class="list-none flex justify-between items-center cursor-pointer font-headline-md text-on-surface focus:outline-none">
                        How can I get a custom hair wig near <?php echo $location_name; ?>?
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                        Our studio is located at Sector 7, Dwarka. Clients from <?php echo $location_name; ?> can easily book a private consultation, complete their mapping, and get their hair system fitted on the same day.
                    </div>
                </details>
                <details class="group glass-card p-6 rounded-2xl border-primary/10 royal-shadow">
                    <summary class="list-none flex justify-between items-center cursor-pointer font-headline-md text-on-surface focus:outline-none">
                        Is hair bonding safe for the scalp?
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                        Yes, absolutely. We use only FDA-approved, hypoallergenic dermal adhesives and protective scalp barriers. The process is completely painless, non-surgical, and prevents any damage or irritation to your skin.
                    </div>
                </details>
                <details class="group glass-card p-6 rounded-2xl border-primary/10 royal-shadow">
                    <summary class="list-none flex justify-between items-center cursor-pointer font-headline-md text-on-surface focus:outline-none">
                        Can I exercise, swim, or sleep with the hair wig?
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                        Yes, our premium human hair systems and bonding agents are completely waterproof and sweat-resistant. You can shower, swim, work out at the gym, and sleep without worrying about the system moving or lifting.
                    </div>
                </details>
                <details class="group glass-card p-6 rounded-2xl border-primary/10 royal-shadow">
                    <summary class="list-none flex justify-between items-center cursor-pointer font-headline-md text-on-surface focus:outline-none">
                        How often does a hair patch require servicing?
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="mt-4 font-body-md text-on-surface-variant leading-relaxed">
                        We recommend a servicing and re-bonding session every 3 to 4 weeks. During this maintenance visit, we clean the system, treat the scalp, and re-apply fresh medical adhesives to ensure it remains clean and secure.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- Other Locations Grid -->
    <section class="py-section-gap bg-surface-container-low border-t border-surface-variant/30">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <h3 class="font-headline-lg text-2xl text-on-surface mb-8 text-center">Other Gurugram Locations We Serve</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php
                $other_locs = [
                    'dlf-phase-1' => 'DLF Phase 1',
                    'dlf-phase-2' => 'DLF Phase 2',
                    'dlf-phase-3' => 'DLF Phase 3',
                    'dlf-phase-4' => 'DLF Phase 4',
                    'dlf-phase-5' => 'DLF Phase 5',
                    'sohna-road' => 'Sohna Road',
                    'golf-course-road' => 'Golf Course Road',
                    'golf-course-extension-road' => 'Golf Course Ext.',
                    'mg-road' => 'MG Road',
                    'sector-14' => 'Sector 14',
                    'sector-15' => 'Sector 15',
                    'sector-17' => 'Sector 17',
                    'sector-31' => 'Sector 31',
                    'sector-40' => 'Sector 40',
                    'sector-45' => 'Sector 45',
                    'sector-46' => 'Sector 46',
                    'sector-47' => 'Sector 47',
                    'sector-49' => 'Sector 49',
                    'sector-52' => 'Sector 52',
                    'sector-56' => 'Sector 56',
                    'sector-57' => 'Sector 57',
                    'sector-65' => 'Sector 65',
                    'sector-67' => 'Sector 67',
                    'sector-70' => 'Sector 70',
                    'palam-vihar' => 'Palam Vihar',
                    'sushant-lok' => 'Sushant Lok',
                    'nirvana-country' => 'Nirvana Country',
                    'south-city-1' => 'South City 1',
                    'south-city-2' => 'South City 2',
                    'manesar' => 'Manesar',
                    'new-gurugram' => 'New Gurugram',
                    'sector-22' => 'Sector 22',
                    'sector-23' => 'Sector 23',
                    'sector-82' => 'Sector 82',
                    'sector-83' => 'Sector 83'
                ];
                foreach ($other_locs as $slug_key => $name_val) {
                    if ($slug_key !== $location_slug) {
                        echo '<a href="../' . $slug_key . '/" class="p-4 rounded-xl border border-outline/25 text-center text-secondary hover:text-primary hover:border-primary transition-all font-label-md text-sm">' . $name_val . '</a>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop">
        <div class="max-w-[1280px] mx-auto glass-card rounded-[48px] overflow-hidden royal-shadow border-primary/30">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="p-6 md:p-16 space-y-8">
                    <h2 class="font-display-lg text-[32px] md:text-display-lg text-on-surface">Regain Your Confident Look.</h2>
                    <p class="font-body-lg text-on-surface-variant leading-relaxed">Don't let hair thinning affect your confidence. Join hundreds of satisfied clients in <?php echo $location_name; ?> who have chosen our premium non-surgical hair replacement. Book your free consultation today.</p>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <a href="<?php echo $path_prefix; ?>contact" class="bg-primary text-white px-12 py-5 rounded-full font-label-md hover:scale-105 active:scale-95 transition-all royal-shadow text-center">Book Appointment</a>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">call</span>
                            </div>
                            <div>
                                <p class="text-xs font-label-md uppercase tracking-widest text-primary">Call Support</p>
                                <div class="flex flex-col">
                                    <a href="tel:+918766216564" class="font-body-md font-bold hover:text-primary transition-colors">+91 87662 16564</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative bg-surface-container min-h-[300px] lg:min-h-0">
                    <img alt="Hair Transformation Before and After" class="absolute inset-0 w-full h-full object-cover" src="<?php echo $path_prefix; ?>assets/hair-patch.jpg"/>
                    <div class="absolute inset-0 bg-gradient-to-r from-surface-container to-transparent lg:block hidden"></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include $path_prefix . 'footer.php'; ?>

<script>
    // Smooth scroll for anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Header transparency shift on scroll
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 50) {
            header.classList.add('py-2');
            header.classList.remove('h-20');
        } else {
            header.classList.remove('py-2');
            header.classList.add('h-20');
        }
    });
</script>
</body>
</html>
CODE;

// Ensure main directories exist
if (!file_exists('hair-patch-for-men')) {
    mkdir('hair-patch-for-men', 0755);
}
if (!file_exists('hair-patch-for-men/gurugram')) {
    mkdir('hair-patch-for-men/gurugram', 0755);
}

foreach ($locations as $loc) {
    $dir = 'hair-patch-for-men/gurugram/' . $loc['slug'];
    if (!file_exists($dir)) {
        mkdir($dir, 0755, true);
    }
    
    $landmarks_str = implode(', ', $loc['landmarks']);
    
    $content = $template;
    $content = str_replace('##LOCATION_NAME##', $loc['name'], $content);
    $content = str_replace('##LOCATION_SLUG##', $loc['slug'], $content);
    $content = str_replace('##LANDMARKS_STR##', $landmarks_str, $content);
    $content = str_replace('##METRO_ROUTE##', $loc['metro_route'], $content);
    $content = str_replace('##ROAD_ROUTE##', $loc['road_route'], $content);
    
    file_put_contents($dir . '/index.php', $content);
    echo "Generated landing page for: " . $loc['name'] . " in " . $dir . "/index.php\n";
}

echo "All Gurugram location pages generated successfully!\n";
?>
