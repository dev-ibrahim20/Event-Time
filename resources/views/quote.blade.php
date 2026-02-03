@extends('layouts.app')

@section('title', 'طلب عرض سعر - وقت الحدث')
@section('description', 'احصل على عرض سعر مخصص لخدمات تجهيز المؤتمرات والمعارض والخيام الأوروبية')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-red-600 to-red-800 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                {{ __('طلب عرض سعر') }}
            </h1>
            <p class="text-xl md:text-2xl text-red-100 max-w-4xl mx-auto leading-relaxed">
                {{ __('احصل على عرض سعر مخصص ومفصل لخدماتك المطلوبة خلال 24 ساعة') }}
            </p>
        </div>
    </div>
</section>

<!-- Quote Form Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden" data-aos="fade-up">
                <!-- Form Header -->
                <div class="bg-gradient-to-r from-red-600 to-red-800 p-6 text-white">
                    <h2 class="text-2xl font-bold mb-2">{{ __('معلومات طلب الخدمة') }}</h2>
                    <p class="text-red-100">{{ __('يرجى ملء جميع الحقول المطلوبة للحصول على عرض سعر دقيق') }}</p>
                </div>
                
                <!-- Form Body -->
                <form id="quoteForm" class="p-8" onsubmit="handleQuoteForm('quoteForm'); return false;">
                    @csrf
                    
                    <!-- Service Type Selection -->
                    <div class="mb-8">
                        <label class="block text-lg font-bold text-gray-900 mb-4">
                            <i class="fas fa-briefcase ml-2 text-red-600"></i>
                            {{ __('نوع الخدمة المطلوبة') }}
                            <span class="text-red-600">*</span>
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <label class="service-option cursor-pointer">
                                <input type="radio" name="service_type" value="tents" class="hidden" required>
                                <div class="border-2 border-gray-300 rounded-lg p-4 text-center hover:border-red-600 transition-colors">
                                    <i class="fas fa-campground text-3xl text-red-600 mb-2"></i>
                                    <h4 class="font-bold">{{ __('الخيام الأوروبية') }}</h4>
                                </div>
                            </label>
                            <label class="service-option cursor-pointer">
                                <input type="radio" name="service_type" value="conferences" class="hidden">
                                <div class="border-2 border-gray-300 rounded-lg p-4 text-center hover:border-red-600 transition-colors">
                                    <i class="fas fa-users text-3xl text-blue-600 mb-2"></i>
                                    <h4 class="font-bold">{{ __('المؤتمرات') }}</h4>
                                </div>
                            </label>
                            <label class="service-option cursor-pointer">
                                <input type="radio" name="service_type" value="exhibitions" class="hidden">
                                <div class="border-2 border-gray-300 rounded-lg p-4 text-center hover:border-red-600 transition-colors">
                                    <i class="fas fa-store text-3xl text-green-600 mb-2"></i>
                                    <h4 class="font-bold">{{ __('المعارض') }}</h4>
                                </div>
                            </label>
                            <label class="service-option cursor-pointer">
                                <input type="radio" name="service_type" value="events" class="hidden">
                                <div class="border-2 border-gray-300 rounded-lg p-4 text-center hover:border-red-600 transition-colors">
                                    <i class="fas fa-glass-cheers text-3xl text-purple-600 mb-2"></i>
                                    <h4 class="font-bold">{{ __('الحفلات') }}</h4>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Event Information -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label class="block text-gray-900 font-bold mb-2">
                                {{ __('نوع الفعالية') }}
                                <span class="text-red-600">*</span>
                            </label>
                            <input type="text" name="event_type" required
                                   class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                                   placeholder="{{ __('مثال: مؤتمر، حفل زفاف، معرض تجاري') }}">
                        </div>
                        <div>
                            <label class="block text-gray-900 font-bold mb-2">
                                {{ __('عدد الحضور المتوقع') }}
                                <span class="text-red-600">*</span>
                            </label>
                            <input type="number" name="expected_attendees" required
                                   class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                                   placeholder="{{ __('مثال: 500 شخص') }}">
                        </div>
                    </div>
                    
                    <!-- Date and Location -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label class="block text-gray-900 font-bold mb-2">
                                {{ __('تاريخ الفعالية') }}
                                <span class="text-red-600">*</span>
                            </label>
                            <input type="date" name="event_date" required
                                   class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-gray-900 font-bold mb-2">
                                {{ __('مدة الفعالية') }}
                                <span class="text-red-600">*</span>
                            </label>
                            <select name="event_duration" required
                                    class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none">
                                <option value="">{{ __('اختر المدة') }}</option>
                                <option value="half_day">{{ __('نصف يوم') }}</option>
                                <option value="full_day">{{ __('يوم كامل') }}</option>
                                <option value="two_days">{{ __('يومان') }}</option>
                                <option value="three_days">{{ __('ثلاثة أيام') }}</option>
                                <option value="week">{{ __('أسبوع') }}</option>
                                <option value="more">{{ __('أكثر من أسبوع') }}</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Location Information -->
                    <div class="mb-8">
                        <label class="block text-gray-900 font-bold mb-2">
                            {{ __('موقع الفعالية') }}
                            <span class="text-red-600">*</span>
                        </label>
                        <input type="text" name="event_location" required
                               class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                               placeholder="{{ __('المدينة، الحي، العنوان التفصيلي') }}">
                    </div>
                    
                    <!-- Space Requirements -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <label class="block text-gray-900 font-bold mb-2">
                                {{ __('المساحة المطلوبة (متر مربع)') }}
                                <span class="text-red-600">*</span>
                            </label>
                            <input type="number" name="required_space" required
                                   class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                                   placeholder="{{ __('مثال: 500') }}">
                        </div>
                        <div>
                            <label class="block text-gray-900 font-bold mb-2">
                                {{ __('نوع المساحة') }}
                                <span class="text-red-600">*</span>
                            </label>
                            <select name="space_type" required
                                    class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none">
                                <option value="">{{ __('اختر نوع المساحة') }}</option>
                                <option value="indoor">{{ __('داخل مبنى') }}</option>
                                <option value="outdoor">{{ __('في الهواء الطلق') }}</option>
                                <option value="both">{{ __('داخلي وخارجي') }}</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Budget Range -->
                    <div class="mb-8">
                        <label class="block text-gray-900 font-bold mb-2">
                            {{ __('الميزانية التقديرية') }}
                            <span class="text-gray-600 text-sm">({{ __('اختياري') }})</span>
                        </label>
                        <select name="budget_range" class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none">
                            <option value="">{{ __('اختر الميزانية') }}</option>
                            <option value="5000-10000">{{ __('5,000 - 10,000 ريال') }}</option>
                            <option value="10000-25000">{{ __('10,000 - 25,000 ريال') }}</option>
                            <option value="25000-50000">{{ __('25,000 - 50,000 ريال') }}</option>
                            <option value="50000-100000">{{ __('50,000 - 100,000 ريال') }}</option>
                            <option value="100000+">{{ __('أكثر من 100,000 ريال') }}</option>
                        </select>
                    </div>
                    
                    <!-- Special Requirements -->
                    <div class="mb-8">
                        <label class="block text-gray-900 font-bold mb-2">
                            {{ __('متطلبات خاصة') }}
                            <span class="text-gray-600 text-sm">({{ __('اختياري') }})</span>
                        </label>
                        <textarea name="special_requirements" rows="4"
                                  class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                                  placeholder="{{ __('أي متطلبات خاصة أو تفاصيل إضافية تود ذكرها...') }}"></textarea>
                    </div>
                    
                    <!-- File Upload -->
                    <div class="mb-8">
                        <label class="block text-gray-900 font-bold mb-2">
                            <i class="fas fa-paperclip ml-2 text-red-600"></i>
                            {{ __('رفع الملفات') }}
                            <span class="text-gray-600 text-sm">({{ __('اختياري') }})</span>
                        </label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-red-600 transition-colors">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600 mb-2">{{ __('اسحب وأفلت الملفات هنا أو انقر للاختيار') }}</p>
                            <p class="text-sm text-gray-500">{{ __('الصيغ المسموحة: PDF, DOC, DOCX, JPG, PNG (الحد الأقصى: 10MB)') }}</p>
                            <input type="file" name="attachments[]" multiple accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                                   class="hidden" id="fileInput">
                            <button type="button" onclick="document.getElementById('fileInput').click()"
                                    class="mt-4 bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-colors">
                                {{ __('اختر ملفات') }}
                            </button>
                        </div>
                        <div id="fileList" class="mt-4 space-y-2"></div>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="border-t pt-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">
                            <i class="fas fa-user ml-2 text-red-600"></i>
                            {{ __('معلومات التواصل') }}
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-gray-900 font-bold mb-2">
                                    {{ __('الاسم الكامل') }}
                                    <span class="text-red-600">*</span>
                                </label>
                                <input type="text" name="full_name" required
                                       class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                                       placeholder="{{ __('أدخل اسمك الكامل') }}">
                            </div>
                            <div>
                                <label class="block text-gray-900 font-bold mb-2">
                                    {{ __('البريد الإلكتروني') }}
                                    <span class="text-red-600">*</span>
                                </label>
                                <input type="email" name="email" required
                                       class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                                       placeholder="{{ __('example@email.com') }}">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-gray-900 font-bold mb-2">
                                    {{ __('رقم الجوال') }}
                                    <span class="text-red-600">*</span>
                                </label>
                                <input type="tel" name="phone" required
                                       class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                                       placeholder="{{ '+966 5x xxx xxxx' }}">
                            </div>
                            <div>
                                <label class="block text-gray-900 font-bold mb-2">
                                    {{ __('الشركة/المنظمة') }}
                                    <span class="text-gray-600 text-sm">({{ __('اختياري') }})</span>
                                </label>
                                <input type="text" name="company"
                                       class="luxury-input w-full px-4 py-3 rounded-lg focus:outline-none"
                                       placeholder="{{ __('اسم الشركة أو المنظمة') }}">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Terms and Submit -->
                    <div class="border-t pt-8">
                        <div class="mb-6">
                            <label class="flex items-start cursor-pointer">
                                <input type="checkbox" name="terms" required class="mt-1 ml-3">
                                <span class="text-gray-700">
                                    {{ __('أوافق على') }} <a href="#" class="text-red-600 hover:underline">{{ __('الشروط والأحكام') }}</a> 
                                    {{ __('و') }} <a href="#" class="text-red-600 hover:underline">{{ __('سياسة الخصوصية') }}</a>
                                </span>
                            </label>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button type="submit" 
                                    class="bg-gradient-to-r from-red-600 to-red-800 text-white px-8 py-4 rounded-lg text-lg font-bold hover:from-red-700 hover:to-red-900 transition-all duration-300 transform hover:scale-105 shadow-xl">
                                <i class="fas fa-paper-plane ml-2"></i>
                                {{ __('إرسال الطلب') }}
                            </button>
                            <button type="reset" 
                                    class="bg-gray-200 text-gray-700 px-8 py-4 rounded-lg text-lg font-bold hover:bg-gray-300 transition-colors">
                                <i class="fas fa-redo ml-2"></i>
                                {{ __('إعادة تعيين') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                {{ __('هل تحتاج مساعدة؟') }}
            </h2>
            <p class="text-xl text-gray-600">
                {{ __('فريق الخبراء لدينا جاهز لمساعدتك في أي وقت') }}
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('اتصل بنا مباشرة') }}</h3>
                <p class="text-gray-600 mb-4">{{ '+966 50 000 0000' }}</p>
                <a href="tel:+966500000000" class="text-red-600 font-bold hover:text-red-700">
                    {{ __('اتصل الآن') }}
                </a>
            </div>
            
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('راسلنا عبر البريد') }}</h3>
                <p class="text-gray-600 mb-4">info@eventtime.sa</p>
                <a href="mailto:info@eventtime.sa" class="text-red-600 font-bold hover:text-red-700">
                    {{ __('أرسل رسالة') }}
                </a>
            </div>
            
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fab fa-whatsapp text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ __('WhatsApp') }}</h3>
                <p class="text-gray-600 mb-4">{{ '+966 50 000 0000' }}</p>
                <a href="https://wa.me/966500000000" target="_blank" class="text-red-600 font-bold hover:text-red-700">
                    {{ __('ابدأ المحادثة') }}
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Service Type Selection
document.querySelectorAll('input[name="service_type"]').forEach(radio => {
    radio.addEventListener('change', function() {
        document.querySelectorAll('.service-option div').forEach(div => {
            div.classList.remove('border-red-600', 'bg-red-50');
            div.classList.add('border-gray-300');
        });
        
        if (this.checked) {
            this.nextElementSibling.classList.remove('border-gray-300');
            this.nextElementSibling.classList.add('border-red-600', 'bg-red-50');
        }
    });
});

// File Upload Handler
document.getElementById('fileInput').addEventListener('change', function(e) {
    const fileList = document.getElementById('fileList');
    fileList.innerHTML = '';
    
    Array.from(e.target.files).forEach(file => {
        const fileItem = document.createElement('div');
        fileItem.className = 'flex items-center justify-between bg-gray-50 p-3 rounded-lg';
        fileItem.innerHTML = `
            <div class="flex items-center">
                <i class="fas fa-file text-red-600 ml-2"></i>
                <span class="text-sm text-gray-700">${file.name}</span>
                <span class="text-xs text-gray-500 mr-2">(${(file.size / 1024 / 1024).toFixed(2)} MB)</span>
            </div>
            <button type="button" onclick="this.parentElement.remove()" class="text-red-600 hover:text-red-700">
                <i class="fas fa-times"></i>
            </button>
        `;
        fileList.appendChild(fileItem);
    });
});
</script>
@endsection
