<?php include 'custom-header-link.php'; ?>
<html class="light scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Growig Hair Solution | Premium Hair Patch & Wig Studio in Gurgaon</title>
    <meta
        content="Premium non-surgical hair replacement solutions, hair patches, and hair wigs in Gurgaon. Get a natural look with expert fitting."
        name="description" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Playfair+Display:wght@500;600&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="stylesheet" href="style.css?v=3">
    <script src="tailwind-config.js?v=3"></script>
    <?php echo $custom_head_links; ?>
</head>

<body class="bg-surface text-on-surface font-body-md antialiased selection:bg-primary/20 selection:text-primary">
    <?php include 'header.php'; ?>
    <main>
        <!-- Hero Section -->
        <section class="relative min-h-screen flex flex-col justify-between pt-32 pb-12 overflow-hidden bg-background"
            id="home">
            <!-- Background Image -->
            <div class="absolute inset-0 z-0">
                <!-- Large crisp image positioned to the right -->
                <img alt="Hero Background"
                    class="absolute right-0 top-0 w-full lg:w-2/3 h-full object-cover object-center lg:object-right opacity-25 lg:opacity-100"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCegYBSvqd-XnzSA9WikjCQYShjSCiit-Jsi5TauZdMu33bv8_6ToT3gkqSaO0fwHIVHXEH7OFwp-HsJiP_bU2KvZyebw2IQF0AaDVJXa4HQnsIq-iwhMQLc2TLNmwOHLMcRxFjl1xHXdUIZKJw8kUgjC6x1Uv8ATdDndaXmBgiD3ds16-6V1WVaHpV8iY2e3vtvQiepGyJoO-l0vG8mpWDNsAhMFio6LEMCBaeowBRgH9Mp915SbA9KxUn3y8VlrGjfGDCrgj5fE0" />
                <!-- Gradients to blend it beautifully with Warm Ivory background -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-background via-background/95 lg:via-background/80 to-transparent z-10">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent z-10">
                </div>
            </div>

            <div
                class="relative z-20 max-w-[1440px] w-full mx-auto px-margin-mobile md:px-margin-desktop flex flex-col justify-between flex-grow gap-12">
                <!-- Main Grid: Text Content -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center my-auto">
                    <div class="lg:col-span-8 flex flex-col gap-6 fade-in-section">
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-primary/20 bg-surface-bright/55 backdrop-blur-md w-fit">
                            <span class="material-symbols-outlined text-primary text-sm filled">stars</span>
                            <span
                                class="font-label-md text-label-md text-primary uppercase tracking-widest text-xs">Premium
                                Hair Patch &amp; Wig Studio in Gurgaon</span>
                        </div>
                        <h1
                            class="font-display-lg text-4xl sm:text-5xl md:text-display-lg text-secondary leading-tight">
                            Mastering the Art of <br />
                            <span class="text-primary">Bespoke Hair Replacement</span>
                        </h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                            Experience the pinnacle of natural-looking, non-surgical hair replacement solutions.
                            Tailored for the modern gentleman seeking perfection, discretion, and confidence.
                        </p>
                        <div class="flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-4 pt-4">
                            <a class="bg-primary text-on-primary font-label-md text-label-md uppercase px-8 py-4 rounded-DEFAULT glow-hover transition-all duration-300 flex items-center justify-center gap-2 hover:-translate-y-0.5"
                                href="contact">
                                Book Appointment
                                <span class="material-symbols-outlined text-sm">calendar_today</span>
                            </a>
                            <a class="border border-primary text-primary hover:bg-primary/5 font-label-md text-label-md uppercase px-8 py-4 rounded-DEFAULT transition-all duration-300 flex items-center justify-center gap-2 hover:-translate-y-0.5"
                                href="https://wa.me/918766216564" target="_blank">
                                WhatsApp Now
                                <span class="material-symbols-outlined text-sm">chat</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Full-Width Trust Badges at the bottom of Hero -->
                <div class="fade-in-section">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 pt-8 border-t border-surface-variant/30">
                        <div
                            class="flex flex-col sm:flex-row items-center sm:items-center text-center sm:text-left gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-surface-bright border border-surface-variant/30 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-primary text-lg">verified</span>
                            </div>
                            <span class="font-label-md text-xs text-secondary uppercase tracking-wider">Natural
                                Look</span>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row items-center sm:items-center text-center sm:text-left gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-surface-bright border border-surface-variant/30 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-primary text-lg">schedule</span>
                            </div>
                            <span class="font-label-md text-xs text-secondary uppercase tracking-wider">Same Day
                                Fixing</span>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row items-center sm:items-center text-center sm:text-left gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-surface-bright border border-surface-variant/30 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-primary text-lg">water_drop</span>
                            </div>
                            <span class="font-label-md text-xs text-secondary uppercase tracking-wider">Sweat
                                Resistant</span>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row items-center sm:items-center text-center sm:text-left gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-surface-bright border border-surface-variant/30 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-primary text-lg">payments</span>
                            </div>
                            <span
                                class="font-label-md text-xs text-secondary uppercase tracking-wider">Affordable</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section class="py-section-gap bg-surface-container-lowest relative" id="about">
            <div
                class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative fade-in-section">
                    <div class="absolute -inset-4 bg-primary/5 rounded-xl blur-2xl z-0"></div>
                    <img alt="Growig Expert Stylist"
                        class="relative z-10 w-full h-auto rounded-xl border border-surface-variant/20 shadow-2xl transition-all duration-700"
                        data-alt="A professional male stylist with dark hair and a neat beard, wearing a sharp black suit and black nitrile gloves, carefully examining and styling a male client's hair in a luxury matte black salon. The lighting is focused and warm, highlighting the precision of the work. Gold accents and mirrors are visible in the blurred background."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtL4LcfIv2rVT9iNWpQlShrcVsAwIBidn2kNafPXLnJpiK__fFjA3VfdZLPqXppAmR_fBOU8yXxxIn6FAqP9M67As2IGAuTV4Y7Zi27eCFhi6VmVmHx9K4MXGOWkumGI8_i6sJqn9dBXpdxfOp68bLn_txUR9HusXwrKHrUZK5dJl05MBU-Qd9EY6U-rb3Sa8SC3sdSgi2rXKcPcT2kGRqvcFrbWOH17DfeRbOxuV10bnTjSQV55bytOlKGU8q1ePUuWngyvcukLk" />
                    <!-- Floating Stat -->
                    <div
                        class="absolute -bottom-8 -right-8 z-20 glass-card p-6 rounded-xl flex items-center gap-4 hidden md:flex">
                        <div class="w-14 h-14 rounded-full bg-primary flex items-center justify-center text-on-primary">
                            <span class="material-symbols-outlined text-3xl">groups</span>
                        </div>
                        <div>
                            <p class="font-headline-md text-headline-md text-secondary">5000+</p>
                            <p class="font-label-md text-xs text-primary uppercase tracking-widest">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6 fade-in-section">
                    <span class="font-label-md text-label-md text-primary uppercase tracking-widest">About Growig Hair
                        Solution</span>
                    <h2
                        class="font-headline-lg-mobile md:font-headline-lg text-3xl md:text-headline-lg text-secondary leading-tight">
                        Restoring Confidence, <br />One Thread at a Time.
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        At Growig Hair Solution, we specialize in premium non-surgical hair replacement in Gurgaon. Our
                        mission is to provide undetectable, natural-looking hair patches and wigs tailored to your
                        specific lifestyle and hair type.
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Utilizing advanced techniques like hair bonding, clipping, and weaving, our expert stylists
                        ensure a seamless blend with your existing hair, granting you the freedom to swim, gym, and live
                        without limits.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-6 pt-6 border-t border-surface-variant/60">
                        <div>
                            <p class="font-headline-sm text-headline-sm text-secondary mb-1">10+ Years</p>
                            <p class="font-label-md text-xs text-primary uppercase tracking-widest">Of Excellence</p>
                        </div>
                        <div>
                            <p class="font-headline-sm text-headline-sm text-secondary mb-1">98%</p>
                            <p class="font-label-md text-xs text-primary uppercase tracking-widest">Satisfaction Rate
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section class="py-section-gap bg-surface-container-lowest relative overflow-hidden" id="services">
            <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                <div class="text-center mb-20 fade-in-section">
                    <span class="font-label-md text-label-md text-primary uppercase tracking-widest mb-4 block">Our
                        Expertise</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-4xl md:text-headline-lg text-secondary">
                        Bespoke Services</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Card 1 -->
                    <a href="premium-hair-patch"
                        class="glass-card p-10 rounded-2xl flex flex-col gap-6 group fade-in-section transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                        <div class="w-64 h-64 mx-auto mb-2 relative">
                            <img src="assets/Premium Hair Patch.png" alt="Premium Hair Patch" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-headline-md text-2xl text-secondary text-center group-hover:text-primary transition-colors">Premium Hair Patch</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-center">Custom-designed hair patches that
                            seamlessly blend with your natural hair texture and color for an undetectable finish.</p>
                    </a>
                    <!-- Service Card 2 -->
                    <a href="full-hair-wig"
                        class="glass-card p-10 rounded-2xl flex flex-col gap-6 group fade-in-section transition-all duration-500 hover:-translate-y-2 cursor-pointer delay-100">
                        <div class="w-64 h-64 mx-auto mb-2 relative">
                            <img src="assets/Full Hair Wigs.png" alt="Full Hair Wigs" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-headline-md text-2xl text-secondary text-center group-hover:text-primary transition-colors">Full Hair Wigs</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-center">High-grade human hair wigs offering
                            complete coverage with a breathable, comfortable base for daily wear.</p>
                    </a>
                    <!-- Service Card 3 -->
                    <a href="non-surgical-replacement"
                        class="glass-card p-10 rounded-2xl flex flex-col gap-6 group fade-in-section transition-all duration-500 hover:-translate-y-2 cursor-pointer delay-200">
                        <div class="w-64 h-64 mx-auto mb-2 relative">
                            <img src="assets/Non-Surgical Replacement.png" alt="Non-Surgical Replacement" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-headline-md text-2xl text-secondary text-center group-hover:text-primary transition-colors">Non-Surgical Replacement</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-center">A painless, immediate solution to
                            hair loss without the risks or downtime of surgical transplants.</p>
                    </a>
                    <!-- Service Card 4 -->
                    <a href="hair-bonding"
                        class="glass-card p-10 rounded-2xl flex flex-col gap-6 group fade-in-section transition-all duration-500 hover:-translate-y-2 cursor-pointer">
                        <div class="w-64 h-64 mx-auto mb-2 relative">
                            <img src="assets/Hair Bonding.png" alt="Hair Bonding" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-headline-md text-2xl text-secondary text-center group-hover:text-primary transition-colors">Hair Bonding</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-center">Secure, medical-grade adhesive
                            bonding that allows for an active lifestyle, including swimming and sports.</p>
                    </a>
                    <!-- Service Card 5 -->
                    <a href="maintenance-and-styling"
                        class="glass-card p-10 rounded-2xl flex flex-col gap-6 group fade-in-section transition-all duration-500 hover:-translate-y-2 cursor-pointer delay-100">
                        <div class="w-64 h-64 mx-auto mb-2 relative">
                            <img src="assets/Maintenance & Styling.png" alt="Maintenance & Styling" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-headline-md text-2xl text-secondary text-center group-hover:text-primary transition-colors">Maintenance & Styling</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-center">Regular upkeep, cleaning, and
                            professional styling to ensure your hair system always looks fresh and natural.</p>
                    </a>
                    <!-- Service Card 6 -->
                    <a href="custom-hairline-design"
                        class="glass-card p-10 rounded-2xl flex flex-col gap-6 group fade-in-section transition-all duration-500 hover:-translate-y-2 cursor-pointer delay-200">
                        <div class="w-64 h-64 mx-auto mb-2 relative">
                            <img src="assets/Custom Hairline Design.png" alt="Custom Hairline Design" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <h3 class="font-headline-md text-2xl text-secondary text-center group-hover:text-primary transition-colors">Custom Hairline Design</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant text-center">Precision crafting of the front
                            hairline to match your age, facial structure, and desired look flawlessly.</p>
                    </a>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section -->
        <section class="py-section-gap bg-background relative overflow-hidden" id="collections">
            <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                <div class="text-center mb-20 fade-in-section">
                    <span class="font-label-md text-label-md text-primary uppercase tracking-widest mb-4 block">Curated
                        Selection</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-4xl md:text-headline-lg text-secondary">
                        Bespoke Collections</h2>
                </div>
                <div class="flex flex-col gap-24">
                    <!-- Men's Executive Suite -->
                    <div class="fade-in-section">
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-6 mb-12">
                            <h3 class="font-headline-md text-3xl text-secondary">Men's Executive Suite</h3>
                            <div class="hidden md:block h-px bg-surface-variant flex-grow"></div>
                            <p class="font-label-md text-xs text-primary uppercase tracking-widest">Natural • Durable •
                                Professional</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="glass-card p-8 rounded-2xl flex flex-col gap-6 group">
                                <div class="w-64 h-64 mx-auto mb-2 relative">
                                    <img src="assets/Ultra-Thin Skin Patches.png" alt="Ultra-Thin Skin Patches" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <h4 class="font-headline-md text-xl text-secondary text-center mt-2">Ultra-Thin Skin Patches</h4>
                                <p class="font-body-md text-on-surface-variant text-center">The most natural hairline possible,
                                    blending invisibly with your scalp for a second-skin feel.</p>
                            </div>
                            <div class="glass-card p-8 rounded-2xl flex flex-col gap-6 group">
                                <div class="w-64 h-64 mx-auto mb-2 relative">
                                    <img src="assets/Lace Front Systems.png" alt="Lace Front Systems" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <h4 class="font-headline-md text-xl text-secondary text-center mt-2">Lace Front Systems</h4>
                                <p class="font-body-md text-on-surface-variant text-center">Breathable Swiss lace base providing an
                                    exceptionally realistic front hairline and high durability.</p>
                            </div>
                            <div class="glass-card p-8 rounded-2xl flex flex-col gap-6 group">
                                <div class="w-64 h-64 mx-auto mb-2 relative">
                                    <img src="assets/Active Lifestyle Monofilament.png" alt="Active Lifestyle Monofilament" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <h4 class="font-headline-md text-xl text-secondary text-center mt-2">Active Lifestyle Monofilament</h4>
                                <p class="font-body-md text-on-surface-variant text-center">Engineered for extreme performance, from
                                    high-intensity gym sessions to swimming.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Women's Signature Collection -->
                    <div class="fade-in-section">
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-6 mb-12">
                            <p class="font-label-md text-xs text-primary uppercase tracking-widest order-2 md:order-1">
                                Volume • Seamless • Versatile</p>
                            <div class="hidden md:block h-px bg-surface-variant flex-grow order-2"></div>
                            <h3 class="font-headline-md text-3xl text-secondary order-1 md:order-3">Women's Signature
                                Collection</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="glass-card p-8 rounded-2xl flex flex-col gap-6 group">
                                <div class="w-64 h-64 mx-auto mb-2 relative">
                                    <img src="assets/Full Volume Silk Toppers.png" alt="Full Volume Silk Toppers" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <h4 class="font-headline-md text-xl text-secondary text-center mt-2">Full Volume Silk Toppers</h4>
                                <p class="font-body-md text-on-surface-variant text-center">Premium silk base toppers that add
                                    instant density and crown volume for a sophisticated look.</p>
                            </div>
                            <div class="glass-card p-8 rounded-2xl flex flex-col gap-6 group">
                                <div class="w-64 h-64 mx-auto mb-2 relative">
                                    <img src="assets/Invisible Crown Systems.png" alt="Invisible Crown Systems" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <h4 class="font-headline-md text-xl text-secondary text-center mt-2">Invisible Crown Systems</h4>
                                <p class="font-body-md text-on-surface-variant text-center">Specially designed for thinning crowns,
                                    offering seamless integration with your natural hair.</p>
                            </div>
                            <div class="glass-card p-8 rounded-2xl flex flex-col gap-6 group">
                                <div class="w-64 h-64 mx-auto mb-2 relative">
                                    <img src="assets/Custom Length Medical Wigs.png" alt="Custom Length Medical Wigs" class="w-full h-full object-contain relative z-10 mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                                </div>
                                <h4 class="font-headline-md text-xl text-secondary text-center mt-2">Custom Length Medical Wigs</h4>
                                <p class="font-body-md text-on-surface-variant text-center">Ultra-soft, hypoallergenic bases
                                    designed for sensitive scalps without compromising on length or style.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features/Why Us -->
        <section class="py-section-gap bg-surface-container-lowest relative overflow-hidden" id="why-choose-us">
            <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                    <div class="lg:col-span-5 fade-in-section">
                        <span class="font-label-md text-label-md text-primary uppercase tracking-widest mb-4 block">The
                            Growig Advantage</span>
                        <h2
                            class="font-headline-lg-mobile md:font-headline-lg text-4xl md:text-headline-lg text-secondary mb-8">
                            Why Choose Us</h2>
                        <p class="font-body-md text-on-surface-variant mb-8 leading-relaxed">
                            We combine artistry with advanced technology to deliver hair replacement solutions that are
                            virtually indistinguishable from natural hair growth.
                        </p>
                        <video class="w-full h-auto rounded-2xl shadow-sm border border-surface-variant object-cover" autoplay loop muted playsinline>
                            <source src="assets/why-chouse-us.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 fade-in-section">
                            <div
                                class="w-12 h-12 rounded-full bg-surface border border-surface-variant flex items-center justify-center text-primary shadow-sm mb-2">
                                <span class="material-symbols-outlined">face</span>
                            </div>
                            <h3 class="font-headline-md text-xl text-secondary">Natural Look & Feel</h3>
                            <p class="font-body-md text-on-surface-variant">Undetectable hairlines tailored to your
                                facial structure.</p>
                        </div>
                        <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 fade-in-section delay-100">
                            <div
                                class="w-12 h-12 rounded-full bg-surface border border-surface-variant flex items-center justify-center text-primary shadow-sm mb-2">
                                <span class="material-symbols-outlined">schedule</span>
                            </div>
                            <h3 class="font-headline-md text-xl text-secondary">Same Day Fixing</h3>
                            <p class="font-body-md text-on-surface-variant">Complete transformation in a single 2-hour
                                session.</p>
                        </div>
                        <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 fade-in-section">
                            <div
                                class="w-12 h-12 rounded-full bg-surface border border-surface-variant flex items-center justify-center text-primary shadow-sm mb-2">
                                <span class="material-symbols-outlined">water_drop</span>
                            </div>
                            <h3 class="font-headline-md text-xl text-secondary">Sweat & Water Resistant</h3>
                            <p class="font-body-md text-on-surface-variant">Maintain your active lifestyle, from gym
                                sessions to swimming.</p>
                        </div>
                        <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 fade-in-section delay-100">
                            <div
                                class="w-12 h-12 rounded-full bg-surface border border-surface-variant flex items-center justify-center text-primary shadow-sm mb-2">
                                <span class="material-symbols-outlined">verified</span>
                            </div>
                            <h3 class="font-headline-md text-xl text-secondary">Premium Human Hair</h3>
                            <p class="font-body-md text-on-surface-variant">We use only the highest grade, ethically
                                sourced human hair.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Google Reviews Section -->
        <section class="py-section-gap bg-background relative overflow-hidden" id="testimonials">
            <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                <div class="text-center mb-16 fade-in-section">
                    <span class="font-label-md text-label-md text-primary uppercase tracking-widest mb-4 block">Client
                        Success</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-4xl md:text-headline-lg text-secondary">
                        Google Reviews</h2>
                    <div class="flex items-center justify-center gap-4 mt-6">
                        <span class="font-display-lg text-5xl text-secondary">4.9</span>
                        <div class="flex flex-col items-start">
                            <div class="flex text-[#FABB05]">
                                <span class="material-symbols-outlined filled">star</span>
                                <span class="material-symbols-outlined filled">star</span>
                                <span class="material-symbols-outlined filled">star</span>
                                <span class="material-symbols-outlined filled">star</span>
                                <span class="material-symbols-outlined filled">star</span>
                            </div>
                            <span class="font-label-sm text-on-surface-variant uppercase tracking-widest mt-1">Based on
                                150+ Reviews</span>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 fade-in-section">
                        <div class="flex text-[#FABB05] mb-2">
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                        </div>
                        <p class="font-body-md text-on-surface-variant italic flex-grow">"Exceptional service! The patch
                            looks incredibly natural. I've gained my confidence back. Highly recommend Growig."</p>
                        <div class="mt-4 border-t border-surface-variant pt-4">
                            <p class="font-headline-md text-lg text-secondary">Rahul Sharma</p>
                            <p class="font-label-sm text-primary uppercase">2 weeks ago</p>
                        </div>
                    </div>
                    <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 fade-in-section delay-100">
                        <div class="flex text-[#FABB05] mb-2">
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                        </div>
                        <p class="font-body-md text-on-surface-variant italic flex-grow">"The staff is very professional
                            and the quality of the hair patch is top-notch. It blends perfectly with my own hair."</p>
                        <div class="mt-4 border-t border-surface-variant pt-4">
                            <p class="font-headline-md text-lg text-secondary">Amit Kumar</p>
                            <p class="font-label-sm text-primary uppercase">1 month ago</p>
                        </div>
                    </div>
                    <div class="glass-card p-8 rounded-2xl flex flex-col gap-4 fade-in-section delay-200">
                        <div class="flex text-[#FABB05] mb-2">
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                            <span class="material-symbols-outlined filled text-xl">star</span>
                        </div>
                        <p class="font-body-md text-on-surface-variant italic flex-grow">"Best hair replacement studio
                            in Gurgaon. The entire process was smooth, painless, and the result is just wow."</p>
                        <div class="mt-4 border-t border-surface-variant pt-4">
                            <p class="font-headline-md text-lg text-secondary">Vikram Singh</p>
                            <p class="font-label-sm text-primary uppercase">3 months ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section -->
        <section class="py-section-gap bg-surface-container-lowest relative" id="faq">
            <div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
                <div class="text-center mb-16 fade-in-section">
                    <span class="font-label-md text-label-md text-primary uppercase tracking-widest mb-4 block">Common
                        Queries</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-4xl md:text-headline-lg text-secondary">
                        Frequently Asked Questions</h2>
                </div>
                <div class="flex flex-col gap-4 fade-in-section">
                    <!-- FAQ Item 1 -->
                    <details class="glass-card rounded-2xl group overflow-hidden" name="faq">
                        <summary
                            class="flex justify-between items-center font-headline-md text-xl text-secondary p-8 cursor-pointer hover:text-primary transition-colors">
                            Is the procedure painful?
                            <span
                                class="material-symbols-outlined text-primary transition-transform duration-300 group-open:rotate-180">expand_more</span>
                        </summary>
                        <div class="px-8 pb-8 pt-0 font-body-md text-on-surface-variant leading-relaxed">
                            <p>Completely non-surgical and painless. The process involves attaching a custom hair system
                                using medical-grade adhesives or clips, ensuring comfort throughout.</p>
                        </div>
                    </details>
                    <!-- FAQ Item 2 -->
                    <details class="glass-card rounded-2xl group overflow-hidden" name="faq">
                        <summary
                            class="flex justify-between items-center font-headline-md text-xl text-secondary p-8 cursor-pointer hover:text-primary transition-colors">
                            How long does a hair patch last?
                            <span
                                class="material-symbols-outlined text-primary transition-transform duration-300 group-open:rotate-180">expand_more</span>
                        </summary>
                        <div class="px-8 pb-8 pt-0 font-body-md text-on-surface-variant leading-relaxed">
                            <p>Typically 6-10 months with proper maintenance and regular servicing. The longevity
                                depends on the base material chosen and your lifestyle.</p>
                        </div>
                    </details>
                    <!-- FAQ Item 3 -->
                    <details class="glass-card rounded-2xl group overflow-hidden" name="faq">
                        <summary
                            class="flex justify-between items-center font-headline-md text-xl text-secondary p-8 cursor-pointer hover:text-primary transition-colors">
                            Can I style it like my own hair?
                            <span
                                class="material-symbols-outlined text-primary transition-transform duration-300 group-open:rotate-180">expand_more</span>
                        </summary>
                        <div class="px-8 pb-8 pt-0 font-body-md text-on-surface-variant leading-relaxed">
                            <p>Yes, absolutely. Since we use premium human hair, you can cut, color, blow-dry, and style
                                it just as you would your natural hair.</p>
                        </div>
                    </details>
                    <!-- FAQ Item 4 -->
                    <details class="glass-card rounded-2xl group overflow-hidden" name="faq">
                        <summary
                            class="flex justify-between items-center font-headline-md text-xl text-secondary p-8 cursor-pointer hover:text-primary transition-colors">
                            Is it visible to others?
                            <span
                                class="material-symbols-outlined text-primary transition-transform duration-300 group-open:rotate-180">expand_more</span>
                        </summary>
                        <div class="px-8 pb-8 pt-0 font-body-md text-on-surface-variant leading-relaxed">
                            <p>Our bespoke integration ensures a 100% natural, undetectable finish. The customized front
                                hairline and color matching make it virtually impossible to notice.</p>
                        </div>
                    </details>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section class="py-section-gap bg-background relative" id="contact">
            <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-16 fade-in-section">
                    <span class="font-label-md text-label-md text-primary uppercase tracking-widest mb-4 block">Get in
                        Touch</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-4xl md:text-headline-lg text-secondary">
                        Book Your Consultation</h2>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
                    <div
                        class="glass-card p-10 md:p-14 rounded-3xl fade-in-section shadow-[0_30px_60px_rgba(0,0,0,0.05)] border border-white/60 h-full">
                        <form class="flex flex-col gap-8 h-full">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label
                                        class="block font-label-md text-secondary mb-2 uppercase text-xs tracking-widest"
                                        for="name">Full Name</label>
                                    <input
                                        class="w-full bg-surface border border-surface-variant rounded-lg px-4 py-4 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors"
                                        id="name" placeholder="John Doe" type="text" />
                                </div>
                                <div>
                                    <label
                                        class="block font-label-md text-secondary mb-2 uppercase text-xs tracking-widest"
                                        for="phone">Phone Number</label>
                                    <input
                                        class="w-full bg-surface border border-surface-variant rounded-lg px-4 py-4 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors"
                                        id="phone" placeholder="+91 98765 43210" type="tel" />
                                </div>
                            </div>
                            <div>
                                <label class="block font-label-md text-secondary mb-2 uppercase text-xs tracking-widest"
                                    for="service">Service Interest</label>
                                <select
                                    class="w-full bg-surface border border-surface-variant rounded-lg px-4 py-4 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors appearance-none"
                                    id="service">
                                    <option value="">Select a service</option>
                                    <option value="patch">Premium Hair Patch</option>
                                    <option value="wig">Full Hair Wig</option>
                                    <option value="consultation">General Consultation</option>
                                </select>
                            </div>
                            <div class="flex-grow">
                                <label class="block font-label-md text-secondary mb-2 uppercase text-xs tracking-widest"
                                    for="message">Message</label>
                                <textarea
                                    class="w-full bg-surface border border-surface-variant rounded-lg px-4 py-4 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors h-32 md:h-full resize-none"
                                    id="message" placeholder="Tell us about your requirements..."></textarea>
                            </div>
                            <button
                                class="bg-primary text-on-primary font-label-md text-label-md uppercase px-8 py-5 rounded-lg glow-hover transition-all duration-300 w-full mt-4 tracking-widest"
                                type="submit">
                                Send Request
                            </button>
                        </form>
                    </div>
                    <div
                        class="fade-in-section h-[400px] lg:h-auto rounded-3xl overflow-hidden glass-card p-2 border border-white/60">
                        <iframe allowfullscreen="" class="w-full h-full rounded-2xl" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.2060479792467!2d77.06936177571829!3d28.58520787569065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b158c96920f%3A0x8482722061064f9a!2sGrowig%20hair%20solution!5e1!3m2!1sen!2sin!4v1780336153874!5m2!1sen!2sin"
                            style="border:0;"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>