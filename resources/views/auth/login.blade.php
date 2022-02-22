<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <a href="{{ route('home') }}">
                <x-jet-authentication-card-logo />
            </a> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

    <section class="container">
        <h1>{{ __('Log In') }}</h1>
        <div class="recuadro">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="campos">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="campos">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="rememberMe">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span>{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="forgot">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="botones">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </section>

    </x-jet-authentication-card>
</x-guest-layout>
