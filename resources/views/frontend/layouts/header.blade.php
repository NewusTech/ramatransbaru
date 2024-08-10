<!-- header page-->
<header>
  <!-- Navigation panel-->
  <nav class="{{ Request::is('index.html') ? 'main-nav transparent stick-fixed' : 'main-nav js-stick' }}">
    <div class="full-wrapper relative clearfix container">
      <!-- Logo ( * your text or image into link tag *)-->
      <div class="nav-logo-wrap local-scroll">
        <a href="{{ route('beranda') }}" class="logo">
          @if (Request::is('index.html'))
          <img src="{{url('frontend-assets/img/logo-2.png')}}" data-at2x="{{url('frontend-assets/img/logo-2.png')}}"
            width="auto" alt>
          <img src="{{url('frontend-assets/img/logo-2.png')}}" data-at2x="{{url('frontend-assets/img/logo-2.png')}}"
            width="auto" alt class="logo-white">
          @else
          <img src="{{url('frontend-assets/img/logo-2.png')}}" data-at2x="{{url('frontend-assets/img/logo-2.png')}}"
            width="auto" alt>
          @endif
        </a>
      </div>
      <!-- Main Menu-->
      <div class="inner-nav desktop-nav">
        <ul class="clearlist">
          <!-- Item With Sub-->
          <li><a href="{{ route('beranda') }}" class="">Home </a>
          </li>
          <!-- End Item With Sub-->

          <li class="slash">/</li>
          <!-- Item-->
          <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
          <!-- End Item-->

          <!-- End Item With Sub-->
          <li class="slash">/</li>
          <!-- Item With Sub-->
          <li><a href="{{ route('jadwal') }}">Jadwal</a></li>
          {{-- <li><a href="javascript:void(0)" class="mn-has-sub">Layanan <i class="fa fa-angle-down button_open"></i></a>
            <!-- Sub-->
            <ul class="mn-sub">
              @foreach ($menuLayanan as $item)
              <li><a href="{{ route('layananCategoryId',$item->slug) }}">{{ $item->title }}</a></li>
              @endforeach
            </ul>
            <!-- End Sub-->
          </li> --}}
          <!-- End Item With Sub-->

          <li class="slash">/</li>
          <!-- Item -->
          <li><a href="{{ route('tarif') }}">Rute</a>
          </li>
          <!-- End Item-->

          <li class="slash">/</li>
          <!-- Item -->
          <li><a href="{{ route('blog') }}">Blog</a>
          </li>
          <!-- End Item-->


          <li class="slash">/</li>
          <!-- Item-->
          <li><a href="{{ route('kontak-kami') }}">Kontak</a></li>
          <!-- End Item-->
        </ul>
      </div>
      <!-- End Main Menu-->
    </div>
  </nav>
  <!-- End Navigation panel-->
</header>
<!-- ! header page-->