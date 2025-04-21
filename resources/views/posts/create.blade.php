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
    .form-control {
        border-radius: 0.5rem;
    }
    .btn-success {
        background-color: #2575fc;
        border: none;
        border-radius: 0.5rem;
    }
    .btn-success:hover {
        background-color: #1a5dd0;
    }
</style>

<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="card shadow-lg p-4 bg-white w-100" style="max-width: 600px;">
        <div class="text-center mb-4">
            <i class="bi bi-pencil-square" style="font-size: 2.5rem; color: #2575fc;"></i>
            <h3 class="mt-2">Create New Post</h3>
        </div>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Post title..." required>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" id="body" class="form-control" rows="5" placeholder="Write your post here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-success w-100">Publish Post</button>
        </form>
    </div>
</div>
@endsection
