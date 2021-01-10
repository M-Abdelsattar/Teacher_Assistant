<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mostafa Elkady</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('topresources');
</head>
<body>

     @include('header')
     @yield('content')
     @include('footer')
     <!-- Vendor JS Files -->
    @include('bottomresources');

</body>
</html>
