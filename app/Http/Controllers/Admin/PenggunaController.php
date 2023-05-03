<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Balita;
use App\User;
use Validator;
use Ramsey\Uuid\Uuid;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = DB::table('users')
    ->leftJoin('balita','users.id', '=', 'balita.user_id')
    ->select('balita.*', 'users.*')
    ->where('users.level', '=', 'user')
    ->get();


        return view('admin.pengguna.index', compact('data'));
    }


    public $isoCode = 'ID'; // isocode Indonesia

    public function create()
    {
        return view('admin.pengguna.create');
    }

    public function store(request $request)
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
            'nama'           => 'required',
            'jkb'            => 'required',
            'umur'           => 'required|integer',
            'ttl'            => 'required',
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

        $databalita                      = new Balita;
        $databalita->id                  = Uuid::uuid4() -> getHex();
        $databalita->user_id             = $data->id;
        $databalita->nama_lengkap        = $request->nama;
        $databalita->jenis_kelamin       = $request->jkb;
        $databalita->umur                = $request->umur;
        $databalita->ttl                 = $request->ttl;
        $databalita->save();

        return redirect()->route('admin.pengguna')->with('success','Berhasil Registrasi');

    }



    public function detail($id)
    {
        // Cari data Balita dan User yang terkait berdasarkan ID
        $data = DB::table('users')
        ->leftjoin('balita', 'users.id', '=', 'balita.user_id')
        ->select('balita.id as balita_id', 'balita.jenis_kelamin as bjk', 'balita.nama_lengkap', 'balita.umur', 'balita.ttl', 'balita.user_id', 'users.*')
        ->where('users.id', $id)
        ->first();

        if (!$data) {
            return redirect()->route('admin.pengguna')->with('warning', 'Data tidak ditemukan');
        }

        return view ('admin.pengguna.detail' ,compact('data'));

    }

    public function update(request $request, $id)
    {
         // Cari data Balita dan User yang terkait berdasarkan ID
         $data = DB::table('users')
         ->leftjoin('balita', 'users.id', '=', 'balita.user_id')
         ->select('balita.id as balita_id', 'balita.jenis_kelamin as bjk', 'balita.nama_lengkap', 'balita.umur', 'balita.ttl', 'balita.user_id', 'users.*')
         ->where('users.id', $id)
         ->first();

         if (!$data) {
             return redirect()->route('admin.pengguna')->with('warning', 'Data tidak ditemukan');
         }

        $input = $request->except('_token');

        // Validasi data yang diupdate
        $validation = Validator::make($input, [
            'username'       => 'required',
            'email'          => 'required',
            'name'           => 'required',
            'jku'            => 'required',
            'alamat'         => 'required',
            'phone'          => 'required|phone:'.$this->isoCode,
            'nama'           => 'required',
            'jkb'            => 'required',
            'umur'           => 'required|integer',
            'ttl'            => 'required',
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

        // Update data kecuali password jika password tidak kosong
        $data = User::find($id);
        $data->username       = $request->username;
        $data->name           = $request->name;
        $data->jenis_kelamin  = $request->jku;
        $data->alamat         = $request->alamat;
        $data->no_hp          = PhoneNumber::make($request->phone, $this->isoCode);
        $data->email          = $request->email;
        $data->level          = 'user';

        // Cek apakah password diinputkan, jika iya, update password
        if (!empty($request->password)) {
            $data->password = Hash::make($request->password);
        }

        $data->save();

        $databalita                      = Balita::where('user_id', $data->id)->first();
        $databalita->nama_lengkap        = $request->nama;
        $databalita->jenis_kelamin       = $request->jkb;
        $databalita->umur                = $request->umur;
        $databalita->ttl                 = $request->ttl;
        $databalita->save();

        return redirect()->route('admin.pengguna')->with('success','Berhasil Update');
    }

    public function destroy($id)
    {
        // Cari data Balita dan User yang terkait berdasarkan ID
        $data = DB::table('balita')
                ->join('users', 'balita.user_id', '=', 'users.id')
                ->select('balita.*', 'users.*')
                ->where('balita.user_id', $id)
                ->first();

        if (!$data) {
            return redirect()->route('admin.pengguna')->with('warning', 'Data tidak ditemukan');
        }

        // Hapus data Balita dan User
        DB::table('balita')->where('id', $data->id)->delete();
        DB::table('users')->where('id', $data->user_id)->delete();

        return redirect()->route('admin.pengguna')->with('success', 'Berhasil menghapus data');
    }
}
