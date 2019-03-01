@extends('layouts.app')
@section('content')
    <div class="container all-reports">
        <ul class="collection with-header">
            <li class="collection-header"><h4>All Agencies</h4></li>
            @if (count($agencies) > 0)
                @foreach ($agencies as $agency)
                    <li class="collection-item">
                        <a href="/viewagency/{{ $agency->id }}">
                            <div class="row">
                                <div class="col sm3">
                                    {{ $agency->name }} 
                                </div>
                                <div class="col sm3">
                                    which is created at
                                </div>
                                <div class="col sm3">
                                    {{ $agency->created_at }}
                                </div>
                                <div class="right">
                                    <i class="material-icons">play_arrow</i>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            @else
                
            @endif
        </ul>
    </div>
@endsection