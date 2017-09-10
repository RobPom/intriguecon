@extends('layouts.app')

@section('content')
    <h1>New Game</h1>
    {!! Form::open(['action' => 'GamesController@store' , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::Label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter the name of the game'])}}
        </div>
        <div class="form-group">
            {{Form::Label('tagline', 'Tagline')}}
            {{Form::text('tagline', '', ['class' => 'form-control', 'placeholder' => 'Enter a tagline for the game'])}}
        </div>
        <div class="row form-group">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                {{Form::Label('gamemaster', 'Game Master')}}
                {{Form::text('gamemaster', 'The Anonymous Stranger', ['class' => 'form-control', 'placeholder' => 'The Anonymous Stranger'])}}
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                {{Form::Label('system', 'System')}}
                {{Form::text('system', 'Advanced Faking It', ['class' => 'form-control', 'placeholder' => 'Advanced Faking It'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::Label('short_description', 'Short Description')}}
            {{Form::textarea('short_description', '', ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'A short description of the game'])}}
        </div>
        <div class="form-group">
            {{Form::Label('description', 'Description')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'A longer description of the game'])}}
        </div>
        <div class="row form-group">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                {{Form::Label('advisory', 'Advisory')}}
                {{Form::text('advisory', '', ['class' => 'form-control', 'placeholder' => 'Enter any advisories here'])}}
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-xs-6">
                        {{Form::Label('min', 'Min Seats')}}
                        {{Form::number('min', '2', ['class' => 'form-control', 'min' => '1' ,'max' => '10'])}}
                    </div>
                    <div class="col-xs-6">
                         {{Form::Label('max', 'Max Seats')}}
                        {{Form::number('max', '8', ['class' => 'form-control', 'min' => '1' ,'max' => '10'])}}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-6 col-sm-6 col-12">
            {{Form::Label('game_image', 'Add an Image')}}
                <div class="input-group">
                    <label class="input-group-btn">
                        <span class="btn btn-primary">
                            Browse&hellip; <input type="file" style="display: none;" id="game_image" name="game_image">
                        </span>
                    </label>
                    <input type="text" class="form-control" readonly>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-12">
                <span><a href="/games" class="btn btn-default btn-sm pull-left">
                    <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
                    </a></span>
                {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
            </div>
        </div>
    {!! Form::close() !!}
    </div>
@endsection