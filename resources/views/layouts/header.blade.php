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
            .coming-soon-area {
                background-image: url({{asset("assets/$dir/images/coming-soon-bg.jpg")}});
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
    @stack('styles')
</head>