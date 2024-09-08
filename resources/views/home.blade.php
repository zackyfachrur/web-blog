@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <body class="home-page">
        <main class="home-content">
            <div class="home-intro">
                <h1>Only us have a different style</h1>
                <p>Find your favorite style in Nerox Store</p>
                <div class="button-group">
                    <button class="button-primary">See Product</button>
                    <button class="button-secondary">Learn more</button>
                </div>
            </div>
            <img class="avatar-intro" src="{{ url('img/Avatar-Home.png') }}" alt="">
        </main>
    </body>

    </html>
@endsection
