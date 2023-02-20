<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        // dd($user);
        return view('dashboard.index', compact('user'));
    }

    public function show()
    {
        $user_data = UserData::all();
        $d = $user_data;
        return view('user.index', compact('d'));
    }
}
