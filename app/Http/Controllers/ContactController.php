<?php

namespace App\Http\Controllers;

use Storage;
use Alert;
use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontaks = Contact::latest()->paginate();

        confirmDelete("Delete", "Are You Sure?");
        return view('admin.Contact.index', data: compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kontaks = Contact::all();
        return view('admin.Contact.create', compact('kontaks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $kotaks = new Contact($request->all());
        $kotaks->email = $request->email;
        $kotaks->no_telp = $request->no_telp;
        $kotaks->alamat = $request->alamat;
        $kotaks->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('contact.index');
    }

   public function edit($id)
    {
        $kontaks = Contact::findOrFail($id);
        return view('admin.contack.edit', compact('kontaks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $kontaks = Contact::findOrFail($id);
        $kontaks->email = $request->email;
        $kontaks->no_telp = $request->no_telp;
        $kontaks->alamat = $request->alamat;
        $kontaks->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('kontak.index');
    }

    public function destroy($id)
    {
        $kontaks = Contact::findOrFail($id);
        $kontaks->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        return redirect()->route('contact.index');
    }
}
