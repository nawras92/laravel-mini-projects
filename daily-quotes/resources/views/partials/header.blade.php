<header class="header">
    <nav class="header-nav nav">
        <div class="nav-section section">
            <a class="link nav-link" href="/quotes">Quotes</a>
            <a class="link nav-link" href="/random">Random Quote</a>
            <a class="link nav-link" href="/about">About</a>
            @auth
                <a class="link nav-link" href="/quotes/create">Add new</a>
            @endauth
        </div>
        <div class="nav-section section">
            @auth
                <a class="link nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="link nav-link" href="{{ route('logout') }}">Logout</a>
            @else
                <a class="link nav-link" href="{{ route('login') }}">Login</a>
                <a class="link nav-link" href="{{ route('register') }}">Register</a>
            @endauth

        </div>
    </nav>

</header>
