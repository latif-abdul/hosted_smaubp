@extends('app')
@section('content')
<div class="container titleArtikel">
    <!-- <h1>Latest Post</h1> -->
    <h1>Postingan Terbaru</h1>
</div>

<div class="container artikel">
    <h2 style="margin-top: 50px">Postingan Terbaru</h2>
    <article-vue>
        @foreach ($artikel as $art)
					@foreach($art->images as $img)
                    @if ($loop->first)
                        <article-index 
							src="/uploads/{{$img->gambar}}" 
							author="{{$art->penulis}}" 
							post-date="{{Carbon\Carbon::parse($art->created_at)->isoFormat('D MMMM Y')}}" 
							title="{{$art->judul}}" 
							href="/artikel/{{$art->id}}"></article-index>
                    @endif

                @endforeach
				@endforeach
    </article-vue>
</div>
@endsection