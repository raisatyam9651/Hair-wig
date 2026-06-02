<?php include 'custom-header-link.php'; ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Growig Hair Solution - Collections</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "surface-dim": "#dcdad5",
                        "surface-container-low": "#f6f3ee",
                        "primary-fixed": "#ffdea0",
                        "surface-variant": "#e5e2dd",
                        "primary": "#735b25",
                        "on-primary": "#ffffff",
                        "secondary-container": "#e2dfde",
                        "surface-container-high": "#ebe8e3",
                        "on-secondary-container": "#636262",
                        "surface-container": "#f0ede9",
                        "secondary": "#5f5e5e",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#fcf9f4",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "outline": "#7f7668",
                        "on-error": "#ffffff",
                        "tertiary": "#505d84",
                        "on-surface": "#1c1c19",
                        "on-primary-container": "#533d09",
                        "surface-container-highest": "#e5e2dd",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-primary-fixed-variant": "#5a430f",
                        "on-surface-variant": "#4d463a",
                        "primary-container": "#c8a96b",
                        "on-secondary-fixed": "#1c1b1b",
                        "tertiary-fixed": "#dae1ff",
                        "on-tertiary-fixed-variant": "#39466b",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#0b1a3d",
                        "tertiary-container": "#9facd7",
                        "secondary-fixed": "#e5e2e1",
                        "tertiary-fixed-dim": "#b8c5f2",
                        "on-background": "#1c1c19",
                        "primary-fixed-dim": "#e3c282",
                        "on-primary-fixed": "#261a00",
                        "inverse-surface": "#31302d",
                        "error": "#ba1a1a",
                        "on-tertiary-container": "#334064",
                        "background": "#fcf9f4",
                        "surface": "#fcf9f4",
                        "inverse-primary": "#e3c282",
                        "inverse-on-surface": "#f3f0eb",
                        "outline-variant": "#d0c5b5",
                        "on-secondary-fixed-variant": "#474746",
                        "surface-tint": "#735b25"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "section-gap": "120px",
                        "gutter": "24px",
                        "unit": "8px",
                        "container-max": "1280px",
                        "margin-desktop": "64px",
                        "margin-mobile": "24px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "headline-lg": ["Playfair Display"],
                        "display-lg": ["Playfair Display"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-md": ["Playfair Display"],
                        "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Playfair Display"]
                    },
                    "fontSize": {
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg": ["48px", { "lineHeight": "1.2", "fontWeight": "500" }],
                        "display-lg": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-md": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-md": ["32px", { "lineHeight": "1.3", "fontWeight": "500" }],
                        "label-sm": ["12px", { "lineHeight": "1.4", "fontWeight": "500" }],
                        "headline-lg-mobile": ["32px", { "lineHeight": "1.2", "fontWeight": "500" }]
                    }
                },
            },
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 40px rgba(74, 63, 41, 0.06);
        }

        .royal-shadow {
            box-shadow: 0 40px 60px rgba(74, 63, 41, 0.08);
        }
    </style>
    <?php echo $custom_head_links; ?>
</head>

