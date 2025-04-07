<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admit Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Admit Card</h5>
        <p><strong>Name:</strong> {{ $examData->name }}</p>
        <p><strong>Father's Name:</strong> {{ $examData->father_name }}</p>
        <p><strong>Mother's Name:</strong> {{ $examData->mother_name }}</p>
        <p><strong>University:</strong> {{ $examData->university_name }}</p>
        <p><strong>College:</strong> {{ $examData->college_name }}</p>
        <p><strong>Department:</strong> {{ $examData->department }}</p>
        <p><strong>Date of Birth:</strong> {{ $examData->dob }}</p>
        <img src="{{ asset('storage/' . $examData->image) }}" alt="Image" width="100">
        <img src="{{ asset('storage/' . $examData->signature) }}" alt="Signature" width="100">
    </div>
</div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
