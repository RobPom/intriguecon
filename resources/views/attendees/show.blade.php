@extends('layouts.app')

@section('content')
<h1>Attendee</h1>
<h2>{{$attendee->name}}
<small>{{$attendee->email}}</small></small>

@endsection