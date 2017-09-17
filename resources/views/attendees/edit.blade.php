@extends('layouts.app')

@section('content')

<h1>Attendees</h1>
<hr>
<div class="container">
    <h3>Edit {{$attendee->name}}</h3>
    {!! Form::open(['action' => ['AttendeesController@update' , $attendee->id ], 'method' => 'POST', 'class' => 'inline-form']) !!}
        <div class="form-row">
            <div class="col-xs-5">
                {{Form::text('name', $attendee->name, ['class' => 'form-control', 'placeholder' => 'Attendee\'s Name'])}}
            </div>
            <div class="col-xs-5">
                {{Form::text('email', $attendee->email, ['class' => 'form-control', 'placeholder' => 'Attendee\'s email'])}}
            </div>
            <div class="col-xs-2">
                {{Form::submit('Change', ['class' => 'btn btn-primary '])}}           
            </div>
    {{Form::hidden("_method" , "PUT")}}
    {!! Form::close() !!}
    </div>
</div>
@endsection