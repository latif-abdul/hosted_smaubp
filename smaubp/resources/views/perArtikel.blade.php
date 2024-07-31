@extends('app')
@section('content')
<div class="container detailArtikel">
    <h2>{{$artikel->judul}}</h2>
</div>

<img src="/uploads/{{$artikel->gambar}}" alt="Img Artikel" class="imgArtikel">


<div class="container mainDetailArtikel">
    <div class="row">
        <div class="col-md-8">
            {!!$artikel->artikel!!}

            
        </div>
        <div class="col-md-4 infoPenulis ">
            <div class="">
                <hr>



                <div class="penulis">
                    <p class="mt-3 mb-4">PUBLISHED BY</p>
                    <h4>{{$artikel->penulis}}</h4>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection