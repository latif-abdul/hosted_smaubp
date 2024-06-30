@extends('app')
@section('content')
<div class="container detailArtikel">
    <h2>{{$artikel->judul}}</h2>
</div>

<img src="/uploads/{{$artikel->gambar}}" alt="Img Artikel" class="imgArtikel">


<div class="container mainDetailArtikel">
    <div class="row">
        <div class="col-md-8">
            {{$artikel->artikel}}

            
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



<!-- sosmed icon -->
<div class="iconBox">
    <a href="" class="perIconBox wa">
        <i class="fab fa-whatsapp"></i>
    </a>

    <a href="" class="perIconBox fb">
        <i class="fab fa-facebook-f"></i>
    </a>

    <a href="" class="perIconBox ig">
        <i class="fab fa-instagram"></i>
    </a>

    <a href="" class="perIconBox yt">
        <i class="fab fa-youtube"></i>
    </a>

    <a href="" class="perIconBox linkin">
        <i class="fab fa-linkedin-in"></i>
    </a>
</div>
@endsection