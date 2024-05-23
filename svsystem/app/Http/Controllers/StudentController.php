<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncidentReport;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student_dashboard');
    }


    public function profile($id)
    {
        $student = User::where('role', 'student')->find($id);
        $incidentReports = IncidentReport::where('student_id', $student->id)->get();

        return view('profile', [
            'student' => $student,
            'incidentReports' => $incidentReports
        ]);
    }

  
    // Add more methods for other functionality
}
