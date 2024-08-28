<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view("Admin.artikel_index", compact("artikel"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formAction = "/admin/artikel";
        return view("Admin.manage_artikel", compact(['formAction']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artikel = Artikel::create($request->all());

        if (!Storage::exists('artikel_images')) {
            Storage::makeDirectory('artikel_images');
        }

        if ($request->hasFile('gambar')) {
            $artikel->gambar = time() . '-' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('uploads', $artikel->gambar);
            $artikel->save();
        }

        // if ($request->hasFile('bukti_pembayaran')) {
        //     $artikel->bukti_pembayaran = time() . '-' . $request->file('bukti_pembayaran')->getClientOriginalName();
        //     $request->file('bukti_pembayaran')->move('uploads', $artikel->bukti_pembayaran);
        //     $artikel->save();
        // }

        return back()->with('success', 'Santri created successfully')
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artikel = Artikel::find($id);
        return view('Admin.show_artikel', compact('artikel'));
    }

    public function show2(string $id)
    {
        $artikel = Artikel::find($id);
        if ($artikel === null){
            return view('artikel_not_found')->with('failed', 'Artikel Not Found');
        }
        return view('perArtikel', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formAction = "/admin/artikel/$id";
        $artikel = Artikel::where('id', $id)->first();
        return view('Admin.manage_artikel', compact(['artikel', 'formAction']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artikel = Artikel::find($id)->update($request->all());

        if (!Storage::exists('artikel_images')) {
            Storage::makeDirectory('artikel_images');
        }

        if ($request->hasFile('gambar')) {
            $gambar = time() . '-' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('uploads', $gambar);
            Artikel::find($id)->update(['gambar'=>$gambar]);
        }

        return redirect()->back()->with('success', 'Artikel updated successfully')
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Artikel::find($id)->delete();
        return back()->with('delete', 'Successfully delete');
    }

    public function postComment(Request $request){
        $artikel = Comment::create($request->all());
        return response()->json($data = $artikel, $status = 200);
    }

    public function getComment(string $id){
        $comment = Comment::where('id_artikel', $id)->where('id_comment', null)->with('reply')->get();
        return response()->json($data = $comment, $status = 200);
    }
    


}
