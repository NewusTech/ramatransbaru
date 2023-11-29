@extends('frontend.layouts.layouts-login')
@section('title', 'Login')
@section('content')
    {{-- <x-guest-layout> --}}

    <div class="content-wrap page-login">
        <div class="subsite-banner">
            <img src="{{ asset('frontend-assets/img/bg-login.jpg') }}">
        </div>
        <div class="subsite subsite-with-banner">
            <h1 style="display: none;">Login dan Menjelajahi Dunia dengan Rama Tranz Travel: Mengungkap Pesona dan Manfaatnya
                Perjalanan Dengan Kami</h1>
            <div class="text-center mb-3">
                <img style="max-width:300px" src="{{ asset('img/logo.png') }}" alt="{{ company_config('name') }}">
            </div>
            <p class="text-center">
                Selamat datang di website {{ company_config('name') ?? config('app.name') }}
            </p>
            <x-jet-validation-errors class="mb-3" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form-group" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email"
                        :value="old('email')" required placeholder="{{ __('email') }}" />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mb-3">

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                        name="password" required placeholder="{{ __('Password') }}" autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="row field-row login-submit">
                    <div class="col">
                        <div class="button">
                            @if (Route::has('password.request'))
                                <a class=" mr-3" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            <button class="theme-button">{{ __('Log in') }}</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row field-row text-with-link">
                <div class="col">
                    <div class="field-group">
                        {{-- Don't have an Account ? <a href="register.html">Sign Up</a> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
