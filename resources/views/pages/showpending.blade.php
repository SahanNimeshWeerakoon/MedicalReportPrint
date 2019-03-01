@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- <form action="/addreport" method="POST">
            @csrf --}}
            <div class="row">
                <h5>Personal Info</h5>
                <div class="col m4">
                    {{-- <div class="btn"> --}}
                        <span style="opacity: 0;">.</span><br>
                        <input type="hidden" name="image_url" value="{{ $pendingReport->image_url }}" readonly>
                    {{-- </div>
                    <div class="file-path-wrapper">
                        <input type="text" class="file-path-wrapper"  readonly value="entered from the database"/>
                    </div> --}}
                </div>
                <div class="input-field col m4">
                    <input type="text" id="departure" name="departure" readonly value="{{ $pendingReport->destination }}" />
                    <label for="departure">To</label>
                </div>
                <div class="input-field col m4">
                    <input type="text" id="full_name" name="full_name" readonly value="{{ $pendingReport->name }}"/>
                    <label for="full-name">Full Name</label>
                </div>
                <div class="input-field col m4">
                    <input type="text" id="address" name="address"  readonly value="{{ $pendingReport->address }}"/>
                    <label for="address">Address</label>
                </div>
                <div class="input-field col m4">
                    <input type="text" id="agency" name="agency"  readonly value="{{ $agency->name }}"/>
                    <label for="agency">Recruiting Agency</label>
                </div>
                <div class="input-field col m4">
                    <input type="text" id="passport_no"  readonly value="{{ $pendingReport->passport_no }}"/>
                    <label for="passport_no">Passport Number</label>
                </div>
                <div class="input-field col m4">
                    <input type="text" id="job" name="job" value="{{ $pendingReport->position_applied }}" />
                    <label for="job">Passport Number</label>
                </div>
                <div class="input-field col m4">
                    <input type="text" id="nationality" name="nationality" value="{{ $pendingReport->nationality }}" />
                    <label for="nationality">Nationality</label>
                </div>
                <div class="input-field col m4">
                    <input type="text" id="marital" name="marital" value="{{ $pendingReport->marital }}" />
                    <label for="marital">Nationality</label>
                </div>
            </div>
        <form action="/addreport" method="POST">
            @csrf
            <div class="input-field col m4">
                <input type="hidden" name="pending_id" value="{{ $pendingReport->id }}" readonly/>
            </div>
            <input type="submit" name="submit" value="PROCEED" class="btn cyan" />
        </form>
    </div>
@endsection