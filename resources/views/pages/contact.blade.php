@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <body class="contact-page">

        <section class="contact-intro">
            <div class="contact-content">
                <div class="img-contact">
                    <img src={{ url('img/Avatar/Avatar-About.svg') }} alt="Contact Icon">
                </div>
                <form class="max-w-sm mx-auto">

                    <h1>Contact Us</h1>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="name@gmail.com" required />
                    </div>

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Leave a message..."></textarea>
                    {{-- <div class="label-contact flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="terms" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                                required />
                        </div>
                        <label for="terms" class="ms-2 text-sm font-medium text-gray-900">I agree with the <a
                                href="#" class="text-blue-600 hover:underline">terms and
                                conditions</a></label>
                    </div> --}}
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Send
                        messages</button>
                </form>
            </div>
        </section>
    </body>

@endsection
