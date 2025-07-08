@extends('app')
@section('content')
				<carousel class="hero">
                    <carousel-image url="https://picsum.photos/1000/400" label1="Best Place to Travel" label2="Japan"></carousel-image>
                    <carousel-image url="https://picsum.photos/1000/400" label1="Best Place to Travel" label2="Japan"></carousel-image>
                </carousel>
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
                                <center style="margin-top: 50px"><a class="primary-button load_more" href="#">View More</a></center>
            </div>
                <counter style="margin-top:  50px">
                    <counter-item>
                        <template #number>100</template>
                        <template #label>Lorem ipsum</template>
                    </counter-item>
                    <counter-item>
                        <template #number>200</template>
                        <template #label>Lorem ipsum</template>
                    </counter-item>
                    <counter-item>
                        <template #number>300</template>
                        <template #label>Lorem ipsum</template>
                    </counter-item>
                </counter>
@endsection
