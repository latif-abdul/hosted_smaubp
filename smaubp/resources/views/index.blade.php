@extends('app')
@section('content')
				<carousel class="hero">
					@foreach($slideshow as $ss)
                    <carousel-image url="{{url('uploads/' . $ss->gambar)}}" label1="{{$ss->text_1}}" label2="{{$ss->text_2}}" align="{{ ($loop->index + 1) % 2 == 1 ? 'left': 'right'}}"></carousel-image>
					@endforeach
                </carousel>
					<div class="col-md-9 ms-auto me-auto">
						<h3 align="center" style="margin-top: 50px">WELCOME TO SMA Unggulan Berbasis Pesantren Amanatul Ummah</h3>
						<h3 align="center" style="margin-top: 25px">“Sekolahnya Para Champions”</h3>
					<p align="center">
						“SMA-MA Unggulan Berbasis Pesantren Amanatul Ummah dengan program unggulan “Tahfidzul Qur’an” menjamin murid
        muridnya menghafal Al Qur’an , lulus 100% berklasifisi “A”, serta lulusannya diterima di Perguruan Tinggi
        Favorit sesuai pilihannya, baik di dalam negeri maupun luar negeri. Proses pembelajaran menggunakan sistem yang
        kompetitif, penuh kejujuran, dan rasa percaya diri, dalam bentuk dauroh, try out, dan pembahasan tuntas.”
					</p>
					</div>
@foreach ($sambutan as $sbt)
					<welcome-message name="{{$sbt->nama}}" 
						ip="{{{ ($loop->index + 1) % 2 == 1 ? 'l': 'r'}}}" position="{{$sbt->jabatan}}"
						image = "{{ url('uploads/' . $sbt->foto) }}">
							<p class="m-top-20">{{$sbt->sambutan}}</p>
						</welcome-message>
						@endforeach
						<h3 align="center" style="margin-top: 50px">Program Tahfidzul Qur'an</h3>
						<welcome-message name="Program Tahfidzul Qur'an" 
						ip="l" position="Program Tahfidzul Qur'an"
						image = "/Tahfidzul Qur_an/XII-7 bersama Gus-Ning.jpg">
							<p class="m-top-20">Pelaksanaan program tahfidzul qur’an di SMAU BP dilaksanakan secara komprehensif setiap hari Senin –
                    Jum’at
                    dengan
                    menerapkan 3 metode yaitu; tartil, tahfidz dan taqrir. Dari metode tersebut, santri SMAU BP mampu
                    menerapkan
                    metodologi
                    pembelajaran yang ketat dan bertanggung jawab. Alhamdulilah dengan penerapan metode ini, terlihat
                    peningkatan
                    jumlah santri
                    yang mampu menghafal 30 juz. Pada tahun 2024 SMAU BP Amanatul Ummah mewisuda sejumlah 79 santri
                    kategori 30 Juz,
                    92 santri kategori
                    15 Juz, 62 santri kategori 9 Juz</p>
						</welcome-message>
							<h3 align="center" style="margin-top: 50px">Prestasi SMA-Unggulan BP Amanatul Ummah</h3>
							<gallery>
								@foreach ($galeri as $gallery)
									<gallery-item src="{{url('uploads/' . $gallery->gambar)}}" label="{{$gallery->prestasi}}"></gallery-item>
								@endforeach
							</gallery>
							<h3 align="center" style="margin-top: 50px">Jadwal Pendaftaran & Tes Seleksi</h3>
							<div class="container">
							<table-vue>
								<template #head>
									<table-row is-head=head>
										<table-data is-head="head" data-column="column1">Jadwal</table-data>
										@foreach ($batch as $gelombang)
                                     <table-data is-head="head" data-column="column{{ $loop->index + 2 }}">{{$gelombang->name}}</table-data>
                                     @endforeach
									</table-row>
								</template>
								<template #body>
									<table-row is-head=''>
							<table-data is-head='' data-column="column1"><strong>Waktu Pendaftaran</strong></table-data>
							@foreach ($batch as $gelombang)
							<table-data is-head='' data-column="column{{ $loop->index + 2 }}">{{Carbon\Carbon::parse($gelombang->date_from)->isoFormat('D MMMM Y')}} &#8211;{{Carbon\Carbon::parse($gelombang->date_to)->isoFormat('D MMMM Y')}}</table-data>
							@endforeach
								</table-row>
								<table-row is-head=''>
							<table-data is-head='' data-column="column1"><strong>Pelaksanaan Ujian</strong></table-data>
							@foreach ($batch as $gelombang)
							<table-data is-head='' data-column="column{{ $loop->index + 2 }}">
							{{Carbon\Carbon::parse($gelombang->tanggal_tes)->isoFormat('D MMMM Y')}}
						</table-data>
							@endforeach
								</table-row>
								</template>
								</table-vue>
								</div>
				<h3 align="center" style="margin-top: 50px">Artikel Terbaru</h3>
                <div class="container" style="margin-top: 50px">
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
            <div class="container">
                <h3 align="center" style="margin-top: 50px">Prestasi Alumni</h3>
                <marquee>
					 @foreach ($dir as $fileinfo)
                        @if (!$fileinfo->isDot())
					<marquee-item src="/logo kampus/{{$fileinfo->getFilename()}}"></marquee-item>
					@endif
                    @endforeach
				</marquee>
				<div class="elementor-element elementor-element-b0445fe animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="b0445fe" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <center>
                <table-vue id="tablepress-1" class="tablepress tablepress-id-1">
								<template #head>
									<table-row is-head=head>
										<table-data is-head="head" data-column="column1">Nama</table-data>
										<table-data is-head="head" data-column="column2">Universitas</table-data>
										<table-data is-head="head" data-column="column3">Program Studi</table-data>
										<table-data is-head="head" data-column="column4">Perolehan Hafalan</table-data>
									</table-row>
								</template>
								<template #body>
									@foreach ($alumni as $palumni)
									<table-row is-head=''>
										 
											<table-data is-head='' data-column="column1">{{$palumni->name}}</table-data>
											<table-data is-head='' data-column="column2">{{$palumni->universitas}}</table-data>
											<table-data is-head='' data-column="column3">{{$palumni->prodi}}</table-data>
											<table-data is-head='' data-column="column4">{{$palumni->perolehan_hafalan}}</table-data>
										
								</table-row>
								@endforeach
								</template>
								</table-vue>
                                <center style="margin-top: 50px"><a class="primary-button load_more" href="#">View More</a></center>
								</center>
								</div>
								</div>
            </div>
                <counter style="margin-top:  50px" url="{{ url('images/counter-bg.jpg')}}">
                    <counter-item>
                        <template #number>61+</template>
                        <template #label>WISUDAWAN TAHFIDZ 30 JUZ</template>
                    </counter-item>
                    <counter-item>
                        <template #number>29+</template>
                        <template #label>WISUDAWAN TAHFIDZ 15 JUZ</template>
                    </counter-item>
                    <counter-item>
                        <template #number>62+</template>
                        <template #label>WISUDAWAN TAHFIDZ 9 JUZ</template>
                    </counter-item>
					<counter-item>
                        <template #number>275+</template>
                        <template #label>PRESTASI</template>
                    </counter-item>
                </counter>
@endsection
