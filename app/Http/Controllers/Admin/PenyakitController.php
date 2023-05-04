<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use Validator;
use Ramsey\Uuid\Uuid;

class PenyakitController extends Controller
{
    public function show($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        return view('umum.penyakit-show', compact('penyakit'));
    }


    public function index()
    {
        $data = Penyakit::orderBy('kd_penyakit', 'ASC')->get();

        return view('admin.penyakit.index', compact('data'));
    }

    public function create()
    {
        $kode = Penyakit::select('kd_penyakit')->orderBy('kd_penyakit', 'desc')->first();

        if ($kode != null) {
            $pecah  = explode("P", $kode->kd_penyakit);
            $number = intval($pecah[1])+1;
            if ($number <10) {
                $kode   = "P0".$number;
            }else{
                $kode   = "P".$number;
            }
        }else{
            $kode = "P01";
        }

        return view('admin.penyakit.create', compact('kode'));
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');

        $validation = Validator::make($input, [
            'kd_penyakit'   => 'required',
            'nama_penyakit' => 'required',
            'deskripsi'     => 'required',
            'pencegahan'    => 'required',
            'penyebab'      => 'required',
            'pengobatan'    => 'required',
            'gambar'        => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validation->fails()) {
            $errors = $validation->errors();
            return redirect()->back()->with('warning', implode("\n", $errors->all()));
        } else {
            $data                = new Penyakit;
            $data->id            = Uuid::uuid4()->getHex();
            $data->kd_penyakit   = $request->kd_penyakit;
            $data->nama_penyakit = $request->nama_penyakit;
            $data->deskripsi     = $request->deskripsi;
            $data->pencegahan    = $request->pencegahan;
            $data->penyebab      = $request->penyebab;
            $data->pengobatan    = $request->pengobatan;

            // Upload gambar
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $filename = time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move(public_path('images'), $filename);
                $data->gambar = $filename;
            } else {
                return redirect()->back()->with('warning', 'Gambar tidak boleh kosong!');
            }

            $data->save();

            return redirect()->route('admin.penyakit')->with('success', 'Berhasil menambahkan data');
        }
    }

    public function edit($id)
    {
        if(!$data  = Penyakit::find($id)){
            return redirect()->route('admin.penyakit')->with('warning', 'Data tidak ditemukan');
		}

        return view ('admin.penyakit.edit' ,compact('data'));

    }

    public function update(request $request, $id)
    {

        if(!$data  = Penyakit::find($id)){
            return redirect()->route('admin.penyakit')->with('warning', 'Data tidak ditemukan');
        }

        $input = $request->except('_token');

        $validation = Validator::make($input,[
            'kd_penyakit'   => 'required',
            'nama_penyakit' => 'required',
            'deskripsi'     => 'required',
            'pencegahan'    => 'required',
            'penyebab'      => 'required',
            'pengobatan'    => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg',
 		]);

		if ($validation->fails()) {

            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }


        $data                = Penyakit::findOrFail($id);
        $data->kd_penyakit   = $request->kd_penyakit;
        $data->nama_penyakit = $request->nama_penyakit;
        $data->deskripsi     = $request->deskripsi;
        $data->pencegahan    = $request->pencegahan;
        $data->penyebab      = $request->penyebab;
        $data->pengobatan    = $request->pengobatan;

        if ($request->hasFile('gambar')) {
            $image      = $request->file('gambar');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $imagePath  = public_path('images/' . $imageName);
            $image->move(public_path('images'), $imageName);
            $data->gambar = $imageName;
        }
        $data->save();

        return redirect()->route('admin.penyakit')->with('success','Berhasil memperbaharui data');
    }

    public function destroy($id)
    {
        if(!$data  = Penyakit::find($id)){
            return redirect()->route('admin.penyakit')->with('warning', 'Data tidak ditemukan');
        }

        $data->delete();

        return redirect()->route('admin.penyakit')->with('success','Berhasil menghapus data');

    }
}
