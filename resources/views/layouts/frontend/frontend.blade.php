<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Ramatrans Travel Lampung') }}</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('img') }}/favicon.ico" type="image/x-icon">


    <!-- Vendor CSS (Icon Font) -->


    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/fontawesome.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/simple-line-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/themify-icons-min.css" />



    <!-- Plugins CSS (All Plugins Files) -->



    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/nice-select.min.css" />



    <!-- Main Style CSS -->


    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->



    <!-- <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.min.css"> -->

    @livewireStyles


</head>

<body>
    <!-- Header Section Start -->
    <div class="header section">

        <!-- Header Top Start -->
        <div class="header-top bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    @if(company_config('welcome'))
                    <!-- Header Top Message Start -->
                    <div class="col-12 text-center">
                        <div class="header-top-msg-wrapper">
                            <p class="header-top-message">{{ company_config('welcome') ?? ''}}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Header Top Message End -->

                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Bottom Start -->
        <x-frontend.header></x-frontend.header>
        <!-- Header Bottom End -->

    </div>
    <!-- Header Section End -->

    {{ $slot }}

    <x-frontend.footer></x-frontend.footer>



    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top ti-angle-double-up"></i>
        <i class="arrow-bottom ti-angle-double-up"></i>
    </a>
    <!-- Scroll Top End -->

    <!-- Mobile Menu Start -->
    <x-frontend.offcanvas></x-frontend.offcanvas>
    <!-- Mobile Menu End -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    @livewireScripts

    <script src="{{ asset('frontend') }}/js/vendor/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Plugins JS -->


    <script src="{{ asset('frontend') }}/js/plugins/aos.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/nice-select.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins/lightgallery-all.min.js"></script>


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!-- 
    <script src="{{ asset('frontend') }}/js/vendor.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugins.min.js"></script>  
    -->

    <!--Main JS-->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    @stack('scripts');
</body>

</html>