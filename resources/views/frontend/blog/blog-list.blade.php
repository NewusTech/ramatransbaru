<head>
    <meta charset="utf-8">
    <title>Rama Tranz Travel Terpercaya, Kunjungi Kami di Blog - {{ $title2 }}</title>
    <meta property="og:image:width" content="240">
    <meta property="og:image:height" content="90">
    <meta property="og:type" content="website">
    <meta property="og:title" content='Travel resmi dan terpercaya BANGETTTTTTTTTTTTTT' + $title2>
    <meta property="og:description"
        content='Nikmati perjalanan Jakarta-Lampung yang nyaman dan aman bersama Rama Tranz Travel. Pesan tiket sekarang dan jelajahi keindahan kedua destinasi'
        + $title2>
    <meta property="fb:app_id" content="">
    <meta name="author" content="Rama Tranz Travel">
    <meta name="description" content='Ini hanya percobaan, Bismillah berhasil' + $title2>
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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="{{ url('assets-plesir/lib/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ url('frontend-assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('frontend-assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('assets-plesir/css/normalize.css') }} ">
    <link rel="stylesheet" href="{{ url('assets-plesir/css/theme.css') }} ">
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
</head>

<div class="subsite-banner">
    <img src="https://ramatranzlampung.com/storage/jenis-layanan/90hVpgV5oMu32B8TQNGxbpHiGxc8TYifaH24IkSY.jpg">
</div>
<div class="subsite subsite-with-banner">
    <div class="row">
        <div class="col-md-12">
            <div class="sm-title-heading">
                <h1>
                    Blog
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="search-form search-content">
                <div class="search-wrapper ">
                    <input id="search" placeholder="Search...">
                    {{-- <button class="ssubmit" type="submit" name="search_submit"><i
                            class="fas fa-search"></i></button> --}}
                </div>
            </div>
        </div>
    </div>
    <div>
        @foreach ($blogs as $blog)
            <div class="row news-row">
                <div class="col-md-12">
                    <div class="news-card">
                        <div class="nc-top">
                            <div class="nc-left">
                                <div class="ncl-image">
                                    <a href="{{ route('detail-blog.blogId', $blog->slug) }}" style="color: #2450A6">
                                        <img src="{{ Storage::disk('s3')->url($blog->image) }}" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="nc-right">
                                <div class="ncr-row-a">
                                    <a href="{{ route('detail-blog.blogId', $blog->slug) }}" style="color: #2450A6">
                                        {{ $blog->title }}
                                    </a>
                                </div>
                                <div class="ncr-row-b">
                                    {{ Str::limit($blog->excerpt, 250, '...') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row car-row pagination-row">
            <div class="col-md-12">
                <nav aria-label="Page navigation example">
                    <div id="pagination">
                        {{ $blogs->links() }}
                    </div>
                </nav>
            </div>
        </div>
    </div>

</div>
