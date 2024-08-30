<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Show</title>
</head>

<body>
    <div class="container d-flex flex-column gap-2">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">{{ $post->id }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $post->title }}</h6>
                <p class="card-text">{{ $post->content }}</p>
                <a href="{{ url('posts') }}" class="card-link text-dark">Go Back</a>
            </div>
        </div>
    </div>


    {{-- Bootstrap JS --}}
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
