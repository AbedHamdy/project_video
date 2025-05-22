<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    // Static data for production - Arabic courses
    $videos = [
        [
            'title' => 'مقدمة في البرمجة - الدرس الأول',
            'description' => 'تعلم أساسيات البرمجة من الصفر باللغة العربية',
            'link' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'feature' => 1,
            'user_name' => 'شمس',
            'content' => '<h1>محتوى الدرس الأول في البرمجة</h1><p>في هذا الدرس سنتعلم:</p><ul><li>ما هي البرمجة؟</li><li>لغات البرمجة المختلفة</li><li>كيفية كتابة أول برنامج</li><li>المتغيرات والثوابت</li></ul><p>هذا الدرس مناسب للمبتدئين تماماً</p>'
        ],
        [
            'title' => 'تطوير المواقع بـ HTML و CSS',
            'description' => 'كورس شامل لتعلم تطوير المواقع الإلكترونية',
            'link' => 'https://www.youtube.com/embed/ScMzIvxBSi4',
            'feature' => 1,
            'user_name' => 'أحمد محمد',
            'content' => '<h1>تطوير المواقع للمبتدئين</h1><p>محتوى هذا الكورس:</p><ul><li>مقدمة عن HTML</li><li>العناصر الأساسية</li><li>تنسيق الصفحات بـ CSS</li><li>إنشاء موقع متكامل</li></ul><p>ستتعلم كيفية إنشاء موقعك الأول من الصفر</p>'
        ],
        [
            'title' => 'أساسيات قواعد البيانات MySQL',
            'description' => 'تعلم كيفية التعامل مع قواعد البيانات وإدارتها',
            'link' => 'https://www.youtube.com/embed/HXV3zeQKqGY',
            'feature' => 0,
            'user_name' => 'فاطمة عبدالله',
            'content' => '<h1>قواعد البيانات MySQL</h1><p>في هذا الكورس ستتعلم:</p><ul><li>إنشاء قاعدة البيانات</li><li>التعامل مع الجداول</li><li>استعلامات SQL الأساسية</li><li>ربط قاعدة البيانات بالتطبيقات</li></ul><p>كورس عملي مع أمثلة تطبيقية</p>'
        ],
        [
            'title' => 'التسويق الرقمي ووسائل التواصل',
            'description' => 'استراتيجيات التسويق الحديثة عبر الإنترنت',
            'link' => 'https://www.youtube.com/embed/fJ9rUzIMcZQ',
            'feature' => 1,
            'user_name' => 'خالد السعيد',
            'content' => '<h1>التسويق الرقمي الفعال</h1><p>محاور الكورس:</p><ul><li>فهم السوق المستهدف</li><li>إنشاء المحتوى الجذاب</li><li>استخدام منصات التواصل الاجتماعي</li><li>تحليل النتائج وقياس الأداء</li></ul><p>طرق عملية لزيادة المبيعات والوصول</p>'
        ],
        [
            'title' => 'تصميم الجرافيك باستخدام Photoshop',
            'description' => 'كورس متكامل لتعلم التصميم الاحترافي',
            'link' => 'https://www.youtube.com/embed/kJQP7kiw5Fk',
            'feature' => 0,
            'user_name' => 'مريم حسن',
            'content' => '<h1>تصميم الجرافيك الاحترافي</h1><p>ما ستتعلمه:</p><ul><li>واجهة برنامج Photoshop</li><li>أدوات التحديد والرسم</li><li>التعامل مع الطبقات</li><li>إنشاء تصاميم احترافية</li></ul><p>من المبتدئ إلى المحترف في التصميم</p>'
        ],
        [
            'title' => 'إدارة المشاريع والقيادة',
            'description' => 'مهارات القيادة وإدارة الفرق في بيئة العمل',
            'link' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'feature' => 0,
            'user_name' => 'عمر الخطيب',
            'content' => '<h1>القيادة وإدارة المشاريع</h1><p>محتوى الكورس:</p><ul><li>أساسيات إدارة المشاريع</li><li>مهارات القيادة الفعالة</li><li>إدارة الوقت والموارد</li><li>التعامل مع الفرق المتنوعة</li></ul><p>تطوير مهاراتك الإدارية والقيادية</p>'
        ]
    ];

    foreach ($videos as $video) {
        $video['category_id'] = 1;
        Video::create($video);
    }
}
}   
