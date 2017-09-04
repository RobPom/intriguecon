@extends('layouts.app')

@section('content')

    <h1>Create Article</h1>

     {!! Form::open(['action' => 'ArticlesController@store' , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::Label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter a title for the article'])}}
        </div>
        <div class="form-group">
            {{Form::Label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('article_image')}}
        </div>
        <span><a href="/articles" class="btn btn-default btn-sm pull-left">
            <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
            </a></span>
        {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
    {!! Form::close() !!}

@endsection