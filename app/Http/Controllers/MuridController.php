<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $murid = Murid::all();
         return view('murid.index',compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
         return view('murid.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'nama_lengkap'  => "required|string|max:225",
            'jenis_kelamin' => "required|string|max:225",
            'tanggal_lahir' => "required|string|max:225",
            'tempat_lahir'  => "required|string|max:225",
            'agama'         => "required|string|max:225",
            'alamat'        => "required|string|max:225",
            'email'         => "required|string|max:225",
        ],
        [
           'nama_lengkap.required'  => "Nama Tidak Boleh Kosong!",
            'jenis_kelamin.required' => "Jenis Kelamin Tidak Boleh Kosong!",
            'tanggal_lahir.required' => "Tanggal Lahir Tidak Boleh Kosong!",
            'tempat_lahir.required'  => "Tempat Lahir Tidak Boleh Kosong!",
            'agama.required'         => "Agama Tidak Boleh Kosong!",
            'alamat.required'        => "Alamat Tidak Boleh Kosong!",
            'email.required'         => "Email Tidak Boleh Kosong!",
        ]);

        $murid   = new Murid;
        $murid->nama_lengkap  = $request->nama_lengkap;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->tempat_lahir  = $request->tempat_lahir;
        $murid->agama         = $request->agama;
        $murid->alamat        = $request->alamat;
        $murid->email         = $request->email;
        $murid->id_kelas = $request->id_kelas;

        $murid->save();

        session()->flash('success','Data Berhasil Ditambahkan');

        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $murid = Murid::findOrFail($id);
         return view('murid.show',compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murid = Murid::findOrFail($id);
        $kelas = Kelas::all();
        return view('murid.edit',compact('murid', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
        [
            'nama_lengkap'  => "required|string|max:225",
            'jenis_kelamin' => "required|string|max:225",
            'tanggal_lahir' => "required|string|max:225",
            'tempat_lahir'  => "required|string|max:225",
            'agama'         => "required|string|max:225",
            'alamat'        => "required|string|max:225",
            'email'         => "required|string|max:225",
        ],
        [
            'nama_lengkap.required'  => "Nama Tidak Boleh Kosong!",
            'jenis_kelamin.required' => "Jenis Kelamin Tidak Boleh Kosong!",
            'tanggal_lahir.required' => "Tanggal Lahir Tidak Boleh Kosong!",
            'tempat_lahir.required'  => "Tempat Lahir Tidak Boleh Kosong!",
            'agama.required'         => "Agama Tidak Boleh Kosong!",
            'alamat.required'        => "Alamat Tidak Boleh Kosong!",
            'email.required'         => "Email Tidak Boleh Kosong!",
        ]);

        $murid   = Murid::findOrFail($id);
        $murid->nama_lengkap  = $request->nama_lengkap;
        $murid->jenis_kelamin = $request->jenis_kelamin;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->tempat_lahir  = $request->tempat_lahir;
        $murid->agama         = $request->agama;
        $murid->alamat        = $request->alamat;
        $murid->email         = $request->email;
        $murid->id_kelas = $request->id_kelas;

        $murid->save();

        session()->flash('success','Data Berhasil Diubah');

        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murid= Murid::findOrFail($id);
        $murid->delete();
        return redirect()->route('murid.index')->with('success','Data Berhasil Dihapus');
    }
}
