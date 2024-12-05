@extends('layouts.app_data')
@push('css')
    <link rel="stylesheet" href="{{ asset('datatable/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatable/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('datatable/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endpush
@section('content')
    <section class= "content-header">
        <div class="container-fluid">
            <div class="row mb-2 ml-5">
                <div class="col-sm-6">
                    {{-- <a class="btn mx-2 my-2 info-md" href="{{route('user.create')}}"> <i class="bi bi-person-plus-fill"></i></a> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i
                                    class="c-info-md nav-icon bi bi-house-door-fill"></i></a></li>
                        <li class="breadcrumb-item active"><i class="fa fa-user-circle" aria-hidden="true"></i></li>
                    </ol>
                </div><!-- /.row -->
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class=" card card-info ">{{-- card-outline card-info --}} {{-- <div class="card-icon"> <i class=" c-info-md nav-icon fas fa-users"></i> </div> --}}
                            <div class="card-header mx-2 mb-2 p-3 rounded-sm info-md merriweather-light">
                                <div class="row">
                                    <div class="col-6">
                                        {{ __('Listado de Usuarios registrados') }}
                                    </div>
                                    <div class="col-6 col-6 text-right ">
                                        <button type="button" class="btn mx-2" data-toggle="modal"
                                            data-target="#store-modal">
                                            <i class=" fas fa-plus"></i> <i class=" fas fa-user"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 table-responsive">
                                <div
                                    class="col-sm-12 userTest_wrapper dataTables_wrapper
                        dt-bootstrap4 pt-2 table-responsive">
                                    <table class="userTest table table-striped" role="grid">
                                        <thead class="letra-th merriweather-light c-info-md">
                                            <tr>
                                                <th>{{ __('Nro') }}</th>
                                                <th>{{ __('Avatar') }}</th>
                                                <th>{{ __('Alias') }}</th>
                                                <th>{{ __('Rol') }}</th>
                                                <th>{{ __('Email') }}</th>
                                                <th>{{ __('Opciones') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <?php $contador = 1; ?>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $contador++ }}</td>
                                                    <td>
                                                        <style>
                                                            .img-size-30 {
                                                                width: 30px !important;
                                                            }
                                                        </style>
                                                        @if ($user->image)
                                                            <img src="{{ asset('storage/' . $user->image) }}"
                                                                alt="{{ $user->name_user }}"
                                                                class="img-size-30 img-circle">
                                                        @else
                                                            <span>No image</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->full_name }} </td>
                                                    @foreach ($user->roles as $role)
                                                        <td><span
                                                                class="right badge badge-success">{{ $role }}</span>
                                                        </td>
                                                    @endforeach
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        {{-- <a class="btn btn-primary"
                                                href="{{ route('user.edit', $user->id) }}">
                                                <i class="fa fa-user-circle"aria-hidden="true"></i>

                                            </a> --}} <button
                                                            class="btn btn-sm btn-outline-info edit-button"
                                                            data-id="{{ $user->id }}" data-toggle="modal"
                                                            data-target="#edit-user"><i class="fa fa-edit"
                                                                aria-hidden="true" alt="editar"></i>
                                                        </button>

                                                        <form id="delete-form-{{ $user->id }}" method="POST"
                                                            action="{{ route('user.destroy', $user->id) }}"
                                                            style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="button"
                                                                onclick="confirmDelete({{ $user->id }}, event);">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                    </td>
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


    @include('pages.user.store')
    @include('pages.user.edit')
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
            // Selecciona los formularios de usuario
            const editForm = $('.edit-form');
            const createForm = $('.create-form');

            // Función para validar las entradas
            function validateInput(input) {
                const line = $('.line-' + input.attr('name'));
                const errorMessage = $('.error-' + input.attr('name'));

                // Limpia los mensajes de error y la línea
                line.removeClass('success error').css('width', '0');
                errorMessage.hide().text("");

                let isValid = true;

                // Lógica de validación
                if (input.attr('name') === 'name') {
                    const namePattern = /^[a-zA-Z]+$/;
                    if (!namePattern.test(input.val())) {
                        isValid = false;
                        errorMessage.text("Por favor, ingresa un nombre válido.");
                    }
                } else if (input.attr('name') === 'email') {
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(input.val())) {
                        isValid = false;
                        errorMessage.text("Por favor, ingresa un correo electrónico válido.");
                    }
                } else if (input.attr('name') === 'password') {
                    if (input.val().length < 6) {
                        isValid = false;
                        errorMessage.text("La contraseña debe tener al menos 6 caracteres.");
                    }
                } else if (input.attr('name') === 'surname1') {
                    const surnamePattern = /^[a-zA-Z]+$/;
                    if (!surnamePattern.test(input.val())) {
                        isValid = false;
                        errorMessage.text("Por favor, ingresa un apellido válido.");
                    }
                } else if (input.attr('name') === 'ci') {
                    const ciPattern = /^\d+$/;
                    if (!ciPattern.test(input.val())) {
                        isValid = false;
                        errorMessage.text("Por favor, ingresa un CI válido.");
                    }
                }

                // Despliega la línea de color según la validez
                if (isValid) {
                    line.addClass('success').css('width', '100%');
                } else {
                    line.addClass('error').css('width', '100%');
                    errorMessage.show();
                }

                return isValid;
            }

            // Función para validar el formulario
            function validateForm(form) {
                let formIsValid = true;
                const inputs = form.find('.form-control');

                inputs.each(function() {
                    if (!validateInput($(this))) {
                        formIsValid = false;
                    }
                });

                return formIsValid;
            }

            // Validar entradas en el evento de entrada
            $('.form-control').on('input', function() {
                const form = $(this).closest('.user-form');
                const submitBtn = form.find('.submit-btn');

                const formIsValid = validateForm(form);
                submitBtn.prop('disabled', !formIsValid); // Habilita o deshabilita el botón
            });

            // Validar al enviar el formulario
            $('.user-form').on('submit', function(event) {
                event.preventDefault(); // Evita el envío del formulario por defecto

                const form = $(this);
                const formIsValid = validateForm(form);

                if (!formIsValid) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor, corrige los errores en el formulario antes de enviarlo.',
                        confirmButtonText: 'Aceptar'
                    });
                } else {
                    // Si el formulario es válido, envíalo
                    this.submit(); // Envía el formulario
                }
            });

            // Lógica para manejar la selección de estado federal, municipio, ciudad y parroquia
            $('#federal_state').change(function() {
                var stateId = $(this).val();
                if (stateId) {
                    // Obtener municipios
                    $.get('/municipalities/' + stateId, function(data) {
                        $('#municipality').empty().append(
                            '<option value="">Seleccione un municipio</option>');
                        $.each(data, function(index, municipality) {
                            $('#municipality').append('<option value="' + municipality.id +
                                '">' + municipality.name + '</option>');
                            console.log(municipality.name);

                        });
                        $('#municipality-container').show();
                    });

                    // Obtener ciudades
                    $.get('/cities/' + stateId, function(data) {
                        $('#city').empty().append(
                            '<option value="">Seleccione una ciudad</option>');
                        $.each(data, function(index, city) {
                            $('#city').append('<option value="' + city.id + '">' + city
                                .name + '</option>');
                        });
                        $('#city-container').show();
                    });
                } else {
                    $('#municipality-container').hide();
                    $('#city-container').hide();
                    $('#parish-container').hide();
                }
            });

            $('#municipality').change(function() {
                var municipalityId = $(this).val();
                if (municipalityId) {
                    $.get('/parishes/' + municipalityId, function(data) {
                        $('#parish').empty().append(
                            '<option value="">Seleccione una parroquia</option>');
                        $.each(data, function(index, parish) {
                            $('#parish').append('<option value="' + parish.id + '">' +
                                parish.name + '</option>');
                        });
                        $('#parish-container').show();
                    });
                } else {
                    $('#parish-container').hide();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.edit-button').on('click', function() {
                var userId = $(this).data('id'); // Obtiene el ID del usuario desde el botón

                // Realiza una solicitud GET para obtener los datos del usuario
                $.get('/user/' + userId + '/edit', function(data) {
                    // Llena los campos del formulario con los datos del usuario
                    $('.user_id').val(data.id);
                    $('.name_1').val(data.name);
                    $('.surname_1').val(data.surname1);
                    $('.ci').val(data.ci);
                    $('.email').val(data.email);
                    $('.password').val(''); // Mantén la contraseña vacía para no mostrarla

                    // Cambia la acción del formulario para incluir el ID del usuario
                    $('.edit-form').attr('action', '{{ url('user') }}/' + data.id);

                    // Muestra el modal
                    $('#edit-user').modal('show');
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Selecciona los formularios de usuario
            const editForm = $('.edit-form');
            const createForm = $('.create-form');

            // Función para validar las entradas
            function validateInput(input) {
                const line = $('.line-' + input.attr('name'));
                const errorMessage = $('.error-' + input.attr('name'));

                // Limpia los mensajes de error y la línea
                line.removeClass('success error').css('width', '0');
                errorMessage.hide().text("");

                let isValid = true;

                // Lógica de validación
                const namePattern = /^[a-zA-Z]+$/;
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const ciPattern = /^\d+$/;

                switch (input.attr('name')) {
                    case 'name':
                        if (!namePattern.test(input.val())) {
                            isValid = false;
                            errorMessage.text("Por favor, ingresa un nombre válido.");
                        }
                        break;
                    case 'email':
                        if (!emailPattern.test(input.val())) {
                            isValid = false;
                            errorMessage.text("Por favor, ingresa un correo electrónico válido.");
                        }
                        break;
                    case 'password':
                        if (input.val().length < 6) {
                            isValid = false;
                            errorMessage.text("La contraseña debe tener al menos 6 caracteres.");
                        }
                        break;
                    case 'surname1':
                        if (!namePattern.test(input.val())) {
                            isValid = false;
                            errorMessage.text("Por favor, ingresa un apellido válido.");
                        }
                        break;
                    case 'ci':
                        if (!ciPattern.test(input.val())) {
                            isValid = false;
                            errorMessage.text("Por favor, ingresa un CI válido.");
                        }
                        break;
                }

                // Despliega la línea de color según la validez
                if (isValid) {
                    line.addClass('success').css('width', '100%');
                } else {
                    line.addClass('error').css('width', '100%');
                    errorMessage.show();
                }

                return isValid;
            }

            // Función para validar el formulario
            function validateForm(form) {
                let formIsValid = true;
                const inputs = form.find('.form-control');

                inputs.each(function() {
                    if (!validateInput($(this))) {
                        formIsValid = false;
                    }
                });

                return formIsValid;
            }

            // Validar entradas en el evento de entrada
            $('.form-control').on('input', function() {
                const form = $(this).closest('.user-form');
                const submitBtn = form.find('.submit-btn');

                const formIsValid = validateForm(form);
                submitBtn.prop('disabled', !formIsValid); // Habilita o deshabilita el botón
            });

            // Validar al enviar el formulario
            $('.user-form').on('submit', function(event) {
                event.preventDefault(); // Evita el envío del formulario por defecto

                const form = $(this);
                const formIsValid = validateForm(form);

                if (!formIsValid) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Por favor, corrige los errores en el formulario antes de enviarlo.',
                        confirmButtonText: 'Aceptar'
                    });
                } else {
                    // Si el formulario es válido, envíalo
                    this.submit(); // Envía el formulario
                }
            });

            // Lógica para manejar la selección de estado federal, municipio, ciudad y parroquia
            let debounceTimer;
            $('#federal_state').change(function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => {
                    var stateId = $(this).val();
                    if (stateId) {
                        // Obtener municipios
                        $.ajax({
                            url: '/municipalities/' + stateId,
                            method: 'GET',
                            success: function(data) {
                                $('#municipality').empty().append(
                                    '<option value="">Seleccione un municipio</option>'
                                );
                                $.each(data, function(index, municipality) {
                                    $('#municipality').append(
                                        '<option value="' + municipality
                                        .id + '">' + municipality.name +
                                        '</option>');
                                });
                                $('#municipality-container').show();
                            },
                            error: function() {
                                alert('Error al cargar municipios.');
                            }
                        });

                        // Obtener ciudades
                        $.ajax({
                            url: '/cities/' + stateId,
                            method: 'GET',
                            success: function(data) {
                                $('#city').empty().append(
                                    '<option value="">Seleccione una ciudad</option>'
                                );
                                $.each(data, function(index, city) {
                                    $('#city').append('<option value="' + city
                                        .id + '">' + city.name + '</option>'
                                    );
                                });
                                $('#city-container').show();
                            },
                            error: function() {
                                alert('Error al cargar ciudades.');
                            }
                        });
                    } else {
                        $('#municipality-container').hide();
                        $('#city-container').hide();
                        $('#parish-container').hide();
                    }
                }, 1); // Tiempo de espera para debounce
            });

            $('#municipality').change(function() {
                var municipalityId = $(this).val();
                if (municipalityId) {
                    $.ajax({
                        url: '/parishes/' + municipalityId,
                        method: 'GET',
                        success: function(data) {
                            $('#parish').empty().append(
                                '<option value="">Seleccione una parroquia</option>');
                            $.each(data, function(index, parish) {
                                $('#parish').append('<option value="' + parish.id +
                                    '">' + parish.name + '</option>');
                            });
                            $('#parish-container').show();
                        },
                        error: function() {
                            alert('Error al cargar parroquias.');
                        }
                    });
                } else {
                    $('#parish-container').hide();
                }
            });

            // Manejo de la edición de usuario
            $('.edit-button').on('click', function() {
                var userId = $(this).data('id'); // Obtiene el ID del usuario desde el botón

                // Realiza una solicitud GET para obtener los datos del usuario
                $.get('/user/' + userId + '/edit', function(data) {
                    // Llena los campos del formulario con los datos del usuario
                    $('.user_id').val(data.id);
                    $('.name_1').val(data.name);
                    $('.surname_1').val(data.surname1);
                    $('.ci').val(data.ci);
                    $('.email').val(data.email);
                    $('.password').val(''); // Mantén la contraseña vacía para no mostrarla

                    // Cambia la acción del formulario para incluir el ID del usuario
                    $('.edit-form').attr('action', '{{ url('user') }}/' + data.id);

                    // Muestra el modal
                    $('#edit-user').modal('show');
                }).fail(function() {
                    alert('Error al cargar los datos del usuario.');
                });
            });
        });
    </script>
    <script>
        function confirmDelete(userId, event) {
            event.preventDefault(); // Previene el envío inmediato del formulario

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '¡Estoy seguro!',
                cancelButtonText: 'No, cancelar eliminación'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Proceder con la eliminación
                    deleteUser(userId); // Llama a la función de eliminación
                    // Enviar el formulario para eliminar el usuario
                    document.getElementById('delete-form-' + userId).submit();
                    Swal.fire('Eliminado!', 'El usuario ha sido eliminado.', 'success');
                } else {
                    // Si el usuario cancela, no hacer nada
                    Swal.fire('Cancelado', 'El usuario está a salvo :)', 'error');
                }
            });
        }

        function deleteUser(userId) {
            // Lógica para eliminar al usuario
            console.log("Usuario eliminado:", userId);
        }
    </script>

    <script>
        function capitalizeFirstLetter(input) {
            const value = input.value;
            // Convierte la primera letra a mayúscula y el resto a minúscula
            const formattedValue = value.charAt(0).toUpperCase() + value.slice(1).toLowerCase();
            input.value = formattedValue;
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const roleSelect = document.getElementById('role');
            const doctorFields = document.getElementById('doctor-fields');
            const secretaryFields = document.getElementById('secretary-fields');
            const patientFields = document.getElementById('patient-fields');

            roleSelect.addEventListener('change', function() {
                // Ocultar todos los campos
                doctorFields.style.display = 'none';
                secretaryFields.style.display = 'none';
                patientFields.style.display = 'none';

                // Mostrar campos según el rol seleccionado
                if (this.value == '3') { // ID del rol de doctor
                    doctorFields.style.display = 'block';
                } else if (this.value == '2') { // ID del rol de secretario
                    secretaryFields.style.display = 'block';
                } else if (this.value == '4') { // ID del rol de paciente
                    patientFields.style.display = 'block';
                }
            });
        });
    </script>
@endpush
