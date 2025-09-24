<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
     use HasFactory;

    //kolom/field yang boleh diisi
    protected $fillable = ['id','nama_lengkap','jenis_kelamin','tgl_lahir','kelas'];
    public $timestamp = true;
}
