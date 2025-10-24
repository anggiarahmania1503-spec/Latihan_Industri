<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;

class BarangController extends Controller
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
        $barang = Barang::all();
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate(
        [
            'nama_barang'  => "required|string|max:225",
            'merek'  => "required|string|max:225",
            'harga'  => "required|string|max:225",
            'stok'  => "required|string|max:225",
        ],
        [
            'nama_barang.required'  => "Nama Barang Tidak Boleh Kosong!",
            'merek.required'  => "Merek Tidak Boleh Kosong!",
            'harga.required'  => "Harga Tidak Boleh Kosong!",
            'stok.required'  => "Stok Tidak Boleh Kosong!",
        ]);

        $barang   = new Barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->merek = $request->merek;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;


        $barang->save();

        session()->flash('success','Data Berhasil Ditambahkan');

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $barang = Barang::findOrFail($id);
         return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
        [
            'nama_barang'  => "required|string|max:225",
            'merek'  => "required|string|max:225",
            'harga'  => "required|string|max:225",
            'stok'  => "required|string|max:225",
        ],
        [
            'nama_barang.required'  => "Nama Barang Tidak Boleh Kosong!",
            'merek.required'  => "Merek Tidak Boleh Kosong!",
            'harga.required'  => "Harga Tidak Boleh Kosong!",
            'stok.required'  => "Stok Tidak Boleh Kosong!",
        ]);

        $barang   = Barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->merek = $request->merek;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        $barang->save();

        session()->flash('success','Data Berhasil Diubah');

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang= Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success','Data Berhasil Dihapus');
    }
}
