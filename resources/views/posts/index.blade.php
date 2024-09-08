@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container d-flex flex-column  gap-2">
        <button class="btn btn-primary" onclick="window.location.assign('{{ url('posts/create') }}')">Create Post
            +</button>
        @foreach ($posts as $post)
            <div class="card text-center">
                <div class="card-header">
                    {{ $post->id }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Edit</a>
                </div>
                <div class="card-footer text-body-secondary">
                    {{ $post->created_at }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
