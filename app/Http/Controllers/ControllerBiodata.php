<?php

namespace App\Http\Controllers;

use App\Models\Biodata;

class ControllerBiodata extends Controller
{
     public function tampil()
    {
        $biodata = Biodata::all();
        return view('halaman_biodata2',compact('biodata'));
    }
}
