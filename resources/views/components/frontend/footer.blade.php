 <!-- Footer Section Start -->
 <footer class="section footer-section">
     <!-- Footer Top Start -->
     <div class="footer-top bg-bright section-padding">
         <div class="container">
             <div class="row mb-n8">
                 <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1000">
                     <div class="single-footer-widget">
                         <h1 class="widget-title">Tentang</h1>
                         <p class="desc-content">{{ company_config('tentang') ?? '' }}</p>

                     </div>
                 </div>
                 <!-- <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1200">
                     <div class="single-footer-widget">
                         <h2 class="widget-title">Tautan Eksternal</h2>
                         <ul class="widget-list">
                             <li><a target="_blank"
                                     href="https://slik.ojk.go.id/slik/SG04608395?_csrfCheck_OK=8515a0c4-86fb-4179-b898-575a1a66088b">Slik</a>
                             </li>
                             <li><a target="_blank" href="https://waspadainvestasi.ojk.go.id/">Satgas Waspada
                                     Investasi</a></li>
                             <li><a target="_blank" href="https://sitpakd.ojk.go.id//">TPKAD</a></li>
                         </ul>
                     </div>
                 </div> -->
                 <!-- <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1400">
                     <div class="single-footer-widget aos-init aos-animate">
                         <h2 class="widget-title">Help</h2>
                         <ul class="widget-list">
                             <li><a href="wishlist.html">Wishlist</a></li>
                             <li><a href="contact.html">Pricing Plans</a></li>
                             <li><a href="contact.html">Order Traking</a></li>
                             <li><a href="contact.html">Returns</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1600">
                     <div class="single-footer-widget aos-init aos-animate">
                         <h2 class="widget-title"></h2>
                         <ul class="widget-list">
                             <li><a href="login.html">Login</a></li>
                             <li><a href="my-account.html">My-Account</a></li>
                             <li><a href="wishlist.html">Wishlist</a></li>
                             <li><a href="checkout.html">Checkout</a></li>
                         </ul>
                     </div>
                 </div> -->
             </div>
         </div>
     </div>
     <!-- Footer Top End -->

     <!-- Footer Bottom Start -->
     <div class="footer-bottom bg-light pt-4 pb-4">
         <div class="container">
             <div class="row align-items-center mb-n4">
                 <div class="col-md-6 text-center text-md-start order-2 order-md-1 mb-4">
                     <div class="copyright-content">
                         <p class="mb-0">© {{ date('Y') }} <strong>{{ config('app.name') }} </strong> </a>
                         </p>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <!-- Footer Bottom End -->
 </footer>
 <!-- Footer Section End -->
