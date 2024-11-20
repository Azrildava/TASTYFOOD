<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Alert;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::latest()->paginate();
        confirmDelete("Delete", "Are You Sure?");
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        $sliders = Slider::all();
        return view('admin.slider.create', compact('sliders'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'slider' => 'image|mimes:jpeg,jpg,png',
        ]);

        $sliders = new Slider($request->all());
        $slider = $request->file('slider');
        $slider->storeAs('public/sliders', $slider->hashName());
        $sliders->slider = $slider->hashName();
        $sliders->save();
        Alert()->success('Success', 'Data Berhasil Di Simpan');
        return redirect()->route('slider.index');
    }

    public function edit($id)
    {
        $sliders = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('sliders'));
    }

    public function update(Request $request, $id)
    {
        // vallidate form
        $this->validate($request, [
            'slider' => 'image|mimes:jpeg,jpg,png',
        ]);

        $sliders = Slider::findOrFail($id);
        $slider = $request->file('slider');
        $slider->storeAs('public/sliders', $slider->hashName());
        Storage::delete('public/sliders/' . $sliders->slider);
        $sliders->slider = $slider->hashName();
        $sliders->save();
        Alert()->success('Success', 'Data Berhasil Di Edit');
        return redirect()->route('slider.index');
    }

    public function destroy($id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->delete();
        toast()->success('Success', 'Data Berhasil Di Hapus')->autoClose(2000);
        Storage::delete('public/sliders/' . $sliders->slider);
        return redirect()->route('slider.index');
    }
}
