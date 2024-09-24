<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'deskripsi', 'gambar'];
    public $visible = ['judul', 'deskripsi', 'gambar'];
    public $timestamp = true;

}
