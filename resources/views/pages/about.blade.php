@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <body class="about-page">
        <section class="about-intro container">
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

        {{-- Story Content --}}
        @include('layouts.components.waveright')
        <section class="about-vision">
            <div class="about-story-content">
                <h2>Our Story</h2>
                <p>Throw Clothes was born out of a passion for fashion and a desire to reduce waste in the clothing
                    industry. In 2023, we started with the idea of giving discarded clothes a new life through upcycling and
                    sustainable practices. Today, our mission is to provide high-quality, eco-friendly clothing options that
                    are both trendy and environmentally responsible.</p>
            </div>
            <div class="about-mission-content">
                <h2>Our Mission</h2>
                <p>At Throw Clothes, we aim to transform how people view fashion by offering sustainable alternatives that
                    blend style with responsibility. Our mission is to make eco-friendly fashion accessible and inspire a
                    new generation of consumers to make conscious, planet-friendly choices without compromising on style.
                </p>
            </div>
        </section>
        {{-- End Story Content --}}
        @include('layouts.components.waveleft')
        {{-- Value Content --}}
        <section class="about-value container"> <img class="about-avatar" src="{{ url('img/Avatar/Avatar-About.svg') }}"
                alt="About Avatar">
            <div class="about-value-content">

                <h2>Our Values</h2>
                <ul>
                    <li>
                        <h3 class="title-value" id="title-value-first" onclick="descValueShow(descValueFirst)">
                            Sustainability <i class="ri-arrow-down-s-line" id="arrow-first"></i>
                        </h3>
                        <p class="hidden desc-value" id="desc-value-first">We prioritize eco-friendly materials and
                            processes in
                            all
                            our
                            collections.</p>
                    </li>
                    <li>
                        <h3 class="title-value" id="title-value-second" onclick="descValueShow(descValueSecond)">Inclusivity
                            <i class="ri-arrow-down-s-line" id="arrow-second"></i>
                        </h3>
                        <p class="hidden desc-value" id="desc-value-second">Our clothing is designed for everyone,
                            regardless of
                            size,
                            style, or background.</p>
                    </li>
                    <li>
                        <h3 class="title-value" id="title-value-third" onclick="descValueShow(descValueThird)">Quality <i
                                class="ri-arrow-down-s-line" id="arrow-third"></i></h3>
                        <p class="hidden desc-value" id="desc-value-third">We are committed to offering high-quality,
                            durable
                            clothing
                            that
                            lasts.</p>
                    </li>
                </ul>
            </div>

        </section>
        {{-- End Value Content --}}

    </body>
@endsection
