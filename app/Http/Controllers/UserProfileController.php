<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.profile.index');
    }
    public function store(Request $request)
    {
        return view('admin.profile.index');
    }
}
