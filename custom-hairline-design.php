<?php include 'custom-header-link.php'; ?>
<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Custom Hairline Design | Growig Hair Solution</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed-variant": "#5a430f",
                        "tertiary-fixed-dim": "#b8c5f2",
                        "secondary": "#5f5e5e",
                        "on-surface": "#1c1c19",
                        "on-background": "#1c1c19",
                        "primary-container": "#c8a96b",
                        "on-tertiary-fixed": "#0b1a3d",
                        "error": "#ba1a1a",
                        "surface-bright": "#fcf9f4",
                        "secondary-fixed-dim": "#c8c6c5",
                        "inverse-surface": "#31302d",
                        "inverse-primary": "#e3c282",
                        "on-primary": "#ffffff",
                        "tertiary-fixed": "#dae1ff",
                        "surface-container": "#f0ede9",
                        "on-primary-container": "#533d09",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#dcdad5",
                        "inverse-on-surface": "#f3f0eb",
                        "on-primary-fixed": "#261a00",
                        "tertiary": "#505d84",
                        "surface-tint": "#735b25",
                        "on-secondary-fixed-variant": "#474746",
                        "surface-container-high": "#ebe8e3",
                        "surface-container-highest": "#e5e2dd",
                        "outline": "#7f7668",
                        "error-container": "#ffdad6",
                        "primary-fixed": "#ffdea0",
                        "on-surface-variant": "#4d463a",
                        "tertiary-container": "#9facd7",
                        "on-error": "#ffffff",
                        "surface-container-low": "#f6f3ee",
                        "on-tertiary-container": "#334064",
                        "surface": "#fcf9f4",
                        "secondary-container": "#e2dfde",
                        "outline-variant": "#d0c5b5",
                        "secondary-fixed": "#e5e2e1",
                        "primary": "#735b25",
                        "on-secondary-container": "#636262",
                        "surface-variant": "#e5e2dd",
                        "on-error-container": "#93000a",
                        "background": "#fcf9f4",
                        "primary-fixed-dim": "#e3c282",
                        "on-tertiary-fixed-variant": "#39466b",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed": "#1c1b1b"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-desktop": "64px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "margin-mobile": "24px",
                        "unit": "8px",
                        "section-gap": "120px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Playfair Display"],
                        "display-lg": ["Playfair Display"],
                        "headline-lg": ["Playfair Display"],
                        "label-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Playfair Display"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["32px", { "lineHeight": "1.2", "fontWeight": "500" }],
                        "display-lg": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "headline-lg": ["48px", { "lineHeight": "1.2", "fontWeight": "500" }],
                        "label-md": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-sm": ["12px", { "lineHeight": "1.4", "fontWeight": "500" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["32px", { "lineHeight": "1.3", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 40px -15px rgba(74, 63, 41, 0.06);
        }
        .royal-shadow {
            box-shadow: 0 30px 60px -15px rgba(74, 63, 41, 0.08);
        }
    </style>
<?php echo $custom_head_links; ?>
</head>

<body class="bg-background text-on-background font-body-md antialiased selection:bg-primary-container selection:text-on-primary-container">
<?php include 'header.php'; ?>
    <main>
        <!-- Hero Section -->
        <section class="relative min-h-[90vh] flex items-center justify-center pt-20 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-gradient-to-r from-surface-bright/95 via-surface-bright/80 to-transparent z-10"></div>
                <img alt="" class="w-full h-full object-cover object-right"
                    data-alt="A master hair technician meticulously mapping and designing a natural hairline on a male client."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbkUTj95iDEHFsm-IivRt_ozNKilNI3p35yeI_3Z-hAJftKBEfAJoaNKGog3MUmL9jtH6gQmOC6lCT6KXThbsAFJ8ap2FobgiAgl0zvRfU1jpentI2uph9W8Vt5xZRZKBKtauyVYQPjab0jc1VGykmyuARhMqgD_NEcdZBGAjyxFnpJVuA0Cg5WEv2Qm9ezE9FsLrirC0vkwlKX_q3NdBTxOZiN6hu2J0wlrbj_1Et-jTPPXOmM5OKz3nHaEr2rgVD4QhG1XKr_NI" />
            </div>
            <div class="relative z-20 w-full max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex items-center">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center space-x-2 bg-primary-container/10 px-4 py-2 rounded-full mb-8">
                        <span class="material-symbols-outlined text-primary-container text-sm">architecture</span>
                        <span class="text-primary font-label-sm uppercase tracking-widest">Gurgaon Studio Exclusive</span>
                    </div>
                    <h1 class="font-display-lg text-display-lg text-on-surface mb-6 leading-tight">Mastering the Art of the <span class="italic text-primary">Undetectable</span> Hairline.</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-xl">Bespoke hairline restoration artistry at our Gurgaon studio. We don't just restore hair; we craft your most authentic self with millimeter precision.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a class="bg-primary-container text-on-primary px-8 py-4 rounded-full font-label-md text-center hover:bg-surface-tint transition-all duration-300 royal-shadow" href="#consultation">
                            Schedule Private Consultation
                        </a>
                        <a class="px-8 py-4 rounded-full font-label-md text-center border border-outline hover:border-primary text-on-surface transition-all duration-300" href="#gallery">
                            View Client Results
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Science of Precision -->
        <section class="py-section-gap bg-surface-container-low">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center max-w-3xl mx-auto mb-20">
                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-6">The Science of Precision</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">A perfect hairline is not drawn; it is calculated. We analyze your facial geometry, age progression, and natural growth patterns to engineer a transition that defies detection.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="glass-panel p-8 rounded-2xl relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500">
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Forehead Topography</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Mapping the ideal height and contour based on the Golden Ratio of your specific facial structure.</p>
                    </div>
                    <div class="glass-panel p-8 rounded-2xl relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500 delay-100">
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Density Graduation</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Replicating the natural, soft buildup of density from the very front edge into the deeper hairline.</p>
                    </div>
                    <div class="glass-panel p-8 rounded-2xl relative overflow-hidden group hover:-translate-y-1 transition-transform duration-500 delay-200">
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Recession Architecture</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">Designing age-appropriate temporal recessions ensuring the restoration looks natural today and decades from now.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>