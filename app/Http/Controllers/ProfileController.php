<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserDataRequest;
use Illuminate\Database\QueryException;


class ProfileController extends Controller
{

    private $service;

    // public function __construct()
    // {
    //     $this->service = new GetContoller();
    // }

    public function index($id)
    {
        // $user = UserData::where('user_id',auth()->user()->id)->first();
        $user = UserData::where('user_id', auth()->user()->id)->first();
        return view('profile.index', ['user_data' => $user]);
    }

    public function data()
    {
        $user_data = UserData::all();
        $d = $user_data;
        return view('profile.data', compact('d'));
    }

     public function store(Request $request)
    {
        // dd($request->toArray());
        $validated = $request->validate([
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'pekerjaan' => 'required',
            'jk' => 'required',
            'pendidikan' => 'required',
            'golongan_darah' => 'required',
            'nik' => 'required|max:13',
            'provinsi' => 'required',
            'kota_kab' => 'required',
            'kec' => 'required',
            'kel' => 'required',
            'alamat' => 'required',

        ]);

        $user_data = UserData::where('user_id', auth()->user()->id)->first();
        // dd($user_data);
        if($user_data != null ){
            if($user_data->update($validated)){
                return redirect('/profile/'. auth()->user()->id);
            }

        }
        return redirect('/form')->with('error', 'Server Error');
    }

    public function FormPage()
    {
        return view('profile.form');
    }
}

