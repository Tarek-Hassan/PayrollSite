<?php

namespace Database\Seeders;

use App\Models\FeaturedCandidate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturedCandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('featured_candidates')->truncate();

        $featuredCandidates = [
            [
                'title_ar' => 'خدمات التعيين',
                'title_en' => 'Recruitment Services',
                'content_ar' => 'نحن نبحث وننتقي المميزين من قواعد البيانات الخاصة بنا ، ونقوم بجدولة المقابلات وصولا لعملية التوظيف والمتابعة',
                'content_en' => 'Fetch talants from our Database, schedule interviews , Hiring Process and follow up',
                'tag1_icon' => 'ri-grid-line',
                'tag1_ar' => 'كافة التخصصات',
                'tag1_en' => 'All Majors',
                'tag2_icon' => 'ri-map-pin-range-line',
                'tag2_ar' => 'تغطية لكل الإختيارات',
                'tag2_en' => 'Large scale of choices',
                'is_published'=>1,
            ],
            [
                'title_ar' => 'إدارة الرواتب',
                'title_en' => 'Payroll Operations',
                'content_ar' => 'احتساب الرواتب ، بيان الراتب التفصيلي ، كشوفات حسابات الرواتب و التحويلات ، التأمينات الحكومية و الخاصة ، عمليات الموظفين و التقارير الإحصائية ... وغيرها الكثير',
                'content_en' => 'Calculation, Salary Slips, Tax handling , Social & private Insurance, Personnel Ops., Reports ..etc.',
                'tag1_icon' => 'ri-calculator-line',
                'tag1_ar' => 'احتساب الرواتب',
                'tag1_en' => 'Payroll Calculations',
                'tag2_icon' => 'ri-pie-chart-line',
                'tag2_ar' => 'التقارير و التسويات المالية',
                'tag2_en' => 'Reports & Consulidations',
                'is_published'=>1,
            ],
            [
                'title_ar' => 'التعهيد - الإستعانة بالتعينات الخارجية',
                'title_en' => 'Outsourcing Services',
                'content_ar' => 'توفير موارد مساعدة من السوق المحلي ،الإقليمي و الدولي ، توفير خدمات الرواتب لهم ، برنامج جوال للموظف ، بيان الراتب ، تحويلات الرواتب ، تحمل جميع الإلتزامات الحكومية وغيرها تجاه المعين نيابة عن شركتك',
                'content_en' => 'Local assets, Expat, Affording Salary slips, Mobile app, Tax, Social & private Insurance, Follow up ..etc.',
                'tag1_icon' => 'ri-shield-user-line',
                'tag1_ar' => 'تجنب مخاطر التعيين',
                'tag1_en' => 'No Hiring Risk',
                'tag2_icon' => 'ri-wallet-3-line',
                'tag2_ar' => 'توفير النفقات و المصاريف',
                'tag2_en' => 'Save Money',
                'is_published'=>1,
            ]
        ];
        FeaturedCandidate::insert($featuredCandidates);

    }
}
