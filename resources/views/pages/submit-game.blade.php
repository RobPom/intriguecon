@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2>Gamemasters</h2>
            <p>We are always on the lookout for people who love bringing their stories to players. If you are interested in becoming a game master, 
            be sure to first register, then fill out the form below. We will contact you after reviewing the submission</p>
        </div>
    </div>
    <br><br>
    <div class="row">
    <div class="col-sm-12 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading"><h4>Game Submission</h4></div>
            <div class="panel-body">
                {!! Form::open(['action' => 'GameProposalsController@store' , 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::Label('title', 'Title')}}
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter the name of the game'])}}
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            {{Form::Label('tagline', 'Tagline')}}
                            {{Form::text('tagline', '', ['class' => 'form-control', 'placeholder' => 'Enter a tagline for the game'])}} 
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
                    <div class="row form-group">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            {{Form::Label('name', 'Your Name')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => ''])}} 
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            {{Form::Label('email', 'Your Email')}}
                            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'someone@somewhere.com'])}}
                        </div>
                    </div>
                </div>
            <div class="panel-footer">
                <div class="form-group row">
                        <div class="col-sm-12 col-12">
                            
                            {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
@endsection