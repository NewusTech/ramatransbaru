<x-guest-layout>


    <div class="mb-3 text-sm text-muted text-white">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <x-jet-validation-errors class="mb-2" />

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div>
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" type="password" name="password" required autocomplete="current-password"
                autofocus />
        </div>

        <div class="d-flex justify-content-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Confirm') }}
            </x-jet-button>
        </div>
    </form>

</x-guest-layout>
