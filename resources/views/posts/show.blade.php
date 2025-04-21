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
        width: 100px; /* Set a fixed width for buttons */
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

<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="card bg-white shadow-lg p-4 w-100" style="max-width: 700px;">
        <div class="text-center mb-4">
            <i class="bi bi-file-text" style="font-size: 2.5rem; color: #2575fc;"></i>
            <h3 class="mt-2">{{ $post->title }}</h3>
        </div>

        <p class="text-muted" style="white-space: pre-wrap;">{{ $post->body }}</p>

        <div class="mt-4 d-flex gap-2">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning text-center">
                <i class="bi bi-pencil-square me-1"></i> Edit
            </a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-center">
                    <i class="bi bi-trash me-1"></i> Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection