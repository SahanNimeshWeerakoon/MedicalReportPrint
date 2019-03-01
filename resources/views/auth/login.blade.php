@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card ">
                        <div class="card-content white-text">
                            <div class="container">
                                <span class="card-title teal-text">LOGIN</span>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" class="autocomplete" name="username" value="{{ old('username') }}" required>
                                        <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="container">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                        
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
