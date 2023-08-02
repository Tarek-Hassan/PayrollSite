<?php

namespace Database\Seeders;

use App\Models\PartenerReview;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartenerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partener_reviews')->truncate();
        $partenerReview = [
            [
                'name_ar' => 'Camelia Renesa',
                'name_en' => 'Camelia Renesa',
                'postion_ar' => 'IT Specialist',
                'postion_en' => 'IT Specialist',
                'review_ar' => 'المصرية الاولي تساعدني كثيرًا في الحصول على وظيفتي الأولى وتحقيق هدفي يدفعني أيضًا إلى إثبات نفسي ، وأنا ممتن حقًا للمصرية الاولي.',
                'review_en' => "First Egyptian helps me a lot to get my first job & achieve my goal also pushes me to establish myself, I'm really grateful to First Egyptian.",
                'rate' => 5,
                'is_published' => 1,

            ],
            [
                'name_ar' => 'Jennifer Rose',
                'name_en' => 'Jennifer Rose',
                'postion_ar' => 'Digital Marketer',
                'postion_en' => 'Digital Marketer',
                'review_ar' => 'المصرية الاولي تساعدني كثيرًا في الحصول على وظيفتي الأولى وتحقيق هدفي يدفعني أيضًا إلى إثبات نفسي ، وأنا ممتن حقًا للمصرية الاولي.',
                'review_en' => "First Egyptian helps me a lot to get my first job & achieve my goal also pushes me to establish myself, I'm really grateful to First Egyptian.",
                'rate' => 5,
                'is_published' => 1,

            ],

        ];

        PartenerReview::insert($partenerReview);

    }
}
