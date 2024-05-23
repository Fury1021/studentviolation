<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\IncidentReport;
use App\Models\ViolationType;
use Auth;

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
        $incident_reports = IncidentReport::where('student_id', $id)->with('violationType')->get();
    
        return view('view_student', [
            'student' => $student,
            'incident_reports' => $incident_reports
        ]);
    }
    

    public function add_incident_report($id)
    {
        $student = User::find($id);
        $violationTypes = ViolationType::all();

        return view('add_incident_report', [
            'student' => $student,
            'violationTypes' => $violationTypes
        ]);
    }

    public function storeIncidentReport(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'details' => 'required|string',
            'level_of_violation' => 'required|string',
            'intervention_program' => 'required|string',
            'violation_type_id' => 'required|integer',
            'student_id' => 'required|integer',
            'reported_by' => 'required|integer',
        ]);

        IncidentReport::create([
            'date' => $request->date,
            'details' => $request->details,
            'level_of_violation' => $request->level_of_violation,
            'intervention_program' => $request->intervention_program,
            'violation_type_id' => $request->violation_type_id,
            'student_id' => $request->student_id,
            'reported_by' => $request->reported_by,
        ]);

        return redirect()->route('admin.viewstudent', ['id' => $request->student_id])
                        ->with('success', 'Incident report added successfully.');
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
    
    public function edit_incident_report($id)
    {
        $incident = IncidentReport::find($id);
        $violationTypes = ViolationType::all();
    
        return view('edit_incident_report', [
            'incident' => $incident,
            'violationTypes' => $violationTypes
        ]);
    }
    
    public function update_incident_report(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'date' => 'required|date',
            'details' => 'required|string',
            'level_of_violation' => 'required|string',
            'violation_type_id' => 'required|integer',
        ]);

        $incident = IncidentReport::find($request->id);

        if (!$incident) {
            return redirect()->back()->with('error', 'Incident report not found');
        }

        $incident->date = $request->date;
        $incident->details = $request->details;
        $incident->level_of_violation = $request->level_of_violation;
        $incident->violation_type_id = $request->violation_type_id;
        $incident->save();

        return redirect()->route('admin.viewstudent', ['id' => $incident->student_id])->with('success', 'Incident report updated successfully.');
    }

    

}
