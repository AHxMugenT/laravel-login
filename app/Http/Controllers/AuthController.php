<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GetContoller;
use Illuminate\Database\QueryException;

class AuthController extends Controller
{


    public function loginPage()
    {
        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {
        $credential = $request->validate([
            "email" => "required|max:225",
            "password" => "required|min:8|max:225"
        ]);

     if(Auth::attempt($credential)){
        return redirect('/dashboard');
     };


        return redirect()->back()->withErrors($credential);

    }

    // REGISTER
    public function registerPage()
    {
        return view('auth.register');
    }

    public function registerAuth(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|min:3|max:200",
            "email" => "required|email:dns|unique:users|max:200",
            "password" => "required|min:8|max:200",
            "role" => "in:user,admin",
        ]);

        $validated['password'] = bcrypt($validated['password']);

        try {
            $credential = User::create($validated);
            UserData::create(['user_id' => $credential['id']]);
        } catch (QueryException $e){
            echo $e;
        }

        return redirect('/');
    }
}
