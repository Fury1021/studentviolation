<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncidentReport;
use App\Models\User;
use App\Models\ViolationType;

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

    public function viewIncidentReport($id)
    {
        $incident = IncidentReport::find($id);

        if ($incident) {
            $violationType = ViolationType::find($incident->violation_type_id);
            return view('student_view_incident_report', [
                'incident' => $incident,
                'violationType' => $violationType,
            ]);
        } else {
            return redirect()->back()->with('error', 'Incident report not found');
        }
    }
  
    // Add more methods for other functionality
}
