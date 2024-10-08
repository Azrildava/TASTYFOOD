<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    public $fillable = ['slider', 'gambar'];
    public $visible = ['slider', 'gambar'];
    public $timestamp = true;
}
