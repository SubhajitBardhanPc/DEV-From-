<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details Form</title>
    <!-- Include Bootstrap for styling (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layouts.app')  <!-- Extends the layout file if you have one -->

    @section('content')
    <div class="container mt-5">
        <h2>Submit Personal Details</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="father_name" class="form-label">Father's Name</label>
                <input type="text" id="father_name" name="father_name" class="form-control" value="{{ old('father_name') }}" required>
                @error('father_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="mother_name" class="form-label">Mother's Name</label>
                <input type="text" id="mother_name" name="mother_name" class="form-control" value="{{ old('mother_name') }}" required>
                @error('mother_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select id="gender" name="gender" class="form-select" required>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="college_name" class="form-label">College Name</label>
                <input type="text" id="college_name" name="college_name" class="form-control" value="{{ old('college_name') }}" required>
                @error('college_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="university_name" class="form-label">University Name</label>
                <input type="text" id="university_name" name="university_name" class="form-control" value="{{ old('university_name') }}" required>
                @error('university_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <select id="state" name="state" class="form-select" required>
                    <option value="State 1" {{ old('state') == 'State 1' ? 'selected' : '' }}>State 1</option>
                    <option value="State 2" {{ old('state') == 'State 2' ? 'selected' : '' }}>State 2</option>
                    <!-- Add more states as needed -->
                </select>
                @error('state')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <select id="city" name="city" class="form-select" required>
                    <option value="City 1" {{ old('city') == 'City 1' ? 'selected' : '' }}>City 1</option>
                    <option value="City 2" {{ old('city') == 'City 2' ? 'selected' : '' }}>City 2</option>
                    <!-- Add more cities as needed -->
                </select>
                @error('city')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select id="department" name="department" class="form-select" required>
                    <option value="Computer Science" {{ old('department') == 'Computer Science' ? 'selected' : '' }}>Computer Science</option>
                    <option value="Mechanical" {{ old('department') == 'Mechanical' ? 'selected' : '' }}>Mechanical</option>
                    <option value="Electrical" {{ old('department') == 'Electrical' ? 'selected' : '' }}>Electrical</option>
                    <option value="Civil" {{ old('department') == 'Civil' ? 'selected' : '' }}>Civil</option>
                    <!-- Add more departments as needed -->
                </select>
                @error('department')
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

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Signature Upload -->
            <div class="mb-3">
                <label for="signature" class="form-label">Upload Signature</label>
                <input type="file" id="signature" name="signature" class="form-control" accept="image/*" required>
                @error('signature')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
