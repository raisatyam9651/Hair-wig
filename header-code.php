<?php
// Common header code - included in the <head> section of all pages.
// It dynamically manages page metadata, OG tags, canonical URLs, and structured JSON-LD schemas.

$page = basename($_SERVER['PHP_SELF'], '.php');
$path_prefix = isset($path_prefix) ? $path_prefix : ((strpos($_SERVER['PHP_SELF'], '/blog/') !== false) ? '../' : '');

// Define metadata for all pages for schema and OG tags
$pages_metadata = [
    'index' => [
        'title' => 'Hair Wig Shop in Dwarka | Best Hair Patch & Wig Center | Growig Hair Solution',
        'description' => 'Looking for the best hair wig shop in Dwarka? Growig Hair Solution is a premier hair patch service centre in Dwarka. Visit our hair wig store in Dwarka Delhi for natural, undetectable non-surgical hair replacement. Book a free consultation!',
        'url' => 'https://growighairsolution.com/',
        'image' => 'https://growighairsolution.com/assets/premium-har-pathc.png',
        'type' => 'website'
    ],
    'about' => [
        'title' => 'About Us | Growig Hair Solution',
        'description' => 'Discover the pinnacle of hair restoration in Dwarka. Growig Hair Solution offers bespoke artistry and non-surgical hair replacement since 2014.',
        'url' => 'https://growighairsolution.com/about',
        'image' => 'https://growighairsolution.com/assets/premium-har-pathc.png',
        'type' => 'website'
    ],
    'contact' => [
        'title' => 'Contact Us | Growig Hair Solution',
        'description' => 'Book your private, complimentary consultation at our Dwarka studio. Contact Growig Hair Solution Dwarka for non-surgical hair replacement.',
        'url' => 'https://growighairsolution.com/contact',
        'image' => 'https://growighairsolution.com/assets/premium-har-pathc.png',
        'type' => 'website'
    ],
    'premium-hair-patch' => [
        'title' => 'Best Hair Patch in Dwarka | Hair Patch for Men | Growig Hair Solution',
        'description' => 'Looking for the best hair patch in dwarka? Growig Hair Solution is a leading hair patch centre and clinic in dwarka. We offer premium hair patch service for men near you. Book a free consultation!',
        'url' => 'https://growighairsolution.com/premium-hair-patch',
        'image' => 'https://growighairsolution.com/assets/premium-har-pathc.png',
        'type' => 'product',
        'service_name' => 'Premium Hair Patch',
        'service_desc' => 'Custom-designed hair patches that seamlessly blend with your natural hair texture and color for an undetectable finish.'
    ],
    'full-hair-wig' => [
        'title' => 'Full Hair Wig in Dwarka | Best Hair Wig in Dwarka | Growig Hair Solution',
        'description' => 'Searching for the best hair wig in dwarka? Growig Hair Solution offers natural, undetectable full hair wig in dwarka. Same-day fitting and custom designs. Book a free consultation!',
        'url' => 'https://growighairsolution.com/full-hair-wig',
        'image' => 'https://growighairsolution.com/assets/full-hair-wig-hero.png',
        'type' => 'product',
        'service_name' => 'Full Hair Wigs',
        'service_desc' => 'High-grade human hair wigs offering complete coverage with a breathable, comfortable base for daily wear.'
    ],
    'non-surgical-replacement' => [
        'title' => 'Non Surgical Hair Replacement in Dwarka | Hair Replacement System | Growig Hair Solution',
        'description' => 'Looking for non surgical hair replacement in dwarka? Growig Hair Solution offers custom hair replacement systems in dwarka for hair restoration without surgery. Free consultation!',
        'url' => 'https://growighairsolution.com/non-surgical-replacement',
        'image' => 'https://growighairsolution.com/assets/Non-Surgical%20Replacement.png',
        'type' => 'product',
        'service_name' => 'Non-Surgical Hair Replacement',
        'service_desc' => 'A painless, immediate solution to hair loss without the risks or downtime of surgical transplants.'
    ],
    'hair-bonding' => [
        'title' => 'Custom Hair Bonding in Dwarka | Best Hair Bonding Service | Growig Hair Solution',
        'description' => 'Looking for the best hair bonding service in dwarka? Growig Hair Solution offers natural, custom hair bonding in dwarka with skin-safe adhesives. Book a free consultation!',
        'url' => 'https://growighairsolution.com/hair-bonding',
        'image' => 'https://growighairsolution.com/assets/hair-bonding-hero-section.png',
        'type' => 'product',
        'service_name' => 'Hair Bonding',
        'service_desc' => 'Secure, medical-grade adhesive bonding that allows for an active lifestyle, including swimming and sports.'
    ],
    'maintenance-and-styling' => [
        'title' => 'Hair Patch Maintenance in Dwarka | Hair System Maintenance | Growig Hair Solution',
        'description' => 'Looking for professional hair patch maintenance in Dwarka? Growig Hair Solution offers expert hair system maintenance in Dwarka, including hair patch cleaning in Dwarka and hair styling for hair patch in Dwarka. Book a free consultation!',
        'url' => 'https://growighairsolution.com/maintenance-and-styling',
        'image' => 'https://growighairsolution.com/assets/Maintenance%20&%20Styling.png',
        'type' => 'product',
        'service_name' => 'Maintenance & Styling',
        'service_desc' => 'Regular upkeep, cleaning, and professional styling to ensure your hair system always looks fresh and natural.'
    ],
    'custom-hairline-design' => [
        'title' => 'Custom Hairline Design in Dwarka | Custom Hair Patch Design | Growig Hair Solution',
        'description' => 'Searching for the premier custom hairline design in Dwarka? Growig Hair Solution offers custom hair patch design in Dwarka. Achieve a natural, undetectable look. Book a free consultation today!',
        'url' => 'https://growighairsolution.com/custom-hairline-design',
        'image' => 'https://growighairsolution.com/assets/Custom%20Hairline%20Design.png',
        'type' => 'product',
        'service_name' => 'Custom Hairline & Hair Patch Design',
        'service_desc' => 'Bespoke custom hairline design and custom hair patch design in Dwarka. We craft natural, undetectable hair systems matching your facial geometry and style.'
    ],
    'australian-hair-patch-dwarka' => [
        'title' => 'Best Australian Hair Patch in Dwarka | Hair Patch for Men | Growig Hair Solution',
        'description' => 'Looking for the best Australian hair patch in Dwarka? Growig Hair Solution offers premium, natural, and breathable Australian hair patch services near you. Book a free consultation!',
        'url' => 'https://growighairsolution.com/australian-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/australian-hair-patch-hero.png',
        'type' => 'product',
        'service_name' => 'Australian Hair Patch',
        'service_desc' => 'Premium Australian hair patch system featuring a breathable Swiss lace front/center and a durable transparent poly skin perimeter for natural hairlines and secure bonding.'
    ],
    'bmw-hair-patch-dwarka' => [
        'title' => 'Best BMW Hair Patch in Dwarka | Hair Patch for Men | Growig Hair Solution',
        'description' => 'Looking for the best BMW hair patch in Dwarka? Growig Hair Solution offers premium, durable, and highly breathable BMW style hair patch services. Book a free consultation today!',
        'url' => 'https://growighairsolution.com/bmw-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/bmw-hair-patch-hero.png',
        'type' => 'product',
        'service_name' => 'BMW Hair Patch',
        'service_desc' => 'Premium BMW hair patch system featuring a highly durable hybrid base with breathable lace center, reinforced poly-skin cross-strips for structural integrity, and transparent borders for secure bonding.'
    ],
    'filament-hair-patch-dwarka' => [
        'title' => 'Best Filament Hair Patch in Dwarka | Monofilament Hair System | Growig Hair Solution',
        'description' => 'Looking for the best Filament hair patch in Dwarka? Growig Hair Solution offers natural monofilament hair systems with multi-directional parting and excellent scalp ventilation. Book a free consultation today!',
        'url' => 'https://growighairsolution.com/filament-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/filament-hair-patch-hero.png',
        'type' => 'product',
        'service_name' => 'Filament Hair Patch',
        'service_desc' => 'Bespoke monofilament hair patch system allowing 360-degree parting styling, featuring hand-tied Remy hair on a mesh net base for ultimate ventilation and scalp resemblance.'
    ],
    'superior-filament-hair-patch-dwarka' => [
        'title' => 'Best Superior Filament Hair Patch in Dwarka | Growig Hair Solution',
        'description' => 'Looking for the best Superior Filament hair patch in Dwarka? Growig Hair Solution offers double monofilament hair systems for ultimate scalp comfort, natural parting, and durability. Book a free consultation!',
        'url' => 'https://growighairsolution.com/superior-filament-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/superior-filament-hair-patch-hero.png',
        'type' => 'product',
        'service_name' => 'Superior Filament Hair Patch',
        'service_desc' => 'Ultra-premium double monofilament hair patch designed for sensitive scalps, featuring a protective soft layer under hand-tied Remy hair for maximum comfort and realism.'
    ],
    'monofilament-hair-patch-dwarka' => [
        'title' => 'Best Monofilament Hair Patch in Dwarka | Growig Hair Solution',
        'description' => 'Looking for the best Monofilament Hair Patch in Dwarka? Growig Hair Solution offers premium monofilament hair systems for natural parting and breathable comfort. Book a free consultation!',
        'url' => 'https://growighairsolution.com/monofilament-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/filament-hair-patch-hero.png',
        'type' => 'product',
        'service_name' => 'Monofilament Hair Patch',
        'service_desc' => 'High-quality monofilament hair patch system that provides an incredibly realistic scalp appearance with multidirectional styling and exceptional breathability.'
    ],
    'mono-silk-hair-patch-dwarka' => [
        'title' => 'Best Mono Silk Hair Patch in Dwarka | Growig Hair Solution',
        'description' => 'Looking for the best Mono Silk Hair Patch in Dwarka? Growig Hair Solution provides undetectable mono silk hair systems with natural hairlines and premium comfort. Free consultation!',
        'url' => 'https://growighairsolution.com/mono-silk-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/filament-hair-patch-hero.png',
        'type' => 'product',
        'service_name' => 'Mono Silk Hair Patch',
        'service_desc' => 'Premium mono silk hair patch featuring a highly durable and soft silk base. Designed to provide the most natural-looking parting with invisible knots and lasting comfort.'
    ],
    'mirage-hair-patch-dwarka' => [
        'title' => 'Best Mirage Hair Patch in Dwarka | Growig Hair Solution',
        'description' => 'Discover the best Mirage Hair Patch in Dwarka at Growig Hair Solution. We offer lightweight, undetectable Mirage hair systems with a transparent poly base. Book your consultation today!',
        'url' => 'https://growighairsolution.com/mirage-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/mirage-hair-patch-base.png',
        'type' => 'product',
        'service_name' => 'Mirage Hair Patch',
        'service_desc' => 'Ultra-lightweight Mirage hair patch system crafted with a transparent polyurethane base, blending seamlessly with your skin for a completely undetectable finish.'
    ],
    'french-lace-hair-patch-dwarka' => [
        'title' => 'Best French Lace Hair Patch in Dwarka | Growig Hair Solution',
        'description' => 'Looking for the best French Lace Hair Patch in Dwarka? Growig Hair Solution offers highly breathable and natural-looking French Lace hair systems. Book a free consultation!',
        'url' => 'https://growighairsolution.com/french-lace-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/lace-hair-patch-base.png',
        'type' => 'product',
        'service_name' => 'French Lace Hair Patch',
        'service_desc' => 'Breathable and soft French lace hair patch offering an exceptional balance of natural appearance, comfort, and durability. Ideal for active lifestyles and warm climates.'
    ],
    'front-lace-hair-patch-dwarka' => [
        'title' => 'Best Front Lace Hair Patch in Dwarka | Growig Hair Solution',
        'description' => 'Searching for the best Front Lace Hair Patch in Dwarka? Growig Hair Solution provides custom front lace hair systems for a flawless, invisible hairline. Book a free consultation!',
        'url' => 'https://growighairsolution.com/front-lace-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/lace-hair-patch-base.png',
        'type' => 'product',
        'service_name' => 'Front Lace Hair Patch',
        'service_desc' => 'Custom front lace hair patch featuring an invisible front hairline for swept-back styles, combined with a durable base for secure attachment and long-lasting wear.'
    ],
    'full-lace-hair-patch-dwarka' => [
        'title' => 'Best Full Lace Hair Patch in Dwarka | Growig Hair Solution',
        'description' => 'Get the best Full Lace Hair Patch in Dwarka at Growig Hair Solution. Enjoy ultimate breathability and realistic hairlines with our premium full lace systems. Free consultation!',
        'url' => 'https://growighairsolution.com/full-lace-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/lace-hair-patch-base.png',
        'type' => 'product',
        'service_name' => 'Full Lace Hair Patch',
        'service_desc' => 'The ultimate full lace hair patch system providing maximum breathability, lightweight comfort, and the ability to part your hair freely in any direction with a 100% natural look.'
    ],
    'poly-fuse-hair-patch-dwarka' => [
        'title' => 'Best Poly Fuse Hair Patch in Dwarka | Growig Hair Solution',
        'description' => 'Looking for the best Poly Fuse Hair Patch in Dwarka? Growig Hair Solution offers highly durable, skin-like poly fuse hair systems for a secure and undetectable fit.',
        'url' => 'https://growighairsolution.com/poly-fuse-hair-patch-dwarka',
        'image' => 'https://growighairsolution.com/assets/mirage-hair-patch-base.png',
        'type' => 'product',
        'service_name' => 'Poly Fuse Hair Patch',
        'service_desc' => 'Advanced Poly Fuse hair patch system utilizing a transparent skin-like base that perfectly adheres to the scalp, providing high durability, easy maintenance, and an incredibly secure fit.'
    ],
    'gallery' => [
        'title' => 'Before and After Gallery | Growig Hair Solution',
        'description' => 'Real transformations, real confidence. Browse our gallery of premium non-surgical hair replacement, patches, and wigs.',
        'url' => 'https://growighairsolution.com/gallery',
        'image' => 'https://growighairsolution.com/assets/main-beofre-and-after.png',
        'type' => 'website'
    ],
    'review-assistant' => [
        'title' => 'Google Review Assistant | Growig Hair Solution Dwarka',
        'description' => 'Help others find the best hair wig and patch solutions in Dwarka. Generate and copy a genuine Google review draft in seconds.',
        'url' => 'https://growighairsolution.com/review-assistant',
        'image' => 'https://growighairsolution.com/assets/premium-har-pathc.png',
        'type' => 'website'
    ]
];

