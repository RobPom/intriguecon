@extends('layouts.app')

@section('content')
    <h1>{{$article->title}}</h1>
    <h3><small><em>Written by {{$article->user->name}}</em></small></h3>
    <hr>
    <div class="container" style="padding-bottom:20px";>
       

        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                 <img style="width:100%" src="/storage/article_images/{{$article->article_image}}">
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <div class="visible-xs"><hr></div>
                <p>{!!$article->body!!}</p>
            </div>
        </div>

        <hr>
        <small><em>Created {{$article->created_at}}</em></small>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <span><a href="/articles" class="btn btn-default btn-sm pull-left">
                    <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
                </a></span>
                
                @if(!Auth::guest())
                    @if(Auth::user()->id == $article->user_id)
                        <div class="pull-right">
                            <a href="/articles/{{$article->id}}/edit" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                                    <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
                            </a>

                            {!!Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-sm'])}}
                            {!!Form::close()!!}
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection