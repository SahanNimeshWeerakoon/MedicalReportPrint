@extends('layouts.app')
@section('content')
    <div class="container dashboard" style="margin-top: 10px;">
        <div class="row">
            <div class="col s12 tabs-title">
                <ul class="tabs">
                    <li class="tab col s3">
                        <a href="#customer">CUSTOMER</a>
                    </li>
                    <li class="tab col s3">
                        <a href="#agency">AGENCY</a>
                    </li>
                </ul>
            </div>
            <div id="agency" class="tab-contents grey lighten-3">
                <a href="/addagency" class="green accent-3 white-text">Add Agency</a>
                <a href="/allagencies" class="pink accent-2 white-text">View Agency</a>
            </div>
            <div id="customer" class="tab-contents grey lighten-3">
                <form action="/addpersonal" method="POST">
                    @csrf
                    <label>
                        <input id="d" type="radio" name="type" value="d" required>
                        <span>D</span>
                    </label>
                    <label>
                        <input id="e" type="radio" name="type" value="e">
                        <span>E</span>
                    </label>
                    <label>
                        <input id="f" type="radio" name="type" value="f">
                        <span>F</span>
                    </label>
                    <label>
                        <input id="g" type="radio" name="type" value="g">
                        <span>G</span>
                    </label>
                    <label>
                        <input id="h" type="radio" name="type" value="h">
                        <span>H</span>
                    </label>
                    <label>
                        <input type="radio" name="type" value="i">
                        <span>I</span>
                    </label>
                    <label>
                        <input type="radio" name="type" value="j">
                        <span>J</span>
                    </label>
                    <input type="submit" class="green accent-3 white-text" value="Add Report" />
                </form>
                <form action="/allreports" method="POST">
                    @csrf
                    <label>
                        <input id="d" type="radio" name="type" value="d"  required>
                        <span>D</span>
                    </label>
                    <label>
                        <input id="e" type="radio" name="type" value="e">
                        <span>E</span>
                    </label>
                    <label>
                        <input id="f" type="radio" name="type" value="f">
                        <span>F</span>
                    </label>
                    <label>
                        <input id="g" type="radio" name="type" value="g">
                        <span>G</span>
                    </label>
                    <label>
                        <input id="h" type="radio" name="type" value="h">
                        <span>H</span>
                    </label>
                    <label>
                        <input type="radio" name="type" value="i">
                        <span>I</span>
                    </label>
                    <label>
                        <input type="radio" name="type" value="j">
                        <span>J</span>
                    </label>
                    <label>
                        <input type="radio" name="type" value="all">
                        <span>All</span>
                    </label>
                    <input type="submit" class="pink accent-3 white-text" value="View Report" />
                </form>
                <br>
                <a href="/pendingreports" class="btn red accent-1">PENDING REPORTS</a>
            </div>
        </div>
    </div>
@endsection