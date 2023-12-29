<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergi Bersama {{ env('APP_NAME') }}, Harga Murah Meriah</title>
    <meta name="description" content="Rama Tranz Travel, Penyedia Agen Perjalanan Terbaik">

    <!-- Fonts -->
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
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        .login-block {
            /* background: #DE6262; */
            /* fallback for old browsers */
            /* background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262); */
            /* Chrome 10-25, Safari 5.1-6 */
            /* background: linear-gradient(to bottom, #FFB88C, #DE6262); */
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            float: left;
            width: 100%;
            padding: 50px 0;
        }

        #login-section {
            background: url('{{ asset('frontend-assets/img/bg-login.jpg') }}') no-repeat left bottom;
            background-size: cover;
            min-height: 500px;
            border-radius: 10px;
            padding: 0;
        }


        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .carousel-inner {
            border-radius: 10px 0px 0px 10px;
        }

        .carousel-caption {
            text-align: left;
            left: 5%;
        }

        .login-sec {
            background: #fff;
            opacity: 0.9;
            padding: 50px 30px;
            position: relative;
            border-radius: 0px 10px 10px 0px;
        }

        .login-sec .copy-text {
            position: absolute;
            /* color: #DBDDE0; */
            width: 80%;
            bottom: 20px;
            font-size: 13px;
            text-align: center;
        }

        .login-sec .copy-text i {
            /* color: #FEB58A; */
        }

        .login-sec .copy-text a {
            /* color: #E36262; */
        }

        .login-sec h2 {
            margin-bottom: 30px;
            font-weight: 800;
            font-size: 30px;
            /* color: #DE6262; */
        }

        .login-sec h2:after {
            content: " ";
            width: 100px;
            height: 5px;
            background: #FEB58A;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto
        }

        .btn-login {
            background: #0b7b1a;
            color: #fff;
            font-weight: 600;
        }

        .banner-text {
            width: 70%;
            position: absolute;
            bottom: 40px;
            padding-left: 20px;
        }

        .banner-text h2 {
            color: #fff;
            font-weight: 600;
        }

        .banner-text h2:after {
            content: " ";
            width: 100px;
            height: 5px;
            background: #FFF;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
        }

        .banner-text p {
            color: #fff;
        }

        .logo {
            max-width: 20%;
        }
    </style>
</head>

<body>
    <section class="login-block">
        <div class="container">
            <div class="row" id="login-section">

                <div class="col-md-7 banner-sec text-center pt-5">
                    <h4 class="text-white mt-5">


                    </h4>
                </div>
                <div class="col-md-5 login-sec">
                    <div class="text-center mb-3">
                        <img style="max-width:300px" src="{{ asset('img/logo.png') }}"
                            alt="{{ company_config('name') }}">
                    </div>
                    {{ $slot }}

                    <div class="copy-text text-center">
                        Copyright &copy; {{ date('Y') }}
                        <strong>{{ env('APP_NAME') }}
                        </strong>
                    </div>
                </div>
            </div>
    </section>

    @livewireScripts

    @stack('scripts')
</body>

</html>
