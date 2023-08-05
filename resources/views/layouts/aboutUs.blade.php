@extends('layouts.app')
@section('content')
        
        <!-- Start Page Banner Area -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 style={{($dir == 'rtl')?'font-size: 45px;':''}}>{{$about->page_banner_content}}</h2>
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
                                        <h4><a href="#{{$about->foundation_title_en}}"> {{$about->foundation_title}}</a></h4>
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>
                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#{{$about->vision_title_en}}"> {{$about->vision_title}}</a></h4>
                                    <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>
                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#{{$about->mission_title_en}}"> {{$about->mission_title}}</a></h4>
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>

                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#{{$about->values_principles_title_en}}"> {{$about->values_principles_title}}</a></h4>
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>
                                <article class="item">
                                    <div class="info">
                                        <h4><a href="#{{$about->team_title_en}}"> {{$about->team_title}}</a></h4>
                                        <a href="#" class="arrow-icon"><i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </article>
    
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-content">
                                <h3>{{ trans('home.about_first') }}</h3>

                                <ul class="entry-meta">
                                    
                                    <li><i class="ri-calendar-line"></i> {{$about->page_banner_date}}</li>
                                    <li><i class="ri-time-line"></i> {{$about->page_banner_read}} {{ trans('home.to_read') }}</li>
                                    <!-- <li><i class="ri-chat-1-line"></i> 03 Comments</li> -->
                                </ul>
                                <div id="{{$about->foundation_title_en}}" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;">
                                    <h2>{{$about->foundation_title}}</h2>
                                    {!!$about->foundation_content!!}
                                </div>

                                <div id="{{$about->vision_title_en}}" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;">
                                    <h2>{{$about->vision_title}}</h2>
                                    {!!$about->vision_content!!}
                                </div>

                                <div id="{{$about->mission_title_en}}" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;">
                                    <h2>{{$about->mission_title}}</h2>
                                    {!!$about->mission_content!!}
                                </div>

                                <div id="{{$about->values_principles_title_en}}" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;">
                                    <h2>{{$about->values_principles_title}}</h2>
                                    {!!$about->values_principles_content!!}
                                </div>

                                <div id="{{$about->team_title_en}}" style="border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(238, 238, 238);padding-bottom: 3%;">
                                    <h2>{{$about->team_title}}</h2>
                                    <div class="article-image">
                                        <img src="{{$about->getFirstMediaUrl('team_work')}}" alt="{{$about->team_title}}">
                                    </div>
                                    {!!$about->team_content!!}
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