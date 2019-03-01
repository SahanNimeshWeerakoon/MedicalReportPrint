@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="center">EDIT Agency</h2>
        <form action="/update" method="POST">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">AGENCY NAME</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">CONTACT NUMBER</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">AGENCY ADDRESS</label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="UPDATE AGENCY" class="blue btn">
        </form>
    </div>
@endsection