<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //
    protected $fillable = ['id','name','description','price','stock'];
    public $timestamp = true;
}
