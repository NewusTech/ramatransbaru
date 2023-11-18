<!DOCTYPE html>
<html>

<head>
    <!-- Google Tag Manager -->
    @if(isset($gtagManager))
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 
        })(window,document,'script','dataLayer','{{$gtagManager->code}}');
    </script>
    @endif
    <!-- End Google Tag Manager -->
    {{-- Analytics --}}
    @if(isset($analytics))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$analytics->code}}"></script> 
    <script>
        window.dataLayer = window.dataLayer || []; 
        function gtag(){dataLayer.push(arguments);} 
        gtag('js', new Date()); 
        gtag('config', '{{$analytics->code}}');
        </script>
    @endif
    {{-- End Analytics --}}
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend-assets') }}/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend-assets') }}/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend-assets') }}/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend-assets') }}/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend-assets') }}/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend-assets') }}/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend-assets') }}/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend-assets') }}/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend-assets') }}/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('frontend-assets') }}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend-assets') }}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend-assets') }}/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend-assets') }}/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="{{url('frontend-assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/fonts/fi/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/indent.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/rs-plugin/css/navigation.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/custom.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
    @if($tagManager)
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$tagManager->codeTag}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', '{{$tagManager->codeTag}}');
    </script>
    @endif

    {{-- meta syukron488@gmail.com --}}
    <title>@if(trim($__env->yieldContent('title')))@yield('title') - @endif {{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }} - {{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}</title>
    @if(trim($__env->yieldContent('excerpt')))
        <meta name="description" content="@yield('excerpt')">
    @else
        <meta name="description" content="{{ isset($seoPage) ? $seoPage->meta_desc : 'Nikmati perjalanan Jakarta-Lampung yang nyaman dan aman bersama Rama Tranz Travel. Pesan tiket sekarang dan jelajahi keindahan kedua destinasi' }}">
    @endif
    <meta name="keywords" content="{{ isset($dataSeo) ? $dataSeo['keywords'] : 'travel jakarta lampung' }}">
    <meta name="author" content="Rama Tranz Travel">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="{{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }}">
    @if(trim($__env->yieldContent('image')))
        <meta property="og:image" content="{{ Storage::disk('public')->url('')}}@yield('image') ">
    @else
        <meta property="og:image" content="{{ isset($seoPage->media) ? Storage::disk('public')->url($seoPage->media) : 'https://ramatranzlampung.com/frontend-assets/img/logo-1.png' }} ">
    @endif
    <meta property="og:image:width" content="240">
    <meta property="og:image:height" content="90">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@if (trim($__env->yieldContent('title')))@yield('title')-@endif {{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }} - {{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}">
    <meta property="og:description" content="{{ isset($seoPage) ? $seoPage->meta_desc : 'Nikmati perjalanan Jakarta-Lampung yang nyaman dan aman bersama Rama Tranz Travel. Pesan tiket sekarang dan jelajahi keindahan kedua destinasi' }}">
    <meta property="fb:app_id" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }}">
    <meta name="twitter:title" content="@if (trim($__env->yieldContent('title')))@yield('title')-@endif {{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }} - {{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}">
    <meta name="twitter:description" content="{{ isset($seoPage) ? $seoPage->meta_desc : 'Nikmati perjalanan Jakarta-Lampung yang nyaman dan aman bersama Rama Tranz Travel. Pesan tiket sekarang dan jelajahi keindahan kedua destinasi' }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="@if (trim($__env->yieldContent('title')))@yield('title')-@endif {{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }} - {{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}">
    @if(trim($__env->yieldContent('image')))
        <meta name="msapplication-TileImage" content="{{ Storage::disk('public')->url('')}}@yield('image') ">
    @else
        <meta name="msapplication-TileImage" content="{{ isset($seoPage->media) ? Storage::disk('public')->url($seoPage->media) : 'https://ramatranzlampung.com/frontend-assets/img/logo-1.png' }}">
    @endif
    <link rel="manifest" href="{{ asset('frontend-assets') }}/favicon/manifest.json">
    <link rel="apple-touch-icon" href="{{ isset($dataSeo) ? Storage::disk('public')->url($dataSeo['image']) : 'https://ramatranzlampung.com/frontend-assets/img/logo-1.png' }}">
    <link rel="shortcut icon" type="image/png" href="{{ isset($dataSeo) ? Storage::disk('public')->url($dataSeo['image']) : 'https://ramatranzlampung.com/frontend-assets/favicon/favicon-96x96.png' }}">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    @if(isset($gtagManager))
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{$gtagManager->code}}" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif
    <!-- End Google Tag Manager (noscript) -->
    <div class="floating-container">
        <div class="floating-button"><img src="{{url('frontend-assets/pic/facility/chat1.png')}}"
                data-at2x="{{url('frontend-assets/pic/facility/chat1.png')}}" width="30" alt=""></div>
        <div class="label-container">
            <div class="label-text">Hubungi Kami</div>
            <i class="fa fa-play label-arrow"></i>
        </div>
        <div class="element-container">
            <a href="https://api.whatsapp.com/send?phone={{ ($contacts && substr($contacts->wa_2,0,2) == '08') ? '62'.substr($contacts->wa_2,1) : $contacts->wa_2}}&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F"
                class="bg-color" target="_blank">
                <span class="float-element tooltip-left a-tag">
                    <i class="flaticon-suntour-comment"></i>
                    <span class="info">WhatsApp 2</span>
                </span>
            </a>
            <a href="https://api.whatsapp.com/send?phone={{ ($contacts && substr($contacts->wa_1,0,2) == '08') ? '62'.substr($contacts->wa_1,1) : $contacts->wa_1}}&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F"
                class="bg-color" target="_blank">
                <span class="float-element tooltip-left a-tag">
                    <i class="flaticon-suntour-comment"></i>
                    <span class="info">WhatsApp 1</span>
                </span>
            </a>
            <a href="tel:{{ $contacts->phone_tr_2 }}" class="bg-color">
                <span class="float-element a-tag">
                    <i class="flaticon-suntour-phone"></i>
                    <span class="info">Telepon 2</span>
                </span>
            </a>
            <a href="tel:{{ $contacts->phone_tr_2 }}" class="bg-color">
                <span class="float-element a-tag">
                    <i class="flaticon-suntour-phone"></i>
                    <span class="info">Telepon 1</span>
                </span>
            </a>
        </div>
    </div>
    <div class="blur-bg"></div>


    @if (Request::is('/'))
    {{ null }}
    @else
    <!-- header page-->
    @include('frontend.layouts.header')
    <!-- ! header page-->
    @endif

    <!-- content page-->
    @yield('content')
    <!-- ! content page-->

    @if (Request::is('/'))
    {{ null }}
    @else
    <!-- footer-->
    @include('frontend.layouts.footer')
    <!-- ! footer-->
    @endif

    <script src="https://www.youtube.com/player_api"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/TweenMax.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/cws_parallax.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.fancybox-media.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}">
    </script>
    <script type="text/javascript" src="{{url('frontend-assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}">
    </script>
    <script type="text/javascript"
        src="{{url('frontend-assets/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('frontend-assets/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('frontend-assets/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('frontend-assets/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('frontend-assets/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('frontend-assets/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('frontend-assets/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('frontend-assets/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.form.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/script.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/bg-video/cws_self_vimeo_bg.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/bg-video/jquery.vimeo.api.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/bg-video/cws_YT_bg.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.tweet.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript" src="{{url('frontend-assets/js/retina.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- JS --}}
    <script>
        //<meta property="og:url" content="https://localhost/newus/ramatranzlampung/">
        var link = document.createElement('meta');
        link.setAttribute('property', 'og:url');
        link.content = document.location;
        document.getElementsByTagName('head')[0].appendChild(link);
        
        // <link rel="canonical" href="https://localhost/newus/ramatranzlampung">
        var canonical = document.createElement('link');
        canonical.setAttribute('rel','canonical')
        canonical.href = document.location
        document.getElementsByTagName('head')[0].appendChild(canonical);

        // <link rel="alternate" href="https://localhost/newus/ramatranzlampung/" hreflang="en-US">
        var alternate = document.createElement('link');
        alternate.setAttribute('rel','alternate')
        alternate.href = document.location
        alternate.setAttribute('hreflang','en-US')
        document.getElementsByTagName('head')[0].appendChild(alternate);
    </script>
    @yield('script')
</body>

</html>