<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
     use HasFactory;

    //kolom/field yang boleh diisi
    protected $fillable = ['id','nama_pengguna','no_telepon','email','jenis_kelamin'];
    public $timestamp = true;
}
