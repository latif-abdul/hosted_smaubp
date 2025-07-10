@extends('app')
@section('content')
<div class="container">
    <form method="POST" action="{{$formAction}}" enctype="multipart/form-data">
        @csrf
        <div style="margin-top: 100px">
            <h2 style="margin-top: 50px">DAFTAR ULANG SISWA</h2>
            <h6>Format Upload File JPEG, JPG, PNG</h6>
            <br>
        </div>
        <div class="content">
            <div class="row line">
                <div class="col-md-6">
                    <input-vue name="no_pendaftaran" label="Nomor Pendaftaran"></input-vue>
                </div>

                <div class="col-md-6">
                    <input-vue label="Nomor Whatsapp Aktif yang bisa dihubungi" name="no_wa"></input-vue>
                </div>
            </div>
            <div class="row line">
                <div class="col-md-6">
                    <input-file label="Akta Kelahiran" name="akta_kelahiran"></input-vue>
                </div>
                <div class="col-md-6">
                    <input-file label="Kartu Keluarga" name="kartu_keluarga"></input-vue>
                </div>
            </div>
            <br>
            <div class="row line">
                <!-- <div class="col-md-6">
                    <div class="file-field">
                        <label>Surat Keterangan Lulus (SKL) atau halaman biodata rapor</label>
                        <input type="file" class="form-control" name="skl" required>
                    </div>
                </div> -->
                <div class="col-md-6">
                    <input-file label="Bukti transfer pembayaran daftar ulang" name="bukti_transfer"></input-vue>
                </div>
                <div class="col-md-6">
                    <input-file label="Pas Foto berwarna" name="foto"></input-vue>
                </div>
            </div>
            <br>
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="file-field">
                        <label>Pas Foto berwarna</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                </div>
            </div>
            <br> -->
            <button type="submit" class="primary-button">Simpan</button>
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
@endsection