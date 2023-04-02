<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balita;
use App\User;
use Validator;
use Ramsey\Uuid\Uuid;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public $isoCode = 'ID'; // isocode Indonesia

    public function registrasi(Request $request)
    {
        $input = $request->except('_token');

        $validation = Validator::make($input,[
            'username'       => 'required|unique:users,username',
            'password'       => 'required',
            'email'          => 'required|email|unique:users,email',
            'name'           => 'required',
            'jku'            => 'required',
            'alamat'         => 'required',
            'phone'          => 'required|phone:'.$this->isoCode,
            // 'nama'           => 'required',
            // 'jkb'            => 'required',
            // 'umur'           => 'required|integer',
            // 'ttl'            => 'required',
        ]);

        if ($validation->fails()) {
            $errors = $validation->errors();
            if ($errors->has('username')) {
                return redirect()->back()->with('warning', 'Username sudah digunakan.');
            }
            if ($errors->has('email')) {
                return redirect()->back()->with('warning', 'Email sudah digunakan.');
            }
            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }


        $data                 = new User;
        $data->username       = $request->username;
        $data->name           = $request->name;
        $data->password       = Hash::make($request->password);// gunakan bcrypt untuk mengenkripsi password
        $data->jenis_kelamin  = $request->jku;
        $data->alamat         = $request->alamat;
        $data->no_hp          = PhoneNumber::make($request->phone, $this->isoCode);
        $data->email          = $request->email;
        $data->level          = 'user';
        $data->save();



        // $databalita                      = new Balita;
        // $databalita->id                  = Uuid::uuid4() -> getHex();
        // $databalita->user_id             = $data->id;
        // $databalita->nama_lengkap        = $request->nama;
        // $databalita->jenis_kelamin       = $request->jkb;
        // $databalita->umur                = $request->umur;
        // $databalita->ttl                 = $request->ttl;
        // $databalita->save();




        return redirect()->route('home-utama')->with('success','Berhasil Registrasi');
    }


}
