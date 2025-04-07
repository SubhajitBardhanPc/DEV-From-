<!DOCTYPE html>
<html>
<head>
    <title>Notice Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">LaravelForm</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('form.show') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('notice.index') }}">Notice</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Notice Content -->
<div class="container">
    <h2 class="mb-4">📢 Notice</h2>
    
    <div class="card">
        <div class="card-body">
            <h5>Important Update</h5>
            <p>The final submission deadline is <strong>April 15th, 2025</strong>.</p>
        </div>
    </div>
</div>

</body>
</html>
