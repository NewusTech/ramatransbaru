<!DOCTYPE html>
<html>

<head>
    <!-- Google Tag Manager -->
    @if (isset($gtagManager))
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '{{ $gtagManager->code }}');
        </script>
    @endif
    <!-- End Google Tag Manager -->
    {{-- Analytics --}}
    @if (isset($analytics))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $analytics->code }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', '{{ $analytics->code }}');
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
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend-assets') }}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('frontend-assets') }}/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend-assets') }}/favicon/favicon-16x16.png">

    <!-- Tag canonical untuk halaman utama -->
    <link rel="canonical" href="{{ url('/blog/search') }}" />
    {{-- <link rel="prev" href="{{ url('/blog/search') }}?page=3" />
    <link rel="next" href="{{ url('/blog/search') }}?page=2" /> --}}

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    {{-- <link rel="stylesheet" href="{{url('frontend-assets/css/reset.css')}}"> --}}
    <!-- Bootstrap v4.3.1 CSS -->
    <link rel="stylesheet" href="{{ url('assets-plesir/lib/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ url('frontend-assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('frontend-assets/css/font-awesome.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('frontend-assets/css/bootstrap.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{url('frontend-assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/fonts/fi/flaticon.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('frontend-assets/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/css/indent.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('frontend-assets/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{url('frontend-assets/rs-plugin/css/navigation.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{url('frontend-assets/css/custom.css')}}"> --}}
    <link rel="stylesheet" href="{{ url('assets-plesir/css/normalize.css') }} ">
    <link rel="stylesheet" href="{{ url('assets-plesir/css/theme.css') }} ">

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets-plesir/lib/slick/slick/slick.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ url('assets-plesir/lib/slick/slick/slick-theme.css') }} ">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href=" {{ url('assets-plesir/lib/Magnific-Popup-master/dist/magnific-popup.css') }}">
    <!-- Font Awesome Free 5.10.2 CSS JS -->
    <link href="{{ url('assets-plesir/lib/fontawesome-free-5.10.2-web/css/all.css') }}" rel="stylesheet">
    <script defer src="{{ url('assets-plesir/lib/fontawesome-free-5.10.2-web/js/brands.js') }} "></script>
    <script defer src="{{ url('assets-plesir/lib/fontawesome-free-5.10.2-web/js/solid.js') }} "></script>
    <script defer src="{{ url('assets-plesir/lib/fontawesome-free-5.10.2-web/js/fontawesome.js') }} "></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    @if (isset($tagManager))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $tagManager->codeTag }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', '{{ $tagManager->codeTag }}');
        </script>
    @endif

    {{-- meta syukron488@gmail.com --}}
    <title>
        @if (trim($__env->yieldContent('title')))
            @yield('title')
        @endif
    </title>
    @if (trim($__env->yieldContent('excerpt')))
        <meta name="description" content="@yield('excerpt')">
    @elseif(isset($metades))
        <meta name="description" content="{{ $metades }}">
    @elseif(isset($seoPage) && isset($seoPage->meta_desc))
        <meta name="description" content="{{ $seoPage->meta_desc }}">
        {{-- @else
        <meta name="description"
            content="Nikmati perjalanan Jakarta-Lampung yang nyaman dan aman bersama Rama Tranz Travel. Pesan tiket sekarang dan jelajahi keindahan kedua destinasi"> --}}
    @endif
    @if (trim($__env->yieldContent('keyword')))
        <meta name="keywords" content="@yield('keyword')">
    @else
        <meta name="keywords" content="">
    @endif
    <meta name="author" content="Rama Tranz Travel">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="{{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }}">
    @if (trim($__env->yieldContent('image')))
        <meta property="og:image" content="{{ Storage::disk('public')->url('') }}@yield('image') ">
    @else
        <meta property="og:image"
            content="{{ isset($seoPage->media) ? Storage::disk('public')->url($seoPage->media) : 'https://ramatranzlampung.com/frontend-assets/img/logo-1.png' }} ">
    @endif
    <meta property="og:image:width" content="240">
    <meta property="og:image:height" content="90">
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="@if (trim($__env->yieldContent('title'))) @yield('title')- @endif {{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }} - {{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}">
    <meta property="og:description"
        content="{{ isset($seoPage) ? $seoPage->meta_desc : 'Nikmati perjalanan Jakarta-Lampung yang nyaman dan aman bersama Rama Tranz Travel. Pesan tiket sekarang dan jelajahi keindahan kedua destinasi' }}">
    <meta property="fb:app_id" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }}">
    <meta name="twitter:title"
        content="@if (trim($__env->yieldContent('title'))) @yield('title')- @endif {{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }} - {{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}">
    <meta name="twitter:description"
        content="{{ isset($seoPage) ? $seoPage->meta_desc : 'Nikmati perjalanan Jakarta-Lampung yang nyaman dan aman bersama Rama Tranz Travel. Pesan tiket sekarang dan jelajahi keindahan kedua destinasi' }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title"
        content="@if (trim($__env->yieldContent('title'))) @yield('title')- @endif {{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }} - {{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}">
    @if (trim($__env->yieldContent('image')))
        <meta name="msapplication-TileImage" content="{{ Storage::disk('public')->url('') }}@yield('image') ">
    @else
        <meta name="msapplication-TileImage"
            content="{{ isset($seoPage->media) ? Storage::disk('public')->url($seoPage->media) : 'https://ramatranzlampung.com/frontend-assets/img/logo-1.png' }}">
    @endif
    <link rel="manifest" href="{{ asset('frontend-assets') }}/favicon/manifest.json">
    <link rel="apple-touch-icon"
        href="{{ isset($dataSeo) ? Storage::disk('public')->url($dataSeo['image']) : 'https://ramatranzlampung.com/frontend-assets/img/logo-1.png' }}">
    <link rel="shortcut icon" type="image/png"
        href="{{ isset($dataSeo) ? Storage::disk('public')->url($dataSeo['image']) : 'https://ramatranzlampung.com/frontend-assets/favicon/favicon-96x96.png' }}">
