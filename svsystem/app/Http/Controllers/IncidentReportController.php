<?php

namespace App\Http\Controllers;

use App\Models\IncidentReport;
use Illuminate\Http\Request;

class IncidentReportController extends Controller
{
    // Other methods...

    public function destroy($id)
    {
        $incident = IncidentReport::findOrFail($id);
        $incident->delete();

        return redirect()->route('admin.liststudents')->with('success', 'Incident report deleted successfully.');
    }
}

