@extends('layouts.app')

@section('content') 
<h1>{{$game->name}} Attendance</h1>


 @if(count($game->timeslots()->where('event_id', $event->id)->get()) > 0)

    <div class="row">
        @foreach($game->timeslots as $timeslot)

            <?php $gametimeslot = App\GameTimeslot::where('timeslot_id', $timeslot->id)
                ->where('game_id', $game->id)
                ->first();
            ?>
           
                <div class="col-sm-12 col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-schedule">
                            <h4><strong>{{$timeslot->name}}</strong>
                            <small class="pull-right" style='color:white;'>{{count($gametimeslot->attendees)}} attendees</small></h4>
                        </div>
                        <div class="panel-body">
                            @if(count($gametimeslot->attendees) > 0)
                                <div class="list-group">
                                    @foreach($gametimeslot->attendees as $attendee)
                                        <a href='/attendees/{{$attendee->id}}' class="list-group-item ">{{$attendee->name}}</a>
                                    @endforeach
                                </div>
                            @else
                                <strong><em>No one scheduled</em></strong>
                            @endif
                        </div>
                    </div>
                </div>
           
        @endforeach
    </div>

@endif







@endsection
