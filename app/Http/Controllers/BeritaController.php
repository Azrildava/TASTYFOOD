<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use File;
use Illuminate\Http\Request;
use Storage;
use Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate();
        confirmDelete("Delete", "Are You Sure?");
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $beritas = Berita::all();
        return view('admin.berita.create', compact('beritas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg|max:500',
        ]);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
//upload images
        $image = $request->file('gambar');
        $image->storeAs('public/beritas', $image->hashName());
        $berita->gambar = $image->hashName();
        Alert()->success('Success', 'data berhasil di tambah');
        $berita->save();
        return redirect()->route('berita.index');

    }

    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg|max:500',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        //upload images
        $image = $request->file('gambar');
        $image->storeAs('public/beritas', $image->hashName());
        $berita->gambar = $image->hashName();
        $berita->save();
        return redirect()->route('berita.index');
    }

    public function destroy($id)
    {
        $berita = Berita::FindOrFail($id);

        toast()->success('Success', 'data berhasil dihapus');
        Storage::delete('public/beritas/' . $berita->image);
        $berita->delete();
        return redirect()->route('berita.index');
    }
}
