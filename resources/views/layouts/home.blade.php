<!doctype html>

<html lang="{{$lang}}" dir="{{$dir}}">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Author: first-egyptian, first egyptian , Business: hr , services: outsourcing , services: recruitment , services: payroll , services: payroll Calculation, services: job, Category: hr, employeers, job seekers">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset("assets/$dir/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/aos.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/animate.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/meanmenu.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/flaticon.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/remixicon.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/odometer.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/owl.carousel.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/owl.theme.default.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/magnific-popup.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/fancybox.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/selectize.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/metismenu.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/simplebar.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/dropzone.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/style.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/navbar.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/footer.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/dashboard.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$dir/css/dark.css")}}">
		<link rel="stylesheet" href="{{asset("assets/$dir/css/responsive.css")}}">
        
        @if($dir == 'rtl')
            <link rel="stylesheet" href="{{asset("assets/$dir/css/rtl.css")}}">
        @endif
		
		<title>{{ trans('home.company') }}</title>

        <link rel="icon" type="image/png" href="{{asset("assets/$dir/images/fav.png")}}">
        <style>
                .review-area {
                    background-image: url({{asset("assets/$dir/images/review/review-bg.jpg")}});
                }
                @font-face {
                    font-family: "flaticon";
                    src: url('{{asset("assets/$dir/fonts/flaticon.ttf?10e8e1e7d1f5cd341e0d900fd834d828")}}') format("truetype"),
                    url('{{asset("assets/$dir/fonts/flaticon.woff?10e8e1e7d1f5cd341e0d900fd834d828")}}') format("woff"),
                    url('{{asset("assets/$dir/fonts/flaticon.woff2?10e8e1e7d1f5cd341e0d900fd834d828")}}') format("woff2"),
                    url('{{asset("assets/$dir/fonts/flaticon.eot?10e8e1e7d1f5cd341e0d900fd834d828#iefix")}}') format("embedded-opentype"),
                    url('{{asset("assets/$dir/fonts/flaticon.svg?10e8e1e7d1f5cd341e0d900fd834d828#flaticon")}}') format("svg");
                    }
                @font-face {
                    font-family: "remixicon";
                    src: url('{{asset("assets/$dir/fonts/remixicon.eot?t=1590207869815")}}'); /* IE9*/
                    src: url('{{asset("assets/$dir/fonts/remixicon.eot?t=1590207869815#iefix")}}') format('embedded-opentype'), /* IE6-IE8 */
                    url('{{asset("assets/$dir/fonts/remixicon.woff2?t=1590207869815")}}') format("woff2"),
                    url('{{asset("assets/$dir/fonts/remixicon.woff?t=1590207869815")}}') format("woff"),
                    url('{{asset("assets/$dir/fonts/remixicon.ttf?t=1590207869815")}}') format('truetype'), /* chrome, firefox, opera, Safari, Android, iOS 4.2+*/
                    url('{{asset("assets/$dir/fonts/remixicon.svg?t=1590207869815#remixicon")}}') format('svg'); /* iOS 4.1- */
                    font-display: swap;
                    }
                .review-info .image{
                    width: 100px;
                    height: 100px;
                }
        </style>
    </head>

    <body>
        <!-- Start Preloader Area -->
        <!-- <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div> -->
        <!-- End Preloader Area -->

        <!-- Start Topbar Area -->
        <div class="topbar-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <ul class="topbar-social-list">
                            <li>
                                <a href="{{$settings->facebook}}" target="_blank"><i class="flaticon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{$settings->twitter}}" target="_blank"><i class="flaticon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{$settings->instagram}}" target="_blank"><i class="flaticon-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{$settings->linkedin}}" target="_blank"><i class="flaticon-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <ul class="topbar-action">
                            <li>
                                <a href="profile-authentication.html"><i class="flaticon-padlock"></i> {{ trans('home.login') }}</a>
                            </li>

                            <li>
                                <a href="profile-authentication.html"><i class="flaticon-user"></i> {{ trans('home.register') }}</a>
                            </li>

                            <li class="dropdown language-option">
                                <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-worldwide"></i>
                                    <span class="lang-namee">{{($dir == 'rtl')?'العربيّة':'English'}}</span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                                    <a class="dropdown-item" href="{{ route('change-lang',['lang'=>'en']) }}">
                                        <img src="{{asset("assets/$dir/images/uk.png")}}" alt="flag">
                                        English
                                    </a>
                                    <a class="dropdown-item" href="{{ route('change-lang',['lang'=>'ar']) }}">
                                        <img src="{{asset("assets/$dir/images/egypt.png")}}" alt="flag">
                                        العربيّة
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset("assets/$dir/images/logo.png")}}" class="black-logo" alt="image">
                                <img src="{{asset("assets/$dir/images/logo-2.png")}}" class="white-logo" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset("assets/$dir/images/logo.png")}}" class="black-logo" alt="image">
                            <img src="{{asset("assets/$dir/images/logo-2.png")}}" class="white-logo" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <!-- <a href="#" class="nav-link active">
                                        Home 
                                    </a> -->
                                <li class="nav-item">
                                    <a href="#about" class="nav-link">
                                        {{ trans('home.about') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#why" class="nav-link">
                                        {{ trans('home.why') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#how" class="nav-link">
                                        {{ trans('home.how') }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#employeers" class="nav-link">{{ trans('home.employeers') }}</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#applicants" class="nav-link">{{ trans('home.applicants') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#services" class="nav-link">
                                        {{ trans('home.services') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#partners" class="nav-link">
                                        {{ trans('home.partners') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#reviews" class="nav-link">
                                        {{ trans('home.reviews') }}
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#subscribe" class="nav-link">{{ trans('home.subscribe') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#contact" class="nav-link">{{ trans('home.contact') }}</a>
                                </li>
                            </ul>

                            <!-- <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="dashboard-post-job.html" class="default-btn">Post A Job <i class="flaticon-plus"></i></a>
                                </div>
                            </div> -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        
        <!-- Start Main Banner Area -->
        <div class="main-banner-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="main-banner-text-with-image">
                            <img src="{{asset("assets/$dir/images/main-banner/banner-one/logo-text-gif.gif")}}" alt="gif">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500">
                        <div class="main-banner-content" data-speed="0.06" data-revert="true">
                            @if(($dir == 'rtl'))
                            <h1>{{ trans('home.the_perfect') }} <span style="color: #b42025;">{{ trans('home.hR_partner') }}</span>  {{ trans('home.your_business') }}</h1>
                            @else
                            <h1>{{ trans('home.the_perfect') }} </h1> <h1 style="color: #b42025;">{{ trans('home.hR_partner') }}</h1> <h1>  {{ trans('home.your_business') }}</h1>
                            @endif
                            <p>
                                Our mission since foundation and throughout our years of operation is: “providing high end quality services at competitive prices.”
                            </p>    
                            <div class="banner-btn">
                                <a href="#" class="default-btn">{{ trans('home.download_brochure') }}<i class="flaticon-list-1"></i></a>
                            </div>

                            <div class="layer-shape" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800">
                                <img src="{{asset("assets/$dir/images/main-banner/banner-one/layer.png")}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start About Area -->
        <div class="about-area pt-100" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500">
                            <img src="{{asset("assets/$dir/images/about/about-1.png")}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content" data-aos="fade-{{$direction}}" data-aos-delay="70" data-aos-duration="700">
                            <h3 style="color:#b42025;">{{ trans('home.company_first') }}</h3></b><h3> {{ trans('home.trustworthy_hR_partner') }}</h3>
                            <p>
                                Founded in 1986, First Egyptian Engineering (FEE) has been serving the energy, process, telecom, airline and other industries in Egypt and the Middle East. </p>
                            <p>
                                We provide a wide range of HR services including recruitment and outsourcing, These include national as well as expat personnel working for our international clients
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                    <div class="about-fun-fact">
                                        <h3>
                                            <span class="odometer" data-count="35" dir={{($dir == 'rtl')?'ltr':''}}>00</span>
                                            <span class="sign-icon">+</span>
                                        </h3>
                                        <p>{{ trans('home.y_of_exper') }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                    <div class="about-fun-fact">
                                        <h3>
                                            <span class="odometer" data-count="100"  dir={{($dir == 'rtl')?'ltr':''}} >00</span>
                                            <span class="sign-icon">+</span>
                                        </h3>
                                        <p>{{ trans('home.expert_service') }}</p>
                                    </div>
                                </div>
                            </div>

                           <div class="about-btn">
                                <a href="about-us.html" class="default-btn">{{ trans('home.learn_about_us') }}<i class="flaticon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
        
        <!-- Start Why First Area-->
        <div class="play-video-area ptb-100" id="why">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="play-video-image">
                            <img src="{{asset("assets/$dir/images/play-video/play-video.jpeg")}}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="play-video-content">
                            <div class="play-btn">
                                <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                    <i class="flaticon-play-button-arrowhead"></i>
                                </a>
                            </div>
                            <h3>{{ trans('home.see_how') }} <span style="color:#b42025;">{{ trans('home.company') }}</span> {{ trans('home.support_you') }}</h3>

                            <div class="layer-shape">
                                <img src="{{asset("assets/$dir/images/play-video/layer.png")}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Why First Area -->

        <!-- Start How it works Area -->
        <div class="featured-candidates-area pt-100 pb-50" id="how">
            <!-- Start title Area -->
            <div class="container">
                <div class="section-title">
                    <h2>{{trans('home.how_works_area') }} <span style="color:#b42025;">{{ trans('home.company') }}</span> {{ trans('home.works') }}</h2>
                    <p>We provide our services to serve both parties of the HR Community </p>
                    <p>Employeers who are seeking outsourcing HR services, recruitment and outsource hiring </p> 
                    <p>Job Seekers who try to connect with employeers that need thier experties and talent</p>
                </div>
            </div>
            <!-- End title Area -->

            <!-- Start For Employeer Area -->
            <div class="container" id="employeers">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="featured-candidates-image">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                    <div class="image" data-aos="fade-{{$reverse_direction}}" data-aos-delay="50" data-aos-duration="500">
                                        <img src="{{asset("assets/$dir/images/featured-candidates/01.png")}}" alt="image">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                    <div class="image" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700">
                                        <img src="{{asset("assets/$dir/images/featured-candidates/02.png")}}" alt="image">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                    <div class="image" data-aos="fade-{{$direction}}" data-aos-delay="90" data-aos-duration="900">
                                        <img src="{{asset("assets/$dir/images/featured-candidates/03.png")}}" alt="image">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                    <div class="image" data-aos="fade-{{$reverse_direction}}" data-aos-delay="70" data-aos-duration="700">
                                        <img src="{{asset("assets/$dir/images/featured-candidates/04.png")}}" alt="image">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                    <div class="image" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800">
                                        <img src="{{asset("assets/$dir/images/featured-candidates/05.png")}}" alt="image">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                    <div class="image" data-aos="fade-{{$reverse_direction}}" data-aos-delay="90" data-aos-duration="900">
                                        <img src="{{asset("assets/$dir/images/featured-candidates/06.png")}}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="featured-candidates-item">
                            <div class="featured-candidates-content">
                                <h3>{{ trans('home.employeers') }}</h3>   
                                <h4>Find Talent From The Featured Ones For Your Job</h4>
                                <p>
                                    It is imperative for any organization to perfect its payroll and personnel operations which are often complex and potentially risky,
                                    Outsourcing enables the organization to minimize its risk, time, money and ensure data security and expert handling of these functions.
                                </p>

                                <!-- <div class="layer-shape" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">
                                    <img src="{{asset("assets/$dir/images/featured-candidates/layer.png")}}" alt="image">
                                </div> -->
                            </div>
    
                            <div class="featured-candidates-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="candidates-box-content">
                                            <div class="image">
                                                <a href="candidates-details-1.html"><img src="{{asset("assets/$dir/images/featured-candidates/recruitment.jpeg")}}" alt="image"></a>
                                            </div>

                                            <div class="content">
                                                <h3>
                                                    <a href="candidates-details-1.html">Recruitment Services</a>
                                                </h3>
                                                <span>Fetch talants from our Database, schedule interviews , Hiring Process and follow up</span>

                                                <div class="rating">
                                                    <!-- <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <i class="flaticon-star"></i>
                                                    <span>5 star service</span> -->
                                                </div>

                                                <ul class="job-info">
                                                    <li><i class="ri-grid-line"></i>All Majors</li>
                                                    <li><i class="ri-map-pin-range-line"></i>Large scale of choices</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="featured-candidates-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="candidates-box-content">
                                            <div class="image">
                                                <a href="candidates-details-1.html"><img src="{{asset("assets/$dir/images/featured-candidates/payroll.jpeg")}}" alt="image"></a>
                                            </div>

                                            <div class="content">
                                                <h3>
                                                    <a href="candidates-details-1.html">Payroll Operations</a>
                                                </h3>
                                                <span>Calculation, Salary Slips, Tax handling , Social & private Insurance, Personnel Ops., Reports ..etc.</span>

                                                <div class="rating">
                                                </div>

                                                <ul class="job-info">
                                                    <li><i class="ri-calculator-line"></i>Payroll Calculations</li>
                                                    <li><i class="ri-pie-chart-line"></i>Reports & Consulidations</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="featured-candidates-box">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="candidates-box-content">
                                            <div class="image">
                                                <a href="candidates-details-1.html"><img src="{{asset("assets/$dir/images/featured-candidates/outsourcing.jpeg")}}" alt="image"></a>
                                            </div>

                                            <div class="content">
                                                <h3>
                                                    <a href="candidates-details-1.html">Outsourcing Services</a>
                                                </h3>
                                                <span>Local assets, Expat, Affording Salary slips, Mobile app, Tax, Social & private Insurance, Follow up ..etc.</span>

                                                <div class="rating">
                                                </div>

                                                <ul class="job-info">
                                                    <li><i class="ri-shield-user-line"></i>No Hiring Risk</li>
                                                    <li><i class="ri-wallet-3-line"></i>Save Money</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="featured-candidates-btn">
                                <a href="candidates-2.html">{{ trans('home.view_all_Services') }}<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featured-candidates-shape">
                <img src="{{asset("assets/$dir/images/featured-candidates/shape-1.png")}}" alt="image">
            </div>
            <!-- End For Employeer Area -->

            <!-- Start For Job Applicants Area -->
            <div class="overview-area ptb-100" id="applicants">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-content {{($dir == 'rtl')?'pt-100':''}}">
                                <h3>{{ trans('home.job_applicants') }}</h3>
                                <h4>Build Your Professional Resume With The Help Of Expert</h4>
                                <p>First Egyptian experts will support you to build your C.V. in few steps so that any employeer can find and get conected with you through us, your special skill talents, projects that you participate in and your area of experties are highlighted through our smart tags.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="overview-image">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                        <div class="image" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500">
                                            <img src="{{asset("assets/$dir/images/overview/cv1.jpg")}}" alt="image">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                        <div class="image" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700">
                                            <img src="{{asset("assets/$dir/images/overview/cv2.jpg")}}" alt="image">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                        <div class="image" data-aos="fade-left" data-aos-delay="90" data-aos-duration="900">
                                            <img src="{{asset("assets/$dir/images/overview/cv3.jpg")}}" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overview-shape">
                    <img src="{{asset("assets/$dir/images/overview/shape.png")}}" alt="image">
                </div>

                <div class="job-seeker-area pt-100 pb-50">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-job-seeker-card">
                                <div class="seeker-image">
                                    <img src="{{asset("assets/$dir/images/job-seeker/seeker-1.png")}}" alt="image">
                                </div>
                                <h3>{{ trans('home.create_account') }}</h3>
                                
                                <div class="step">{{ trans('home.step_1') }}</div>
                            </div>

                            <div class="seeker-arrow-icon">
                                <img src="{{asset("assets/$dir/images/job-seeker/layer-1.png")}}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-job-seeker-card">
                                <div class="seeker-image">
                                    <img src="{{asset("assets/$dir/images/job-seeker/seeker-2.png")}}" alt="image">
                                </div>
                                <h3>{{ trans('home.submit_resume') }}</h3>
                                
                                <div class="step">{{ trans('home.step_2') }}</div>
                            </div>

                            <div class="seeker-arrow-icon">
                                <img src="{{asset("assets/$dir/images/job-seeker/layer-2.png")}}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-job-seeker-card">
                                <div class="seeker-image">
                                    <img src="{{asset("assets/$dir/images/job-seeker/seeker-3.png")}}" alt="image">
                                </div>
                                <h3>{{ trans('home.apply_jobs') }}</h3>
                                
                                <div class="step">{{ trans('home.step_3') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End For Job Applicants Area -->

        </div>
        <!-- End How it works Area -->

        <!-- Start Services Area -->
        <div class="top-category-area pt-100 pb-100" id="services">
            <div class="container">
                <div class="section-title-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-12">
                            <div class="title-content">
                                <h2>{{ trans('home.services') }}</h2>
                            </div>
                        </div>

                        <!-- <div class="col-lg-3 col-md-12">
                            <div class="title-btn">
                                <a href="job-listing-1.html" class="default-btn">View All Services <i class="flaticon-list-1"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>    

            <div class="container-fluid">
                <div class="top-category-slides owl-carousel owl-theme">
                    @foreach($services as $service)                        
                        <div class="top-category-card">
                            <div class="category-image">
                                <img src="{{$service->getFirstMediaUrl('services')}}" alt="image">
                            </div>
                            <h3><a href="#">{{$service->title}}</a> <span></span></h3>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- End Services Area -->

        <!-- Start Partner Area -->
        <div class="partner-area ptb-100" id="partners">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="partner-image">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-sm-4 col-md-4 col-6">
                                    <div class="image" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500">
                                        <a href="#" target="_blank"><img src="{{asset("assets/$dir/images/partner/bp.png")}}" alt="image"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-6">
                                    <div class="image" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700">
                                        <a href="#" target="_blank"><img src="{{asset("assets/$dir/images/partner/airfrance.png")}}" alt="image"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-6">
                                    <div class="image" data-aos="fade-left" data-aos-delay="90" data-aos-duration="900">
                                        <a href="#" target="_blank"><img src="{{asset("assets/$dir/images/partner/cib.png")}}" alt="image"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-6">
                                    <div class="image" data-aos="fade-right" data-aos-delay="70" data-aos-duration="700">
                                        <a href="#" target="_blank"><img src="{{asset("assets/$dir/images/partner/total.png")}}" alt="image"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-6">
                                    <div class="image" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800">
                                        <a href="#" target="_blank"><img src="{{asset("assets/$dir/images/partner/dhl.png")}}" alt="image"></a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-4 col-md-4 col-6">
                                    <div class="image" data-aos="fade-left" data-aos-delay="90" data-aos-duration="900">
                                        <a href="#" target="_blank"><img src="{{asset("assets/$dir/images/partner/vodafone.png")}}" alt="image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="partner-content">
                            <h3>{{ trans('home.partner_content_h3') }}</h3>
                            <p>
                                {{ trans('home.partner_content_p') }}
                            </p>
                            <div class="layer-shape">
                                <img src="{{asset("assets/$dir/images/partner/layer.png")}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

        <!-- Start Review Area -->
        <div class="review-area ptb-100" id="reviews">
            <div class="container">
                <div class="review-title">
                    <h2>{{ trans('home.partner_review') }}</h2>

                    <div class="layer-shape">
                        <img src="{{asset("assets/$dir/images/review/layer.png")}}" alt="image">
                    </div>
                </div>

              
                <div class="review-slides owl-carousel owl-theme">

                    @foreach($partenerReviews as $partener)
                        <div class="review-single-card">
                            <div class="review-info">
                                <div class="image">
                                    <img src="{{$partener->getFirstMediaUrl('partener_reviews')}}" alt="image">
                                </div>
                                <div class="content">
                                    <h3>{{$partener->name}}</h3>
                                    <span>{{$partener->postion}}</span>

                                    <div class="rating">
                                        @for($i=0;$i<$partener->rate;$i++)
                                            <i class="flaticon-star"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="review-content">
                                <i class="flaticon-left-quote"></i>
                                <p>{{$partener->review}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Review Area -->

        <!-- Start Newsletter Area -->
        <div class="newsletter-area ptb-100" id="subscribe">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="newsletter-content">
                            <h3>{{ trans('home.subscribe_h3') }}</h3>
                            <p>{{ trans('home.subscribe_p') }}</p>
                            <form class="newsletter-form" action="{{route('subscribe.store')}}" method="POST" >
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="input-newsletter" placeholder="{{trans('home.input_newsletter')}}" name="email" required autocomplete="off">
                                </div>

                                <button type="submit" class="default-btn">{{ trans('home.subscribe_btn') }} <i class="flaticon-send"></i></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>

                            <div class="layer-shape">
                                <img src="{{asset("assets/$dir/images/newsletter/layer.png")}}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="newsletter-image">
                            <img src="{{asset("assets/$dir/images/newsletter/newsletter-1.png")}}" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" alt="image">

                            <div class="circle-pattern" data-aos="fade-down" data-aos-delay="70" data-aos-duration="700"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Area -->
        
        <!-- Start Footer Area -->
        <footer class="footer-area pt-100" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="widget-logo">
                                <a href="index.html"><img src="{{asset("assets/$dir/images/logo-2.png")}}" alt="image"></a>
                            </div>
                            <p>
                                {{$settings->about}}
                            </p>
                            <ul class="widget-social-links">
                                <li><span>{{ trans('home.follow') }}:</span></li>

                                <li>
                                    <a href="{{$settings->facebook}}" target="_blank">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{$settings->twitter}}" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{$settings->instagram}}" target="_blank">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{$settings->linkedin}}" target="_blank">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget ps-5">
                            <h3>{{ trans('home.companies') }}</h3>

                            <ul class="quick-links">
                                <li><a href="#about">{{ trans('home.about') }}</a></li>
                                <li><a href="#why">{{ trans('home.why') }}</a></li>
                                <li><a href="#how">{{ trans('home.how') }}</a></li>
                                <li><a href="#employeers">{{ trans('home.how') }} - {{ trans('home.employeers') }}</a></li>
                                <li><a href="#applicants">{{ trans('home.how') }} - {{ trans('home.applicants') }}</a></li>
                                <li><a href="#services">{{ trans('home.services') }}</a></li>
                                <li><a href="#partners">{{ trans('home.partners') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <!-- <div class="single-footer-widget">
                            <h3>Resources</h3>

                            <ul class="quick-links">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="dashboard-post-job.html">Post A Job</a></li>
                                <li><a href="candidates-1.html">Candidates</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </div> -->
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>{{ trans('home.contact') }}</h3>
                            
                            <ul class="widget-info">
                                <li>
                                    <i style="font-size:18px; font-weight:900 ; color:white;">{{ trans('home.address_icon') }}</i>
                                    {{$settings->address}}
                                </li>

                                <li>
                                    <i style="font-size:18px; font-weight:900 ; color:white;">{{ trans('home.phone_icon') }}</i>
                                    <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a>
                                </li>

                                <li>
                                    <i style="font-size:18px; font-weight:900 ; color:white;">{{ trans('home.fax_icon') }}</i>
                                    <a href="tel:{{$settings->fax}}">{{$settings->fax}}</a>
                                </li>

                                <li>
                                    <i style="font-size:18px; font-weight:900 ; color:white;">{{ trans('home.email_icon') }}</i>
                                    <a href="mailto:{{$settings->email}}">{{$settings->email}}</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            {!!$settings->map!!}
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <p><i class="ri-copyright-line"></i> <script>document.write(new Date().getFullYear())</script> {{ trans('home.company_first') }}. {{ trans('home.rights') }} <a href="https://envytheme.com/" target="_blank">{{ trans('home.company_name') }}</a></p>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-line"></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Links of JS files -->
        <script src="{{asset("assets/$dir/js/jquery.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/bootstrap.bundle.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/jquery.meanmenu.js")}}"></script> 
        <script src="{{asset("assets/$dir/js/owl.carousel.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/jquery.appear.js")}}"></script>
        <script src="{{asset("assets/$dir/js/odometer.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/jquery.magnific-popup.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/fancybox.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/selectize.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/TweenMax.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/aos.js")}}"></script>
        <script src="{{asset("assets/$dir/js/metismenu.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/simplebar.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/dropzone.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/sticky-sidebar.min.js")}}"></script>
		<script src="{{asset("assets/$dir/js/jquery.ajaxchimp.min.js")}}"></script>
		<script src="{{asset("assets/$dir/js/form-validator.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/contact-form-script.js")}}"></script>
        <script src="{{asset("assets/$dir/js/wow.min.js")}}"></script>
        <script src="{{asset("assets/$dir/js/main.js")}}"></script>
    </body>
</html>