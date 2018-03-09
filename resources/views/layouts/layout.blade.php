<!doctype html>
<script src="js/jquery/jquery-3.3.1.js"></script>
<script src="js/chosen/chosen.jquery.js"></script>
<script src="js/bootstrap/bootstrap.js"></script>
<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="css/chosen/chosen.css">
<link rel="stylesheet" href="css/chosen/chosen-bootstrap.css">
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