if (strpos($_SERVER['PHP_SELF'], '/blog/') !== false) {
    if ($page === 'index') {
        $current_metadata = [
            'title' => 'Expert Hair Patch & Wig Care Blogs | Growig Hair Solution',
            'description' => 'Explore the latest blogs from Growig Hair Solution on hair patch maintenance, hair wig styling, cleaning, and non-surgical hair replacement in Dwarka.',
            'url' => 'https://growighairsolution.com/blog/',
            'image' => 'https://growighairsolution.com/assets/hair-maintance.jpg',
            'type' => 'website'
        ];
    } else if (isset($blog_post)) {
        $current_metadata = [
            'title' => $blog_post['title'] . ' | Growig Hair Solution',
            'description' => $blog_post['description'],
            'url' => 'https://growighairsolution.com/blog/' . $blog_post['slug'],
            'image' => 'https://growighairsolution.com/assets/' . $blog_post['image'],
            'type' => 'article'
        ];
    } else {
        $current_metadata = $pages_metadata['index'];
    }
} else {
    $current_metadata = isset($current_metadata) ? $current_metadata : (isset($pages_metadata[$page]) ? $pages_metadata[$page] : $pages_metadata['index']);
}

// 1. LocalBusiness Schema
$local_business_schema = [
    "@context" => "https://schema.org",
    "@type" => "LocalBusiness",
    "name" => "Growig Hair Solution - Hair Wig Shop in Dwarka | Hair Patch & Non Surgical Hair Replacement",
    "image" => "https://lh5.googleusercontent.com/-rN2mV9li-5w/AAAAAAAAAAI/AAAAAAAAAAA/1dLhL3ORwpg/s44-p-k-no-ns-nd/photo.jpg",
    "@id" => "https://growighairsolution.com/#growig-hair-solution-hair-wig-shop-in-dwarka-hair-patch-non-surgical-hair-replacement",
    "identifier" => [
        "@type" => "PropertyValue",
        "propertyID" => "googleKgMID",
        "value" => "/g/11y5b2phtt"
    ],
    "description" => "Growig Hair Solution is a trusted Hair Wig Shop in Dwarka specializing in Hair Patch, Hair Wig, Hair Bonding, Hair Weaving, Hair Clipping, and Non-Surgical Hair Replacement solutions for men. Conveniently located at Ramphal Chowk, Sector 7 Dwarka, we provide natural-looking Hair Systems, Human Hair Wigs, Custom Hair Patches, Hair Fixing, and Hairline Design services tailored to individual needs. We proudly serve clients from Dwarka, Janakpuri, Uttam Nagar, Palam, Dwarka Mor, and nearby areas. Our goal is to deliver comfortable, realistic, and long-lasting hair replacement solutions that help restore confidence and achieve a natural appearance. Book your free consultation today.",
    "url" => "https://growighairsolution.com/",
    "telephone" => "076784 72972",
    "priceRange" => "$$",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "Ramphal Chowk Rd, Block- E-1085, Palam, Ramphal Chowk, Dwarka Sec-7",
        "addressLocality" => "Dwarka",
        "addressRegion" => "New Delhi",
        "postalCode" => "110077",
        "addressCountry" => "IN"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => "28.5853193",
        "longitude" => "77.0722435"
    ],
    "openingHoursSpecification" => [
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => [
                "Monday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens" => "10:00",
            "closes" => "19:00"
        ]
    ],
    "paymentAccepted" => "Cash, NFC mobile payments, Google Pay",
    "amenityFeature" => [
        [
            "@type" => "LocationFeatureSpecification",
            "name" => "Good for kids",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name" => "LGBTQ+ friendly",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name" => "Wheelchair-accessible toilet",
            "value" => false
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name" => "Wheelchair-accessible seating",
            "value" => false
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name" => "On-site parking",
            "value" => true
        ],
        [
            "@type" => "LocationFeatureSpecification",
            "name" => "Identifies as women-owned",
            "value" => false
        ]
    ],
    "aggregateRating" => [
        "@type" => "AggregateRating",
        "ratingValue" => "5",
        "reviewCount" => "77"
    ],
    "category" => "Hair replacement service",
    "hasOfferCatalog" => [
        "@type" => "OfferCatalog",
        "name" => "Services",
        "itemListElement" => [
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair bonding"
                ],
                "position" => 1
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair weaving"
                ],
                "position" => 2
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair patch services"
                ],
                "position" => 3
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Fully tapping"
                ],
                "position" => 4
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair clipping"
                ],
                "position" => 5
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Australian Hair Patch"
                ],
                "position" => 6
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "BMW Hair Patch"
                ],
                "position" => 7
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Clipping Hair Patch"
                ],
                "position" => 8
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Filament Hair Patch"
                ],
                "position" => 9
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Front Lace Hair Patch"
                ],
                "position" => 10
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Full Lace Hair Patch"
                ],
                "position" => 11
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair Weaving Hair Patch"
                ],
                "position" => 12
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair Bonding Hair Patch"
                ],
                "position" => 13
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair Fixing Hair Patch"
                ],
                "position" => 14
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Mirage Hair Patch"
                ],
                "position" => 15
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Model Silk Hair Patch"
                ],
                "position" => 16
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Monofilament Hair Patch"
                ],
                "position" => 17
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Taping Hair Patch"
                ],
                "position" => 18
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Australian Hair Wig"
                ],
                "position" => 19
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "BMW Hair Wig"
                ],
                "position" => 20
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Clipping Hair Wig"
                ],
                "position" => 21
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Filament Hair Wig"
                ],
                "position" => 22
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Front Lace Hair Wig"
                ],
                "position" => 23
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Full Lace Hair Wig"
                ],
                "position" => 24
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair Weaving Wig"
                ],
                "position" => 25
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair Bonding Wig"
                ],
                "position" => 26
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Hair Fixing Wig"
                ],
                "position" => 27
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Mirage Hair Wig"
                ],
                "position" => 28
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Model Silk Hair Wig"
                ],
                "position" => 29
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Monofilament Hair Wig"
                ],
                "position" => 30
            ],
            [
                "@type" => "Offer",
                "itemOffered" => [
                    "@type" => "Service",
                    "name" => "Taping Hair Wig"
                ],
                "position" => 31
            ]
        ]
    ],
    "sameAs" => [
        "https://wa.me/918766216564",
        "https://www.google.com/maps?cid=9548319643371196314"
    ]
];

