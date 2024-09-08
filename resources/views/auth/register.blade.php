@extends('layouts.auth')

@section('title', 'Register')

@section('content')

    <body class="register-page">
        <img src="{{ url('img/Login-avatar.png') }}" alt="Login Images">
        <div class="register-form">
            <h1 class="text-2xl font-semibold">Create your Account</h1>
            <form class="max-w-sm mx-auto h-96" method="POST" action="{{ url('register') }}">
                @if (session()->has('error_message'))
                    <div class="bg-red-700 text-white px-5 py-2 flex flex-col">
                        <h4 class="card-title">Error Messages</h4>
                        <p class="card-text">{{ session()->get('error_message') }}</p>
                    </div>
                @endif
                @csrf
                <div class="mb-5">
                    <label for="name" class="form-label font-bold"><i class="ri-user-fill"></i> Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    @if ($errors->has('name'))
                        <span class="text-xl text-red-700 alert-error"><i class="ri-error-warning-line"></i></span>
                    @endif
                </div>
                <div class="mb-5">
                    <label for="email" class="form-label font-bold"><i class="ri-mail-line"></i> Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    @if ($errors->has('email'))
                        <span class="text-xl text-red-700 alert-error"><i class="ri-error-warning-line"></i></span>
                    @endif
                </div>
                <div class="mb-5">
                    <label for="pasword" class="form-label font-bold"><i class="ri-lock-password-line"></i> Create
                        Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Your Password">
                    @if ($errors->has('password'))
                        <span class="text-xl text-red-700 alert-error"><i class="ri-error-warning-line"></i></span>
                    @endif
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="form-label font-bold"><i class="ri-lock-password-fill"></i>
                        Confirm
                        Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Type again your password">
                </div>
                <div class="mb-5">
                    <a href="{{ url('login') }}">Have an account ? <span class="font-bold">Login</span> </a>
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </body>
@endsection
