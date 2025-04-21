@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #6a11cb, #2575fc);
    }
    .card {
        border: none;
        border-radius: 1rem;
    }
    .btn {
        border-radius: 0.5rem;
    }
    .btn-warning {
        background-color: #ffc107;
        border: none;
    }
    .btn-danger {
        background-color: #dc3545;
        border: none;
    }
</style>

<div class="container py-5">
    <div class="text-center mb-4">
        <i class="bi bi-journal-text" style="font-size: 2.5rem; color: #fff;"></i>
        <h2 class="text-white mt-2">Your Posts</h2>
    </div>

    @foreach ($posts as $post)
        <div class="card bg-white p-4 shadow-sm mb-4">
            <h4 class="fw-bold">{{ $post->title }}</h4>
            <p class="mt-2 text-muted">{{ $post->body }}</p>
            <div class="mt-3 d-flex gap-2">
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">
                    <i class="bi bi-pencil-square me-1"></i> Edit
                </a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash me-1"></i> Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
