    <header>
        <nav>
            <li><a href="/quotes">Quotes</a></li>
            <li><a href="/quotes/create">Add new</a></li>
            <li><a href="/random">Random Quote</a></li>
            <li><a href="/about">About</a></li>
            @auth
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </nav>

    </header>
