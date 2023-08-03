<!doctype html>
<html lang="{{$lang}}" dir="{{$dir}}">

    @include('layouts.header')

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
                                <a href="{{route('coming_soon')}}"><i class="flaticon-padlock"></i> {{ trans('home.login') }}</a>
                            </li>

                            <li>
                                <a href="{{route('coming_soon')}}"><i class="flaticon-user"></i> {{ trans('home.register') }}</a>
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
        
        @yield('content')
        
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
                                    <i style="font-size:18px; font-weight:{{$dir =='rtl' ? 800 : 900}} ; color:white;">{{ trans('home.address_icon') }}</i>
                                    {{$settings->address}}
                                </li>

                                <li>
                                    <i style="font-size:18px; font-weight:{{$dir =='rtl' ? 800 : 900}} ; color:white;">{{ trans('home.phone_icon') }}</i>
                                    <a href="tel:{{$settings->phone}}">{{$settings->phone}}</a>
                                </li>

                                <li>
                                    <i style="font-size:18px; font-weight:{{$dir =='rtl' ? 800 : 900}} ; color:white;">{{ trans('home.fax_icon') }}</i>
                                    <a href="tel:{{$settings->fax}}">{{$settings->fax}}</a>
                                </li>

                                <li>
                                    <i style="font-size:18px; font-weight:{{$dir =='rtl' ? 800 : 900}} ; color:white;">{{ trans('home.email_icon') }}</i>
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
        @include('layouts.footer')
    </body>
</html>