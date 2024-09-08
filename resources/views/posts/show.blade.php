@extends('layouts.app')

@section('title', 'Ubah Postingan')

@section('content')
    <div class="container d-flex flex-column gap-2">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">{{ $post->id }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $post->title }}</h6>
                <p class="card-text">{{ $post->content }}</p>
                <small class="text-disabled">{{ $count_comments }} Komentar</small>
                @foreach ($comments as $comment)
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="text-sm">{{ $comment->comment }}</p>
                        </div>
                    </div>
                @endforeach
                <a href="{{ url('posts') }}" class="card-link text-dark">Go Back</a>
            </div>
        </div>
    </div>
@endsection
