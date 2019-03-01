@extends('layouts.app')
@section('content')
    <div class="container all-reports">
        <h4>Search By</h4>
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <div class="row">
                    <div class="col m2">
                        <div class="input-field">
                            <select name="user_name" >
                                <option value="" selected>Select User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="input-field">
                            <input id="date-from" type="text" class="datepicker" name="date_from" />
                            <label for="date-from">Date From</label>
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="input-field">
                            <input id="date-to" type="text" class="datepicker" name="date_to">
                            <label for="date-to">Date To</label>
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="input-field">
                            <select name="agency">
                                <option value="" selected>Choose Agency</option>
                                @foreach ($agencies as $agency)
                                    <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="input-field">
                            <input type="text" id="client-name" class="form-control" name="client_name" />
                            <label for="client-name">Client</label>
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="input-field">
                            <select name="report_type">
                                <option value="" disabled selected>Report Type</option>
                                @foreach ($reportTypes as $reportType)
                                    <option value="{{ $reportType->id }}">{{ $reportType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <span class="input-group-btn search-btn">
                    <button type="submit" class="btn btn-default">
                        <i class="material-icons"> search </i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="collection with-header">
            <li class="collection-header"><h4>All Reports of Type - {{ $type }} ({{count($reports)}} Results)</h4></li>
            @if (count($reports) > 0)
                @foreach ($reports as $report)
                <li class="collection-item">
                    <a href="/viewreport/{{$report->id}}">
                        <div class="row">
                            <div class="col sm3">
                                Type - "{{ $type }}" report
                            </div>
                            <div class="col sm3">
                                which is created at
                            </div>
                            <div class="col sm3">
                                {{ $report->created_at }}
                            </div>
                            <div class="right">
                                <i class="material-icons">play_arrow</i>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            @else
            <p>No Reports Yet</p>
            @endif
        </ul>
    </div>
@endsection


