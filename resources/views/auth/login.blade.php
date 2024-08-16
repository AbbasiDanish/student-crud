<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Student Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
            background: #f8f9fa;
        }
        .login-card .card-header {
            background-color: #000;
            color: #fff;
            font-size: 1.5rem;
            font-weight: 700;
            border-radius: 15px 15px 0 0;
            padding: 1.5rem;
            text-align: center;
        }
        .login-card .form-control {
            border-radius: 50px;
            padding: 1rem;
            font-size: 1rem;
        }
        .login-card .btn-primary {
            background-color: #000;
            border-color: #000;
            border-radius: 50px;
            font-weight: 700;
            transition: background-color 0.3s, border-color 0.3s;
            color: #fff;
            width: 100%;
            padding: 1rem;
            margin-top: 1rem;
        }
        .login-card .btn-primary:hover {
            background-color: #333;
            border-color: #333;
        }
        .login-card .form-text {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="card-header">
                <i class="fas fa-user-circle"></i> Login
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <div class="mt-3">
                        <a href="{{ route('password.request') }}" class="form-text">Forgot Your Password?</a>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('register') }}" class="form-text">Don't have an account? Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
