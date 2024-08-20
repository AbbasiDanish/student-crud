<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #111;
            color: #f0f0f0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            max-width: 700px;
            padding: 40px;
            background: #1c1c1c;
            color: #e0e0e0;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        h1 {
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.5;
        }
        .btn {
            font-size: 1.25rem;
            padding: 15px 30px;
            border-radius: 50px;
            margin: 10px;
            transition: background-color 0.3s, border-color 0.3s;
            font-weight: 600;
        }
        .btn-primary {
            background-color: #000;
            border-color: #000;
        }
        .btn-primary:hover {
            background-color: #333;
            border-color: #333;
        }
        .btn-secondary {
            background-color: #fff;
            border-color: #fff;
            color: #000;
        }
        .btn-secondary:hover {
            background-color: #e0e0e0;
            border-color: #e0e0e0;
        }
        footer {
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #b0b0b0;
        }
        .footer-text {
            color: #b0b0b0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Platform</h1>
        <p>We provide an innovative solution for managing student records efficiently. Our platform offers user-friendly tools and features to streamline administrative tasks and enhance productivity.</p>
        <p>Log in to access your account or register to join our growing community and start benefiting from our services.</p>
        <a href="{{ route('login') }}"class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
        <footer>
            <p class="footer-text">&copy; {{ date('Y') }} Your Platform Name. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
