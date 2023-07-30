<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('settings')->truncate();
                Setting::create([
                    'email'=>'info@first-egyptian.com',
                    'phone'=>'(+20)-2-3346-02205',
                    'about_ar'=>'رؤية الشركة المصرية الأولي ، تتمحور حول تحقيق الريادة داخل الأسواق من خلال تقديم خدمات الموارد البشرية حيث وضعنا معيارًا لتعهيد القوى العاملة وخدمتها لتمكين عملائنا وشركاء نجاحنا من تحقيق أهدافهم وتعزيز كفاءة عملهم بقوة وثبات',
                    'about_en'=>'At First, we envision achieving market leadership in the provision of HR services where we’d set the benchmark for manpower outsourcing and enable our clients to achieve their objectives and enhance their work efficiency.',
                    'fax'=>'(+20)-2-3346-2474',
                    'address_ar'=>' شارع جامعة الدول العربية ، المهندسين ، القاهرة',
                    'address_en'=>'5 Gameat El Dowal El Arabia Street, Mohandessin, Cairo, Egypt',
                    'map'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.330248383464!2d31.200968274905293!3d30.056066818021087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458413be80d13b1%3A0x49ed5c2df1aac352!2z2KfZhNi02LHZg9ipINin2YTZhdi12LHZitipINin2YTYp9mI2YTZiSDZhNmE2YfZhtiv2LPYqSDZgdix2LPYqi0gRmlyc3QgRWd5cHRpYW4gRW5naW5lZXJpbmc!5e0!3m2!1sen!2seg!4v1690287534692!5m2!1sen!2seg" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'twitter'=>'https://twitter.com/',
                    'facebook'=>'https://www.facebook.com/',
                    'linkedin'=>'https://www.linkedin.com/',
                    'instagram'=>'https://www.instagram.com/',
                ]);
    }
}
