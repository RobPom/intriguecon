@extends('layouts.app')

@section('content')
    <h1>
        <span>All Locations</span>
        @if (!Auth::guest())
            @if(Auth::user()->admin)
            <a href="/locations/create" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                <i class="material-icons" style="vertical-align: middle;">add</i>
            </a>
            @endif
        @endif
    </h1>

     @if(count($locations) > 0)
        {{ $locations->links() }}
        <div class="list-group">
            @foreach($locations as $location)
                <a href="/locations/{{$location->id}}" class="list-group-item list-group-item-action">{{$location->name}}</a>
            @endforeach
        </div>
         {{ $locations->links() }}    
    @else
        <p>No games found</p>
    @endif


@endsection