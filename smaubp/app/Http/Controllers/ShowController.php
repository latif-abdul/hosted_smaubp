<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Sambutan;
use App\Models\SlideShow;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ShowController extends Controller
{
    public function index()
    {
        $slideshow = SlideShow::all();
        $sambutan = Sambutan::all();
        $artikel = Artikel::all()->take(5)->sortByDesc('updated_at');
        $galeri = Galeri::all()->take(6)->sortByDesc('updated_at');
        return view('index', compact('artikel', 'slideshow', 'galeri', 'sambutan'));
    }

    public function show_artikel(){
        $artikel = Artikel::all()->sortByDesc('updated_at');
        return view('artikel', compact('artikel'));
    }
}
