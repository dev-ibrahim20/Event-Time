<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'وقت الحدث | تجهيز المؤتمرات والمعارض والخيام الأوروبية | Event Time Saudi Arabia')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo-even.jpeg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/logo-even.jpeg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo-even.jpeg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo-even.jpeg') }}">
    
    <!-- Primary Meta Tags -->
    <meta name="description" content="@yield('description', 'وقت الحدث - الشريك الاستراتيجي الرائد في المملكة العربية السعودية لتجهيز المؤتمرات والمعارض والفعاليات والخيام الأوروبية الفاخرة. نقدم حلولاً متكاملة ومبتكرة للشركات والحكومات والأفراد بأعلى معايير الجودة العالمية. خبرة تزيد عن 10 سنوات في تنظيم الفعاليات الكبرى، مع فريق من المحترفين المتخصصين في إدارة وتنفيذ وتنسيق كل أنواع المناسبات. خدماتنا تشمل: تجهيز قاعات المؤتمرات بأحدث التقنيات، تصميم وبناء المعارض التجارية، تركيب الخيام الأوروبية الفاخرة للزفاف والمناسبات، توفير أنظمة الصوتيات والإضاءة المتطورة، الديكورات الفاخرة، التنسيق الكامل للفعاليات، وتوفير الطاقم المدرب. نغطي جميع المدن السعودية: الرياض، جدة، الدمام، الخبر، مكة المكرمة، المدينة المنورة، وأبها. Event Time - حيث تتحول أحلامك إلى واقع باحترافية وجودة فائقة. اتصل بنا الآن للحصول على استشارة مجانية وعرض سعر خاص.')">
    <meta name="keywords" content="تجهيز مؤتمرات, خيام أوروبية, معارض, حفلات, تجهيز فعاليات, event time, event management, saudi arabia, riyadh, 
    تنظيم فعاليات, إدارة المؤتمرات, تنظيم المعارض, خيام فاخرة, خيام افراح, حفلات زفاف, تنظيم حفلات, 
    conference management, event planning, exhibition setup, luxury tents, wedding tents, party organization, 
    saudi events, riyadh events, jeddah events, dammam events, khobar events, 
    مؤتمرات الرياض, معارض جدة, فعاليات الدمام, تنظيم حفلات الخبر, 
    event services saudi, event management riyadh, luxury tents saudi, conference organizers, 
    exhibition management, corporate events, wedding planning, party services, 
    event decoration, event lighting, event sound system, event catering, event venues, 
    تجهيز قاعات المؤتمرات, ديكور فعاليات, إضاءة فعاليات, صوتيات فعاليات, 
    catering events, event venues rental, party decoration, wedding planning services, 
    corporate event management, business conference setup, exhibition booth design, 
    event production services, event coordination, event logistics, event staff, 
    إنتاج فعاليات, تنسيق فعاليات, لوجستيات فعاليات, طاقم فعاليات, 
    event audio visual, event staging, event furniture rental, event transportation, 
    audio visual services, event staging rental, furniture rental events, event transport services, 
    خيام اعراس, خيام مناسبات, خيام شركات, خيام حكومية, 
    marriage tents, event tents, corporate tents, government tents, 
    تنظيم مناسبات, إدارة مناسبات, تخطيط مناسبات, تنفيذ مناسبات, 
    occasion planning, event execution, occasion management, event coordination services, 
    فعاليات الشركات, فعاليات حكومية, فعاليات خاصة, فعاليات عامة, 
    corporate events, government events, private events, public events, 
    خدمات التجهيز, خدمات التنظيم, خدمات الديكور, خدمات الصوتيات, 
    setup services, organization services, decoration services, audio services, 
    أفضل شركات تنظيم الفعاليات, شركة تنظيم حفلات, شركة تجهيز مؤتمرات, 
    best event companies, event planning company, conference setup company, 
    أسعار تنظيم الفعاليات, تكلفة حفلات زفاف, أسعار الخيام الأوروبية, 
    event prices, wedding costs, european tents prices, 
    تنظيم فعاليات بالسعودية, شركات تنظيم حفلات الرياض, 
    saudi event companies, riyadh event planners, jeddah event organizers, 
    تجهيز مؤتمرات بالرياض, تنظيم معارض بالسعودية, خيام اعراس بالدمام, 
    riyadh conference setup, saudi exhibition setup, dammam wedding tents">
    
    <!-- Author & Publisher -->
    <meta name="author" content="وقت الحدث">
    <meta name="publisher" content="Event Time Saudi Arabia">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="bingbot" content="index, follow">
    
    <!-- Language & Region -->
    <meta name="language" content="{{ app()->getLocale() }}">
    <meta name="geo.region" content="SA">
    <meta name="geo.placename" content="الرياض">
    <meta name="geo.position" content="24.7136;46.6753">
    <meta name="ICBM" content="24.7136,46.6753">
    
    <!-- Content & Technical -->
    <meta name="rating" content="general">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="7 days">
    <meta name="generator" content="Event Time CMS">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="وقت الحدث">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="وقت الحدث">
    <meta property="og:title" content="@yield('og:title', 'وقت الحدث | تجهيز المؤتمرات والمعارض والخيام الأوروبية | Event Time Saudi Arabia')">
    <meta property="og:description" content="@yield('og:description', 'وقت الحدث - الشريك الاستراتيجي الرائد في المملكة العربية السعودية لتجهيز المؤتمرات والمعارض والفعاليات والخيام الأوروبية الفاخرة. نقدم حلولاً متكاملة ومبتكرة للشركات والحكومات والأفراد بأعلى معايير الجودة العالمية.')">
    <meta property="og:url" content="@yield('og:url', 'https://eventtimesa.com')">
    <meta property="og:image" content="@yield('og-image', asset('assets/images/logo-even.jpeg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="وقت الحدث - Event Time Saudi Arabia">
    <meta property="og:locale" content="{{ app()->getLocale() === 'ar' ? 'ar_SA' : 'en_US' }}">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:locale:alternate" content="ar_SA">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@eventtime_sa">
    <meta name="twitter:creator" content="@eventtime_sa">
    <meta name="twitter:title" content="@yield('twitter:title', 'وقت الحدث | تجهيز المؤتمرات والمعارض والخيام الأوروبية | Event Time Saudi Arabia')">
    <meta name="twitter:description" content="@yield('twitter:description', 'وقت الحدث - الشريك الاستراتيجي الرائد في المملكة العربية السعودية لتجهيز المؤتمرات والمعارض والفعاليات والخيام الأوروبية الفاخرة. نقدم حلولاً متكاملة ومبتكرة للشركات والحكومات والأفراد.')">
    <meta name="twitter:image" content="@yield('twitter-image', asset('assets/images/logo-even.jpeg'))">
    <meta name="twitter:image:alt" content="وقت الحدث - Event Time Saudi Arabia">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="category" content="business,event management,conference services">
    <meta name="coverage" content="worldwide">
    <meta name="target" content="all">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://eventtimesa.com">
    
    <!-- Alternate Language Links -->
    <link rel="alternate" hreflang="ar" href="https://eventtimesa.com">
    <link rel="alternate" hreflang="en" href="https://eventtimesa.com?lang=en">
    <link rel="alternate" hreflang="x-default" href="https://eventtimesa.com">
    
    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "وقت الحدث",
        "alternateName": "Event Time Saudi Arabia",
        "url": "https://eventtimesa.com",
        "logo": "https://eventtimesa.com/assets/images/logo-even.jpeg",
        "description": "الشريك الاستراتيجي الرائد في المملكة العربية السعودية لتجهيز المؤتمرات والمعارض والفعاليات والخيام الأوروبية الفاخرة",
        "foundingDate": "2014",
        "areaServed": "SA",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "حي النخيل، الرياض",
            "addressLocality": "الرياض",
            "addressRegion": "الرياض",
            "postalCode": "11564",
            "addressCountry": "SA"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "24.7136",
            "longitude": "46.6753"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+966570723038",
            "contactType": "customer service",
            "availableLanguage": ["Arabic", "English"],
            "hoursAvailable": "Mo-Su 00:00-23:59"
        },
        "sameAs": [
            "https://www.facebook.com/eventtimesa",
            "https://www.twitter.com/eventtime_sa",
            "https://www.instagram.com/eventtime_sa",
            "https://www.linkedin.com/company/eventtime-sa"
        ],
        "serviceType": "Event Management Services",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Event Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "تجهيز المؤتمرات",
                        "description": "Conference setup and management services"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "الخيام الأوروبية",
                        "description": "European luxury tents setup"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "تنظيم المعارض",
                        "description": "Exhibition setup and management"
                    }
                }
            ]
        }
    }
    </script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>
    
    <!-- Critical CSS -->
    <style>
        /* Critical CSS for above-the-fold content */
        body { font-family: 'Tajawal', sans-serif; }
        .font-arabic { font-family: 'Tajawal', sans-serif; }
        .bg-gradient-to-br { background: linear-gradient(135deg, var(--tw-gradient-stops)); }
        .from-red-600 { --tw-gradient-from: #dc2626; }
        .to-red-800 { --tw-gradient-to: #991b1b; }
        .text-white { color: white; }
        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .text-center { text-align: center; }
        .py-20 { padding-top: 5rem; padding-bottom: 5rem; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 1rem; }
        .relative { position: relative; }
        .absolute { position: absolute; }
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }
        .object-cover { object-fit: cover; }
        .z-10 { z-index: 10; }
    </style>
    
    <!-- Styles -->
    @vite(['resources/assets/css/app.css'])
    
    <!-- Schema.org structured data -->
    @yield('structured-data')
    
    <!-- Google Analytics - Optimized for FCP -->
    <script>
        // Load analytics after page load to improve FCP
        window.addEventListener('load', function() {
            var script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID';
            document.head.appendChild(script);
            
            script.onload = function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'GA_MEASUREMENT_ID', {
                    'anonymize_ip': true,
                    'custom_map': {'custom_parameter_1': 'language'}
                });
                gtag('event', 'language_dimension', {'language': '{{ app()->getLocale() }}'});
            };
        });
    </script>
    
    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE">
