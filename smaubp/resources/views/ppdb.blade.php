@extends('app')
@section('content')
<article-detail>
	<template #comment>
		<comment></comment>
	</template>
	<template #section2>
		<div class="containerIconShare">
			<a href="/form" class="primary-button me-1 ">
				<!-- <a href="https://bit.ly/44fRtwQ" class="btn btn-primary mr-3"> -->
				Daftar
			</a>

			<a href="/pengumuman" class="primary-button me-1 mb-1">
				Pengumuman
			</a>
			</div>
			<div class="containerIconShare mt-3">
				<a href="/download_file?path=uploads%2FBrosur%202024%20SMAU%20BP%20Amanatul%20Ummah.pdf" class="primary-button me-1 mb-1">
					<!-- <a href="https://bit.ly/44fRtwQ" class="btn btn-primary mr-3"> -->
					Download Brosur
				</a>
			</div>
	</template>
</article-detail>


@endsection
