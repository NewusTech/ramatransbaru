<!DOCTYPE html>
@extends('frontend.layouts.app-plesir')
@section('title', env('APP_NAME', 'Default Name') . ', Agen Perjalanan Termurah dan Ternyaman')
@section('content')

    {{-- modal --}}
    <div id="gallery-modal">
        @foreach ($gallery as $item)
            <div class="modal fade" id="imageresource-{{ $item->id }}" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" id="sm-section-modal-gallery">
                            <img data-src="{{ Storage::disk('s3')->url($item->image) }}" id="imagepreview" loading="lazy"
                                class="lazy-load" style="width: 100%; height: 264px;">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- end modal --}}
    
    <!-- Content Wrap  -->
    <div class="content">
        <h1 style="display: none;">{{ env('APP_NAME') }} adalah agen jasa travel terbaik</h1>
        <!-- Bootstrap Modal for Notifications -->
        <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog"
            aria-labelledby="notificationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="notificationModalLabel">Notification</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Display success message -->
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Display error message -->
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

       <!-- slider -->
<div class="container-fluid img-hero" style="position: relative;">
    @foreach ($carousel as $slider)
        <div class="d-flex justify-content-center align-items-center" style="position: relative;">
            <img data-src="{{ Storage::disk('s3')->url($slider->image) }}" alt="slider"
                 class="img-fluid lazy-load" loading="lazy" style="width: 100%;">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; color: white; background-color: rgba(0, 0, 0, 0.5); padding: 10px; border-radius: 5px;">
                <h1>Rasya Mandiri Tranz Travel </h1>
                <p>perusahaan resmi Jasa angkutan Travel yang melayani Perjalanan Jakarta lampung (PP) door to door service Jakarta ke Lampung, Bandar Jaya, Metro, Pringsewu, Kotabumi, Baturaja, Palembang aman dan terpercaya</p>
            </div>
        </div>
    @endforeach
