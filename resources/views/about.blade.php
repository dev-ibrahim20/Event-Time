@extends('layouts.app')

@section('title', 'من نحن - وقت الحدث')
@section('description', 'تعرف على شركة وقت الحدث الرائدة في تجهيز المؤتمرات والمعارض والخيام الأوروبية')

@section('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "من نحن - وقت الحدث",
    "url": "{{ url('/about') }}",
    "description": "تعرف على شركة وقت الحدث الرائدة في تجهيز المؤتمرات والمعارض والخيام الأوروبية",
    "mainEntity": {
        "@type": "Organization",
        "name": "وقت الحدث",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/images/logo.png') }}",
        "description": "شركة رائدة في تجهيز المؤتمرات والمعارض والخيام الأوروبية بأعلى معايير الجودة والاحترافية",
        "foundingDate": "2014",
        "numberOfEmployees": "50+",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "SA",
            "addressLocality": "الرياض",
            "streetAddress": "حي النخيل، الرياض"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+966500000000",
            "contactType": "customer service",
            "availableLanguage": ["Arabic", "English"]
        }
    }
}
</script>
@endsection

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-red-600 to-red-800 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                {{ __('من نحن') }}
            </h1>
            <p class="text-xl md:text-2xl text-red-100 max-w-4xl mx-auto leading-relaxed">
                {{ __('شركة وقت الحدث - الشريك الموثوق في تنظيم الفعاليات الكبرى') }}
            </p>
        </div>
    </div>
</section>

