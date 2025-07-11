@extends('app')
@section('content')
<article-detail
	src="{{url('images/pramuka.jpeg')}}" 
		author="" 
		post-date="" 
		title="Pendaftaran Siswa Baru" 
		href="">
	<template #body>
		<h3>INFORMASI PENERIMAAN SANTRI BARU</h3>
            <h4>
                BIAYA PENDIDIKAN
            </h4>
            <ol>
                <li>Formulir pendaftaran Rp.450.000,-</li>
                <li>Sarana prasarana Rp.7.500.000,-</li>
                <li>Seragam Rp. 1.200.000,-</li>
                <li>SPP per bulan Rp.2.050.000,-</li>
            </ol>
            <hr>
            <h4>JADWAL PENERIMAAN SANTRI BARU</h4>
            <table-vue>
                <template #head>
                    <table-row is-head=head>
                        <table-data is-head="head" data-column="column1">Gelombang</table-data>
                        <table-data is-head="head" data-column="column2">Pendaftaran</table-data>
                        <table-data is-head="head" data-column="column3">Pelaksanaan Tes</table-data>
                    </table-row>
                </template>
                <template #body>
                    @foreach ($batch as $gelombang)
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">{{$gelombang->name}}</table-data>
                        <table-data is-head="" data-column="column2">{{Carbon\Carbon::parse($gelombang->date_from)->isoFormat('D MMMM Y')}}-{{Carbon\Carbon::parse($gelombang->date_to)->isoFormat('D MMMM Y')}}</table-data>
                        <table-data is-head="" data-column="column3">{{Carbon\Carbon::parse($gelombang->tanggal_tes)->isoFormat('D MMMM Y')}}</table-data>
                    </table-row>
                    @endforeach
                    
                    <!-- <table-row is-head=head>
                        <table-data is-head="" data-column="column1">Gelombang 2</table-data>
                        <table-data is-head="" data-column="column1">20 Oktober 2024 - 1 Maret 2025</table-data>
                        <table-data is-head="" data-column="column1">2 Maret 2025</table-data>
                    </table-row>
                    <table-row is-head=head>
                        <table-data is-head="" data-column="column1">Gelombang 3</table-data>
                        <table-data is-head="" data-column="column1">3 Maret - 29 Juni 2025</table-data>
                        <table-data is-head="" data-column="column1">29 Juni 2025</table-data>
                    </table-row> -->
                </template #body>
            </table-vue>
            <table-vue>
                <template #head>
                    <table-row is-head=head>
                        <table-data is-head="head" data-column="column1" colspan="2" style="text-align:center">Jalur Masuk</table-data>
                    </table-row>
                </template>
				<template #body>
                <table-row is-head=''>
                    <table-data is-head="" data-column="column1">Tes Reguler</table-data>
                    <table-data is-head="" data-column="column2">Prestasi</table-data>
                </table-row>
                <table-row is-head=''>
                    <table-data is-head="" data-column="column1">Mengikuti prosedur tes akademik dan wawancara</table-data>
                    <table-data is-head="" data-column="column2">Menyertakan Sertifikat Juara lomba di bidang tahfidzul qur'an.<br>atau<br>Sertifikat lomba
                        akademik/non-akademik.</table-data>
                </table-row>
</template>
            </table-vue>
            <hr>
            <h4>AKTIVITAS HARIAN SANTRI</h4>
            <table-vue>
                <template #head>
                    <table-row is-head=head>
                        <table-data is-head="head" data-column="column1">Waktu</table-data>
                        <table-data is-head="head" data-column="column2">Kegiatan</table-data>
                    </table-row>
                </template>
                <template #body>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">02.45-04.00</table-data>
                        <table-data is-head="" data-column="column2">Sholat Lail</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">04.00-04.30</table-data>
                        <table-data is-head="" data-column="column2">Sholat Shubuh</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">04.30-05.45</table-data>
                        <table-data is-head="" data-column="column2">Pengajian Kitab</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">05.45-06.30</table-data>
                        <table-data is-head="" data-column="column2">Bersih Diri dan Sarapan</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">06.30-07.30</table-data>
                        <table-data is-head="" data-column="column2">Apel Pagi dan Istighotsah</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">07.30-12.10</table-data>
                        <table-data is-head="" data-column="column2">Kegiatan Belajar Akademik Formal dan Mu'adalah</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">12.10-12.30</table-data>
                        <table-data is-head="" data-column="column2">Sholat Dzuhur</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">12.30-13.00</table-data>
                        <table-data is-head="" data-column="column2">Makan Siang</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">13.00-13.30</table-data>
                        <table-data is-head="" data-column="column2">Apel Siang</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">13.30-16.00</table-data>
                        <table-data is-head="" data-column="column2">Kegiatan Belajar Tahfidzul Qur'an</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">16.00-17.30</table-data>
                        <table-data is-head="" data-column="column2">Bersih Diri dan Sholat Ashar</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">17.30-18.00</table-data>
                        <table-data is-head="" data-column="column2">Sholat Magrib</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">18.00-19.00</table-data>
                        <table-data is-head="" data-column="column2">Pengajian Kitab & Sholat Isya'</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">19.00-20.30</table-data>
                        <table-data is-head="" data-column="column2">Pelajaran Mu'adalah Malam</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">20.30-21.00</table-data>
                        <table-data is-head="" data-column="column2">Makan Malam</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">21.00-22.00</table-data>
                        <table-data is-head="" data-column="column2">Belajar Mandiri dan Daurah Malam</table-data>
                    </table-row>
                    <table-row is-head=''>
                        <table-data is-head="" data-column="column1">22.00-02.45</table-data>
                        <table-data is-head="" data-column="column2">Istirahat Malam</table-data>
                    </table-row>
                </template #body>
            </table-vue>
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
