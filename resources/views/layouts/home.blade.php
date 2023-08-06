@extends('layouts.app')
@section('content')

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
                               {{$home->main_banner_content}}
                            </p>    
                            <div class="banner-btn">
                                <a href="{{$home->main_banner_link}}" class="default-btn">{{ trans('home.download_brochure') }}<i class="flaticon-list-1"></i></a>
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
                            <h3 style="color:#b42025;">{{ trans('home.company_first') }}</h3></b><h3> {{$home->about_title}}</h3>
                            <p> {{$home->about_header}} </p>
                            <p>
                                {{$home->about_footer}}
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                    <div class="about-fun-fact">
                                        <h3>
                                            <span class="odometer" data-count="{{$home->years_exper}}" dir={{($dir == 'rtl')?'ltr':''}}>00</span>
                                            <span class="sign-icon">+</span>
                                        </h3>
                                        <p>{{ trans('home.y_of_exper') }}</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                    <div class="about-fun-fact">
                                        <h3>
                                            <span class="odometer" data-count="{{$home->expert_at_service}}"  dir={{($dir == 'rtl')?'ltr':''}} >00</span>
                                            <span class="sign-icon">+</span>
                                        </h3>
                                        <p>{{ trans('home.expert_service') }}</p>
                                    </div>
                                </div>
                            </div>

                           <div class="about-btn">
                                <a href="{{ route('about') }}" class="default-btn">{{ trans('home.learn_about_us') }}<i class="flaticon-plus"></i></a>
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
                                <a href="{{$home->why_first_link}}" class="video-btn popup-youtube">
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
                    <p>{{$home->how_works_header}}</p>
                    <p>{{$home->how_works_Body}} </p> 
                    <p>{{$home->how_works_footer}}</p>
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
                                <h4>{{$home->featured_candidates_title}}</h4>
                                <p>
                                    {{$home->featured_candidates_content}}
                                </p>

                                <!-- <div class="layer-shape" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">
                                    <img src="{{asset("assets/$dir/images/featured-candidates/layer.png")}}" alt="image">
                                </div> -->
                            </div>


                            @foreach($featuredCandidates as $featuredCandidate)
                                <div class="featured-candidates-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="candidates-box-content">
                                                <div class="image">
                                                    <a href="#"><img src="{{$featuredCandidate->getFirstMediaUrl('featured_candidate')}}" alt="image"></a>
                                                </div>

                                                <div class="content">
                                                    <h3>
                                                        <a href="#">{{$featuredCandidate->title}}</a>
                                                    </h3>
                                                    <span>{{$featuredCandidate->content}}</span>

                                                    <div class="rating">
                                                    </div>

                                                    <ul class="job-info">
                                                        <li><i class="{{$featuredCandidate->tag1_icon}}"></i>{{$featuredCandidate->tag1}}</li>
                                                        <li><i class="{{$featuredCandidate->tag2_icon}}"></i>{{$featuredCandidate->tag2}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="featured-candidates-btn">
                                <a href="#">{{ trans('home.view_all_Services') }}<i class="flaticon-right-arrow"></i></a>
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
                                <h4>{{$home->job_applicants_title}}</h4>
                                <p>{{$home->job_applicants_content}}</p>
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

                                @foreach($home->getMedia('Partner')->take(6) as $img)                                    
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-6">
                                        <div class="image" data-aos="fade-left" data-aos-delay="90" data-aos-duration="900">
                                            <a href="#" target="_blank"><img src="{{$img->getUrl()}}" alt="{{ $img->name }}"></a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="partner-content">
                            <h3>{{ trans('home.partner_content_h3') }}</h3>
                            <p>
                                {{$home->partner_content}}
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
@endsection