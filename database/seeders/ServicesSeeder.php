<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title_ar' => 'الخيام الأوروبية',
                'title_en' => 'European Tents',
                'description_ar' => 'نقدم أحدث الخيام الأوروبية بمواصفات عالمية، مصممة لتلبية جميع احتياجات الفعاليات الكبرى. خيامنا تتميز بالمتانة والجودة العالية والتصميم الأنيق الذي يضيف لمسة من الفخامة لفعاليتكم.',
                'description_en' => 'We offer the latest European tents with world-class specifications, designed to meet all major event needs. Our tents feature durability, high quality, and elegant design that adds a touch of luxury to your event.',
                'slug' => 'european-tents',
                'icon' => 'fas fa-campground',
                'image' => 'assets/images/services/tents.jpg',
                'features_ar' => [
                    'مقاسات متنوعة من 10x10م حتى 50x100م وأكثر',
                    'مواد عالية الجودة قماش مقاوم للحريق والطقس',
                    'تصميم عصري أشكال وألوان متنوعة تناسب جميع المناسبات',
                    'تركيب احترافي فريق متخصص للتركيب والفك السريع'
                ],
                'features_en' => [
                    'Various sizes from 10x10m to 50x100m and more',
                    'High quality materials fire and weather resistant fabric',
                    'Modern design various shapes and colors suitable for all occasions',
                    'Professional installation specialized team for quick installation and dismantling'
                ],
                'gallery_images' => [
                    'assets/images/services/tents-gallery-1.jpg',
                    'assets/images/services/tents-gallery-2.jpg',
                    'assets/images/services/tents-gallery-3.jpg'
                ],
                'featured' => true,
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'title_ar' => 'تجهيز المؤتمرات',
                'title_en' => 'Conference Setup',
                'description_ar' => 'نوفر تجهيزات متكاملة للمؤتمرات والندوات بأحدث التقنيات. من شاشات LED ضخمة إلى أنظمة الصوت الاحترافية والإضاءة المتطورة، نضمن لكم مؤتمراً ناجحاً يترك انطباعاً قوياً لدى الحضور.',
                'description_en' => 'We provide integrated conference and seminar equipment with the latest technologies. From large LED screens to professional sound systems and advanced lighting, we guarantee a successful conference that leaves a strong impression on attendees.',
                'slug' => 'conference-setup',
                'icon' => 'fas fa-users',
                'image' => 'assets/images/services/conferences.jpg',
                'features_ar' => [
                    'شاشات LED جميع المقاسات بدقة 4K و8K',
                    'أنظمة صوتية معدات احترافية من أفضل العلامات التجارية',
                    'إضاءة احترافية أنظمة إضاءة متطورة مع تأثيرات بصرية',
                    'الترجمة الفورية نظام ترجمة فورية لعدة لغات'
                ],
                'features_en' => [
                    'LED screens all sizes with 4K and 8K resolution',
                    'Sound systems professional equipment from top brands',
                    'Professional lighting advanced lighting systems with visual effects',
                    'Simultaneous translation system for multiple languages'
                ],
                'gallery_images' => [
                    'assets/images/services/conferences-gallery-1.jpg',
                    'assets/images/services/conferences-gallery-2.jpg',
                    'assets/images/services/conferences-gallery-3.jpg'
                ],
                'featured' => true,
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'title_ar' => 'أجنحة المعارض',
                'title_en' => 'Exhibition Stands',
                'description_ar' => 'نصمم وننفذ أجنحة معارض مبتكرة تجذب الانتباه وتبرز هوية علامتكم التجارية. من التصميم ثلاثي الأبعاد إلى التنفيذ النهائي، نضمن لكم جناحاً استثنائياً يترك انطباعاً دائماً لدى الزوار.',
                'description_en' => 'We design and execute innovative exhibition stands that attract attention and highlight your brand identity. From 3D design to final implementation, we ensure an exceptional stand that leaves a lasting impression on visitors.',
                'slug' => 'exhibition-stands',
                'icon' => 'fas fa-store',
                'image' => 'assets/images/services/exhibitions.jpg',
                'features_ar' => [
                    'تصميم ثلاثي الأبعاد تصاميم واقعية قبل التنفيذ',
                    'أفضل المواد والتقنيات الحديثة',
                    'تركيب سريع فريق محترف للتركيب في الوقت المحدد',
                    'صيانة ودعم خدمة صيانة مستمرة طوال فترة المعرض'
                ],
                'features_en' => [
                    '3D design realistic designs before implementation',
                    'Best materials and modern technologies',
                    'Quick installation professional team for on-time installation',
                    'Maintenance & support continuous service during exhibition period'
                ],
                'gallery_images' => [
                    'assets/images/services/exhibitions-gallery-1.jpg',
                    'assets/images/services/exhibitions-gallery-2.jpg',
                    'assets/images/services/exhibitions-gallery-3.jpg'
                ],
                'featured' => true,
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'title_ar' => 'تجهيز الحفلات',
                'title_en' => 'Event Setup',
                'description_ar' => 'ننظم ونجهز جميع أنواع الحفلات والمناسبات الرسمية والخاصة. من الأفراح إلى حفلات الشركات والمناسبات الخاصة، نقدم لكم تجربة لا تُنسى باهتمام بكل التفاصيل الصغيرة.',
                'description_en' => 'We organize and equip all types of parties and official and private occasions. From weddings to corporate parties and special occasions, we provide an unforgettable experience with attention to every small detail.',
                'slug' => 'event-setup',
                'icon' => 'fas fa-glass-cheers',
                'image' => 'assets/images/services/events.jpg',
                'features_ar' => [
                    'تنسيق الزهور تصاميم زهور فاخرة وأنيقة',
                    'الديكور والإضاءة ديكورات احترافية مع إضاءة سحرية',
                    'تجهيزات الطعام تجهيزات كاملة للطعام والشراب',
                    'الموسيقى والترفيه فرق موسيقية وبرامج ترفيهية'
                ],
                'features_en' => [
                    'Flower arrangement luxurious and elegant flower designs',
                    'Decoration & lighting professional decorations with magical lighting',
                    'Food equipment complete food and beverage equipment',
                    'Music & entertainment musical bands and entertainment programs'
                ],
                'gallery_images' => [
                    'assets/images/services/events-gallery-1.jpg',
                    'assets/images/services/events-gallery-2.jpg',
                    'assets/images/services/events-gallery-3.jpg'
                ],
                'featured' => true,
                'sort_order' => 4,
                'status' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