</head>

<body class="default">
    <!-- Preloading -->
    <div class="preloading">
        <div class="wrap-preload">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!-- .Preloading -->
    <!-- Sidebar left -->
    <nav id="sidebarleft" class="sidenav">
        <div id="dismiss">
            <i class="fas fa-times"></i>
        </div>
        <div class="sidebar-header">
            <h3>Menu</h3>
        </div>
        <div class="sdprofile">
            <div class="sdp-left">
                <img src="{{ url('frontend-assets/img/logo-2.png') }}" alt="profile">
            </div>
            <div class="sdp-right">
                {{-- <div class="sd-name">Lilia Doe</div> --}}
                {{-- <div class="sd-status">Ramatranz Travel</div> --}}
            </div>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="{{ url('/') }}"><i class="fas fa-home"></i>Beranda</a>
            </li>
            <li>
                <a href="{{ url('/tarif.html') }}"><i class="fas fa-car"></i>Rute</a>
            </li>
            <li>
                <a href="{{ url('/jadwal.html') }}"><i class="fas fa-receipt"></i>Jadwal</a>
            </li>
            <li>
                <a href="{{ url('/blog') }}"><i class="fas fa-newspaper"></i>Blog</a>
            </li>
            <li>
                <a href="{{ url('/jenis-layanan.html') }}"><i class="fas fa-envelope"></i>Layanan</a>
            </li>
            <li>
                <a href="{{ url('/kontak-kami.html') }}"><i class="fas fa-star"></i>Kontak</a>
            </li>
            <li>
                <a href="{{ url('/tentang-kami.html') }}"><i class="fas fa-car"></i>Tentang Kami</a>
            </li>
            {{-- <li>
                <a href="#pagemybooking" data-toggle="collapse" aria-expanded="false"><i class="fas fa-receipt"></i>My Bookings <span><i class="fas fa-caret-down"></i></span></a>
                <ul class="collapse collapsible-body" id="pagemybooking">
                    <li>
                        <a href="my_rides.html">My rides</a>
                    </li>
                    <li>
                        <a href="cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="checkout.html">Checkout</a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </nav>
    <!-- .Sidebar left -->
    <!-- Sidebar right -->
    <nav id="sidebarright" class="sidenav">
        <div id="dismiss">
            <i class="fas fa-times"></i>
        </div>
        <div class="sidebar-header">
            <h3>Notifications</h3>
        </div>
        <ul class="right-menu">

            <li class="right-menu-item">
                <a href="#">
                    <i class="fas fa-envelope"></i>
                    <div class="ntitle">Your transaction was successful</div>
                    <div class="desc">lorem ipsum dolor sit amet...</div>
                </a>
            </li>
            <li class="right-menu-item">
                <a href="#">
                    <i class="fas fa-star"></i>
                    <div class="ntitle">You have received an award</div>
                    <div class="desc">lorem ipsum dolor sit amet...</div>
                </a>
            </li>
            <li class="right-menu-item">
                <a href="#">
                    <i class="fas fa-car-alt"></i>
                    <div class="ntitle">Your tour schedule</div>
                    <div class="desc">lorem ipsum dolor sit amet...</div>
                </a>
            </li>
            <li class="right-menu-item">
                <a href="#">
                    <i class="fas fa-ticket-alt"></i>
                    <div class="ntitle">Promo offer for you today</div>
                    <div class="desc">lorem ipsum dolor sit amet...</div>
                </a>
            </li>
            <li class="right-menu-item">
                <a href="#">
                    <i class="fas fa-envelope"></i>
                    <div class="ntitle">You get a point</div>
                    <div class="desc">lorem ipsum dolor sit amet...</div>
                </a>
            </li>

        </ul>
    </nav>
    <!-- .Sidebar right-->
    <!-- Header  -->
    @include('frontend.layouts.header-plesir')
    <!-- .Header  -->

    <div id="content">
        <!-- content page-->
        @yield('content')
        <!-- ! content page-->
    </div>

    <div>
        <footer>
            <div class="container pt-2">
                <div class="row">
                    <div class="col-12 col-md-3 mb-4 mb-md-0">
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                                <img src="{{ url('frontend-assets/img/logo-2.png') }}" width="50px" alt>
                                <span class="ml-2" style="color: white">Rama Tranz Travel</span>
                            </a>
                        </div>

                        <div class="social-link dark d-flex justify-content-center align-items-center">
                            <a href="#" class="btn btn-primary btn-sm mr-1">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-primary btn-sm mr-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCY7MCn80wnrJTn219ACedYQ" target="_blank"
                                class="btn btn-primary btn-sm">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-5 mb-4 mb-md-0">
                        <h6 style="font-family: Verdana, Geneva, Tahoma, sans-serif">Sekilas Kami</h6>
                        <hr class="my-1 mb-3" style="border-color: #28a745; width: 80%; border-width: 2px;">
                        <p class="text-left linkfooter">
                            {{ company_config('tentang') }}</p>
                    </div>

                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <h6 style="font-family: Verdana, Geneva, Tahoma, sans-serif">Akses Cepat</h6>
                        <hr class="my-1 mb-3" style="border-color: #28a745; width: 80%; border-width: 2px;">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12 col-md-5">
                                @foreach ($menuLayanan as $item)
                                    <a href="{{ route('layananCategoryId', $item->slug) }}" rel="tag"
                                        class="tag linkfooter">{{ $item->title }}</a>
                                    <br>
                                @endforeach
                            </div>
                            <div class="col-12 col-md-5">
                                <a href="{{ route('tarif') }}" rel="tag" class="tag linkfooter">Tarif</a><br>
                                <a href="{{ route('kontak-kami') }}" rel="tag"
                                    class="tag linkfooter">Kontak</a><br>
                                <a href="{{ route('tentang-kami') }}" rel="tag" class="tag linkfooter">Tentang
                                    Kami</a><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-3 my-1 border-top">
                    <p>&copy; Copyright 2023 RAMATRANZ | All Rights Reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><i
                                    class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>

    <!-- Botom Panel  -->
    <div class="bottom-panel">
        <div class="bp-col">
            <a href="{{ url('/') }}">
                <div class="bp-icon"><img src="{{ url('assets-plesir/img2/menu-bottom/home.png') }}" alt="icon">
                </div>
                <div class="bp-text">Beranda</div>
            </a>
        </div>
        <div class="bp-col">
            <a href="{{ url('/tarif.html') }}">
                <div class="bp-icon"><img src="{{ url('assets-plesir/img2/menu-bottom/rute.png') }}" alt="icon">
                </div>
                <div class="bp-text">Rute</div>
            </a>
        </div>
        <div class="bp-col">
            <a href="{{ url('/gallery.html') }}">
                <div class="bp-icon"><img src="{{ url('assets-plesir/img2/menu-bottom/gallery.png') }}"
                        alt="icon"></div>
                <div class="bp-text">Gallery</div>
            </a>
        </div>
        <div class="bp-col">
            <a href="{{ url('/jadwal.html') }}">
                <div class="bp-icon"><img src="{{ url('assets-plesir/img2/menu-bottom/jadwal-removebg.png') }}"
                        alt="icon"></div>
                <div class="bp-text">Jadwal</div>
            </a>
        </div>
        <div class="bp-col">
            <a
                href="https://api.whatsapp.com/send?phone=628117298168&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F">
                <div class="bp-icon"><img src="{{ url('assets-plesir/img2/menu-bottom/wa.png') }}" alt="icon">
                </div>
                <div class="bp-text">Chat</div>
            </a>
        </div>
    </div>
    <!-- .Bottom Panel  -->
    <div class="overlay"></div>
    <script src="https://www.youtube.com/player_api"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/cws_parallax.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.fancybox-media.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/masonry.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ url('frontend-assets/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ url('frontend-assets/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ url('frontend-assets/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ url('frontend-assets/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ url('frontend-assets/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ url('frontend-assets/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ url('frontend-assets/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ url('frontend-assets/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/bg-video/cws_self_vimeo_bg.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/bg-video/jquery.vimeo.api.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/bg-video/cws_YT_bg.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.tweet.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend-assets/js/retina.min.js') }}"></script>
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
        canonical.setAttribute('rel', 'canonical')
        canonical.href = document.location
        document.getElementsByTagName('head')[0].appendChild(canonical);

        // <link rel="alternate" href="https://localhost/newus/ramatranzlampung/" hreflang="en-US">
        var alternate = document.createElement('link');
        alternate.setAttribute('rel', 'alternate')
        alternate.href = document.location
        alternate.setAttribute('hreflang', 'en-US')
        document.getElementsByTagName('head')[0].appendChild(alternate);
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery v3.4.1 -->
    <script src="{{ url('assets-plesir/lib/jquery/jquery-3.4.1.min.js') }}"></script>
    <!--  Bootstrap v4.3.1 JS -->
    <script src="{{ url('assets-plesir/lib/bootstrap/js/bootstrap.min.js') }} "></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{ url('assets-plesir/lib/Magnific-Popup-master/dist/jquery.magnific-popup.js') }} "></script>
    <!-- Slick JS -->
    <script src="{{ url('assets-plesir/lib/slick/slick/slick.min.js') }} "></script>
    <!--  Custom JS -->
    <script src="{{ url('assets-plesir/js/theme.js') }} "></script>
    @yield('script')
</body>

</html>
