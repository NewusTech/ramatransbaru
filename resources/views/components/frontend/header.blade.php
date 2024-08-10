{{-- <div>
    <!--====== Header Section start ======-->
    <div class="header-bottom">
        <div class="header-sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- Header Logo Start -->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="header-logo">
                            <a href="{{route('home') }}"><img src="{{ asset('img') }}/logo-pasar-kredit.png"
                                    alt="{{ company_config('name') ?? config('app.name') }}" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('tentang') }}">Tentang</a>
                                </li>
                                <li class="has-children position-static">
                                    <a href="#">Produk kami</a>
                                    <ul class="mega-menu">
                                        <li class="mega-menu-col">
                                            <h4 class="mega-menu-title">KUR Pemerintah</h4>
                                            <ul class="mb-n2">
                                                <li><a href="{{ route('produk-detil','kur')}}">Kredit KUR</a></li>
                                                <li><a href="{{ route('produk-detil','umi')}}">Kredit UMi</a></li>
                                                <li><a href="{{ route('produk-detil','kurbe')}}">KURBE</a></li>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col">
                                    <h4 class="mega-menu-title">Kredit Cepat</h4>
                                    <ul class="mb-n2">
                                        <li><a href="{{ route('produk-detil','kredit-fintech')}}">Kredit Fintech</a>
                                        </li>


                                    </ul>
                                </li>
                                <li class="mega-menu-col">
                                    <h4 class="mega-menu-title">Kredit Murah</h4>
                                    <ul class="mb-n2">
                                        <li><a href="{{ route('produk-detil','ekor')}}">EKOR</a></li>
                                        <li><a href="{{ route('produk-detil','takbir')}}">TAKBIR</a></li>
                                        <li><a href="{{ route('produk-detil','tops')}}">TOPS</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col">
                                    <div class="megamenu-image">
                                        <a href="{{ route('produk') }}">
                                            <img class="fit-image"
                                                src="{{ asset('frontend') }}/images/programs/program-kami.png"
                                                alt="Megamenu Image">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Layanan</a>
                                <ul class="sub-menu">
                                    <li><a href="https://slik.ojk.go.id/slik" target="_blank">SLIK (Sistem Layanan
                                            Informasi Keuangan)</a></li>
                                    <li><a href="https://waspadainvestasi.ojk.go.id/faq" target="_blank">Daftar
                                            investasi Ilegal</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#">Testimoni</a>
                            </li>
                            <!-- <li class="">
                                <a href="#">FAQ</a>
                            </li> -->

                            </ul>
                        </div>
                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Action Start -->
                    <div class="col-lg-3 col-md-8 col-6">
                        <div class="header-actions">

                            <!-- Header Action Search Button Start -->
                            <div class="header-action-btn header-action-btn-search d-none d-md-flex">
                                <div class="action-execute">
                                    <a class="action-search-open" href="javascript:void(0)"><i
                                            class="icon-magnifier icons"></i></a>
                                    <a class="action-search-close" href="javascript:void(0)"><i
                                            class="ti-close"></i></a>
                                </div>
                                <!-- Search Form and Button Start -->
                                <form class="header-search-form" action="#">
                                    <input type="text" class="header-search-input" placeholder="Pencarian">
                                    <button class="header-search-button"><i class="icon-magnifier icons"></i></button>
                                </form>
                                <!-- Search Form and Button End -->

                            </div>
                            <!-- Header Action Search Button End -->


                            <!-- Mobile Menu Hambarger Action Button Start -->
                            <a href="javascript:void(0)"
                                class="header-action-btn header-action-btn-menu d-lg-none d-md-flex">
                                <i class="icon-menu"></i>
                            </a>
                            <!-- Mobile Menu Hambarger Action Button End -->

                        </div>
                    </div>
                    <!-- Header Action End -->

                </div>
            </div>
        </div>
    </div>
    <!--====== Header Section end ======-->
</div> --}}