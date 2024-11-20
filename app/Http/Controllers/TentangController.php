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
        $this->validate($request, [
            'judul' => 'required',
            'content' => 'required',
        ]);

        $tentang = new Tentang();
        $tentang->judul = $request->judul;
        $tentang->content = $request->content;
        $tentang->deskripsi = $request->deskripsi;
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
            'content' => 'required',
        ]);

        $tentang = Tentang::findOrFail($id);
        $tentang->judul = $request->judul;
        $tentang->content = $request->content;
        $tentang->deskripsi = $request->deskripsi;
        $tentang->save();
        return redirect()->route('tentang.index');
    }

    public function destroy($id)
    {
        $tentang = Tentang::FindOrFail($id);
        toast()->success('Success', 'data berhasil dihapus');
        $tentang->delete();
        return redirect()->route('tentang.index');
    }
}
