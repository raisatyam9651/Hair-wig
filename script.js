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

if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('opacity-0');
        if (isOpen) {
            mobileMenu.classList.add('opacity-0', 'pointer-events-none', 'invisible');
            mobileMenu.classList.remove('opacity-100', 'pointer-events-auto', 'visible');
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
        });
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
