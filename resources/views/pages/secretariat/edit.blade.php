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
                                <label for="name">Nombre</label>
                                <input type="text" class="name form-control" name="name" value="{{$user->name}}" required>
                                <div class="line line-name"></div>
                                <small class="error-message error-name"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="surname1">Apellido</label>
                                <input type="text" class="surname1 form-control" name="surname1" value="{{$user->surname1}}" required>
                                <div class="line line-surname1"></div>
                                <small class="error-message error-surname1"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="ci">CI</label>
                                <input type="text" class="ci form-control" name="ci" value="{{$user->ci}}" required>
                                <div class="line line-ci"></div>
                                <small class="error-message error-ci"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="email form-control" name="email" value="{{$user->email}}" required>
                                <div class="line line-email"></div>
                                <small class="error-message error-email"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="password form-control" name="password" value="{{$user->password}}" required>
                                <div class="line line-password"></div>
                                <small class="error-message error-password"></small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
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
    </script>--}}
