<div>
    <!-- Hero/Intro Slider Start -->
    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">

                @foreach($carousel as $c)
                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="{{ Storage::disk('public')->url($c->image) }}" alt="{{ $c->title }}" />
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-lg-none"></div>
            <!-- Swiper Pagination End -->

            <!-- Swiper Navigation Start -->
            <div class="home-slider-prev swiper-button-prev main-slider-nav d-lg-flex d-none"><i
                    class="icon-arrow-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav d-lg-flex d-none"><i
                    class="icon-arrow-right"></i></div>
            <!-- Swiper Navigation End -->
        </div>
    </div>
    <!-- Hero/Intro Slider End -->



    <!-- Banner Section Start -->
    <div class="section section-margin ">

        <div class="container">
            <!-- Banners Start -->
            <div class="row row-cols-md-3 row-cols-sm-3 row-cols-3">

                <!-- Banner Start -->
                <div class="col mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <a href="{{ route('produk',['kategori'=> 3])}}" class="banner hover-style">
                        <img class="fit-image" src="{{ asset('frontend') }}/images/programs/kur-pemerintah.png"
                            alt="Kur Pemerintah" />
                    </a>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col mb-3" data-aos="fade-up" data-aos-duration="1300">
                    <a href="{{ route('produk',['kategori'=> 1])}}" class="banner hover-style">
                        <img class="fit-image" src="{{ asset('frontend') }}/images/programs/kredit-murah.png"
                            alt="Kredit Murah" />
                    </a>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col mb-3" data-aos="fade-up" data-aos-duration="1600">
                    <a href="{{ route('produk',['kategori'=> 2])}}" class="banner hover-style">
                        <img class="fit-image" src="{{ asset('frontend') }}/images/programs/kredit-cepat.png"
                            alt="Kredit Cepat" />
                    </a>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Product Deal Section Start -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h2 class="title" data-aos="fade-up" data-aos-duration="1000">Cek Semua Produk kami</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Latest Blog Carousel Start -->
                    <div class="row shop_wrapper grid_4">
                        @foreach($produk as $p)
                        <!-- Single Product Start -->
                        <div class="col-xl-3 col-lg-4 col-md-4 col-6 product">
                            <div class="product-inner">
                                <div class="thumb">
                                    <a href="{{ route('produk-detil',$p->slug) }}" class="image">
                                        @if($p->gambar)
                                        <img class="fit-image w-100" src="{{ Storage::disk('public')->url($p->gambar)}}"
                                            alt="{{ $p->nama }}" />
                                        @else
                                        <img class="fit-image w-100"
                                            src="{{ asset('frontend') }}/images/placeholder.png" alt="{{ $p->nama }}" />
                                        @endif
                                    </a>
                                    <span class="badges">
                                        <span class="sale">{{ $p->kategori->kategori}}</span>
                                    </span>
                                    <div class="action-wrapper">
                                        <a href="{{ route('produk-detil',$p->slug) }}" class="action quickview"
                                            data-bs-toggle="modal" data-bs-target="#quick-view"
                                            wire:click="show({{$p->id}})" title="Detil"><i class="ti-eye"></i></a>

                                        <a href="{{ route('pengajuan', $p->slug)}}" class="action cart" title="Cart"><i
                                                class="ti-credit-card"></i></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="{{ route('produk-detil',$p->slug) }}">{{ $p->nama }}</a>
                                    </h5>
                                    <!-- <span class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span> -->
                                    <!-- <span class="price">
                                        <span class="new">$80.50</span>
                                        <span class="old">$85.80</span>
                                    </span> -->
                                    <p>{{ $p->deskripsi_singkat }}</p>
                                    <!-- Cart Button Start -->
                                    <div class="cart-btn action-btn">
                                        <div class="action-cart-btn-wrapper d-flex">
                                            <div class="add-to_cart">
                                                <a class="btn btn-primary btn-hover-dark rounded-0"
                                                    href="{{ route('pengajuan',$p->slug) }}">AAjukan</a>
                                            </div>

                                            <a href="#/" class="action quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" title="Quickview"><i
                                                    class="ti-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- Cart Button End -->
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        @endforeach

                    </div>
                    <!-- Latest Blog Carousel End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Product Deal Section End -->

    <!-- Cek Pengajuan Section -->
    <div class="section">
        <div class="container p-5 rounded-3">
            <div class="row">
                <div class="col-12 p-5 align-middle">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" wire:model="kode" placeholder="Cari Kode Pengajuan">
                        <button class="btn btn-primary" type="button" id="button-addon2" wire:click="cari">Cari</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Testimonial Section Start -->
    <div class="section bg-bright section-padding section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-5 text-center">Dengarkan Apa kata Mereka</h4>
                    <!-- Testimonial Carousel Start -->
                    <div class="testimonial-carousel">

                        <!-- Testimonial Gallery Top Start -->
                        <div class="swiper-container testimonial-gallery-top" data-aos="fade-up"
                            data-aos-duration="1000">
                            <div class="swiper-wrapper">

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">

                                    <!-- Testimonial Content Start -->
                                    <div class="testimonial-content text-center">
                                        <p>Lorem ipsum dolor sit amet, co adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    </div>
                                    <!-- Testimonial Content End -->

                                </div>
                                <!-- Single Swiper Slide End -->

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">

                                    <!-- Testimonial Content Start -->
                                    <div class="testimonial-content text-center">
                                        <p>Vivamus a lobortis ipsum, vel condimentum magna. Etiam id turpis tortor. Nunc
                                            scelerisque, nisi a blandit varius, nunc purus venenatis ligula, sed
                                            venenatis orci augue nec sapien. Cum sociis natoque</p>
                                    </div>
                                    <!-- Testimonial Content End -->

                                </div>
                                <!-- Single Swiper Slide End -->
                            </div>

                        </div>
                        <!-- Testimonial Gallery Top End -->

                        <!-- Testimonial Gallery Thumb Start -->
                        <div class="swiper-container testimonial-gallery-thumbs" data-aos="fade-up"
                            data-aos-duration="1500">
                            <div class="swiper-wrapper">

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Thumb Start -->
                                    <div class="testimonial-thumb text-center">
                                        <img src="{{ asset('frontend') }}/images/testimonial/1.png"
                                            alt="Testimonial Image">
                                        <h3 class="thumb-title">Jonathon Jhon</h3>
                                        <h6 class="thumb-subtitle">Customer</h6>
                                    </div>
                                    <!-- Testimonial Thumb End -->
                                </div>
                                <!-- Single Swiper Slide End -->

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Thumb Start -->
                                    <div class="testimonial-thumb text-center">
                                        <img src="{{ asset('frontend') }}/images/testimonial/2.png"
                                            alt="Testimonial Image">
                                        <h3 class="thumb-title">Cristal Jerry</h3>
                                        <h6 class="thumb-subtitle">Customer</h6>
                                    </div>
                                    <!-- Testimonial Thumb End -->
                                </div>
                                <!-- Single Swiper Slide End -->

                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Testimonial Gallery Thumb End -->

                    </div>
                    <!-- Testimonial Carousel End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    <div class="section section-margin-bottom">
        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Berita Terbaru</h2>
                    </div>
                </div>
            </div>

            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-2 mb-n8">
                @foreach($blogs as $blog)
                <div class="col mb-8" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single Blog Start -->
                    <div class="single-blog-wrapper">

                        <!-- Blog Thumb Start -->
                        <div class="blog-thumb thumb-effect">
                            <a class="image" href="{{ route('detail-blog', $blog->slug )}}">
                                <img class="fit-image" src="{{ Storage::disk('public')->url($blog->image) }}"
                                    alt="{{ $blog->title }}">
                            </a>
                        </div>
                        <!-- Blog Thumb End -->

                        <!-- Blog Content Start -->
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><span>By</span><a href="#/">{{ $blog->author->name }}</a></li>
                                    <li><span>{{ \Carbon\Carbon::parse($blog->published_at)->format('d M Y') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('detail-blog', $blog->slug )}}">{{ $blog->title
                                    }}</a></h2>
                            <p>{{ $blog->excerpt }}</p>
                            <a class="more-link" href="{{ route('detail-blog', $blog->slug )}}">Read More</a>
                        </div>
                        <!-- Blog Content End -->

                    </div>
                    <!-- Single Blog End -->
                </div>
                @endforeach


            </div>

        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Modal Start  -->
    <div wire:ignore.self class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            @if($item)
                            @if($item->gambar)
                            <img class="fit-image w-100" src="{{ Storage::disk('public')->url($item->gambar)}}"
                                alt="{{ $item->nama }}" />
                            @else
                            <img class="fit-image w-100" src="{{ asset('frontend') }}/images/placeholder.png"
                                alt="{{ $item->nama }}" />
                            @endif
                            @endif


                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery position-relative">

                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title">{{ $item ? $item->nama : ''}}</h2>
                            </div>
                            <!-- Product Head End -->


                            <!-- Price Box Start -->

                            <span class="badge bg-primary">{{ $item ? $item->kategori->kategori: ''}}</span>
                            <!-- Price Box End -->


                            <!-- Product Inventory Start -->
                            <div class="product-inventroy mb-3">
                                <span class="inventroy-title"> <strong>Penyalur:</strong></span>
                                <span class="inventory-varient">{!! $item ?
                                    $item->penyalur->pluck('nama')->implode('<br>'):'' !!}</span>
                            </div>
                            <!-- Product Inventory End -->

                            <!-- Description Start -->
                            <p class="desc-content mb-5">{{ $item ? $item->deskripsi_singkat: ''}}</p>
                            <!-- Description End -->



                            <!-- Cart Button Start -->
                            <div class="cart-btn action-btn mb-6">
                                <div class="action-cart-btn-wrapper d-flex justify-content-start">
                                    <a class="btn btn-primary btn-sm me-3 btn-hover-dark rounded-30"
                                        href="{{ $item ? route('pengajuan',$item->slug) : ''}}">Ajukan
                                        Pinjaman</a>
                                    <a class="btn btn-primary btn-sm me-3 btn-hover-dark rounded-30"
                                        href="{{ $item ? route('produk-detil',$item->slug) : ''}}">Detil</a>
                                    <a class="btn btn-outline-primary btn-sm me-3 btn-hover-dark rounded-30"
                                        href="{{ $item ? route('simulasi',$item->slug) : ''}}">Simulasi</a>
                                </div>
                            </div>
                            <!-- Cart Button End -->




                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->
</div>