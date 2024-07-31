<!doctype html>
<html lang="en">
<head>
    @include ('header')
</head>
<body style="@yield('bg')">
    @include('navigation')
    @yield('content')
    @include('footer')
</body>
</html>