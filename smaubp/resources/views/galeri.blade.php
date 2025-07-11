@extends('app')
@section('content')

<div class="title">
    <h2>Galeri</h2>
</div>

<section id="portfolio" class="portfolio">
    <div class="container">
        <h2 style="margin-top: 50px">Galeri</h2>
        
        <gallery>
            @foreach ($galeri as $gallery)
									<gallery-item src="{{url('uploads/' . $gallery->gambar)}}" label="{{$gallery->prestasi}}"></gallery-item>
								@endforeach
        </gallery>
    </div>
</section>

@endsection