@extends('layouts.app')

@section('content') 
<div class="col-xs-12 col-md-10 col-lg-8">
    <div class="panel panel-default">
        <div class="panel-heading">

            @if(!Auth::guest())
                @if(Auth::user()->admin)
                    <h4>{{$location->name}}
                        <div class="pull-right">
                                <a href="/locations/{{$location->id}}/edit" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                                        <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
                                </a>
                                {!!Form::open(['action' => ['LocationsController@destroy', $location->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-sm'])}}
                                {!!Form::close()!!}
                        </div>
                    </h4>
                @else         
                    <h4>{{$location->name}}</h4>
                @endif
            @else
                <h4>{{$location->name}}</h4>
            @endif

        </div>
        <div class="panel-body">
            <div class="row">            
                <div class="col-sm-5 col-xs-12">
                    <div class="" style="width: 260px; height: 260px;">
                        {!! Mapper::render() !!}
                    </div>
                </div>
                <div class="col-sm-5 col-xs-12">
                    <h5>{{$location->street_1}} {{$location->street_2}} </h5>
                    <div>{{$location->city}} {{$location->province}}</div>
                    <div>{{$location->country}} {{$location->postal}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(!Auth::guest())
    @if(Auth::user()->admin)   
        <div class="col-sm-5 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="/locations/" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                        <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
                        See All Locations
                    </a>
                </div>
            </div>            
        </div>
    @endif
@endif
@endsection