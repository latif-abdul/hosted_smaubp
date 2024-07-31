<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('Admin.galeri', compact('galeri'));
    }

    public function store(Request $request)
    {
        for ($i = 0; $i < count($request->gambar); $i++) {
            $filename = time() . '-' . $request->gambar[$i]->getClientOriginalName();
            $request->gambar[$i]->move('uploads', $filename);
            $slideShow = Galeri::create([
                "gambar" => $filename,
            ]);
        }
        return back()->with('success', 'success upload image');
    }

    public function destroy($id){
        Galeri::find($id)->delete();
        return back()->with('success', 'success delete image');
    }

    public function show_all(){
        $galeri = Galeri::all();
        return view('galeri', compact('galeri'));
    }
}
