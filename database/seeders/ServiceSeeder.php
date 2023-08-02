<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('services')->truncate();
                $services=[
                    [
                    'title_ar' => 'إدارة الأجور و الرواتب',
                    'title_en' => 'Payroll Administration',
                    'slug'=>'payroll-administration',
                    'is_published' => 1,
                    ],
                    [
                    'title_ar' => 'خدمات التعيين والتوظيف',
                    'title_en' => 'Recruitment Services',
                    'slug'=>'recruitment-services',
                    'is_published' => 1,
                    ],
                    [
                    'title_ar' => 'الإستعانة بالموارد المحلية',
                    'title_en' => 'Local Outsourcing',
                    'slug'=>'local-outsourcing',
                    'is_published' => 1,
                    ],
                    [
                    'title_ar' => 'الإستعانة بالموارد الأجنبية',
                    'title_en' => 'Expat Outsourcing',
                    'slug'=>'expat-outsourcing',
                    'is_published' => 1,
                    ],
                    [
                    'title_ar' => 'إدارة خدمات الموظفين',
                    'title_en' => 'Personnel Services',
                    'slug'=>'personnel-services',
                    'is_published' => 1,
                    ],
                    ];
            



                Service::insert($services);

    }
}
