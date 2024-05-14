<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\IncidentReport;
use App\Models\ViolationType;




class AdminController extends Controller
{
    public function dashboard()
    {
        // Add your dashboard logic here
        return view('admin_dashboard');
    }

    public function listStudents()
    {
        $students = User::where('role', 'student')->get();
        return view('listofstudents', ['students' => $students]);
    }

    public function viewStudent($id)
    {
        $student = User::where('role', 'student')->find($id);
        $incident_reports = IncidentReport::where('student_id', $id)->get();

        return view('view_student', [
            'student' => $student,
            'incident_reports' => $incident_reports
        ]);
    }

    public function addIncidentReport($id)
    {
        // Your logic to add an incident report
        return view('add_incident_report', ['student_id' => $id]);
    }

    public function viewIncidentReport($id)
    {
        $incident = IncidentReport::find($id);
        
        if ($incident) {
            $violationType = ViolationType::find($incident->violation_type_id);
            return view('view_incident_report', [
                'incident' => $incident,
                'violationType' => $violationType
            ]);
        } else {
            return redirect()->back()->with('error', 'Incident report not found');
        }
    }
}

