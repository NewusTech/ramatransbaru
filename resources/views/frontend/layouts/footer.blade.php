<footer style="background-color: #0f1520" class="footer">
    <div class="container">
        <div class="row pb-100 pb-md-40">
            <!-- widget footer-->
            <div class="col-md-6 col-sm-12 mb-sm-30">
                <div class="logo-soc clearfix">
                    <div class="footer-logo"><a href="{{ route('beranda') }}">
                            <h4 class="text-uppercase">RamaTrans Travel

                            </h4>
                            <br>
                            <small>Lampung - Palembang - Jakarta - Bogor - Bekasi</small>

                        </a>
                    </div>
                </div>
                <p class="color-g2 mt-10">{!! $tentang->short_description !!}</p>
                <p class="color-g2 mt-10">{{ company_config('tentang') }}</p>
                <!-- social-->
                <div class="social-link dark">
                    <a href="#" class="cws-social fa fa-facebook"></a>
                    <a href="#" class="cws-social fa fa-instagram"></a>
                    <a href="https://www.youtube.com/channel/UCY7MCn80wnrJTn219ACedYQ" target="_blank"
                        class="cws-social fa fa-youtube"></a>
                </div>
                <!-- ! social-->
            </div>
            <!-- ! widget footer-->
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6 mb-sm-30">
                <div class="widget-footer">
                    <!-- <h4>Dukungan</h4>
                    <div class="widget-tags-wrap">
                        {{-- <a href="#" rel="tag" class="tag">Cara Pemesanan</a>
                        <a href="#" rel="tag" class="tag">Cara Pembayaran</a> --}}
                        <a href="#" rel="tag" class="tag">Syarat & Ketentuan</a>
                        <a href="#" rel="tag" class="tag">Kebijakan Privasi</a>
                    </div> -->
                </div>
            </div>
            <!-- end widget footer-->
            <!-- widget footer-->
            <div class="col-md-3 col-sm-6">
                <div class="widget-footer">
                    <h4>Akses Cepat</h4>
                    <div class="widget-tags-wrap">
                        @foreach ($menuLayanan as $item)
                            <a href="{{ route('layananCategoryId', $item->slug) }}" rel="tag"
                                class="tag">{{ $item->title }}</a>
                        @endforeach
                        <a href="{{ route('tarif') }}" rel="tag" class="tag">Tarif</a>
                        <a href="{{ route('kontak-kami') }}" rel="tag" class="tag">Kontak</a>
                        <a href="{{ route('tentang-kami') }}" rel="tag" class="tag">Tentang Kami</a>
                    </div>
                </div>
            </div>
            <!-- end widget footer-->
        </div>
    </div>
    <!-- copyright-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>© Copyright {{ date('Y') }} <span class="text-uppercase">RamaTranz</span>
                        &nbsp;&nbsp;|&nbsp;&nbsp; All
                        Rights
                        Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright-->
    <!-- scroll top-->
</footer>
{{-- <div id="scroll-top"><i class="fa fa-angle-up"></i></div> --}}
