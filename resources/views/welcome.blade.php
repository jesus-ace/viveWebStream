@extends('layouts.app')


<body class="antialiased">
<nav class="navbar">
  <h1>Main</h1>
    <div class="links" >
      <a href="#">Inicio</a>
      <a href="{{ url('/series') }}">Series</a>
      <a href="">Peliculas</a>
                  @if (Route::has('login'))
                    @auth
      <a href="">Ingresar serie</a>
      <a href="">Ingresar pelicula</a>
      <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
            @endif
    </div>
</nav>
@extends('layouts.banners')