// 2. SiteNavigationElement Schema
$nav_schema = [
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "name" => "Site Navigation",
    "itemListElement" => [
        [
            "@type" => "SiteNavigationElement",
            "position" => 1,
            "name" => "Home",
            "url" => "https://growighairsolution.com/"
        ],
        [
            "@type" => "SiteNavigationElement",
            "position" => 2,
            "name" => "About",
            "url" => "https://growighairsolution.com/about"
        ],
        [
            "@type" => "SiteNavigationElement",
            "position" => 3,
            "name" => "Premium Hair Patch",
            "url" => "https://growighairsolution.com/premium-hair-patch"
        ],
        [
            "@type" => "SiteNavigationElement",
            "position" => 4,
            "name" => "Full Hair Wigs",
            "url" => "https://growighairsolution.com/full-hair-wig"
        ],
        [
            "@type" => "SiteNavigationElement",
            "position" => 5,
            "name" => "Non-Surgical Replacement",
            "url" => "https://growighairsolution.com/non-surgical-replacement"
        ],
        [
            "@type" => "SiteNavigationElement",
            "position" => 6,
            "name" => "Hair Bonding",
            "url" => "https://growighairsolution.com/hair-bonding"
        ],
        [
            "@type" => "SiteNavigationElement",
            "position" => 7,
            "name" => "Maintenance & Styling",
            "url" => "https://growighairsolution.com/maintenance-and-styling"
        ],
        [
            "@type" => "SiteNavigationElement",
            "position" => 8,
            "name" => "Custom Hairline Design",
            "url" => "https://growighairsolution.com/custom-hairline-design"
        ],
        [
            "@type" => "SiteNavigationElement",
            "position" => 9,
            "name" => "Contact Us",
            "url" => "https://growighairsolution.com/contact"
        ]
    ]
];

