@extends('app')
@section('content')
<ul id="autoWidth" class="cs-hidden">
    @foreach($slideshow as $ss)
        <li class="item-a">
            <section class="slideshow">
                <img class="satu" src="images/banner-shd.png" alt="Team Work"
                    style="background-image: url('{{url('uploads/' . $ss->gambar)}}');">
                <div class="shadow"></div>
                <div class="container">
                    <div class="mainText">
                        <div class="garis"></div>
                        <h3>{{$ss->text_1}}</h3>
                        <h1>{{$ss->text_2}}</h1>
                    </div>

                    <!-- <h3>Teamwork In Our Endeavours</h3> -->
                </div>
            </section>
        </li>
    @endforeach
</ul>







<div class="sambutan container">
    <h1>WELCOME TO SMA - MAU Berbasis Pesantren Amanatul Ummah - “The Most Prestigious Tahfidz School”</h1>
    <p>
        “SMA-MA Unggulan Berbasis Pesantren Amanatul Ummah dengan program unggulan “Tahfidzul Qur’an” menjamin murid
        muridnya menghafal Al Qur’an , lulus 100% berklasifisi “A”, serta lulusannya diterima di Perguruan Tinggi
        Favorit sesuai pilihannya, baik di dalam negeri maupun luar negeri. Proses pembelajaran menggunakan sistem yang
        kompetitif, penuh kejujuran, dan rasa percaya diri, dalam bentuk dauroh, try out, dan pembahasan tuntas.”

    </p>
</div>

@foreach ($sambutan as $sbt)

    <div class="kepsek" data-cues="slideInUp">
        <div class="container">

            @if (($loop->index + 1) % 2 == 1)
                <img src="{{ url('uploads/'.$sbt->foto) }}" alt="pendiri SMA-MAU Ummah" data-delay="2000ms">
            @endif
            <div class="visiMisi">

                <!-- <div class="visi">
                        <h5>Our Vision</h5>
                        <h3>Terwujudnya manusia yang unggul, utuh dan berakhlakul karimah guna kemulyaan dan kejayaan Islam dan kaum muslimin , 
                            kemulyaan dan kejayaan seluruh bangsa Indonesia dan untuk terwujudnya cita cita luhur kemerdekaan
                            yaitu terwujudnya kesejahteraan dan tegaknya keadilan utamanya di negara Republik Indonesia.
                        </h3>
                    </div> -->

                <div class="misi">
                    <h5>{{$sbt->nama}}</h5>
                    <h6 class="text-secondary">{{$sbt->jabatan}}</h6>
                    <p>
                        <br>
                        {{$sbt->sambutan}}
                    </p>
                </div>

            </div>
            @if (($loop->index + 1) % 2 == 0)
                <img src="{{ url('uploads/'.$sbt->foto) }}" alt="pendiri SMA-MAU Ummah" data-delay="2000ms">
            @endif
        </div>
    </div>
<br>
@endforeach

<br>

<!-- jurusan -->
<div class="jurusan">
    <div class="container">
        <h2>Prestasi SMA-MAU BP Amanatul Ummah</h2>
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row portfolio-container">
                    @foreach ($galeri as $gallery)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{url('uploads/' . $gallery->gambar)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{$gallery->prestasi}}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>



