@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Your Posts</h1>
    @foreach ($posts as $post)
    <div class="bg-white p-4 rounded shadow-sm mb-3">
        <h2>{{ $post->title }}</h2>
        <p class="mt-2">{{ $post->body }}</p>
        <div class="mt-3">
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection