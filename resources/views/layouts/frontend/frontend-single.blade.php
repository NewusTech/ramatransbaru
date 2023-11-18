<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--====== Title ======-->
    <title> {{ config('app.name') ?? 'Ramatrans Travel Lampung'}} </title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('img') }}/favicon.ico" type="img/png" />
    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css" />
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css" />
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/flaticon.css" />
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css" />
    <!--====== Slick  css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css" />
    <!--====== Jquery ui ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.min.css" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css?v={{ rand(1,1000)}}" />
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!--====== Preloader ======-->
    <div id="preloader">
        <div class="loader-cubes">
            <div class="loader-cube1 loader-cube"></div>
            <div class="loader-cube2 loader-cube"></div>
            <div class="loader-cube4 loader-cube"></div>
            <div class="loader-cube3 loader-cube"></div>
        </div>
    </div>

    <x-frontend.sticky-header></x-frontend.sticky-header>

    <!--====== OFF CANVAS START ======-->
    <x-frontend.offcanvas></x-frontend.offcanvas>

    <!--====== OFF CANVAS END ======-->

    {{ $slot }}

    <!--====== Footer Section Start ======-->
    <x-frontend.footer></x-frontend.footer>

    <!--====== Footer Section end ======-->
    @livewireScripts


    <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <!--====== Slick js ======-->
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <!--====== Isotope js ======-->
    <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <!--====== inview js ======-->
    <script src="{{ asset('frontend') }}/js/jquery.inview.min.js"></script>
    <!--====== counterup js ======-->
    <script src="{{ asset('frontend') }}/js/jquery.countTo.js"></script>
    <!--====== easy PieChart js ======-->
    <script src="{{ asset('frontend') }}/js/jquery.easypiechart.min.js"></script>
    <!--====== Jquery Ui ======-->
    <script src="{{ asset('frontend') }}/js/jquery-ui.min.js"></script>
    <!--====== Wow JS ======-->
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <!--====== Main js ======-->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    @stack('scripts')
</body>

</html>