<!doctype html>
<html lang="en">
<head>
    @include ('header')
</head>
<body style="@yield('bg')">
    <div id="app">
        <example-component></example-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>