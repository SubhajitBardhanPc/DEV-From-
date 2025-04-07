<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamData;

class FormController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('exam_data_form');  // Return the form view you created
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'college_name' => 'required|string|max:255',
            'university_name' => 'required|string|max:255',
            'state' => 'required|string',
            'city' => 'required|string',
            'department' => 'required|string',
            'dob' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',   // Added required validation for image
            'signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',   // Added required validation for signature
        ]);

        // Handle the image and signature file uploads
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
        }

        // Save the data to the database
        ExamData::create([
            'name' => $validated['name'],
            'father_name' => $validated['father_name'],
            'mother_name' => $validated['mother_name'],
            'gender' => $validated['gender'],
            'college_name' => $validated['college_name'],
            'university_name' => $validated['university_name'],
            'state' => $validated['state'],
            'city' => $validated['city'],
            'department' => $validated['department'],
            'dob' => $validated['dob'],
            'image' => isset($imagePath) ? $imagePath : null,
            'signature' => isset($signaturePath) ? $signaturePath : null,
        ]);

        // Redirect with a success message
        return redirect()->route('form.show')->with('success', 'Your information has been submitted successfully!');
    }
    public function showAllExamData()
    {
        // Get all data from the exam_data table
        $examData = ExamData::all();  // You can use `paginate()` if you want pagination

        return view('admin.exam_data_list', compact('examData'));
    }
}
