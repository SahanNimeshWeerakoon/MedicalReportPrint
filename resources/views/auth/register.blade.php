@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h3 class="center blue-text text-darken-4">Add An User</h3>

        <div class="row">
            <div class="input-field col s12 m6">
                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12 m6">
                <input id="username" type="text" class="validate" name ="username" value="{{ old('username') }}" required>
                <label for="username">Username</label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password" required>
                <label for="password">Password</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                <label for="password-confirm">Confirm Password</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m6">
                <input id="position" type="text" class="validate" name ="position" value="{{ old('position') }}" required>
                <label for="position">Job Position</label>
            </div>
            <div class="input-field col s12 m6">
                <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required >
                <label for="name">Name</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="contact" type="text" class="validate" name ="contact" value="{{ old('contact') }}" required>
                <label for="contact">Contact</label>
            </div>
        </div>
        
        
        
        
        
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>

    </form>
</div>
@endsection
