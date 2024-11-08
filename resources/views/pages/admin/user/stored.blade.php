@extends('layouts.app_data')
@push('css')

@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ml-5">
                <div class="col-sm-6">
                    <h1 class="mx-3">
                        <i class="c-info-md nav-icon fas fa-users"></i>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="c-info-md nav-icon bi bi-house-door-fill"></i></a></li>
                        <li class="breadcrumb-item active"><i class="c-info-md nav-icon fas fa-users"></i></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-info card-outline">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <strong>{{ __('name') }}</strong>
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
                                            <strong>{{ __('last_name') }}</strong>
                                            <input type="text" name="last_name"
                                                class="form-control form-control-border border-width-2"
                                                id="exampleInputBorderWidth2" placeholder="maria" required>
                                            @error('last_name')
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
                                            <strong>{{ __('password') }}</strong>
                                            <input type="password" name="password"
                                                class="form-control form-control-border border-width-2"
                                                id="exampleInputBorderWidth2" placeholder="maria" required>
                                            @error('password')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-between">
                                <button type="button" class="btn btn-light">Close</button>
                                <button type="submit" class="btn btn-light">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
<script>

</script>

@endpush
