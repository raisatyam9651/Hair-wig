<?php include 'custom-header-link.php'; ?>
<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Maintenance & Styling - Growig Hair Solution</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Playfair+Display:wght@500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-bright": "#fcf9f4",
                        "surface-tint": "#735b25",
                        "tertiary-fixed": "#dae1ff",
                        "on-surface": "#1c1c19",
                        "surface-container": "#f0ede9",
                        "outline-variant": "#d0c5b5",
                        "on-surface-variant": "#4d463a",
                        "tertiary-container": "#9facd7",
                        "primary": "#735b25",
                        "primary-fixed": "#ffdea0",
                        "on-error": "#ffffff",
                        "inverse-primary": "#e3c282",
                        "on-primary-container": "#533d09",
                        "secondary-container": "#e2dfde",
                        "error-container": "#ffdad6",
                        "surface": "#fcf9f4",
                        "surface-container-high": "#ebe8e3",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed": "#e5e2e1",
                        "surface-container-low": "#f6f3ee",
                        "outline": "#7f7668",
                        "error": "#ba1a1a",
                        "surface-variant": "#e5e2dd",
                        "on-primary-fixed": "#261a00",
                        "surface-container-highest": "#e5e2dd",
                        "primary-fixed-dim": "#e3c282",
                        "primary-container": "#c8a96b",
                        "surface-dim": "#dcdad5",
                        "on-secondary-fixed-variant": "#474746",
                        "inverse-on-surface": "#f3f0eb",
                        "tertiary-fixed-dim": "#b8c5f2",
                        "on-tertiary-fixed-variant": "#39466b",
                        "on-tertiary-fixed": "#0b1a3d",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#636262",
                        "on-secondary-fixed": "#1c1b1b",
                        "on-background": "#1c1c19",
                        "on-primary": "#ffffff",
                        "secondary": "#5f5e5e",
                        "on-tertiary-container": "#334064",
                        "inverse-surface": "#31302d",
                        "tertiary": "#505d84",
                        "on-primary-fixed-variant": "#5a430f",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-error-container": "#93000a",
                        "background": "#fcf9f4"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "24px",
                        "section-gap": "120px",
                        "margin-desktop": "64px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "unit": "8px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Playfair Display"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Playfair Display"],
                        "body-md": ["Inter"],
                        "headline-lg-mobile": ["Playfair Display"],
                        "headline-lg": ["Playfair Display"]
                    },
                    "fontSize": {
                        "label-md": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "label-sm": ["12px", { "lineHeight": "1.4", "fontWeight": "500" }],
                        "headline-md": ["32px", { "lineHeight": "1.3", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "display-lg": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg-mobile": ["32px", { "lineHeight": "1.2", "fontWeight": "500" }],
                        "headline-lg": ["48px", { "lineHeight": "1.2", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #fcf9f4;
        }

        .royal-shadow {
            box-shadow: 0 20px 60px -15px rgba(74, 63, 41, 0.08);
        }
    </style>
    <?php echo $custom_head_links; ?>
</head>

<body
    class="bg-surface-bright text-on-surface font-body-md antialiased selection:bg-primary-container selection:text-white">
    <?php include 'header.php'; ?>
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative min-h-[90vh] flex items-center py-section-gap overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img alt="Close-up of a professional stylist's hands meticulously grooming a premium hair system on a client in a high-end luxury salon. Soft bokeh background of a sophisticated studio, warm lighting, ivory and gold accents. High-quality photography, realistic."
                    class="w-full h-full object-cover object-center opacity-40"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUjFfhrRFWpJqjgkWBrWLYVE7ON7XyUgUVVBr40RAHORtC0uFahMh4BFevL0YDP6kG_vntXolFSkwnMZxoY11DS9uTRJdVQBGf8O2C0JWlCieUoO8nArFOECSbrFlvSOKucBKgoWaBtm09Nydoj-ygFY77Xu11SmfN_nLFiVEWFamsmnLGiiBM0Pfv8H2neHI9qOx1xNKtgzTF1rxcFYa941HN_i-ebmZ58ucwvfiiPm7RLaYYK39WfyBqgUPZq38BRCSy35tt1p4" />
                <div class="absolute inset-0 bg-gradient-to-r from-surface-bright via-surface-bright/90 to-transparent">
                </div>
            </div>
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10 w-full">
                <div class="max-w-2xl">
                    <span
                        class="inline-block px-4 py-1 rounded-full bg-primary-container/10 text-primary font-label-sm text-label-sm mb-6 border border-primary-container/30 uppercase tracking-widest">Maintenance
                        & Styling</span>
                    <h1
                        class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-6 leading-tight">
                        The Art of <br /><span class="text-primary italic">Eternal Perfection</span></h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-lg">Preserve the flawless
                        integration and natural beauty of your hair system with our bespoke maintenance rituals and
                        expert styling.</p>
                    <button
                        class="bg-primary-container text-white px-8 py-4 rounded-full font-label-md text-label-md hover:bg-primary transition-colors shadow-lg shadow-primary-container/20 flex items-center gap-2">
                        Book Maintenance Session
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Specialized Care Packages -->
        <section class="py-section-gap bg-surface-container-low">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-16">
                    <h2 class="font-headline-md text-headline-md text-on-surface mb-4">Bespoke Rituals</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">Elevate your hair
                        system's longevity with our tailored maintenance packages, designed for ultimate discretion and
                        care.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                    <!-- Package 1 -->
                    <div
                        class="bg-white rounded-2xl p-8 border border-outline-variant/30 royal-shadow hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-primary-container/5 rounded-bl-full -mr-16 -mt-16 transition-transform group-hover:scale-150 duration-700">
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-surface-bright flex items-center justify-center mb-6 text-primary border border-primary/10">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 0;">refresh</span>
                        </div>
                        <h3 class="font-headline-md text-[24px] mb-3 text-on-surface">The Signature Refresh</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6">Deep cleansing, re-bonding,
                            and precision styling to restore your system's pristine condition.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                <span
                                    class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                Bio-adhesive renewal
                            </li>
                            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                <span
                                    class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                Gentle clarifying wash
                            </li>
                            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                <span
                                    class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                Professional blow-dry
                            </li>
                        </ul>
                    </div>
                    <!-- Package 2 (Featured) -->
                    <div
                        class="bg-surface-bright rounded-2xl border border-primary-container/40 royal-shadow hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden flex flex-col">
                        <div class="h-48 relative overflow-hidden">
                            <img alt="A professional stylist performing a deep-cleansing scalp treatment for a client. Close-up on hands and premium products, calming spa-like atmosphere in a luxury hair studio."
                                class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjZ3Y9eI3Ps8aIXsYVs1ygT2SW122zDDmjNU4o0Wvo_S8vhVkvbemJerR0UC2Jxu9p6zx3otsu7uQH4naMArHgMQxbQ8hq_wP4OHANobbzUkeu9FHMVluW0mwjaeEgtoFvBtTu4fgeviQRmZSiTD71rufnwM7n1kKLMltgRVnR4nNeWs0rpwk-9kRHHDBD07caK_zzFVEYdColPYrDES_jDbSnkHLx1mSZarpv-K5GGTKW8vUacH6kFhMSYHo9I53ShEf4DK80l5Y" />
                            <div class="absolute inset-0 bg-gradient-to-t from-surface-bright to-transparent"></div>
                        </div>
                        <div class="p-8 pt-4 flex-grow relative z-10">
                            <div
                                class="absolute top-4 right-8 px-3 py-1 bg-primary-container text-white text-[10px] font-bold tracking-wider uppercase rounded-full">
                                Most Popular</div>
                            <h3 class="font-headline-md text-[24px] mb-3 text-on-surface">The Scalp Sanctuary</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant mb-6">Purifying detox treatment,
                                adhesive optimization, and soothing massage.</p>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Exfoliating scalp detox
                                </li>
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Tension-relief massage
                                </li>
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Optimal base preparation
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Package 3 -->
                    <div
                        class="bg-white rounded-2xl p-8 border border-outline-variant/30 royal-shadow hover:-translate-y-2 transition-transform duration-500 relative overflow-hidden group">
                        <div
                            class="absolute top-0 left-0 w-32 h-32 bg-primary-container/5 rounded-br-full -ml-16 -mt-16 transition-transform group-hover:scale-150 duration-700">
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-surface-bright flex items-center justify-center mb-6 text-primary border border-primary/10">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 0;">content_cut</span>
                        </div>
                        <h3 class="font-headline-md text-[24px] mb-3 text-on-surface">The Artistic Redefinition</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6">Full system re-alignment,
                            custom trim, and seasonal styling update.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                <span
                                    class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                Silhouette reshaping
                            </li>
                            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                <span
                                    class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                Texture blending
                            </li>
                            <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                <span
                                    class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                Trend-focused styling
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signature Wig Styles (Zigzag Layout) -->
        <section class="py-section-gap bg-surface-bright">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-16">
                    <h2 class="font-headline-md text-headline-md text-on-surface mb-4">Signature Hair Systems</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">Discover our
                        exclusive range of meticulously crafted hair bases, designed for unparalleled realism and
                        comfort.</p>
                </div>
                <div class="space-y-24">
                    <!-- Style 1 -->
                    <div class="flex flex-col md:flex-row items-center gap-12 group">
                        <div class="w-full md:w-1/2 relative">
                            <div
                                class="absolute inset-0 bg-primary-container/10 rounded-2xl transform -translate-x-4 translate-y-4 transition-transform group-hover:translate-x-0 group-hover:translate-y-0 duration-500">
                            </div>
                            <img alt="Close up of a premium Aurelian Silk Base hair system, showing realistic scalp appearance and fine hair strands."
                                class="relative z-10 w-full h-[400px] object-cover rounded-2xl shadow-lg"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLuka2TDvna5aiVWyoKDxTyoBQX5knexc2VJ0EttpRcbfkCbHiMq5wt6cvhvAFY8Q5alXnbNiD1RNro2EuXHWGBsJ4ZYURdoDkdvFEEgdYzKDkzeh8oujvzeq9uhQXT8Do8ymWwi3yCDu2zHIujASA38gchVLZ6TDpdAXn_NiSIZyI-kXva73ChcNbqkAowjGGK_1Jst4R9Hh3MURAepr5XiF7xzstMCTH6Jw2fsu1Hmsgd4oHx4-PY0GznyDNRMXQ8Cif4tg2jTQ" />
                        </div>
                        <div class="w-full md:w-1/2">
                            <h3 class="font-headline-md text-[32px] text-on-surface mb-4">Aurelian Silk Base</h3>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mb-6">Our flagship design
                                featuring a multi-layered silk construction that flawlessly mimics a natural human
                                scalp. The hair appears to be growing directly from your head, allowing for ultimate
                                parting versatility.</p>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    100% realistic scalp illusion
                                </li>
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Exceptional durability
                                </li>
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Ideal for precise parting
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Style 2 -->
                    <div class="flex flex-col md:flex-row-reverse items-center gap-12 group">
                        <div class="w-full md:w-1/2 relative">
                            <div
                                class="absolute inset-0 bg-primary-container/10 rounded-2xl transform translate-x-4 translate-y-4 transition-transform group-hover:translate-x-0 group-hover:translate-y-0 duration-500">
                            </div>
                            <img alt="Detail shot of a Royal HD Lace hair system, emphasizing the invisible front hairline."
                                class="relative z-10 w-full h-[400px] object-cover rounded-2xl shadow-lg"
                                src="https://lh3.googleusercontent.com/aida/ADBb0ugYVPqTjCErfhjsx8QuyKd1D4gbg2Kwjtp2FozlPuvStKCxzUc2JxyCVytjBNDEZLBwq4LQkFnwi6QsGLIuTCYzTL4G-Dks3jXEEqKGdhQiFJrwZTpNl704mS2olZ-ISFM0qB3xdtPZoElfMAEoVXfLGlkfv5S_fMQm4_swaEHXD5YeIIGuGN5rVMDetEC4mSm-jW0icjxt5xjyMpo4Wn2SgKTdhkZhZRanmkEPZ4swFUDIbe-VGF2B1g" />
                        </div>
                        <div class="w-full md:w-1/2">
                            <h3 class="font-headline-md text-[32px] text-on-surface mb-4">Royal HD Lace</h3>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mb-6">Engineered for the most
                                undetectable front hairline. The ultra-fine Swiss lace melts seamlessly into all skin
                                tones, offering unparalleled breathability and a lightweight feel for active lifestyles.
                            </p>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Invisible front hairline
                                </li>
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Maximum breathability
                                </li>
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Perfect for swept-back styles
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Style 3 -->
                    <div class="flex flex-col md:flex-row items-center gap-12 group">
                        <div class="w-full md:w-1/2 relative">
                            <div
                                class="absolute inset-0 bg-primary-container/10 rounded-2xl transform -translate-x-4 translate-y-4 transition-transform group-hover:translate-x-0 group-hover:translate-y-0 duration-500">
                            </div>
                            <img alt="Close up of a Silk Monofilament hair system base, showing strength and natural texture."
                                class="relative z-10 w-full h-[400px] object-cover rounded-2xl shadow-lg"
                                src="https://lh3.googleusercontent.com/aida/ADBb0ugyUTXjJs8yYLB53wuTxvSSkYjvc89f0sKY3Y1zZ5aTUhfJvxijPYBQWZS_Xg8wzvGO8Yns8WeQjpNrrjop6ThAXhlwmfvaPYeZlFZT7nVG9REi6wVl09afWLAUv0pJ66xOEKHBvWY2UqAnSukNtEEngAzrBPQhlHzp48MhxTPR-K5bXJmPys_qLZKE2rIfyPiX5TjjCo6u2WK5FogRksfyPoF94l5phOZQH58oEv1N0X6veZCpq-zrOxE" />
                        </div>
                        <div class="w-full md:w-1/2">
                            <h3 class="font-headline-md text-[32px] text-on-surface mb-4">Silk Monofilament</h3>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mb-6">The perfect balance of
                                realism and robustness. Each hair is individually hand-tied to a sheer, micro-mesh base,
                                creating a natural illusion of hair growth while providing superior hold for higher
                                density styles.</p>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Superior strength and longevity
                                </li>
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Supports higher hair density
                                </li>
                                <li class="flex items-start gap-3 text-sm text-on-surface-variant">
                                    <span
                                        class="material-symbols-outlined text-[16px] text-primary-container mt-0.5">check</span>
                                    Natural movement and bounce
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery of Perfection -->
        <section class="py-section-gap bg-surface-bright overflow-hidden">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mb-16">
                <div class="flex flex-col md:flex-row justify-between items-end gap-8">
                    <div class="max-w-xl">
                        <h2 class="font-headline-md text-headline-md text-on-surface mb-4">Gallery of Perfection</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Witness the seamless integration
                            and styling versatility achieved through our meticulous maintenance protocols.</p>
                    </div>
                </div>
            </div>
            <!-- Bento Grid Gallery -->
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 auto-rows-[200px] md:auto-rows-[300px]">
                    <div class="col-span-2 row-span-2 relative rounded-2xl overflow-hidden group">
                        <img alt="Portrait of a stylish Indian man with perfectly groomed, thick hair, smiling confidently."
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCypQqaHCh64UHbpEU8tiDHeJf_RO-UmmPdErdjWpDk1gmCHaU8G5IESbgE6FtvoQBwj8df-YNpd226Y3u0b6zijAmtguYI6pjXrmoL3dwmlzpK7TG43_jy9FzJvd6GwM5GeRx54tlHnuUri9CCMXFMFrAsfdasM3OrD7XldEK-dwjiRci5t-qPv85rfOfsKZ2sN-zDxYZ9EQmhqBGtESmDzw_tucxP4HvjjSiaoBGFZKQYozL2BkMVy5gLHGVA2Wf5u1hS0vmOblQ" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                            <p class="text-white font-label-md">Impeccable Volume & Flow</p>
                        </div>
                    </div>
                    <div class="col-span-1 row-span-1 relative rounded-2xl overflow-hidden group">
                        <img alt="Portrait of a sophisticated Indian woman with voluminous, beautifully styled long hair."
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAE7yQw2H2pAYLDfRsyDheIcn_Hqh8YQcZilNOAoRFaDkLwK6wpmnTeCldBsOdKDP11PD6ZdJLnjB0Q6ban3MbfhcRfUbbv4XblyFi_TASD5MbkTaG41ahPyLJ0SgEl2BaFYwefnojxmteO5gQdGwFNp0efoWWifJewyK0SDE6LgE_cDRc8DKPzY7v6AzlSROY_FT_DweBiYVLINxGWw4nMeTQYiIgWeB6tKaCYIzPyfe7akOhYui5pHBW87XwTUUSorh7tRzi6b9k" />
                    </div>
                    <div class="col-span-1 row-span-1 relative rounded-2xl overflow-hidden group">
                        <img alt="Portrait of a professional-looking Indian man with a sharp haircut."
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRkm_Wl3jfxzXKz4d_IA7SVSMrEBCp_tzaq2NV4RIzUjZuv6yWWm-fxu7ApHYEa_WHaUTMoAb8ePazJVS8S2xGzAWLs9kAXLpQkmmFpGYSF4RNgl2NKnKPjqvVnAdF8dugWcxpBvrmqelnfRtNewNdLcPPTYDtPKVgkrBLyjRQvNI3gWsY17dgz3bhV-EG_o2lG-im7vKtn-0Iqlh7tLIDv79Rhexqtf6PxJ3_FYOIFS0_0qh5_kkz3tojSXW5L_YG789_XKnvpgE" />
                    </div>
                    <div class="col-span-1 row-span-2 relative rounded-2xl overflow-hidden group">
                        <img alt="Portrait of an elegant Indian woman with sleek, glossy straight hair."
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9IioCOSg8ogc7Ou9TajfsHJ9HK57K9PN82-cCdkofMYhPKm46SH4uUhq4mCfp4bB85b96NSu-n-aIi2GZbh57GZiHY18TeAP4n8QKuluRGv5sKwMYCeGGA5FDIHWBCu2vAXkJyEwy7eZp4jZj24FHkRrcBGlvMJzRdD_5dpskJ-gi48LUfWEwKDfV_DkCjEyz4LXj_eVtmCtJI2EgfgMB8neIISPE67r2eoNNgz5BOUzF83aOuBbULDjGJQMKVwcezQ_6Iwfa-as" />
                    </div>
                    <div class="col-span-1 row-span-1 relative rounded-2xl overflow-hidden group">
                        <img alt="Professional portrait of a middle-aged Indian man with thick, natural-looking salt-and-pepper hair."
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEIXSD18OvPEgpcVzT7ejk0weQrjfL2YWgz_0ZXErHAJiS0hWgDbdLBYWfyO0iV_6wm_AFMm9aM12SZ--V7zCu19f47WIil0gnm-1sC64pL84LpUxGcob6K9svKgN77WJsYxOt6mffQMiTqR3LsTN-0t9Uk4PAonh0Bjtwg45JrN2tgBkVgafTHgavi3dYi-0faK4nrzLP6A6nvjis1E8qH9vU9rgQ4-kJtKHJuqDffh1PVLRqDCRNfX0SbHmmuaxdIRccRTgoEb0" />
                    </div>
                    <div class="col-span-2 row-span-1 relative rounded-2xl overflow-hidden group">
                        <img alt="Indian woman with a beautiful bridal-style hair updo."
                            class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAExMHAKPZfWPtUHMEhd7Lr50LNcsUi8yfdEdGD9kxQJoqcz2Vi2mTgdB_hS21jFD1NNy5KT0QcEXOA810aJBUQ_sofRacAnrEu8Sxl7U2AVQY8l-_jlSz2DT538-P8fBL1kOTXT0ai3TB2sjlldjOnOPaP1UMkkZCHa_z2fuMRr93VMm8U3qj0oOn8tlKIbAq8SCjVvguQVIhqKrZnR_Omxw9RmLruTKGSERK93iKTW6ZtuCxaCZCANQjpsVgU7igSqE3Hrhrfy_I" />
                    </div>
                    <div class="col-span-1 row-span-1 relative rounded-2xl overflow-hidden group">
                        <img alt="Modern Indian man with a stylish, voluminous hair style."
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLNOacGoYss97SkJWDhV2uzzfcmKucMfYEjYa24zcJt-nWtHKPrGky7ZS8ceCBET9nDuT-dXtSQmagZJu3i7Z7F8YF1cRQs2Xrx9CuuEBxzp9K-ArtbPOYI8vexSg8XsCq5bKtUyhVomjxUEY2fU46qHZYuDfLcsrhFEczRD-KdBcaqmZOXxSQa-foqt7KR9lGP76ySyuu0WbegkSzyiCqgQDqwAkWdtkCKHhvmprP6MPoIJJdmPLh9AP6K-U598VmOz1lmqvtRkU" />
                    </div>
                    <div class="col-span-1 row-span-1 relative rounded-2xl overflow-hidden group hidden md:block">
                        <img alt="Professional portrait of a confident middle-aged man."
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida/ADBb0ujZr1cjoBFdKJOacQ0UsaVVdB6ql9z5NGLzAnVsjElPlk0e-Inad8wnZp0DC_FaZwy_J_K7dyzRg5G7-Stp9AM9mOqWFR4J-9uVFQq-bUNUFgdKvNKGg0RGDnUvWXpx_Z2WvtLGoKjlJGCjIcQo4zscH73Z7rNJCqxIDY7TcmhYkJ0Ft70hlGMHMmUnYeZ_I60nBbSqnEwbHu--Uvsyte35xt_gm-0e0CviSQqQ0-JuvCLPbGRZBXWpdgQ" />
                    </div>
                </div>
            </div>
        </section>
        <!-- The Art of Longevity -->
        <section class="py-section-gap bg-surface-container-high relative overflow-hidden">
            <div class="absolute right-0 top-0 w-1/3 h-full bg-primary-container/5 rounded-l-full blur-3xl"></div>
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="order-2 lg:order-1 relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-primary-container/20 to-transparent rounded-2xl transform -translate-x-4 translate-y-4">
                        </div>
                        <img alt="A collection of premium hair care products (shampoos, serums, brushes) for hair systems, arranged elegantly on a marble surface with gold accents. Luxury branding, clean minimalist aesthetic."
                            class="relative z-10 w-full h-[600px] object-cover rounded-2xl shadow-xl"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHxA8mRWQBLkkH7grQty-S5iHdrU7Gg0MVPOpQwPHHsl3zRvV1gQkz8Zi_Wb2xzcoQQdNQO2Bu96uCvxtX7icFJdIU9ORMecLppu85CI8PSHIwd-QcgKywRWEimbrjTzAZ7PvPLbDyrOuKnzQMobV16KdaCZ0C-rKZsULT1jPiPqz8cmNIbsheNOR9ZkKhlv_X83AP0a2U5TxuEvpgVWi7ESn7CERll43tPWUI91clirm1jbHvcheqbl-XleSv68UkSAZSv40IUe0" />
                    </div>
                    <div class="order-1 lg:order-2">
                        <h2 class="font-headline-md text-headline-md text-on-surface mb-8">The Art of Longevity</h2>
                        <div
                            class="space-y-8 relative before:absolute before:inset-y-0 before:left-[15px] before:w-px before:bg-outline-variant/50">
                            <div class="relative pl-12">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-surface-bright border border-primary-container flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-primary-container"></div>
                                </div>
                                <h4 class="font-label-md text-[18px] text-on-surface mb-2">Bio-Adhesive Integrity</h4>
                                <p class="text-on-surface-variant text-sm leading-relaxed">Routine maintenance ensures
                                    the adhesive bonds remain secure, hygienic, and invisible, preventing premature
                                    lifting and maintaining confidence.</p>
                            </div>
                            <div class="relative pl-12">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-surface-bright border border-primary-container flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-primary-container"></div>
                                </div>
                                <h4 class="font-label-md text-[18px] text-on-surface mb-2">Natural Hair Health</h4>
                                <p class="text-on-surface-variant text-sm leading-relaxed">Regular deep cleansing
                                    removes build-up, protecting your natural scalp environment and ensuring the
                                    system's hair fibers remain supple and vibrant.</p>
                            </div>
                            <div class="relative pl-12">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-surface-bright border border-primary-container flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-primary-container"></div>
                                </div>
                                <h4 class="font-label-md text-[18px] text-on-surface mb-2">Aesthetic Consistency</h4>
                                <p class="text-on-surface-variant text-sm leading-relaxed">Expert trims and styling
                                    adjustments keep your look sharp, adapting to natural hair growth and preventing the
                                    "grown-out" phase.</p>
                            </div>
                            <div class="relative pl-12">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-surface-bright border border-primary-container flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-primary-container"></div>
                                </div>
                                <h4 class="font-label-md text-[18px] text-on-surface mb-2">System Durability</h4>
                                <p class="text-on-surface-variant text-sm leading-relaxed">Preventative care
                                    significantly extends the lifespan of your hair system, protecting your investment
                                    through professional handling and premium products.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section -->
        <section class="py-section-gap bg-surface-bright">
            <div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-12">
                    <h2 class="font-headline-md text-headline-md text-on-surface mb-4">Maintenance Inquiries</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Clarity on our protocols to ensure your
                        enduring perfection.</p>
                </div>
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <details
                        class="group bg-surface-container-lowest border border-outline-variant/30 rounded-2xl royal-shadow [&_summary::-webkit-details-marker]:hidden">
                        <summary
                            class="flex items-center justify-between p-6 cursor-pointer font-label-md text-[16px] text-on-surface">
                            How often should I schedule a maintenance session?
                            <span
                                class="transition duration-300 group-open:-rotate-180 material-symbols-outlined text-primary-container">expand_more</span>
                        </summary>
                        <div class="px-6 pb-6 text-on-surface-variant font-body-md text-sm leading-relaxed">
                            For optimal hygiene and aesthetics, we recommend professional maintenance every 3 to 4
                            weeks. This frequency ensures the bio-adhesive remains secure, the scalp is properly
                            cleansed, and the hair system maintains its pristine condition. Personal lifestyle and skin
                            type may slightly alter this schedule.
                        </div>
                    </details>
                    <!-- FAQ Item 2 -->
                    <details
                        class="group bg-surface-container-lowest border border-outline-variant/30 rounded-2xl royal-shadow [&_summary::-webkit-details-marker]:hidden">
                        <summary
                            class="flex items-center justify-between p-6 cursor-pointer font-label-md text-[16px] text-on-surface">
                            Can I use regular store-bought shampoo on my hair system?
                            <span
                                class="transition duration-300 group-open:-rotate-180 material-symbols-outlined text-primary-container">expand_more</span>
                        </summary>
                        <div class="px-6 pb-6 text-on-surface-variant font-body-md text-sm leading-relaxed">
                            We strongly advise against it. Conventional shampoos often contain sulfates and harsh
                            chemicals that strip moisture from the hair system, leading to dryness and premature
                            deterioration. We exclusively use and recommend our proprietary, sulfate-free formulations
                            specifically designed to nourish and protect premium hair systems.
                        </div>
                    </details>
                    <!-- FAQ Item 3 -->
                    <details
                        class="group bg-surface-container-lowest border border-outline-variant/30 rounded-2xl royal-shadow [&_summary::-webkit-details-marker]:hidden">
                        <summary
                            class="flex items-center justify-between p-6 cursor-pointer font-label-md text-[16px] text-on-surface">
                            How long does a typical maintenance appointment take?
                            <span
                                class="transition duration-300 group-open:-rotate-180 material-symbols-outlined text-primary-container">expand_more</span>
                        </summary>
                        <div class="px-6 pb-6 text-on-surface-variant font-body-md text-sm leading-relaxed">
                            A standard Signature Refresh takes approximately 60 to 90 minutes. This includes safe
                            removal, detailed cleaning of the system and your scalp, re-application with fresh
                            bio-adhesive, and professional styling. The Scalp Sanctuary or services requiring color
                            adjustments may take slightly longer.
                        </div>
                    </details>
                </div>
            </div>
        </section>
        <!-- Final CTA Section -->
        <section class="py-section-gap bg-surface-container-low">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div
                    class="bg-white rounded-3xl overflow-hidden royal-shadow border border-outline-variant/20 flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 p-10 md:p-16 flex flex-col justify-center">
                        <h2 class="font-headline-md text-headline-md text-on-surface mb-4">Experience Discrete Luxury
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-8">Schedule your private
                            maintenance session and sustain the flawless illusion.</p>
                        <form class="space-y-4">
                            <div>
                                <label class="block font-label-sm text-on-surface-variant mb-1 ml-1">Name</label>
                                <input
                                    class="w-full bg-surface-bright border-b border-outline-variant focus:border-primary-container focus:ring-0 px-4 py-3 rounded-t-md transition-colors"
                                    placeholder="Your full name" type="text" />
                            </div>
                            <div>
                                <label class="block font-label-sm text-on-surface-variant mb-1 ml-1">Email</label>
                                <input
                                    class="w-full bg-surface-bright border-b border-outline-variant focus:border-primary-container focus:ring-0 px-4 py-3 rounded-t-md transition-colors"
                                    placeholder="your@email.com" type="email" />
                            </div>
                            <div>
                                <label class="block font-label-sm text-on-surface-variant mb-1 ml-1">Preferred
                                    Date</label>
                                <input
                                    class="w-full bg-surface-bright border-b border-outline-variant focus:border-primary-container focus:ring-0 px-4 py-3 rounded-t-md text-on-surface-variant"
                                    type="date" />
                            </div>
                            <div class="pt-4">
                                <button
                                    class="w-full bg-primary-container text-white py-4 rounded-full font-label-md text-label-md hover:bg-primary transition-colors"
                                    type="button">Request Booking</button>
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative">
                        <img alt="Close-up of a stylist's hands using a premium hair brush on a client."
                            class="absolute inset-0 w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAExMHAKPZfWPtUHMEhd7Lr50LNcsUi8yfdEdGD9kxQJoqcz2Vi2mTgdB_hS21jFD1NNy5KT0QcEXOA810aJBUQ_sofRacAnrEu8Sxl7U2AVQY8l-_jlSz2DT538-P8fBL1kOTXT0ai3TB2sjlldjOnOPaP1UMkkZCHa_z2fuMRr93VMm8U3qj0oOn8tlKIbAq8SCjVvguQVIhqKrZnR_Omxw9RmLruTKGSERK93iKTW6ZtuCxaCZCANQjpsVgU7igSqE3Hrhrfy_I" />
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>