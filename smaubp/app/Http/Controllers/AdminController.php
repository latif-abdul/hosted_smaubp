<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\ArtikelSantri;
use App\Models\Santris;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $santriBaru = Santris::count();
        $artikel = Artikel::count();
        $artikelSantri = ArtikelSantri::count();
        return view('Admin.dashboard', compact(['santriBaru', 'artikel', 'artikelSantri']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
