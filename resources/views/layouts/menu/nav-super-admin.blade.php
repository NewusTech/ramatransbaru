<ul class="sidebar-menu mt-4">
    <li class="nav-item @if(request()->routeIs('dashboard')) active @endif">
        <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
    </li>

    <li class="menu-header">Kelola Blog</li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-blog'])) active @endif">
        <a href="{{ route('data-blog') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Blog') }}</span></a>

    </li>
    {{-- syukron488@gmail.com --}}
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-tag'])) active @endif">
        <a href="{{ route('data-tag') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Tag Manager') }}</span></a>

    </li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-gtagmanager'])) active @endif">
        <a href="{{ route('data-gtagmanager') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Google Tag Manager') }}</span></a>

    </li>

    
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-search-console'])) active @endif">
        <a href="{{ route('data-search-console') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Search Console') }}</span></a>
    </li>
        
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-analytics'])) active @endif">
        <a href="{{ route('data-analytics') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Google Analytics') }}</span></a>

    </li>

    <li class="menu-header">Kelola Layanan</li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-jenis-layanan'])) active @endif">
        <a href="{{ route('data-jenis-layanan') }}" class="nav-link"><i class="fa fa-tag" aria-hidden="true"></i>
            <span>{{ __('Jenis Layanan') }}</span></a>

    </li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-fasilitas-layanan'])) active @endif">
        <a href="{{ route('data-fasilitas-layanan') }}" class="nav-link"><i class="fa fa-building"
                aria-hidden="true"></i>
            <span>{{ __('Fasilitas Layanan') }}</span></a>

    </li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-layanan'])) active @endif">
        <a href="{{ route('data-layanan') }}" class="nav-link"><i class="fa fa-box" aria-hidden="true"></i>
            <span>{{ __('Rute') }}</span></a>

    </li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-unggulan'])) active @endif">
        <a href="{{ route('data-unggulan') }}" class="nav-link"><i class="fa fa-star" aria-hidden="true"></i>
            <span>{{ __('Unggulan Layanan') }}</span></a>

    </li>

    <li class="menu-header">Kelola Media</li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-carousel'])) active @endif">
        <a href="{{ route('data-carousel') }}" class="nav-link"><i class="fa fa-image" aria-hidden="true"></i>
            <span>{{ __('Gambar Slider') }}</span></a>

    </li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-youtube'])) active @endif">
        <a href="{{ route('data-youtube') }}" class="nav-link"><i class="fa fa-laptop" aria-hidden="true"></i>
            <span>{{ __('Link Youtube') }}</span></a>

    </li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-gallery'])) active @endif">
        <a href="{{ route('data-gallery') }}" class="nav-link"><i class="fa fa-images" aria-hidden="true"></i>
            <span>{{ __('Foto Galeri') }}</span></a>

    </li>


    <li class="menu-header">Kelola Outlet</li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-parent-area'])) active @endif">
        <a href="{{ route('data-parent-area') }}" class="nav-link"><i class="fa fa-location-arrow"
                aria-hidden="true"></i>
            <span>{{ __('Area Provinsi') }}</span></a>

    </li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-area'])) active @endif">
        <a href="{{ route('data-area') }}" class="nav-link"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
            <span>{{ __('Area Kota') }}</span></a>

    </li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-kontak'])) active @endif">
        <a href="{{ route('data-kontak') }}" class="nav-link"><i class="fa fa-phone-alt" aria-hidden="true"></i>
            <span>{{ __('Kontak') }}</span></a>

    </li>

    <li class="menu-header">Kelola Faqs</li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-faq'])) active @endif">
        <a href="{{ route('data-faq') }}" class="nav-link"><i class="fa fa-comment" aria-hidden="true"></i>
            <span>{{ __('Faqs') }}</span></a>

    </li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-feedback'])) active @endif">
        <a href="{{ route('data-feedback') }}" class="nav-link"><i class="fa fa-address-book" aria-hidden="true"></i>
            <span>{{ __('Penilaian Layanan') }}</span></a>

    </li>

    <li class="nav-item @if(in_array(request()->route()->getName(),['data-page'])) active @endif">
        <a href="{{ route('data-page') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
            <span>{{ __('Halaman') }}</span></a>

    </li>
  
 	<li class="menu-header">Landing</li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-landing'])) active @endif">
      <a href="{{ route('data-landing') }}" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i>
        <span>{{ __('Landing') }}</span></a>
  	</li>

    <li class="menu-header">Jadwal</li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-jadwal'])) active @endif">
        <a href="{{ route('data-jadwal') }}" class="nav-link"><i class="fa fa-calendar" aria-hidden="true"></i>
            <span>{{ __('Jadwal') }}</span>
        </a>
    </li>

    <li class="menu-header">SEO</li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-seo'])) active @endif">
        <a href="{{ route('data-seo') }}" class="nav-link"><i class="fa fa-calendar" aria-hidden="true"></i>
            <span>{{ __('SEO TOOLS') }}</span>
        </a>
    </li>



    @if(isAdmin())
    <li class="menu-header">Kelola Pengguna</li>
    <li
        class="nav-item dropdown @if(in_array(request()->route()->getName(),['user','roles','jobs','sme'])) active @endif">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
            <span>{{ __('List Pengguna') }}</span></a>
        <ul class="dropdown-menu">
            <li class="@if(request()->routeIs('user')) active @endif"><a class="nav-link" href="{{ route('user') }}">{{
                    __('Users') }}</a></li>
            <li class="@if(request()->routeIs('user')) active @endif"><a class="nav-link" href="{{ route('roles') }}">{{
                    __('Roles') }}</a></li>

        </ul>
    </li>

    @endif
</ul>

@if(isAdmin())
<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="{{ route('config') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Config
    </a>
</div>
@else
<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="{{ route('tutorial') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-graduation-cap"></i> Tutorial
    </a>
</div>
@endif