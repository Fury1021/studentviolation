<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Check if the user's password needs to be upgraded to Bcrypt
            if (!Hash::needsRehash(Auth::user()->password)) {
                // Retrieve the user model from the database
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
            }
    
            if (Auth::user()->role === 'admin') {
                return view('admin_dashboard');
            } elseif (Auth::user()->role === 'student') {
                return view('student_dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid role');
            }
        }
    
        return redirect()->back()->with('error', 'Invalid email or password');
    }
    
    

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
