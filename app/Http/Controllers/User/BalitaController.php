<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balita;
use Validator;
use Ramsey\Uuid\Uuid;


class BalitaController extends Controller
{
    public function index()
    {
        $user    = auth()->user();
        $data   = Balita::where('user_id', $user->id)->first();


        return view('user.balita', compact('data'));
    }

    public function edit($id)
    {
        if(!$data  = Balita::find($id)){
            return redirect()->route('user.balita')->with('warning', 'Data tidak ditemukan');
		}

        return view ('user.balitaedit' ,compact('data'));

    }

    public function update(request $request, $id)
    {
        if(!$data  = Balita::find($id)){
            return redirect()->route('user.balita')->with('warning', 'Data tidak ditemukan');
        }

        $input = $request->except('_token');

        $validation = Validator::make($input,[
            'nama_lengkap' => 'required',
            'jenis_kelamin'    => 'required',
            'umur'    => 'required',
            'ttl'    => 'required',

 		]);

		if ($validation->fails()) {

            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }


        $data            = Balita::findOrFail($id);
        $data->nama_lengkap = $request->nama_lengkap;
        $data->jenis_kelamin    = $request->jenis_kelamin;
        $data->umur    = $request->umur;
        $data->ttl    = $request->ttl;
        $data->save();

        return redirect()->route('user.balita')->with('success','Berhasil memperbaharui data');
    }

}
