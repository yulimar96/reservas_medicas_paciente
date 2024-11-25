<!-- Edit User Modal -->
<div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content border-radius">
            <div class="modal-header info-md">
                <h4 class="modal-title">Edición del Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user-form edit-form" method="POST" action="">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" id="user_id">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="name">* Alias</label>
                                <input type="text" class="name form-control" name="name"
                                    value="{{ $user->name_user }}" required>
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
                                <label for="name">2do. Nombre </label>
                                <input type="text" name="name_2" class="form-control"
                                    onblur="capitalizeFirstLetter(this)" required>
                                <div class="line line-name"></div>
                                <small class="error-message error-name"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="surname1">* Apellido</label>
                                <input type="text" class="surname1 form-control" name="surname1"
                                    value="{{ $user->surname_1 }}" required>
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
                                <label for="identity_number">CI</label>
                                <input type="text" class="ci form-control" name="identity_number"
                                    value="{{ $user->identity_number }}" required>
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
                                <input type="email" class="email form-control" name="email"
                                    value="{{ $user->email }}" required autocomplete="current-email">
                                <div class="line line-email"></div>
                                <small class="error-message error-email"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="password form-control" name="password"
                                    value="{{ $user->password }}" required autocomplete="current-password">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="reset" class="btn btn-limpiar">Limpiar</button>
                        <button type="submit" class="btn info-md submit-btn" disabled>Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- CSS para las líneas -->
{{-- <script>
    $(document).ready(function() {
        $('.edit-button').on('click', function() {
            var userId = $(this).data('id'); // Obtiene el ID del usuario desde el botón

            // Realiza una solicitud GET para obtener los datos del usuario
            $.get('/user/' + userId + '/edit', function(data) {
                // Llena los campos del formulario con los datos del usuario
                $('#user_id').val(data.id);
                $('#name').val(data.name);
                $('#surname1').val(data.surname1);
                $('#ci').val(data.ci);
                $('#email').val(data.email);
                $('#password').val(''); // Mantén la contraseña vacía para no mostrarla

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
            const inputs = $('.form-control');

            function validateInput(input) {
                const line = $('#line-' + input.attr('name'));
                const errorMessage = $('#error-' + input.attr('name'));

                // Limpia los mensajes de error y la línea
                line.removeClass('success error').css('width', '0');
                errorMessage.hide().text("");

                let isValid = true;

                // Validación simple
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
                    const surname1Pattern = /^[a-zA-Z]+$/;
                    if (!surname1Pattern.test(input.val())) {
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

            inputs.on('input', function() {
                let formIsValid = true;

                inputs.each(function() {
                    if (!validateInput($(this))) {
                        formIsValid = false;
                    }
                });

                $('#submit-button').prop('disabled', !formIsValid); // Habilita o deshabilita el botón
            });

            $('#edit-form').on('submit', function(event) {
                event.preventDefault(); // Evita el envío del formulario por defecto

                let formIsValid = true;

                inputs.each(function() {
                    if (!validateInput($(this))) {
                        formIsValid = false;
                    }
                });

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
        });
    </script> --}}
