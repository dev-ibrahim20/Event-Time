<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMembersSeeder extends Seeder
{
    public function run(): void
    {
        $teamMembers = [
            [
                'name_ar' => 'محمد الأحمدي',
                'name_en' => 'Mohammed Al-Ahmadi',
                'position_ar' => 'الرئيس التنفيذي',
                'position_en' => 'Chief Executive Officer',
                'bio_ar' => 'خبير في إدارة الفعاليات مع أكثر من 15 عاماً من الخبرة في المنطقة. قاد بنجاح أكثر من 200 فعالية كبرى في المملكة وخارجها.',
                'bio_en' => 'Expert in event management with over 15 years of experience in the region. Successfully led more than 200 major events in the Kingdom and abroad.',
                'image' => 'assets/images/team/ceo.jpg',
                'social_links' => [
                    'linkedin' => 'https://www.linkedin.com/in/mohammed-ahmadi',
                    'twitter' => 'https://www.twitter.com/mahmadi'
                ],
                'featured' => true,
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'name_ar' => 'عبدالله محمد',
                'name_en' => 'Abdullah Mohammed',
                'position_ar' => 'مدير العمليات',
                'position_en' => 'Operations Manager',
                'bio_ar' => 'متخصص في التخطيط وتنفيذ الفعاليات الكبرى مع خبرة تزيد عن 12 عاماً. يضمن سير العمليات بسلاسة وكفاءة عالية.',
                'bio_en' => 'Specialized in planning and executing major events with over 12 years of experience. Ensures smooth operations with high efficiency.',
                'image' => 'assets/images/team/coo.jpg',
                'social_links' => [
                    'linkedin' => 'https://www.linkedin.com/in/abdullah-mohammed',
                    'twitter' => 'https://www.twitter.com/abdullahmoh'
                ],
                'featured' => true,
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'name_ar' => 'سارة أحمد',
                'name_en' => 'Sara Ahmed',
                'position_ar' => 'مدير الإبداع',
                'position_en' => 'Creative Director',
                'bio_ar' => 'مصممة مبدعة تضيف لمسة فريدة لكل فعالية ننظمها. خبرة في التصميم والديكور لمدة 8 سنوات.',
                'bio_en' => 'Creative designer who adds a unique touch to every event we organize. 8 years of experience in design and decoration.',
                'image' => 'assets/images/team/creative.jpg',
                'social_links' => [
                    'linkedin' => 'https://www.linkedin.com/in/sara-ahmed',
                    'instagram' => 'https://www.instagram.com/sarahdesigns'
                ],
                'featured' => true,
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'name_ar' => 'خالد السعيد',
                'name_en' => 'Khalid Al-Saeed',
                'position_ar' => 'مدير المشاريع',
                'position_en' => 'Project Manager',
                'bio_ar' => 'مدير مشاريع محترف يضمن تسليم جميع المشاريع في الوقت المحدد وبأعلى معايير الجودة.',
                'bio_en' => 'Professional project manager ensuring all projects are delivered on time and to the highest quality standards.',
                'image' => 'assets/images/team/pm.jpg',
                'social_links' => [
                    'linkedin' => 'https://www.linkedin.com/in/khalid-alsaeed'
                ],
                'featured' => false,
                'sort_order' => 4,
                'status' => true,
            ],
            [
                'name_ar' => 'نورا العلي',
                'name_en' => 'Nora Al-Ali',
                'position_ar' => 'مديرة التسويق',
                'position_en' => 'Marketing Manager',
                'bio_ar' => 'مسؤولة عن التسويق والترويع لفعالياتنا. خبرة في التسويق الرقمي والتسويق الفعاليات.',
                'bio_en' => 'Responsible for marketing and promoting our events. Expertise in digital marketing and event marketing.',
                'image' => 'assets/images/team/marketing.jpg',
                'social_links' => [
                    'linkedin' => 'https://www.linkedin.com/in/nora-ali',
                    'twitter' => 'https://www.twitter.com/noraali'
                ],
                'featured' => false,
                'sort_order' => 5,
                'status' => true,
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}
