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
            max-width: 1000px;
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
            font-size: 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .btn-group {
            display: flex;
            gap: 10px;
        }

        .card-body {
            padding: 20px;
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

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table th {
            background-color: #343a40;
            color: #ffffff;
            border-top: none;
        }

        .btn-sm {
            padding: 0.3rem 0.75rem;
            font-size: 0.875rem;
        }

        .pagination {
            margin-top: 20px;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
        }

        .no-students-message {
            font-size: 1.1rem;
            color: #6c757d;
            text-align: center;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .card-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .btn-group {
                margin-top: 10px;
            }
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
                <span>Student List</span>
                <!-- Button Group -->
                <div class="btn-group">
                    <!-- Filter Icon -->
                    <button class="btn btn-light filter-icon" data-bs-toggle="collapse" data-bs-target="#filterForm"
                        aria-expanded="false" aria-controls="filterForm">
                        <i class="fas fa-filter"></i> Filter
                    </button>
                    <!-- New Button -->
                    <a href="{{ route('students.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> New
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Filter Form -->
                <!-- Filter Form -->
<div id="filterForm" class="collapse filter-form">
    <form method="GET" action="{{ route('students.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="name" placeholder="Search by name"
                    value="{{ request()->get('name') }}">
            </div>
            <div class="col-md-4 mb-3">
                <input type="email" class="form-control" name="email" placeholder="Search by email"
                    value="{{ request()->get('email') }}">
            </div>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" name="phone" placeholder="Search by phone"
                    value="{{ request()->get('phone') }}">
            </div>
            <div class="col-md-4 mb-3">
                <select class="form-control" name="gender">
                    <option value="" selected>Filter by gender</option>
                    <option value="male" {{ request()->get('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ request()->get('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ request()->get('gender') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <select class="form-control" name="status">
                    <option value="" selected>Filter by status</option>
                    <option value="active" {{ request()->get('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request()->get('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Apply Filters</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Reset Filters</a>
            </div>
        </div>
    </form>
</div>

                    </form>
                </div>

                <!-- Student Table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Parent/Guardian Name</th>
                            <th>Parent/Guardian Phone</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Enrollment Date</th>
                            <th>Status</th>
                            <th>Profile Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->parent_guardian_name }}</td>
                            <td>{{ $student->parent_guardian_phone }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->date_of_birth ? $student->date_of_birth : '' }}</td>
                            <td>{{ ucfirst($student->gender) }}</td>
                            <td>{{ $student->enrollment_date ? $student->enrollment_date : '' }}</td>
                            <td>{{ ucfirst($student->status) }}</td>
                            <td>
                            @if ($student->profile_picture)
                            <a href="{{ asset('storage/' . $student->profile_picture) }}" download>
                            <img src="{{ asset('storage/' . $student->profile_picture) }}" alt="Profile Picture" style="width: 100px; height: 100px; object-fit: cover;">
                            </a>
                            @else
                            No Picture
                            @endif
                          </td>

                            <td class="actions">
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
                            <td colspan="13" class="no-students-message">No students found</td>
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
