@extends('layouts.app')

@section('content')
<h1>Review Game Submission</h1>
<div class="row">
    <div class="col-sm-12 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading"><h4>Game Submission</h4></div>
            <div class="panel-body">
                {!! Form::open(['action' => 'GameProposalsController@insert' , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::Label('title', 'Title')}}
                        {{Form::text('title', $proposal->title, ['class' => 'form-control', 'placeholder' => 'Enter the name of the game'])}}
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            {{Form::Label('tagline', 'Tagline')}}
                            {{Form::text('tagline', $proposal->tagline, ['class' => 'form-control', 'placeholder' => 'Enter a tagline for the game'])}} 
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            {{Form::Label('system', 'System')}}
                            {{Form::text('system', $proposal->system, ['class' => 'form-control', 'placeholder' => 'Advanced Faking It'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::Label('short_description', 'Short Description')}}
                        {{Form::textarea('short_description', $proposal->short_description, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'A short description of the game'])}}
                    </div>
                    <div class="form-group">
                        {{Form::Label('description', 'Description')}}
                        {{Form::textarea('description', $proposal->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'A longer description of the game'])}}
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            {{Form::Label('advisory', 'Advisory')}}
                            {{Form::text('advisory', $proposal->advisory, ['class' => 'form-control', 'placeholder' => 'Enter any advisories here'])}}
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    {{Form::Label('min', 'Min Seats')}}
                                    {{Form::number('min', $proposal->min, ['class' => 'form-control', 'min' => '1' ,'max' => '10'])}}
                                </div>
                                <div class="col-xs-6">
                                    {{Form::Label('max', 'Max Seats')}}
                                    {{Form::number('max', $proposal->max, ['class' => 'form-control', 'min' => '1' ,'max' => '10'])}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            {{Form::Label('name', 'Your Name')}}
                            {{Form::text('name', $proposal->name, ['class' => 'form-control', 'placeholder' => ''])}} 
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            {{Form::Label('email', 'Your Email')}}
                            {{Form::email('email', $proposal->email, ['class' => 'form-control', 'placeholder' => 'someone@somewhere.com'])}}
                        </div>
                    </div>
                </div>
            <div class="panel-footer">
                <div class="form-group row">
                        <div class="col-sm-12 col-12">
                            {{Form::hidden('id', $proposal->id)}}
                            {{Form::submit('Save to Games List', ['class' => 'btn btn-primary pull-right'])}}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection