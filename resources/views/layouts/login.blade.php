<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Amoeba Bootstrap Template - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{{ URL::asset('assets/img/favicon.png')}}}" rel="icon">
  <link href="{{{ URL::asset('assets/img/apple-touch-icon.png')}}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}}" rel="stylesheet">
  <link href="{{{ URL::asset('assets/vendor/icofont/icofont.min.css')}}}" rel="stylesheet">
  <link href="{{{ URL::asset('assets/vendor/venobox/venobox.css')}}}" rel="stylesheet">
  <link href="{{{ URL::asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{{ URL::asset('assets/css/style.css')}}}" rel="stylesheet">
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('home')}}" method="get">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-dark" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{{ URL::asset('assets/vendor/jquery/jquery.min.js')}}}"></script>
    <script src="{{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}}"></script>
    <script src="{{{ URL::asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}}"></script>
    <script src="{{{ URL::asset('assets/vendor/php-email-form/validate.js')}}}"></script>
    <script src="{{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}}"></script>
    <script src="{{{ URL::asset('assets/vendor/venobox/venobox.min.js')}}}"></script>
    <script src="{{{ URL::asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}}"></script>

    <!-- Template Main JS File -->
    <script src="{{{ URL::asset('assets/js/main.js')}}}"></script>
</body>
