<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'StarWars') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ url('/') }}">  {{ config('app.name', 'StarWars') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
    
      @if (Route::has('login'))
      <li class="nav-item">
        
        <li class="nav-item active">
        @auth
            <a class="nav-link" href="{{ url('/home') }}">Home
         @else
        </li>
        <li>
        <a class="nav-link" href="{{ route('login') }}">Login</a>
       
        </li>
      
     
      <li class="nav-item">
        @if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}">Registrar</a>
        @endif
        
      </li>
@endauth
     
      @endif
    </ul>
  </div>
</nav>
<div class="container">

  <blockquote class="blockquote text-center">
   
    <h1 class="mt-5">May the Force be with you!!!!</h1>
  </blockquote>

</div>
    @yield('content')
</body>
</html>
