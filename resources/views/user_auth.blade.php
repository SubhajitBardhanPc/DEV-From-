<!DOCTYPE html>
<html>
<head>
    <title>User Auth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .toggle-link {
            margin-top: 10px;
            display: block;
            text-align: center;
            color: #0d6efd;
            cursor: pointer;
        }

        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
        }

        @media (max-width: 767px) {
            .auth-container {
                padding: 0 1rem;
            }
        }
    </style>
</head>
<body class="bg-light">

<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LaravelForm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ✅ Auth Section -->
<div class="container mt-5 auth-container">
    <h3 class="text-center mb-4">User Authentication</h3>

    <div class="row justify-content-center">
        <!-- 🔐 Login Form -->
        <div class="col-lg-6 col-md-8 col-sm-10" id="login-card" style="{{ session('error') ? '' : 'display: none;' }}">
            <div class="card p-4">
                <h5 class="text-center">User Login</h5>

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form method="POST" action="{{ route('user.login') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

                <span class="toggle-link" onclick="showRegister()">Don't have an account? Register</span>
            </div>
        </div>

        <!-- 📝 Register Form -->
        <div class="col-lg-6 col-md-8 col-sm-10" id="register-card" style="{{ session('error') ? 'display: none;' : '' }}">
            <div class="card p-4">
                <h5 class="text-center">User Register</h5>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('user.register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>

                <span class="toggle-link" onclick="showLogin()">Already have an account? Login</span>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showLogin() {
        document.getElementById('register-card').style.display = 'none';
        document.getElementById('login-card').style.display = 'block';
    }

    function showRegister() {
        document.getElementById('login-card').style.display = 'none';
        document.getElementById('register-card').style.display = 'block';
    }
</script>
</body>
</html>
