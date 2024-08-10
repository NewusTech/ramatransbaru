<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mt-2">
            <a href="/">
                @if (env('APP_NAME') === 'Rama Tranz Travel')
                    <img style="max-width: 85px " src="{{ asset('img/logo.png') }}" class="logo">
                @else
                    <img style="max-width: 85px " src="{{ url('frontend-assets/img/logo-rasya-dark.png') }}"
                        class="logo">
                @endif
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">
                @if (env('APP_NAME') === 'Rama Tranz Travel')
                    <img style="max-width:50px" src="{{ asset('img/logo.png') }}" alt="">
                @else
                    <img style="max-width:50px" src="{{ url('frontend-assets/img/logo-rasya-dark.png') }}"
                        alt="">
                @endif
            </a>
        </div>
        @role('Superadmin')
            @include('layouts.menu.nav-super-admin')
        @endrole

        @role('Admin Bank')
            @include('layouts.menu.nav-admin-bank')
        @endrole
    </aside>
</div>
