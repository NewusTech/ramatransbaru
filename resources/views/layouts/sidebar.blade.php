<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mt-2">
            <a href="/">
                <img style="max-width: 85px " src="{{ Storage::disk('public')->url(company_config('logo')) }}"
                    class="logo">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">
                <img style="max-width:50px" src="{{ Storage::disk('public')->url(company_config('logo')) }}" alt="">
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