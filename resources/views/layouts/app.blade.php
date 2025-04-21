\
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Header -->
    <header class="bg-primary text-white py-3 shadow-sm">
        <div class="container text-center">
            <h1 class="mb-3">Blog Application</h1>
            <nav class="d-flex justify-content-center gap-3">
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
    <main class="container my-5">
        <div class="bg-white p-4 rounded shadow-sm">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3">
        <p class="mb-0">&copy; 2025 Blog Application</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>