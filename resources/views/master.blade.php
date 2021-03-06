<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>{{ $title }} | Sikas</title>

  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
</head>
<body>

    @if (!(Request::is('login') || Request::is('register')))
      @include('partials.navbar')
      @include('partials.sidebar')
      <main id="main">
        @yield('content')
      </main>
    @else 
      @yield('auth')
    @endif


  <script type="module" src="{{ asset('js/app.js') }}"></script>
  @stack('data-table')
</body>
</html>
