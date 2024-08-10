<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>{!! env('APP_NAME', 'Default Name') !!} Terpercaya, Kunjungi Kami di Blog - {{ $title2 }}</title>
    <meta name="author" content="Rama Tranz Travel">
    <meta name="description"
        content='{{ env('APP_NAME', 'Default Name') }} Penyedia Agen Perjalanan, Baca Artikel ke {{ $title2 }}'>
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
    <link rel="stylesheet" href="{{ url('frontend-assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('assets-plesir/css/normalize.css') }} ">
    <link rel="stylesheet" href="{{ url('assets-plesir/css/theme.css') }} ">
</head>

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
