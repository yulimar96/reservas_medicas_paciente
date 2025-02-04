@extends('layouts.app')


@section('content')

<div class="login-box">

    <div class="login-logo">

      <h5 class="lexend-giga" style="font-weight: 700;">
  Clinic Hub
</h5>

    </div>

    <div class="card" style="border-radius: 22px;">

        <div class="text-center card-header">


            <h5><span class="fas fa-user" style="margin-right: 12px;"></span>
                {{ __('Bienvenido') }}

            </h5>

        </div>

        <div class="card-body">

            <form method="POST" action="{{ route('login') }}">

                @csrf


                <div class="mb-3 input-group">
                    <div class="input-group-append">

                        <div class="bg-white input-group-text">

                            <span class="fas fa-envelope"></span>

                        </div>

                    </div>

                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autocomplete="email" autofocus>



                    @error('email')

                        <span class="invalid-feedback" role="alert">

                            <strong>{{ $message }}</strong>

                        </span>

                    @enderror

                </div>


                <div class="mb-3 input-group">
                    <div class="bg-white input-group-text">

                        <span class="fas fa-lock"></span>

                    </div>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">



                    @error('password')

                        <span class="invalid-feedback" role="alert">

                            <strong>{{ $message }}</strong>

                        </span>

                    @enderror

                </div>


                <div class="row">

                    <div class="col-8">

                        <div class="icheck-primary">

                            <input type="checkbox" id="remember">

                            <label for="remember">{{ __('Recordar') }}</label>

                        </div>

                    </div>

                    <div class="col-4">

                        <button type="submit" class="btn btn-info btn-block">{{ __('Ingresar') }}</button>

                    </div>

                </div>

            </form>


            {{-- <p class="mb-1">

                @if (Route::has('password.request'))

                    <a href="{{ route('password.request') }}">{{ __('Olvidé mi contraseña') }}</a>

                @endif

            </p>

            <p class="mb-0">

                <a href="{{ route('register') }}" class="text-center">{{ __('Registrar un nuevo usuario') }}</a>

            </p> --}}

        </div>

    </div>

</div>


@if ($message = Session::get('error'))

<script>

    Swal.fire({

        icon: "error",

        title: "Oops...",

        text: "{{ $message }}",

    });

</script>

@endif


@if ($message = Session::get('success'))

<script>

    Swal.fire({

        position: "top-end",

        icon: "success",

        title: "{{ $message }}",

        showConfirmButton: false,

        timer: 3000

    });

</script>

@endif


<style>

    .login-box {

        width: 400px; /* Ancho del cuadro de login */

        margin: auto; /* Centrar horizontalmente */

        margin-top: 100px; /* Espacio desde la parte superior */

    }


    .login-logo a {

        font-size: 2rem; /* Tamaño de fuente del logo */

        color: #007bff; /* Color del texto */

    }


    .card-header {

        background-color: #10a2a7; /* Color de fondo del encabezado */

        color: white; /* Color del texto */

        padding: 15px; /* Espaciado */

        font-size: 1.5rem; /* Tamaño de fuente */

        font-weight: bold; /* Negrita */

    }


    .form-control {

        border-radius: 0.25rem; /* Bordes redondeados */

    }


    .btn-primary {

        background-color: #007bff; /* Color de fondo */

        border-color: #007bff; /* Color del borde */

    }


    .btn-primary:hover {

        background-color: #0056b3; /* Color de fondo al pasar el mouse */

        border-color: #0056b3; /* Color del borde al pasar el mouse */

    }

</style>

@endsection


@push('js')

@endpush