// 3. BreadcrumbList Schema
if ($page !== 'index') {
    $breadcrumb_items = [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://growighairsolution.com/"
        ]
    ];
    
    $is_service = in_array($page, ['premium-hair-patch', 'full-hair-wig', 'non-surgical-replacement', 'hair-bonding', 'maintenance-and-styling', 'custom-hairline-design', 'australian-hair-patch-dwarka', 'bmw-hair-patch-dwarka', 'filament-hair-patch-dwarka', 'superior-filament-hair-patch-dwarka', 'monofilament-hair-patch-dwarka', 'mono-silk-hair-patch-dwarka', 'mirage-hair-patch-dwarka', 'french-lace-hair-patch-dwarka', 'front-lace-hair-patch-dwarka', 'full-lace-hair-patch-dwarka', 'poly-fuse-hair-patch-dwarka']);
    
    if ($is_service) {
        $breadcrumb_items[] = [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Services",
            "item" => "https://growighairsolution.com/#services"
        ];
        $breadcrumb_items[] = [
            "@type" => "ListItem",
            "position" => 3,
            "name" => $current_metadata['service_name'],
            "item" => $current_metadata['url']
        ];
    } else {
        $name_mapping = [
            'about' => 'About Us',
            'contact' => 'Contact Us'
        ];
        $breadcrumb_items[] = [
            "@type" => "ListItem",
            "position" => 2,
            "name" => isset($name_mapping[$page]) ? $name_mapping[$page] : ucfirst($page),
            "item" => $current_metadata['url']
        ];
    }
    
    $breadcrumb_schema = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => $breadcrumb_items
    ];
}

// 4. Product, MerchantListings, AggregateRating, and ImageObject Schema
if ($current_metadata['type'] === 'product') {
    $product_schema = [
        "@context" => "https://schema.org",
        "@type" => "Product",
        "name" => $current_metadata['service_name'],
        "image" => [
            $current_metadata['image']
        ],
        "description" => $current_metadata['service_desc'],
        "brand" => [
            "@type" => "Brand",
            "name" => "Growig Hair Solution"
        ],
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => "4.9",
            "bestRating" => "5",
            "worstRating" => "1",
            "ratingCount" => "150"
        ],
        "offers" => [
            "@type" => "Offer",
            "url" => $current_metadata['url'],
            "priceCurrency" => "INR",
            "price" => "7999",
            "priceValidUntil" => "2027-12-31",
            "itemCondition" => "https://schema.org/NewCondition",
            "availability" => "https://schema.org/InStock",
            "seller" => [
                "@type" => "LocalBusiness",
                "name" => "Growig Hair Solution"
            ],
            "shippingDetails" => [
                "@type" => "OfferShippingDetails",
                "shippingRate" => [
                    "@type" => "MonetaryAmount",
                    "value" => "0",
                    "currency" => "INR"
                ],
                "shippingDestination" => [
                    "@type" => "DefinedRegion",
                    "addressCountry" => "IN"
                ]
            ],
            "hasMerchantReturnPolicy" => [
                "@type" => "MerchantReturnPolicy",
                "applicableCountry" => "IN",
                "returnPolicyCategory" => "https://schema.org/MerchantReturnStatusFees",
                "merchantReturnLink" => "https://growighairsolution.com/contact"
            ]
        ]
    ];
    
    $image_schema = [
        "@context" => "https://schema.org",
        "@type" => "ImageObject",
        "url" => $current_metadata['image'],
        "caption" => $current_metadata['service_name'] . " - Growig Hair Solution",
        "width" => "1200",
        "height" => "630"
    ];
}

if ($current_metadata['type'] === 'article') {
    $article_schema = [
        "@context" => "https://schema.org",
        "@type" => "BlogPosting",
        "headline" => $current_metadata['title'],
        "description" => $current_metadata['description'],
        "image" => [
            $current_metadata['image']
        ],
        "datePublished" => isset($blog_post['date']) ? date('c', strtotime($blog_post['date'])) : date('c'),
        "dateModified" => date('c'),
        "author" => [
            "@type" => "Organization",
            "name" => "Growig Hair Solution",
            "url" => "https://growighairsolution.com/"
        ],
        "publisher" => [
            "@type" => "Organization",
            "name" => "Growig Hair Solution",
            "logo" => [
                "@type" => "ImageObject",
                "url" => "https://growighairsolution.com/assets/premium-har-pathc.png"
            ]
        ]
    ];
}

