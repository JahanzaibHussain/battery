<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css"> --}}
    {{-- https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css --}}

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
        @include('backend.partial.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
            @include('backend.partial.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
            @yield('content')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
            @include('backend.partial.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
  <!-- End of Page Wrapper -->

  @include('backend.partial.logoutModal')

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('js/app.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('admin/js/demo/chart-pie-demo.js')}}"></script> 
  
  <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>

</body>
</html>