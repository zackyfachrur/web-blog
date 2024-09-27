@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <body class="home-page">
        <section class="home-intro container">
            {{-- Intro --}}
            <div class="home-header">
                <h1>Only us have a different style</h1>
                <p>Find your favorite style in Throw Clothes</p>
                <div class="button-group">
                    <button class="button-primary">See Product</button>
                    <button class="button-secondary">Learn more</button>
                </div>
            </div>
            <img class="avatar-header" src="{{ url('img/Avatar/Avatar-Home.svg') }}" alt="Avatar Images">

            {{-- End Intro --}}
        </section>
        {{-- Slogan SVG's --}}
        <div class="slogan-content">
            <img src="{{ url('img/Elements-Slogan.png') }}" alt="">
        </div>
        {{-- End Slogan SVG's --}}

        {{-- Wave To Bottom --}}
        @include('layouts.components.wavebottom')
        {{-- End Wave To Bottom --}}

        {{-- Home Content --}}
        <section class="home-content ">
            <div class="home-content-wrapper">
                <img src="{{ url('img/Avatar/Avatar-Customer.svg') }}" alt="">
                <div class="wrapper-primary" id="home-content">
                    <div class="button-group">
                        <button class="button-primary" id="button-primary-right"><i
                                class="ri-arrow-left-s-line"></i></button>
                        <button class="button-secondary" id="button-primary-left"><i
                                class="ri-arrow-right-s-line"></i></button>
                    </div>
                    <div class="wrapper-content" id="wrapper-primary-scroll">
                        @foreach ($avatars as $avatar)
                            <div class="card">
                                <div class="card-content">
                                    <div class="desc">
                                        <h2>{{ $avatar['avatar_header'] }}</h2>
                                        <p>{{ $avatar['avatar_desc'] }}</p>
                                        <button class="button-primary">Learn more.</button>
                                    </div>
                                </div>
                                <img src="{{ url($avatar['avatar_link']) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="wrapper-secondary">
                    <div class="button-group">
                        <button class="button-primary" id="button-secondary-right"><i
                                class="ri-arrow-left-s-line"></i></button>
                        <button class="button-secondary" id="button-secondary-left"><i
                                class="ri-arrow-right-s-line"></i></button>
                    </div>
                    <div class="wrapper-content" id="wrapper-secondary-scroll">
                        @foreach ($avatars as $avatar)
                            <div class="card">
                                <div class="card-content">
                                    <div class="desc">
                                        <h2>{{ $avatar['avatar_header'] }}</h2>
                                        <p>{{ $avatar['avatar_desc'] }}</p>
                                        <button class="button-primary">Learn more.</button>
                                    </div>
                                </div>
                                <img src="{{ url($avatar['avatar_link']) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- End Home Content --}}
    </body>

@endsection
