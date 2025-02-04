<div class="modal fade" id="store-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header info-md">
                <h4 class="modal-title">Creación de Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user-form create-form" action="{{ route('user.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- otra cosa --}}
                    <style>
                        /* Estilo personalizado para los nav-links */
                        .nav-tabs .nav-link {
                            color: black !important;
                            /* Asegúrate de que el color negro tenga prioridad */
                        }
                    </style>
                    <div class="container mt-1">
                        <div class="col-12 col-sm-12">

                            <div class="card-header p-0 pt-1 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                            href="#custom-tabs-three-home" role="tab"
                                            aria-controls="custom-tabs-three-home" aria-selected="true">Personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-three-profile" role="tab"
                                            aria-controls="custom-tabs-three-profile" aria-selected="false">Contacto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill"
                                            href="#custom-tabs-three-messages" role="tab"
                                            aria-controls="custom-tabs-three-messages"
                                            aria-selected="false">Credenciales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill"
                                            href="#custom-tabs-three-settings" role="tab"
                                            aria-controls="custom-tabs-three-settings"
                                            aria-selected="false">{{__('Address')}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-home-tab">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="name">* Alias</label>
                                                    <input type="text" class="name form-control" name="name_user"
                                                        required>
                                                    <div class="line line-name"></div>
                                                    <small class="error-message error-name"></small>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="name">* Nombre </label>
                                                    <input type="text" name="name_1" class="form-control"
                                                        onblur="capitalizeFirstLetter(this)" required>
                                                    <div class="line line-name"></div>
                                                    <small class="error-message error-name"></small>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="name">2do. Nombre</label>
                                                    <input type="text" name="name_2" class="form-control"
                                                        onblur="capitalizeFirstLetter(this)" required>
                                                    <div class="line line-name"></div>
                                                    <small class="error-message error-name"></small>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="surname1">* Apellido </label>
                                                    <input type="text" name="surname_1"
                                                        onblur="capitalizeFirstLetter(this)" class="form-control"
                                                        required>
                                                    <div class="line line-surname1"></div>
                                                    <small class="error-message error-surname1"></small>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="surname1">2do. Apellido</label>
                                                    <input type="text" name="surname_2"
                                                        onblur="capitalizeFirstLetter(this)" class="form-control"
                                                        required>
                                                    <div class="line line-surname1"></div>
                                                    <small class="error-message error-surname1"></small>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="sex">Sexo</label>
                                                    <select class="form-control" name="sex" id="sex">
                                                        <option value="1">H</option>
                                                        <option value="0">M</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="nationality">Nacionalidad</label>
                                                    <select class="form-control" name="nationality" id="nationality">
                                                        <option value="1">V-</option>
                                                        <option value="0">E-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="ci">Nro. C.I</label>
                                                    <input type="text" name="identity_number" class="form-control"
                                                        required>
                                                    <div class="line line-ci"></div>
                                                    <small class="error-message error-ci"></small>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="birth_date">Fec. Nac</label>
                                                    <input type="date" name="birth_date" class="form-control"
                                                        required>
                                                    <div class="line line-birth_date"></div>
                                                    <small class="error-message error-birth_date"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-profile-tab">
                                        <div class="row">
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="phone_area">cod. area</label>
                                                    <select class="form-control" name="phone_area" id="phone_area">
                                                        <option value="" disabled selected>Opción</option>
                                                        @foreach ($phones as $phone)
                                                            <option value="{{ $phone->code }}">{{ $phone->code }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="phone_number">tlf de casa</label>
                                                    <input type="text" name="phone_number" class="form-control"
                                                        required>
                                                    <div class="line line-phone_number"></div>
                                                    <small class="error-message error-phone_number"></small>
                                                </div>
                                            </div>

                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="cellphone">cod. area</label>
                                                    <select class="form-control" name="cell_phone"
                                                        id="CellPhoneAreaCode">
                                                        <option value="" disabled selected>Opción</option>
                                                        @foreach ($cellphone as $cell)
                                                            <option value="{{ $cell->code }}">{{ $cell->code }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="cellphone_number">tlf. movil</label>
                                                    <input type="text" name="cellphone_number"
                                                        class="form-control" required>
                                                    <div class="line line-cellphone_number"></div>
                                                    <small class="error-message error-cellphone_number"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-messages-tab">
                                        <div class="row">

                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        required autocomplete="current-email">
                                                    <div class="line line-email"></div>
                                                    <small class="error-message error-email"></small>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="password">Contraseña</label>
                                                    <input type="password" name="password" class="form-control"
                                                        required autocomplete="current-password">
                                                    <div class="line line-password"></div>
                                                    <small class="error-message error-password"></small>
                                                </div>
                                            </div>
                                            <!-- Campo de selección de rol -->
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label for="role">Rol</label>
                                                    <select class="form-control" name="role_id" id="role"
                                                        required>
                                                        <option value="" disabled selected>Seleccione un rol
                                                        </option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="error-message error-role text-danger"
                                                        style="display:none;"></div>
                                                </div>
                                            </div>
                                            <!-- Campos específicos para Doctor -->
                                            <div id="doctor-fields" style="display: none;">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <label for="medical_license">Licencia Medica</label>
                                                        <input type="text" name="medical_license"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <label for="specialtys_id">Especialidad</label>
                                                        <select class="form-control" name="specialtys_id">
                                                            <option value="" disabled selected>Seleccione una
                                                                especialidad</option>
                                                            <!-- Opciones de especialidades -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Campos específicos para Secretaria -->
                                            <div id="secretary-fields" style="display: none;">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <label for="employee_contract_types_id">Tipo de
                                                            Contrato</label>
                                                        <select class="form-control" name="employee_contract_types_id">
                                                            <option value="" disabled selected>Seleccione un tipo
                                                                de contrato</option>
                                                            <!-- Opciones de tipos de contrato -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Campos específicos para Paciente -->
                                            <div id="patient-fields" style="display: none;">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <label for="medical_history">Historia Médica</label>
                                                        <input type="text" name="medical_history"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8">
                                                <div class="form-group">
                                                    <strong>{{ __('Imagen') }}</strong>
                                                    <input type="file" name="image"
                                                        class="form-control form-control-border border-width-2"
                                                        id="exampleInputBorderWidth2" accept="image/*" required>
                                                    @error('image')
                                                        <!-- Cambié 'password' por 'image' para que coincida con el campo -->
                                                        <small style="color: red">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-settings-tab">
                                        <div class="row">
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group">
                                                    <label for="federal_state">Estado Federal</label>
                                                    <select name="federal_state" id="federal_state">
                                                        <option value="">Seleccione un estado federal</option>
                                                        @foreach ($federalstates as $state)
                                                            <option value="{{ $state->id }}">{{ $state->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group" id="municipality-container"
                                                    style="display: none;">
                                                    <label for="municipality">Municipio</label>
                                                    <select name="municipality" id="municipality">
                                                        <option value="">Seleccione un municipio</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group" id="city-container" style="display: none;">
                                                    <label for="city">Ciudad</label>
                                                    <select name="city" id="city">
                                                        <option value="">Seleccione una ciudad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                <div class="form-group" id="parish-container" style="display: none;">
                                                    <label for="parish">Parroquia</label>
                                                    <select name="parish" id="parish">
                                                        <option value="">Seleccione una parroquia</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>

                    </div>
                    <!-- /.card -->

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="reset" class="btn btn-limpiar">Limpiar</button>
                        <button type="submit" class="btn info-md submit-btn" disabled>Guardar</button>
                    </div>
            </div>
        </div>
    </div>
    </form>
</div>
<!-- /.modal -->

{{-- <script>
<script>

</script> --}}
