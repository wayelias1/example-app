<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token()}}">
<title>Laravel Weather App</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/app.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<style>
.bd-placeholder-img {
font-size: 1.125rem;
text-anchor: middle;
-webkit-user-select: none;
-moz-user-select: none;
user-select: none;
}

@media (min-width: 768px) {
.bd-placeholder-img-lg {
font-size: 3.5rem;
}
}

.b-example-divider {
height: 3rem;
background-color: rgba(0, 0, 0, .1);
border: solid rgba(0, 0, 0, .15);
border-width: 1px 0;
box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
flex-shrink: 0;
width: 1.5rem;
height: 100vh;
}

.bi {
vertical-align: -.125em;
fill: currentColor;
}

.nav-scroller {
position: relative;
z-index: 2;
height: 2.75rem;
overflow-y: hidden;
}

.nav-scroller .nav {
display: flex;
flex-wrap: nowrap;
padding-bottom: 1rem;
margin-top: -1px;
overflow-x: auto;
text-align: center;
white-space: nowrap;
-webkit-overflow-scrolling: touch;
}

</style>

</head>

<body class="d-flex">

<div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
    <h3 class="float-md-start mb-0">Laravel Weather App</h3>
<header class="mb-auto">
<div>
<nav class="nav nav-masthead justify-content-center float-md" id="navapp">
<a class="nav-link fw-bold py-1 px-0 m-3 active" aria-current="page" href="#">Home</a>
<a class="nav-link fw-bold py-1 px-0 m-3" href="#">Features</a>
<a class="nav-link fw-bold py-1 px-0 m-3" href="#">Contact</a>
    <a class="nav-link fw-bold py-1 px-0 m-3" href="{{route('logout')}}">salir</a>
</nav>
</div>

</header>

@yield('content')

<footer class="mt-auto text-white-50">
    <p>App climatix copyright</p>
</footer>
</div>

</body>

</html>