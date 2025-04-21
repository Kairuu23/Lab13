<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
            width: 100px;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-outline-light {
            border-radius: 0.5rem;
        }

        header {
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="text-white py-3 shadow-sm">
        <div class="container text-center">
            <h1 class="mb-3">Blog Application</h1>
            <nav class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('posts.index') }}" class="btn btn-outline-light">Home</a>
                <a href="{{ route('posts.create') }}" class="btn btn-outline-light">Create Post</a>
                <form action="/logout" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Log Out</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container d-flex justify-content-center align-items-center py-5">
        <div class="card bg-white shadow-lg p-4 w-100" style="max-width: 800px;">
            @yield('content')
        </div>
    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
