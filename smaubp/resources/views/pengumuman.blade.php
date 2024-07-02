@extends('app')
@section('content')
<main class="container" style="margin-top:200pt">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Pengumuman</h1>
            <form method="POST" action="/pengumuman">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg" name="no_pendaftaran"
                        placeholder="Masukkan No Pendaftaran">
                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                </div>
            </form>
            @if (isset($msg))
                <div class="alert alert-{{$color}}" role="alert">
                    <h4 class="alert-heading">{{$st}}</h4>
                    <p>{{$msg}}</p>
                    <!-- <hr> -->
                    <!-- <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> -->
                </div>
                @if($st == "Selamat")
                    <ol>
                        <strong>Waktu daftar ulang mulai tanggal 2 - 9 Juli 2024.</strong>
                        <br>
                        <br>
                        Rincian pembayaran:
                        <ol>
                            <li>Sarana Prasarana : Rp. 7.000.000,-</li>
                            <li>Seragam : Rp. 1.200.000,-</li>
                            <strong>TOTAL : Rp. 8.200.000,-</strong>
                        </ol>

                        Pembayaran melalui transfer ke rekening BSI 7073341967 atas nama Siti Musirroh, bukti transfer dikirim
                        melalui whatsapp Ustadzah Dini 0858 5199 9088.
                        <br><br>

                        Peserta dimohon melengkapi berkas daftar ulang sebagai berikut;
                        <ol>
                        <li>Akta kelahiran</li>
                        <li>Kartu keluarga</li>
                        <li>Lembar Surat Keterangan Lulus (SKL) atau halaman biodata rapor</li>
                        <li>Bukti transfer pembayaran daftar ulang</li>
                        <li>Pas Foto berwarna</li>
                        </ol>
                    </ol>
                    <a href="/daful" class="btn btn-primary">Daftar Ulang</a>
                @endif
            @endif
        </div>
    </div>
</main>
@endsection