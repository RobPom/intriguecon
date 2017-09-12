@extends('layouts.app')

@section('content')
<div class="container">
<span><h2><i class="material-icons" style="vertical-align: middle; margin-bottom: .2em;">date_range</i> 
    {{$event->title}} - Hours of Operation</h2>
  
</span>
@if(count($event->days) > 0)
<table class="table table-striped">
    <tr>
        <th></th>
        <th>Date</th>
        <th>Open</th>
        <th>Close</th>
        <th></th>
    </tr>
    
        @foreach($event->days as $day)
        <tr>
            <th>{{date( "l", strtotime( $day->date ) )}} </th>
            <td>{{date( "F jS Y", strtotime( $day->date ) )}} </td>
            <td>{{date( "g:ia", strtotime( $day->start ) )}} </td>
            <td>{{date( "g:ia", strtotime( $day->end ) )}} </td>
            <td>
             @if(!Auth::guest())
                @if(Auth::user()->admin)             
                    {!!Form::open(['action' => ['DaysController@destroy', $day->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-xs'])}}
                    {!!Form::close()!!}   
                @endif
            @endif
            
            </td>
        </tr>
        @endforeach
    
</table>
@endif
<hr>
    <div class="row">
        <div class="col-sm-12 col-12">
            <h4>Add a Day</h4>
            @if(count($event->days) > 0 )
               
            @else
                <?php

                ?>

            @endif
            {!! Form::open(['action' => 'DaysController@store' , 'class' => 'form-inline', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    {{Form::Label('date', 'Day', ['for' => 'date', 'class' => 'input-group-addon'])}}
                    {{Form::date('date', $defaults->date, ['class' => 'form-control'])}}
                </div>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    {{Form::time('start',  $defaults->start, ['class' => 'form-control'])}} 
                    <div class="input-group-addon">to</div>
                    {{Form::time('end',  $defaults->end,  ['class' => 'form-control'])}}
                </div>
                {{Form::hidden('event_id',$event->id)}}
                {{Form::submit('Add', ['class' => 'btn btn-primary btn-sm'])}}
            {!! Form::close() !!}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6 col-12">
            <span><a href="/events/{{$event->id}}" class="btn btn-default btn-sm pull-left">
                <i class="material-icons" style="vertical-align: middle;">subject</i>
                Back to Event
                </a>
            </span>
        </div>
        <div class="col-sm-6 col-12">
            @if(count($event->days) > 0)
            <a href="/timeslots/manage/{{$event->id}}" class="btn btn-default btn-sm pull-right">
                <i class="material-icons" style="vertical-align: middle;">view_agenda</i>
                Manage Timeslots
            </a>
            @endif                  
        </div>
    </div>
</div>
@endsection