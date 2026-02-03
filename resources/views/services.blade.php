@extends('layouts.app')

@section('title', 'خدماتنا - وقت الحدث')
@section('description', 'نقدم مجموعة شاملة من الخدمات المتخصصة لتجهيز المؤتمرات والمعارض والخيام الأوروبية والحفلات بأعلى معايير الجودة')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-red-600 to-red-800 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                {{ __('خدماتنا المميزة') }}
            </h1>
            <p class="text-xl md:text-2xl text-red-100 max-w-4xl mx-auto leading-relaxed">
                {{ __('نقدم حلولاً متكاملة ومبتكرة لجميع فعالياتكم بمعايير عالمية وجودة فائقة') }}
            </p>
        </div>
    </div>
</section>

<!-- Services Navigation -->
<section class="sticky top-20 z-40 bg-white shadow-md border-b">
    <div class="container mx-auto px-4">
        <nav class="flex flex-wrap justify-center py-4 space-x-8 space-x-reverse">
            <a href="#tents" class="text-gray-700 hover:text-red-600 font-medium transition-colors py-2">
                <i class="fas fa-campground ml-2"></i>{{ __('الخيام الأوروبية') }}
            </a>
            <a href="#conferences" class="text-gray-700 hover:text-red-600 font-medium transition-colors py-2">
                <i class="fas fa-users ml-2"></i>{{ __('تجهيز المؤتمرات') }}
            </a>
            <a href="#exhibitions" class="text-gray-700 hover:text-red-600 font-medium transition-colors py-2">
                <i class="fas fa-store ml-2"></i>{{ __('أجنحة المعارض') }}
            </a>
            <a href="#events" class="text-gray-700 hover:text-red-600 font-medium transition-colors py-2">
                <i class="fas fa-glass-cheers ml-2"></i>{{ __('تجهيز الحفلات') }}
            </a>
        </nav>
    </div>
</section>

