<!doctype html>
<html lang="{{$lang}}" dir="{{$dir}}">

    @include('layouts.header')
    <body>

        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Coming Soon Area -->
        <div class="coming-soon-area">
            <div class="container">
                <div class="coming-soon-content">
                    <a href="index.html" class="logo">
                        <img src="{{asset("assets/$dir/images/logo.png")}}" class="black-logo" alt="image">
                        <img src="{{asset("assets/$dir/images/logo-2.png")}}" class="white-logo" alt="image">
                    </a>
                    <h2>{{ trans('home.coming_soon') }}</h2>
                    @if($dir == 'ltr')
                        <br/><br/>
                    @endif
                    <div id="timer" class="flex-wrap d-flex justify-content-center" dir={{($dir == 'rtl')?'ltr':''}}>
                        <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
                        <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Coming Soon Area -->
        
        <!-- Links of JS files -->
        @include('layouts.footer')
    </body>
</html>