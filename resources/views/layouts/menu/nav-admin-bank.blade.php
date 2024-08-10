<ul class="sidebar-menu mt-4">
    <li class="nav-item @if(request()->routeIs('dashboard')) active @endif">
        <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
    </li>

    <li class="menu-header">Menu</li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['data-pengajuan'])) active @endif">
        <a href="{{ route('data-pengajuan') }}" class="nav-link"><i class="fa fa-archive" aria-hidden="true"></i>
            <span>{{ __('Pengajuan') }}</span></a>

    </li>
    <li class="nav-item @if(in_array(request()->route()->getName(),['master-produk'])) active @endif">
        <a href="{{ route('master-produk') }}" class="nav-link"><i class="fas fa-boxes    "></i>
            <span>{{ __('Produk') }}</span></a>

    </li>
    @if(isAdmin())

    <li
        class="nav-item dropdown @if(in_array(request()->route()->getName(),['user','roles','jobs','sme'])) active @endif">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
            <span>{{ __('User Management') }}</span></a>
        <ul class="dropdown-menu">
            <li class="@if(request()->routeIs('user')) active @endif"><a class="nav-link"
                    href="{{ route('user') }}">{{ __('Users') }}</a></li>
            <li class="@if(request()->routeIs('user')) active @endif"><a class="nav-link"
                    href="{{ route('roles') }}">{{ __('Roles') }}</a></li>

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
<!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="{{ route('tutorial') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-graduation-cap"></i> Tutorial
    </a>
</div> -->
@endif
