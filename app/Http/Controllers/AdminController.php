<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admindashboard()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin', compact('profileData'));
    }
}
