<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/svg+xml" href="/vite.svg" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>SMA-MAU BP Amanatul Ummah</title>
			<link rel="stylesheet" href="{{url('css/style2.css')}}">
			<link rel="stylesheet" href="{{ url( 'fonts/icomoon/style.css')}}">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
			<link href="{{ mix('css/app.css') }}" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
			<link rel="stylesheet" href="css/owl.carousel.min.css">
			<link rel="stylesheet" href="css/owl.theme.default.min.css">
				<link href="{{url('css/swiper-bundle.min.css')}}" rel="stylesheet">
	</head>
	<body>
		<div id="app">
			<nav-bar></nav-bar>
				<carousel class="hero"></carousel>
					<div class="col-md-9 ms-auto me-auto">
						<h3 align="center" style="margin-top: 50px">Welcome</h3>
					<p align="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque eleifend in mi 
						sit amet mattis suspendisse ac ligula volutpat nisl rhoncus sagittis cras suscipit 
						lacus quis erat malesuada lobortis eiam dui magna volutpat commodo eget pretium vitae
						elit etiam luctus risus urna in malesuada ante convallis.</p>
					</div>

					<welcome-message name="Prof. Dr. KH. Asep Saifuddin Chalim, M.A" 
						ip="l" position="Pengasuh Pondok Pesantren Amanatul Ummah"
						image = "{{ url('uploads/1722572203-darimun.jpeg')}}">
						<h2 class="text-uppercase"><strong>Made</strong> is Template For Business</h2>

							<p class="m-top-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque eleifend in mi 
								sit amet mattis suspendisse ac ligula volutpat nisl rhoncus sagittis cras suscipit 
								lacus quis erat malesuada lobortis eiam dui magna volutpat commodo eget pretium vitae
								elit etiam luctus risus urna in malesuada ante convallis.</p>
						</welcome-message>
							<h3 align="center" style="margin-top: 50px">Prestasi SMA-Unggulan BP Amanatul Ummah</h3>
							<gallery></gallery>
							<h3 align="center" style="margin-top: 50px">Jadwal Pendaftaran & Tes Seleksi</h3>
							<div class="container">
							<table-vue>
								<template #head>
									<table-row is-head=head>
										<table-data is-head="head" data-column="column1">Jane Medina</table-data>
										<table-data is-head="head" data-column="column2">Sunday</table-data>
										<table-data is-head="head" data-column="column3">Monday</table-data>
									</table-row>
								</template>
								<template #body>
									<table-row is-head=''>
							<table-data is-head='' data-column="column1">Jane Medina</table-data>
								<table-data is-head='' data-column="column2">Sunday</table-data>
								<table-data is-head='' data-column="column3">Monday</table-data>
								</table-row>
								</template>
								</table-vue>
								</div>
				<h3 align="center" style="margin-top: 50px">Artikel Terbaru</h3>
                <div class="container" style="margin-top: 50px">
			<article-vue></article-vue>
            </div>
            <div class="container">
                <h3 align="center" style="margin-top: 50px">Prestasi Alumni</h3>
                <marquee></marquee>
                <table-vue>
								<template #head>
									<table-row is-head=head>
										<table-data is-head="head" data-column="column1">Jane Medina</table-data>
										<table-data is-head="head" data-column="column2">Sunday</table-data>
										<table-data is-head="head" data-column="column3">Monday</table-data>
									</table-row>
								</template>
								<template #body>
									<table-row is-head=''>
							<table-data is-head='' data-column="column1">Jane Medina</table-data>
								<table-data is-head='' data-column="column2">Sunday</table-data>
								<table-data is-head='' data-column="column3">Monday</table-data>
								</table-row>
								</template>
								</table-vue>
                                <center style="margin-top: 50px"><a class="btn btn-primary load_more" href="#">View More</a></center>
            </div>
			</div>
			</div>

			<script src="{{ mix('js/app.js') }}"></script>
			<script src="http://code.jquery.com/jquery.js"></script>
			<script src="js/jquery.min.js"></script>
			<script src="js/popper.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
				<script src="{{url('js/glightbox.min.js')}}"></script>
				<script src="{{url('js/isotope.pkgd.min.js')}}"></script>
				<script src="{{url('js/swiper-bundle.min.js')}}"></script>
				<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
				<script src="js/script2.js"></script>

			<!-- <script src="js/scrollCue.min.js"></script>
			<script>scrollCue.init();</script> -->

			<!-- Custom Js -->
			<!-- <script src="js/custom.js"></script> -->

			<!-- Add JS counter lib -->
			<!-- <script src="js/jquery.waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script> -->

			<!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
			<!-- <script src="{{url('js/glightbox.min.js')}}"></script>
			<script src="{{url('js/isotope.pkgd.min.js')}}"></script>
			<script src="{{url('js/swiper-bundle.min.js')}}"></script> -->
	</body>
</html>
