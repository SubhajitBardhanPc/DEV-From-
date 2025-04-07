<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .offcanvas {
            background: linear-gradient(to bottom right, #343a40, #495057);
            color: white;
        }

        .offcanvas .offcanvas-title {
            font-weight: bold;
            color: #ffc107;
        }

        .offcanvas-body a {
            display: block;
            padding: 10px 15px;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .offcanvas-body a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }

        .list-icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark px-3">
  <div class="container-fluid">
    <button class="btn btn-outline-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#drawer" aria-controls="drawer">
      ☰
    </button>
    <a class="navbar-brand ms-3" href="{{ route('home') }}">LaravelForm</a>
  </div>
</nav>

<!-- Offcanvas Drawer -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="drawer" aria-labelledby="drawerLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="drawerLabel">👤 Select Role</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
        <a href="{{ route('admin.login') }}">
            <span class="list-icon">🛠️</span> Admin
        </a>
        <a href="{{ route('user.auth') }}">
            <span class="list-icon">👤</span> User
        </a>

  </div>
</div>

<!-- Main Content -->
<div class="container mt-5">
    <h2>Welcome to the Homepage</h2>
    <p>This is the root route with a stylish navbar and animated drawer.</p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- resources/views/admit_card_form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admit Card Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Enter Your Details to Fetch Admit Card</h2>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('fetch.admit.card') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="form-control" value="{{ old('dob') }}" required>
                @error('dob')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
