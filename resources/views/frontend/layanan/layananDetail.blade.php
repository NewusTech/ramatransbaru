@extends('frontend.layouts.app-plesir')
@section('title', 'Rute ' . $detailLayanan->title)
@section('excerpt', $detailLayanan->intro)
@section('image', $detailLayanan->image)
@section('content')

    <div class="content-wrap page-detail-rute">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-title-heading">
                        <h1>{{ $detailLayanan->title }}</h1>
                    </div>
                </div>
            </div>
            <!-- section portfolio item-->
            <section class="page-section mb-0 pt-0 paragraph pb-50 ">
                <div class="sm-box-shadow">
                    <div class="sm-image-top">
                        <img src="{{ Storage::disk('s3')->url($detailLayanan->image) }}" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12 sm-paragraph">
                            <p>{!! $detailLayanan->content !!}</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ! section portfolio item-->

            <!-- widget post-->
            <section class="page-section mb-0 pt-0 pb-50">
                <div class="sm-box-shadow">
                    <div class="widget-post">
                        <h2 class="title-color alt" style="margin: 0 0 10px 0;">Jadwal Keberangkatan
                            <span>Transportasi</span>
                        </h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-gray-3 p-30-40">
                                    PAGI : {{ $detailLayanan->jam_pagi }} <br>
                                    SIANG : {{ $detailLayanan->jam_siang }} <br>
                                    SORE : {{ $detailLayanan->jam_sore }} <br>
                                    MALAM : {{ $detailLayanan->jam_malam }} <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ! widget post-->

            <!-- widget post-->
            @if ($detailLayanan->fasilitas->count())
                <section class="page-section mb-0 pt-0 pb-50">
                    <div class="sm-box-shadow">
                        <div class="widget-post">
                            <h2 class="title-color alt" style="margin: 0 0 10px 0;">Fasilitas <span>Transportasi</span></h2>
                            <div class="row">
                                @foreach ($detailLayanan->fasilitas as $fasilitas)
                                    <div class="col-md-4">
                                        <!-- item recent post-->
                                        <div class="item-recent clearfix">
                                            <div class="widget-post-media"><img
                                                    src="{{ Storage::disk('s3')->url($fasilitas->image) }}"
                                                    data-at2x="{{ Storage::disk('s3')->url($fasilitas->image) }}" alt></div>
                                            <h3 class="title"><a href="#">
                                                    {{ $fasilitas->nama_fasilitas }}</a>
                                            </h3>
                                            <div class="date-recent"> {{ $fasilitas->description }}</div>
                                        </div>
                                        <!-- ! item recent post-->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <!-- ! widget post-->

            <!-- widget post-->
            @if ($detailLayanan->rute_berangkat > 0)
                <section class="page-section mb-0 pt-0 pb-50">
                    <div class="sm-box-shadow">
                        <div class="widget-post">
                            <h2 class="title-color alt" style="margin: 0 0 10px 0;">Waktu dan Rute <span>Transportasi</span>
                            </h2>
                            <div class="row">
                                <div class="col-md-12 paragraph">
                                    <div class="sm-paragraph p-30-40">
                                        <p>{!! $detailLayanan->rute_berangkat !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <!-- ! widget post-->

            <!-- widget post-->
            <section class="page-section mb-0 pt-0 pb-50">
                <div class="sm-box-shadow">
                    <div class="widget-post">
                        <h2 class="title-color alt" style="margin: 0 0 10px 0;">Pesan Dengan cara Hubungi <span>Kami</span>
                        </h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-gray-3 p-30-40">
                                    <p class="mb-30">
                                        Hubungi kami dengan cara <strong><span
                                                class="text-uppercase">whatsApp</span></strong> ataupun <strong><span
                                                class="text-uppercase">Telepon</span></strong> pada nomor dibawah ini:
                                    </p>

                                    <!-- ! accordion-->
                                    <a href="https://api.whatsapp.com/send?phone={{ $contacts && substr($contacts->wa_1, 0, 2) == '08' ? '62' . substr($contacts->wa_1, 1) : $contacts->wa_1 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20transportasi%20ini%20di%20RamaTrans%20Travel%20%3F"
                                        class="sm-cws-button alt text-uppercase" style="font-size: 14px">whatsApp 1</a>
                                    <a href="https://api.whatsapp.com/send?phone={{ $contacts && substr($contacts->wa_2, 0, 2) == '08' ? '62' . substr($contacts->wa_2, 1) : $contacts->wa_2 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20transportasi%20ini%20di%20RamaTrans%20Travel%20%3F"
                                        class="sm-cws-button alt text-uppercase" style="font-size: 14px">whatsApp 2</a>
                                    <a href="tel:08117208168" class="sm-cws-button alt gray-dark text-uppercase"
                                        style="font-size: 14px">08117208 168</a>
                                    <a href="tel:08117298168" class="sm-cws-button alt gray-dark text-uppercase"
                                        style="font-size: 14px">0811 7298 168</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ! widget post-->
        </div>
    </div>
@endsection
