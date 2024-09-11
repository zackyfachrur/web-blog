@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <body class="about-page">
        <section class="about-intro">
            <img class="building" src="{{ url('img/Building-About.svg') }}" alt="">
            <div class="about-header">
                <h1>Throw Clothes</h1>
                <p>Throw Clothes is a fashion brand that offers casual and semi-formal clothing with modern designs and
                    high-quality materials. We prioritize comfort and durability, using the best fabrics to create stylish
                    products that fit your lifestyle.</p>
                <div class="button-group">
                    <button class="button-primary">See Product</button>
                    <button class="button-secondary">Learn More</button>
                </div>
            </div>

        </section>

        <section></section>
    </body>
@endsection
