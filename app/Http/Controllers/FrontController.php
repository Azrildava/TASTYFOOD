<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Tentang;

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
        $judul = Tentang::Find(1);
        $visi = Tentang::Find(2);
        $misi = Tentang::Find(3);
        return view('tentang', compact('judul', 'visi', 'misi'));
    }
    public function contact() {
        return view('contact');
    }
    public function loadMore(Request $request){
        $skip = $request->input('skip', 0); // Get the current skip value
        $beritas = Berita::orderBy('id', 'asc')->skip($skip)->take(8)->get(); // Load next 8 items

        return response()->json($beritas);
    }
    public function show($id)
    {
        $news = Berita::findOrFail($id);
        return view ('show', compact('news'));
    }
}

