<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }
        .container {
            margin-top: 50px;
            max-width: 900px;
        }
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #343a40;
            color: #ffffff;
            border-bottom: none;
            border-radius: 8px 8px 0 0;
            font-size: 18px;
            font-weight: bold;
            position: relative;
        }
        .card-header .btn-group {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }
        .card-header .btn-group .btn {
            margin-left: 10px;
        }
        .card-body {
            padding: 30px;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
        }
        .btn-primary:hover {
            opacity: 0.8;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            border-radius: 20px;
        }
        .btn-secondary:hover {
            opacity: 0.8;
        }
        .filter-icon {
            cursor: pointer;
        }
        .filter-form {
            display: none;
        }
        .filter-form.show {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('students.index') }}">Student Management System</a>
        </div>
    </nav>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                Student List
                <!-- Button Group -->
                <div class="btn-group float-end" role="group">
                    <!-- Filter Icon -->
                    <span class="btn btn-light filter-icon" data-bs-toggle="collapse" data-bs-target="#filterForm" aria-expanded="false" aria-controls="filterForm">
                        <i class="fas fa-filter"></i> Filter
                    </span>
                    <!-- New Button -->
                    <a href="{{ route('students.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> New
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Filter Form -->
                <div id="filterForm" class="collapse filter-form">
                    <form method="GET" action="{{ route('students.index') }}" class="mb-4">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Search by name" value="{{ request()->get('name') }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Search by email" value="{{ request()->get('email') }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" name="phone" placeholder="Search by phone" value="{{ request()->get('phone') }}">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                                <a href="{{ route('students.index') }}" class="btn btn-secondary">Reset Filters</a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Student Table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No students found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
