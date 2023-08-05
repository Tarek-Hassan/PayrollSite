<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('home_pages')->truncate();
                HomePage::create([
                    'main_banner_content_ar'=>'مهمتنا منذ نشأة و تأسيس الشركة وطوال سنوات العمل التي خدمنا فيها شركائنا بالنجاح هي : تقديم خدمات عالية الجودة بأسعار تنافسية لجميع المؤسسات بمختلف التخصصات',
                    'main_banner_content_en'=>'Our mission since foundation and throughout our years of operation is: “providing high end quality services at competitive prices.”',
                    'main_banner_link'=>'#',

                    'about_title_ar'=>'شريكك الخبير بالموارد البشرية',
                    'about_title_en'=>'Is Your Trustworthy HR Partner',
                    'about_header_ar'=>'تأسست شركة المصرية الأولي في عام 1986 ، وهي تخدم قطاعات الموارد البشرية في مجالات شتي كالطاقة والعمليات والاتصالات والطيران وغيرها من الصناعات و الأعمال التجارية في مصر وبالشرق الأوسط ',
                    'about_header_en'=>'Founded in 1986, First Egyptian Engineering (FEE) has been serving the energy, process, telecom, airline and other industries in Egypt and the Middle East. ',
                    'about_footer_ar'=>'نحن نتشرف بتقديم مجموعة واسعة من خدمات الموارد البشرية بما في ذلك التوظيف و خدمات إدارة الرواتب والاستعانة بالخبراء و الإستشاريين في كافة المجالات المختلفة ، بما في ذلك الموظفين الوطنيين والأجانب الذين يعملون لصالح عملائنا الدوليين ',
                    'about_footer_en'=>'We provide a wide range of HR services including recruitment and outsourcing, These include national as well as expat personnel working for our international clients',
                    'years_exper'=>'35',
                    'expert_at_service'=>'100',

                    'why_first_link'=>'https://www.youtube.com/watch?v=ODfy2YIKS1M',

                    'how_works_header_ar'=>'نحن نتشرف بتقديم خدماتنا لجناحي نظام الموارد البشرية لجميع المؤسسات',
                    'how_works_header_en'=>'We provide our services to serve both parties of the HR Community ',
                    'how_works_Body_ar'=>'أصحاب و رواد الأعمال الذين يريدون خدمات إدارة الرواتب و خدمات التعيين ، كذلك الإستعانة بالمصادر الخارجية دون مخاطرة ',
                    'how_works_Body_en'=>'Employeers who are seeking outsourcing HR services, recruitment and outsource hiring ',
                    'how_works_footer_ar'=>'الباحثين عن تحديات جديدة بسوق العمل من الجاديين الذين يسعون للحصول علي فرص تبرز مهاراتهم وتنمي قدراتهم',
                    'how_works_footer_en'=>'Job Seekers who try to connect with employeers that need thier experties and talent',
                   
                    'featured_candidates_title_ar'=>'نحن ننتقي لك المهارة الخبرات التي تلاقي طموحاتك',
                    'featured_candidates_title_en'=>'Find Talent From The Featured Ones For Your Job',
                    'featured_candidates_content_ar'=>'من الضروري لأي منظمة أن تتقن كشوف المرتبات وعمليات الموظفين التي غالبًا ما تكون معقدة وتحتمل أن تكون محفوفة بالمخاطر ،
                    الاستعانة بمصادر خارجية و الخبراء بمجال التعيينات تمكن المنظمة من تقليل المخاطر والوقت والمال وضمان أمن البيانات والتعامل الخبير مع هذه الوظائف',
                    'featured_candidates_content_en'=>'It is imperative for any organization to perfect its payroll and personnel operations which are often complex and potentially risky,
                    Outsourcing enables the organization to minimize its risk, time, money and ensure data security and expert handling of these functions.',
                   
                    'job_applicants_title_ar'=>'تستطيع الآن بناء سيرتك الذاتية بواسطة خبراءنا لفرص أفضل',
                    'job_applicants_title_en'=>'Build Your Professional Resume With The Help Of Expert',
                    'job_applicants_content_ar'=>'سيقوم بدعمك خبراء المصرية الأولي لبناء سيرتك الذاتية في خطوات قليلة حتى يتمكن أي صاحب عمل من العثور عليك والتواصل معك من خلالنا ، يتم إبراز مهاراتك الخاصة والمشاريع التي شاركت فيها ومجال خبرتك من خلال برمجية العلامات الذكية',
                    'job_applicants_content_en'=>'First Egyptian experts will support you to build your C.V. in few steps so that any employeer can find and get conected with you through us, your special skill talents, projects that you participate in and your area of experties are highlighted through our smart tags.',
                    
                    'partner_content_ar'=>'نحن نؤمن بأن عملائنا هم شركاؤنا في النجاح ، ونعتقد أنه من أجل تزويدهم بعرض خدمة لا تشوبه شائبة ، يجب أن يكونوا محور كل مبادرة وعملية نقوم بها. نبدأ بالتعرف علي إحتياجاتهم وتفاصيل عملهم بدقة ومن هنا تكون نقطة إنطلاق حلولنا وخدماتنا المقترحة.',
                    'partner_content_en'=>'We believe that our clients are our partners of success, We believe that in order to provide them with a flawless service offering, they have to be the focus of our every initiative and operation. We start with recognizing thier needs and from there stem our proposed solutions and services.',
                ]);

    }
}
