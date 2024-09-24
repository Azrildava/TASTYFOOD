<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Storage;
use Alert;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galery::all();
        confirmDelete("Delete", "Are You Sure?");
        return view('admin.galeri.index', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $galeris = Galery::all();
        return view('admin.galeri.create', compact('galeris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gambar' => 'required|image|mimes:png,jpg',
        ]);

        $galeri = new Galery();
//upload images
        $image = $request->file('gambar');
        $image->storeAs('public/galeris', $image->hashName());
        $galeri->gambar = $image->hashName();
        Alert()->success('Success', 'data berhasil di tambah');
        $galeri->save();
        return redirect()->route('galeri.index');

    }

    public function edit(string $id)
    {
        $galeri = Galery::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'gambar' => 'required|image|mimes:png,jpg|max:500',
        ]);

        $galeri = Galery::findOrFail($id);
        //upload images
        $image = $request->file('gambar');
        $image->storeAs('public/galeris', $image->hashName());
        $galeri->gambar = $image->hashName();
        Alert()->success('Success', 'data berhasil di tambah');
        $galeri->save();
        return redirect()->route('galeri.index');
    }

    public function destroy($id)
    {
        $galeri = Galery::FindOrFail($id);

        toast()->success('Success', 'data berhasil dihapus');
        Storage::delete('public/galeries/' . $galeri->image);
        $galeri->delete();
        return redirect()->route('galeri.index');
    }
}
