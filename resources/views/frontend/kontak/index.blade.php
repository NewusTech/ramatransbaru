@extends('frontend.layouts.app-plesir')
@section('title', 'Hubungi Rama Tranz Travel Untuk Mendapatkan Tiket Murah')
@section('content')

    <div class="content-wrap page-kontak">
        <div class="subsite">
            <div class="row">
                <div class="col-md-12">
                    <div class="sm-title-heading">
                        <h1>
                            Kontak Kami
                        </h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6" id="section-iframe-map">
                    {{-- <img src="https://ramatranzlampung.com/storage/jenis-layanan/90hVpgV5oMu32B8TQNGxbpHiGxc8TYifaH24IkSY.jpg" alt="image" class="border-radius sm-banner-image"> --}}
                    <iframe class="sm-iframe-map" allowfullscreen=""
                        src="https://maps.google.com/maps?q={{ $contacts->lat }},{{ $contacts->lng }}&z=15&output=embed">
                    </iframe>
                </div>
                <div class="col-md-6 paragraph">
                    <div class="sm-paragraph">
                        {{-- <h4 class="title-section mt-0"><span class="font-bold">Kontak Kami</span></h4> --}}
                        <p class="mb-20">
                            Kontak kami jika ingin melakukan pemesanan tiket transportasi atau mengajukan beberapa
                            pertanyaan
                            terkait pelayanan kami. Kami selalu siap 24 jam untuk melayani kebutuhan anda.
                        </p>

                        <ul class="icon">
                            <div class="row sm-row">
                                <div class="col-md-6">
                                    <div>
                                        <li>
                                            <a>Nomor Telepon Travel</a>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                                href="https://api.whatsapp.com/send?phone={{ $contacts && substr($contacts->phone_tr_1, 0, 2) == '08' ? '62' . substr($contacts->phone_tr_1, 1) : $contacts->phone_tr_1 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F">{{ $contacts->phone_tr_1 }}</a><br>
                                            @if ($contacts->phone_tr_2 > 0)
                                                <a target="_blank"
                                                    href="https://api.whatsapp.com/send?phone={{ $contacts && substr($contacts->phone_tr_2, 0, 2) == '08' ? '62' . substr($contacts->phone_tr_2, 1) : $contacts->phone_tr_2 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F">{{ $contacts->phone_tr_2 }}</a>
                                            @else
                                                {{ null }}
                                            @endif
                                        </li>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <li>
                                            <a>WhatsApp<i class="flaticon-suntour-comment"></i></a>
                                        </li>
                                        <li>
                                            @if ($contacts->wa_1 > 0)
                                                <a href="https://api.whatsapp.com/send?phone={{ $contacts && substr($contacts->wa_1, 0, 2) == '08' ? '62' . substr($contacts->wa_1, 1) : $contacts->wa_1 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F"
                                                    target="_blank">{{ $contacts->wa_1 }}</a>
                                            @else
                                                {{ null }}
                                            @endif
                                        </li>
                                        <li>
                                            @if ($contacts->wa_2 > 0)
                                                <a href="https://api.whatsapp.com/send?phone={{ $contacts && substr($contacts->wa_2, 0, 2) == '08' ? '62' . substr($contacts->wa_2, 1) : $contacts->wa_2 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F"
                                                    target="_blank">{{ $contacts->wa_2 }} </a>
                                            @else
                                                {{ null }}
                                            @endif
                                        </li>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-15">
                                        <li>
                                            <a>Nomor Telepon Cargo</a><i class="flaticon-suntour-phone"></i></a>
                                        </li>
                                        <li>
                                            <a target="_blank"
                                                href="https://api.whatsapp.com/send?phone={{ $contacts && substr($contacts->phone_cr_1, 0, 2) == '08' ? '62' . substr($contacts->phone_cr_1, 1) : $contacts->phone_cr_1 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F">{{ $contacts->phone_cr_1 }}</a><br>
                                            @if ($contacts->phone_cr_2 > 0)
                                                <a target="_blank"
                                                    href="https://api.whatsapp.com/send?phone={{ $contacts && substr($contacts->phone_cr_2, 0, 2) == '08' ? '62' . substr($contacts->phone_cr_2, 1) : $contacts->phone_cr_2 }}&text=Hallo%2C%20Saya%20ingin%20memesan%20tiket%20perjalanan%20di%20Rama%20Trans%20Travel.%20Untuk%20pemesanannya%20bagaimana%20ya%3F">{{ $contacts->phone_cr_2 }}</a><br>
                                            @else
                                                {{ null }}
                                            @endif

                                        </li>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-15">
                                        <li>
                                            <a>Alamat Email</a>
                                        </li>
                                        <li> <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}<i
                                                    class="flaticon-suntour-email"></i></a></li>
                                        {{-- <li>
                                    <a>Social Media Kami</a><i class="flaticon-suntour-world"></i></a>
                                </li>
                                <li>
                                    <div class="social-link dark2" style="margin-top: 5px">
                                        <a href="#" class="fa fa-facebook" style="font-size: 18px"></a>
                                        <a href="#" class="fa fa-instagram" style="font-size: 18px"></a>
                                        <a href="https://www.youtube.com/channel/UCY7MCn80wnrJTn219ACedYQ"
                                            target="_blank" class="cws-social fa fa-youtube-play"
                                            style="font-size: 18px"></a>
                                    </div>
                                </li> --}}
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>


@endsection
