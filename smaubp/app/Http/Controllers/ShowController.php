<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ShowController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all()->take(5)->sortByDesc('updated_at');
        return view('index', compact('artikel'));
    }

    public function show_artikel(){
        $artikel = Artikel::all()->take(5)->sortByDesc('updated_at');
        return view('artikel', compact('artikel'));
    }
}
