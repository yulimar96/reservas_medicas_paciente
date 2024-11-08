
@include('layouts.navbar.head')
@stack('css')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->

  @include('layouts.navbar.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layouts.navbar.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
@include('layouts.navbar.control-aside')
  <!-- /.control-sidebar -->
{{-- sweetalert2 --}}
@if  (($message = Session::get('message')) && ($icono = Session::get('icono')))
{{-- ($message = Session::get('success')) forma tipica --}}
<script>
    Swal.fire({
        position: "top-end",
        icon: "{{ $icono }}",
        title: "{{ $message }}",
        showConfirmButton: false,
        timer: 3000
    });
</script>
@endif

@if ($message = Session::get('error'))
<script>
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "{{ $message }}",
    });
</script>
  <!-- Main Footer -->
@include('layouts.footer.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0')}}"></script>

{{-- toats --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
</script> --}}


@endif
@stack('js')
</body>
</html>
