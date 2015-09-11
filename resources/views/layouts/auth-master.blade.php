<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <meta charset="utf-8">
    @section('header')
    @show
    <title>App::@yield('title')</title>
</head>
<body>
<div class="container">
    @section('body')
    @show
</div>
<div class="footer">
    @section('footer')
    @show
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</div>
</body>
</html>
