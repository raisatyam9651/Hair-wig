<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!-- Sticky Header -->
<header
    class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-3xl border-b border-surface-variant shadow-sm transition-all duration-300"
    id="main-header">
    <div
        class="relative z-50 flex justify-between items-center max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop py-4 md:py-6">
        <!-- Brand Logo -->
        <a class="flex items-center gap-2 group" href="./">
            <img alt="Growig Hair Solution Logo"
                class="h-10 md:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_Fvti5zj5yA0e3mx5gnZWkmjw05AByrcoLzIdiVdh1ROEx263HQYnxKhkuIFQpQeEK5r6MWx6ztYxygylaLwM1vObXU4_y14AoejXVBNy9ei7Vc6yQ8U4_LQbDbVk_cM24aYXAPFHcsqHU0LF7G7A1XoDEAE-8aMgkOvHqcjuCWArzAZMAExVP7lQyH9uHDU0Nr4I0rJGTiTp7LRyQwWfxG7nKdaDV9y-v1vyEGwFKeV0_RwaHSm5H32bgi9ZFh-CWUvvmz5-kRs" />
        </a>
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-8">
            <a class="<?php echo ($current_page == 'index.php') ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="./">Home</a>
            <a class="<?php echo ($current_page == 'about.php') ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="about">About</a>
            <a class="<?php echo ($current_page == 'full-hair-wig.php') ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="full-hair-wig">Services</a>
            <a class="<?php echo ($current_page == 'collection.php') ? 'text-primary font-bold border-b-2 border-primary' : 'text-secondary hover:text-primary'; ?> transition-colors duration-300 font-label-md text-label-md uppercase"
                href="collection">Collections</a>
            <a class="text-secondary hover:text-primary transition-colors duration-300 font-label-md text-label-md uppercase"
                href="./#testimonials">Reviews</a>
        </nav>
        <!-- Actions -->
        <div class="flex items-center gap-4">
            <a class="inline-flex bg-primary text-on-primary font-label-md text-xs md:text-label-md uppercase px-4 py-2 md:px-6 md:py-3 rounded-DEFAULT glow-hover transition-all duration-300 items-center gap-2 hover:-translate-y-0.5"
                href="contact">
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
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="./">Home</a>
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="about">About</a>
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="full-hair-wig">Services</a>
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="collection">Collections</a>
    <a class="text-secondary hover:text-primary transition-colors font-label-md text-lg uppercase tracking-wider mobile-link" href="./#testimonials">Reviews</a>
    <a class="mt-4 bg-primary text-on-primary font-label-md text-sm uppercase px-8 py-4 rounded-DEFAULT mobile-link text-center"
        href="contact">Book Consultation</a>
</div>