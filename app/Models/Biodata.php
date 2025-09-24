<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    //kolom/field yang boleh diisi
    protected $fillable = ['id','nama_lengkap','jenis_kelamin','tanggal_lahir','tempat_lahir','agama','alamat','email'];
    public $timestamp = true;
}
