@extends('layouts.app')

@section('content')

<h1>Attendees</h1>
<hr>
<div class="container">
    <h3>Add</h3>
    {!! Form::open(['action' => 'AttendeesController@store' , 'method' => 'POST', 'class' => 'inline-form']) !!}
        <div class="form-row">
            <div class="col-xs-5">
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Attendee\'s Name'])}}
            </div>
            <div class="col-xs-5">
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Attendee\'s email'])}}
            </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary '])}}           
            </div>
    {!! Form::close() !!}
    </div>
<hr>

<div class="container">
    <h3>Current</h3>
    @if(count($attendees) > 0)
        <p>{{count($attendees)}} attendees in total</p>            
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($attendees as $attendee)
                <tr>
                    <td><a href='/attendees/{{$attendee->id}}'>{{$attendee->name}}</a></td>
                    <td>{{$attendee->email}}</td>
                    <td>
                        <a href="/attendees/{{$attendee->id}}/edit" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                            <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
                        </a>
                        {!!Form::open(['action' => ['AttendeesController@destroy', $attendee->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-sm'])}}
                        {!!Form::close()!!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $attendees->links() }}
    @else
        <p><em>No attendees added</em></p>
    @endif
</div>
<hr>
@endsection