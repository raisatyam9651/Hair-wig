<?php include 'custom-header-link.php'; ?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Before and After Gallery | Growig Hair Solution Dwarka</title>
    <meta content="Real transformations, real confidence. Browse our gallery of premium non-surgical hair replacement, patches, and wigs at Growig Hair Solution in Dwarka Sec-7." name="description"/>
    <?php include 'header-code.php'; ?>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed-dim selection:text-on-primary-fixed">
    <?php include 'header.php'; ?>
    <main class="pt-20">
        <?php include 'breadcrumbs.php'; ?>

        <!-- Hero Intro Section -->
        <section class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop py-12 text-center">
            <span class="inline-block py-1 px-4 rounded-full bg-primary/10 text-primary font-label-md uppercase tracking-wider mb-4">TRANSFORMATION GALLERY</span>
            <h1 class="font-display-lg text-3xl md:text-4xl lg:text-headline-lg text-on-surface leading-tight mb-6">
                Before &amp; After: <span class="text-primary">Hair Wig &amp; Patch Results in Dwarka</span>
            </h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                Discover the real-life results of our bespoke hair systems. Millimeter-precision customization offering 100% natural, undetectable realism.
            </p>
        </section>

        <!-- Gallery Filter & Grid Section -->
        <section class="pb-section-gap">
            <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
                
                <!-- Category Filter Tabs -->
                <div class="flex flex-wrap justify-center gap-3 mb-12">
                    <button class="filter-btn active px-6 py-2.5 rounded-full font-label-md text-sm border border-outline/20 bg-primary text-white transition-all duration-300 hover:scale-105" data-filter="all">All Transformations</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full font-label-md text-sm border border-outline/20 bg-white text-secondary hover:bg-surface-container transition-all duration-300 hover:scale-105" data-filter="patch">Hair Patch</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full font-label-md text-sm border border-outline/20 bg-white text-secondary hover:bg-surface-container transition-all duration-300 hover:scale-105" data-filter="wig">Hair Wigs</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full font-label-md text-sm border border-outline/20 bg-white text-secondary hover:bg-surface-container transition-all duration-300 hover:scale-105" data-filter="bonding">Hair Bonding</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full font-label-md text-sm border border-outline/20 bg-white text-secondary hover:bg-surface-container transition-all duration-300 hover:scale-105" data-filter="non-surgical">Non-Surgical</button>
                </div>

                <!-- Gallery Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="gallery-grid">
                    
                    <!-- Gallery Item: Suresh (Hair Bonding) -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="bonding">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(0)">
                            <img alt="Suresh's Hair Bonding - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/suresh-before-and-after.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Hair Bonding</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Suresh's Hair Bonding</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Advanced medical-grade hair bonding system for a secure and active lifestyle.</p>
                        </div>
                    </div>

                    <!-- Gallery Item: Rintu (Hair Patch) -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="patch">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(1)">
                            <img alt="Rintu's Hair Patch - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/rintu-hair-patch-before-and-after.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Premium Hair Patch</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Rintu's Hair Patch</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Bespoke premium hair patch styling blending seamlessly for 100% natural realism.</p>
                        </div>
                    </div>

                    <!-- Gallery Item: Nikhil (Hair Wig) -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="wig">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(2)">
                            <img alt="Nikhil's Hair Wig - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/nikhil-before-and-after-hair-wig.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Hair Wigs</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Nikhil's Hair Wig</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Custom full hair wig restoration with a breathable base and natural hairline.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 1 -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="patch bonding">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(3)">
                            <img alt="Elite Hybrid Restoration - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/main-beofre-and-after.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Hair Patch &amp; Bonding</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Elite Hybrid Restoration</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Precision mapping with a custom hybrid base for 100% natural hairline and crown realism.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="patch">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(4)">
                            <img alt="Bespoke Hair Patch - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/before-and-after.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Premium Hair Patch</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Bespoke Hair Patch</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Undetectable poly-skin border system blending flawlessly with natural hair density.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="patch">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(5)">
                            <img alt="Classic Hair Restoration - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/before-and-after-img.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Premium Hair Patch</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Classic Hair Restoration</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Premium human hair integration designed for a sharp, executive corporate look.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 4 -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="non-surgical">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(6)">
                            <img alt="Non-Surgical Hair Replacement - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/Transformation.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Non-Surgical Replacement</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Non-Surgical Hair Replacement</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Complete top-of-head restoration utilizing advanced bio-dermal bond technology.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 6 -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="bonding">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(7)">
                            <img alt="Waterproof Hair Bonding - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/hair-bonding-transformation.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Hair Bonding</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Waterproof Hair Bonding</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Active lifestyle hair system secured with medical-grade hypoallergenic bonding.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 7 -->
                    <div class="gallery-item glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/10 transition-all duration-500 hover:-translate-y-2 cursor-pointer" data-category="patch non-surgical">
                        <div class="relative group h-[300px] overflow-hidden bg-surface-container-high" onclick="openLightbox(8)">
                            <img alt="Custom Hairline Design - Before and After" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="assets/before-andafter.png" />
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-4xl bg-primary/80 p-3 rounded-full">zoom_in</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest block mb-2">Custom Hairline</span>
                            <h3 class="font-headline-md text-xl text-on-surface mb-2">Bespoke Hairline Design</h3>
                            <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">Millimeter-precision front hairline mapping matching facial structure and age.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low">
            <div class="max-w-[1280px] mx-auto glass-card rounded-[48px] overflow-hidden royal-shadow border border-primary/30">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-8 md:p-16 space-y-8 my-auto">
                        <h2 class="font-display-lg text-[32px] md:text-display-lg text-on-surface">Begin Your Transformation Journey</h2>
                        <p class="font-body-lg text-on-surface-variant leading-relaxed">Don't let hair loss define your story. Join the hundreds of professionals in Dwarka who have regained their edge with Growig Hair Solution. Book your private, complimentary consultation today.</p>
                        <div class="flex flex-col sm:flex-row gap-6">
                            <a href="contact" class="bg-primary text-white px-12 py-5 rounded-full font-label-md hover:scale-105 active:scale-95 transition-all royal-shadow text-center">Schedule My Appointment</a>
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
                        <img alt="Real Hair Patch Transformation" class="absolute inset-0 w-full h-full object-cover" src="assets/main-beofre-and-after.png"/>
                        <div class="absolute inset-0 bg-gradient-to-r from-surface-container to-transparent lg:block hidden"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Lightbox Modal -->
    <div class="fixed inset-0 z-[100] bg-black/95 hidden flex-col items-center justify-center p-4 transition-all duration-300" id="lightbox">
        <!-- Close Button -->
        <button class="absolute top-6 right-6 text-white hover:text-primary transition-colors duration-300 focus:outline-none" onclick="closeLightbox()">
            <span class="material-symbols-outlined text-4xl">close</span>
        </button>

        <!-- Navigation Buttons -->
        <button class="absolute left-6 text-white hover:text-primary transition-colors duration-300 focus:outline-none bg-black/40 p-2 rounded-full hover:bg-black/80" onclick="prevImage()">
            <span class="material-symbols-outlined text-4xl">chevron_left</span>
        </button>
        <button class="absolute right-6 text-white hover:text-primary transition-colors duration-300 focus:outline-none bg-black/40 p-2 rounded-full hover:bg-black/80" onclick="nextImage()">
            <span class="material-symbols-outlined text-4xl">chevron_right</span>
        </button>

        <!-- Lightbox Content Container -->
        <div class="max-w-4xl max-h-[80vh] w-full flex flex-col items-center gap-4">
            <img alt="Lightbox Image" class="max-w-full max-h-[70vh] object-contain rounded-xl royal-shadow border border-white/10" id="lightbox-img" src="" />
            <div class="text-center text-white px-6">
                <h4 class="font-headline-md text-xl text-primary-fixed-dim" id="lightbox-title"></h4>
                <p class="font-body-md text-sm text-gray-300 mt-1" id="lightbox-desc"></p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        // Gallery Filter System
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active classes
                filterButtons.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white');
                    b.classList.add('bg-white', 'text-secondary');
                });
                // Add active to current
                btn.classList.remove('bg-white', 'text-secondary');
                btn.classList.add('bg-primary', 'text-white');

                const filterValue = btn.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    const categories = item.getAttribute('data-category').split(' ');
                    if (filterValue === 'all' || categories.includes(filterValue)) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Lightbox System Data
        const lightboxData = [
            {
                src: 'assets/suresh-before-and-after.png',
                title: 'Suresh\'s Hair Bonding',
                desc: 'Advanced medical-grade hair bonding system for a secure and active lifestyle.'
            },
            {
                src: 'assets/rintu-hair-patch-before-and-after.png',
                title: 'Rintu\'s Hair Patch',
                desc: 'Bespoke premium hair patch styling blending seamlessly for 100% natural realism.'
            },
            {
                src: 'assets/nikhil-before-and-after-hair-wig.png',
                title: 'Nikhil\'s Hair Wig',
                desc: 'Custom full hair wig restoration with a breathable base and natural hairline.'
            },
            {
                src: 'assets/main-beofre-and-after.png',
                title: 'Elite Hybrid Restoration',
                desc: 'Precision mapping with a custom hybrid base for 100% natural hairline and crown realism.'
            },
            {
                src: 'assets/before-and-after.png',
                title: 'Bespoke Hair Patch',
                desc: 'Undetectable poly-skin border system blending flawlessly with natural hair density.'
            },
            {
                src: 'assets/before-and-after-img.png',
                title: 'Classic Hair Restoration',
                desc: 'Premium human hair integration designed for a sharp, executive corporate look.'
            },
            {
                src: 'assets/Transformation.png',
                title: 'Non-Surgical Hair Replacement',
                desc: 'Complete top-of-head restoration utilizing advanced bio-dermal bond technology.'
            },
            {
                src: 'assets/hair-bonding-transformation.png',
                title: 'Waterproof Hair Bonding',
                desc: 'Active lifestyle hair system secured with medical-grade hypoallergenic bonding.'
            },
            {
                src: 'assets/before-andafter.png',
                title: 'Bespoke Hairline Design',
                desc: 'Millimeter-precision front hairline mapping matching facial structure and age.'
            }
        ];

        let currentImgIndex = 0;
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDesc = document.getElementById('lightbox-desc');

        function openLightbox(index) {
            currentImgIndex = index;
            updateLightboxContent();
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            document.body.style.overflow = 'hidden'; // Stop page scroll
        }

        function closeLightbox() {
            lightbox.classList.remove('flex');
            lightbox.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Restore page scroll
        }

        function updateLightboxContent() {
            const data = lightboxData[currentImgIndex];
            lightboxImg.src = data.src;
            lightboxTitle.innerText = data.title;
            lightboxDesc.innerText = data.desc;
        }

        function nextImage() {
            currentImgIndex = (currentImgIndex + 1) % lightboxData.length;
            updateLightboxContent();
        }

        function prevImage() {
            currentImgIndex = (currentImgIndex - 1 + lightboxData.length) % lightboxData.length;
            updateLightboxContent();
        }

        // Close lightbox on click outside the image
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.classList.contains('flex')) {
                closeLightbox();
            }
        });

        // Key press navigation
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('hidden')) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowRight') nextImage();
                if (e.key === 'ArrowLeft') prevImage();
            }
        });
    </script>
</body>
</html>
