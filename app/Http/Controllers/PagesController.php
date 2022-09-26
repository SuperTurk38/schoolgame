<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard() {
        $users = User::all();
        $teams = Team::all();
        return view('dashboard/dashboard')->with('users', $users)->with('teams', $teams);
    }

    public function mijnprofiel() {
        return view('dashboard/mijnprofiel');
    }

}
