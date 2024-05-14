<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student_dashboard');
    }

    // Add more methods for other functionality
}
