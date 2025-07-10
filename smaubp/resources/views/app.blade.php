<!doctype html>
<html lang="en">
<head>
    @include ('header')
</head>
<body>
    <div id="app">
        @include ('navigation')
        @yield('content')
        @include ('footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
			<script src="http://code.jquery.com/jquery.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.js"></script>
			<script src="js/jquery.min.js"></script>
			<script src="js/popper.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
				<script src="{{url('js/glightbox.min.js')}}"></script>
				<script src="{{url('js/isotope.pkgd.min.js')}}"></script>
				<script src="{{url('js/swiper-bundle.min.js')}}"></script>
				<script src="{{url('js/select2.min.js')}}"></script>
				<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
				<script src="js/script2.js"></script>
</body>
</html>