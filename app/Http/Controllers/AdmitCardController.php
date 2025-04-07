<?php

namespace App\Http\Controllers;

use App\Models\ExamData;  // Import the ExamData model
use Illuminate\Http\Request;

class AdmitCardController extends Controller
{
    // Fetch the admit card based on name and dob
    public function fetchAdmitCard(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string',
            'dob' => 'required|date',
        ]);

        // Fetch the data from the database based on name and dob
        $examData = ExamData::where('name', $request->name)
                            ->where('dob', $request->dob)
                            ->first();

        // Check if data is found, if not return an error message
        if (!$examData) {
            return back()->with('error', 'No data found for the provided name and date of birth.');
        }

        // Return the admit card view with the fetched data
        return view('admit_card', compact('examData'));
    }
}
