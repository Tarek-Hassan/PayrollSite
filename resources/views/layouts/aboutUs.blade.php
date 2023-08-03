@extends('layouts.app')
@section('content')
        
        <!-- Start Page Banner Area -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 style={{($dir == 'rtl')?'font-size: 45px;':''}}>We are the ones Who always finish the race, thats why we called .. First,,</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start Blog Details Area -->
        <div class="blog-details-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <div class="widget widget_eeza_posts_thumb">
                                <h3 class="widget-title">{{ trans('home.content') }}</h3>
                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#foundation"> Foundation</a></h4>
                                        <!-- <span><i class="flaticon-calendar"></i> 24th February</span> -->
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>
    
                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#vision">Vision</a></h4>
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>
    
                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#mission">Mission</a></h4>
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>
    
                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#values">Values & Principles</a></h4>
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>

                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#team">Team Work</a></h4>
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-content">
                                <h3>About First Egyptian</h3>

                                <ul class="entry-meta">
                                    <li><i class="ri-calendar-line"></i> 1st July 2023</li>
                                    <li><i class="ri-time-line"></i> 10 Minute Read</li>
                                    <!-- <li><i class="ri-chat-1-line"></i> 03 Comments</li> -->
                                </ul>
                                <div id="foundation" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;">
                                    <h2>Foundation</h2>
                                    <p>
                                        Since 1986, First Egyptian Engineering has been serving the energy,
                                        construction, telecom, airline and other industries in Egypt and the Middle East.
                                        We specialize in Outsourcing and Payroll Administration services                                    </p>  
                                    <p>
                                        We have a staff of over 100 proffisonals and currently around 1600 contract personnel on our payroll
                                        including many expats working for several international clients                                    </p>
                                </div>

                                <div id="vision" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;padding-top: 3%;">
                                    <h2>Vision</h2>
                                    <p>
                                        At First, we envision achieving market leadership in the provision of HR services where we’d set the benchmark for manpower outsourcing and enable our clients to achieve their objectives and enhance their work efficiency
                                    </p>
                                </div>

                                <div id="mission" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;padding-top: 3%;">
                                    <h2>Mission</h2>
                                    <p>
                                        We serve our clients through capitalizing on value creation, loyal employees and business partners. Throughout our operations, we continuously adhere to the highest standards of business conduct and ethics that benefit the community we serve
                                    </p>
                                    <p class="main-color">
                                        Our mission since foundation and throughout our years of operation is: “providing high end quality services at competitive prices.”
                                    </p>
                                </div>

                                <div id="values" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;padding-top: 3%;">
                                    <h2>Values & Principles</h2>
                                    <p>
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
                                    </p>

                                </div>

                                
                                <div id="team" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;padding-top: 3%;">
                                    <h2>Team Work</h2>
                                        <div class="article-image">
                                            <img src="{{asset("assets/$dir/images/blog-details.jpg")}}" alt="image">
                                        </div>
                                        <p>
                                            First’s skillful work team members specialize in payroll and personnel functions.  Our team is enriched with experienced professionals in personnel outsourcing, recruitment, payroll administration as well as dealing with all concerned governmental authorities and labor office for required legislations. Our team members also operate within a set of values and guiding principles that comprise an integral part of our work culture.  
                                        </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Details Area -->




@endsection
@push('styles')
    <style>
        .page-banner-area {
            background-image: url({{asset("assets/$dir/images/race-first-gray.jpg")}});
        }    
    </style>
@endpush