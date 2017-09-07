@extends('layouts.app')

@section('content')
<div class="container">
<h2><i class="material-icons" style="vertical-align: middle; margin-bottom: .2em;">view_agenda</i> {{$event->title}} - Timeslots</h2>

@if(count($event->timeslots) > 0)
<table class="table table-striped">
    <tr>
        <th></th>
        <th>Day</th>
        <th>Start</th>
        <th>End</th>
        <th></th>
    </tr>
    
        @foreach($event->timeslots as $timeslot)
        <tr>
            <th>{{$timeslot->name }} </th>
            <td>{{date( "l", strtotime( $timeslot->date ) )}} </td>
            <td>{{date( "g:ia", strtotime( $timeslot->start ) )}} </td>
            <td>{{date( "g:ia", strtotime( $timeslot->end ) )}} </td>
            <td>
             @if(!Auth::guest())
                @if(Auth::user()->admin)             
                    {!!Form::open(['action' => ['TimeslotsController@destroy', $timeslot->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
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
            <h4>Add a Timeslot</h4>

            {!! Form::open(['action' => 'TimeslotsController@store' , 'class' => 'form-inline', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                {{Form::Label('body', 'Body', ['class' => 'sr-only', 'for' => 'name'])}}
                {{Form::text('name', '', ['placeholder' => 'Name', 'class' => 'form-control'])}}
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    {{Form::Label('day', 'Day', ['for' => 'day', 'class' => 'input-group-addon'])}}
                    {{Form::select('day', $dayArray, null, [  'placeholder' => 'Pick a day...' , 'class' => 'form-control'])}}
                </div>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    {{Form::time('start',  $defaults->start, ['class' => 'form-control'])}} 
                    <div class="input-group-addon">to</div>
                    {{Form::time('end',  $defaults->end,  ['class' => 'form-control'])}}
                </div>
                {{Form::hidden('event_id',$event->id)}}
                {{Form::submit('Add', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}



        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12 col-12">
            <span><a href="/calendar/manage/{{$event->id}}" class="btn btn-default btn-sm pull-left">
                <i class="material-icons" style="vertical-align: middle;">date_range</i> Manage Calendar
                </a>
            </span>
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
    </div>


</div>
@endsection