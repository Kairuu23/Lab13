@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-white p-4 rounded shadow-sm">
        <h1>{{ $post->title }}</h1>
        <p class="mt-3">{{ $post->body }}</p>
        <div class="mt-4">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection