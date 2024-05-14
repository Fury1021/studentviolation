<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function dashboard()
    {
        // Add your dashboard logic here
        return view('admin_dashboard');
    }

    public function listStudents()
    {
    // Retrieve all students from the database
    $students = User::where('role', 'student')->get();

    return view('listofstudents', ['students' => $students]);
    }

}

