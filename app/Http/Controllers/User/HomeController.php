<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Balita;
use App\Models\Diagnosa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data   = Balita::where('user_id', $user->id)->first();

        $validasi2 = 0;
        $validasi = 0;
        if ($data == null){
            $validasi2 = 1;
        } elseif ($data != null){
            $validasi = Diagnosa::where('balita_id', $data->id)->count();
        }
        return view('user.home', compact('validasi','validasi2'));
    }

    public function registrasi()
    {
        return view('user.register');
    }
}


