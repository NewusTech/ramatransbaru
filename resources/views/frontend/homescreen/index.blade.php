<!DOCTYPE html>
<html lang="en">

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    
    <!-- Start Google tag -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$tagManager->codeTag}}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', '{{$tagManager->codeTag}}');
    </script>
    <!-- End Google tag -->
    {{-- Search console --}}
    @if(isset($searchConsole))
    <meta name="google-site-verification" content="{{ $searchConsole->content }}"/>
    @endif
    {{-- end Search --}}
    {{-- meta syukron488@gmail.com --}}
    <title>{{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }} - {{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}</title>
    <meta name="description" content="{{ isset($dataSeo) ? $dataSeo['description'] : 'Travel jakarta lampung - Travel lampung - jakarta' }}">
    <meta name="keywords" content="{{ isset($dataSeo) ? $dataSeo['keywords'] : 'travel jakarta lampung' }}">
    <meta name="author" content="Rama Tranz Travel">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="{{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }}">
    <meta property="og:image" content="{{ isset($dataSeo) ? Storage::disk('public')->url($dataSeo['image']) : 'https://ramatranzlampung.com/frontend-assets/img/logo-1.png' }} ">
    <meta property="og:image:width" content="240">
    <meta property="og:image:height" content="90">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}">
    <meta property="og:description" content="{{ isset($dataSeo) ? $dataSeo['description'] : 'Travel jakarta lampung - Travel lampung - jakarta' }}">
    <meta property="fb:app_id" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ isset($dataSeo) ? $dataSeo['site_title'] : 'Rama Tranz Travel' }}">
    <meta name="twitter:title" content="{{ isset($dataSeo) ? $dataSeo['title'] : 'Travel resmi dan terpercaya' }}">
    <meta name="twitter:description" content="{{ isset($dataSeo) ? $dataSeo['description'] : 'Travel jakarta lampung - Travel lampung - jakarta' }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="{{ isset($dataSeo) ? $dataSeo['description'] : 'Travel jakarta lampung - Travel lampung - jakarta' }}">
    <meta name="msapplication-TileImage" content="{{ isset($dataSeo) ? Storage::disk('public')->url($dataSeo['image']) : 'https://ramatranzlampung.com/frontend-assets/favicon/ms-icon-144x144.png' }} ">
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
    <section class="showcase">
        <header>

            <img src="{{url('frontend-assets/img/logo-2.png')}}" data-at2x="{{url('frontend-assets/img/logo-2.png')}}"
                width="70" alt>
            <h2 class="logo">&nbsp;
                {{ $dataLanding->name_header }}

            </h2>
            {{-- <div class="toggle">
            </div> --}}
        </header>

        <video src="{{ url('frontend-assets/pic/flexslider/bg-video.mp4') }}" autoplay loop muted></video>

        <div class="overlay"></div>

        <div class="text">
            <h2>{{ $dataLanding->title }}</h2>
            <h3>{{ $dataLanding->sub_title }}</h3>
            <p>{{$dataLanding->desc}}</p>
            <a href="{{ route('beranda') }}">Kunjungi Website</a>

            {{-- <ul class="social">
                <li><a href="http://"><img src="" alt="">Instagram</a></li>
                <li><a href="http://"><img src="" alt="">Instagram</a></li>
                <li><a href="http://"><img src="" alt="">Instagram</a></li>
            </ul> --}}
        </div>

        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .showcase {
            position: absolute;
            right: 0;
            width: 100%;
            min-height: 100vh;
            padding: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #111;
            color: #fff;
            z-index: 2;
        }

        .showcase header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 40px 100px;
            z-index: 1000;
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
        }

        .toggle {
            position: relative;
            cursor: pointer;

        }

        .toggle a {
            display: inline-block;
            font-size: 0.8em;
            background: #fff;
            padding: 10px 30px;
            text-decoration: none;
            color: #111;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 4px;
            transition: 0.2s;

        }

        .toggle a:hover {
            color: #1bb583;
        }

        .logo {
            text-transform: uppercase;
            cursor: pointer;
        }

        .showcase video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000000;
            mix-blend-mode: overlay;
            opacity: 0.5;
        }

        .text {
            position: relative;
            z-index: 10;
        }

        .text h2 {
            font-size: 4em;
            text-transform: uppercase;
            font-weight: 800;
            line-height: 1.2em;
        }

        .text h3 {
            font-size: 2em;
            text-transform: uppercase;
            font-weight: 700;
            line-height: 1em;
        }

        .text p {
            font-size: 0.9em;
            margin: 20px 0;
            font-weight: 400;
            line-height: 1.7em;
            max-width: 700px;
            margin-bottom: 30px;
        }

        .text a {
            display: inline-block;
            font-size: 0.8em;
            background: #fff;
            padding: 10px 30px;
            text-decoration: none;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 4px;
            transition: 0.2s;
            font-weight: 600;

        }

        .text a:hover {
            color: #1bb583;
        }

        .social {
            position: absolute;
            z-index: 10;
            /* bottom: 20px; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social li {
            list-style: none;
        }

        .social li a {
            display: inline-block;
            filter: invert(1);
            margin-right: 20px;
            transform: scale(0.5);
            transition: 0.5s;
        }

        .social li a:hover {
            transform: scale(0.5) translateY(-15px);
        }

        @media (max-width: 768px) {
            .showcase {
                padding: 20px;
            }

            .showcase header {
                padding: 20px;
            }

            .logo {
                font-size: 1.2em;
            }

            .text h2 {
                font-size: 1.5em;
                margin-top: 50px;
            }

            .text h3 {
                line-height: 1.5em;
                font-size: 1em;
            }

            .text p {
                line-height: 1.5em;
                font-size: 0.9em;
            }
        }

        </style>
    </section>

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
</body>

</html>