<!-- European Tents Section -->
<section id="tents" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div data-aos="fade-right">
                <div class="mb-6">
                    <span class="bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-bold">
                        {{ __('خدمة مميزة') }}
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    {{ __('الخيام الأوروبية') }}
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    {{ __('نقدم أحدث الخيام الأوروبية بمواصفات عالمية، مصممة لتلبية جميع احتياجات الفعاليات الكبرى. خيامنا تتميز بالمتانة والجودة العالية والتصميم الأنيق الذي يضيف لمسة من الفخامة لفعاليتكم.') }}
                </p>
                
                <!-- Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-red-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('مقاسات متنوعة') }}</h4>
                            <p class="text-gray-600">{{ __('من 10x10م حتى 50x100م وأكثر') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-red-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('مواد عالية الجودة') }}</h4>
                            <p class="text-gray-600">{{ __('قماش مقاوم للحريق والطقس') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-red-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('تصميم عصري') }}</h4>
                            <p class="text-gray-600">{{ __('أشكال وألوان متنوعة تناسب جميع المناسبات') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-red-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('تركيب احترافي') }}</h4>
                            <p class="text-gray-600">{{ __('فريق متخصص للتركيب والفك السريع') }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('quote') }}?service=tents" class="bg-red-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-red-700 transition-colors">
                        {{ __('طلب عرض سعر') }}
                    </a>
                    <a href="{{ route('gallery') }}#tents" class="border-2 border-red-600 text-red-600 px-6 py-3 rounded-lg font-bold hover:bg-red-600 hover:text-white transition-colors">
                        {{ __('معرض الصور') }}
                    </a>
                </div>
            </div>
            
            <div data-aos="fade-left">
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('assets/images/tents/tent1.jpg') }}" alt="خيمة أوروبية 1" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/tents/tent2.jpg') }}" alt="خيمة أوروبية 2" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/tents/tent3.jpg') }}" alt="خيمة أوروبية 3" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/tents/tent4.jpg') }}" alt="خيمة أوروبية 4" class="rounded-lg shadow-lg w-full h-48 object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conferences Section -->
<section id="conferences" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="order-2 lg:order-1" data-aos="fade-right">
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('assets/images/conferences/conf1.jpg') }}" alt="مؤتمر 1" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/conferences/conf2.jpg') }}" alt="مؤتمر 2" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/conferences/conf3.jpg') }}" alt="مؤتمر 3" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/conferences/conf4.jpg') }}" alt="مؤتمر 4" class="rounded-lg shadow-lg w-full h-48 object-cover">
                </div>
            </div>
            
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <div class="mb-6">
                    <span class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-bold">
                        {{ __('خدمة متكاملة') }}
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    {{ __('تجهيز المؤتمرات والندوات') }}
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    {{ __('نوفر تجهيزات متكاملة للمؤتمرات والندوات بأحدث التقنيات. من شاشات LED ضخمة إلى أنظمة الصوت الاحترافية والإضاءة المتطورة، نضمن لكم مؤتمراً ناجحاً يترك انطباعاً قوياً لدى الحضور.') }}
                </p>
                
                <!-- Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-blue-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('شاشات LED') }}</h4>
                            <p class="text-gray-600">{{ __('جميع المقاسات بدقة 4K و8K') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-blue-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('أنظمة صوتية') }}</h4>
                            <p class="text-gray-600">{{ __('معدات احترافية من أفضل العلامات التجارية') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-blue-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('إضاءة احترافية') }}</h4>
                            <p class="text-gray-600">{{ __('أنظمة إضاءة متطورة مع تأثيرات بصرية') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-blue-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('الترجمة الفورية') }}</h4>
                            <p class="text-gray-600">{{ __('نظام ترجمة فورية لعدة لغات') }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('quote') }}?service=conferences" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition-colors">
                        {{ __('طلب عرض سعر') }}
                    </a>
                    <a href="{{ route('gallery') }}#conferences" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-bold hover:bg-blue-600 hover:text-white transition-colors">
                        {{ __('معرض الصور') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Exhibition Stands Section -->
<section id="exhibitions" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div data-aos="fade-right">
                <div class="mb-6">
                    <span class="bg-green-100 text-green-600 px-4 py-2 rounded-full text-sm font-bold">
                        {{ __('تصميم مبتكر') }}
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    {{ __('تصميم وبناء أجنحة المعارض') }}
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    {{ __('نصمم وننفذ أجنحة معارض مبتكرة تجذب الانتباه وتبرز هوية علامتكم التجارية. من التصميم ثلاثي الأبعاد إلى التنفيذ النهائي، نضمن لكم جناحاً استثنائياً يترك انطباعاً دائماً لدى الزوار.') }}
                </p>
                
                <!-- Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-green-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('تصميم ثلاثي الأبعاد') }}</h4>
                            <p class="text-gray-600">{{ __('تصاميم واقعية قبل التنفيذ') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-green-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('مواد عالية الجودة') }}</h4>
                            <p class="text-gray-600">{{ __('أفضل المواد والتقنيات الحديثة') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-green-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('تركيب سريع') }}</h4>
                            <p class="text-gray-600">{{ __('فريق محترف للتركيب في الوقت المحدد') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-green-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('صيانة ودعم') }}</h4>
                            <p class="text-gray-600">{{ __('خدمة صيانة مستمرة طوال فترة المعرض') }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('quote') }}?service=exhibitions" class="bg-green-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-green-700 transition-colors">
                        {{ __('طلب عرض سعر') }}
                    </a>
                    <a href="{{ route('gallery') }}#exhibitions" class="border-2 border-green-600 text-green-600 px-6 py-3 rounded-lg font-bold hover:bg-green-600 hover:text-white transition-colors">
                        {{ __('معرض الصور') }}
                    </a>
                </div>
            </div>
            
            <div data-aos="fade-left">
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('assets/images/exhibitions/stand1.jpg') }}" alt="جناح معرض 1" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/exhibitions/stand2.jpg') }}" alt="جناح معرض 2" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/exhibitions/stand3.jpg') }}" alt="جناح معرض 3" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/exhibitions/stand4.jpg') }}" alt="جناح معرض 4" class="rounded-lg shadow-lg w-full h-48 object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section id="events" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="order-2 lg:order-1" data-aos="fade-right">
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('assets/images/events/event1.jpg') }}" alt="حفلة 1" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/events/event2.jpg') }}" alt="حفلة 2" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/events/event3.jpg') }}" alt="حفلة 3" class="rounded-lg shadow-lg w-full h-48 object-cover">
                    <img src="{{ asset('assets/images/events/event4.jpg') }}" alt="حفلة 4" class="rounded-lg shadow-lg w-full h-48 object-cover">
                </div>
            </div>
            
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <div class="mb-6">
                    <span class="bg-purple-100 text-purple-600 px-4 py-2 rounded-full text-sm font-bold">
                        {{ __('تنظيم متكامل') }}
                    </span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    {{ __('تجهيز الحفلات والمناسبات') }}
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    {{ __('ننظم ونجهز جميع أنواع الحفلات والمناسبات الرسمية والخاصة. من الأفراح إلى حفلات الشركات والمناسبات الخاصة، نقدم لكم تجربة لا تُنسى باهتمام بكل التفاصيل الصغيرة.') }}
                </p>
                
                <!-- Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-purple-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('تنسيق الزهور') }}</h4>
                            <p class="text-gray-600">{{ __('تصاميم زهور فاخرة وأنيقة') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-purple-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('الديكور والإضاءة') }}</h4>
                            <p class="text-gray-600">{{ __('ديكورات احترافية مع إضاءة سحرية') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-purple-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('تجهيزات الطعام') }}</h4>
                            <p class="text-gray-600">{{ __('تجهيزات كاملة للطعام والشراب') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3 space-x-reverse">
                        <i class="fas fa-check-circle text-purple-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ __('الموسيقى والترفيه') }}</h4>
                            <p class="text-gray-600">{{ __('فرق موسيقية وبرامج ترفيهية') }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('quote') }}?service=events" class="bg-purple-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-purple-700 transition-colors">
                        {{ __('طلب عرض سعر') }}
                    </a>
                    <a href="{{ route('gallery') }}#events" class="border-2 border-purple-600 text-purple-600 px-6 py-3 rounded-lg font-bold hover:bg-purple-600 hover:text-white transition-colors">
                        {{ __('معرض الصور') }}
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
                {{ __('هل تحتاج إلى استشارة لخدمتك؟') }}
            </h2>
            <p class="text-xl mb-8 text-red-100">
                {{ __('فريق الخبراء لدينا جاهز لمساعدتك في اختيار الخدمة المثالية لفعاليتك') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quote') }}" class="bg-white text-red-600 px-8 py-4 rounded-lg text-lg font-bold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-xl">
                    <i class="fas fa-file-invoice ml-2"></i>
                    {{ __('طلب استشارة مجانية') }}
                </a>
                <a href="tel:+966500000000" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-white hover:text-red-600 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-phone ml-2"></i>
                    {{ __('اتصل بنا الآن') }}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
