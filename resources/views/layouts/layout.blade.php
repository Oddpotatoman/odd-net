<!doctype html>
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
@yield('css')
<html>
<header>
    @include('layouts.nav')
</header>
<head>


    <title> @yield('title') </title>

</head>

<body>

<div id="wrap">

@yield('content')

</div>

</body>

<footer id="footer">@include('layouts.footer')</footer>

</html>