<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .card {
            border-radius: 1.25rem;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
            background: #fff;
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            border: 1px solid #ddd;
        }
        .card-header {
            background: #000;
            color: #fff;
            padding: 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-body {
            padding: 2rem;
        }
        .btn-primary {
            background-color: #000;
            border-color: #000;
            border-radius: 0.75rem;
            font-weight: bold;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #333;
            border-color: #333;
        }
        .form-control {
            border-radius: 0.75rem;
            padding: 0.75rem;
            font-size: 1rem;
            border: 1px solid #ced4da;
            background-color: #fff;
        }
        .form-label {
            font-weight: 600;
            color: #000;
        }
        .invalid-feedback {
            font-size: 0.875rem;
            color: #dc3545;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
