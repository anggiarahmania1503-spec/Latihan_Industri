<?php

namespace App\Http\Controllers;

use App\Models\Pengguna2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;


class PenggunasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         $pengguna = Pengguna2::all();
         return view('pengguna.index',compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'nama_pengguna'  => "required|string|max:225",
        ],
        [
            'nama_pengguna.required'  => "Nama Tidak Boleh Kosong!",
        ]);

        $pengguna   =new Pengguna2;
        $pengguna->nama_pengguna = $request->nama_pengguna;

        $pengguna->save();

        session()->flash('success','Data Berhasil Ditambahkan');

        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $pengguna = Pengguna2::findOrFail($id);
         return view('pengguna.show',compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $pengguna = Pengguna2::findOrFail($id);
         return view('pengguna.edit',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
        [
            'nama_pengguna'  => "required|string|max:225",
        ],
        [
            'nama_pengguna.required'  => "Nama Tidak Boleh Kosong!",
        ]);

        $pengguna   =Pengguna2::findOrFail($id);
        $pengguna->nama_pengguna = $request->nama_pengguna;

        $pengguna->save();

        session()->flash('success','Data Berhasil Diubah');

        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengguna= Pengguna2::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success','Data Berhasil Dihapus');
    }
}
