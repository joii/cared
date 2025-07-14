<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminLogin()
    {
        return view('admin.login');
    } //End Method

     public function AdminDashboard()
    {
        return view('admin.dashboard');
    } //End Method

     public function AdminLoginSubmit(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];

         // Check if user exists

        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin.dashboard')->with('success', 'You are logged in successfully!');
        }else{
            return redirect()->route('admin.login')->with('error', 'Invalid credentials!');
        }


    } //End Method

    public function AdminLogout()
    {
        Auth::guard('admin')->logout();

       return redirect()->route('admin.login')->with('success', 'You have logged out successfully!');
    } //End Method
}
