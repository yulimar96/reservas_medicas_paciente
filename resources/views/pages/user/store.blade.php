<div class="modal fade" id="store-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form class="user-form create-form" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header info-md">
                    <h4 class="modal-title">Creación de Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="name">* Alias</label>
                                <input type="text" class="name form-control" name="name" required>
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
                                <label for="surname1">* Apellidos </label>
                                <input type="text" name="surname_1" onblur="capitalizeFirstLetter(this)"
                                    class="form-control" required>
                                <div class="line line-surname1"></div>
                                <small class="error-message error-surname1"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="surname1">2do. Apellidos</label>
                                <input type="text" name="surname_2" onblur="capitalizeFirstLetter(this)"
                                    class="form-control" required>
                                <div class="line line-surname1"></div>
                                <small class="error-message error-surname1"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="nationality">Nacionalidad</label>
                                <select name="nationality" id="nationality">
                                    <option value="1">V-</option>
                                    <option value="0">E-</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="sex">Sexo</label>
                                <select name="sex" id="sex">
                                    <option value="1">H</option>
                                    <option value="0">M</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="ci">CI</label>
                                <input type="text" name="identity_number" class="form-control" required>
                                <div class="line line-ci"></div>
                                <small class="error-message error-ci"></small>
                            </div>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2">
                            <div class="form-group">
                                <label for="phone_area">cod. area</label>
                                <select name="phone_area_codes_id" id="phone_area">
                                    <option value="" disabled selected>Seleccione un code</option>
                                    @foreach ($phones as $phone)
                                        <option value="{{ $phone->id }}">{{ $phone->code }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="phone_number">phone_number</label>
                                <input type="text" name="phone_number" class="form-control" required>
                                <div class="line line-phone_number"></div>
                                <small class="error-message error-phone_number"></small>
                            </div>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2">
                            <div class="form-group">
                                <label for="cellphone">cell cod. area</label>
                                <select name="cell_phone_area_codes_id" id="CellPhoneAreaCode">
                                    <option value="" disabled selected>Seleccione un cod</option>
                                    @foreach ($cellphone as $cell)
                                        <option value="{{ $cell->id }}">{{ $cell->code }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="cellphone_number">cellphone_number</label>
                                <input type="text" name="cellphone_number" class="form-control" required>
                                <div class="line line-cellphone_number"></div>
                                <small class="error-message error-cellphone_number"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="federal_state">Estado Federal</label>
                            <select name="federal_state" id="federal_state">
                                <option value="">Seleccione un estado federal</option>
                                @foreach ($federalstates as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" id="municipality-container" style="display: none;">
                            <label for="municipality">Municipio</label>
                            <select name="municipality" id="municipality">
                                <option value="">Seleccione un municipio</option>
                            </select>
                        </div>

                        <div class="form-group" id="city-container" style="display: none;">
                            <label for="city">Ciudad</label>
                            <select name="city" id="city">
                                <option value="">Seleccione una ciudad</option>
                            </select>
                        </div>

                        <div class="form-group" id="parish-container" style="display: none;">
                            <label for="parish">Parroquia</label>
                            <select name="parish" id="parish">
                                <option value="">Seleccione una parroquia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="role">Rol</label>
                            <select class="form-control" name="role_id" required>
                                <option value="" disabled selected>Seleccione un rol</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <div class="error-message error-role text-danger" style="display:none;"></div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required
                                    autocomplete="current-email">
                                <div class="line line-email"></div>
                                <small class="error-message error-email"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" required
                                    autocomplete="current-password">
                                <div class="line line-password"></div>
                                <small class="error-message error-password"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
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
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="reset" class="btn btn-limpiar">Limpiar</button>
                    <button type="submit" class="btn info-md submit-btn" disabled>Guardar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.modal -->

{{-- <script>
<script>

</script> --}}
