@extends('frontend.layouts.app-plesir')
@section('title', 'Tentang Kami')
@section('content')

    <!-- page section about-->
    <section class="page-section pt-110 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="500"><img
                        src="{{ Storage::disk('s3')->url($tentang->media) }}"
                        data-at2x="{{ Storage::disk('s3')->url($tentang->media) }}" alt class="mt-minus-20">
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="500">
                    <!-- section title-->
                    <h2 class="title-section mt-0 mb-0"><span>{{ $tentang->title }}</span></h2>
                    <!-- ! section title-->
                    <div class="cws_divider with-plus short-3 mb-20 mt-10"></div>
                    <p class="mb-20">{!! $tentang->short_description !!}</p>
                    <p class="mb-30">{!! $tentang->content !!}</p>
                    <a href="{{ route('kontak-kami') }}" class="btn btn-primary">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ! page section about-->

    <!-- section portfolio item-->
    <div class="content-body">
        <div class="container page">
            <section class="page-section mb-0 pt-0 pb-50">
                <h2 class="title-section mt-0 mb-0"><span>Piagam Penghargaan RamaTranz</span></h2>
                <div class="cws_divider with-plus short-3 mb-20 mt-10">

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
