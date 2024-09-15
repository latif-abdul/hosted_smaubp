<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\PencapaianAlumni;
use App\Models\Sambutan;
use App\Models\SlideShow;
use DirectoryIterator;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class ShowController extends Controller
{
    public function index()
    {
        $slideshow = SlideShow::all();
        // $optimizerChain = OptimizerChainFactory::create();
        // $stringToAdd = "/uploads/";
        // $slideshowPath = array_map(function($value) use ($stringToAdd) {
        //     return $value . $stringToAdd;
        // }, $slideshow->gambar);
        // $optimizerChain->optimize($slideshowPath);
        $sambutan = Sambutan::all();
        // $artikel = Artikel::all()->sortByDesc('updated_at')->take(5);
        $artikel = Artikel::with('images')->get()->sortByDesc('updated_at')->take(5);
        $galeri = Galeri::all()->take(6)->sortByDesc('updated_at');
        $alumni = PencapaianAlumni::all();
        $dir = new DirectoryIterator(public_path('logo kampus'));
        return view('index', compact('artikel', 'slideshow', 'galeri', 'sambutan', 'alumni', 'dir'));
        // foreach ($dir as $fileinfo){
        //     if(!$fileinfo->isDot()){
        //         var_dump($fileinfo->getFilename());
        //     }
        // }
        // return response($dir);
    }

    public function show_artikel()
    {
        $artikel = Artikel::with('images')->get()->sortByDesc('updated_at');
        return view('artikel', compact('artikel'));
    }

    public function program_tahfidz(){
        $dir = new DirectoryIterator(public_path('Tahfidzul Qur_an'));
        return view('program_tahfidz', compact('dir'));
    }
}
