<footer class="bg-gray-900 text-white">
    <!-- Main Footer Content -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <div class="flex items-center space-x-3 {{ app()->getLocale() === 'ar' ? 'space-x-reverse' : '' }}">
                    <div class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-800 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">وقت الحدث</h3>
                        <p class="text-sm text-gray-400">Event Time</p>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    شركتنا الرائدة في تجهيز المؤتمرات والمعارض والخيام الأوروبية بأعلى معايير الجودة والاحترافية.
                </p>
                <div class="flex space-x-4 {{ app()->getLocale() === 'ar' ? 'space-x-reverse' : '' }}">
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition-colors">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h4 class="text-lg font-bold text-red-500">{{ __('روابط سريعة') }}</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('الرئيسية') }}</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('خدماتنا') }}</a></li>
                    <li><a href="{{ route('gallery') }}" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('معرض الأعمال') }}</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('من نحن') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('اتصل بنا') }}</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="space-y-4">
                <h4 class="text-lg font-bold text-red-500">{{ __('خدماتنا') }}</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('services') }}#tents" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('الخيام الأوروبية') }}</a></li>
                    <li><a href="{{ route('services') }}#conferences" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('تجهيز المؤتمرات') }}</a></li>
                    <li><a href="{{ route('services') }}#exhibitions" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('أجنحة المعارض') }}</a></li>
                    <li><a href="{{ route('services') }}#events" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('تجهيز الحفلات') }}</a></li>
                    <li><a href="{{ route('quote') }}" class="text-gray-300 hover:text-red-500 transition-colors">{{ __('طلب عرض سعر') }}</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="space-y-4">
                <h4 class="text-lg font-bold text-red-500">{{ __('تواصل معنا') }}</h4>
                <div class="space-y-3">
                    <div class="flex items-start space-x-3 {{ app()->getLocale() === 'ar' ? 'space-x-reverse' : '' }}">
                        <i class="fas fa-map-marker-alt text-red-500 mt-1"></i>
                        <div>
                            <p class="text-gray-300">{{ __('المملكة العربية السعودية') }}</p>
                            <p class="text-gray-400 text-sm">{{ __('الرياض، حي النخيل') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 {{ app()->getLocale() === 'ar' ? 'space-x-reverse' : '' }}">
                        <i class="fas fa-phone text-red-500"></i>
                        <div>
                            <p class="text-gray-300">+966 50 000 0000</p>
                            <p class="text-gray-400 text-sm">+966 11 000 0000</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 {{ app()->getLocale() === 'ar' ? 'space-x-reverse' : '' }}">
                        <i class="fas fa-envelope text-red-500"></i>
                        <div>
                            <p class="text-gray-300">info@eventtime.sa</p>
                            <p class="text-gray-400 text-sm">support@eventtime.sa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-gray-400 text-sm">
                    <p>&copy; {{ date('Y') }} {{ __('وقت الحدث') }}. {{ __('جميع الحقوق محفوظة') }}.</p>
                </div>
                <div class="flex space-x-6 {{ app()->getLocale() === 'ar' ? 'space-x-reverse' : '' }}">
                    <a href="#" class="text-gray-400 hover:text-red-500 text-sm transition-colors">{{ __('سياسة الخصوصية') }}</a>
                    <a href="#" class="text-gray-400 hover:text-red-500 text-sm transition-colors">{{ __('الشروط والأحكام') }}</a>
                    <a href="#" class="text-gray-400 hover:text-red-500 text-sm transition-colors">{{ __('خريطة الموقع') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
