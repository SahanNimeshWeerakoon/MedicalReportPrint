@extends('layouts.app')
@section('content')
    
    <form action="/addreport" style="width: 50%; margin: auto; height: 100vh; text-align: center" method="POST">
        @csrf
        <div class="input-field col m4">
            <input type="hidden" name="pending_id" value="{{ $pendingReport->id }}" readonly/>
        </div>
        <input type="submit" value="PROCEED TO ENTER REPORT" class="btn" style="margin-top: 20%; transform: scale(2)"  />
        <a href="/" style="margin-top: 15%; display: block; width: 50%; margin-left: 25%;" class="btn red">GO HOME</a>
    </form>
@endsection