// 5. CollectionPage Schema
// 6. FAQPage Schema
$faq_questions = [];
if ($page === 'index') {
    $faq_questions = [
        [
            "question" => "Is the procedure painful?",
            "answer" => "Completely non-surgical and painless. The process involves attaching a custom hair system using medical-grade adhesives or clips, ensuring comfort throughout."
        ],
        [
            "question" => "How long does a hair patch last?",
            "answer" => "Typically 6-10 months with proper maintenance and regular servicing. The longevity depends on the base material chosen and your lifestyle."
        ],
        [
            "question" => "Can I style it like my own hair?",
            "answer" => "Yes, absolutely. Since we use premium human hair, you can cut, color, blow-dry, and style it just as you would your natural hair."
        ],
        [
            "question" => "Is it visible to others?",
            "answer" => "Our bespoke integration ensures a 100% natural, undetectable finish. The customized front hairline and color matching make it virtually impossible to notice."
        ]
    ];
} elseif (in_array($page, ['premium-hair-patch', 'full-hair-wig', 'non-surgical-replacement'])) {
    $faq_questions = [
        [
            "question" => "How natural will the system look?",
            "answer" => "Our systems are virtually undetectable. By using hand-tied Remy hair on a transparent base, the hair appears to grow directly from your scalp. We also customize the hairline density to ensure it matches your facial structure perfectly."
        ],
        [
            "question" => "Can I exercise or swim with the system?",
            "answer" => "Absolutely. When professionally fixed at our Dwarka studio, our systems are waterproof and sweat-resistant. You can maintain an active lifestyle, including swimming and intense workouts, with complete peace of mind."
        ],
        [
            "question" => "What is the lifespan of a premium system?",
            "answer" => "With proper maintenance at our Dwarka center, a high-quality human hair system typically lasts between 6 to 12 months. We provide comprehensive care guides and professional servicing to maximize longevity."
        ],
        [
            "question" => "How often is maintenance required?",
            "answer" => "We recommend a professional servicing session every 3 to 4 weeks. During these sessions, we deep-clean the system, treat the scalp, and re-fix the piece to ensure it stays fresh and secure."
        ]
    ];
} elseif ($page === 'hair-bonding') {
    $faq_questions = [
        [
            "question" => "What is the difference between Hair Bonding and Hair Weaving?",
            "answer" => "Hair bonding uses medical-grade adhesives or skin-safe tapes to attach the hair patch directly to the scalp, providing a flat and seamless look. Hair weaving, on the other hand, involves braiding your natural hair and sewing/threading the patch onto those braids. Bonding offers a much more flush, natural-feeling integration."
        ],
        [
            "question" => "How long does a hair bonding session last?",
            "answer" => "A professional hair bonding session provides a secure hold that typically lasts between 3 to 5 weeks, depending on your skin type, sweat levels, and lifestyle. After this period, a maintenance service is required to clean the scalp, treat the patch, and re-bond it."
        ],
        [
            "question" => "Can I wash my hair and swim with a bonded system?",
            "answer" => "Yes, absolutely. Our high-performance medical adhesives are 100% waterproof and sweat-resistant. You can shower, shampoo your hair, swim in a pool, and perform high-intensity workouts with complete confidence that your system will remain fully secure."
        ],
        [
            "question" => "Does the adhesive cause any scalp allergies or damage?",
            "answer" => "No. We exclusively use FDA-approved, hypoallergenic bonding agents that are specifically formulated for dermal contact. Before application, we apply a protective scalp barrier that prevents direct contact between the skin and the adhesive, keeping your scalp healthy and irritation-free."
        ]
    ];
} elseif ($page === 'maintenance-and-styling') {
    $faq_questions = [
        [
            "question" => "How often should I schedule a maintenance session?",
            "answer" => "For optimal hygiene and aesthetics, we recommend professional maintenance every 3 to 4 weeks. This frequency ensures the bio-adhesive remains secure, the scalp is properly cleansed, and the hair system maintains its pristine condition. Personal lifestyle and skin type may slightly alter this schedule."
        ],
        [
            "question" => "Can I wash my hair system at home between sessions?",
            "answer" => "Yes, you can gently wash the hair system at home. We will guide you on the correct techniques, sulfate-free shampoos, and leave-in conditioners to use. However, the deep cleaning of the base and scalp re-bonding must be done professionally at our studio."
        ],
        [
            "question" => "How long does a typical maintenance appointment take?",
            "answer" => "A standard maintenance session takes approximately 60 to 90 minutes. This includes safe removal, base cleaning, scalp conditioning, re-bonding, and final styling. More intensive scalp treatments or color restorations may take up to 2 hours."
        ],
        [
            "question" => "What happens if I delay my maintenance service?",
            "answer" => "Delaying maintenance beyond 5 weeks can lead to adhesive breakdown, making the system loose and slide. It can also cause sweat build-up, scalp odor, skin irritation, and damage to the base materials, reducing the system's lifespan."
        ]
    ];
} elseif ($page === 'custom-hairline-design') {
    $faq_questions = [
        [
            "question" => "How is a custom hairline designed?",
            "answer" => "We use facial mapping techniques to draw a custom blueprint. We then transfer this blueprint to the hair system base, choosing the hair angles and color gradients to match your existing hair."
        ],
        [
            "question" => "Can I style my hair backwards (exposed hairline)?",
            "answer" => "Absolutely. Our Swiss lace front and ultra-thin skin systems are designed specifically for exposed hairlines, allowing you to style your hair back with complete confidence."
        ],
        [
            "question" => "How long does a hairline system stay secure?",
            "answer" => "With professional medical-grade adhesives at our Dwarka studio, the system remains securely fixed for 3 to 4 weeks before requiring routine servicing."
        ],
        [
            "question" => "Is the design visible up close?",
            "answer" => "No. The combination of bleached knots, graduated hair density, and transparent bases makes the transition from skin to hair completely invisible even from a distance of a few inches."
        ]
    ];
} elseif ($page === 'australian-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What is an Australian Hair Patch?",
            "answer" => "An Australian hair patch is a premium hybrid hair replacement system. It combines a highly breathable Swiss lace base in the center and front (for a completely natural, undetectable hairline) with a thin poly-skin perimeter (which allows secure bonding, taping, and easy maintenance)."
        ],
        [
            "question" => "Why choose the Australian Hair Patch over other systems?",
            "answer" => "It offers the best of both worlds: extreme breathability from the Swiss lace, making it perfect for warm weather or active lifestyles, and high durability and secure attachment from the polyurethane skin border."
        ],
        [
            "question" => "Can I wash and style the Australian Hair Patch?",
            "answer" => "Yes, absolutely. The system is made with 100% premium natural human hair. You can wash it, apply styling products, blow-dry it, and style it in any direction, including exposing the front hairline."
        ],
        [
            "question" => "How long does an Australian Hair Patch last?",
            "answer" => "With proper maintenance at our Dwarka clinic, an Australian hair patch typically lasts between 6 to 10 months. Regular professional cleaning and re-bonding every 3 to 4 weeks will maximize its lifespan."
        ]
    ];
} elseif ($page === 'bmw-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What is a BMW Hair Patch?",
            "answer" => "A BMW hair patch is a premium hybrid hair replacement system known for its highly reinforced base. It features a breathable lace center and front for a natural hairline, surrounded by a poly skin border, with reinforced poly-strips running across the base to provide extra durability and shape retention."
        ],
        [
            "question" => "What are the benefits of the BMW Hair Patch?",
            "answer" => "It is one of the most durable and stable systems available. The reinforced cross-strips prevent the lace from stretching or tearing over time, while the poly borders ensure easy tape/glue application. The lace center guarantees excellent ventilation and sweat resistance."
        ],
        [
            "question" => "Is the BMW Hair Patch suitable for active lifestyles?",
            "answer" => "Yes. Due to its reinforced base structure and secure skin border, the BMW hair patch provides an exceptionally strong bond. It is completely waterproof and sweat-proof, making it ideal for swimming, running, and heavy workouts."
        ],
        [
            "question" => "How long does a BMW Hair Patch last?",
            "answer" => "With proper care and maintenance at our Dwarka clinic, a BMW hair patch lasts between 8 to 12 months, which is typically longer than standard lace systems due to its reinforced base."
        ]
    ];
} elseif ($page === 'filament-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What is a Filament Hair Patch?",
            "answer" => "A filament hair patch (or monofilament hair patch) features a mesh base woven from a fine synthetic filament. Each strand of human hair is hand-knotted individually onto this mesh, mimicking the look of natural hair growth from the scalp and allowing multidirectional styling."
        ],
        [
            "question" => "How natural does a Filament Hair Patch look?",
            "answer" => "It is highly realistic. Because the base is a transparent, fine filament mesh, your natural scalp color shows through. This makes parting lines look 100% natural, allowing you to part your hair in any direction."
        ],
        [
            "question" => "Is the Filament Hair Patch breathable?",
            "answer" => "Yes. The monofilament mesh base is extremely breathable, letting air flow naturally to your scalp. This helps reduce heat and sweat buildup, making it comfortable for all-day wear."
        ],
        [
            "question" => "What is the lifespan of a Filament Hair Patch?",
            "answer" => "With regular maintenance every 3 to 4 weeks at our Dwarka studio, a high-quality filament hair patch typically lasts between 6 to 10 months."
        ]
    ];
} elseif ($page === 'superior-filament-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What makes the Superior Filament Hair Patch different?",
            "answer" => "The superior filament system uses an advanced double monofilament mesh base. It includes an extra soft layer of silk or fine mesh underneath the knotted hair to protect the scalp from irritation. This makes it the most comfortable and natural system for individuals with sensitive scalps or complete hair loss."
        ],
        [
            "question" => "Who should choose a Superior Filament Hair Patch?",
            "answer" => "It is ideal for anyone with a sensitive scalp, medical conditions (like alopecia or chemotherapy hair loss), or those seeking the highest level of comfort combined with realistic multi-directional styling and parting versatility."
        ],
        [
            "question" => "Can I wash and style a Superior Filament Hair Patch?",
            "answer" => "Yes. Like our other premium systems, the Superior Filament patch uses 100% premium human hair. You can wash, condition, blow-dry, and style it as desired. The soft double-mesh base ensures it remains comfortable even during high-activity styling."
        ],
        [
            "question" => "How secure is the Superior Filament Hair Patch?",
            "answer" => "Extremely secure. The perimeter is reinforced with transparent poly borders, enabling safe, high-strength medical adhesive or double-sided tape attachment. You can sleep, shower, and exercise with full confidence."
        ]
    ];
} elseif ($page === 'monofilament-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What is a Monofilament Hair Patch?",
            "answer" => "A monofilament hair patch is a premium hair replacement system that uses a sheer, breathable mesh base. Individual hair strands are hand-tied to this mesh, giving the appearance of natural hair growth directly from the scalp."
        ],
        [
            "question" => "Can I part my hair anywhere with a Monofilament patch?",
            "answer" => "Yes, one of the biggest advantages of a monofilament base is its multidirectional styling capability. You can part the hair anywhere and it will look like a natural scalp line."
        ]
    ];
} elseif ($page === 'mono-silk-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What is the difference between Mono and Mono Silk Hair Patches?",
            "answer" => "While regular mono uses a single layer of mesh, a mono silk patch incorporates a multi-layer base including a layer of fine silk. This silk layer hides the hair knots completely, making the parting look 100% realistic and undetectable."
        ],
        [
            "question" => "Is a Mono Silk Hair Patch comfortable for sensitive scalps?",
            "answer" => "Absolutely. The soft silk base is exceptionally gentle on the skin, making it an ideal choice for men with sensitive scalps or total hair loss."
        ]
    ];
} elseif ($page === 'mirage-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What makes the Mirage Hair Patch unique?",
            "answer" => "The Mirage hair patch is renowned for its ultra-lightweight and transparent polyurethane (poly) base. The thin poly base blends seamlessly with your skin tone, making it completely undetectable while remaining very easy to attach and clean."
        ],
        [
            "question" => "How long does a Mirage Hair Patch last?",
            "answer" => "Due to its extremely thin base, the Mirage is considered a delicate system. With proper care and regular maintenance at our Dwarka clinic, it typically lasts between 3 to 6 months."
        ]
    ];
} elseif ($page === 'french-lace-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "Is the French Lace Hair Patch breathable?",
            "answer" => "Yes, French Lace is considered one of the most breathable base materials available. The entire base is an open mesh, allowing maximum airflow and heat escape, making it perfect for active individuals and warm climates."
        ],
        [
            "question" => "Can the French Lace Hair Patch expose my hairline?",
            "answer" => "Yes. We use specialized knot bleaching techniques at the front of the French lace to ensure the hairline looks incredibly natural, allowing you to confidently style your hair backwards."
        ]
    ];
} elseif ($page === 'front-lace-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What is a Front Lace Hair Patch?",
            "answer" => "A front lace hair patch combines an invisible lace material only at the front hairline with a more durable material (like poly or monofilament) for the rest of the base. This gives you a flawless hairline with added durability at the back."
        ],
        [
            "question" => "Can I use tape or glue with a Front Lace Hair Patch?",
            "answer" => "Yes, the durable back and sides allow for easy application of tape or glue, while the front lace can be delicately bonded with clear adhesive for an invisible finish."
        ]
    ];
} elseif ($page === 'full-lace-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What is a Full Lace Hair Patch?",
            "answer" => "A full lace hair patch is constructed entirely from a fine lace mesh. It offers the most natural appearance across the entire scalp, allowing for free parting anywhere and exceptional breathability."
        ],
        [
            "question" => "Is a Full Lace system durable?",
            "answer" => "Full lace systems are delicate due to their fine mesh construction. They require careful handling and regular professional maintenance to prevent tearing and hair shedding, typically lasting 4 to 8 months."
        ]
    ];
} elseif ($page === 'poly-fuse-hair-patch-dwarka') {
    $faq_questions = [
        [
            "question" => "What is a Poly Fuse Hair Patch?",
            "answer" => "A Poly Fuse hair patch is made entirely of a thin, transparent polyurethane material. It creates a vacuum-like seal with the scalp when bonded, offering a very secure fit that feels like a second skin."
        ],
        [
            "question" => "Is the Poly Fuse system easy to maintain?",
            "answer" => "Yes, the smooth poly surface makes it much easier to clean adhesive residue compared to lace or mesh bases. It is an excellent choice for men seeking low-maintenance hair systems with strong holding power."
        ]
    ];
}

