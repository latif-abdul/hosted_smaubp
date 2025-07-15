@extends('app')
@section('content')
 @isset($gambar)
@foreach($gambar as $img)
                    @if ($loop->first)
<article-detail src="{{url('/uploads/' . $img->gambar)}}" author="{{$artikel->penulis}}" postDate="{{Carbon\Carbon::parse($artikel->created_at)->isoFormat('D MMMM Y')}}" title="{{$artikel->judul}}" href="">
    <template #body>
        {!!$artikel->artikel!!}
    </template>
	<template #comment>
		<comment id="{{ $artikel->id }}" comment-url="{{ $comment_url }}"></comment>
	</template>
</article-detail>
@endif
@endforeach
@endisset
@endsection