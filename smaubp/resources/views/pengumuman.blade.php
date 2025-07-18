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
                        <strong>Waktu daftar ulang mulai 7 Juli – 12 Juli 2025. </strong>
                        <br>
                        <br>
                        Rincian pembayaran:
                        <ol>
                            <li>Sarana Prasarana : Rp. 7.500.000,-</li>
                            <li>Seragam : Rp. 1.200.000,-</li>
                            <strong>TOTAL : Rp. 8.700.000,-</strong>
                        </ol>

                        Pembayaran melalui rekening BSI 8080000139 atas nama PSB SMA MA BP AMANATUL UMMAH PACET

                        Bukti transfer dikirim melalui WhatsApp Ustadzah Dini 0858 5199 9088
                        <br><br>

                        Peserta dimohon melengkapi berkas daftar ulang sebagai berikut;
                        <ol>
                            <li>Akta kelahiran</li>
                            <li>Kartu keluarga</li>
                            <!-- <li>Lembar Surat Keterangan Lulus (SKL) atau halaman biodata rapor</li> -->
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