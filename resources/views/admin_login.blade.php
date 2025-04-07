<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card mx-auto p-4 shadow-lg" style="max-width: 400px;">
        <h4 class="text-center mb-3">Admin Login</h4>
        <form action="{{ route('admin.send.otp') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="admin_email">Admin Email</label>
                <input type="email" class="form-control" id="admin_email" name="email" placeholder="Enter admin email" required>
            </div>
            <button type="submit" class="btn btn-dark w-100">Send OTP</button>
        </form>
    </div>
</div>

</body>
</html>
