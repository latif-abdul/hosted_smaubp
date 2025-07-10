@extends('app')
@section('bg', "background-image:url({{url('/images/5e72f6adbf417-commitment2-desktop.jpg')}})")
@section('content')
<div style="">
	<div class="container">
		<div class="card ms-5 me-5" style="margin-top:100px;margin-bottom: 50px;">
			<div class="content">
				<div class="container" style="margin-bottom: 25px;">
					<form method="POST" action="/daftar" enctype="multipart/form-data">
						@csrf
						<div class="mt-3">
							<h2>PENDAFTARAN SANTRI</h2>
						</div>
						<p>SELAMAT DATANG CALON GENERASI SMART QUR'ANI !</p>
            <div class="container">
              <ol>
                <li>Silakan melakukan pembayaran formulir online sebesar Rp 450.000 ke rekening BSI (Bank Syariah
                  Mandiri)
                  8080000139 a.n SMA MA BP AMANATUL UMMAH PACET</li>
                <li>Isikan data santri, upload bukti pembayaran dan berkas-berkas yang diperlukan.</li>
                <li>Submit formulir dan tunggu verifikasi admin.</li>
              </ol>
            </div>
            <div class="content mb-3">
              <input-vue class="line" label="Email" name="email"></input-vue>
              <input-vue class="line" label="Nama Lengkap (kapital dan tanpa disingkat) *" name="nama_lengkap"></input-vue>
              <input-radio class="line" label="Jenis Kelamin" name="jenis_kelamin" options='[Laki-laki, Perempuan]'></input-radio>
            <div class="row line">
                <div class="col-md-6">
                  <input-vue label="Tempat Lahir *" name="tempat_lahir"></input-vue>
                  </div>
                  <div class="col-md-6">
                  <input-date label="Tanggal Lahir *" name="tanggal_lahir"></input-date>
                  </div>
                </div>
              </div>
              <input-vue class="line"  label="Asal Sekolah *" name="asal_sekolah"></input-vue>
              <input-vue class="line"  label="Alamat Sekolah *" name="alamat_sekolah"></input-vue>
              <div class="row line">
                <div class="col-md-6">
                  <input-vue label="Nama Ayah/ Wali *" name="nama_ayah"></input-vue>
                </div>

                <div class="col-md-6">
                  <input-vue label="Nama Ibu *" name="nama_ibu"></input-vue>
                </div>
              </div>

              <div class="row line">
                <div class="col-md-6">
                  <input-vue label="Nomor HP Ayah/ Wali *" name="nomor_hp_ayah"></input-vue>
                </div>

                <div class="col-md-6">
                  <input-vue label="Nomor HP Ibu *" name="nomor_hp_ibu"></input-vue>
                </div>
              </div>

              <div class="row line">
                <div class="col-md-6">
                  <input-vue label="Pekerjaan Ayah/ Wali *" name="pekerjaan_ayah"></input-vue>
                </div>
                <div class="col-md-6">
                  <input-vue label="Pekerjaan Ibu *" name="pekerjaan_ibu"></input-vue>
                </div>

              </div>
              <div class="row line">
                <div class="col-md-6">
                  <select-vue label="Penghasilan Ayah *" name="penghasilan_ayah">
                    <option value="0-1.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "0-1.000.000" ? 'selected' : '')}}}>0-1.000.000</option>
                            <option value="1.000.000-3.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "1.000.000-3.000.000" ? 'selected' : '')}}}>
                                1.000.000-3.000.000
                            </option>
                            <option value="3.000.000-6.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "3.000.000-6.000.000" ? 'selected' : '')}}}>
                                3.000.000-6.000.000</option>
                            <option value="6.000.000-10.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "6.000.000-10.000.000" ? 'selected' : '')}}}>
                                6.000.000-10.000.000</option>
                            <option value=">10.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == ">10.000.000" ? 'selected' : '')}}}>> 10.000.000</option>
                  </select-vue>
                </div>
                <div class="col-md-6">
                  <select-vue label="Penghasilan Ibu *" name="penghasilan_ibu">
                    <option value="0-1.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "0-1.000.000" ? 'selected' : '')}}}>0-1.000.000</option>
                            <option value="1.000.000-3.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "1.000.000-3.000.000" ? 'selected' : '')}}}>
                                1.000.000-3.000.000
                            </option>
                            <option value="3.000.000-6.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "3.000.000-6.000.000" ? 'selected' : '')}}}>
                                3.000.000-6.000.000</option>
                            <option value="6.000.000-10.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "6.000.000-10.000.000" ? 'selected' : '')}}}>
                                6.000.000-10.000.000</option>
                            <option value=">10.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == ">10.000.000" ? 'selected' : '')}}}>> 10.000.000</option>
                  </select-vue>
                </div>
              </div>
            <div class="row line">
                <div class="col-md-6">
                  <input-radio label="Jalur Masuk *" name="jalur_masuk" options="[Reguler,Prestasi]"></input-radio>
                </div>
                <div class="col-md-6" id="upload-sertifikat">
                  <input-file label="Sertifikat" name="sertifikat"></input-file>
                </div>
                </div>
                <div class="row line">
                  <div class="col-md-6">
                    <input-file label="Foto" name="foto"></input-file>
                  </div>

                  <div class="col-md-6">
                    <input-file label="Bukti Pembayaran" name="bukti_pembayaran"></input-file>
                  </div>
                  </div>

                <br>
                <!-- <div class="alert alert-success" id="successAlert" role="alert">
                  Your form has been submitted successfully!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <script>
                  const form = document.getElementById('myForm');
                  const successAlert = document.getElementById('successAlert');

                  form.addEventListener('submit', function (event) {
                    $('.alert').alert();
                    console.log('cek')
                  });
                </script> -->
                  <button type="submit" class="primary-button mb-auto ms-5">Simpan</button>
                  </div>
                  @if (session()->has('success'))
                <div class="alert alert-success" id="successAlert">
                {{ session()->get('success') }}
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                @endif
                @if ($errors->any())
                  <div class="alert alert-danger" id="successAlert">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                    @if ($errors->has('email'))
                    @endif
                  </div>
                  @endif
                  </div>
                  </form>
                </div>
                </div>
                </div>
                </div>
              </div>
              @endsection
