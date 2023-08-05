<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('abouts')->truncate();
                About::create([
                    'page_banner_content_en'=>'We are the ones Who always finish the race, thats why we called .. First,,',
                    'page_banner_content_ar'=>'خط النهاية بالنسبة لنا ما هو إلا بداية سباق جديد لذلك نحن الشركة المصرية الأولــي',
                    'page_banner_date'=>'2023-07-01',
                    'page_banner_read'=>'10',
            
                    'foundation_title_en'=>'Foundation',
                    'foundation_title_ar'=>'التأسيس',
                    'foundation_content_en'=>'<p>
                                                Since 1986, First Egyptian Engineering has been serving the energy,
                                                construction, telecom, airline and other industries in Egypt and the Middle East.
                                                We specialize in Outsourcing and Payroll Administration services                                    </p>  
                                            <p>
                                                We have a staff of over 100 proffisonals and currently around 1600 contract personnel on our payroll
                                                including many expats working for several international clients                                    </p>',

                    'foundation_content_ar'=>'<p>
                                                        منذ الإنطلاقة الأولي عام 1986 ، الشركة المصرية الأولى للهندسة تقدم خدماتها لقطاعات عديدة أهمها الطاقة 
                                                        ، المقاولات ،الاتصالات والطيران وغيرها من الصناعات في مصر والشرق الأوسط نحن متخصصون في خدمات التعهيد وتقديم الموارد المساعدة من السوق المحلي و من الخبراء و الإستشاريين الدوليين ، إدارة الأجور و الرواتب
                                                        و عمليات التوظيف
                                                </p>  
                                                    <p>
                                                        لدينا الآن أكثر من 100 موظف محترف و متخصص في خدمة شركاء نجاحنا من العملاء وحالياً أكثر من 1600 موظف متعاقد على كشوف رواتبنا
                                                        بما في ذلك العديد من المغتربين الذين يعملون مع العديد من العملاء بالشركات متعددة الجنسيات والدولية   </p>',

                    'vision_title_en'=>'Vision',
                    'vision_title_ar'=>'رؤية الشركة',

                    'vision_content_en'=>'<p>
                                                At First, we envision achieving market leadership in the provision of HR services where we’d set the benchmark for manpower outsourcing and enable our clients to achieve their objectives and enhance their work efficiency
                                            </p>',

                    'vision_content_ar'=>' <p>
                    رؤية الشركة المصرية الأولي ، تتمحور حول تحقيق الريادة داخل الأسواق من خلال تقديم خدمات الموارد البشرية حيث وضعنا معيارًا لتعهيد القوى العاملة وخدمتها لتمكين عملائنا وشركاء نجاحنا من تحقيق أهدافهم وتعزيز كفاءة عملهم بقوة وثبات
                </p>',

                    'mission_title_en'=>'Mission',
                    'mission_title_ar'=>'رسالة الشركة',

                    'mission_content_en'=>' <p>
                                                We serve our clients through capitalizing on value creation, loyal employees and business partners. Throughout our operations, we continuously adhere to the highest standards of business conduct and ethics that benefit the community we serve
                                            </p>
                                            <p class="main-color">
                                                Our mission since foundation and throughout our years of operation is: “providing high end quality services at competitive prices.”
                                            </p>',

                    'mission_content_ar'=>'<p>
                                                نحن نخدم عملائنا و شركاءنا خلال الاستفادة من خلق القيمة والموظفين المخلصين وشركاء الأعمال خلال عملياتنا ، نحن نلزم أنفسنا كفريق عمل باستمرار تقديم أعلى معايير السلوك التجاري و الثوابت الأخلاقية التي تنمي المجتمع الذي نخدمه
                                            </p>
                                            <p class="main-color">
                                                مهمتنا منذ نشأة و تأسيس الشركة وطوال سنوات العمل التي خدمنا فيها شركائنا بالنجاح هي : تقديم خدمات عالية الجودة بأسعار تنافسية لجميع المؤسسات بمختلف التخصصات
                                            </p>',

                    'values_principles_title_en'=>'Values & Principles',
                    'values_principles_title_ar'=>'قيم ومبادئ الشركة',
                    'values_principles_content_en'=>'<p>
                                                            At First, we are committed to operating within the laws that govern our business. Over and above, we have our own set of values and guiding principles that we take great pride in and totally stand by. 

                                                            Our employees are trained to operate within these guiding principles to ensure that our business performance complies with our clients’ requirements and our own values. All employees are committed to preserving the confidentiality and privacy of our clients, other colleagues as well as corporate records and information. 
                                                            
                                                            At First, all appropriate measures for maintaining confidentiality are taken. We have integrity and confidentiality clauses in all employment contracts to ensure that all our company’s associates adhere to them. We believe that a solid foundation for prosperity and stability is always achieved by righteousness, persistence and efficiency. 
                                                        </p>
                                                        <p class="main-color">
                                                            Our core values and principles include:
                                                        </p>

                                                        <ul class="article-list">
                                                            <li>Client Driven (Client Oriented- Client Focused)</li>
                                                        </ul>
                                                        <p>
                                                            We believe that in order to provide our clients with a flawless service offering, they have to be the focus of our every initiative and operation. We start with recognizing our client needs and from there stem our proposed solutions and services                                    
                                                        </p>

                                                        <ul class="article-list">
                                                            <li>Quality Commitment</li>
                                                        </ul>
                                                        <p>
                                                            At First, we have a strong commitment to service quality. In fact, this is what gives us our competitive edge that is so valued by our clients                                    
                                                        </p>


                                                        <ul class="article-list">
                                                            <li>Innovation</li>
                                                        </ul>
                                                        <p>
                                                            In an ever changing market place, the need for innovation is no longer optional, It is mandatory that we focus on innovation while providing our services in order to be ahead of competition and stay there                                      
                                                        </p>


                                                        <ul class="article-list">
                                                            <li>Integrity and Trust</li>
                                                        </ul>
                                                        <p>
                                                            Our work culture and environment place huge emphasis on integrity. Every member of First’s working team maintain integrity while working with other team members and clients. It is through integrity that trust emerges and brings all the resulting benefits for clients and work associates
                                                        </p>',
                    'values_principles_content_ar'=>'<p>
                                                        بالشركة المصرية الأولي نحن ملتزمون بالعمل في إطار القوانين و الأكواد التي تحكم أعمالنا علاوة على ذلك ، لدينا مجموعة من القيم والمبادئ التوجيهية الخاصة بنا التي نفخر بها ونلتزم بها تمامًا
                                                        لقد تم تدريب موظفينا على العمل وفقًا لهذه المبادئ التوجيهية لضمان توافق أداء أعمالنا مع متطلبات عملائنا وقيمنا الخاصة حيث يلتزم جميع الموظفين بالحفاظ على سرية وخصوصية شركاء النجاح من العملاء وزملائنا الآخرين بالإضافة إلى سجلات ومعلومات الشركة                                        
                                                        ومن تلك النقطة أصبح اتخاذ جميع الإجراءات المناسبة يتم للحفاظ على السرية ، ولدينا بنود النزاهة والسرية في جميع عقود العمل لضمان التزام جميع شركاء الشركة بها ، ونعتقد أن أساسًا متينًا للازدهار والاستقرار يتحقق دائمًا بالصلاح والمثابرة والكفاءة
                                                    </p>
                                                    <p class="main-color">
                                                        تشمل قيمنا ومبادئنا الأساسية ما يلي:
                                                    </p>

                                                    <ul class="article-list">
                                                        <li>العميل و إحتياجاته هي محور الإهتمام الرئيسي</li>
                                                    </ul>
                                                    <p>
                                                        نحن نؤمن بأن عملائنا هم شركاؤنا في النجاح ، ونعتقد أنه من أجل تزويدهم بعرض خدمة لا تشوبه شائبة ، يجب أن يكونوا محور كل مبادرة وعملية نقوم بها. نبدأ بالتعرف علي إحتياجاتهم وتفاصيل عملهم بدقة ومن هنا تكون نقطة إنطلاق حلولنا وخدماتنا المقترحة.
                                                    </p>

                                                    <ul class="article-list">
                                                        <li>إلتزامنا بالجودة</li>
                                                    </ul>
                                                    <p>
                                                        بالمصرية الأولي لدينا التزام قوي بجودة الخدمة المقدمة علي أرض في الواقع و هذا هو ما يعطينا ميزتنا التنافسية التي يقدرها شركاء نجاحنا من العملاء                                    
                                                    </p>

                                                    <ul class="article-list">
                                                        <li>الإبتكار</li>
                                                    </ul>
                                                    <p>
                                                        في سوق دائم التغير و التحديات لم تعد الحاجة إلى الابتكار اختيارية فمن الضروري أن نركز على الابتكار أثناء تقديم خدماتنا من أجل أن نكون في صدارة المنافسة بالقطاعات المتميزة 
                                                    </p>

                                                    <ul class="article-list">
                                                        <li>النزاهة و الثقة</li>
                                                    </ul>
                                                    <p>
                                                        ترتكز ثقافة وبيئة العمل بالمصرية الأولي بشكل كبير على النزاهة و الحفاظ علي أكواد المهنة حيث يحافظ كل عضو في فريق عمل بالشركة على النزاهة و المصداقية خلال العمل مع أعضاء الفريق الآخرين والعملاء فمن خلال النزاهة تتولد الثقة و تجلب معها جميع الفوائد الناتجة للعملاء وشركاء العمل
                                                    </p>   ',

                    'team_title_en'=>'Team Work',
                    'team_title_ar'=>'فريق العمل',

                    'team_content_en'=>'<p>
                                            First’s skillful work team members specialize in payroll and personnel functions.  Our team is enriched with experienced professionals in personnel outsourcing, recruitment, payroll administration as well as dealing with all concerned governmental authorities and labor office for required legislations. Our team members also operate within a set of values and guiding principles that comprise an integral part of our work culture.  
                                        </p>',

                    'team_content_ar'=>'<p>
                                            بالمصرية الأولي تميز و تخصص أعضاء فريق العمل لدينا بمهارة ودقة إدارة منظومات الأجور و الرواتب مهما كانت بالغة التعقيد وذات طبيعة خاصة فريق الشركة غني بالمهنيين ذوي الخبرة في تعهيد ، إمداد العملاء بالموارد البشرية المطلوبة طبقا للتوصيفات الوظيفية القياسية و كذلك شديدة التخصص و المطلوبة من قبل العملاء بعد إجراء التحليل الوظيفي أو كما هو مذكور بالتوصيف المطلوب من قبل العميل ، خدمات التعيين و التوظيف التي يعتمد فيها العميل علي أسس خبراتنا في إنتقاء العنصر المناسب و كذلك التعامل مع جميع السلطات الحكومية المعنية ومكتب العمل للتشريعات المطلوبة وكل في ظل مجموعة القيم والمبادئ التوجيهية التي تشكل جزءًا لا يتجزأ من ثقافة عملنا                                        
                                        </p>',
                ]);

    }
}
