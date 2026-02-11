import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Initialize Alpine.js
window.Alpine = Alpine;
Alpine.start();

// Initialize AOS
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
});

// Mobile Menu Toggle
window.toggleMobileMenu = function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('active');
};

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Form Validation
window.validateForm = function(formId) {
    const form = document.getElementById(formId);
    const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
    let isValid = true;

    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('border-red-500');
            isValid = false;
        } else {
            input.classList.remove('border-red-500');
        }
    });

    return isValid;
};

// Gallery Lightbox
window.openLightbox = function(imageSrc) {
    const lightbox = document.createElement('div');
    lightbox.className = 'fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4';
    lightbox.innerHTML = `
        <div class="relative max-w-4xl max-h-full">
            <img src="${imageSrc}" alt="Gallery Image" class="max-w-full max-h-full object-contain">
            <button onclick="this.parentElement.parentElement.remove()" class="absolute top-4 right-4 text-white text-3xl hover:text-red-500 transition-colors">
                &times;
            </button>
        </div>
    `;
    document.body.appendChild(lightbox);
};

// Language Switcher
window.switchLanguage = function(lang) {
    document.documentElement.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
    document.documentElement.setAttribute('lang', lang);
    localStorage.setItem('preferred-language', lang);
    
    // Reload page with new language
    window.location.href = `/${lang}${window.location.pathname.substring(3)}`;
};

// Load preferred language
document.addEventListener('DOMContentLoaded', function() {
    const savedLang = localStorage.getItem('preferred-language') || 'ar';
    document.documentElement.setAttribute('dir', savedLang === 'ar' ? 'rtl' : 'ltr');
    document.documentElement.setAttribute('lang', savedLang);
});

// Quote Form Handler
window.handleQuoteForm = async function(formId) {
    if (!validateForm(formId)) {
        showNotification('يرجى ملء جميع الحقول المطلوبة', 'error');
        return;
    }

    const form = document.getElementById(formId);
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;

    // Show loading state
    submitBtn.innerHTML = '<span class="loading-spinner inline-block w-4 h-4 mr-2"></span> جاري الإرسال...';
    submitBtn.disabled = true;

    try {
        const response = await fetch('/quote-request', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });

        const data = await response.json();

        if (data.success) {
            showNotification('تم إرسال طلبك بنجاح! سنتواصل معك قريباً', 'success');
            form.reset();
        } else {
            showNotification(data.message || 'حدث خطأ ما. يرجى المحاولة مرة أخرى', 'error');
        }
    } catch (error) {
        showNotification('حدث خطأ في الاتصال. يرجى المحاولة مرة أخرى', 'error');
    } finally {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }
};

// Notification System
window.showNotification = function(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full`;
    
    const colors = {
        success: 'bg-green-500 text-white',
        error: 'bg-red-500 text-white',
        info: 'bg-blue-500 text-white',
        warning: 'bg-yellow-500 text-white'
    };
    
    notification.classList.add(...colors[type].split(' '));
    notification.innerHTML = `
        <div class="flex items-center justify-between">
            <span>${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-xl hover:opacity-75">&times;</button>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => notification.remove(), 300);
    }, 5000);
};

// Lazy Loading for Images
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy-loading');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => {
        img.classList.add('lazy-loading');
        imageObserver.observe(img);
    });
});

// Parallax Effect for Hero Section
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.hero-parallax');
    if (parallax) {
        parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});
