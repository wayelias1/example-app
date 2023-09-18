@extends('layouts.app')

@section('content')
<main class="px-3">
<div class="container">
<div class="row m-0">
<div class="col-md-8 app1">
    <h1>Bienvenido</h1>
<h2>Búsqueda Global del Clima</h2>
<form action="{{ route('search') }}" method="get">
@csrf
<div class="form-group">
<label for="city" class="my-3">
Introduce el nombre de la ciudad
</label>
<input type="text" class="form-control mt-2" name="city" id="city"
placeholder="Nombre de la ciudad">
@error('city')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

@isset($notFound)
<div class="alert alert-danger mt-3" role="alert">
Ciudad no encontrada, intente de nuevo!
</div>
@endisset

<button type="submit" class="btn btn-success mt-3">Consultar</button>
</form>
</div>
</div>

<div class="col-md-4 app2">
    @isset($ok)
    <div class="col-md-12">
    <h5>{{ $main }}
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path d="M375.7 19.7c-1.5-8-6.9-14.7-14.4-17.8s-16.1-2.2-22.8 2.4L256 61.1 173.5 4.2c-6.7-4.6-15.3-5.5-22.8-2.4s-12.9 9.8-14.4 17.8l-18.1 98.5L19.7 136.3c-8 1.5-14.7 6.9-17.8 14.4s-2.2 16.1 2.4 22.8L61.1 256 4.2 338.5c-4.6 6.7-5.5 15.3-2.4 22.8s9.8 13 17.8 14.4l98.5 18.1 18.1 98.5c1.5 8 6.9 14.7 14.4 17.8s16.1 2.2 22.8-2.4L256 450.9l82.5 56.9c6.7 4.6 15.3 5.5 22.8 2.4s12.9-9.8 14.4-17.8l18.1-98.5 98.5-18.1c8-1.5 14.7-6.9 17.8-14.4s2.2-16.1-2.4-22.8L450.9 256l56.9-82.5c4.6-6.7 5.5-15.3 2.4-22.8s-9.8-12.9-17.8-14.4l-98.5-18.1L375.7 19.7zM269.6 110l65.6-45.2 14.4 78.3c1.8 9.8 9.5 17.5 19.3 19.3l78.3 14.4L402 242.4c-5.7 8.2-5.7 19 0 27.2l45.2 65.6-78.3 14.4c-9.8 1.8-17.5 9.5-19.3 19.3l-14.4 78.3L269.6 402c-8.2-5.7-19-5.7-27.2 0l-65.6 45.2-14.4-78.3c-1.8-9.8-9.5-17.5-19.3-19.3L64.8 335.2 110 269.6c5.7-8.2 5.7-19 0-27.2L64.8 176.8l78.3-14.4c9.8-1.8 17.5-9.5 19.3-19.3l14.4-78.3L242.4 110c8.2 5.7 19 5.7 27.2 0zM256 368a112 112 0 1 0 0-224 112 112 0 1 0 0 224zM192 256a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/>
    </svg>
    </h5>

    <h1>{{ intval($temp) }}&deg;C</h1>
    </div>
    
    <div class="col-md-12">
    <h3>{{ $name }}, {{ $country }}</h3>
    </div>
    
    <div class="col-md-12">
    <h4>{{ $weather }}</h4>
    </div>
    @endisset
    
    </div>
</div>
    
</main>
@endsection