</head>
<body class="font-arabic antialiased bg-gray-50">
    <!-- Navigation -->
    @include('partials.nav')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partials.footer')
    
    <!-- Notification Container -->
    <div id="notification-container" class="fixed top-4 right-4 z-[10000] pointer-events-none"></div>
    
    <!-- Scripts -->
    @vite(['resources/assets/js/app.js'])
    
    <!-- Social Media Notifications -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show notification function
            function showSocialNotification(platform, message) {
                const notification = document.createElement('div');
                notification.className = 'bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-lg shadow-xl mb-4 transform translate-x-full transition-all duration-500 flex items-center';
                notification.style.transform = 'translateX(0)';
                
                let icon = '';
                let color = '';
                
                switch(platform) {
                    case 'whatsapp':
                        icon = 'fab fa-whatsapp';
                        color = 'text-green-300';
                        break;
                    case 'phone':
                        icon = 'fas fa-phone';
                        color = 'text-blue-300';
                        break;
                    case 'instagram':
                        icon = 'fab fa-instagram';
                        color = 'text-pink-300';
                        break;
                    case 'facebook':
                        icon = 'fab fa-facebook-f';
                        color = 'text-blue-300';
                        break;
                    case 'twitter':
                        icon = 'fab fa-twitter';
                        color = 'text-sky-300';
                        break;
                    case 'tiktok':
                        icon = 'fab fa-tiktok';
                        color = 'text-gray-300';
                        break;
                }
                
                notification.innerHTML = `
                    <i class="${icon} ${color} text-xl ml-3"></i>
                    <span class="font-medium">${message}</span>
                    <div class="ml-auto">
                        <i class="fas fa-check-circle text-green-300"></i>
                    </div>
                `;
                
                const container = document.getElementById('notification-container');
                if (container) {
                    container.appendChild(notification);
                    
                    setTimeout(() => {
                        notification.style.transform = 'translateX(100%)';
                        setTimeout(() => {
                            notification.remove();
                        }, 500);
                    }, 3000);
                }
            }
            
            // Auto-hide sidebar after 1 minute
            let sidebarTimer;
            const sidebar = document.getElementById('social-sidebar');
            const toggleBtn = document.getElementById('social-toggle');
            let isSidebarVisible = true;
            
            // Show sidebar on page load
            if (sidebar) {
                sidebar.style.opacity = '1';
                isSidebarVisible = true;
                
                // Toggle button functionality
                if (toggleBtn) {
                    toggleBtn.addEventListener('click', () => {
                        if (isSidebarVisible) {
                            sidebar.style.opacity = '0';
                            isSidebarVisible = false;
                            toggleBtn.innerHTML = '<i class="fas fa-share-alt text-lg"></i>';
                        } else {
                            sidebar.style.opacity = '1';
                            isSidebarVisible = true;
                            toggleBtn.innerHTML = '<i class="fas fa-times text-lg"></i>';
                            // Reset timer when showing
                            clearTimeout(sidebarTimer);
                            sidebarTimer = setTimeout(() => {
                                sidebar.style.opacity = '0';
                                isSidebarVisible = false;
                                toggleBtn.innerHTML = '<i class="fas fa-share-alt text-lg"></i>';
                            }, 20000);
                        }
                    });
                }
                
                // Start timer to hide after 20 seconds
                sidebarTimer = setTimeout(() => {
                    sidebar.style.opacity = '0';
                    isSidebarVisible = false;
                    if (toggleBtn) {
                        toggleBtn.innerHTML = '<i class="fas fa-share-alt text-lg"></i>';
                    }
                }, 20000); // 20 seconds
                
                // Reset timer on mouse enter
                sidebar.addEventListener('mouseenter', () => {
                    clearTimeout(sidebarTimer);
                    sidebar.style.opacity = '1';
                    isSidebarVisible = true;
                    if (toggleBtn) {
                        toggleBtn.innerHTML = '<i class="fas fa-times text-lg"></i>';
                    }
                });
                
                // Restart timer on mouse leave
                sidebar.addEventListener('mouseleave', () => {
                    sidebarTimer = setTimeout(() => {
                        sidebar.style.opacity = '0';
                        isSidebarVisible = false;
                        if (toggleBtn) {
                            toggleBtn.innerHTML = '<i class="fas fa-share-alt text-lg"></i>';
                        }
                    }, 20000);
                });
            }
        });
    </script>
    
    <!-- Structured Data for Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "وقت الحدث",
        "alternateName": "Event Time",
        "url": "https://eventtimesa.com",
        "logo": "{{ asset('assets/images/logo.png') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+966500000000",
            "contactType": "customer service",
            "availableLanguage": ["Arabic", "English"]
        },
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "SA",
            "addressLocality": "الرياض",
            "addressRegion": "الرياض",
            "streetAddress": "حي النخيل، الرياض"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "24.7136",
            "longitude": "46.6753"
        },
        "openingHours": "Mo-Sa 08:00-18:00",
        "sameAs": [
            "https://www.facebook.com/eventtime",
            "https://www.twitter.com/eventtime",
            "https://www.instagram.com/eventtime",
            "https://www.linkedin.com/company/eventtime"
        ]
    }
    </script>
</body>
</html>
