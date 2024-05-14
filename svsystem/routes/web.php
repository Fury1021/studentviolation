<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('chooseuser');
});




// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/loginstudent', [LoginController::class, 'showStudentLoginForm'])->name('loginstudent');
Route::post('/loginstudent', [LoginController::class, 'loginstudent']);



// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//admin_dashboard Routes

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
Route::get('/listofstudents', [AdminController::class, 'listStudents'])->name('admin.liststudents');

Route::get('/student/{id}', [AdminController::class, 'viewStudent'])->name('admin.viewstudent');
Route::get('/incident_report/{id}', [AdminController::class, 'add_incident_report'])->name('add_incident_report');
Route::get('/view_incident_report/{id}', [AdminController::class, 'view_incident_report'])->name('view_incident_report');


//student_dashboard

Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');


