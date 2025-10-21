<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;


class BiodatasController extends Controller
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
        $biodata = Biodata::all();
        return view('biodata.index',compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
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
            'telepon'       => "required|string|max:225",
            'email'         => "required|string|max:225",
        ],
        [
            'nama_lengkap.required'  => "Nama Tidak Boleh Kosong!",
            'jenis_kelamin.required' => "Jenis Kelamin Tidak Boleh Kosong!",
            'tanggal_lahir.required' => "Tanggal Lahir Tidak Boleh Kosong!",
            'tempat_lahir.required'  => "Tempat Lahir Tidak Boleh Kosong!",
            'agama.required'         => "Agama Tidak Boleh Kosong!",
            'alamat.required'        => "Alamat Tidak Boleh Kosong!",
            'telepon.required'       => "No Telepon Tidak Boleh Kosong!",
            'email.required'         => "Email Tidak Boleh Kosong!",
        ]);


        $biodata   =new Biodata;
        $biodata->nama_lengkap  = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir  = $request->tempat_lahir;
        $biodata->agama         = $request->agama;
        $biodata->alamat        = $request->alamat;
        $biodata->telepon       = $request->telepon;
        $biodata->email         = $request->email;

         if ($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodata->cover = $name;
        }

        $biodata->save();

        session()->flash('success','Data Berhasil Ditambahkan');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.show',compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit',compact('biodata'));
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
            'telepon'       => "required|string|max:225",
            'email'         => "required|string|max:225",
        ],
        [
            'nama_lengkap.required'  => "Nama Tidak Boleh Kosong!",
            'jenis_kelamin.required' => "Jenis Kelamin Tidak Boleh Kosong!",
            'tanggal_lahir.required' => "Tanggal Lahir Tidak Boleh Kosong!",
            'tempat_lahir.required'  => "Tempat Lahir Tidak Boleh Kosong!",
            'agama.required'         => "Agama Tidak Boleh Kosong!",
            'alamat.required'        => "Alamat Tidak Boleh Kosong!",
            'telepon.required'       => "No Telepon Tidak Boleh Kosong!",
            'email.required'         => "Email Tidak Boleh Kosong!",
        ]);




        $biodata   =Biodata::findOrFail($id);
        $biodata->nama_lengkap  = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir  = $request->tempat_lahir;
        $biodata->agama         = $request->agama;
        $biodata->alamat        = $request->alamat;
        $biodata->telepon       = $request->telepon;
        $biodata->email         = $request->email;

        if ($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/biodata', $name);
            $biodata->cover = $name;
        }

        $biodata->save();

        session()->flash('success','Data Berhasil Dirubah');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $biodata= Biodata::findOrFail($id);
         
          if ($biodata->cover){
            $filePath = public_path('images/biodata/' . $biodata->cover);
            if(File::exists($filePath)) {
                File::delete($filePath);
            }
        }

         $biodata->delete();
         return redirect()->route('biodata.index')->with('success','Data Berhasil Dihapus');
    }
}
