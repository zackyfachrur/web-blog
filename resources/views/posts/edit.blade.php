@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
        @method('PATCH')
        @csrf
        <h1 class="title">Edit Data</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" value="{{ $post->title }}" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
@endsection
