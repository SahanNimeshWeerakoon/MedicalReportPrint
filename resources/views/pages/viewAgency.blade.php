@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="center">VIEW AGENCY</h2>
        <form action="/editagency" method="POST">
            @csrf
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input type="text" id="autocomplete-input" class="autocomplete" readonly value="{{ $agency->name }}" />
                            <label for="autocomplete-input">AGENCY NAME</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" id="autocomplete-input" class="autocomplete" readonly value="{{ $agency->contact }}" />
                            <label for="autocomplete-input">CONTACT NUMBER</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="autocomplete-input" class="autocomplete" readonly value="{{ $agency->address }}" />
                            <label for="autocomplete-input">AGENCY ADDRESS</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m6">
                    <div class="input-field col s12">
                        <input type="text" id="autocomplete-input" class="autocomplete" readonly value="{{ $user }}" />
                        <label for="autocomplete-input">USER WHO ENTERED AGENCY</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection