<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ url('style.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/remixicon.css') }}">
    <script src="{{ url('https://cdn.tailwindcss.com') }}"></script>
    <title>Web | @yield('title')</title>
</head>

{{-- Header --}}
{{-- @include('layouts.app.header') --}}

{{-- Content --}}
@yield('content')



<script src="{{ url('js/style.js') }}"></script>

</html>
