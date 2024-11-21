<div class="modal fade" id="store-modal">
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
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" onblur="capitalizeFirstLetter(this)" required>
                                <div class="line line-name"></div>
                                <small class="error-message error-name"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                            <label for="surname1">Apellidos</label>
                                <input type="text" name="surname1" onblur="capitalizeFirstLetter(this)" class="form-control" required>
                                <div class="line line-surname1"></div>
                                <small class="error-message error-surname1"></small>
                            </div>
                        </div>
                        {{-- <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="nationality">Nacionalidad</label>
                                <select name="nationality" id="nationality">
                                    <option value="V">V-</option>
                                    <option value="E">E-</option>
                                    <option value="J">J-</option>
                                    <option value="G">G-</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="ci">CI</label>
                                <input type="text" name="ci" class="form-control" required>
                                <div class="line line-ci"></div>
                                <small class="error-message error-ci"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required>
                                <div class="line line-email"></div>
                                <small class="error-message error-email"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                                <div class="line line-password"></div>
                                <small class="error-message error-password"></small>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <strong>{{ __('Imagen') }}</strong>
                                <input type="file" name="image"
                                       class="form-control form-control-border border-width-2"
                                       id="exampleInputBorderWidth2"
                                       accept="image/*" required>
                                @error('image') <!-- Cambié 'password' por 'image' para que coincida con el campo -->
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
