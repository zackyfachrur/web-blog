@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <form method="POST" action="{{ url('posts') }}" class="form-control">
        @csrf
        <h1 class="title">Buat Data Baru</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
