<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Exam Data</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Gender</th>
                    <th>College Name</th>
                    <th>University Name</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Department</th>
                    <th>Date of Birth</th>
                    <th>Image</th>
                    <th>Signature</th>
                </tr>
            </thead>
            <tbody>
                @foreach($examData as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->father_name }}</td>
                        <td>{{ $data->mother_name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->college_name }}</td>
                        <td>{{ $data->university_name }}</td>
                        <td>{{ $data->state }}</td>
                        <td>{{ $data->city }}</td>
                        <td>{{ $data->department }}</td>
                        <td>{{ $data->dob }}</td>
                        <td><img src="{{ asset('storage/' . $data->image) }}" alt="Image" width="100"></td>
                        <td><img src="{{ asset('storage/' . $data->signature) }}" alt="Signature" width="100"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
