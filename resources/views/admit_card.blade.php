<!-- resources/views/admit_card.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admit Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Admit Card</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Exam Details</h5>
                <p><strong>Name:</strong> {{ $examData->name }}</p>
                <p><strong>Father's Name:</strong> {{ $examData->father_name }}</p>
                <p><strong>Mother's Name:</strong> {{ $examData->mother_name }}</p>
                <p><strong>Gender:</strong> {{ $examData->gender }}</p>
                <p><strong>College Name:</strong> {{ $examData->college_name }}</p>
                <p><strong>University Name:</strong> {{ $examData->university_name }}</p>
                <p><strong>Department:</strong> {{ $examData->department }}</p>
                <p><strong>Date of Birth:</strong> {{ $examData->dob }}</p>

                <h5 class="mt-4">Exam Center</h5>
                <p><strong>State:</strong> {{ $examData->state }}</p>
                <p><strong>City:</strong> {{ $examData->city }}</p>

                <h5 class="mt-4">Photo and Signature</h5>
                <p><img src="{{ asset('storage/'.$examData->image) }}" alt="Student Photo" width="100"></p>
                <p><img src="{{ asset('storage/'.$examData->signature) }}" alt="Signature" width="100"></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
