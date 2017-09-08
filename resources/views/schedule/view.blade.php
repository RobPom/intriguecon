@extends('layouts.app')

@section('content')
<h1>{{$event->title}} Schedule</h1>
    @foreach($event->days as $day)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{date( "l F jS", strtotime( $day->date ) )}}</h4>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach($event->timeslots as $timeslot)
                        @if($timeslot->date === $day->date)
                            @if($timeslot->gameslot)
                                <a href="/schedule/{{$event->id}}/timeslot/{{$timeslot->id}}" class="list-group-item ">
                                    <h4 style="display: inline-block;">{{$timeslot->name}} - </h4>
                                    {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}
                                    <span class="badge ">{{count($timeslot->games)}}</span>
                                </a>
                            @else
                                 <a href="#" class="list-group-item disabled">
                                    <h4 style="display: inline-block;">{{$timeslot->name}} - </h4>
                                    {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}  
                                </a>
                            @endif
                            
                        @endif                        
                    @endforeach 
                </div>
            </div>
        </div>



        
    @endforeach


@endsection