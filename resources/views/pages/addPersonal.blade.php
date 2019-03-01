@extends('layouts.app')
@section('content')
    <div class="personal">
        <div class="container">
            <form action="/pendingorreport" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="type"  value="{{$type}}" />
                <div class="row">
                    <h5>Personal Info</h5>
                    <div class="col m4 client-image">
                        <span>Image</span>
                        <input type="file" name="prof_img" />
                    </div>
                    <div class="input-field col m4">
                        <input type="text" id="departure" name="departure" class="validate" onclick="addValues(this.id);" required />
                        <label for="departure">To</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" id="full_name" name="full_name" class="validate" onclick="addValues(this.id);" required />
                        <label for="full_name">Full Name</label>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" id="address" name="address" class="validate" onclick="addValues(this.id);" required />
                        <label for="address">Address</label>
                    </div>
                    <div class="input-field col m4">
                        <select name="agency" id="" required>
                            <option value="" disabled selected>selecet agency</option>
                            <option value="1">agency 1</option>
                            <option value="2">agency 2</option>
                            <option value="2">agency 2</option>
                            <option value="3">agency 3</option>
                        </select>
                    </div>
                    <div class="input-field col m4">
                        <input type="text" id="passport_no" name="passport_no" class="validate" onclick="addValues(this.id);" required />
                        <label for="passport_no">Passport Number</label>
                    </div>
                    <div class="input-field col m4">
                        <select name="position" id="" required>
                            <option value="" disabled selected>selecet position</option>
                            <option value="job 1">job 1</option>
                            <option value="job 2">job 2</option>
                            <option value="job 2">job 2</option>
                            <option value="job 3">job 3</option>
                        </select>
                    </div>
                    <div class="input-field col m4">
                        <select name="nationality" id="" required>
                            <option value="" disabled selected>selecet nationality</option>
                            <option value="nationality 1">nationality 1</option>
                            <option value="nationality 2">nationality 2</option>
                            <option value="nationality 2">nationality 2</option>
                            <option value="nationality 3">nationality 3</option>
                        </select>
                    </div>
                    <div class="input-field col m4">
                        <select name="marital" id="" required>
                            <option value="" disabled selected>Marital Status</option>
                            <option value="Married">Married</option>
                            <option value="Unmarried">Unmarried</option>
                            <option value="Devorced">Devorced</option>
                            <option value="Seperated">Seperated</option>
                        </select>
                    </div>

                    <div class="input-field col m2">
                        <input type="text" id="llno" name="llno" required />
                        <label for="llno">L L No</label>
                    </div>
                    <div class="input-field col m2">
                        <input type="text" id="place" name="place_of_issue" required />
                        <label for="place">Place Of Issue</label>
                    </div>
                    <div class="input-field col m2">
                        <input type="text" id="age" name="age" required />
                        <label for="age">Age</label>
                    </div>
                    <div class="input-field col m2">
                        <select name="sex" id="" required>
                            <option value="" disabled selected>Select Sex</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="input-field col m2">
                        <input type="text" id="height" name="height" required />
                        <label for="height">Height</label>
                    </div>
                    <div class="input-field col m2">
                        <input type="text" id="weight" name="weight" required />
                        <label for="weight">Weight</label>
                    </div>
                </div>
                <input type="submit" name="submit" value="ADD TO PENDING" class="btn cyan" />
                <input type="submit" name="submit" value="CREATE REPORT" class="btn cyan" />
            </form>
        </div>
    </div>
@endsection