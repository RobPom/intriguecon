@extends('layouts.app')

@section('content')
<h1>{{$event->title}} Schedule</h1>
<div class="row">
    @foreach($event->days as $day)
        <div class="col-sm-7 col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-schedule">
                <h4><strong>{{date( "l F jS", strtotime( $day->date ) )}}</strong></h4>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach($event->timeslots as $timeslot)
                        @if($timeslot->date === $day->date)
                            @if($timeslot->gameslot)
                                <a href="/schedule/{{$event->id}}/timeslot/{{$timeslot->id}}" class="list-group-item ">
                                    <strong style="display: inline-block;">{{$timeslot->name}} - </strong>
                                    {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}
                                    <span class="badge ">{{count($timeslot->games)}}</span>
                                </a>
                            @else
                                 <a href="#" class="list-group-item disabled">
                                    <strong style="display: inline-block;">{{$timeslot->name}} - </strong>
                                    {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}  
                                </a>
                            @endif   
                        @endif                        
                    @endforeach 
                </div>
            </div>
        </div>
        </div>
    @endforeach
</div>

@endsection