if (isset($blog_post['faqs']) && !empty($blog_post['faqs'])) {
    $faq_questions = $blog_post['faqs'];
}

if (!empty($faq_questions)) {
    $faq_elements = [];
    foreach ($faq_questions as $item) {
        $faq_elements[] = [
            "@type" => "Question",
            "name" => $item['question'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $item['answer']
            ]
        ];
    }
    $faq_schema = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => $faq_elements
    ];
}

// 7. VideoObject Schema (Homepage only)
if ($page === 'index') {
    $video_schema = [
        "@context" => "https://schema.org",
        "@type" => "VideoObject",
        "name" => "Why Choose Growig Hair Solution",
        "description" => "Discover why Growig Hair Solution is Dwarka's leading non-surgical hair replacement studio.",
        "thumbnailUrl" => "https://growighairsolution.com/assets/premium-har-pathc.png",
        "uploadDate" => "2026-06-04T12:00:00Z",
        "contentUrl" => "https://www.instagram.com/reel/C7tiNBnxIO-/",
        "embedUrl" => "https://www.instagram.com/reel/C7tiNBnxIO-/embed/"
    ];
}
?>
<!-- Resource Pre-fetching & Stylesheets -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo $path_prefix; ?>style.css?v=4">
<script src="<?php echo $path_prefix; ?>tailwind-config.js?v=4"></script>

