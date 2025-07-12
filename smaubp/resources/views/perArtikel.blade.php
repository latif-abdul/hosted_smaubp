@extends('app')
@section('content')
<article-detail>
	<template #comment>
		<comment id="{{ $artikel->id }}"></comment>
	</template>
</article-detail>
@endsection