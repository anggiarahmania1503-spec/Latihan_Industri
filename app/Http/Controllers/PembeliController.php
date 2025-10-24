<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;


class PembeliController extends Controller
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
        $pembeli = Pembeli::all();
        return view('pembeli.index',compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate(
        [
            'nama_pembeli'  => "required|string|max:225",
            'jenis_kelamin'  => "required|string|max:225",
            'telepon'  => "required|string|max:225",
        ],
        [
            'nama_pembeli.required'  => "Nama Pembeli Tidak Boleh Kosong!",
            'jenis_kelamin.required'  => "Jenis Kelamin Tidak Boleh Kosong!",
            'telepon.required'  => "Telepon Tidak Boleh Kosong!",
        ]);

        $pembeli   = new Pembeli;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jenis_kelamin = $request->jenis_kelamin;
        $pembeli->telepon = $request->telepon;


        $pembeli->save();

        session()->flash('success','Data Berhasil Ditambahkan');

        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembeli= Pembeli::findOrFail($id);
         return view('pembeli.show',compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit',compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
        [
            'nama_pembeli'  => "required|string|max:225",
            'jenis_kelamin'  => "required|string|max:225",
            'telepon'  => "required|string|max:225",
        ],
        [
           'nama_pembeli.required'  => "Nama Pembeli Tidak Boleh Kosong!",
           'jenis_kelamin.required'  => "Jenis Kelamin Tidak Boleh Kosong!",
           'telepon.required'  => "Telepon Tidak Boleh Kosong!",
        ]);

        $pembeli   = Pembeli::findOrFail($id);
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jenis_kelamin = $request->jenis_kelamin;
        $pembeli->telepon = $request->telepon;

        $pembeli->save();

        session()->flash('success','Data Berhasil Diubah');

        return redirect()->route('pembeli.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembeli= Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index')->with('success','Data Berhasil Dihapus');
    }
}
