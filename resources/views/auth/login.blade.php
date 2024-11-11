@extends('layouts.app')
@push('css')


@endpush
@section('content')
<div class="container" style="padding: 20px">
    <div class="row">
        <div class="col s6 m8 offset-m3">
            <div class="card">
                <div class="card-header lighten-2 color-header white-text center-align">
                    <h5>{{ __('Login') }}</h5>
                </div>
                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-field">

                            <input id="email" type="email" class="validate @error('email') invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 80%;">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            @error('email')
                                <span class="helper-text" data-error="{{ $message }}"></span>
                            @enderror
                        </div>

                        <div class="input-field">
                            <input id="password" type="password" class="validate @error('password') invalid @enderror" name="password" required autocomplete="current-password" style="width: 80%;">
                            <label for="password">{{ __('Password') }}</label>
                            @error('password')
                                <span class="helper-text" data-error="{{ $message }}"></span>
                            @enderror
                        </div>

                        <div class="row center-align">
                            <div class="col s4 ">
                                <button type="submit" class="btn waves-effect waves-light">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                @if (Route::has('password.request'))
                                    <a class="btn-flat" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .color-header{
        background-color: #10a2a7 !important;
    }
    .card-header {
        padding: 15px;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .input-field {
        display: flex;
        align-items: center;
    }

    .input-field i {
        margin-right: 10px;
    }
</style>
@endsection

@push('js')
@endpush
