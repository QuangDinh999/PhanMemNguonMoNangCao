<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <!-- iCheck -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <!-- JQVMap -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    <!-- overlayScrollbars -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <!-- Daterange picker -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">

    <!-- summernote -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake"
             src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}"
             alt="AdminLTELogo" height="60" width="60">
    </div>

    @include('partial.navbar')
    @include('partial.sidebar')

    <div class="content-wrapper">


        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    <footer class="main-footer">
        @include('partial.footer')
    </footer>

    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>

<!-- JQVMap -->
<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<!-- jQuery Knob -->
<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Tempusdominus -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>

</body>
</html>
