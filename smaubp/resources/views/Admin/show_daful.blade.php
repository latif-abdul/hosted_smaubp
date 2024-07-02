@extends('Admin.app')
@section('content')
<div class="card">
    <form method="post" action="{{$formAction}}" enctype="multipart/form-data" id="myForm">
        @if(isset($daful)) @method('PUT') @else @method('POST') @endif
        @csrf
        <div class="header">
            <h2 class="title">DAFTAR ULANG SANTRI</h2>
        </div>
        <!-- <p>SELAMAT DATANG CALON GENERASI SMART QUR'ANI !</p>
  
  <ol>
    <li>Silakan melakukan pembayaran formulir online sebesar Rp 400.000 ke rekening BSI (Bank Syariah Mandiri) 7073341967 a.n SITI MUSIRROH (SMAU BP AU PACET)</li>
    <li>Isikan data santri, upload bukti pembayaran dan berkas-berkas yang diperlukan.</li>
    <li>Submit formulir dan tunggu verifikasi admin.</li>
  </ol> -->
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <label class="">
                        Akta Kelahiran
                    </label>
                    <div class="row">
                        <div class="col-md">
                            @if(isset($daful->akta_kelahiran))
                                <img src="/uploads/{{$daful->akta_kelahiran}}" width="80%">
                            @endif
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"
                            name="verifikasi_akta_kelahiran" {{{old('status', isset($daful->verifikasi_akta_kelahiran) && $daful->verifikasi_akta_kelahiran == "1" ? 'checked' : '')}}}>
                        <label class="form-check-label" for="defaultCheck1">
                            Terverifikasi
                        </label>
                    </div>
                    <a class=" btn btn-success" href="/admin/daful/download/{{$daful->akta_kelahiran}}">Download File</a>
                </div>
                <div class="col-md-6">
                <label class="">
                        Kartu Keluarga
                    </label>
                    <div class="row">
                        <div class="col-md">
                            @if(isset($daful->kartu_keluarga))
                                <img src="/uploads/{{$daful->kartu_keluarga}}" width="80%">
                            @endif
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"
                            name="verifikasi_kk" {{{old('status', isset($daful->verifikasi_kk) && $daful->verifikasi_kk == "1" ? 'checked' : '')}}}>
                        <label class="form-check-label" for="defaultCheck1">
                            Terverifikasi
                        </label>
                    </div>
                    <a class=" btn btn-success" href="/admin/daful/download/{{$daful->kartu_keluarga}}">Download File</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <label class="">
                        SKL
                    </label>
                    <div class="row">
                        <div class="col-md">
                            @if(isset($daful->skl))
                                <img src="/uploads/{{$daful->skl}}" width="80%">
                            @endif
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"
                            name="verifikasi_skl" {{{old('status', isset($daful->verifikasi_skl) && $daful->verifikasi_skl == "1" ? 'checked' : '')}}}>
                        <label class="form-check-label" for="defaultCheck1">
                            Terverifikasi
                        </label>
                    </div>
                    <a class=" btn btn-success" href="/admin/daful/download/{{$daful->skl}}">Download File</a>
                </div>
                <div class="col-md-6">
                <label class="">
                        Bukti Transfer
                    </label>
                    <div class="row">
                        <div class="col-md">
                            @if(isset($daful->bukti_transfer))
                                <img src="/uploads/{{$daful->bukti_transfer}}" width="80%">
                            @endif
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"
                            name="verifikasi_bukti_transfer" {{{old('status', isset($daful->verifikasi_bukti_transfer) && $daful->verifikasi_bukti_transfer == "1" ? 'checked' : '')}}}>
                        <label class="form-check-label" for="defaultCheck1">
                            Terverifikasi
                        </label>
                    </div>
                    <a class=" btn btn-success" href="/admin/daful/download/{{$daful->bukti_transfer}}">Download File</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <label class="">
                        Foto
                    </label>
                    <div class="row">
                        <div class="col-md">
                            @if(isset($daful->foto))
                                <img src="/uploads/{{$daful->foto}}" width="80%">
                            @endif
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1"
                            name="verifikasi_foto" {{{old('status', isset($daful->verifikasi_foto) && $daful->verifikasi_foto == "1" ? 'checked' : '')}}}>
                        <label class="form-check-label" for="defaultCheck1">
                            Terverifikasi
                        </label>
                    </div>
                    <a class=" btn btn-success" href="/admin/daful/download/{{$daful->foto}}">Download File</a>
                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Saved</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-fill">Simpan</button>
            <a href="/admin/siswa_baru" class="btn btn-primary btn-fill">Kembali</a>
            @if (session()->has('success'))
                <div class="alert alert-success show" id="successAlert">
                    {{ session()->get('success') }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
            @endif
            <!-- <script>
                // const url = '{{$formAction}}';

                $('#myForm').on('submit', (function (e) {
                    e.preventDefault();
                    let formData = new FormData(this);
                    $.ajax({
                        type: "{{{isset($daful) ? 'PUT' : 'POST'}}}",
                        url: '{{$formAction}}',
                        processData: false,
                        contentType: false,
                        // contentType: 'multipart/form-data',
                        cache: false,
                        data: formData,
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader('X-CSRF-TOKEN', "{{ csrf_token() }}");
                        },
                        success: function (data, status, xhr) {
                            if (xhr.status == 200) {
                                alert("Successfully sent to database");
                            }
                        }, error: function () {
                            alert("Could not send to database");
                        }
                    });
                }));
            </script> -->
        </div>
    </form>
</div>
@endsection