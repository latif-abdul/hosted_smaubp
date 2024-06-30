<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ShowController extends Controller
{
    public function index()
    {
        $artikel = Artikel::take(5)->orderBy('updated_at', 'DESC');
        return view('index', compact('artikel'));
    }
}
