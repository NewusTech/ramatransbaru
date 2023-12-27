@extends('frontend.layouts.app-plesir')
@section('title', env('APP_NAME', 'Default Name') . ', Agen Perjalanan Terbaik dan Teraman')
@section('content')

    <!-- page section about-->
    <section class="page-section pt-4 pb-5">
        <div class="container">
            <div class="row" style="display: flex; align-items: center; justify-content: center;">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="500">
                    <img src="{{ Storage::disk('s3')->url($tentang->media) }}"
                        data-at2x="{{ Storage::disk('s3')->url($tentang->media) }}" alt>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="500">
                    <!-- section title-->
                    <h2 class="mt-0 pt-2 mb-0">
                        <p style="font-size: 22px">{{ $tentang->title }}</p>
                    </h2>
                    <!-- ! section title-->
                    <div class="cws_divider with-plus short-3 mb-3 mt-3"></div>
                    <p class="mb-2">{!! $tentang->short_description !!}</p>
                    <p class="mb-3">{!! $tentang->content !!}</p>
                    <a href="{{ route('kontak-kami') }}" class="btn btn-primary">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ! page section about-->

    <!-- section portfolio item-->
    <div class="content-body">
        <div class="container page">
            <section class="page-section mb-0 pt-0 pb-3">
                <h2 class="mt-0 mb-0">
                    <p style="font-size: 22px">Piagam Penghargaan RamaTranz</p>
                </h2>
                <div class="cws_divider with-plus short-3 mb-5 mt-3">

                </div>
                <div id="flex-slider" class="flexslider">
                    <ul class="slides">
                        <li><img src="{{ url('frontend-assets/pic/flexslider/l-1.jpg') }}" alt></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- ! section portfolio item-->


@endsection
