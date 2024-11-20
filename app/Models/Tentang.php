<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'content', 'deskripsi'];
    public $visible = ['judul', 'content', 'deskripsi'];
    public $timestamp = true;

}
