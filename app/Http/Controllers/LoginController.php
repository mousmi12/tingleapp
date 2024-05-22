<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login');
    }
    public function doLogin(Request $request)
    {
        
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                $user = Auth::user();
                if ($user->status == 'Active') {
                    return redirect()->intended(route('admin.dashboard'));
                } else {
                    return redirect()->route('admin.login')->with('message', 'User Inactive');
                }
            } else {
              
                return redirect()->route('admin.login')->with('message', 'Login is Invalid');
            }
        } catch (\Exception $e) {

            // Handle exceptions here
            return redirect()->route('admin.login')->with('message', 'Login is Invalid');
        }
    }
    public function logout()
    {
        Auth::logout(); // Logout the user
        return redirect()->route('login');
    }
}
