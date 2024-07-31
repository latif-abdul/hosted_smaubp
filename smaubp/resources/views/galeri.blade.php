@extends('app')
@section('content')

    <div class="title">
        <h2>Galeri</h2>
    </div>

    <div class="container perGaleri">
        @foreach ($galeri as $gallery)
        <img src="{{url('uploads/'.$gallery->gambar)}}" alt="Galeri Pramuka">
        @endforeach
    </div>

@endsection
