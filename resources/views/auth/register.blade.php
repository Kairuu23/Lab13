<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional for nice touch) -->
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
                <i class="bi bi-person-circle" style="font-size: 3rem; color: #2575fc;"></i>
                <h3 class="mt-2">Create Account</h3>
            </div>
            <form method="POST" action="/register">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="John Doe" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="********" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="********" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <p class="text-center mt-3">
                Already have an account? <a href="/login" class="text-decoration-none">Login here</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