<body class="bg-surface text-on-surface antialiased font-body-md overflow-x-hidden">
    <?php include 'header.php'; ?>
    <main>
        <!-- Hero Section -->
        <section
            class="relative pt-section-gap pb-24 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col items-center text-center">
            <div class="max-w-3xl royal-shadow glass-panel p-12 rounded-xl relative z-10">
                <h1 class="font-display-lg text-display-lg text-on-surface mb-6">The Master Collection</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10">
                    A curated selection of the world's finest hair restoration systems. Precision-engineered for
                    absolute discretion and unparalleled natural aesthetic.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a class="bg-primary-container text-on-primary font-label-md text-label-md px-8 py-4 rounded-DEFAULT hover:bg-primary transition-colors duration-300 text-center"
                        href="#mens-collection">Explore Men's</a>
                    <a class="border border-outline text-on-surface font-label-md text-label-md px-8 py-4 rounded-DEFAULT hover:border-primary hover:text-primary transition-colors duration-300 text-center"
                        href="#womens-collection">Explore Women's</a>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-1/4 left-0 w-64 h-64 bg-primary-container/10 rounded-full blur-3xl -z-10"></div>
            <div class="absolute bottom-0 right-10 w-96 h-96 bg-tertiary-container/10 rounded-full blur-3xl -z-10">
            </div>
        </section>
        <!-- Men's Collection -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto"
            id="mens-collection">
            <div class="text-center mb-20">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Men's Executive Suite</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Masterfully crafted hair
                    systems designed for the modern gentleman, offering uncompromising style, comfort, and undetectable
                    realism.</p>
            </div>
            <div class="space-y-32">
                <!-- Item 1 -->
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="w-full md:w-1/2">
                        <img alt="French Lace System" class="w-full h-[600px] object-cover rounded-xl royal-shadow"
                            src="assets/Lace%20Front%20Systems.png" />
                    </div>
                    <div class="w-full md:w-1/2 space-y-6">
                        <h3 class="font-headline-md text-headline-md text-on-surface">01. French Lace</h3>
                        <h4 class="font-body-lg text-body-lg text-primary uppercase tracking-widest">Breathable Elegance
                        </h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">The pinnacle of breathability and
                            natural front hairlines. Expertly crafted for active lifestyles, this system allows maximum
                            airflow while maintaining an incredibly realistic appearance, even under close scrutiny.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-16">
                    <div class="w-full md:w-1/2">
                        <img alt="Ultra-Thin Skin System" class="w-full h-[600px] object-cover rounded-xl royal-shadow"
                            src="assets/Ultra-Thin%20Skin%20Patches.png" />
                    </div>
                    <div class="w-full md:w-1/2 space-y-6">
                        <h3 class="font-headline-md text-headline-md text-on-surface">02. Ultra-Thin Skin</h3>
                        <h4 class="font-body-lg text-body-lg text-primary uppercase tracking-widest">Undetectable Touch
                        </h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">A microscopic polyurethane membrane
                            that seamlessly bonds with your scalp. This ultra-thin base disappears upon contact with the
                            skin, providing an utterly flawless look and a completely natural feel.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="w-full md:w-1/2">
                        <img alt="Swiss Lace System" class="w-full h-[600px] object-cover rounded-xl royal-shadow"
                            src="assets/Lace%20Front%20Systems.png" />
                    </div>
                    <div class="w-full md:w-1/2 space-y-6">
                        <h3 class="font-headline-md text-headline-md text-on-surface">03. Swiss Lace</h3>
                        <h4 class="font-body-lg text-body-lg text-primary uppercase tracking-widest">Invisible Front
                            Hairline</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">Renowned for its sheer delicacy,
                            Swiss lace offers the most invisible front hairline available. Perfect for those who prefer
                            swept-back styles and demand the utmost in undetectable aesthetics.</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-16">
                    <div class="w-full md:w-1/2">
                        <img alt="Silk Monofilament System"
                            class="w-full h-[600px] object-cover rounded-xl royal-shadow"
                            src="assets/Active%20Lifestyle%20Monofilament.png" />
                    </div>
                    <div class="w-full md:w-1/2 space-y-6">
                        <h3 class="font-headline-md text-headline-md text-on-surface">04. Silk Monofilament</h3>
                        <h4 class="font-body-lg text-body-lg text-primary uppercase tracking-widest">Unmatched
                            Durability</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">Combining robust construction with
                            a highly realistic scalp appearance. The individual hairs are hand-tied to a fine mesh,
                            creating the illusion of hair growing directly from the scalp with exceptional longevity.
                        </p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="flex flex-col md:flex-row items-center gap-16">
                    <div class="w-full md:w-1/2">
                        <img alt="Poly-Boundary System" class="w-full h-[600px] object-cover rounded-xl royal-shadow"
                            src="assets/Premium%20Hair%20Patch.png" />
                    </div>
                    <div class="w-full md:w-1/2 space-y-6">
                        <h3 class="font-headline-md text-headline-md text-on-surface">05. Poly-Boundary</h3>
                        <h4 class="font-body-lg text-body-lg text-primary uppercase tracking-widest">Secure Grip
                            Engineering</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">Features a durable polyurethane
                            perimeter that offers a superior bonding surface for adhesives and tapes. This system
                            ensures maximum security and peace of mind for the most demanding days.</p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-16">
                    <div class="w-full md:w-1/2">
                        <img alt="Bio-Skin System" class="w-full h-[600px] object-cover rounded-xl royal-shadow"
                            src="assets/Non-Surgical%20Replacement.png" />
                    </div>
                    <div class="w-full md:w-1/2 space-y-6">
                        <h3 class="font-headline-md text-headline-md text-on-surface">06. Bio-Skin</h3>
                        <h4 class="font-body-lg text-body-lg text-primary uppercase tracking-widest">Ultimate Scalp
                            Fusion</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">Engineered to mimic the exact
                            texture and temperature of human skin. The Bio-Skin system fuses perfectly with your natural
                            scalp, offering an incredibly authentic feel and appearance.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Women's Collection -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low"
            id="womens-collection">
            <div class="max-w-container-max mx-auto">
                <div class="text-center mb-20">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Women's Signature Collection</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Luxurious,
                        custom-designed hair solutions that restore volume, length, and confidence with breathtaking
                        natural beauty.</p>
                </div>
                <div class="space-y-32">
                    <!-- Item 1 -->
                    <div class="flex flex-col md:flex-row items-center gap-16">
                        <div class="w-full md:w-1/2">
                            <img alt="Full Volume Silk Topper"
                                class="w-full h-[600px] object-cover rounded-xl royal-shadow"
                                src="assets/Full%20Volume%20Silk%20Toppers.png" />
                        </div>
                        <div class="w-full md:w-1/2 space-y-6">
                            <h3 class="font-headline-md text-headline-md text-on-surface">01. Full Volume Silk Topper
                            </h3>
                            <h4 class="font-body-lg text-body-lg text-primary uppercase tracking-widest">Effortless
                                Crown Volume</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">Designed for those experiencing
                                thinning at the crown. This premium silk-based topper integrates flawlessly with your
                                natural hair, delivering luxurious volume and an undetectable scalp appearance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Form -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop">
            <div class="max-w-4xl mx-auto glass-panel p-8 md:p-16 rounded-xl royal-shadow">
                <div class="text-center mb-10">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Request a Bespoke Consultation
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Our specialists will guide you through
                        the Master Collection in complete privacy.</p>
                </div>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-2">Full Name</label>
                            <input
                                class="w-full bg-surface border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary transition-colors font-body-md text-body-md"
                                placeholder="John Doe" type="text" />
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface mb-2">Contact Number</label>
                            <input
                                class="w-full bg-surface border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary transition-colors font-body-md text-body-md"
                                placeholder="+91 XXXXX XXXXX" type="tel" />
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-2">Collection of
                            Interest</label>
                        <select
                            class="w-full bg-surface border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary transition-colors font-body-md text-body-md text-on-surface-variant">
                            <option>Men's Executive Suite</option>
                            <option>Women's Signature Series</option>
                            <option>Not Sure - Need Guidance</option>
                        </select>
                    </div>
                    <div class="pt-6 text-center">
                        <button
                            class="bg-primary-container text-on-primary font-label-md text-label-md px-10 py-4 rounded-DEFAULT hover:bg-primary transition-colors duration-300 inline-flex items-center gap-2"
                            type="submit">
                            Submit Inquiry
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>