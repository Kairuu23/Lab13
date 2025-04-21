<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .form-control {
            border-radius: 0.5rem;
        }
        .btn-primary {
            background-color: #2575fc;
            border: none;
            border-radius: 0.5rem;
        }
        .btn-primary:hover {
            background-color: #1a5dd0;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4 bg-white" style="width: 100%; max-width: 420px;">
            <div class="text-center mb-4">
                <i class="bi bi-box-arrow-in-right" style="font-size: 3rem; color: #2575fc;"></i>
                <h3 class="mt-2">Login</h3>
            </div>

            <!-- Success message -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Error messages -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="********" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <p class="text-center mt-3">
                Don’t have an account? <a href="/register" class="text-decoration-none">Register here</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
