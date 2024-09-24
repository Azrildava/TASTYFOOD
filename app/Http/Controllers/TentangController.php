<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Tentang;
use Illuminate\Http\Request;
use Storage;

class TentangController extends Controller
{
    public function index()
    {
        $tentang = Tentang::latest()->paginate(5);
        confirmDelete("Delete", "Are You Sure?");
        return view('admin.tentang.index', compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tentang = Tentang::all();
        return view('admin.tentang.create', compact('tentang'));
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

        $tentang = new Tentang();
        $tentang->judul = $request->judul;
        $tentang->deskripsi = $request->deskripsi;
//upload images
        $image = $request->file('gambar');
        $image->storeAs('public/tentangs', $image->hashName());
        $tentang->gambar = $image->hashName();
        Alert()->success('Success', 'data berhasil di tambah');
        $tentang->save();
        return redirect()->route('tentang.index');

    }

    public function edit(string $id)
    {
        $tentang = Tentang::findOrFail($id);
        return view('admin.tentang.edit', compact('tentang'));
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

        $tentang = Tentang::findOrFail($id);
        $tentang->judul = $request->judul;
        $tentang->deskripsi = $request->deskripsi;
        //upload images
        $image = $request->file('gambar');
        $image->storeAs('public/tentangs/', $image->hashName());
        $tentang->gambar = $image->hashName();
        Alert()->success('Success', 'data berhasil di tambah');
        $tentang->save();
        return redirect()->route('tentang.index');
    }

    public function destroy($id)
    {
        $tentang = Tentang::FindOrFail($id);

        toast()->success('Success', 'data berhasil dihapus');
        Storage::delete('public/tentangs/' . $tentang->image);
        $tentang->delete();
        return redirect()->route('tentang.index');
    }
}
