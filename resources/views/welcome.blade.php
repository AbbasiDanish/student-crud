<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Student Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .hero-section {
            background: #000;
            color: #fff;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .hero-section .container {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 4.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8);
        }

        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero-section a {
            font-size: 1.25rem;
            font-weight: 700;
            border-radius: 50px;
            padding: 12px 30px;
            text-transform: uppercase;
            transition: background-color 0.3s, color 0.3s;
            color: #fff;
            border: 2px solid #fff;
        }

        .hero-section a.btn-primary:hover {
            background-color: #333;
            color: #fff;
            border-color: #333;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
            position: relative;
            background-color: #f8f9fa;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #000;
            color: #fff;
            font-size: 1.5rem;
            font-weight: 700;
            border-radius: 15px 15px 0 0;
            padding: 20px;
        }

        .card-body {
            padding: 2rem;
            text-align: center;
            background: #fff;
            border-radius: 0 0 15px 15px;
        }

        .card-body i {
            font-size: 3rem;
            color: #000;
            margin-bottom: 1rem;
        }

        .btn-secondary {
            background-color: #000;
            border-color: #000;
            border-radius: 50px;
            font-weight: 700;
            transition: background-color 0.3s, border-color 0.3s;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #333;
            border-color: #333;
        }

        .features-section {
            padding: 60px 0;
        }

        .feature-box {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, transform 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        .feature-box i {
            font-size: 2.5rem;
            color: #000;
            margin-bottom: 20px;
        }

        .feature-box h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .feature-box p {
            font-size: 1rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header class="hero-section">
        <div class="container">
            <h1>Welcome to Student Management System</h1>
            <p>Efficiently manage your students with our intuitive and powerful system.</p>
            <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg">View Students</a>
        </div>
    </header>
    <div class="container features-section">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Manage Students</div>
                    <div class="card-body">
                        <i class="fas fa-user-friends"></i>
                        <h3 class="card-title">Add & Edit Records</h3>
                        <p class="card-text">Easily manage student records with our user-friendly interface.</p>
                        <a href="{{ route('students.create') }}" class="btn btn-secondary">Add New Student</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Advanced Features</div>
                    <div class="card-body">
                        <i class="fas fa-cogs"></i>
                        <h3 class="card-title">Customizable Settings</h3>
                        <p class="card-text">Adapt the system to meet your specific needs with customizable settings.</p>
                        <a href="#" class="btn btn-secondary">Explore Features</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
