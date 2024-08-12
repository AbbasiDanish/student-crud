<!DOCTYPE html>
<html>
<head>
    <title>View Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>View Student</h2>
        <div class="form-group">
            <strong>Name:</strong>
            {{ $student->name }}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {{ $student->email }}
        </div>
        <div class="form-group">
            <strong>Phone:</strong>
            {{ $student->phone }}
        </div>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
    </div>
</body>
</html>
