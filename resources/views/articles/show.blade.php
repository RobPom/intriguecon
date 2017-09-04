@extends('layouts.app')

@section('content')
    <h1>{{$article->title}}</h1>
    <h3><small><em>Written by {{$article->user->name}}</em></small></h3>
    <hr>
    <p>
        {!!$article->body!!}
    </p>
    <hr>
    <small><em>Created {{$article->created_at}}</em></small>
    <hr>
    <span><a href="/articles" class="btn btn-default btn-sm pull-left">
        <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
        </a></span>
    
    <div class="pull-right">
        <a href="/articles/{{$article->id}}/edit" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
        </a>

        {!!Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-sm'])}}
        {!!Form::close()!!}

    </div>
@endsection