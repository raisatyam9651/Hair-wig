<?php
$current_page = basename($_SERVER['PHP_SELF']);
$path_prefix = isset($path_prefix) ? $path_prefix : ((strpos($_SERVER['PHP_SELF'], '/blog/') !== false) ? '../' : '');
$is_blog_active = ($current_page == 'blog' || strpos($_SERVER['PHP_SELF'], '/blog/') !== false);
?>
<!-- Sticky Header -->
<header
    class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-3xl border-b border-surface-variant shadow-sm transition-all duration-300"
    id="main-header">
    <div
        class="relative z-50 flex justify-between items-center max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop py-4 md:py-6">
        <!-- Brand Logo -->
        <a class="flex items-center gap-2 group" href="<?php echo $path_prefix; ?>./">
            <img alt="Growig Hair Solution Logo"
                class="h-10 md:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_Fvti5zj5yA0e3mx5gnZWkmjw05AByrcoLzIdiVdh1ROEx263HQYnxKhkuIFQpQeEK5r6MWx6ztYxygylaLwM1vObXU4_y14AoejXVBNy9ei7Vc6yQ8U4_LQbDbVk_cM24aYXAPFHcsqHU0LF7G7A1XoDEAE-8aMgkOvHqcjuCWArzAZMAExVP7lQyH9uHDU0Nr4I0rJGTiTp7LRyQwWfxG7nKdaDV9y-v1vyEGwFKeV0_RwaHSm5H32bgi9ZFh-CWUvvmz5-kRs" />
        </a>
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-8">
            <a class="<?php echo ($current_page == 'index.php') ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="<?php echo $path_prefix; ?>./">Home</a>
            <a class="<?php echo ($current_page == 'about.php') ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="<?php echo $path_prefix; ?>about">About</a>


            <?php 
            $service_pages = [
                'premium-hair-patch.php',
                'full-hair-wig.php',
                'non-surgical-replacement.php',
                'hair-bonding.php',
                'maintenance-and-styling.php',
                'custom-hairline-design.php'
            ];
            $is_service_active = in_array($current_page, $service_pages);
            ?>
            <div class="relative group py-2">
                <button class="<?php echo $is_service_active ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary border-b-2 border-transparent'; ?> flex items-center gap-0.5 transition-colors duration-300 font-label-md text-label-md uppercase pb-0.5 focus:outline-none">
                    Services
                    <span class="material-symbols-outlined text-[16px] transition-transform duration-300 group-hover:rotate-180">expand_more</span>
                </button>
                <!-- Dropdown Menu -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 pt-2 w-[540px] transition-all duration-300 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto z-50">
                    <div class="bg-[#fcf9f4] border border-outline-variant/30 rounded-2xl shadow-xl p-6 grid grid-cols-2 gap-x-6 gap-y-4">
                        <a href="<?php echo $path_prefix; ?>premium-hair-patch" class="flex flex-col p-2.5 rounded-lg hover:bg-surface-container transition-colors duration-200">
                            <span class="font-bold text-sm text-primary uppercase tracking-wider">Premium Hair Patch</span>
                            <span class="text-xs text-secondary mt-1 font-body-md normal-case leading-relaxed font-normal">100% natural, undetectable custom patches.</span>
                        </a>
                        <a href="<?php echo $path_prefix; ?>full-hair-wig" class="flex flex-col p-2.5 rounded-lg hover:bg-surface-container transition-colors duration-200">
                            <span class="font-bold text-sm text-primary uppercase tracking-wider">Full Hair Wigs</span>
                            <span class="text-xs text-secondary mt-1 font-body-md normal-case leading-relaxed font-normal">High-quality, comfortable full head coverage.</span>
                        </a>
                        <a href="<?php echo $path_prefix; ?>non-surgical-replacement" class="flex flex-col p-2.5 rounded-lg hover:bg-surface-container transition-colors duration-200">
                            <span class="font-bold text-sm text-primary uppercase tracking-wider">Non-Surgical Replacement</span>
                            <span class="text-xs text-secondary mt-1 font-body-md normal-case leading-relaxed font-normal">Advanced, non-invasive hair restoration.</span>
                        </a>
                        <a href="<?php echo $path_prefix; ?>hair-bonding" class="flex flex-col p-2.5 rounded-lg hover:bg-surface-container transition-colors duration-200">
                            <span class="font-bold text-sm text-primary uppercase tracking-wider">Hair Bonding</span>
                            <span class="text-xs text-secondary mt-1 font-body-md normal-case leading-relaxed font-normal">Secure fixing for active lifestyles.</span>
                        </a>
                        <a href="<?php echo $path_prefix; ?>maintenance-and-styling" class="flex flex-col p-2.5 rounded-lg hover:bg-surface-container transition-colors duration-200">
                            <span class="font-bold text-sm text-primary uppercase tracking-wider">Maintenance & Styling</span>
                            <span class="text-xs text-secondary mt-1 font-body-md normal-case leading-relaxed font-normal">Expert cleaning, servicing, and styling.</span>
                        </a>
                        <a href="<?php echo $path_prefix; ?>custom-hairline-design" class="flex flex-col p-2.5 rounded-lg hover:bg-surface-container transition-colors duration-200">
                            <span class="font-bold text-sm text-primary uppercase tracking-wider">Custom Hairline Design</span>
                            <span class="text-xs text-secondary mt-1 font-body-md normal-case leading-relaxed font-normal">Tailored front hairline for realism.</span>
                        </a>
                    </div>
                </div>
            </div>
            <a class="<?php echo ($current_page == 'gallery.php') ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="<?php echo $path_prefix; ?>gallery">Gallery</a>
            <a class="<?php echo $is_blog_active ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="<?php echo $path_prefix; ?>blog">Blog</a>
            <a class="<?php echo ($current_page == 'review-assistant.php') ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="<?php echo $path_prefix; ?>review-assistant">Review Us</a>
        </nav>
        <!-- Actions -->
        <div class="flex items-center gap-4">
            <a class="inline-flex bg-primary text-on-primary font-label-md text-xs md:text-label-md uppercase px-4 py-2 md:px-6 md:py-3 rounded-DEFAULT glow-hover transition-all duration-300 items-center gap-2 hover:-translate-y-0.5"
                href="<?php echo $path_prefix; ?>contact">
                Consultation
                <span class="material-symbols-outlined text-[16px] md:text-[18px]">arrow_forward</span>
            </a>
            <!-- Mobile Menu Toggle -->
            <button aria-label="Toggle Menu" class="md:hidden text-secondary hover:text-primary transition-colors"
                id="mobile-menu-btn">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>
