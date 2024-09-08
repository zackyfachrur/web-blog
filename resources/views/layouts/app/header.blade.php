<nav class="navbar">
    <a><img src="{{ url('img/web-logo.png') }}" alt=""></a>
    {{-- <form action="">
        <input type="text" class="border-2 rounded-lg outline-none px-3">
    </form> --}}
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
    </ul>
    <div class="button-group">
        <button class="button-item bg-red-600 text-white font-bold px-5 py-2 rounded-full"
            onclick="window.location.assign('{{ 'logout' }}')">Logout</button>
        <button class="button-item bg-blue-600 text-white font-bold px-5 py-2 rounded-full"
            onclick="window.location.assign('{{ 'register' }}')">Register</button>
    </div>
</nav>