</div>
<!-- .slider -->


        <!-- Modal Booking-->
        <div class="modal fade" id="modalBookingIndex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Booking #<span id="titlelayanan"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('order-store') }}" method="POST" enctype="multipart/form-data"
                        onsubmit="return formSubmitIndex()">
                        @csrf
                        <div class="modal-body">
                            <div id="msgError" class="alert alert-danger" style="display:none"></div>
                            {{-- <form> --}}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="Nama" id="name" name="name"
                                    class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>No. Hp</label>
                                <input type="number" placeholder="" id="telp" name="telp"
                                    class="form-control newus-form-number" />
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" id="date" name="date" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <select id="time" name="time" class="form-control">
                                    <option value="" disabled selected>--Pilih Waktu--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Rute</label>
                                <input type="text" id="rute" name="rute" readonly class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Tempat Duduk</label>
                                <input type="text" placeholder="Contoh : 1 Orang" id="numberorder" name="numberorder"
                                    class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Titik Jemput</label>
                                <input type="text" id="location" name="location"
                                    placeholder="Contoh = Permata Kost - Jl. Swakarya 1 no. H-28A Rt. 09 RW 02 Dwikora II"
                                    class="form-control" />
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <!-- section 1 -->
        <div class="home-icon">
            <div class="section-home">
                <div class="container">
                    <div class="row">
                        <div class="col s-icon">
                            <a href="{{ url('/jenis-layanan.html') }}" class="homepage-icon-menu">
                                <img data-src="{{ url('assets-plesir/img2/hotel.png') }}" alt="icon" loading="lazy"
                                    class="lazy-load">
                                <div class="s-icon-text">
                                    LAYANAN
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{ url('/jadwal.html') }}" class="homepage-icon-menu">
                                <img data-src="{{ url('assets-plesir/img2/cab.png') }}" alt="icon" loading="lazy"
                                    class="lazy-load">
                                <div class="s-icon-text">
                                    JADWAL
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="#rute" class="homepage-icon-menu">
                                <img data-src="{{ url('assets-plesir/img2/takeoff.png') }}" alt="icon"
                                    loading="lazy" class="lazy-load">
                                <div class="s-icon-text">
                                    RUTE
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s-icon">
                            <a href="#blog" class="homepage-icon-menu">
                                <img data-src="{{ url('assets-plesir/img2/temple.png') }}" alt="icon" loading="lazy"
                                    class="lazy-load">
                                <div class="s-icon-text">
                                    BLOG
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{ url('/kontak-kami.html') }}" class="homepage-icon-menu">
                                <img data-src="{{ url('assets-plesir/img2/hospital.png') }}" alt="icon"
                                    loading="lazy" class="lazy-load">
                                <div class="s-icon-text">
                                    KONTAK
                                </div>
                            </a>
                        </div>
                        <div class="col s-icon">
                            <a href="{{ url('/tentang-kami.html') }}" class="homepage-icon-menu">
                                <img data-src="{{ url('assets-plesir/img2/cultures.png') }}" alt="icon"
                                    loading="lazy" class="lazy-load">
                                <div class="s-icon-text">
                                    TENTANG KAMI
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s-icon">
                            <a href="{{ url('/review') }}" class="homepage-icon-menu">
                                <img data-src="{{ url('assets-plesir/img2/cultures.png') }}" alt="icon"
                                    loading="lazy" class="lazy-load">
                                <div class="s-icon-text">
                                    REVIEW
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .section 1 -->

        <!-- section 2 -->
        <div class="heading-section" id="rute">
            <div class="sa-title popcat">Pilih Rute Transportasi </div>
            <div class="heading-info">
                {{-- Choose your favorite car --}}
                Membantu memudahkan mobilitas Anda
            </div>
            <div class="clear"></div>
        </div>
        <div class="section-home available-car">
            <div class="container pt-3" style="background-color: #F0F4F7">
                <div class="row">
                    <div class="col-md-12">
                        <form method="get" class="form search" action="{{ route('tarif') }}">
                            <div class="row">
                                <div class="col-md-3 col-sm-12 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-map-marker"></i>
                                            </span>
                                        </div>
                                        <select id="asal" name="asal" class="form-control">
                                            <option selected disabled>Berangkat dari...</option>
                                            @foreach ($asals as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn py-0" type="button"
                                                style="background-color: white; border: 1px solid #ced4da; color: gray"
                                                id="clearAsal"><span>x</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 mb-2">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-map-marker"></i>
                                            </span>
                                        </div>
                                        <select id="tujuan" name="tujuan" class="form-control">
                                            <option selected disabled>Tujuan...</option>
                                            @foreach ($tujuans as $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn py-0" type="button"
                                                style="background-color: white; border: 1px solid #ced4da; color: gray"
                                                id="clearTujuan"><span>x</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 mb-2">
                                    <div class="input-group">
                                        <select name="jam" id="jam" class="custom-select">
                                            <option value="" selected disabled>-- Pilih Waktu --</option>
                                            <option value="08.00">08.00</option>
                                            <option value="12.00">12.00</option>
                                            <option value="15.00">15.00</option>
                                            <option value="17.00">17.00</option>
                                            <option value="19.00">19.00</option>
                                            <option value="20.00">20.00</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn py-0" type="button"
                                                style="background-color: white; border: 1px solid #ced4da; color: gray"
                                                id="clearJam"><span>x</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <button type="submit" class="btn btn-block p-1"
                                        style="background-color: #1BB583">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($layanan as $key => $layanans)
                    <!-- item -->
                    <div class="col-md-4 col-sm-12 mb-1">
                        <div class="acr-box">
                            <div class="acr-box-in">
                                <div class="acr-img">
                                    <img src="{{ Storage::disk('s3')->url($layanans->image) }}" alt="you might like">
                                </div>
                                <div class="acr-content">
                                    <div class="ct-name">{{ $layanans->title }}</div>
                                    <div class="ct-cost">
                                        <div class="jadwal-jemput">
                                            <h4>Jadwal Jemput</h4>
                                            <table class="tabel-jadwal-jemput">
                                                <tbody>
                                                    <tr>
                                                        <td>PAGI</td>
                                                        <td>:</td>
                                                        <td>{{ $layanans->jam_pagi ? $layanans->jam_pagi : '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SIANG</td>
                                                        <td>:</td>
                                                        <td>{{ $layanans->jam_siang ? $layanans->jam_siang : '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SORE</td>
                                                        <td>:</td>
                                                        <td>{{ $layanans->jam_sore ? $layanans->jam_sore : '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>MALAM</td>
                                                        <td>:</td>
                                                        <td>{{ $layanans->jam_malam ? $layanans->jam_malam : '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="ct-reserve">
                                        <a class="theme-button details-button text-white" data-toggle="modal"
                                            data-item="{{ $layanans }}" data-target="#modalBookingIndex">
                                            Pesan
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="acr-bg">
                                <img src="{{ Storage::disk('s3')->url($layanans->image) }}">
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                    @if ($key == 2)
            </div>
            <div class="row">
                @endif
                @endforeach
            </div>

        </div>
        <div class="more-category text-right">
            <a href="{{ url('/tarif.html') }}">
                <div class="theme-button mcbutton">Rute Lainnya</div>
            </a>
        </div>
        <!-- .section 2-->

        {{-- Layanan --}}
        <div class="heading-section" id="section-layanan">
            <div class="sa-title popcat">Layanan</div>
            <div class="heading-info">
                Nikmati berbagai layanan {{ env('APP_NAME') }} yang akan memudahkan Anda
            </div>
            <div class="clear"></div>
        </div>
        <div class="section-home home-news sm-section-layanan">
            <div class="home-news-wrap">
                @foreach ($jenisLayanan as $item)
                    <div class="news-item">
                        <div class="news-content">
                            <div class="hnw-img">
                                <a href="{{ route('layananCategoryId', $item->slug) }}" style="color: #2450A6">
                                    <img data-src="{{ Storage::disk('s3')->url($item->media) }}" alt="news"
                                        loading="lazy" class="lazy-load">
                                </a>
                            </div>
                            <div class="hnw-desc">
                                <div class="hnw-title">
                                    <a href="{{ route('layananCategoryId', $item->slug) }}" style="color: #2450A6">
                                        {{ $item->title }}
                                    </a>
                                </div>
                                <div class="hnw-text">
                                    {!! Str::words($item->content, 40, '...') !!}
                                    <a href="{{ route('layananCategoryId', $item->slug) }}" style="color: #2450A6"
                                        class="more">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class=" more-category">
                    <a href="{{ url('/jenis-layanan.html') }}">
                        <div class="theme-button mcbutton">Selengkapnya</div>
                    </a>
                </div>
            </div>
        </div>
        {{-- End Layanan --}}

        <!-- section 3 -->
        <div class="heading-section">
            <div class="sa-title popcat">Loket {{ env('APP_NAME') }}
            </div>
            <div class="heading-info">
                Loket {{ env('APP_NAME') }} tersebar di beberapa provinsi untuk memudahkan mobilitas Anda
            </div>
            <div class="clear"></div>
        </div>
        <div class="section-home vacation-destination">
            <div class="default-carousel vs-carousel">
                <!-- item -->
                @foreach ($parentOutlet as $outlet)
                    <div class="item">
                        <div class="vs-box">
                            <div class="vsb-top">
                                <div class="vsb-rating">
                                </div>
                                <div class="vsbt-img">
                                    <a href="{{ route('locationId', $outlet->slug) }}">
                                        <img data-src="{{ Storage::disk('s3')->url($outlet->image) }}" alt="img"
                                            class="lazy-load" loading="lazy">
                                    </a>
                                </div>
                            </div>
                            <div class="vsb-middle">
                                <div class="vsbm-left">
                                    <a href="{{ route('locationId', $outlet->slug) }}" style="color:#2450A6">
                                        {{ $outlet->nama_provinsi }}
                                    </a>
                                </div>
                                <div class="vsbm-right">
                                    <a href="{{ route('locationId', $outlet->slug) }}">Details</a> <i
                                        class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- .item -->
            </div>
        </div>
        <!-- .section 3 -->

        <!-- section 4 -->
        <div class="heading-section" id="blog">
            <div class="sa-title popcat">Blog </div>
            <div class="heading-info">
                {{-- Travel quicker, cheaper and smarter --}}
            </div>
            <div class="clear"></div>
        </div>
        <div class="section-home home-news">
            <div class="home-news-wrap">
                @foreach ($blogs as $blog)
                    <div class="news-item">
                        <div class="news-content">
                            <div class="hnw-img">
                                <a href="{{ route('detail-blog.blogId', $blog->slug) }}" style="color: #2450A6">
                                    <img data-src="{{ Storage::disk('s3')->url($blog->image) }}" alt="news"
                                        class="lazy-load" loading="lazy">
                                </a>
                            </div>
                            <div class="hnw-desc">
                                <div class="hnw-title">
                                    <a href="{{ route('detail-blog.blogId', $blog->slug) }}" style="color: #2450A6">
                                        {{ $blog->title }}
                                    </a>
                                </div>
                                <div class="hnw-text">
                                    {{ Str::limit($blog->excerpt, 95, '...') }}<span class="more">Selengkapnya</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class=" more-category">
                    <a href="{{ url('/blog') }}">
                        <div class="theme-button mcbutton">Selengkapnya</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- .section 4 -->
        <!-- testimonials section-->
        <section class="section-home home-news cws_prlx_section bg-blue-40" style="background-color: #040b16">
            <div class="container">
                <div class="row" data-aos="fade-right" data-aos-duration="500">
                    <div class="col-md-12">
                        <h6 class="title-section-top font-4">Feedback</h6>
                        <h2 class="title-section alt-2"><span>Review</span> Pelanggan</h2>
                        <div class="cws_divider mb-25 mt-5"></div>
                    </div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-duration="500">
                    <!-- testimonial carousel-->
                    <div class="owl-three-item">
                        <!-- testimonial item-->
                        @foreach ($feedback as $feedItem)
                            <div class="testimonial-item">
                                <div class="testimonial-top">
                                    @if ($feedItem->image)
                                        <div class="author">
                                            <img src="{{ Storage::disk('s3')->url($feedItem->image) }}"
                                                data-at2x="{{ Storage::disk('s3')->url($feedItem->image) }}"
                                                alt="" style="width: 120px;height: 120px;">
                                        </div>
                                    @endif
                                </div>
                                <!-- testimonial content-->
                                <div class="testimonial-body">
                                    <h5 class="title"><span>{{ $feedItem->title }}</span></h5>
                                    <div class="stars stars-{{ $feedItem->rating }}"></div>
                                    <p class="align-center">{{ $feedItem->desc }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- ! testimonials section-->
        {{-- Gallery --}}
        <div class="heading-section" id="gallery-home">
            <div class="sa-title popcat">Gallery
            </div>
            <div class="heading-info">
                Koleksi gallery foto
            </div>
            <div class="clear"></div>
        </div>
        <div class="section-home vacation-destination gallery-home">
            <div class="sm-slider vs-carousel">
                @foreach ($gallery as $item)
                    <div class="slide">
                        <div class="item sm-items">
                            <div class="vs-box">
                                <div class="vsb-top">
                                    <div class="vsbt-img">
                                        <img class="home-gallery" id="imageresource-{{ $item->id }}" loading="lazy"
                                            src="{{ Storage::disk('s3')->url($item->image) }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class=" more-category">
                <a href="{{ url('/gallery.html') }}">
                    <div class="theme-button mcbutton">Selengkapnya</div>
                </a>
            </div>
        </div>
        {{-- End Gallery --}}

    </div>



@endsection

@section('script')
    <script async src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script async>
        $(document).ready(function() {
            var asalSelect = document.getElementById('asal');
            var tujuanSelect = document.getElementById('tujuan');
            var jamSelect = document.getElementById('jam');

            $('#clearTujuan').on('click', function() {
                // Clear the selected option
                tujuanSelect.selectedIndex = 0;
                $(tujuanSelect).change();

                fetch_data();
            });

            $('#clearAsal').on('click', function() {
                // Clear the selected option
                asalSelect.selectedIndex = 0;
                $(asalSelect).change();

                fetch_data();
            });

            $('#clearJam').on('click', function() {
                // Clear the selected option
                jamSelect.selectedIndex = 0;
                $(jamSelect).change();

            });

            asalSelect.addEventListener('change', function() {
                fetch_data();
            });

            tujuanSelect.addEventListener('change', function() {
                fetch_data();
            });

            jamSelect.addEventListener('change', function() {
                fetch_data();
            });

        });

        $(document).ready(function() {
            $(".details-button").on("click", function() {
                var itemId = $(this).data("item");
                $("#titlelayanan").text(itemId.title);
                $('#rute').val(itemId.title);
                var selectElement = $("#time");
                selectElement.empty();

                if (itemId.jam_pagi) {
                    selectElement.append($("<option></option>").attr("value", itemId.jam_pagi).text(itemId
                        .jam_pagi));
                }
                if (itemId.jam_siang) {
                    selectElement.append($("<option></option>").attr("value", itemId.jam_siang).text(itemId
                        .jam_siang));
                }
                if (itemId.jam_sore) {
                    selectElement.append($("<option></option>").attr("value", itemId.jam_sore).text(itemId
                        .jam_sore));
                }
                if (itemId.jam_malam) {
                    selectElement.append($("<option></option>").attr("value", itemId.jam_malam).text(itemId
                        .jam_malam));
                }
                console.log(itemId)
            });
        });

        function formSubmitIndex(idForm) {
            var name = $('#name').val();
            var telp = $('#telp').val();
            var date = $('#date').val();
            var time = $('#time').find(":selected").val();
            var rute = $('#rute').val();

            var numberorder = $('#numberorder').val();
            var location = $('#location').val();

            if (name.trim() == '') {
                alert('Silakan isi nama terlebih dahulu.');
                $('#name').focus();
                return false;
            }

            if (telp.trim() == '') {
                alert('Silakan isi nomor hp terlebih dahulu.');
                $('#telp').focus();
                return false;
            }

            if (date.trim() == '') {
                alert('Silakan isi tanggal berangkat terlebih dahulu.');
                $('#date').focus();
                return false;
            }

            if (location.trim() == '') {
                alert('Silakan isi titik jemput terlebih dahulu.');
                $('#location').focus();
                return false;
            }

            window.open('https://api.whatsapp.com/send?phone=628117298168' + '&text=Nama%3A%20' + name +
                '+%20%0ANo.%20hp%3A%20' + telp + '%20%0ATanggal%20%3A%20' +
                date + '%20%20%0Awaktu%20%20%3A%20' + time + '%20%0ARute%20%3A%20' + rute +
                '%20%20%0ATempat%20Duduk%3A%20' + numberorder + '%0ATitik%20Jemput%3A%20' + location + '')
        }

        $(".home-gallery").on("click", function(e) {
            $('#' + e.target.id).modal(
                'show'
            ); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
        });

        window.onload = function() {
            $('.sm-slider').slick({
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"></button>',
                nextArrow: '<button type="button" class="slick-next"></button>',
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 1
            });
        };

        $(document).ready(function() {
            // Star rating selection
            $('.star-rating .star').on('click', function() {
                var rating = $(this).data('rating');
                $('#rating_review').val(rating);

                // Set active state for selected stars
                $(this).addClass('active').prevAll().addClass('active');
                $(this).nextAll().removeClass('active');
            });

            // Rest of your existing script...
        });

        document.addEventListener("DOMContentLoaded", function() {
            var lazyImages = document.querySelectorAll('.lazy-load');

            var lazyLoad = function(target) {
                var io = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var img = entry.target;
                            img.src = img.dataset.src;
                            img.classList.remove('lazy-load');
                            observer.disconnect();
                        }
                    });
                });

                io.observe(target);
            };

            lazyImages.forEach(function(img) {
                lazyLoad(img);
            });
        });
    </script>

@endsection
