@extends('layouts.app')

@section('content')
    <h1>Edit Game</h1>
    {!! Form::open(['action' => ['GamesController@update', $game->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::Label('name', 'Name')}}
            {{Form::text('name', $game->name, ['class' => 'form-control', 'placeholder' => 'Enter the name of the game'])}}
        </div>
        <div class="form-group">
            {{Form::Label('tagline', 'Tagline')}}
            {{Form::text('tagline', $game->tagline, ['class' => 'form-control', 'placeholder' => 'Enter a tagline for the game'])}}
        </div>
        <div class="row form-group">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                {{Form::Label('gamemaster', 'Game Master')}}
                {{Form::text('gamemaster', $game->gamemaster, ['class' => 'form-control', 'placeholder' => 'The Anonymous Stranger'])}}
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                {{Form::Label('system', 'System')}}
                {{Form::text('system', $game->system, ['class' => 'form-control', 'placeholder' => 'Advanced Faking It'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::Label('short_description', 'Short Description')}}
            {{Form::textarea('short_description', $game->short_description, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'A short description of the game'])}}
        </div>
        <div class="form-group">
            {{Form::Label('description', 'Description')}}
            {{Form::textarea('description', $game->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'A longer description of the game'])}}
        </div>
        <div class="row form-group">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                {{Form::Label('advisory', 'Advisory')}}
                {{Form::text('advisory', $game->advisory, ['class' => 'form-control', 'placeholder' => 'Enter any advisories here'])}}
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-xs-6">
                        {{Form::Label('min', 'Min Seats')}}
                        {{Form::number('min', $game->min, ['class' => 'form-control', 'min' => '1' ,'max' => '10'])}}
                    </div>
                    <div class="col-xs-6">
                         {{Form::Label('max', 'Max Seats')}}
                        {{Form::number('max', $game->max, ['class' => 'form-control', 'min' => '1' ,'max' => '10'])}}
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
                    <input value="{{$game->game_image}}" type="text" class="form-control" readonly>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-12">
                <span><a href="/games" class="btn btn-default btn-sm pull-left">
                    <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
                    </a></span>
                    {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
            </div>
        </div>
    {!! Form::close() !!}
    </div>
@endsection
