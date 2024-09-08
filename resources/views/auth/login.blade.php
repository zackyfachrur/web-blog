@extends('layouts.auth')

@section('title', 'Login')

@section('content')

    <body class="login-page">
        <img src="{{ url('img/Login-avatar.png') }}" alt="Login Images">
        <div class="login-form">
            <h1 class="text-2xl font-semibold">Login into your Account</h1>
            <form class="max-w-sm mx-auto h-96" method="POST" action="{{ url('login') }}">
                @csrf
                <div class="mb-5">
                    @if (session()->has('error_message'))
                        <div class="bg-red-700 text-white px-5 py-2 flex flex-col">
                            <h4 class="card-title">Error Messages</h4>
                            <p class="card-text">{{ session()->get('error_message') }}</p>
                        </div>
                    @endif
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 text-xl"><i
                            class="ri-mail-line"></i> Email</label>
                    <input type="email" id="email" placeholder="Your Email" name="email" />
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 text-xl"><i
                            class="ri-lock-password-line"></i> Password</label>
                    <input type="password" id="password" name="password" placeholder="Your Password" />
                </div>
                <div class="mb-5">
                    <a href="{{ url('register') }}">Don't have account ? <span class="font-bold">Register</span> </a>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
@endsection
