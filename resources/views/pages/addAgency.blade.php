@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="center">Add Agency</h2>
        <form action="/addagency" method="POST">
            @csrf
            {{-- @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->has('name') as $error)
                        <li class="red white-text">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif --}}
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input type="text" id="autocomplete-input" name="name" class="autocomplete" value="{{ old('name') }}">
                            <label for="autocomplete-input">AGENCY NAME</label>
                            @if ($errors->has('name'))
                                <p class="red-text">
                                    <b>Please insert name field</b>
                                </p>
                            @endif
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" id="autocomplete-input" name="contact" class="autocomplete" value="{{ old('contact') }}">
                            <label for="autocomplete-input">CONTACT NUMBER</label>
                            @if ($errors->has('contact'))
                                <p class="red-text">
                                    <b>Please insert contact field</b>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="autocomplete-input" name="address" class="autocomplete" value="{{ old('address') }}">
                            <label for="autocomplete-input">AGENCY ADDRESS</label>
                            @if ($errors->has('address'))
                                <p class="red-text">
                                    <b>Please insert address field</b>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="ADD AGENCY" class="blue btn">
        </form>
    </div>
@endsection