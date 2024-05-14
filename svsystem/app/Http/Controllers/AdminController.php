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

    public function addIncidentReportForm($id)
    {
        $student = User::findOrFail($id);
        $violationTypes = ViolationType::all();
        return view('admin.add_incident_report', compact('student', 'violationTypes'));
    }

    public function storeIncidentReport(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'details' => 'required|string',
            'level_of_violation' => 'required|string',
            'intervention_program' => 'required|string',
            'violation_type_id' => 'required|integer',
            'student_id' => 'required|integer|exists:users,id'
        ]);

        IncidentReport::create([
            'date' => $request->date,
            'details' => $request->details,
            'level_of_violation' => $request->level_of_violation,
            'intervention_program' => $request->intervention_program,
            'violation_type_id' => $request->violation_type_id,
            'student_id' => $request->student_id,
        ]);

        return redirect()->route('admin.viewstudent', $request->student_id)->with('success', 'Incident report added successfully.');
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