<section
    class="elementor-section elementor-top-section elementor-element elementor-element-dcd0ec2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="dcd0ec2" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-226d511"
            data-id="226d511" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-adb73b8 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="adb73b8" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                            Jadwal <strong>Pendaftaran & Tes Seleksi</strong>
                        </h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7dfe70b elementor-widget elementor-widget-text-editor"
                    data-id="7dfe70b" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <em>* jadwal dapat berubah menyesuaikan kebijakan yayasan</em>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b0445fe animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="b0445fe" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>
                        <table id="tablepress-1" class="tablepress tablepress-id-1">
                            <thead>
                                <tr class="row-1 odd">
                                    <th class="column-1">Jadwal</th>
                                    <!-- <th class="column2">Jalur Prestasi</th> -->
                                    <th class="column-3">Tes Tulis Gel. 1</th>
                                    <th class="column-4">Tes Tulis Gel. 2</th>
                                    <th class="column-5">Tes Tulis Gel. 3</th>
                                </tr>
                            </thead>
                            <tbody class="row-hover">
                                <tr class="row-2 even">
                                    <td class="column-1">
                                        <strong>Waktu Pendaftaran</strong>
                                    </td>
                                    <!-- <td class="column-2">Coming Soon</td> -->
                                    <td class="column-3">10 Juli &#8211;30 September 2024</td>
                                    <td class="column-4">2 Oktober 2024 &#8211;1 Maret 2025</td>
                                    <td class="column-5">3 Maret &#8211;28 Juni 2025</td>
                                </tr>
                                <tr class="row-3 odd">
                                    <td class="column-1">
                                        <strong>Pelaksanaan Ujian</strong>
                                    </td>
                                    <!-- <td class="column-2">Coming Soon</td> -->
                                    <td class="column-3">1 Oktober 2024</td>
                                    <td class="column-4">2 Maret 2025</td>
                                    <td class="column-5">29 Juni 2025</td>
                                </tr>
                                <!-- <tr class="row-4 even">
                                                                            <td class="column-1">
                                                                                <strong>Pengumuman Hasil Tes</strong>
                                                                            </td>
                                                                            <td class="column-2">H+7 Tanggal Tes</td>
                                                                            <td class="column-3">H+7 Tanggal Tes</td>
                                                                            <td class="column-4">H+7 Tanggal Tes</td>
                                                                            <td class="column-5">H+7 Tanggal Tes</td>
                                                                        </tr> -->
                            </tbody>
                        </table>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="containerArtikelHome container" data-cues="slideInUp">
    <h2>Artikel Terbaru</h2>

    <div class="artikelHome">

        @csrf
        @foreach ($artikel as $art)
            <a class="perArtikelHome" href="/artikel/{{$art->id}}">
                <img src="/uploads/{{$art->gambar}}" alt="Foto Artikel" data-delay="220ms">
                <h3>{{$art->judul}}</h3>
                <small>Di tulis oleh : <span>{{$art->penulis}}</span></small>
                <p>
                    <!-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti quo, iure repellendus explicabo
                            delectus quasi amet libero iusto sequi at. -->
                </p>
            </a>
        @endforeach
    </div>
</div>





<!-- Counters -->
<section class="counter">

    <div class="counter-overlay">

        <div class="container wow bounceInLeft" data-wow-duration="1s">

            <div class="row text-center">

                <div class="col-md-3">

                    <div class="counter-item">

                        <!-- <div><i class="fa fa-cloud-download"></i></div> -->
                        <h2><span class="counter-num"> 61+ </span><span>+</span></h2>
                        <p>Wisudawan Tahfidz 30 juz</p>
                    </div>

                </div>


                <div class="col-md-3">

                    <div class="counter-item">

                        <!-- <div><i class="fa fa--people-fill"></i></div> -->
                        <h2><span class="counter-num"> 29+ </span><span>+</span></h2>
                        <p>Wisudawan Tahfidz 15 Juz</p>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="counter-item">

                        <!-- <div><i class="fa fa-heart-o"></i></div> -->
                        <h2><span class="counter-num"> 62+ </span><span>+</span></h2>
                        <p>Wisudawan Tahfidz 9 Juz</p>
                    </div>

                </div>


                <div class="col-md-3">

                    <div class="counter-item">

                        <!-- <div><i class="fa fa-check"></i></div> -->
                        <h2><span class="counter-num"> 275+ </span><span>+</span></h2>
                        <p>Prestasi</p>
                    </div>

                </div>



            </div>



        </div>

    </div>


</section>

<iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3407.9225237344845!2d112.55723445474571!3d-7.650284919799873!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7877dfa11a2371%3A0x8c80a5aca5c81c16!2sSMAU%20BP%20Amanatul%20Ummah!5e0!3m2!1sen!2sid!4v1707806767840!5m2!1sen!2sid"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
<script>
    window.addEventListener('load', () => {
        var $grid = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item',
            // layoutMode: 'fitColumns',
            // percentPosition: true,
            // masonry: {
            //     columnWidth: 100
            // }
        });
        // layout Isotope after each image loads
        $grid.imagesLoaded().progress(function () {
            $grid.isotope('layout');
        });
    })
</script>
@endsection