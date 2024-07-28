<?php

namespace App\Http\Controllers;

use App\Models\SlideShow;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ShowController extends Controller
{
    public function index()
    {
        $slideshow = SlideShow::all();
        $artikel = Artikel::all()->take(5)->sortByDesc('updated_at');
        return view('index', compact('artikel', 'slideshow'));
    }

    public function show_artikel(){
        $artikel = Artikel::all()->sortByDesc('updated_at');
        return view('artikel', compact('artikel'));
    }
}
