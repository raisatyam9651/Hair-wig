<?php include 'custom-header-link.php'; ?>
<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>About Us | Growig Hair Solution</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "background": "#fcf9f4",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#474746",
                        "surface-container": "#f0ede9",
                        "on-secondary-fixed": "#1c1b1b",
                        "primary-container": "#c8a96b",
                        "on-tertiary-fixed": "#0b1a3d",
                        "inverse-surface": "#31302d",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#f3f0eb",
                        "surface-container-lowest": "#ffffff",
                        "secondary": "#5f5e5e",
                        "tertiary": "#505d84",
                        "surface-dim": "#dcdad5",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#dae1ff",
                        "secondary-fixed": "#e5e2e1",
                        "outline": "#7f7668",
                        "on-surface-variant": "#4d463a",
                        "inverse-primary": "#e3c282",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-primary-container": "#533d09",
                        "on-error": "#ffffff",
                        "on-background": "#1c1c19",
                        "on-secondary-container": "#636262",
                        "surface-tint": "#735b25",
                        "secondary-container": "#e2dfde",
                        "primary": "#735b25",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "surface-variant": "#e5e2dd",
                        "outline-variant": "#d0c5b5",
                        "on-surface": "#1c1c19",
                        "surface-bright": "#fcf9f4",
                        "primary-fixed-dim": "#e3c282",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#ebe8e3",
                        "on-primary-fixed-variant": "#5a430f",
                        "surface-container-low": "#f6f3ee",
                        "surface-container-highest": "#e5e2dd",
                        "tertiary-fixed-dim": "#b8c5f2",
                        "tertiary-container": "#9facd7",
                        "surface": "#fcf9f4",
                        "on-tertiary-fixed-variant": "#39466b",
                        "on-tertiary-container": "#334064",
                        "primary-fixed": "#ffdea0",
                        "on-primary-fixed": "#261a00"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "24px",
                        "gutter": "24px",
                        "container-max": "1280px",
                        "unit": "8px",
                        "section-gap": "120px",
                        "margin-desktop": "64px"
                    },
                    "fontFamily": {
                        "label-sm": ["Inter"],
                        "display-lg": ["Playfair Display"],
                        "headline-lg": ["Playfair Display"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Playfair Display"],
                        "label-md": ["Inter"],
                        "headline-lg-mobile": ["Playfair Display"]
                    },
                    "fontSize": {
                        "label-sm": ["12px", { "lineHeight": "1.4", "fontWeight": "500" }],
                        "display-lg": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "headline-lg": ["48px", { "lineHeight": "1.2", "fontWeight": "500" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["32px", { "lineHeight": "1.3", "fontWeight": "500" }],
                        "label-md": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-lg-mobile": ["32px", { "lineHeight": "1.2", "fontWeight": "500" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .royal-shadow {
            box-shadow: 0 40px 60px -15px rgba(74, 63, 41, 0.08);
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }
    </style>
    <?php echo $custom_head_links; ?>
</head>

<body class="bg-background text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <?php include 'header.php'; ?>
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative h-[85vh] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img alt="Hero Portrait" class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida/ADBb0ujZr1cjoBFdKJOacQ0UsaVVdB6ql9z5NGLzAnVsjElPlk0e-Inad8wnZp0DC_FaZwy_J_K7dyzRg5G7-Stp9AM9mOqWFR4J-9uVFQq-bUNUFgdKvNKGg0RGDnUvWXpx_Z2WvtLGoKjlJGCjIcQo4zscH73Z7rNJCqxIDY7TcmhYkJ0Ft70hlGMHMmUnYeZ_I60nBbSqnEwbHu--Uvsyte35xt_gm-0e0CviSQqQ0-JuvCLPbGRZBXWpdgQ" />
                <div class="absolute inset-0 bg-gradient-to-r from-background via-background/40 to-transparent"></div>
            </div>
            <div class="max-w-container-max mx-auto px-margin-desktop relative z-10 w-full">
                <div class="max-w-2xl">
                    <span
                        class="inline-block font-label-md text-label-md text-primary tracking-widest uppercase mb-6">Established
                        Expertise</span>
                    <h1 class="font-display-lg text-display-lg text-on-surface mb-8 leading-tight">Crafting Confidence,
                        <br /><span class="italic text-primary">Redefining Excellence.</span></h1>
                    <p class="font-body-lg text-body-lg text-secondary mb-10 max-w-lg leading-relaxed">Discover the
                        pinnacle of hair restoration in Gurugram. Where medical precision meets the delicate touch of
                        bespoke artistry.</p>
                    <div class="flex items-center gap-6">
                        <button
                            class="bg-primary text-on-primary px-10 py-4 rounded-full font-label-md text-label-md hover:bg-primary-fixed-variant transition-all duration-300">Start
                            Your Journey</button>
                        <div class="h-px w-12 bg-primary-container"></div>
                        <span class="font-label-md text-label-md text-primary">Est. 2014</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Heritage -->
        <section class="py-section-gap bg-surface">
            <div class="max-w-container-max mx-auto px-margin-desktop grid md:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="aspect-[4/5] rounded-xl overflow-hidden royal-shadow">
                        <img class="w-full h-full object-cover"
                            data-alt="A highly detailed and sophisticated interior of a luxury hair restoration studio in Gurugram. The space features warm ivory walls, subtle gold trim, and plush leather chairs. Large floor-to-ceiling windows allow soft, natural light to flood the room, highlighting the clean, medical-grade surfaces blended with premium salon hospitality. The atmosphere is serene, professional, and exclusive."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgsp7ifWDms0twDAFZzeP8F6HTG4gaB-tLGWhFBiHjStjlJP-LXX6txHTdDz6fQiyicLgVpeWTbi1mNEEHuCPmNobZil52utB0UXgBG3f6lh8Jrxg_rooijbjJ484NdeisW70_bLrY3UiYMcngxEvIAffrLy2ccj1HprEiKxK18mduDgaoTyrvEF2TLosVx4Fxh21rYEIthJNs6HATdd1mIAK0V4Z167GHA4G2MCmjedaBDSEQSiTjgC9jT63cjuSBYi3cpLNZivI" />
                    </div>
                    <div
                        class="absolute -bottom-10 -right-10 bg-primary-container p-10 rounded-xl glass-panel hidden lg:block">
                        <span class="block font-display-lg text-headline-lg text-on-primary-container mb-2">10+</span>
                        <span
                            class="font-label-md text-label-md text-on-primary-container uppercase tracking-widest">Years
                            of Artistry</span>
                    </div>
                </div>
                <div class="space-y-8">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Our Heritage</h2>
                    <div class="w-20 h-1 bg-primary-container"></div>
                    <p class="font-body-lg text-body-lg text-secondary leading-relaxed">
                        Born in the heart of DLF Phase 2, Gurugram, Growig Hair Solution emerged from a singular vision:
                        to bridge the gap between clinical hair replacement and luxury salon experiences. Over the past
                        decade, we have perfected the science of undetectable integration.
                    </p>
                    <p class="font-body-lg text-body-lg text-secondary leading-relaxed">
                        Our journey is defined by the thousands of individuals who have reclaimed their confidence
                        through our bespoke systems. Every thread, every follicle, and every custom hairline is a
                        testament to our commitment to discreet, high-end restoration.
                    </p>
                </div>
            </div>
        </section>
        <!-- The Philosophy (Bento Grid) -->
        <section class="py-section-gap bg-surface-container-lowest">
            <div class="max-w-container-max mx-auto px-margin-desktop text-center mb-20">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Artistry Meets Technology</h2>
                <p class="font-body-md text-body-md text-secondary max-w-xl mx-auto">The invisible science behind our
                    world-class hair replacement solutions.</p>
            </div>
            <div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Precision Mapping -->
                <div
                    class="md:col-span-2 group relative overflow-hidden rounded-2xl bg-white p-12 border border-outline-variant/30 hover:shadow-xl transition-all duration-500">
                    <div class="relative z-10">
                        <span class="material-symbols-outlined text-primary text-4xl mb-6"
                            data-icon="architecture">architecture</span>
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Anatomical Mapping</h3>
                        <p class="font-body-md text-body-md text-secondary max-w-md">Using high-resolution scanning
                            technology to replicate your unique scalp contour and natural hair growth patterns for a
                            seamless fit.</p>
                    </div>
                    <div
                        class="absolute top-0 right-0 w-1/2 h-full opacity-10 group-hover:opacity-20 transition-opacity">
                        <img class="w-full h-full object-cover"
                            data-alt="A close-up, high-tech visualization of digital scalp mapping. Glowing blue and gold data points trace a 3D wireframe of a human head in a dark, sophisticated medical environment. The image communicates precision, advanced technology, and bespoke medical craftsmanship tailored for premium hair restoration services."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMq58sgJMGshNFEqP9Lv5tUYGHEtjuTpjQIewc3NUfw5YZcTIjWvNEqlllxbJQMW3LWMA3W1vShjvYBY_TwK56z4CtbtgR7t4CKrwCmHiauMZUfvHvisjJmUSPcyKFQFNRRnHU6goWynRallfd51Fwex8RUg5Rd85-AAzvkP6ft6BIRzxmIjM_5B0VUYKbB1or76e59y4GrpXvx2XW5k2ymzZUJ69ogoZYIAK_M6nQJtq78wMsew1zlT5HNey2ij2UHGo6sM9ujYU" />
                    </div>
                </div>
                <!-- Bio-Natural Fibers -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-surface-container p-12 border border-outline-variant/30 transition-all duration-500">
                    <span class="material-symbols-outlined text-primary text-4xl mb-6" data-icon="eco">eco</span>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Ethical Silk</h3>
                    <p class="font-body-md text-body-md text-secondary">Our materials are sourced globally to match the
                        exact texture, porosity, and sheen of your natural hair.</p>
                </div>
                <!-- Hand-Tied Craft -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-surface-container p-12 border border-outline-variant/30 transition-all duration-500">
                    <span class="material-symbols-outlined text-primary text-4xl mb-6" data-icon="draw">draw</span>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Single-Knotting</h3>
                    <p class="font-body-md text-body-md text-secondary">Artisans hand-tie each strand to simulate the
                        natural directional flow of human hair follicles.</p>
                </div>
                <!-- Invisible Base -->
                <div
                    class="md:col-span-2 group relative overflow-hidden rounded-2xl bg-white p-12 border border-outline-variant/30 hover:shadow-xl transition-all duration-500">
                    <div class="flex flex-col md:flex-row gap-12 items-center">
                        <div class="flex-1">
                            <span class="material-symbols-outlined text-primary text-4xl mb-6"
                                data-icon="opacity">opacity</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Dermal Integration</h3>
                            <p class="font-body-md text-body-md text-secondary">A micro-thin, breathable membrane that
                                acts as a second skin, allowing for complete transparency even at the hairline.</p>
                        </div>
                        <div class="w-full md:w-64 h-48 rounded-xl overflow-hidden bg-background">
                            <img class="w-full h-full object-cover"
                                data-alt="A macro photograph showing a micro-thin, semi-transparent membrane used in high-end hair replacement systems. The lighting is soft and ethereal, emphasizing the delicate, high-tech texture of the material against a clean ivory background. The image evokes a sense of medical-grade quality and extreme discretion."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxALo1LiAfedtN6Nh6PiQkH9HB1lmAz18LsoBtly2oqLlcxP7yd8nwLe1MHRDkMuM8yokwN2YORyzlwPNB5Br484O3EgZ4ZB4av5LpU7VU9eqEwSZKS6QtGFo0dwryrv8zhj9RYEJNYE79TOJOS-0B0YauGKcGkdj8HGnEHDWsZyNllItL6lZ0-oMmUkVfSd78k7xF5n-8c9FCQ0jPgEy3O5L-LRVQvVH9KnmGy5HXl3zY5BNadcQyA9FsCKi80nQD0WLOzFAmwCw" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Meet the Experts -->
        <section class="py-section-gap bg-surface">
            <div
                class="max-w-container-max mx-auto px-margin-desktop flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div class="max-w-2xl">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-6">The Curators of Confidence</h2>
                    <p class="font-body-lg text-body-lg text-secondary">Our team combines clinical expertise with a
                        refined eye for aesthetic balance, ensuring every solution is uniquely yours.</p>
                </div>
                <button
                    class="font-label-md text-label-md text-primary border-b border-primary pb-1 hover:opacity-70 transition-opacity">View
                    All Specialists</button>
            </div>
            <div
                class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Expert 1 -->
                <div class="space-y-6 group">
                    <div class="aspect-[3/4] rounded-xl overflow-hidden royal-shadow relative">
                        <img alt="Specialist Portrait"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida/ADBb0ugYVPqTjCErfhjsx8QuyKd1D4gbg2Kwjtp2FozlPuvStKCxzUc2JxyCVytjBNDEZLBwq4LQkFnwi6QsGLIuTCYzTL4G-Dks3jXEEqKGdhQiFJrwZTpNl704mS2olZ-ISFM0qB3xdtPZoElfMAEoVXfLGlkfv5S_fMQm4_swaEHXD5YeIIGuGN5rVMDetEC4mSm-jW0icjxt5xjyMpo4Wn2SgKTdhkZhZRanmkEPZ4swFUDIbe-VGF2B1g" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-headline-md text-headline-md text-on-surface">Vikram Malhotra</h4>
                        <p class="font-label-md text-label-md text-primary uppercase tracking-widest">Master Consultant
                        </p>
                    </div>
                </div>
                <!-- Expert 2 -->
                <div class="space-y-6 group mt-12 lg:mt-24">
                    <div class="aspect-[3/4] rounded-xl overflow-hidden royal-shadow relative">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="A professional portrait of a senior hair restoration expert. He is wearing a sharp, charcoal-grey tailored suit over a white shirt. He has a warm, confident smile and impeccably styled, thick hair. The background is a soft-focus office with warm lighting, creating an atmosphere of trust, maturity, and luxury professional expertise."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaf6DrK2UKhz_48oTkM8EbRaTBdxE60dcTRYiTbNA3qlwAWv7WggGc8EBW5ZJF77U3IxQKrYs4xv-xUe9ZWT_3t-qnV8iXXpI5agg3R3VMPDD_8NRSjkfdHXd8-CADOA3YDGW6_lVNNwO_9xHgsTtyu404vCDLTyvle2e4r1cRq_lH33KPDIzQTdkVT5hf8EyGw-Bhpys3ZwtDx8yGfm4dpJ0ElOUt4qxjJdwcyaxWu1Xp-6e9w1pny-dqr8pvDbU9OI6PtN327zg" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-headline-md text-headline-md text-on-surface">Aditya Verma</h4>
                        <p class="font-label-md text-label-md text-primary uppercase tracking-widest">Artistic Director
                        </p>
                    </div>
                </div>
                <!-- Expert 3 -->
                <div class="space-y-6 group">
                    <div class="aspect-[3/4] rounded-xl overflow-hidden royal-shadow relative">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            data-alt="A sophisticated portrait of a female hair care consultant. She is dressed in a minimalist cream-colored silk blouse and has her hair elegantly swept back. Her expression is calm, intelligent, and empathetic. The studio lighting is bright and airy, reflecting a modern, high-end salon aesthetic. The mood is welcoming, professional, and refined."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsfQSod_d_7X-fy7WXZf90V_CAg81kP7pywyss4f1mMtun9Vn7fELjPZr6FdBxkfy8oskjluDVWaKdj__V4pzIBuR5m76v1i-2mkAfrUlQoeTLrwwSx0OnfV_jn38UWqRFvP7Q9xI23f6aeQZEbbt9_ifKPQAePRQOiOaBscXoy2dpba9aG8TK93CpP0FjHZdebiypsqkzVhx2Zoy6aNKSx171aRAqkL4INNRpBhQYx9M3wT4qOShtx0VP1DqVKKteCx6_BXxq9qo" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h4 class="font-headline-md text-headline-md text-on-surface">Sarah Khanna</h4>
                        <p class="font-label-md text-label-md text-primary uppercase tracking-widest">Scalp Health
                            Expert</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- The Studio Experience -->
        <section class="py-section-gap relative overflow-hidden">
            <div class="absolute inset-0 bg-surface-container/50 -z-10"></div>
            <div class="max-w-container-max mx-auto px-margin-desktop grid md:grid-cols-2 gap-20 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-8">The Studio Experience</h2>
                    <p class="font-body-lg text-body-lg text-secondary mb-12 leading-relaxed">
                        Located in the prestigious DLF Phase 2, our flagship studio is designed for absolute privacy.
                        From our dedicated consultation lounges to private styling suites, every detail of the
                        environment is curated to provide a peaceful sanctuary for your transformation.
                    </p>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <span class="material-symbols-outlined text-primary" data-icon="lock">lock</span>
                            <h5 class="font-label-md text-label-md text-on-surface uppercase">Private Suites</h5>
                            <p class="font-body-md text-body-md text-secondary">Discrete, personalized care in
                                individual rooms.</p>
                        </div>
                        <div class="space-y-2">
                            <span class="material-symbols-outlined text-primary" data-icon="coffee">coffee</span>
                            <h5 class="font-label-md text-label-md text-on-surface uppercase">Luxury Lounge</h5>
                            <p class="font-body-md text-body-md text-secondary">Enjoy premium hospitality and comfort
                                during your visit.</p>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div class="relative group">
                        <div class="aspect-square rounded-2xl overflow-hidden royal-shadow">
                            <img class="w-full h-full object-cover"
                                data-alt="An expansive view of a luxury private consultation suite in a hair restoration clinic. The room features a minimalist modern desk with gold accents, deep leather armchairs, and a large mirror framed in soft LED light. Subtle ivory-toned textures on the walls and a plush rug create an atmosphere of discreet, high-end hospitality and exclusive care."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4PHJPQ7LJbmoIDiF9K_7I9ixw7HUeY5aOlPDJYxog1ZsUsb81PjS2LqxkKqbhvRrKU2s-yFQ3yni01w5_81_2eWL0505uWfM860CwRJs5taZKTRiW2yCYclRYNOgwRjceQe1c0Wwf71eyEg31khN4RL55aEXs2z1-y3K6FD3072Yn3s8fEG9PprN2A8EMYlJqSshYjRjXRViCbT7vHSUjT7nMVZ6wzucW4_eZrRdAELOikHUZsVnAgIoNm6YsoKJd8GYhg--UScE" />
                        </div>
                        <div class="absolute inset-0 border-[20px] border-white/20 m-6 pointer-events-none rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Commitment -->
        <section class="py-section-gap">
            <div class="max-w-container-max mx-auto px-margin-desktop">
                <div class="bg-primary p-12 md:p-24 rounded-[40px] text-center relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10">
                        <div class="h-full w-full"
                            style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
                        </div>
                    </div>
                    <div class="relative z-10 max-w-3xl mx-auto">
                        <h2 class="font-headline-lg text-headline-lg text-on-primary mb-8">Our Unwavering Commitment
                        </h2>
                        <p class="font-body-lg text-body-lg text-on-primary/80 mb-12">
                            To us, hair replacement is not a commodity; it is a life-changing restoration of self. We
                            commit to the highest standards of discretion, using only the finest biological materials
                            and the most advanced non-surgical techniques available in the world today.
                        </p>
                        <div class="flex flex-col md:flex-row justify-center items-center gap-10">
                            <div class="flex items-center gap-4 text-on-primary">
                                <span class="material-symbols-outlined text-primary-container" data-icon="verified"
                                    data-weight="fill">verified</span>
                                <span class="font-label-md text-label-md uppercase tracking-wider">Premium
                                    Quality</span>
                            </div>
                            <div class="flex items-center gap-4 text-on-primary">
                                <span class="material-symbols-outlined text-primary-container"
                                    data-icon="visibility_off" data-weight="fill">visibility_off</span>
                                <span class="font-label-md text-label-md uppercase tracking-wider">Total
                                    Discretion</span>
                            </div>
                            <div class="flex items-center gap-4 text-on-primary">
                                <span class="material-symbols-outlined text-primary-container" data-icon="heart_plus"
                                    data-weight="fill">heart_plus</span>
                                <span class="font-label-md text-label-md uppercase tracking-wider">Lifetime Care</span>
                            </div>
                        </div>
                        <button
                            class="mt-16 bg-white text-primary px-12 py-5 rounded-full font-label-md text-label-md hover:bg-primary-container hover:text-on-primary-container transition-all duration-300">
                            Book Your Private Consultation
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
    <script>
        // Interactive scrolling header effect
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('py-2', 'shadow-lg');
                nav.classList.remove('h-20');
            } else {
                nav.classList.remove('py-2', 'shadow-lg');
                nav.classList.add('h-20');
            }
        });

        // Hover animation for experience cards
        const glassPanels = document.querySelectorAll('.glass-panel');
        glassPanels.forEach(panel => {
            panel.addEventListener('mouseenter', () => {
                panel.style.transform = 'translateY(-10px)';
                panel.style.transition = 'all 0.4s ease-out';
            });
            panel.addEventListener('mouseleave', () => {
                panel.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>

</html>