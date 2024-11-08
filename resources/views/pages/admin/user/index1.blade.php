@extends('layouts.app_data')
@push('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{asset('datatable/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/buttons.bootstrap4.min.css')}}"> --}}
    <!-- DataTables CSS -->

<link rel="stylesheet" href="{{ asset('datatable/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatable/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatable/css/buttons.bootstrap4.min.css') }}">
@endpush
<style>
  .userTest_wrapper button {
    background:linear-gradient(45deg, #00dcff, #0071b3) !important;
    color: white !important;
    border: none !important;
    border-radius: 5px !important;
    padding: 10px 15px !important;
    margin: 5px !important;
    transition: background 0.3s, box-shadow 0.3s !important;
}
.userTest_wrapper button:hover {
    background: linear-gradient(45deg, #829dbb, #bcc5cf) !important;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) !important;
}

/* Estilo para el contenedor de botones */
.dataTables_wrapper button {
    margin-bottom: 10px !important;
}
</style>
@section('content')
<section class= "content-header">
    <div class="container-fluid">
        <div class="row mb-2 ml-5">
            <div class="col-sm-6">
                <a class="btn mx-2 my-2 info-md" href="{{route('user.create')}}"> <i class="bi bi-person-plus-fill"></i></a>
            </div><!-- /.col -->
            <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i
                                    class="c-info-md nav-icon bi bi-house-door-fill"></i></a></li>
                        <li class="breadcrumb-item active"><i class="fa fa-user-circle" aria-hidden="true"></i></li>
                    </ol>
                    {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                            {{-- bottom modal --}}
                 {{-- <button type="button" class="btn mx-2 info-md" data-toggle="modal"
                    data-target="#modal-info"> <i class="fas fa-plus"></i> <i class="fas fa-user"></i>
                </button> --}}

            </div>
        </div><!-- /.row -->
    </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div  class=" card card-info ">{{-- card-outline card-info --}} {{-- <div class="card-icon"> <i class=" c-info-md nav-icon fas fa-users"></i> </div> --}}

                        <div class="card-header mx-2 mb-2 p-3 rounded-sm info-md merriweather-light">
                        {{ __('Listado de los Usuarios') }}
                        </div>
                        <div class="card-body table-responsive">
                            <div class="col-sm-12 userTest_wrapper dataTables_wrapper dt-bootstrap4 pt-2 table-responsive">
                                <table class="userTest table table-striped table-bordered" role="grid">
                                    <thead class="letra-th merriweather-light c-info-md">
                                        <tr>
                                            <th>{{ __('Nro') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Last Name') }}</th>
                                            <th>{{ __('Email') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php $contador = 1; ?>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $contador++ }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->last_name }}</td>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   {{-- @include('pages.admin.user.store') --}}
@endsection

@push('js')
<script src="{{ asset('datatable/js/jquery-3.6.0.min.js') }}"></script>

<!-- DataTables JS -->
<script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('datatable/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('datatable/js/vfs_fonts.js') }}"></script>
<script>
$(document).ready(function() {
    $(".userTest").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "language": {
            "sEmptyTable": "No hay datos disponibles en la tabla",
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            "sInfoEmpty": "Mostrando 0 a 0 de 0 entradas",
            "sInfoFiltered": "(filtrado de _MAX_ entradas totales)",
            "sLengthMenu": "Mostrar _MENU_ entradas",
            "sLoadingRecords": "Cargando...",
            "sProcessing": "Procesando...",
            "sSearch": "Buscar:",
            "sZeroRecords": "No se encontraron resultados",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "buttons": [
            {
                extend: "copy",
                text: "Copiar",
                className: "btn btn-primary"
            },
            {
                extend: "csv",
                text: "CSV",
                className: "btn btn-primary"
            },
            {
                extend: "excel",
                text: "Excel",
                className: "btn btn-primary"
            },
            {
                extend: "pdf",
                text: "PDF",
                className: "btn btn-primary"
            },
            {
                extend: "print",
                text: "Imprimir",
                className: "btn btn-primary"
            },
            {
                extend: "colvis",
                text: "Columnas",
                className: "btn btn-primary"
            }
        ]
    }).buttons().container().appendTo('.userTest_wrapper .col-md-6:eq(0)');
});
</script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                dom: 'Bfrtip', // Define la posición de los botones
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script> --}}




@endpush
