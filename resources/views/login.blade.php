<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Laravel Weather App</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/app.css">
</head>

<body class="d-flex h-100 text-center text-white">

<div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
<header class="mb-auto">
<div>
<h3 class="float-md-center mb-0 text-black">Login</h3>
<div class="container align-center p-5">
    <div class="reform">
        <span>
            <b>Welcome</b>
            <b>to</b>
            <b>Climatic</b>
            <img class="logo" src="https://img.freepik.com/vector-premium/icono-tiempo-realista-moderno-simbolo-meteorologia-sobre-fondo-azul-ilustracion-vector-color_248627-3729.jpg?w=740" alt="logo">
        </span>
    </div>

    <form class="form" action="{{route('inicia-sesion')}}" method="post">
        <h5>Login</h5>
        @csrf
        <div class="my-5 mx-5">
        <!--<label for="Nombre-i" class="text-secondary">Tu nombre:</label>-->
            <input type="text" name="name" id="Nombre-i" class="form-input" placeholder="Tu nombre" required>
        </div>
        <div class="my-5 mx-5">
        <!--<label for="Correo-i" class="text-secondary">Tu correo:</label>-->
            <input type="text" name="email" id="Correo-i" class="form-input" placeholder="Tu correo" required>
        </div>
        <div class="my-5 mx-5">
        <!--<label for="Password-i" class="text-secondary">Contraseña:</label>-->
            <input class="form-input" type="password" name="password" id="Password-i" placeholder="Tu contraseña" required>
        </div>
        <div class="my-3 mx-5">
            <button type="submit" class="btn btn-primary">Acceder</button>
        </div>
        <div class="text-black">
            <input class="form-check-input" type="checkbox" id="rememberCheck" name="remember">Mantener sesion iniciada
        </div>
        <div>  
            <p class="text-secondary">No tienes una cuenta? <a class="text-primary" href="{{route('registro')}}">Registrate</a></p>
        </div>   
    </form>
</div>
</header>

@yield('content')

<footer class="mt-auto text-white-50">
</footer>
</div>

</body>

</html>