@extends('frontend.layouts.app-plesir')
@section('title', 'Layanan ' . $jenisLayanan->title)
@section('content')

    <div class="content-wrap">
        <div class="container page">
            <!-- section portfolio item-->
            <section class="page-section mb-0 pt-0 pb-50">
                <div id="flex-slider" class="flexslider row">
                    {{-- <ul class="slides"> --}}
                    <div class="col-md-12">
                        <img src="{{ Storage::disk('s3')->url($jenisLayanan->media) }}" alt="">
                        {{-- </ul> --}}
                    </div>
                </div>
                <h4 class="mb-20 mt-4" style="font-size: 26px; color: #040b16">Layanan
                    {{ $jenisLayanan->title }}
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-15">{!! $jenisLayanan->content !!}</p>
                    </div>
                </div>
            </section>
            <!-- ! section portfolio item-->

            <!-- widget post-->
            <section class="page-section mb-0 pt-0 pb-50">
                <div class="cws-widget">
                    <div class="widget-post">
                        <h2 class="widget-title alt">Hubungi <span>Kami</span></h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-gray-3 p-30-40">
                                    <p class="mb-30">
                                        Hubungi kami dengan cara <strong><span
                                                class="text-uppercase">whatsApp</span></strong> ataupun <strong><span
                                                class="text-uppercase">Telepon</span></strong> pada nomor dibawah ini:
                                    </p>

                                    <!-- ! accordion-->
                                    <a href="https://api.whatsapp.com/send?phone={{ $contacts->wa_1 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20transportasi%20ini%20di%20RamaTrans%20Travel%20%3F"
                                        class="theme-button alt text-uppercase" style="font-size: 14px">WhatsApp 1</a>
                                    <a href="https://api.whatsapp.com/send?phone={{ $contacts->wa_2 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20transportasi%20ini%20di%20RamaTrans%20Travel%20%3F"
                                        class="theme-button alt text-uppercase" style="font-size: 14px">WhatsApp 2</a>
                                    <a href="tel:{{ $contacts->phone_tr_1 }}"
                                        class="theme-button alt gray-dark text-uppercase"
                                        style="font-size: 14px">{{ $contacts->phone_tr_1 }}</a>
                                    <a href="tel:{{ $contacts->phone_tr_2 }}"
                                        class="theme-button alt gray-dark text-uppercase"
                                        style="font-size: 14px">{{ $contacts->phone_tr_2 }}</a>
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

@section('script')

    <script type="text/javascript"></script>

@endsection
