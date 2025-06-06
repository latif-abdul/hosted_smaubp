@extends('app')
@section('bg', "background-image:url({{url('/images/5e72f6adbf417-commitment2-desktop.jpg')}})")
@section('content')
<div style="">
  <div class="container">
    <div class="card ms-5 me-5" style="margin-top:100px;">
      <div class="content">
        <div class="container">
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
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" class="form-control" name="email" required value="{{{old('email', isset($siswa->email) ? $siswa->email : '')}}}">
              </div>

              <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap (kapital dan tanpa disingkat) *</label>
                <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap" required value="{{{old('nama_lengkap', isset($siswa->nama_lengkap) ? $siswa->nama_lengkap : '')}}}">
              </div>

              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin *</label><br>
                <input type="radio" id="OP" name="jenis_kelamin" value="laki-laki" {{{old('jenis_kelamin', isset($siswa->jenis_kelamin) && $siswa->jenis_kelamin == "laki-laki" ? 'checked=' . '"' . 'checked' . '"' : '')}}} required>
                <label for="OP">Laki-Laki</label>
                <input type="radio" id="OL" name="jenis_kelamin" value="perempuan" {{{old('jenis_kelamin', isset($siswa->jenis_kelamin) && $siswa->jenis_kelamin == "perempuan" ? 'checked=' . '"' . 'checked' . '"' : '')}}} required>
                <label for="OL">Perempuan</label>
            </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir *</label>
                    <input type="text" id="tempat_lahir" class="form-control" name="tempat_lahir" required value="{{{old('tempat_lahir', isset($siswa->tempat_lahir) ? $siswa->tempat_lahir : '')}}}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir *</label>
                    <input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" required value="{{{old('tanggal_lahir', isset($siswa->tanggal_lahir) ? $siswa->tanggal_lahir : '')}}}">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah *</label>
                <input type="text" id="asal_sekolah" class="form-control" name="asal_sekolah" required value="{{{old('asal_sekolah', isset($siswa->asal_sekolah) ? $siswa->asal_sekolah : '')}}}">
              </div>

              <div class="form-group">
                <label for="alamat_sekolah">Alamat Sekolah *</label>
                <input type="text" id="alamat_sekolah" class="form-control" name="alamat_sekolah" required value="{{{old('alamat_sekolah', isset($siswa->alamat_sekolah) ? $siswa->alamat_sekolah : '')}}}">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_ayah">Nama Ayah/ Wali *</label>
                    <input type="text" id="nama_ayah" class="form-control" name="nama_ayah" required value="{{{old('nama_ayah', isset($siswa->nama_ayah) ? $siswa->nama_ayah : '')}}}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_ibu">Nama Ibu *</label>
                    <input type="text" id="nama_ibu" class="form-control" name="nama_ibu" required value="{{{old('nama_ibu', isset($siswa->nama_ibu) ? $siswa->nama_ibu : '')}}}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nomor_hp_ayah">Nomor HP Ayah/ Wali *</label>
                    <input type="number" id="nomor_hp_ayah" class="form-control" name="nomor_hp_ayah" required value="{{{old('nomor_hp_ayah', isset($siswa->nomor_hp_ayah) ? $siswa->nomor_hp_ayah : '')}}}">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nomor_hp_ibu">Nomor HP Ibu *</label>
                    <input type="number" id="nomor_hp_ibu" class="form-control" name="nomor_hp_ibu" required value="{{{old('nomor_hp_ibu', isset($siswa->nomor_hp_ibu) ? $siswa->nomor_hp_ibu : '')}}}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah/ Wali *</label>
                    <input type="text" id="pekerjaan_ayah" class="form-control" name="pekerjaan_ayah" required value="{{{old('pekerjaan_ayah', isset($siswa->pekerjaan_ayah) ? $siswa->pekerjaan_ayah : '')}}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu *</label>
                    <input type="text" id="pekerjaan_ibu" class="form-control" name="pekerjaan_ibu" required value="{{{old('pekerjaan_ibu', isset($siswa->pekerjaan_ibu) ? $siswa->pekerjaan_ibu : '')}}}">
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="penghasilan_ayah">Penghasilan Ayah *</label>
                    <select id="penghasilan_ayah" class="form-control" name="penghasilan_ayah" required>
                            <option value="0-1.000.000" {{{old('penghasilan_ayah', isset($siswa->penghasilan_ayah) && $siswa->penghasilan_ayah == "0-1.000.000" ? 'selected' : '')}}}>0-1.000.000</option>
                            <option value="1.000.000-3.000.000" {{{old('penghasilan_ayah', isset($siswa->penghasilan_ayah) && $siswa->penghasilan_ayah == "1.000.000-3.000.000" ? 'selected' : '')}}}>1.000.000-3.000.000
                            </option>
                            <option value="3.000.000-6.000.000" {{{old('penghasilan_ayah', isset($siswa->penghasilan_ayah) && $siswa->penghasilan_ayah == "3.000.000-6.000.000" ? 'selected' : '')}}}>
                                3.000.000-6.000.000</option>
                            <option value="6.000.000-10.000.000" {{{old('penghasilan_ayah', isset($siswa->penghasilan_ayah) && $siswa->penghasilan_ayah == "6.000.000-10.000.000" ? 'selected' : '')}}}>
                                6.000.000-10.000.000</option>
                            <option value=">10.000.000" {{{old('penghasilan_ayah', isset($siswa->penghasilan_ayah) && $siswa->penghasilan_ayah == ">10.000.000" ? 'selected' : '')}}}>> 10.000.000
                            </option>
                        </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="penghasilan_ibu">Penghasilan Ibu *</label>
                    <select id="penghasilan_ibu" class="form-control" name="penghasilan_ibu" required>
                            <option value="0-1.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "0-1.000.000" ? 'selected' : '')}}}>0-1.000.000</option>
                            <option value="1.000.000-3.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "1.000.000-3.000.000" ? 'selected' : '')}}}>
                                1.000.000-3.000.000
                            </option>
                            <option value="3.000.000-6.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "3.000.000-6.000.000" ? 'selected' : '')}}}>
                                3.000.000-6.000.000</option>
                            <option value="6.000.000-10.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == "6.000.000-10.000.000" ? 'selected' : '')}}}>
                                6.000.000-10.000.000</option>
                            <option value=">10.000.000" {{{old('penghasilan_ibu', isset($siswa->penghasilan_ibu) && $siswa->penghasilan_ibu == ">10.000.000" ? 'selected' : '')}}}>> 10.000.000</option>
                        </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="jalur_masuk">Jalur Masuk *</label><br>
                <input type="radio" id="reguler" name="jalur_masuk" value="reguler" {{{old('jalur_masuk', isset($siswa->jalur_masuk) && $siswa->jalur_masuk == "reguler" ? 'checked=' . '"' . 'checked' . '"' : '')}}} required>
                <label for="OP">Reguler</label>
                <input type="radio" id="prestasi" name="jalur_masuk" value="prestasi" {{{old('jalur_masuk', isset($siswa->jalur_masuk) && $siswa->jalur_masuk == "prestasi" ? 'checked=' . '"' . 'checked' . '"' : '')}}} required>
                <label for="OP">Prestasi</label>
            </div>
            <div class="row" id="upload-sertifikat">
                <div class="col-md-6">
                  <div class="file-field">
                    <label>Sertifikat</label>
                    <input type="file" class="form-control" name="sertifikat">
                  </div>
                </div>
                </div><br>
              <div class="row">
                <div class="col-md-6">
                  <div class="file-field">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="file-field">
                    <label>Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="bukti_pembayaran" required>
                  </div>
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
              <button type="submit" class="btn btn-primary btn-fill">Simpan</button>
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
        <script>
          $(document).ready(function () {
            $("input[name='nomor_hp_ayah'").change(function (delta, oldDelta, source) {
              document.querySelector("input[name='no_wa']").value = $("input[name='nomor_hp_ayah'").value;
            });
          });
        </script>
      </div>
    </div>
  </div>
</div>
@endsection