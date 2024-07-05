@extends('app')
@section('content')
<div class="container titleArtikel">
    <!-- <h1>Latest Post</h1> -->
    <h1>Postingan Terbaru</h1>
</div>

<div class="container artikel">

    @foreach ($artikel as $art)

    @endforeach
    <a href="/artikel/{{$art->id}}" class="text-decoration-none">
        <div class="perArtikel">
            <img src="/uploads/{{$art->gambar}}" alt="Artikel">
            <div class="textArtikel">
                <h3>{{$art->judul}}</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi eaque officiis dignissimos
                    temporibus reprehenderit distinctio. Ipsam laudantium explicabo sed ratione nisi officiis
                    eveniet! Repellat architecto eos aut, ipsum laborum ratione?
                </p>
            </div>
        </div>
    </a>

    <!-- 
    <div class="container artikelPagination">
        <i class="fas fa-angle-left"></i>
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <i class="fas fa-angle-right"></i>
    </div> -->




    <!-- sosmed icon -->
    <div class="iconBox">
        <a href="https://api.whatsapp.com/send?phone=6285853049405" class="perIconBox wa">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- <a href="" class="perIconBox fb">
            <i class="fab fa-facebook-f"></i>
        </a> -->

        <a href="https://www.instagram.com/official_smaubp?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
            class="perIconBox ig">
            <i class="fab fa-instagram"></i>
        </a>

        <!-- <a href="" class="perIconBox yt">
            <i class="fab fa-youtube"></i>
        </a> -->
        <!-- <a href="" class="perIconBox linkin">
            <i class="fab fa-linkedin-in"></i>
        </a> -->
    </div>
    </div>
    @endsection