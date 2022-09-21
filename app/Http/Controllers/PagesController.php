<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard() {
        $users = User::all();
        return view('dashboard/dashboard')->with('users', $users);
    }

    public function mijnprofiel() {
        return view('dashboard/mijnprofiel');
    }

}
