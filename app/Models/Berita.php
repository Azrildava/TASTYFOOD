<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    public $fillable = ['gambar', 'judul', 'deskripsi'];
    public $visible = ['gambar', 'judul', 'deskripsi'];
    public $timestamp = true;
}
