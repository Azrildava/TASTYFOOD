<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('home');
    }

    public function galerii() {
        return view('galeri');
    }
    public function berita() {
        return view('berita');
    }
    public function tentang() {
        return view('tentang');
    }
    public function contact() {
        return view('contact');
    }
}
