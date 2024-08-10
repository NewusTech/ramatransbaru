{{-- <div>
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">

            <!-- Button Close Start -->
            <div class="offcanvas-btn-close">
                <i class="fa fa-times"></i>
            </div>
            <!-- Button Close End -->

            <!-- Mobile Menu Inner Wrapper Start -->
            <div class="mobile-menu-inner-wrapper">
                <!-- Mobile Menu Search Box Start -->
                <div class="search-box-offcanvas">
                    <form>
                        <input class="search-input-offcanvas" type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <!-- Mobile Menu Search Box End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="">
                                <a href="{{ route('tentang') }}">Tentang</a>
                            </li>
                            <li class="has-children">
                                <a href="#">Program Kami <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('produk',['kategori'=> 3]) }}">Kredit Pemerintah</a></li>
                                    <li><a href="{{ route('produk',['kategori'=> 2]) }}">Kredit Cepat</a></li>
                                    <li><a href="{{ route('produk',['kategori'=> 1]) }}">SKredit Murah</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#">Testimoni</a>
                            </li>
                            <!-- <li class="">
                                <a href="#">FAQ</a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->



                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> {{ company_config('phone') }}</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> {{ company_config('email') }}</a></li>
                    </ul>
                    <!-- Contact Links End -->


                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner Wrapper End -->

        </div>
        <!-- Mobile Menu Inner End -->
    </div>
</div> --}}