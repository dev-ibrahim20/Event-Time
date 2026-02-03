@extends('layouts.app')

@section('title', 'وقت الحدث - تجهيز المؤتمرات والمعارض والخيام الأوروبية')
@section('description', 'شركة وقت الحدث الرائدة في تجهيز المؤتمرات والمعارض والخيام الأوروبية بأعلى معايير الجودة والاحترافية في المملكة العربية السعودية')

@section('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "وقت الحدث",
    "alternateName": "Event Time",
    "url": "{{ url('/') }}",
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
        "addressRegion": "الرياض"
    },
    "sameAs": [
        "https://www.facebook.com/eventtime",
        "https://www.twitter.com/eventtime",
        "https://www.instagram.com/eventtime"
    ]
}
</script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Video/Image -->
    <div class="hero-video">
        <video autoplay muted loop playsinline class="w-full h-full object-cover">
            <source src="{{ asset('assets/videos/hero-video.mp4') }}" type="video/mp4">
            <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="وقت الحدث" class="w-full h-full object-cover">
        </video>
    </div>
    <div class="hero-overlay"></div>
    
    <!-- Hero Content -->
    <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto" data-aos="fade-up">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
            {{ __('وقت الحدث') }}
            <span class="block text-2xl md:text-4xl lg:text-5xl mt-2 text-red-400">Event Time</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-gray-200 leading-relaxed">
            {{ __('الشريك الموثوق في تجهيز المؤتمرات والمعارض والخيام الأوروبية بأعلى معايير الجودة والاحترافية') }}
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('quote') }}" class="bg-gradient-to-r from-red-600 to-red-800 text-white px-8 py-4 rounded-lg text-lg font-bold hover:from-red-700 hover:to-red-900 transition-all duration-300 transform hover:scale-105 shadow-2xl">
                <i class="fas fa-file-invoice ml-2"></i>
                {{ __('طلب عرض سعر') }}
            </a>
            <a href="tel:+966500000000" class="bg-white/20 backdrop-blur-md text-white border-2 border-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-white hover:text-red-600 transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-phone ml-2"></i>
                {{ __('اتصال سريع') }}
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
        <i class="fas fa-chevron-down text-2xl"></i>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('لماذا تختار وقت الحدث؟') }}
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('نقدم حلولاً متكاملة ومبتكرة لجميع فعالياتكم بمعايير عالمية وجودة فائقة') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300">
                    <i class="fas fa-award text-red-600 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('جودة عالمية') }}</h3>
                <p class="text-gray-600">{{ __('نستخدم أفضل المواد والتقنيات العالمية في جميع خدماتنا') }}</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300">
                    <i class="fas fa-clock text-red-600 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('التزام بالمواعيد') }}</h3>
                <p class="text-gray-600">{{ __('نلتزم بتسليم جميع المشاريع في الوقت المحدد') }}</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300">
                    <i class="fas fa-users text-red-600 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('فريق محترف') }}</h3>
                <p class="text-gray-600">{{ __('فريق عمل متخصص ومدرب على أعلى مستوى') }}</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300">
                    <i class="fas fa-handshake text-red-600 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('ثقة وضمان') }}</h3>
                <p class="text-gray-600">{{ __('نقدم ضمانات على جميع خدماتنا ومنتجاتنا') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('خدماتنا المميزة') }}
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('نقدم مجموعة شاملة من الخدمات المتخصصة لتلبية جميع احتياجات فعالياتكم') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div class="luxury-card bg-white rounded-xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                <div class="h-48 bg-gradient-to-br from-red-500 to-red-700 flex items-center justify-center">
                    <i class="fas fa-campground text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('الخيام الأوروبية') }}</h3>
                    <p class="text-gray-600 mb-4">{{ __('خيام أوروبية بمواصفات عالمية وأحجام متنوعة') }}</p>
                    <a href="{{ route('services') }}#tents" class="text-red-600 font-bold hover:text-red-700 transition-colors">
                        {{ __('تفاصيل أكثر') }} <i class="fas fa-arrow-left mr-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="luxury-card bg-white rounded-xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                    <i class="fas fa-users text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('تجهيز المؤتمرات') }}</h3>
                    <p class="text-gray-600 mb-4">{{ __('شاشات LED وإضاءة وصوتيات احترافية') }}</p>
                    <a href="{{ route('services') }}#conferences" class="text-red-600 font-bold hover:text-red-700 transition-colors">
                        {{ __('تفاصيل أكثر') }} <i class="fas fa-arrow-left mr-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="luxury-card bg-white rounded-xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="300">
                <div class="h-48 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                    <i class="fas fa-store text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('أجنحة المعارض') }}</h3>
                    <p class="text-gray-600 mb-4">{{ __('تصميم وبناء أجنحة معارض احترافية') }}</p>
                    <a href="{{ route('services') }}#exhibitions" class="text-red-600 font-bold hover:text-red-700 transition-colors">
                        {{ __('تفاصيل أكثر') }} <i class="fas fa-arrow-left mr-1"></i>
                    </a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="luxury-card bg-white rounded-xl shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="400">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center">
                    <i class="fas fa-glass-cheers text-white text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('تجهيز الحفلات') }}</h3>
                    <p class="text-gray-600 mb-4">{{ __('تنظيم وتجهيز الحفلات والمناسبات الرسمية') }}</p>
                    <a href="{{ route('services') }}#events" class="text-red-600 font-bold hover:text-red-700 transition-colors">
                        {{ __('تفاصيل أكثر') }} <i class="fas fa-arrow-left mr-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-red-600 to-red-800 text-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-3xl mx-auto" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                {{ __('هل أنت مستعد لتنظيم فعاليتك المثالية؟') }}
            </h2>
            <p class="text-xl mb-8 text-red-100">
                {{ __('تواصل معنا الآن واحصل على استشارة مجانية وعرض سعر خاص') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quote') }}" class="bg-white text-red-600 px-8 py-4 rounded-lg text-lg font-bold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-xl">
                    <i class="fas fa-file-invoice ml-2"></i>
                    {{ __('طلب عرض سعر') }}
                </a>
                <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-white hover:text-red-600 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-phone ml-2"></i>
                    {{ __('اتصل بنا') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
