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
    <div class="col-lg-6 col-sm-6 col-12">
    {{Form::Label('article_image', 'Add an Article Image')}}
        <div class="input-group">
            <label class="input-group-btn">
                <span class="btn btn-primary">
                    Browse&hellip; <input type="file" style="display: none;" id="article_image" name="article_image">
                </span>
            </label>
            <input type="text" value="{{$article->article_image}}" class="form-control" readonly>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-12"></div>
</div>

<div class="form-group row">
    <div class="col-sm-12 col-12">
        <br>
        <span><a href="/articles" class="btn btn-default btn-sm pull-left">
            <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
            </a></span>
        {{Form::hidden("_method" , "PUT")}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
    </div>
</div>
    {!! Form::close() !!}

@endsection


