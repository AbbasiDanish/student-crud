<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Features</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .hero-section {
            background: #000;
            color: #fff;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
            background-color: #fff;
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
        }

        .card-body i {
            font-size: 3rem;
            color: #000;
            margin-bottom: 1rem;
        }

        .card-body h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .card-body p {
            font-size: 1rem;
            margin-bottom: 20px;
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
    </style>
</head>
<body>
    <header class="hero-section">
        <div class="container">
            <h1>Advanced Features</h1>
            <p>Explore and customize the settings of the Student Management System.</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
