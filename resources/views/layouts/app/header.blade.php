<nav class="navbar" id="navbar">
    <a class="navbar-brand"><img src="{{ url('img/web-logo.png') }}" alt=""></a>
    {{-- <form action="">
        <input type="text" class="border-2 rounded-lg outline-none px-3">
    </form> --}}
    <ul class="navbar-list">
        <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
        <li><a href="{{ url('/product') }}" class="{{ Request::is('product') ? 'active' : '' }}">Products</a></li>
        <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
        <li><a href="{{ url('/blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Blog</a></li>
    </ul>
    <div class="button-group-navbar">
        <button class="button-primary" onclick="window.location.assign('{{ 'register' }}')">Register</button>
        @if (!Auth::check())
            <button class="button-secondary" onclick="window.location.assign('{{ 'login' }}')">Login</button>
        @endif
        @if (Auth::check())
            <button class="button-secondary bg-red-600 hover:bg-red-500"
                onclick="window.location.assign('{{ 'logout' }}')">Logout</button>
        @endif
    </div>
</nav>
