@extends('layouts.app')

@section('content')
    <h1>Edit Location</h1>
    
    {!! Form::open(['action' => ['LocationsController@update', $location->id ], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::Label('name', 'Name')}}
            {{Form::text('name', $location->name, ['class' => 'form-control', 'placeholder' => 'Enter the name of the venue'])}}
        </div>
        <div class="form-group">
            {{Form::Label('street_1', 'Address')}}
            {{Form::text('street_1', $location->street_1, ['class' => 'form-control', 'placeholder' => 'street address'])}}
            {{Form::text('street_2', $location->street_2, ['class' => 'form-control', 'placeholder' => 'suite, unit number, etc'])}}
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    {{Form::Label('city', 'City')}}
                    {{Form::text('city', $location->city, ['class' => 'form-control'])}}
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    {{Form::Label('province', 'Province')}}
                    {{Form::text('province', $location->province, ['class' => 'form-control', 'placeholder' => 'Enter the name of the venue'])}}
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    {{Form::Label('country', 'Country')}}
                    {{Form::text('country', $location->country, ['class' => 'form-control'])}}
                </div>
            </div>
             <div class="col-xs-6">
                <div class="form-group">
                    {{Form::Label('postal', 'Postal Code')}}
                    {{Form::text('postal', $location->postal, ['class' => 'form-control', 'placeholder' => 'Z0Z1A1'])}}
                </div>
            </div>
        </div>
        

        <div class="form-group row">
            <div class="col-sm-12 col-12">
                {{Form::hidden("_method" , "PUT")}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
            </div>
        </div>
    {!! Form::close() !!}

@endsection