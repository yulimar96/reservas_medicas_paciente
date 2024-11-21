<div class="modal-body">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>{{ __('Nombre') }}</strong>
                <input type="text" name="name"
                    class="form-control form-control-border border-width-2"
                    id="exampleInputBorderWidth2" placeholder="maria" required>

            </div>
             @error('name')
                    <small style="color: red">{{ $message }}</small>
                @enderror
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>{{ __('Apellidos') }}</strong>
                <input type="text" name="surname1"
                    class="form-control form-control-border border-width-2"
                    id="exampleInputBorderWidth2" placeholder="maria" required>
                @error('surname1')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>{{ __('ci') }}</strong>
                <input type="text" name="ci"
                    class="form-control form-control-border border-width-2"
                    id="exampleInputBorderWidth2" placeholder="4546345" required>
                @error('ci')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>{{ __('email') }}</strong>
                <input type="email" name="email"
                    class="form-control form-control-border border-width-2"
                    id="exampleInputBorderWidth2" placeholder="maria@gmail.com" required>
                @error('email')
                    <small style="color: red">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>{{ __('Contraseña') }}</strong>
                <input type="password" name="password"
                    class="form-control form-control-border border-width-2"
                    id="exampleInputBorderWidth2" placeholder="maria" required>
                @error('password')
                    <small style="color: red">{{ $message }}</small>
                @enderror
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
    <a href="{{ route('user.index') }}" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-info">Guardar</button>
</div>
</div>

<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
