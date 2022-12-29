<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')

    
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('css/main/font.css') }}">
    {{-- Icon --}}
    <link rel="shorcut icon" href="{{ asset('images/logo/SquareLogo.png') }}">

    {{-- CSS --}}
    @yield('css')
  </head>

  <body>
    {{-- Navbar --}}
    @include('main.template.navbar')
    @yield('content')
  </body>

  <footer>
    {{-- Navbar --}}
    @include('main.template.footer')
  </footer>

  {{-- JS --}}
  @yield('js')
</html>