<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.navbar.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.navbar.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 info-md" >
        <a href="{{route('home')}}" class="brand-link mb-2">
            <img src="{{url('img/logo_clinic1.jpeg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="bg-info py-2 px-3 rounded-sm merriweather-black-italic ">Clinic Hub</span>
        </a>

        <!-- Sidebar -->
        @include('layouts.navbar.aside')
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('layouts.footer.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
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
<script>

    </script>
@endif
@stack('js')
</body>
</html>
