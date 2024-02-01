<!DOCTYPE html>
<?php header('Access-Control-Allow-Origin: *'); ?>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ config('app.name', 'Pasar Kredit Murah lampung') }}</title>
    @if (env('APP_NAME') == 'Rama Tranz Travel')
        <meta name="google-site-verification" content="DsgOXo1zazrQkBMSsxO0Pgs2AG-reAQ2Q0SHeyxXtfc" />
    @else
        <meta name="google-site-verification" content="YxkQct7gDfQb2sFOt5Wsa7aCUiOB6j4YV3nS168kVLo" />
    @endif

    <script src="https://cdn.tiny.cloud/1/02ycb6jfsha69obgdavcwnfnm8bna9ez9cthzwha1gagrflu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- General CSS Files -->

    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-5.15.4-web/css/all.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend-assets') }}/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend-assets') }}/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend-assets') }}/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend-assets') }}/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend-assets') }}/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend-assets') }}/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend-assets') }}/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend-assets') }}/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend-assets') }}/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('frontend-assets') }}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend-assets') }}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('frontend-assets') }}/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend-assets') }}/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('frontend-assets') }}/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend-assets') }}/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('vendor/iziToast/iziToast.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('/css/app.css') }}?_{!! substr(str_shuffle('0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz'), 1, 12) !!}">
    <link rel="stylesheet" href="{{ url('/css/components.css') }}?_{!! substr(str_shuffle('0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz'), 1, 12) !!}">


    <link href="{{ asset('vendor/EasyAutocomplete-1.3.5/easy-autocomplete.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/EasyAutocomplete-1.3.5/easy-autocomplete.themes.min.css') }}" rel="stylesheet" />
    @stack('styles')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css"
        integrity="sha256-FdatTf20PQr/rWg+cAKfl6j4/IY3oohFAJ7gVC3M34E=" crossorigin="anonymous">
    <!-- select2-bootstrap4-theme -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1" style="margin-top: -20px !important">
            <div class="navbar-bg"></div>
            <!-- <x-jet-banner /> -->

            @include('layouts.topbar')

            @include('layouts.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                {{ $slot }}

            </div>
            <x-footer></x-footer>
        </div>
    </div>
    @stack('modals')


    @livewireScripts


    <!-- General JS Scripts -->


    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ url('/js/app.js') }}?v={{ rand(1, 1000) }}"></script>
    @if (\Illuminate\Support\Facades\Route::currentRouteName() !== 'profile.show')
        <script id="themejs" src="{{ url('/js/theme.js') }}?v={{ rand(1, 1000) }}"></script>
    @endif
    <script src="{{ asset('vendor/iziToast/iziToast.min.js') }}"></script>
    <script src="{{ asset('vendor/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
        integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://code.jquery.com/ui/1.8.23/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">
    <!-- script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script -->

    <script src="https://code.jquery.com/ui/1.8.23/jquery-ui.js"></script>
    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"
        integrity="sha256-AFAYEOkzB6iIKnTYZOdUf9FFje6lOTYdwRJKwTN5mks=" crossorigin="anonymous"></script>
    <!-- Page Specific JS File -->
    @stack('scripts')

</body>

</html>
