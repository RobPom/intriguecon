@extends('layouts.app')

@section('content')
<div class="container">
<h2>{{$event->title}} - Hours of Operation</h2>
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
            <h4>Add a Day to the Calendar</h4>
            @if(count($event->days) > 0 )
               
            @else
                <?php

                ?>

            @endif
            {!! Form::open(['action' => 'DaysController@store' , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <label>Date: </label>{{Form::date('date', $defaults->date)}}
                <label> Starting: </label>{{Form::time('start',  $defaults->start)}} <label> Until: </label>
                {{Form::time('end',  $defaults->start)}}
                {{Form::hidden('event_id',$event->id)}}
                {{Form::submit('Add', ['class' => 'btn btn-primary btn-sm'])}}
            {!! Form::close() !!}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12 col-12">
            <span><a href="/events/{{$event->id}}" class="btn btn-default btn-sm pull-left">
                <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
                </a>
            </span>
        </div>
    </div>
</div>
   
@endsection