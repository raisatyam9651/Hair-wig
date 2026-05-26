<?php include 'custom-header-link.php'; ?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Growig Hair Solution | Non-Surgical Hair Replacement</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-container": "#334064",
                        "secondary": "#5f5e5e",
                        "surface-container-highest": "#e5e2dd",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#0b1a3d",
                        "primary-fixed": "#ffdea0",
                        "on-secondary-fixed-variant": "#474746",
                        "on-secondary": "#ffffff",
                        "on-secondary-container": "#636262",
                        "surface-bright": "#fcf9f4",
                        "on-error": "#ffffff",
                        "inverse-surface": "#31302d",
                        "background": "#fcf9f4",
                        "tertiary-fixed-dim": "#b8c5f2",
                        "on-surface": "#1c1c19",
                        "error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#5a430f",
                        "on-tertiary": "#ffffff",
                        "tertiary-container": "#9facd7",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#261a00",
                        "inverse-on-surface": "#f3f0eb",
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#e3c282",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-tertiary-fixed-variant": "#39466b",
                        "on-background": "#1c1c19",
                        "on-primary-container": "#533d09",
                        "primary": "#735b25",
                        "on-error-container": "#93000a",
                        "tertiary": "#505d84",
                        "surface-variant": "#e5e2dd",
                        "tertiary-fixed": "#dae1ff",
                        "surface-container": "#f0ede9",
                        "secondary-fixed": "#e5e2e1",
                        "outline": "#7f7668",
                        "inverse-primary": "#e3c282",
                        "secondary-container": "#e2dfde",
                        "surface": "#fcf9f4",
                        "on-secondary-fixed": "#1c1b1b",
                        "surface-container-low": "#f6f3ee",
                        "surface-container-high": "#ebe8e3",
                        "primary-container": "#c8a96b",
                        "surface-tint": "#735b25",
                        "outline-variant": "#d0c5b5",
                        "surface-dim": "#dcdad5",
                        "on-surface-variant": "#4d463a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "section-gap": "120px",
                        "margin-mobile": "24px",
                        "unit": "8px",
                        "gutter": "24px",
                        "margin-desktop": "64px"
                    },
                    "fontFamily": {
                        "label-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg-mobile": ["Playfair Display"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Playfair Display"],
                        "headline-md": ["Playfair Display"],
                        "display-lg": ["Playfair Display"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "label-sm": ["12px", { "lineHeight": "1.4", "fontWeight": "500" }],
                        "label-md": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-lg-mobile": ["32px", { "lineHeight": "1.2", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg": ["48px", { "lineHeight": "1.2", "fontWeight": "500" }],
                        "headline-md": ["32px", { "lineHeight": "1.3", "fontWeight": "500" }],
                        "display-lg": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #fcf9f4; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 40px -15px rgba(74, 63, 41, 0.06);
        }
        .text-gradient {
            background: linear-gradient(135deg, #735b25 0%, #c8a96b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
<?php echo $custom_head_links; ?>
</head>

<body class="font-body-md text-body-md text-on-surface antialiased selection:bg-primary-container selection:text-on-primary-container">
<?php include 'header.php'; ?>
    <main class="pt-[100px]">
        <!-- Hero Section -->
        <section class="relative min-h-[819px] flex items-center justify-center overflow-hidden px-margin-mobile md:px-margin-desktop py-section-gap">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent z-10"></div>
                <img alt="Mastering the Art of Invisible Hair Restoration" class="w-full h-full object-cover object-right-top"
                    data-alt="A sophisticated, high-end portrait of a confident middle-aged man with perfectly styled, natural-looking hair."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8v2g_5LbHhACWhTPkxZ8N_dW9ezGn4HZsfKkF5M3_8pttveLJ_BSQ50eOfMwi4cm55wt08E77pvPCC1241R4OaEEDhwdB-C_1nr78O9YmoM37g6oV9F_jNRSJ6lGhWQf_a2i3I6T8dpVA-ETKUCWJlL3qJSW7GoABD2wu9WJfZxWt6fxvxNTXxFEhtwS-XpBCWMZAotf6hOqz6JZ7LQWgie57uMMbVs57zGKU6MjcrHIZZK1XvkEne6VF3M4FthxVw_Gk25mIuFA" />
            </div>
            <div class="relative z-10 max-w-container-max mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-gutter">
                <div class="glass-panel p-8 md:p-12 rounded-2xl max-w-xl">
                    <span class="inline-block px-4 py-1.5 bg-primary-container/10 text-primary font-label-sm text-label-sm rounded-full mb-6 border border-primary-container/20">Premium Non-Surgical Restoration</span>
                    <h1 class="font-display-lg text-display-lg text-on-surface mb-6">
                        Mastering the Art of <span class="text-gradient">Invisible</span> Hair Restoration
                    </h1>
                    <p class="font-body-lg text-body-lg text-secondary mb-8">
                        Experience the absolute pinnacle of non-surgical hair replacement right here in Gurgaon. Our highly bespoke, custom-crafted systems offer truly undetectable integration.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-primary-container text-on-primary px-8 py-4 rounded-full font-label-md text-label-md hover:bg-primary transition-colors">Book Private Consultation</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- The Science of Bonding -->
        <section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">The Science of Seamless Bonding</h2>
                <p class="font-body-lg text-body-lg text-secondary">
                    Our transformative non-surgical hair replacement systems utilize advanced dermatological technology to create a sophisticated second-skin illusion.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="glass-panel p-8 rounded-xl text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 mx-auto bg-surface-container rounded-full flex items-center justify-center mb-6 group-hover:bg-primary-container/10 transition-colors">
                        <span class="material-symbols-outlined text-primary" style="font-size: 32px;">fingerprint</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-3 text-[24px]">Undetectable Integration</h3>
                    <p class="font-body-md text-body-md text-secondary">Using hyper-realistic, ultra-fine translucent membranes that perfectly mimic your natural scalp.</p>
                </div>
                <div class="glass-panel p-8 rounded-xl text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 mx-auto bg-surface-container rounded-full flex items-center justify-center mb-6 group-hover:bg-primary-container/10 transition-colors">
                        <span class="material-symbols-outlined text-primary" style="font-size: 32px;">air</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-3 text-[24px]">Breathable Comfort</h3>
                    <p class="font-body-md text-body-md text-secondary">Crafted from micro-porous materials that allow maximum airflow to the scalp.</p>
                </div>
                <div class="glass-panel p-8 rounded-xl text-center group hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 mx-auto bg-surface-container rounded-full flex items-center justify-center mb-6 group-hover:bg-primary-container/10 transition-colors">
                        <span class="material-symbols-outlined text-primary" style="font-size: 32px;">health_and_safety</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-3 text-[24px]">Medical-Grade Adhesives</h3>
                    <p class="font-body-md text-body-md text-secondary">Hypoallergenic, FDA-approved bonding agents that provide extraordinary hold while remaining gentle.</p>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>