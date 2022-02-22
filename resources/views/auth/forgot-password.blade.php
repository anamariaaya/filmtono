<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <a href="{{ route('home') }}">
                <x-jet-authentication-card-logo />
            </a> --}}
        </x-slot>

        <div class="container">
            <h1>{{ __('Forgot your password?') }}</h1>
            <p>{{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
        

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />
            <div class="recuadro">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="campos">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="forgot">
                        <x-jet-button class="botones">
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
            
        </div>
    </x-jet-authentication-card>
</x-app-layout>
