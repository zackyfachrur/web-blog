<nav class="navbar" id="navbar">
    <a class="navbar-brand"><img src="{{ url('img/web-logo.png') }}" alt=""></a>
    {{-- <form action="">
        <input type="text" class="border-2 rounded-lg outline-none px-3">
    </form> --}}
    <ul class="navbar-list">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
    </ul>
    <div class="button-group-navbar">
        <button class="button-primary" onclick="window.location.assign('{{ 'register' }}')">Register</button>
        <button class="button-secondary" onclick="window.location.assign('{{ 'logout' }}')">Logout</button>
    </div>
</nav>
