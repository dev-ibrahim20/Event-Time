<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محيط - خدمات التجهيز والفعاليات</title>
    <meta name="description" content="محيط - شريككم المتخصص في تجهيز المؤتمرات والمعارض والفعاليات">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #374E44;
            --secondary-color: #f4ecd4;
            --accent-color: #517551;
            --text-dark: #2c3e50;
            --text-light: #6c757d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background-color: #ffffff;
        }

        /* Header Styles */
        .main-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, #000000 100%);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .main-header.scrolled {
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo img {
            height: 50px;
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.05);
        }

        .main-menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-menu ul li {
            margin: 0 20px;
        }

        .main-menu ul li a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 5px 0;
        }

        .main-menu ul li a:hover {
            color: #ffffff;
        }

        .main-menu ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--secondary-color);
            transition: width 0.3s ease;
        }

        .main-menu ul li a:hover::after {
            width: 100%;
        }

        /* Mobile Navigation */
        .mobile-nav__toggler {
            display: none;
            background: none;
            border: none;
            color: var(--secondary-color);
            font-size: 24px;
            cursor: pointer;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #000000 100%);
            padding: 150px 0 100px;
            color: var(--secondary-color);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="%23ffffff" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-hero {
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary-hero {
            background-color: var(--secondary-color);
            color: var(--primary-color);
        }

        .btn-primary-hero:hover {
            background-color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn-outline-hero {
            background-color: transparent;
            color: var(--secondary-color);
            border: 2px solid var(--secondary-color);
        }

        .btn-outline-hero:hover {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Services Section */
        .services-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
        }

        .service-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            text-align: center;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: var(--secondary-color);
        }

        .service-card h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .service-card p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Features Section */
        .features-section {
            padding: 100px 0;
            background-color: white;
        }

        .feature-box {
            padding: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .feature-box:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-bottom: 20px;
        }

        /* Contact Section */
        .contact-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, #000000 100%);
            color: var(--secondary-color);
        }

        .contact-info {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(81, 117, 81, 0.25);
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            padding: 50px 0 20px;
        }

        .social-links a {
            color: var(--secondary-color);
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: #ffffff;
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-nav__toggler {
                display: block;
            }

            .main-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--primary-color);
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }

            .main-menu.active {
                display: block;
            }

            .main-menu ul {
                flex-direction: column;
                align-items: center;
            }

            .main-menu ul li {
                margin: 10px 0;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .hero-buttons {
                justify-content: center;
            }
        }

        /* Loading Animation */
        .loader-wrap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-color) 0%, #000000 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 3px solid var(--secondary-color);
            border-top: 3px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Scroll to Top Button */
        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--accent-color);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .scroll-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-to-top:hover {
            background: var(--primary-color);
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Loader -->
    <div class="loader-wrap" id="loader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <header class="main-header" id="mainHeader">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="#home">
                            <h2 style="color: var(--secondary-color); font-weight: bold;">محيط</h2>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <nav class="main-menu" id="mainMenu">
                        <ul>
                            <li><a href="#home">الرئيسية</a></li>
                            <li><a href="#services">خدماتنا</a></li>
                            <li><a href="#features">المميزات</a></li>
                            <li><a href="#about">من نحن</a></li>
                            <li><a href="#contact">اتصل بنا</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 text-start">
                    <button class="mobile-nav__toggler" id="mobileToggler">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-right">
                        <h1 class="hero-title">مرحباً بك في محيط</h1>
                        <p class="hero-subtitle">شريككم المتخصص في تجهيز المؤتمرات والمعارض والفعاليات بأعلى معايير الجودة</p>
                        <div class="hero-buttons">
                            <a href="#services" class="btn-hero btn-primary-hero">
                                <i class="fas fa-rocket"></i>
                                اكتشف خدماتنا
                            </a>
                            <a href="#contact" class="btn-hero btn-outline-hero">
                                <i class="fas fa-phone"></i>
                                تواصل معنا
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image" data-aos="fade-left">
                        <div style="background: linear-gradient(135deg, var(--secondary-color), #ffffff); border-radius: 20px; padding: 40px; text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                            <i class="fas fa-campground" style="font-size: 8rem; color: var(--primary-color);"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>خدماتنا المميزة</h2>
                <p class="lead">نقدم حلولاً متكاملة لجميع احتياجات فعالياتكم</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-campground"></i>
                        </div>
                        <h3>خيام أوروبية</h3>
                        <p>تجهيز وتركيب الخيام الأوروبية بأحدث التصاميم وأعلى جودة المواد</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>المؤتمرات</h3>
                        <p>تنظيم وتجهيز المؤتمرات بكافة متطلباتها التقنية والخدمية</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h3>المعارض</h3>
                        <p>تخطيط وتنفيذ المعارض التجارية والثقافية بأحدث الأساليب</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h3>الحفلات</h3>
                        <p>تنظيم الحفلات والمناسبات الخاصة بكافة تفاصيلها</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-couch"></i>
                        </div>
                        <h3>الأثاث</h3>
                        <p>تأجير وبيع أثاث الفعاليات بكافة أنواعه وأحجامه</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>الإضاءة</h3>
                        <p>أنظمة الإضاءة المتقدمة للفعاليات والمسارح</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>لماذا تختار محيط؟</h2>
                <p class="lead">نتميز بالجودة والاحترافية في كل ما نقدمه</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3>خبرة طويلة</h3>
                        <p>أكثر من 15 عاماً في مجال تنظيم الفعاليات وتجهيز المؤتمرات</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>التزام بالمواعيد</h3>
                        <p>نلتزم بتسليم المشاريع في الوقت المحدد بأعلى معايير الجودة</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h3>فريق محترف</h3>
                        <p>فريق عمل مدرب وذو خبرة عالية في جميع مجالات الفعاليات</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>ضمان الجودة</h3>
                        <p>نضمن جودة جميع خدماتنا ومنتجاتنا مع دعم فني مستمر</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 style="color: var(--secondary-color);">تواصل معنا</h2>
                <p class="lead" style="color: var(--secondary-color);">نحن هنا لخدمتكم والإجابة على جميع استفساراتكم</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="contact-info">
                        <h4>معلومات التواصل</h4>
                        <div class="mt-4">
                            <p><i class="fas fa-map-marker-alt ms-2"></i> الرياض، المملكة العربية السعودية</p>
                            <p><i class="fas fa-phone ms-2"></i> +966-50-123-4567</p>
                            <p><i class="fas fa-envelope ms-2"></i> info@muhaya-sa.com</p>
                        </div>
                        <div class="social-links mt-4">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">الاسم</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="tel" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">نوع الخدمة</label>
                                    <select class="form-select" required>
                                        <option value="">اختر الخدمة</option>
                                        <option value="tent">خيام أوروبية</option>
                                        <option value="conference">مؤتمرات</option>
                                        <option value="exhibition">معارض</option>
                                        <option value="party">حفلات</option>
                                        <option value="other">أخرى</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">الرسالة</label>
                                    <textarea class="form-control" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg w-100" style="background-color: var(--primary-color); border-color: var(--primary-color);">
                                        <i class="fas fa-paper-plane ms-2"></i>
                                        إرسال الرسالة
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>محيط</h5>
                    <p>شريككم الموثوق في تنظيم وتجهيز الفعاليات بأعلى معايير الجودة</p>
                </div>
                <div class="col-md-4">
                    <h5>روابط سريعة</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" style="color: var(--secondary-color); text-decoration: none;">الرئيسية</a></li>
                        <li><a href="#services" style="color: var(--secondary-color); text-decoration: none;">خدماتنا</a></li>
                        <li><a href="#contact" style="color: var(--secondary-color); text-decoration: none;">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>تابعنا</h5>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4" style="border-color: var(--secondary-color);">
            <div class="text-center">
                <p>&copy; 2024 محيط. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <div class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Loader
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loader').style.opacity = '0';
                setTimeout(function() {
                    document.getElementById('loader').style.display = 'none';
                }, 500);
            }, 1000);
        });

        // Mobile Navigation Toggle
        document.getElementById('mobileToggler').addEventListener('click', function() {
            document.getElementById('mainMenu').classList.toggle('active');
        });

        // Header Scroll Effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            const scrollToTop = document.getElementById('scrollToTop');
            
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
                scrollToTop.classList.add('show');
            } else {
                header.classList.remove('scrolled');
                scrollToTop.classList.remove('show');
            }
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('mainMenu').classList.remove('active');
                }
            });
        });

        // Scroll to Top
        document.getElementById('scrollToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Contact Form Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            
            // Show success message
            const formContainer = this.parentElement;
            const originalContent = formContainer.innerHTML;
            
            formContainer.innerHTML = `
                <div class="text-center py-5">
                    <div class="success-icon mb-3">
                        <i class="fas fa-check-circle" style="font-size: 4rem; color: #28a745;"></i>
                    </div>
                    <h3>شكراً لتواصلك معنا!</h3>
                    <p>تم استلام رسالتك وسنقوم بالرد عليك في أقرب وقت ممكن.</p>
                    <button class="btn btn-primary mt-3" onclick="resetForm()">إرسال رسالة جديدة</button>
                </div>
            `;
            
            // Reset form after 5 seconds
            setTimeout(function() {
                formContainer.innerHTML = originalContent;
                document.getElementById('contactForm').addEventListener('submit', arguments.callee.caller);
            }, 5000);
        });

        function resetForm() {
            location.reload();
        }

        // Add animation to service cards on hover
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                heroSection.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Counter animation for statistics (if needed)
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(start);
                }
            }, 16);
        }

        // Initialize counters when they come into view
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add counter animation logic here if needed
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements for animations
        document.querySelectorAll('.feature-box').forEach(box => {
            observer.observe(box);
        });

        // WhatsApp integration
        function openWhatsApp() {
            const phoneNumber = '+966501234567';
            const message = 'مرحباً، أود الاستفسار عن خدماتكم';
            window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
        }

        // Add WhatsApp floating button
        const whatsappButton = document.createElement('div');
        whatsappButton.innerHTML = '<i class="fab fa-whatsapp"></i>';
        whatsappButton.style.cssText = `
            position: fixed;
            bottom: 30px;
            left: 30px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.5rem;
            z-index: 1000;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        `;
        whatsappButton.addEventListener('click', openWhatsApp);
        whatsappButton.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        whatsappButton.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
        document.body.appendChild(whatsappButton);

        // Console log for debugging
        console.log('محيط website loaded successfully!');
    </script>
</body>
</html>