</header>
<!-- Mobile Menu Overlay -->
<div class="fixed inset-0 bg-[#fcf9f4] z-40 flex flex-col items-center justify-start py-28 gap-6 border-t border-surface-variant transition-all duration-300 opacity-0 pointer-events-none invisible overflow-y-auto"
    id="mobile-menu">
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="<?php echo $path_prefix; ?>./">Home</a>
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="<?php echo $path_prefix; ?>about">About</a>

    <!-- Mobile Services Submenu -->
    <div class="w-full flex flex-col items-center">
        <button class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider flex items-center gap-1 focus:outline-none" id="mobile-services-btn">
            Services
            <span class="material-symbols-outlined transition-transform duration-300" id="mobile-services-icon">expand_more</span>
        </button>
        <div class="w-full flex flex-col items-center gap-4 mt-4 max-h-0 overflow-hidden transition-all duration-300 ease-in-out" id="mobile-services-menu">
            <a class="text-secondary hover:text-primary transition-colors font-label-md text-base tracking-wider mobile-link" href="<?php echo $path_prefix; ?>premium-hair-patch">Premium Hair Patch</a>
            <a class="text-secondary hover:text-primary transition-colors font-label-md text-base tracking-wider mobile-link" href="<?php echo $path_prefix; ?>full-hair-wig">Full Hair Wigs</a>
            <a class="text-secondary hover:text-primary transition-colors font-label-md text-base tracking-wider mobile-link" href="<?php echo $path_prefix; ?>non-surgical-replacement">Non-Surgical Replacement</a>
            <a class="text-secondary hover:text-primary transition-colors font-label-md text-base tracking-wider mobile-link" href="<?php echo $path_prefix; ?>hair-bonding">Hair Bonding</a>
            <a class="text-secondary hover:text-primary transition-colors font-label-md text-base tracking-wider mobile-link" href="<?php echo $path_prefix; ?>maintenance-and-styling">Maintenance & Styling</a>
            <a class="text-secondary hover:text-primary transition-colors font-label-md text-base tracking-wider mobile-link" href="<?php echo $path_prefix; ?>custom-hairline-design">Custom Hairline Design</a>
        </div>
    </div>
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="<?php echo $path_prefix; ?>gallery">Gallery</a>
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="<?php echo $path_prefix; ?>blog">Blog</a>
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="<?php echo $path_prefix; ?>review-assistant">Review Us</a>
    <a class="mt-4 bg-primary text-on-primary font-label-md text-sm uppercase px-8 py-4 rounded-DEFAULT mobile-link text-center"
        href="<?php echo $path_prefix; ?>contact">Book Consultation</a>
</div>