<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('login');
});




// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//admin_dashboard Routes

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/listofstudents', [AdminController::class, 'listStudents'])->name('admin.liststudents');
    Route::get('/student/{id}', [AdminController::class, 'viewStudent'])->name('admin.viewstudent');
    Route::get('/incident_report/{id}', [AdminController::class, 'add_incident_report'])->name('add_incident_report');
    Route::post('/incident_report', [AdminController::class, 'storeIncidentReport'])->name('store_incident_report');
    Route::get('/view_incident_report/{id}', [AdminController::class, 'viewIncidentReport'])->name('view_incident_report');
    Route::get('/update_incident_report/{id}', [AdminController::class, 'edit_incident_report'])->name('edit_incident_report');
    Route::post('/update_incident_report', [AdminController::class, 'update_incident_report'])->name('update_incident_report');

});

//student_dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('student_dashboard');
    Route::get('/student/profile/{id}', [StudentController::class, 'profile'])->name('profile');

});