<!-- Open Graph / Facebook -->
<meta property="og:type" content="<?php echo $current_metadata['type']; ?>" />
<meta property="og:title" content="<?php echo $current_metadata['title']; ?>" />
<meta property="og:description" content="<?php echo $current_metadata['description']; ?>" />
<meta property="og:url" content="<?php echo $current_metadata['url']; ?>" />
<meta property="og:image" content="<?php echo $current_metadata['image']; ?>" />
<meta property="og:site_name" content="Growig Hair Solution" />

<!-- Author and Publisher -->
<meta name="author" content="Growig Hair Solution" />
<meta name="publisher" content="Growig Hair Solution" />
<?php if ($current_metadata['type'] === 'article'): ?>
<meta property="article:author" content="https://www.facebook.com/growighairsolution" />
<meta property="article:publisher" content="https://www.facebook.com/growighairsolution" />
<?php endif; ?>

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:title" content="<?php echo $current_metadata['title']; ?>" />
<meta property="twitter:description" content="<?php echo $current_metadata['description']; ?>" />
<meta property="twitter:image" content="<?php echo $current_metadata['image']; ?>" />
<meta property="twitter:url" content="<?php echo $current_metadata['url']; ?>" />

<!-- Canonical Link -->
<link rel="canonical" href="<?php echo $current_metadata['url']; ?>" />

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuB_Fvti5zj5yA0e3mx5gnZWkmjw05AByrcoLzIdiVdh1ROEx263HQYnxKhkuIFQpQeEK5r6MWx6ztYxygylaLwM1vObXU4_y14AoejXVBNy9ei7Vc6yQ8U4_LQbDbVk_cM24aYXAPFHcsqHU0LF7G7A1XoDEAE-8aMgkOvHqcjuCWArzAZMAExVP7lQyH9uHDU0Nr4I0rJGTiTp7LRyQwWfxG7nKdaDV9y-v1vyEGwFKeV0_RwaHSm5H32bgi9ZFh-CWUvvmz5-kRs" />
<link rel="apple-touch-icon" href="https://lh3.googleusercontent.com/aida-public/AB6AXuB_Fvti5zj5yA0e3mx5gnZWkmjw05AByrcoLzIdiVdh1ROEx263HQYnxKhkuIFQpQeEK5r6MWx6ztYxygylaLwM1vObXU4_y14AoejXVBNy9ei7Vc6yQ8U4_LQbDbVk_cM24aYXAPFHcsqHU0LF7G7A1XoDEAE-8aMgkOvHqcjuCWArzAZMAExVP7lQyH9uHDU0Nr4I0rJGTiTp7LRyQwWfxG7nKdaDV9y-v1vyEGwFKeV0_RwaHSm5H32bgi9ZFh-CWUvvmz5-kRs" />

<!-- Google Site Verification -->
<meta name="google-site-verification" content="b4jZtRCRUzwu-P8BqcYvxgsJlOAQ_hbxmh3chDa4FOM" />

<!-- Page Specific Overrides -->
<?php echo isset($custom_head_links) ? $custom_head_links : ''; ?>

<!-- Structured Data Schemas (JSON-LD) -->
<script type="application/ld+json">
<?php echo json_encode($local_business_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
<script type="application/ld+json">
<?php echo json_encode($nav_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
<?php if (isset($breadcrumb_schema)): ?>
<script type="application/ld+json">
<?php echo json_encode($breadcrumb_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
<?php endif; ?>
<?php if (isset($product_schema)): ?>
<script type="application/ld+json">
<?php echo json_encode($product_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
<?php endif; ?>
<?php if (isset($article_schema)): ?>
<script type="application/ld+json">
<?php echo json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
<?php endif; ?>
<?php if (isset($image_schema)): ?>
<script type="application/ld+json">
<?php echo json_encode($image_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
<?php endif; ?>
<?php if (isset($faq_schema)): ?>
<script type="application/ld+json">
<?php echo json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
<?php endif; ?>
<?php if (isset($video_schema)): ?>
<script type="application/ld+json">
<?php echo json_encode($video_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
</script>
<?php endif; ?>