<!-- Company Story Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    {{ __('قصتنا ورؤيتنا') }}
                </h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        {{ __('تأسست شركة وقت الحدث في عام 2014، ومنذ ذلك ونحن نسعى جاهدين لتقديم خدمات متميزة في مجال تنظيم الفعاليات الكبرى. بدأنا كفريق صغير يضم شغفاء متخصصين، واليوم أصبحنا واحدة من الشركات الرائدة في المملكة العربية السعودية في مجال تجهيز المؤتمرات والمعارض والخيام الأوروبية.') }}
                    </p>
                    <p>
                        {{ __('نؤمن بأن كل فعالية هي فرصة فريدة لإحداث تأثير إيجابي، ولهذا السبب نعمل بكل شغف واهتمام على تفاصيل كل مشروع نعمل عليه. من التخطيط الأولي إلى التنفيذ النهائي، نضمن لكم تجربة لا تُنسى.') }}
                    </p>
                    <p>
                        {{ ('خبرتنا تمتد لأكثر من 10 سنوات في تنظيم أكثر من 500 فعالية ناجحة، من المؤتمرات الدولية الكبرى إلى المعارض التجارية والحفلات الخاصة. عملنا مع أكبر الشركات والمؤسسات في المملكة وخارجها، مما أكسبنا سمعة قوية في السوق.') }}
                    </p>
                </div>
                
                <!-- Company Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">10+</div>
                        <p class="text-sm text-gray-600">{{ __('سنوات خبرة') }}</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">500+</div>
                        <p class="text-sm text-gray-600">{{ __('مشروع منجز') }}</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">50+</div>
                        <p class="text-sm text-gray-600">{{ __('موظف متخصص') }}</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-red-600 mb-2">98%</div>
                        <p class="text-sm text-gray-600">{{ __('رضا العملاء') }}</p>
                    </div>
                </div>
            </div>
            
            <div data-aos="fade-left">
                <img src="{{ asset('assets/images/about/company-story.jpg') }}" alt="قصة الشركة" class="rounded-lg shadow-xl w-full h-96 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Mission -->
            <div data-aos="fade-up">
                <div class="bg-white rounded-lg shadow-lg p-8 h-full">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('رسالتنا') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('نحن نسعى لترجيع كل فعالية إلى تجربة استثنائية تتجاوز التوقعات. من خلال الجودة العالية والابتكار المستمر والاهتمام الدقيق بالتفاصيل، نهدف لأن نكون الشريك المفضل لعملائنا في تحقيق أهدافهم وإحداث تأثير إيجابي دائم في مجتمعاتهم.') }}
                    </p>
                </div>
            </div>
            
            <!-- Vision -->
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white rounded-lg shadow-lg p-8 h-full">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('رؤيتنا') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('أن نكون الشركة الرائدة في المنطقة في مجال تنظيم الفعاليات، معروفين بالجودة الفائقة والاحترافية والابتكار. نسعى لتوسيع خدماتنا لتشمل جميع أنحاء المملكة والدول المجاورة، مع الحفاظ على معاييرنا العالية وسمعتنا المتميزة.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('قيمنا') }}
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('القيم التي توجه كل ما نفعله وكل قرار نتخذه') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300">
                    <i class="fas fa-award text-red-600 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('الجودة الفائقة') }}</h3>
                <p class="text-gray-600">{{ __('لا نقبل بأقل من الأفضل في كل ما نقدمه') }}</p>
            </div>
            
            <!-- Value 2 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition-colors duration-300">
                    <i class="fas fa-lightbulb text-blue-600 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('الابتكار') }}</h3>
                <p class="text-gray-600">{{ __('نبحث دائماً عن أفكار جديدة ومبتكرة') }}</p>
            </div>
            
            <!-- Value 3 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition-colors duration-300">
                    <i class="fas fa-handshake text-green-600 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('الثقة') }}</h3>
                <p class="text-gray-600">{{ __('نحن شركاء موثوقون في نجاح عملائنا') }}</p>
            </div>
            
            <!-- Value 4 -->
            <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 transition-colors duration-300">
                    <i class="fas fa-users text-purple-600 text-2xl group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('العمل الجماعي') }}</h3>
                <p class="text-gray-600">{{ __('نجاحنا يأتي من عملنا كفريق واحد') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('فريق القيادة') }}
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('القيادة التنفيذية التي تقود شركة وقت الحدث نحو التميز') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative">
                    <img src="{{ asset('assets/images/team/ceo.jpg') }}" alt="الرئيس التنفيذي" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ __('محمد الأحمدي') }}</h3>
                    <p class="text-red-600 font-medium mb-3">{{ __('الرئيس التنفيذي') }}</p>
                    <p class="text-gray-600 text-sm">{{ __('خبير في إدارة الفعاليات مع أكثر من 15 عاماً من الخبرة في المنطقة') }}</p>
                    <div class="flex space-x-4 space-x-reverse mt-4">
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                <div class="relative">
                    <img src="{{ asset('assets/images/team/coo.jpg') }}" alt="مدير العمليات" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ __('عبدالله محمد') }}</h3>
                    <p class="text-red-600 font-medium mb-3">{{ __('مدير العمليات') }}</p>
                    <p class="text-gray-600 text-sm">{{ __('متخصص في التخطيط وتنفيذ الفعاليات الكبرى مع خبرة تزيد عن 12 عاماً') }}</p>
                    <div class="flex space-x-4 space-x-reverse mt-4">
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Team Member 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden group" data-aos="fade-up" data-aos-delay="300">
                <div class="relative">
                    <img src="{{ asset('assets/images/team/creative.jpg') }}" alt="مدير الإبداع" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ __('سارة أحمد') }}</h3>
                    <p class="text-red-600 font-medium mb-3">{{ __('مدير الإبداع') }}</p>
                    <p class="text-gray-600 text-sm">{{ __('مصممة مبدعة تضيف لمسة فريدة لكل فعالية ننظمها') }}</p>
                    <div class="flex space-x-4 space-x-reverse mt-4">
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
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
                {{ __('انضم إلى فريق عملائنا') }}
            </h2>
            <p class="text-xl mb-8 text-red-100">
                {{ __('نبحث دائماً عن المواهب الطموحة الذين يشاركونا شغفنا في تحقيق أهدافنا') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-red-600 px-8 py-4 rounded-lg text-lg font-bold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-xl">
                    <i class="fas fa-briefcase ml-2"></i>
                    {{ __('توظف معنا') }}
                </a>
                <a href="{{ route('quote') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-white hover:text-red-600 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-paper-plane ml-2"></i>
                    {{ __('طلب استشارة') }}
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ __('الشهادات والاعتمادات') }}
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('شهاداتنا واعتماداتنا تؤكد على جودتنا واحترافيتنا') }}
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gray-100 rounded-lg p-6 h-32 flex items-center justify-center">
                    <i class="fas fa-certificate text-4xl text-gray-400"></i>
                </div>
                <p class="mt-4 text-sm text-gray-600">{{ __('شهادة ISO 9001') }}</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-gray-100 rounded-lg p-6 h-32 flex items-center justify-center">
                    <i class="fas fa-award text-4xl text-gray-400"></i>
                </div>
                <p class="mt-4 text-sm text-gray-600">{{ __('عضو غرفة الرياض') }}</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-gray-100 rounded-lg p-6 h-32 flex items-center justify-center">
                    <i class="fas fa-shield-alt text-4xl text-gray-400"></i>
                </div>
                <p class="mt-4 text-sm text-gray-600">{{ __('اعتماد وزارة السياحة') }}</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="bg-gray-100 rounded-lg p-6 h-32 flex items-center justify-center">
                    <i class="fas fa-star text-4xl text-gray-400"></i>
                </div>
                <p class="mt-4 text-sm text-gray-600">{{ __('مزود معتمد') }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
