// Header Scroll Effect
const header = document.getElementById('main-header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('shadow-md');
        header.classList.replace('bg-surface/80', 'bg-surface/95');
    } else {
        header.classList.remove('shadow-md');
        header.classList.replace('bg-surface/95', 'bg-surface/80');
    }
});

// Mobile Menu Toggle
const menuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const mobileLinks = document.querySelectorAll('.mobile-link');

const mobileServicesBtn = document.getElementById('mobile-services-btn');
const mobileServicesMenu = document.getElementById('mobile-services-menu');
const mobileServicesIcon = document.getElementById('mobile-services-icon');



function closeMobileServicesMenu() {
    if (mobileServicesMenu) {
        mobileServicesMenu.classList.add('max-h-0');
        mobileServicesMenu.classList.remove('max-h-[500px]');
    }
    if (mobileServicesIcon) {
        mobileServicesIcon.classList.remove('rotate-180');
    }
}



if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('opacity-0');
        if (isOpen) {
            mobileMenu.classList.add('opacity-0', 'pointer-events-none', 'invisible');
            mobileMenu.classList.remove('opacity-100', 'pointer-events-auto', 'visible');
            closeMobileServicesMenu();

        } else {
            mobileMenu.classList.remove('opacity-0', 'pointer-events-none', 'invisible');
            mobileMenu.classList.add('opacity-100', 'pointer-events-auto', 'visible');
        }
        const icon = menuBtn.querySelector('span');
        if (icon) {
            icon.textContent = isOpen ? 'menu' : 'close';
        }
    });

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('opacity-0', 'pointer-events-none', 'invisible');
            mobileMenu.classList.remove('opacity-100', 'pointer-events-auto', 'visible');
            const icon = menuBtn.querySelector('span');
            if (icon) {
                icon.textContent = 'menu';
            }
            closeMobileServicesMenu();

        });
    });
}

// Mobile Services Submenu Toggle
if (mobileServicesBtn && mobileServicesMenu) {
    mobileServicesBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const isCollapsed = mobileServicesMenu.classList.contains('max-h-0');
        if (isCollapsed) {
            mobileServicesMenu.classList.remove('max-h-0');
            mobileServicesMenu.classList.add('max-h-[500px]');
            if (mobileServicesIcon) {
                mobileServicesIcon.classList.add('rotate-180');
            }
        } else {
            mobileServicesMenu.classList.add('max-h-0');
            mobileServicesMenu.classList.remove('max-h-[500px]');
            if (mobileServicesIcon) {
                mobileServicesIcon.classList.remove('rotate-180');
            }
        }
    });
}



// Intersection Observer for scroll animations
const sections = document.querySelectorAll('.fade-in-section');
const observerOptions = {
    root: null,
    threshold: 0.1,
    rootMargin: '0px'
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

sections.forEach(section => {
    observer.observe(section);
});

// Lazy-load iframes via Intersection Observer
document.addEventListener("DOMContentLoaded", function() {
    const lazyIframes = document.querySelectorAll("iframe.data-lazy-iframe");
    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const iframe = entry.target;
                    iframe.src = iframe.dataset.src;
                    iframe.classList.remove("data-lazy-iframe");
                    obs.unobserve(iframe);
                }
            });
        }, { rootMargin: "200px" });
        lazyIframes.forEach(iframe => observer.observe(iframe));
    } else {
        lazyIframes.forEach(iframe => {
            iframe.src = iframe.dataset.src;
        });
    }
});
