<?php

namespace App\Http\Controllers;

use App\Models\ExamData;  // Change this to use the ExamData model
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show the admin login form
    public function showLoginForm()
    {
        return view('admin.login');  // Make sure you have a login.blade.php file in the 'admin' folder
    }

    // Show the admin dashboard
    public function dashboard()
    {
        // Fetch all exam data from the 'exam_data' table
        $examData = ExamData::all();  // Fetch data from the exam_data table

        // Return the view with the fetched data
        return view('admin.dashboard', compact('examData'));  // Pass 'examData' instead of 'gateForms'
    }

    // Handle the delete action
    public function deleteForm($id)
    {
        // Find the form by ID and delete it
        $form = ExamData::findOrFail($id);  // Use ExamData model instead of GateForm

        // Delete the form
        $form->delete();

        // Redirect back to the dashboard with a success message
        return redirect()->route('admin.dashboard')->with('success', 'Form deleted successfully.');
    }

    // Example method to handle form submission, validation, etc.
    // public function handleFormSubmission(Request $request) { }
}
