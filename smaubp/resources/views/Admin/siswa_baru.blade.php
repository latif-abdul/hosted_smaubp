@extends('Admin.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Siswa Baru</h4>
                </div>
                <div class="container">
                    <a class="btn btn-info btn-fill" href="/admin/siswa_baru/create">Tambah</a>
                </div>
                <div class="content">
                    <form method="POST" action="{{$formAction}}" enctype="multipart/form-data" id="myForm">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <label for="tanggal_pengumuman">Tanggal Pengumuman *</label>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">

                                    <input type="date" id="tanggal_pengumuman" class="form-control"
                                        name="tanggal_pengumuman"
                                        value="{{{old('tanggal_pengumuman', isset($tanggal_pengumuman->tanggal_pengumuman) ? $tanggal_pengumuman->tanggal_pengumuman : '')}}}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary btn-fill">Simpan</button>
                            </div>
                        </div>
                    </form>
                    @if (session()->has('success'))
                        <div class="alert alert-success" id="successAlert">
                            {{ session()->get('success') }}
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>
                    @endif

                    <form method="post" action="{{$formAction2}}" enctype="multipart/form-data">


                        {{ csrf_field() }}

                        <label>Pilih file excel</label>
                        <div class="form-group">
                            <input type="file" name="file" required="required">
                        </div>
                        <button type="submit" class="btn btn-primary">Import</button>
                        <a class=" btn btn-success" href="/template/template import siswa.xlsx">Download Template</a>

                    </form>

                    @if (session()->has('success'))
                        <div class="alert alert-success" id="successAlert">
                            {{ session()->get('success') }}
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>
                    @endif

                    <br>
                    <br>
                    <div class="header_wrap">
                        <div class="num_rows">

                            <div class="form-group"> <!--		Show Numbers Of Rows 		-->
                                <select class="form-control" name="state" id="maxRows">


                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="70">70</option>
                                    <option value="100">100</option>
                                    <option value="5000">Show ALL Rows</option>
                                </select>

                            </div>
                        </div>
                        <div class="tb_search">
                            <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                                placeholder="Search.." class="form-control">
                        </div>
                    </div>
                    <table class="table table-striped table-class" id="table-id">


                        <thead>
                            <th>No Pendaftaran</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $santri)
                                <tr>
                                    <td>{{$santri->no_pendaftaran}}</td>
                                    <td>{{$santri->nama_lengkap}}</td>
                                    <td>
                                        <a class="btn btn-secondary" href="/admin/daful/{{$santri->id}}"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a class="btn btn-primary" href="/admin/siswa_baru/{{$santri->id}}/edit"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger" href="/admin/siswa_baru/{{$santri->id}}/delete"><i
                                                class="fa-solid fa-trash"></i></a>
                                        <a class="btn btn-success"
                                            href="/admin/siswa_baru/redirectToWhatsapp/{{$santri->id}}"><i
                                                class="fa-brands fa-whatsapp"></i></a>
                                        <a class="btn btn-info"
                                            href="/admin/siswa_baru/downloadpdf/{{$santri->id}}"><i
                                                class="fa-solid fa-file-arrow-down"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (session()->has('delete'))
                        <div class="alert alert-success" id="successAlert">
                            {{ session()->get('delete') }}
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger" id="successAlert">
                            {{ session()->get('error') }}
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>
                    @endif

                    <!--		Start Pagination -->
                    <!-- <div class='pagination-container'> -->
                    <nav>
                        <ul class="pagination">
                            <!--	Here the JS Function Will Add the Rows -->
                        </ul>
                    </nav>
                    <!-- </div> -->
                    <div class="rows_count">Showing 11 to 20 of 91 entries</div>

                    <!-- 		End of Container -->



                    <!--  Developed By Yasser Mas -->

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- <script>
    const url = '{{$formAction}}';
    $('#myForm').on('submit', (function (e) {
                    e.preventDefault();
                    let formData = new FormData(myForm);
                    $.ajax({
                        type: "PUT",
                        url: url,
                        processData: false,
                        contentType: false,
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
@endsection