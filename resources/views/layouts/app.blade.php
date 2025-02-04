<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <link rel="icon" href="{{ asset('img/logo_clinic1.jpeg') }}" type="image/jpeg">
  <title>Clinic | Hub</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100..900&display=swap" rel="stylesheet">

    <!-- Adminlte CSS -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
</head>
<body>
    <style>
body {
background-image: url('{{ asset('img/fondo.png') }}'); /* Ruta de la imagen de fondo */
background-size: cover; /* Ajusta la imagen para cubrir todo el fondo */
background-position: center; /* Centra la imagen */
background-repeat: no-repeat; /* Evita que la imagen se repita */
background-attachment: fixed; /* Mantiene la imagen fija al hacer scroll */
height: 100vh; /* Asegura que el body ocupe toda la altura de la ventana */
margin: 0; /* Elimina márgenes por defecto */
}
    </style>
    <div id="app">
        <main class="py-4" >
            @yield('content')
        </main>
    </div>

@stack('js')

</body>
</html>
