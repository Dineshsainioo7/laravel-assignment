<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('before-styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @stack('after-styles')
    <title>Provis Laravel Assignment</title>
  </head>
  <body>
    
      <!-- sweet alert components -->
      <x-utils.sweet-alert />

      @yield('content')
        <!-- Scripts -->
    @stack('before-scripts')
    <!--plugins-->

      <!-- Bootstrap Js cdn -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- sweetalert2 Js cdn -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('after-scripts')
  </body>
</html>