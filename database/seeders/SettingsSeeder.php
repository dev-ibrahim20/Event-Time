<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // General Settings
            ['key' => 'site_name_ar', 'value' => 'وقت الحدث', 'type' => 'text', 'group' => 'general', 'description_ar' => 'اسم الموقع باللغة العربية', 'description_en' => 'Site name in Arabic'],
            ['key' => 'site_name_en', 'value' => 'Event Time', 'type' => 'text', 'group' => 'general', 'description_ar' => 'اسم الموقع باللغة الإنجليزية', 'description_en' => 'Site name in English'],
            ['key' => 'site_description_ar', 'value' => 'شركة وقت الحدث الرائدة في تجهيز المؤتمرات والمعارض والخيام الأوروبية بأعلى معايير الجودة والاحترافية في المملكة العربية السعودية', 'type' => 'textarea', 'group' => 'general', 'description_ar' => 'وصف الموقع باللغة العربية', 'description_en' => 'Site description in Arabic'],
            ['key' => 'site_description_en', 'value' => 'Leading company in conference, exhibition, and European tent setup with the highest quality and professional standards in Saudi Arabia', 'type' => 'textarea', 'group' => 'general', 'description_ar' => 'وصف الموقع باللغة الإنجليزية', 'description_en' => 'Site description in English'],
            ['key' => 'logo', 'value' => 'assets/images/logo.png', 'type' => 'image', 'group' => 'general', 'description_ar' => 'شعار الموقع', 'description_en' => 'Site logo'],
            ['key' => 'favicon', 'value' => 'assets/images/favicon.ico', 'type' => 'image', 'group' => 'general', 'description_ar' => 'أيقونة الموقع', 'description_en' => 'Site favicon'],
            
            // Contact Settings
            ['key' => 'phone', 'value' => '+966500000000', 'type' => 'text', 'group' => 'contact', 'description_ar' => 'رقم الهاتف الرئيسي', 'description_en' => 'Main phone number'],
            ['key' => 'phone_secondary', 'value' => '+966110000000', 'type' => 'text', 'group' => 'contact', 'description_ar' => 'رقم الهاتف الثانوي', 'description_en' => 'Secondary phone number'],
            ['key' => 'email', 'value' => 'info@eventtime.sa', 'type' => 'text', 'group' => 'contact', 'description_ar' => 'البريد الإلكتروني الرئيسي', 'description_en' => 'Main email address'],
            ['key' => 'email_support', 'value' => 'support@eventtime.sa', 'type' => 'text', 'group' => 'contact', 'description_ar' => 'بريد الدعم الفني', 'description_en' => 'Support email address'],
            ['key' => 'address_ar', 'value' => 'حي النخيل، الرياض، المملكة العربية السعودية', 'type' => 'text', 'group' => 'contact', 'description_ar' => 'العنوان باللغة العربية', 'description_en' => 'Address in Arabic'],
            ['key' => 'address_en', 'value' => 'Al Nakheel District, Riyadh, Saudi Arabia', 'type' => 'text', 'group' => 'contact', 'description_ar' => 'العنوان باللغة الإنجليزية', 'description_en' => 'Address in English'],
            ['key' => 'whatsapp', 'value' => '+966500000000', 'type' => 'text', 'group' => 'contact', 'description_ar' => 'رقم WhatsApp', 'description_en' => 'WhatsApp number'],
            ['key' => 'google_maps_url', 'value' => 'https://maps.google.com/?q=24.7136,46.6753', 'type' => 'text', 'group' => 'contact', 'description_ar' => 'رابط خريطة جوجل', 'description_en' => 'Google Maps URL'],
            
            // Social Media Settings
            ['key' => 'facebook', 'value' => 'https://www.facebook.com/eventtime', 'type' => 'text', 'group' => 'social', 'description_ar' => 'رابط فيسبوك', 'description_en' => 'Facebook link'],
            ['key' => 'twitter', 'value' => 'https://www.twitter.com/eventtime', 'type' => 'text', 'group' => 'social', 'description_ar' => 'رابط تويتر', 'description_en' => 'Twitter link'],
            ['key' => 'instagram', 'value' => 'https://www.instagram.com/eventtime', 'type' => 'text', 'group' => 'social', 'description_ar' => 'رابط انستغرام', 'description_en' => 'Instagram link'],
            ['key' => 'linkedin', 'value' => 'https://www.linkedin.com/company/eventtime', 'type' => 'text', 'group' => 'social', 'description_ar' => 'رابط لينكدإن', 'description_en' => 'LinkedIn link'],
            ['key' => 'youtube', 'value' => 'https://www.youtube.com/eventtime', 'type' => 'text', 'group' => 'social', 'description_ar' => 'رابط يوتيوب', 'description_en' => 'YouTube link'],
            
            // SEO Settings
            ['key' => 'meta_keywords', 'value' => 'تجهيز مؤتمرات, خيام أوروبية, معارض, حفلات, تجهيز فعاليات, event time, event management, saudi arabia, riyadh', 'type' => 'text', 'group' => 'seo', 'description_ar' => 'كلمات مفتاحية للموقع', 'description_en' => 'Site keywords'],
            ['key' => 'google_analytics_id', 'value' => 'GA_MEASUREMENT_ID', 'type' => 'text', 'group' => 'seo', 'description_ar' => 'معرف Google Analytics', 'description_en' => 'Google Analytics ID'],
            ['key' => 'google_site_verification', 'value' => 'YOUR_VERIFICATION_CODE', 'type' => 'text', 'group' => 'seo', 'description_ar' => 'كود تحقق جوجل', 'description_en' => 'Google verification code'],
            
            // Working Hours
            ['key' => 'working_hours_ar', 'value' => json_encode([
                'sunday_thursday' => '8:00 AM - 6:00 PM',
                'friday' => '9:00 AM - 2:00 PM',
                'saturday' => 'مغلق'
            ]), 'type' => 'json', 'group' => 'general', 'description_ar' => 'ساعات العمل بالعربية', 'description_en' => 'Working hours in Arabic'],
            ['key' => 'working_hours_en', 'value' => json_encode([
                'sunday_thursday' => '8:00 AM - 6:00 PM',
                'friday' => '9:00 AM - 2:00 PM',
                'saturday' => 'Closed'
            ]), 'type' => 'json', 'group' => 'general', 'description_ar' => 'ساعات العمل بالإنجليزية', 'description_en' => 'Working hours in English'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
