@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>

    {!! Form::open(['action' => ['EventsController@update', $event->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::Label('title', 'Name')}}
            {{Form::text('title', $event->title, ['class' => 'form-control', 'placeholder' => 'Enter the name of the event'])}}
        </div>
        <div class="form-group">
            {{Form::Label('description', 'Description')}}
            {{Form::textarea('description', $event->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group row">
            <div class="col-lg-6 col-sm-6 col-12">
            {{Form::Label('event_image', 'Add an Image')}}
                <div class="input-group">
                    <label class="input-group-btn">
                        <span class="btn btn-primary">
                            Browse&hellip; <input type="file" style="display: none;" id="event_image" name="event_image">
                        </span>
                    </label>
                    <input type="text" value="{{$event->event_image}}" class="form-control" readonly>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 col-12">
                <span><a href="/events/{{$event->id}}" class="btn btn-default btn-sm pull-left">
                    <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
                    </a></span>
                {{Form::hidden("_method" , "PUT")}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
            </div>
        </div>
    {!! Form::close() !!}
    </div>
@endsection