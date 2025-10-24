<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Pembeli;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
         return view('transaksi.index',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $barang = Barang::all();
         $pembeli = Pembeli::all();
         return view('transaksi.create', compact('barang','pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate(
        [
            'tanggal_transaksi'  => "required|string|max:225",
            'jumlah'  => "required|string|max:225",
            'total_harga'  => "required|string|max:225",
        ],
        [
            'tanggal_transaksi.required'  => "Tanggal Transaksi Tidak Boleh Kosong!",
            'jumlah.required'  => "Jumlah Tidak Boleh Kosong!",
            'total_harga.required'  => "Total Harga Tidak Boleh Kosong!",
        ]);

        $transaksi   = new Transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_pembeli = $request->id_pembeli;

        $transaksi->save();

        session()->flash('success','Data Berhasil Ditambahkan');

        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $barang = Barang::findOrFail($id);
         $pembeli = Pembeli::findOrFail($id);
         $transaksi = Transaksi::findOrFail($id);
         return view('transaksi.show',compact('barang','pembeli','transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $barang = Barang::all();
        $pembeli = Pembeli::all();
        return view('transaksi.edit',compact('transaksi', 'barang','pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
        [
             'tanggal_transaksi'  => "required|string|max:225",
            'jumlah'  => "required|string|max:225",
            'total_harga'  => "required|string|max:225",
        ],
        [
             'tanggal_transaksi.required'  => "Tanggal Transaksi Tidak Boleh Kosong!",
            'jumlah.required'  => "Jumlah Tidak Boleh Kosong!",
            'total_harga.required'  => "Total Harga Tidak Boleh Kosong!",
        ]);

        $transaksi   = Transaksi::findOrFail($id);
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->id_barang = $request->id_barang;
        $transaksi->id_pembeli = $request->id_pembeli;

        $transaksi->save();

        session()->flash('success','Data Berhasil Diubah');

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi= Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success','Data Berhasil Dihapus');
    }
}
