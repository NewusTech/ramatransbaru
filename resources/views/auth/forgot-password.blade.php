<x-guest-layout>


    <div class="mb-3 text-white">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <x-jet-validation-errors class="mb-3" />
    <h1 style="display: none;">Login dan Menjelajahi Dunia dengan Rama Tranz Travel: Mengungkap Pesona dan Manfaatnya
        Perjalanan Dengan Kami</h1>
    <form method="POST" action="/forgot-password">
        @csrf

        <div class="form-group">
            <x-jet-label value="Email" />
            <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-login btn-lg btn-block" tabindex="4">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>

</x-guest-layout>
