<!doctype html>
<script src="{{ asset('js/jquery/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/chosen/chosen.jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/chosen/chosen.css') }}">
<link rel="stylesheet" href="{{ asset('css/chosen/chosen-bootstrap.css') }}">
<script src="https://cdn.jsdelivr.net/npm/vue"></script>


@yield('css')

<?php use Illuminate\Support\Facades\Route; ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">Odd-Net</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item<?php
                if(\Request::is('dndtables')) {
                    echo " active";
                } ?>">
                    <a class="nav-link" href="#"> Tables <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item<?php
                if(\Request::is('dndtables/add')) {
                    echo " active";
                } ?>"class="nav-item<?php
                if(\Request::is('dndtables/add')) {
                    echo " active";
                } ?>">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item<?php
                if(\Request::is('dndtables/add')) {
                    echo " active";
                } ?>">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item<?php
                if(\Request::is('dndtables/add')) {
                    echo " active";
                } ?>">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<html>

<head>

    <title> @yield('title') </title>

</head>

<body>

<div id="container" style="padding-top: 25px">

    @yield('content')

</div>

</body>

</html>

