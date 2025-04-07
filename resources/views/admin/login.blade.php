<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 1.5rem;
            border-radius: 15px 15px 0 0;
            padding: 20px;
        }

        .card-body {
            padding: 30px;
        }

        .card-footer {
            text-align: center;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 0 0 15px 15px;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
        }

        .btn {
            border-radius: 10px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .footer-text {
            color: #777;
            font-size: 0.9rem;
        }

        .footer-text a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('form.show') }}">Form</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="max-width: 400px; width: 100%;">
        <div class="card-header">
            <h4>Admin Login</h4>
        </div>
        <div class="card-body">
            <form id="loginForm" onsubmit="handleLogin(event)">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
        <div class="card-footer">
            <div class="footer-text">
                <p>Forgot your password? <a href="#">Reset it here</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Hidden input to store OTP for validation -->
<input type="hidden" id="otp-hidden">

<script>
    let generatedOTP = null;

    // Function to generate OTP
    function generateOTP() {
        const otp = Math.floor(100000 + Math.random() * 900000); // Generate a 6-digit OTP
        return otp;
    }

    // Handle login form submission
    function handleLogin(event) {
        event.preventDefault(); // Prevent form submission

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Validate email and password (You can add server-side validation as well)
        if (email && password) {
            // Generate OTP
            generatedOTP = generateOTP();
            alert("Your OTP is: " + generatedOTP); // Display OTP in an alert (for demonstration purposes)

            // Ask for OTP validation after login
            const otp = prompt("Enter OTP to proceed:");
            if (otp === generatedOTP.toString()) {
                alert("OTP is correct. Redirecting to admin dashboard...");
                window.location.href = "{{ route('admin.dashboard') }}"; // Redirect to admin dashboard
            } else {
                alert("Invalid OTP. Please try again.");
            }
        } else {
            alert("Please enter a valid email and password.");
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
