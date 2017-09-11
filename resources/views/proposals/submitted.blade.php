@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>{{$game->title}} Submitted</h4>
    </div> 
    <div class="panel-body">
        <p>Your submission will be read and one of us will contact you at the provided email</p>
        <p><strong>{{$game->email}}</strong><p>
        <a href="/volunteer" class="btn btn-default">Submit Another!</a><br><br>
        <a href="/" class="btn btn-default">Back to Front Page</a>
    </div>
</div>


@endsection