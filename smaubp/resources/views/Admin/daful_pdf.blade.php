<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    header {
      text-align: left;
    }

    header img {
      width: 100px;
      /* Adjust logo size as needed */
    }

    .data-diri {
      margin-top: 20px;
    }

    p {
      display: block;
      margin-bottom: 5px;
    }

    .footer {
      text-align: right;
      margin-top: 20px;
    }

    .image1 {
      text-align: left;
    }

    .image2 {
      float: right;
    }

    .image_div {
      width: 100%;
      height: 100px;
      /* overflow: hidden; */
    }

    .image_div1 {
      width: 600px;
      float: left;
    }

    .image_div2 {
      margin-left: 620px;
    }

    .green_line {
      background-color: green;
      width: 100%;
      height: 30px;
    }

    h2,
    h3 {
      color: green;
    }

    .foto {
      width: 113.38582677px;
      height: 151.18110236px;
    }

    td {
      height: 30px;
    }
  </style>
</head>

<body>
  <header>
    <div class="image_div">
      <div class="image_div1">
        <img class="image1" src="{{$base64_logo}}">
      </div>
      <div class="image_div2">
        <img class="image2" src="{{$base64_SQ}}">
      </div>
    </div>
    <div class="green_line"></div>
    <h1>FORMULIR BUKTI <br>PENDAFTARAN SANTRI</h1>
    <h2>SMA - MA Unggulan Berbasis Pesantren <br>Amanatul Ummah</h2>
    <p>Jl. KH. Abdul Chalim, no.1 desa Kembangbelor Pacet Mojokerto</p>
    <p>0823-3657-6055</p>
    <p>officialsmaubp@gmail.com</p>
  </header>
  <br>

  <section class="data-diri">

    <h3>DATA DIRI</h3>
    <table>
      <tr>
        <td>Nama lengkap</td>
        <td>: {{$siswa->nama_lengkap}}</td>
      </tr>
      <tr>
        <td>Nomor pendaftaran</td>
        <td>:{{$siswa->no_pendaftaran}}</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>: {{$siswa->jenis_kelamin}}</td>
      </tr>
      <tr>
        <td>Tempat, tanggal lahir</td>
        <td>: {{$siswa->tempat_lahir}}, {{$tanggal_lahir}}</td>
      </tr>
      <tr>
        <td>Asal sekolah</td>
        <td>: {{$siswa->asal_sekolah}}</td>
      </tr>
      <tr>
        <td>Jalur masuk</td>
        <td>: {{$siswa->jalur_masuk}}</td>
      </tr>
    </table>
  </section> 
  <p class="footer">Mojokerto, {{$today}}</p>
  <img class="foto" src="{{$base64_foto}}">
</body>

</html>