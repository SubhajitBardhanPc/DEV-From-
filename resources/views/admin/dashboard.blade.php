<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the admin dashboard */
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand {
            color: white !important;
        }
        .navbar-nav .nav-link {
            color: white !important;
        }
        .navbar-nav .nav-link:hover {
            background-color: #0056b3;
            border-radius: 5px;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .btn-danger {
            transition: all 0.3s ease;
        }
        .btn-danger:hover {
            background-color: #dc3545;
            color: white;
            transform: scale(1.05);
        }
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .table-striped tbody tr:hover {
            background-color: #e9ecef;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <!-- Form Button -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('form.show') }}">Form</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="card p-4">
        <h2 class="text-center">Welcome to the Admin Dashboard</h2>
        <p class="text-center">Only authenticated admins can access this page.</p>
        <hr>

        <!-- Table to display exam data -->
        <h3 class="text-center mb-4">Submitted Exam Data</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <!-- <th>Email</th> -->
                    <th>Department</th>
                    <!-- <th>Branch</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($examData as $form)  <!-- Ensure the variable name is correct here -->
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $form->name }}</td>
                        <!-- <td>{{ $form->email }}</td>   This will show email -->
                        <td>{{ $form->department }}</td>
                        <!-- <td>{{ $form->branch }}</td>   This will show branch -->
                        <td>
                            <form action="{{ route('admin.deleteForm', $form->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this form?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2025 Admin Dashboard. All Rights Reserved.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
