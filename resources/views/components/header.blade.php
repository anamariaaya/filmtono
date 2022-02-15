@php
    $active_home = "";
    $active_search = "";
    $active_cart = "";
    $active_bell = "";

    if (request()->routeIs('home')){
        $active_home = "active";
    } elseif (request()->routeIs('search')) {
        $active_search = "active";
    } elseif (request()->routeIs('cart')) {
        $active_cart = "active";
    } elseif (request()->routeIs('bell')) {
        $active_bell = "active";
    } else {

    }
@endphp

<div>
    <header class="header">
        <div class="topbar">
            <div class="header-left">
                <a href="{{ route('home') }}">
                    <x-jet-application-mark class="block h-9 w-auto" />
                </a>

                <div class="search-bar">
                    <img class="search-btn" src="{{ Storage::url('images/search-bar.svg') }}" />
                </div>
            </div>

            <div class="login-header">
                @auth
                    <a href="" class="login-btn">Profile</a>
                    {{-- <a href="" class="signup-btn">Log out</a> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="signup-btn" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">

                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="login-btn">Log in</a>
                    <a href="{{ route('register') }}" class="signup-btn">Sign up</a>
                @endauth
            </div>
        </div>

        <nav class="menu">
            <a href="/">
                <img class="menu-btn {{ $active_home }}" src="{{ Storage::url('images/home.svg') }}" />
            </a>
            <a href="/search.php">
                <img class="menu-btn {{ $active_search }}" src="{{ Storage::url('images/search.svg') }}" />
            </a>
            <a href="">
                <img class="menu-btn {{ $active_cart }}" src="{{ Storage::url('images/cart.svg') }}" />
            </a>
            <a href="">
                <img class="menu-btn {{ $active_bell }}" src="{{ Storage::url('images/bell.svg') }}" />
            </a>
            <div class="dropdown-btn">
                <img class="menu-btn" id="menu-btn" src="{{ Storage::url('images/more.svg') }}" />
                <div class="menu-dropdown no-display">
                    <a href="">Help</a>
                    <a href="">FAQ</a>
                </div>
            </div>
        </nav>
    </header>
</div>
