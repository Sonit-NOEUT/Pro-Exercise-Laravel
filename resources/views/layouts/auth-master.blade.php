<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('corona-dark/template') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('corona-dark/template') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('corona-dark/template') }}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('corona-dark/template') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('corona-dark/template') }}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('corona-dark/template') }}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('corona-dark/template') }}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('corona-dark/template') }}/assets/images/favicon.png" />
  </head>
  <body>
    {{-- to login  --}}
    @yield('content')

    <!-- plugins:js -->
    <script src="{{ asset('corona-dark/template') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('corona-dark/template') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('corona-dark/template') }}/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ asset('corona-dark/template') }}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{ asset('corona-dark/template') }}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('corona-dark/template') }}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('corona-dark/template') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('corona-dark/template') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('corona-dark/template') }}/assets/js/misc.js"></script>
    <script src="{{ asset('corona-dark/template') }}/assets/js/settings.js"></script>
    <script src="{{ asset('corona-dark/template') }}/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('corona-dark/template') }}/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>