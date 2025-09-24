<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //kolom/field yang boleh diisi
    protected $fillable = ['id','tittle','content'];
    public $timestamp = true;
}
