@extends('layouts.app')

@section('content')

    <h1>Edit Article</h1>

     {!! Form::open(['action' => ['ArticlesController@update', $article->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::Label('title', 'Title')}}
            {{Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Enter a title for the article'])}}
        </div>
        <div class="form-group">
            {{Form::Label('body', 'Body')}}
            {{Form::textarea('body', $article->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('article_image')}}
        </div>
         <span><a href="/articles/{{$article->id}}" class="btn btn-default pull-left btn-sm">
            <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
            </a></span>
            {{Form::hidden("_method" , "PUT")}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
    {!! Form::close() !!}

@endsection