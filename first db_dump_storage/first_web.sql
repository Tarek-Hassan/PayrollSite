-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 03:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_banner_content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_banner_content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_banner_date` date NOT NULL,
  `page_banner_read` int(11) NOT NULL,
  `foundation_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foundation_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foundation_content_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foundation_content_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_content_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_content_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_content_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_content_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `values_principles_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values_principles_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values_principles_content_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `values_principles_content_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_content_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_content_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `page_banner_content_en`, `page_banner_content_ar`, `page_banner_date`, `page_banner_read`, `foundation_title_en`, `foundation_title_ar`, `foundation_content_en`, `foundation_content_ar`, `vision_title_en`, `vision_title_ar`, `vision_content_en`, `vision_content_ar`, `mission_title_en`, `mission_title_ar`, `mission_content_en`, `mission_content_ar`, `values_principles_title_en`, `values_principles_title_ar`, `values_principles_content_en`, `values_principles_content_ar`, `team_title_en`, `team_title_ar`, `team_content_en`, `team_content_ar`, `created_at`, `updated_at`, `section`) VALUES
(1, 'We are the ones Who always finish the race, thats why we called .. First,,', 'خط النهاية بالنسبة لنا ما هو إلا بداية سباق جديد لذلك نحن الشركة المصرية الأولــي', '2023-07-01', 10, 'Foundation', 'التأسيس', '<p>\n                                                Since 1986, First Egyptian Engineering has been serving the energy,\n                                                construction, telecom, airline and other industries in Egypt and the Middle East.\n                                                We specialize in Outsourcing and Payroll Administration services                                    </p>  \n                                            <p>\n                                                We have a staff of over 100 proffisonals and currently around 1600 contract personnel on our payroll\n                                                including many expats working for several international clients                                    </p>', '<p>\n                                                        منذ الإنطلاقة الأولي عام 1986 ، الشركة المصرية الأولى للهندسة تقدم خدماتها لقطاعات عديدة أهمها الطاقة \n                                                        ، المقاولات ،الاتصالات والطيران وغيرها من الصناعات في مصر والشرق الأوسط نحن متخصصون في خدمات التعهيد وتقديم الموارد المساعدة من السوق المحلي و من الخبراء و الإستشاريين الدوليين ، إدارة الأجور و الرواتب\n                                                        و عمليات التوظيف\n                                                </p>  \n                                                    <p>\n                                                        لدينا الآن أكثر من 100 موظف محترف و متخصص في خدمة شركاء نجاحنا من العملاء وحالياً أكثر من 1600 موظف متعاقد على كشوف رواتبنا\n                                                        بما في ذلك العديد من المغتربين الذين يعملون مع العديد من العملاء بالشركات متعددة الجنسيات والدولية   </p>', 'Vision', 'رؤية الشركة', '<p>\n                                                At First, we envision achieving market leadership in the provision of HR services where we’d set the benchmark for manpower outsourcing and enable our clients to achieve their objectives and enhance their work efficiency\n                                            </p>', ' <p>\n                    رؤية الشركة المصرية الأولي ، تتمحور حول تحقيق الريادة داخل الأسواق من خلال تقديم خدمات الموارد البشرية حيث وضعنا معيارًا لتعهيد القوى العاملة وخدمتها لتمكين عملائنا وشركاء نجاحنا من تحقيق أهدافهم وتعزيز كفاءة عملهم بقوة وثبات\n                </p>', 'Mission', 'رسالة الشركة', ' <p>\n                                                We serve our clients through capitalizing on value creation, loyal employees and business partners. Throughout our operations, we continuously adhere to the highest standards of business conduct and ethics that benefit the community we serve\n                                            </p>\n                                            <p class=\"main-color\">\n                                                Our mission since foundation and throughout our years of operation is: “providing high end quality services at competitive prices.”\n                                            </p>', '<p>\n                                                نحن نخدم عملائنا و شركاءنا خلال الاستفادة من خلق القيمة والموظفين المخلصين وشركاء الأعمال خلال عملياتنا ، نحن نلزم أنفسنا كفريق عمل باستمرار تقديم أعلى معايير السلوك التجاري و الثوابت الأخلاقية التي تنمي المجتمع الذي نخدمه\n                                            </p>\n                                            <p class=\"main-color\">\n                                                مهمتنا منذ نشأة و تأسيس الشركة وطوال سنوات العمل التي خدمنا فيها شركائنا بالنجاح هي : تقديم خدمات عالية الجودة بأسعار تنافسية لجميع المؤسسات بمختلف التخصصات\n                                            </p>', 'Values & Principles', 'قيم ومبادئ الشركة', '<p>\n                                                            At First, we are committed to operating within the laws that govern our business. Over and above, we have our own set of values and guiding principles that we take great pride in and totally stand by. \n\n                                                            Our employees are trained to operate within these guiding principles to ensure that our business performance complies with our clients’ requirements and our own values. All employees are committed to preserving the confidentiality and privacy of our clients, other colleagues as well as corporate records and information. \n                                                            \n                                                            At First, all appropriate measures for maintaining confidentiality are taken. We have integrity and confidentiality clauses in all employment contracts to ensure that all our company’s associates adhere to them. We believe that a solid foundation for prosperity and stability is always achieved by righteousness, persistence and efficiency. \n                                                        </p>\n                                                        <p class=\"main-color\">\n                                                            Our core values and principles include:\n                                                        </p>\n\n                                                        <ul class=\"article-list\">\n                                                            <li>Client Driven (Client Oriented- Client Focused)</li>\n                                                        </ul>\n                                                        <p>\n                                                            We believe that in order to provide our clients with a flawless service offering, they have to be the focus of our every initiative and operation. We start with recognizing our client needs and from there stem our proposed solutions and services                                    \n                                                        </p>\n\n                                                        <ul class=\"article-list\">\n                                                            <li>Quality Commitment</li>\n                                                        </ul>\n                                                        <p>\n                                                            At First, we have a strong commitment to service quality. In fact, this is what gives us our competitive edge that is so valued by our clients                                    \n                                                        </p>\n\n\n                                                        <ul class=\"article-list\">\n                                                            <li>Innovation</li>\n                                                        </ul>\n                                                        <p>\n                                                            In an ever changing market place, the need for innovation is no longer optional, It is mandatory that we focus on innovation while providing our services in order to be ahead of competition and stay there                                      \n                                                        </p>\n\n\n                                                        <ul class=\"article-list\">\n                                                            <li>Integrity and Trust</li>\n                                                        </ul>\n                                                        <p>\n                                                            Our work culture and environment place huge emphasis on integrity. Every member of First’s working team maintain integrity while working with other team members and clients. It is through integrity that trust emerges and brings all the resulting benefits for clients and work associates\n                                                        </p>', '<p>\n                                                        بالشركة المصرية الأولي نحن ملتزمون بالعمل في إطار القوانين و الأكواد التي تحكم أعمالنا علاوة على ذلك ، لدينا مجموعة من القيم والمبادئ التوجيهية الخاصة بنا التي نفخر بها ونلتزم بها تمامًا\n                                                        لقد تم تدريب موظفينا على العمل وفقًا لهذه المبادئ التوجيهية لضمان توافق أداء أعمالنا مع متطلبات عملائنا وقيمنا الخاصة حيث يلتزم جميع الموظفين بالحفاظ على سرية وخصوصية شركاء النجاح من العملاء وزملائنا الآخرين بالإضافة إلى سجلات ومعلومات الشركة                                        \n                                                        ومن تلك النقطة أصبح اتخاذ جميع الإجراءات المناسبة يتم للحفاظ على السرية ، ولدينا بنود النزاهة والسرية في جميع عقود العمل لضمان التزام جميع شركاء الشركة بها ، ونعتقد أن أساسًا متينًا للازدهار والاستقرار يتحقق دائمًا بالصلاح والمثابرة والكفاءة\n                                                    </p>\n                                                    <p class=\"main-color\">\n                                                        تشمل قيمنا ومبادئنا الأساسية ما يلي:\n                                                    </p>\n\n                                                    <ul class=\"article-list\">\n                                                        <li>العميل و إحتياجاته هي محور الإهتمام الرئيسي</li>\n                                                    </ul>\n                                                    <p>\n                                                        نحن نؤمن بأن عملائنا هم شركاؤنا في النجاح ، ونعتقد أنه من أجل تزويدهم بعرض خدمة لا تشوبه شائبة ، يجب أن يكونوا محور كل مبادرة وعملية نقوم بها. نبدأ بالتعرف علي إحتياجاتهم وتفاصيل عملهم بدقة ومن هنا تكون نقطة إنطلاق حلولنا وخدماتنا المقترحة.\n                                                    </p>\n\n                                                    <ul class=\"article-list\">\n                                                        <li>إلتزامنا بالجودة</li>\n                                                    </ul>\n                                                    <p>\n                                                        بالمصرية الأولي لدينا التزام قوي بجودة الخدمة المقدمة علي أرض في الواقع و هذا هو ما يعطينا ميزتنا التنافسية التي يقدرها شركاء نجاحنا من العملاء                                    \n                                                    </p>\n\n                                                    <ul class=\"article-list\">\n                                                        <li>الإبتكار</li>\n                                                    </ul>\n                                                    <p>\n                                                        في سوق دائم التغير و التحديات لم تعد الحاجة إلى الابتكار اختيارية فمن الضروري أن نركز على الابتكار أثناء تقديم خدماتنا من أجل أن نكون في صدارة المنافسة بالقطاعات المتميزة \n                                                    </p>\n\n                                                    <ul class=\"article-list\">\n                                                        <li>النزاهة و الثقة</li>\n                                                    </ul>\n                                                    <p>\n                                                        ترتكز ثقافة وبيئة العمل بالمصرية الأولي بشكل كبير على النزاهة و الحفاظ علي أكواد المهنة حيث يحافظ كل عضو في فريق عمل بالشركة على النزاهة و المصداقية خلال العمل مع أعضاء الفريق الآخرين والعملاء فمن خلال النزاهة تتولد الثقة و تجلب معها جميع الفوائد الناتجة للعملاء وشركاء العمل\n                                                    </p>   ', 'Team Work', 'فريق العمل', '<p>\n                                            First’s skillful work team members specialize in payroll and personnel functions.  Our team is enriched with experienced professionals in personnel outsourcing, recruitment, payroll administration as well as dealing with all concerned governmental authorities and labor office for required legislations. Our team members also operate within a set of values and guiding principles that comprise an integral part of our work culture.  \n                                        </p>', '<p>\n                                            بالمصرية الأولي تميز و تخصص أعضاء فريق العمل لدينا بمهارة ودقة إدارة منظومات الأجور و الرواتب مهما كانت بالغة التعقيد وذات طبيعة خاصة فريق الشركة غني بالمهنيين ذوي الخبرة في تعهيد ، إمداد العملاء بالموارد البشرية المطلوبة طبقا للتوصيفات الوظيفية القياسية و كذلك شديدة التخصص و المطلوبة من قبل العملاء بعد إجراء التحليل الوظيفي أو كما هو مذكور بالتوصيف المطلوب من قبل العميل ، خدمات التعيين و التوظيف التي يعتمد فيها العميل علي أسس خبراتنا في إنتقاء العنصر المناسب و كذلك التعامل مع جميع السلطات الحكومية المعنية ومكتب العمل للتشريعات المطلوبة وكل في ظل مجموعة القيم والمبادئ التوجيهية التي تشكل جزءًا لا يتجزأ من ثقافة عملنا                                        \n                                        </p>', '2023-08-05 09:30:20', '2023-08-05 09:30:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_candidates`
--

CREATE TABLE `featured_candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag1_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag1_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag1_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag2_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag2_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag2_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_candidates`
--

INSERT INTO `featured_candidates` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `tag1_icon`, `tag1_ar`, `tag1_en`, `tag2_icon`, `tag2_ar`, `tag2_en`, `created_at`, `updated_at`, `is_published`) VALUES
(1, 'خدمات التعيين', 'Recruitment Services', 'نحن نبحث وننتقي المميزين من قواعد البيانات الخاصة بنا ، ونقوم بجدولة المقابلات وصولا لعملية التوظيف والمتابعة', 'Fetch talants from our Database, schedule interviews , Hiring Process and follow up', 'ri-grid-line', 'كافة التخصصات', 'All Majors', 'ri-map-pin-range-line', 'تغطية لكل الإختيارات', 'Large scale of choices', NULL, NULL, 1),
(2, 'إدارة الرواتب', 'Payroll Operations', 'احتساب الرواتب ، بيان الراتب التفصيلي ، كشوفات حسابات الرواتب و التحويلات ، التأمينات الحكومية و الخاصة ، عمليات الموظفين و التقارير الإحصائية ... وغيرها الكثير', 'Calculation, Salary Slips, Tax handling , Social & private Insurance, Personnel Ops., Reports ..etc.', 'ri-calculator-line', 'احتساب الرواتب', 'Payroll Calculations', 'ri-pie-chart-line', 'التقارير و التسويات المالية', 'Reports & Consulidations', NULL, NULL, 1),
(3, 'التعهيد - الإستعانة بالتعينات الخارجية', 'Outsourcing Services', 'توفير موارد مساعدة من السوق المحلي ،الإقليمي و الدولي ، توفير خدمات الرواتب لهم ، برنامج جوال للموظف ، بيان الراتب ، تحويلات الرواتب ، تحمل جميع الإلتزامات الحكومية وغيرها تجاه المعين نيابة عن شركتك', 'Local assets, Expat, Affording Salary slips, Mobile app, Tax, Social & private Insurance, Follow up ..etc.', 'ri-shield-user-line', 'تجنب مخاطر التعيين', 'No Hiring Risk', 'ri-wallet-3-line', 'توفير النفقات و المصاريف', 'Save Money', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_banner_content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_banner_content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_banner_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_header_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_header_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_footer_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_footer_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `years_exper` int(11) NOT NULL,
  `expert_at_service` int(11) NOT NULL,
  `why_first_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_works_header_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_works_header_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_works_Body_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_works_Body_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_works_footer_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_works_footer_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_candidates_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_candidates_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_candidates_content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_candidates_content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_applicants_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_applicants_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_applicants_content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_applicants_content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `main_banner_content_ar`, `main_banner_content_en`, `main_banner_link`, `about_title_ar`, `about_title_en`, `about_header_ar`, `about_header_en`, `about_footer_ar`, `about_footer_en`, `years_exper`, `expert_at_service`, `why_first_link`, `how_works_header_ar`, `how_works_header_en`, `how_works_Body_ar`, `how_works_Body_en`, `how_works_footer_ar`, `how_works_footer_en`, `featured_candidates_title_ar`, `featured_candidates_title_en`, `featured_candidates_content_ar`, `featured_candidates_content_en`, `job_applicants_title_ar`, `job_applicants_title_en`, `job_applicants_content_ar`, `job_applicants_content_en`, `partner_content_ar`, `partner_content_en`, `created_at`, `updated_at`) VALUES
(1, 'مهمتنا منذ نشأة و تأسيس الشركة وطوال سنوات العمل التي خدمنا فيها شركائنا بالنجاح هي : تقديم خدمات عالية الجودة بأسعار تنافسية لجميع المؤسسات بمختلف التخصصات', 'Our mission since foundation and throughout our years of operation is: “providing high end quality services at competitive prices.”', '#', 'شريكك الخبير بالموارد البشرية', 'Is Your Trustworthy HR Partner', 'تأسست شركة المصرية الأولي في عام 1986 ، وهي تخدم قطاعات الموارد البشرية في مجالات شتي كالطاقة والعمليات والاتصالات والطيران وغيرها من الصناعات و الأعمال التجارية في مصر وبالشرق الأوسط ', 'Founded in 1986, First Egyptian Engineering (FEE) has been serving the energy, process, telecom, airline and other industries in Egypt and the Middle East. ', 'نحن نتشرف بتقديم مجموعة واسعة من خدمات الموارد البشرية بما في ذلك التوظيف و خدمات إدارة الرواتب والاستعانة بالخبراء و الإستشاريين في كافة المجالات المختلفة ، بما في ذلك الموظفين الوطنيين والأجانب الذين يعملون لصالح عملائنا الدوليين ', 'We provide a wide range of HR services including recruitment and outsourcing, These include national as well as expat personnel working for our international clients', 35, 100, 'https://www.youtube.com/watch?v=ODfy2YIKS1M', 'نحن نتشرف بتقديم خدماتنا لجناحي نظام الموارد البشرية لجميع المؤسسات', 'We provide our services to serve both parties of the HR Community ', 'أصحاب و رواد الأعمال الذين يريدون خدمات إدارة الرواتب و خدمات التعيين ، كذلك الإستعانة بالمصادر الخارجية دون مخاطرة ', 'Employeers who are seeking outsourcing HR services, recruitment and outsource hiring ', 'الباحثين عن تحديات جديدة بسوق العمل من الجاديين الذين يسعون للحصول علي فرص تبرز مهاراتهم وتنمي قدراتهم', 'Job Seekers who try to connect with employeers that need thier experties and talent', 'نحن ننتقي لك المهارة الخبرات التي تلاقي طموحاتك', 'Find Talent From The Featured Ones For Your Job', 'من الضروري لأي منظمة أن تتقن كشوف المرتبات وعمليات الموظفين التي غالبًا ما تكون معقدة وتحتمل أن تكون محفوفة بالمخاطر ،\n                    الاستعانة بمصادر خارجية و الخبراء بمجال التعيينات تمكن المنظمة من تقليل المخاطر والوقت والمال وضمان أمن البيانات والتعامل الخبير مع هذه الوظائف', 'It is imperative for any organization to perfect its payroll and personnel operations which are often complex and potentially risky,\n                    Outsourcing enables the organization to minimize its risk, time, money and ensure data security and expert handling of these functions.', 'تستطيع الآن بناء سيرتك الذاتية بواسطة خبراءنا لفرص أفضل', 'Build Your Professional Resume With The Help Of Expert', 'سيقوم بدعمك خبراء المصرية الأولي لبناء سيرتك الذاتية في خطوات قليلة حتى يتمكن أي صاحب عمل من العثور عليك والتواصل معك من خلالنا ، يتم إبراز مهاراتك الخاصة والمشاريع التي شاركت فيها ومجال خبرتك من خلال برمجية العلامات الذكية', 'First Egyptian experts will support you to build your C.V. in few steps so that any employeer can find and get conected with you through us, your special skill talents, projects that you participate in and your area of experties are highlighted through our smart tags.', 'نحن نؤمن بأن عملائنا هم شركاؤنا في النجاح ، ونعتقد أنه من أجل تزويدهم بعرض خدمة لا تشوبه شائبة ، يجب أن يكونوا محور كل مبادرة وعملية نقوم بها. نبدأ بالتعرف علي إحتياجاتهم وتفاصيل عملهم بدقة ومن هنا تكون نقطة إنطلاق حلولنا وخدماتنا المقترحة.', 'We believe that our clients are our partners of success, We believe that in order to provide them with a flawless service offering, they have to be the focus of our every initiative and operation. We start with recognizing thier needs and from there stem our proposed solutions and services.', '2023-08-02 14:36:19', '2023-08-03 08:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `income_taxes`
--

CREATE TABLE `income_taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_exemption` decimal(8,2) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `income_taxes`
--

INSERT INTO `income_taxes` (`id`, `name_ar`, `name_en`, `personal_exemption`, `created_at`, `updated_at`) VALUES
(1, '188/ 23', '188 / 23', '15000.00', '2023-09-04 10:03:35', '2023-09-04 10:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `income_tax_layers`
--

CREATE TABLE `income_tax_layers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `min` double NOT NULL DEFAULT 0,
  `max` double NOT NULL DEFAULT 0,
  `net_min` double NOT NULL DEFAULT 0,
  `net_max` double NOT NULL DEFAULT 0,
  `layer_type_id` bigint(20) UNSIGNED NOT NULL,
  `income_tax_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `income_tax_layers`
--

INSERT INTO `income_tax_layers` (`id`, `min`, `max`, `net_min`, `net_max`, `layer_type_id`, `income_tax_id`, `created_at`, `updated_at`) VALUES
(1, 0, 600000, 0, 473025, 2, 1, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(2, 600000, 700000, 473025, 547500, 2, 1, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(3, 700000, 800000, 547500, 620250, 2, 1, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(4, 800000, 900000, 620250, 693000, 2, 1, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(5, 900000, 1200000, 693000, 915000, 2, 1, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(6, 1200000, 999999999, 915000, 725004999.275, 2, 1, '2023-09-04 10:03:35', '2023-09-04 10:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `income_tax_layer_slices`
--

CREATE TABLE `income_tax_layer_slices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `income_tax_id` bigint(20) UNSIGNED NOT NULL,
  `income_tax_layer_id` bigint(20) UNSIGNED NOT NULL,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'one_time/reccuring',
  `from` double NOT NULL DEFAULT 0,
  `to` double NOT NULL DEFAULT 0,
  `rate` double NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `ratio` double NOT NULL DEFAULT 0,
  `max_tax_value` double NOT NULL DEFAULT 0,
  `slice_net_value` double NOT NULL DEFAULT 0,
  `minimum_net` double NOT NULL DEFAULT 0,
  `maximum_net` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `income_tax_layer_slices`
--

INSERT INTO `income_tax_layer_slices` (`id`, `income_tax_id`, `income_tax_layer_id`, `discount_type`, `from`, `to`, `rate`, `discount`, `ratio`, `max_tax_value`, `slice_net_value`, `minimum_net`, `maximum_net`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '', 0, 21000, 0, 0, 0, 0, 21000, 0, 21000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(2, 1, 1, '', 21000, 30000, 2.5, 0, 2.5641025641026, 225, 29775, 21000, 29775, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(3, 1, 1, '', 30000, 45000, 10, 0, 11.111111111111, 1500, 43275, 29775, 43275, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(4, 1, 1, '', 45000, 60000, 15, 0, 17.647058823529, 2250, 56250, 43275, 56025, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(5, 1, 1, '', 60000, 200000, 20, 0, 25, 28000, 169750, 56025, 168025, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(6, 1, 1, '', 200000, 400000, 22.5, 0, 29.032258064516, 45000, 327000, 168025, 323025, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(7, 1, 1, '', 400000, 600000, 25, 0, 33.333333333333, 50000, 505000, 323025, 473025, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(8, 1, 2, '', 0, 30000, 2.5, 0, 2.5641025641026, 750, 29250, 0, 29250, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(9, 1, 2, '', 30000, 45000, 10, 0, 11.111111111111, 1500, 42750, 29250, 42750, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(10, 1, 2, '', 45000, 60000, 15, 0, 17.647058823529, 2250, 56250, 42750, 55500, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(11, 1, 2, '', 60000, 200000, 20, 0, 25, 28000, 169750, 55500, 167500, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(12, 1, 2, '', 200000, 400000, 22.5, 0, 29.032258064516, 45000, 327000, 167500, 322500, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(13, 1, 2, '', 400000, 700000, 25, 0, 33.333333333333, 75000, 580000, 322500, 547500, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(14, 1, 3, '', 0, 45000, 10, 0, 11.111111111111, 4500, 40500, 0, 40500, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(15, 1, 3, '', 45000, 60000, 15, 0, 17.647058823529, 2250, 53250, 40500, 53250, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(16, 1, 3, '', 60000, 200000, 20, 0, 25, 28000, 169750, 53250, 165250, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(17, 1, 3, '', 200000, 400000, 22.5, 0, 29.032258064516, 45000, 327000, 165250, 320250, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(18, 1, 3, '', 400000, 800000, 25, 0, 33.333333333333, 100000, 655000, 320250, 620250, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(19, 1, 4, '', 0, 60000, 15, 0, 17.647058823529, 9000, 51000, 0, 51000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(20, 1, 4, '', 60000, 200000, 20, 0, 25, 28000, 163000, 51000, 163000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(21, 1, 4, '', 200000, 400000, 22.5, 0, 29.032258064516, 45000, 327000, 163000, 318000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(22, 1, 4, '', 400000, 900000, 25, 0, 33.333333333333, 125000, 730000, 318000, 693000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(23, 1, 5, '', 0, 200000, 20, 0, 25, 40000, 160000, 0, 160000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(24, 1, 5, '', 200000, 400000, 22.5, 0, 29.032258064516, 45000, 315000, 160000, 315000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(25, 1, 5, '', 400000, 1200000, 25, 0, 33.333333333333, 200000, 955000, 315000, 915000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(26, 1, 6, '', 0, 200000, 25, 0, 33.333333333333, 50000, 150000, 0, 150000, '2023-09-04 10:03:35', '2023-09-04 10:03:35'),
(27, 1, 6, '', 200000, 999999999, 27.5, 0, 37.931034482759, 274944999.725, 725004999.275, 150000, 725004999.275, '2023-09-04 10:03:35', '2023-09-04 10:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `layer_types`
--

CREATE TABLE `layer_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layer_types`
--

INSERT INTO `layer_types` (`id`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'نسبة ثابته', 'Fixed Rate', NULL, NULL),
(2, 'تصاعدية', 'Ascending Layers', NULL, NULL),
(3, 'تنازلية', 'Descending Layers', NULL, NULL),
(4, 'مختلطة', 'Mixed Layers ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Service', 1, 'a8fc0ee8-40b6-4553-9369-b3c4dafc06e7', 'services', 'category-2', 'EWMKI4j4owzOWSxwG9tMbJykQjU9iY-metaY2F0ZWdvcnktMi5wbmc=-.png', 'image/png', 'public', 'public', 7163, '[]', '[]', '[]', '[]', 1, '2023-08-01 07:53:11', '2023-08-01 07:53:11'),
(2, 'App\\Models\\Service', 2, '97340181-e0cc-4ec5-a0e3-7869e4affa76', 'services', 'category-3', 'Wa3C0J1iPgkmDDoPVdwEocD1WsKHsE-metaY2F0ZWdvcnktMy5wbmc=-.png', 'image/png', 'public', 'public', 6545, '[]', '[]', '[]', '[]', 2, '2023-08-01 07:53:41', '2023-08-01 07:53:41'),
(3, 'App\\Models\\Service', 3, '65728e43-0a30-4e08-979a-e73938dd9b4f', 'services', 'category-4', 'W0UN0VcuCqVKNLS5kXh7hbsR5skTEK-metaY2F0ZWdvcnktNC5wbmc=-.png', 'image/png', 'public', 'public', 7857, '[]', '[]', '[]', '[]', 3, '2023-08-01 07:54:09', '2023-08-01 07:54:09'),
(4, 'App\\Models\\Service', 4, '61a8e893-1e99-4d76-8566-e5a240bd8ac1', 'services', 'category-6', 'K2lDysRyei0Xez63aFwjvdCHkAa4dh-metaY2F0ZWdvcnktNi5wbmc=-.png', 'image/png', 'public', 'public', 7452, '[]', '[]', '[]', '[]', 4, '2023-08-01 07:54:44', '2023-08-01 07:54:44'),
(5, 'App\\Models\\Service', 5, '168bddd0-9bf1-4ca4-87bf-02550562336f', 'services', 'category-7', 'IXp4VIGiCxkYJp3SgjnrFA7ufE93Xg-metaY2F0ZWdvcnktNy5wbmc=-.png', 'image/png', 'public', 'public', 6724, '[]', '[]', '[]', '[]', 5, '2023-08-01 07:55:16', '2023-08-01 07:55:16'),
(6, 'App\\Models\\PartenerReview', 1, '2ef18ca5-0b47-4022-99ae-caa43f12a4a0', 'partener_reviews', 'review-1', 'T1twKubsqej6LBwYc4fEvkq8fRMnWv-metacmV2aWV3LTEuanBn-.jpg', 'image/webp', 'public', 'public', 272, '[]', '[]', '[]', '[]', 6, '2023-08-01 07:59:11', '2023-08-01 07:59:11'),
(7, 'App\\Models\\PartenerReview', 2, '8c424cbd-c4cf-45fe-8f44-cc4f13be1d4a', 'partener_reviews', 'review-2', 'dxYiXfVmLsP0tbpCfhcCuHWBGektwW-metacmV2aWV3LTIuanBn-.jpg', 'image/webp', 'public', 'public', 272, '[]', '[]', '[]', '[]', 7, '2023-08-01 08:00:54', '2023-08-01 08:00:54'),
(8, 'App\\Models\\FeaturedCandidate', 1, '11a904e0-5314-43b6-aead-b8080417cf48', 'featured_candidate', 'recruitment', 'wpX1uSnvjCkof3Bv7Fygk6Q06OGAUK-metacmVjcnVpdG1lbnQuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 37096, '[]', '[]', '[]', '[]', 8, '2023-08-02 15:05:03', '2023-08-02 15:05:03'),
(9, 'App\\Models\\FeaturedCandidate', 2, '66dd1910-2a48-4a5b-8563-13a08db068b8', 'featured_candidate', 'Payroll', '7xuidDjNTTBGvskYWWqFrT9XUYKKbB-metaUGF5cm9sbC5qcGVn-.jpg', 'image/jpeg', 'public', 'public', 9403, '[]', '[]', '[]', '[]', 9, '2023-08-02 15:05:29', '2023-08-02 15:05:29'),
(10, 'App\\Models\\FeaturedCandidate', 3, '6bb1fcd5-eea2-4d57-9466-4578475a68c6', 'featured_candidate', 'outsourcing', 'oopzi20gIj8psh3fs1GcyoenbZD9DX-metab3V0c291cmNpbmcuanBlZw==-.jpg', 'image/jpeg', 'public', 'public', 3487, '[]', '[]', '[]', '[]', 10, '2023-08-02 15:05:45', '2023-08-02 15:05:45'),
(11, 'App\\Models\\HomePage', 1, '950eae4d-9b19-44f2-88f9-86344a238eb5', 'Partner', 'Semines-removebg-preview', 'sNXn8n0ajqjAYjTOVmfsfRNzt7iIKn-metaU2VtaW5lcy1yZW1vdmViZy1wcmV2aWV3LnBuZw==-.png', 'image/png', 'public', 'public', 10490, '[]', '[]', '[]', '[]', 1, '2023-08-03 04:35:30', '2023-08-03 04:35:30'),
(12, 'App\\Models\\HomePage', 1, '64c44f25-92d0-42cb-9731-a198cdbdfe85', 'Partner', 'total', 'svafQzvWSM1li1707u1Jhtzn3pNs6T-metadG90YWwucG5n-.png', 'image/png', 'public', 'public', 24289, '[]', '[]', '[]', '[]', 8, '2023-08-03 04:35:30', '2023-08-10 09:08:59'),
(13, 'App\\Models\\HomePage', 1, '692193b6-6057-49a8-a7ec-a43ce5bf89c2', 'Partner', 'reuters-removebg-preview', 'DYkajf49rDlJh41CmvJ1kvjWbCg4VE-metacmV1dGVycy1yZW1vdmViZy1wcmV2aWV3LnBuZw==-.png', 'image/png', 'public', 'public', 9958, '[]', '[]', '[]', '[]', 2, '2023-08-03 04:35:30', '2023-08-03 04:47:33'),
(14, 'App\\Models\\HomePage', 1, 'c533c8d8-446d-477f-8365-ea983d980d71', 'Partner', 'dhl', 'Ic13NIq3RuxDN5ntFHZgD8SL0zdpm6-metaZGhsLnBuZw==-.png', 'image/png', 'public', 'public', 3985, '[]', '[]', '[]', '[]', 4, '2023-08-03 04:35:30', '2023-08-03 04:35:30'),
(15, 'App\\Models\\HomePage', 1, '3d6c7bc6-b5a6-442d-8394-aef626cfadeb', 'Partner', 'cib', 'bfNqwEW08BSKBqxvGSP4Vn6EV1M7gF-metaY2liLnBuZw==-.png', 'image/png', 'public', 'public', 18118, '[]', '[]', '[]', '[]', 5, '2023-08-03 04:35:30', '2023-08-10 09:08:59'),
(16, 'App\\Models\\HomePage', 1, '76414dbe-3642-4e00-935c-7af1f75e5363', 'Partner', 'airfrance', 'qhAZeqbZvXBwrG7iFMxqSeM0X1leKF-metaYWlyZnJhbmNlLnBuZw==-.png', 'image/png', 'public', 'public', 9679, '[]', '[]', '[]', '[]', 6, '2023-08-03 04:35:30', '2023-08-10 09:08:59'),
(17, 'App\\Models\\HomePage', 1, '3638e209-c601-4347-81e1-bf6889a68a59', 'Partner', 'bp', 'xLOdUsnVAoqNMIxVxkUjakz9fCrcbL-metaYnAucG5n-.png', 'image/png', 'public', 'public', 23309, '[]', '[]', '[]', '[]', 7, '2023-08-03 04:35:30', '2023-08-10 09:08:59'),
(18, 'App\\Models\\HomePage', 1, 'f8223e46-5821-4d3e-be8b-8b8fc3528706', 'Partner', 'vodafone', '8DYj9u3zhXmfhkqfeCYNEv7rImMiSY-metadm9kYWZvbmUucG5n-.png', 'image/png', 'public', 'public', 10320, '[]', '[]', '[]', '[]', 3, '2023-08-03 04:35:30', '2023-08-03 04:47:33'),
(20, 'App\\Models\\About', 1, '5a671a1a-915a-494d-8152-d71ac3de9440', 'team_work', 'blog-details', 'hMemYqeTTxhR4LJZjjYTzYnpWU60g7-metaYmxvZy1kZXRhaWxzLmpwZw==-.jpg', 'image/jpeg', 'public', 'public', 19506, '[]', '[]', '[]', '[]', 11, '2023-08-05 10:28:35', '2023-08-05 10:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_30_163009_create_settings_table', 2),
(7, '2023_07_30_182145_create_subscribes_table', 3),
(11, '2023_07_31_071751_create_partener_reviews_table', 4),
(12, '2023_07_31_071900_create_services_table', 4),
(13, '2023_07_31_075919_create_media_table', 5),
(16, '2023_08_01_133126_create_home_pages_table', 6),
(17, '2023_08_02_152012_create_featured_candidates_table', 6),
(20, '2023_08_03_155935_create_abouts_table', 8),
(62, '2023_08_06_113815_create_layer_types_table', 9),
(63, '2023_08_06_113818_create_income_taxes_table', 9),
(64, '2023_08_06_113839_create_income_tax_layers_table', 9),
(65, '2023_08_06_113858_create_income_tax_layer_slices_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `partener_reviews`
--

CREATE TABLE `partener_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postion_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postion_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partener_reviews`
--

INSERT INTO `partener_reviews` (`id`, `name_ar`, `name_en`, `postion_ar`, `postion_en`, `review_ar`, `review_en`, `rate`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Camelia Renesa', 'Camelia Renesa', 'IT Specialist', 'IT Specialist', 'المصرية الاولي تساعدني كثيرًا في الحصول على وظيفتي الأولى وتحقيق هدفي يدفعني أيضًا إلى إثبات نفسي ، وأنا ممتن حقًا للمصرية الاولي.', 'First Egyptian helps me a lot to get my first job & achieve my goal also pushes me to establish myself, I\'m really grateful to First Egyptian.', 5, 1, '2023-08-01 07:59:11', '2023-08-01 07:59:11'),
(2, 'Jennifer Rose', 'Jennifer Rose', 'Digital Marketer', 'Digital Marketer', 'المصرية الاولي تساعدني كثيرًا في الحصول على وظيفتي الأولى وتحقيق هدفي يدفعني أيضًا إلى إثبات نفسي ، وأنا ممتن حقًا للمصرية الاولي.', 'First Egyptian helps me a lot to get my first job & achieve my goal also pushes me to establish myself, I\'m really grateful to First Egyptian.', 4, 1, '2023-08-01 08:00:54', '2023-08-01 08:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `slug`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'إدارة الأجور و الرواتب', 'Payroll Administration', 'payroll-administration', 1, '2023-08-01 07:53:11', '2023-08-06 07:43:12'),
(2, 'خدمات التعيين والتوظيف', 'Recruitment Services', 'recruitment-services', 1, '2023-08-01 07:53:41', '2023-08-01 07:53:41'),
(3, 'الإستعانة بالموارد المحلية', 'Local Outsourcing', 'local-outsourcing', 1, '2023-08-01 07:54:09', '2023-08-01 07:55:26'),
(4, 'الإستعانة بالموارد الأجنبية', 'Expat Outsourcing', 'expat-outsourcing', 1, '2023-08-01 07:54:44', '2023-08-01 07:54:44'),
(5, 'إدارة خدمات الموظفين', 'Personnel Services', 'personnel-services', 1, '2023-08-01 07:55:16', '2023-08-01 07:55:16'),
(6, 'تنتت', 'test', 'test', 0, '2023-08-01 10:23:38', '2023-08-01 10:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `about_ar`, `about_en`, `fax`, `address_ar`, `address_en`, `map`, `twitter`, `facebook`, `linkedin`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'info@first-egyptian.com', '0020233462474', 'رؤية الشركة المصرية الأولي ، تتمحور حول تحقيق الريادة داخل الأسواق من خلال تقديم خدمات الموارد البشرية حيث وضعنا معيارًا لتعهيد القوى العاملة وخدمتها لتمكين عملائنا وشركاء نجاحنا من تحقيق أهدافهم وتعزيز كفاءة عملهم بقوة وثبات', 'At First, we envision achieving market leadership in the provision of HR services where we’d set the benchmark for manpower outsourcing and enable our clients to achieve their objectives and enhance their work efficiency.', '(+20)-2-3346-2474', ' شارع جامعة الدول العربية ، المهندسين ، القاهرة', '5 Gameat El Dowal El Arabia Street, Mohandessin, Cairo, Egypt', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.330248383464!2d31.200968274905293!3d30.056066818021087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458413be80d13b1%3A0x49ed5c2df1aac352!2z2KfZhNi02LHZg9ipINin2YTZhdi12LHZitipINin2YTYp9mI2YTZiSDZhNmE2YfZhtiv2LPYqSDZgdix2LPYqi0gRmlyc3QgRWd5cHRpYW4gRW5naW5lZXJpbmc!5e0!3m2!1sen!2seg!4v1690287534692!5m2!1sen!2seg\" width=\"300\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'https://www.instagram.com/', NULL, '2023-07-30 13:53:18', '2023-08-01 05:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'th@gmail.com', '2023-07-30 15:45:23', '2023-07-30 15:45:23'),
(3, 'sys_Admin@gmail.com', '2023-07-30 15:56:58', '2023-07-30 15:56:58'),
(4, 'th@gmail.com', '2023-08-01 05:07:30', '2023-08-01 05:07:30'),
(5, 'aaa@gmail.com', '2023-08-01 05:07:56', '2023-08-01 05:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$BNAieQvx2LtVKp03SAcW0OwPzP18KUxQD95RNDLBKsOwfOP3ua/KK', NULL, NULL, '2023-07-29 08:37:32', '2023-07-29 08:37:32'),
(2, 'th', 'th@gmail.com', NULL, '$2y$10$dnCI2F7Cs0MTdxU1jTbomOuTZ4lTLoq8meaH2w83b4N/M4mIcFaz2', NULL, '2023-07-29 08:44:53', '2023-07-29 08:38:35', '2023-07-29 08:44:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_candidates`
--
ALTER TABLE `featured_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_taxes`
--
ALTER TABLE `income_taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_tax_layers`
--
ALTER TABLE `income_tax_layers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `income_tax_layers_layer_type_id_foreign` (`layer_type_id`),
  ADD KEY `income_tax_layers_income_tax_id_foreign` (`income_tax_id`);

--
-- Indexes for table `income_tax_layer_slices`
--
ALTER TABLE `income_tax_layer_slices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `income_tax_layer_slices_income_tax_id_foreign` (`income_tax_id`),
  ADD KEY `income_tax_layer_slices_income_tax_layer_id_foreign` (`income_tax_layer_id`);

--
-- Indexes for table `layer_types`
--
ALTER TABLE `layer_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partener_reviews`
--
ALTER TABLE `partener_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_candidates`
--
ALTER TABLE `featured_candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `income_taxes`
--
ALTER TABLE `income_taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `income_tax_layers`
--
ALTER TABLE `income_tax_layers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `income_tax_layer_slices`
--
ALTER TABLE `income_tax_layer_slices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `layer_types`
--
ALTER TABLE `layer_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `partener_reviews`
--
ALTER TABLE `partener_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `income_tax_layers`
--
ALTER TABLE `income_tax_layers`
  ADD CONSTRAINT `income_tax_layers_income_tax_id_foreign` FOREIGN KEY (`income_tax_id`) REFERENCES `income_taxes` (`id`),
  ADD CONSTRAINT `income_tax_layers_layer_type_id_foreign` FOREIGN KEY (`layer_type_id`) REFERENCES `layer_types` (`id`);

--
-- Constraints for table `income_tax_layer_slices`
--
ALTER TABLE `income_tax_layer_slices`
  ADD CONSTRAINT `income_tax_layer_slices_income_tax_id_foreign` FOREIGN KEY (`income_tax_id`) REFERENCES `income_taxes` (`id`),
  ADD CONSTRAINT `income_tax_layer_slices_income_tax_layer_id_foreign` FOREIGN KEY (`income_tax_layer_id`) REFERENCES `income_tax_layers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
