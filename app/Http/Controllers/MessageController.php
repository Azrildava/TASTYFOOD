<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $message = Message::all();
        confirmDelete("Delete", "Apa Kamu Yakin?");
        return view('admin.message.index', compact('message'));
    }

    public function create()
    {
        return view('admin.message.create');
    }


    public function store(Request $request)
    {
        // membuat validasi data
        $this->validate($request, [
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->subject = $request->subject;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        toast()->success('Success', 'Pesan Berhasil di Kirim')->autoClose(5000);
        return redirect()->route('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $message = Message::findOrFail($id);
        return view('admin.message.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $message = Message::findOrFail($id);
        $message->subject = $request->subject;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        Alert::success('Success', 'Data Berhasil di Edit')->autoClose(5000);
        return redirect()->route('message.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete Contact
        $message = Message::findOrFail($id);
        $message->delete();
        toast('Data Berhasil di Hapus', 'Success')->autoClose(5000);
        return redirect()->route('message.index');

    }
}

