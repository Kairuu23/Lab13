@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create Post</button>
    </form>
</div>
@endsection