<div>
    <header class="header">
        <div class="topbar">
            <div class="header-left">
                <a href="{{ route('home') }}">
                    <x-jet-application-mark class="block h-9 w-auto" />
                </a>

                <div class="search-bar">
                    <img class="search-btn" src="{{ asset('images/search-bar.svg') }}" />
                </div>
            </div>

            <div class="login-header">
                @auth
                @else
                    <a href="{{ route('login') }}" class="login-btn">Log in</a>
                    <a href="{{ route('register') }}" class="signup-btn">Sign up</a>
                @endauth
            </div>
        </div>

        <nav class="menu">
            <a href="/">
                <img class="menu-btn" src="{{ asset('images/home.svg') }}" />
            </a>
            <a href="/search.php">
                <img class="menu-btn" src="{{ asset('images/search.svg') }}" />
            </a>
            <a href="">
                <img class="menu-btn" src="{{ asset('images/cart.svg') }}" />
            </a>
            <a href="">
                <img class="menu-btn" src="{{ asset('images/bell.svg') }}" />
            </a>
            <div class="dropdown-btn">
                <img class="menu-btn" id="menu-btn" src="{{ asset('images/more.svg') }}" />
                <div class="menu-dropdown no-display">
                    <a href="">Help</a>
                    <a href="">FAQ</a>
                </div>
            </div>
        </nav>
    </header>
</div>
