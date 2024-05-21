<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(Request $request)
    {
        $users=User::all();
        return view('admin.profile.index',['users'=>$users]);
    }
    public function store(Request $request)
    {
       // dd($request);
        try {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('mail');
            $user->password = $request->input('password'); 
            $user->status = $request->input('status'); ;
            $user->save();  
            //dd($user) ;            
            return redirect()->route('admin.profile.index')->with('success', 'User has been created successfully.');
        } catch (Exception $e) {
    
            return redirect()->back()->withErrors(['message' => 'Failed to create employee. Please try again.', 'exception' => $e->getMessage()]);
        }
    }
}
