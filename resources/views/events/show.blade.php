@extends('layouts.app')

@section('content')
<h1>Event</h1>
<hr>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-3 text-center">
        <img style="max-height:400px; max-width:100%;"src="/storage/event_images/{{$event->event_image}}">
    </div>
    <div class="col-lg-9 col-md-8 col-sm-9">
        <h2>{{$event->title}}</h2>
        <p>{!! $event->description !!}</p>
    </div>
</div>
    
@if(!Auth::guest())
    @if(Auth::user()->admin)
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <div class="pull-right">
                        <a href="/events/{{$event->id}}/edit" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
                        </a>
                        {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-sm'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
        </div>
    @endif
@endif
<hr>
{{--      
    @if($event->calendar === 0)
    @else
    @endif  
--}}
<div class="row">
    <div class="col-sm-6">
        <div class="panel-default panel">
            <div class="panel-body">
                <h4><i class="material-icons" style="padding-bottom:7px;">date_range</i> Calendar
                 @if($event->calendar === 0)
                    @if(!Auth::guest())
                        @if(Auth::user()->admin)
                            <a href="/calendar/create/{{$event->id}}" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">add</i>
                            </a></h4><hr>
                        @else
                            </h4><hr>
                            <p><em>Stay Tuned</em></p>
                        @endif
                    @else
                        </h4><hr>
                        <p><em>Stay Tuned</em></p>
                    @endif
                @endif  
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel-default panel">
            <div class="panel-body">
                <h4><i class="material-icons" style="padding-bottom:5px;">location_on</i> Location
                @if($event->calendar === 0)
                    @if(!Auth::guest())
                        @if(Auth::user()->admin)
                            <a href="/calendar/create/{{$event->id}}" class="btn btn-default btn-xs" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">add</i>
                            </a></h4><hr>
                        @else
                            </h4><hr>
                            <p><em>Stay Tuned</em></p>
                        @endif
                    @else
                        </h4><hr>
                        <p><em>Stay Tuned</em></p>
                    @endif
                @endif  
            </div>
        </div>
    </div> 
</div>
</div>
@endsection