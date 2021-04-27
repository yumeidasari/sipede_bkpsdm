<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SIPEDE | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('adminlte-v3/plugins/fontawesome-free/css/all.min.css')}}">
  <!--link rel="stylesheet" href="{{url('adminlte-v3/plugins/fontawesome-free/css/all.min.css')}}"-->
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte-v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!--link rel="stylesheet" href="{{url('adminlte-v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"-->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte-v3/dist/css/adminlte.min.css')}}">
  <!--link rel="stylesheet" href="{{url('adminlte-v3/dist/css/adminlte.min.css')}}"-->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="shortcut icon" type="image/png" href="{{ asset('/storage/img/logo-beltim.png') }}">
  <!--Date time picker-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
 
<!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" --> 
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
    @include('adminltelayouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('adminltelayouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
    
  </div>
  <!-- /.content-wrapper -->
   
  @stack('scripts')
  <!-- Main Footer -->
  @include('adminltelayouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!--script src="{{url('adminlte-v3/plugins/jquery/jquery.min.js')}}"></script-->
<script src="{{asset('adminlte-v3/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap -->
<!--script src="{{url('adminlte-v3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script-->
<script src="{{asset('adminlte-v3/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<!--script src="{{url('adminlte-v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script-->
<script src="{{asset('adminlte-v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<!--script src="{{url('adminlte-v3/dist/js/adminlte.js')}}"></script-->
<script src="{{asset('adminlte-v3/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<!--script src="{{url('adminlte-v3/dist/js/demo.js')}}"></script-->
<script src="{{asset('adminlte-v3/dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<!-- <script src="{{url('adminlte-v3/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{url('adminlte-v3/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('adminlte-v3/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{url('adminlte-v3/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script> -->

<script src="{{asset('adminlte-v3/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('adminlte-v3/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('adminlte-v3/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('adminlte-v3/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<!--script src="{{url('adminlte-v3/plugins/chart.js/Chart.min.js')}}"></script-->
<script src="{{asset('adminlte-v3/plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<!--script src="{{url('adminlte-v3/dist/js/pages/dashboard2.js')}}"></script-->
<script src="{{asset('adminlte-v3/dist/js/pages/dashboard2.js')}}"></script>


</body>
</html>
