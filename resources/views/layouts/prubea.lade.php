@extends('layouts.app_data')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css">


{{-- <script src="{{asset('datatable/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('datatable/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('jquery/dataTables.min.js')}}"></script>
<script src="{{asset('datatable/js/jszip.js')}}"></script>
<script src="{{asset('datatable/js/pdfmake.js')}}"></script>
<script src="{{asset("datatable/js/jquery.responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset('datatable/js/vfs_fonts.js')}}"></script>

 --}}


{{--
<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script> --}}
{{-- <link rel="stylesheet" href="{{asset('datatable/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/buttons.bootstrap4.min.css')}}"> --}}
@endpush

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 ml-5">
            <div class="col-sm-6">
                <a href="{{route('user.store')}}"  class="btn info-md"><i class=" nav-icon bi bi-person-add"></i></a>
                {{-- Header content here --}}
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><i class=" c-info-md nav-icon bi bi-house-door-fill"></i></a></li>
                    <li class="breadcrumb-item active"><i class="c-info-md nav-icon fas fa-users"></i></li>
                </ol>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-info">
                <div class="card-header mx-2 mb-2 p-3 rounded-sm info-md merriweather-light">
                    {{ __('Listado de los Usuarios') }}
                </div>

                <div class="card-body table-responsive">
                    <table id="myTable" class="table table-hover table-sm table-striped-columns" role="grid">
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
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
</script>
@endpush
</div> --}}
                            <div class="card-body">
                                <h4>Ingrese sus datos</h4>
                                <div class="row">
                                    <div class="col-5 col-sm-3">
                                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill"
                                                href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home"
                                                aria-selected="true"><i
                                                    class="c-info-md nav-icon bi bi-house-door-fill"></i></a>
                                            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill"
                                                href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile"
                                                aria-selected="false"><i class="c-info-md fas fa-user"></i></a>
                                            <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill"
                                                href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages"
                                                aria-selected="false"><i class="c-info-md fas fa-briefcase"></i></a>
                                            <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill"
                                                href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings"
                                                aria-selected="false"><i class="c-info-md fas fa-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-7 col-sm-9">
                                        <div class="tab-content" id="vert-tabs-tabContent">
                                            <div class="tab-pane text-left fade show active" id="vert-tabs-home"
                                                role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('name') }}</strong>
                                                            <input type="text" name="name"
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria" required>
                                                                @error('name')
                                                                <small style="color: red">{{Smessage}}</small>
                                                             @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('last_name') }}</strong>
                                                            <input type="text" name="last_name"
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria" required>
                                                                @error('last_name')
                                                                   <small style="color: red">{{Smessage}}</small>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('ci') }}</strong>*
                                                            <input type="text" name="ci"
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria"
                                                                required>
                                                                @error('ci')
                                                                <small style="color: red">{{Smessage}}</small>
                                                             @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('email') }}</strong>
                                                            <input type="email" name="email"
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria"
                                                                required>
                                                                @error('email')
                                                                <small style="color: red">{{Smessage}}</small>
                                                             @enderror
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('password') }}</strong>
                                                            <input type="password" name="password"
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                                                aria-labelledby="vert-tabs-profile-tab">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('estudios') }}</strong>
                                                            <input type="text" name=""
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria">
                                                            {{-- <input type="text" name="name" placeholder="Name" class="form-control" required> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('años de experiencia') }}</strong>
                                                            <input type="text" name=""
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria">
                                                            {{-- <input type="text" name="last_name" placeholder="Last Name" class="form-control" required> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                                                aria-labelledby="vert-tabs-messages-tab">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('status') }}</strong>
                                                            <input type="text" name=""
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria">
                                                            {{-- <input type="text" name="name" placeholder="Name" class="form-control" required> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('expediente') }}</strong>
                                                            <input type="text" name=""
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria">
                                                            {{-- <input type="text" name="last_name" placeholder="Last Name" class="form-control" required> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel"
                                                aria-labelledby="vert-tabs-settings-tab">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('medico') }}</strong>
                                                            <input type="text" name=""
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria">
                                                            {{-- <input type="text" name="name" placeholder="Name" class="form-control" required> --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <strong>{{ __('doctr') }}</strong>
                                                            <input type="text" name=""
                                                                class="form-control form-control-border border-width-2"
                                                                id="exampleInputBorderWidth2" placeholder="maria">
                                                            {{-- <input type="text" name="last_name" placeholder="Last Name" class="form-control" required> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-light">Save changes</button>
                        </div>
                </form>

            </div>
            <link rel="stylesheet" href="{{asset('datatable/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('datatable/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('datatable/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('datatable/css/buttons.bootstrap4.min.css')}}">



<script src="{{asset('datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('datatable/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatable/jszip/3.1.3/jszip.min.js')}}"></script>
<script src="{{asset('datatable/pdfmake/0.1.53/pdfmake.min.js')}}"></script>
<script src="{{asset('datatable/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('datatable/pdfmake/0.1.53/vfs_fonts.js')}}"></script>
