@extends('app')
@section('content')
<div class="container">
    <form method="POST" action="{{$formAction}}" enctype="multipart/form-data">
        @csrf
        <div>
            <br>
            <br>
            <br>
            <br>
            <h2>DAFTAR ULANG SISWA</h2>
            <h6>Format Upload File JPEG, JPG, PNG</h6>
            <br>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_pendaftaran">Nomor Pendaftaran</label>
                        <input type="text" id="no_pendaftaran" class="form-control" name="no_pendaftaran" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_wa">Nomor Whatsapp Aktif yang bisa dihubungi</label>
                        <input type="number" id="no_wa" class="form-control" name="no_wa" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="file-field">
                        <label>Akta Kelahiran</label>
                        <input type="file" class="form-control" name="akta_kelahiran" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="file-field">
                        <label>Kartu Keluarga</label>
                        <input type="file" class="form-control" name="kartu_keluarga" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- <div class="col-md-6">
                    <div class="file-field">
                        <label>Surat Keterangan Lulus (SKL) atau halaman biodata rapor</label>
                        <input type="file" class="form-control" name="skl" required>
                    </div>
                </div> -->
                <div class="col-md-6">
                    <div class="file-field">
                        <label>Bukti transfer pembayaran daftar ulang</label>
                        <input type="file" class="form-control" name="bukti_transfer" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="file-field">
                        <label>Pas Foto berwarna</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
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
</div>
</div>
@endsection