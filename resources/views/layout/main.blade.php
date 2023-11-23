<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <title>@yield('title') -  {{ ENV('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  </head>
  <body>
    @include('layout.components.nav')
    <div class="container">
        @yield('mainContent')
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>