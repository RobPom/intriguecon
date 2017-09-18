@extends('layouts.app')

@section('content')
<h1>Attendee</h1>
<h2>{{$attendee->name}}
<small>{{$attendee->email}}</small></h2>
<hr>
<h3>Schedule</h3>

<table class="table table-striped">
   
@foreach($event->timeslots as $timeslot)
    <?php $game = null; ?>
    <tr>
        <td class='text-center'>
            <strong style="display: inline-block;">{{$timeslot->name}}</strong><br>
            {{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}
        </td>
        @if(count($attendee->game_timeslots))
            @foreach($attendee->game_timeslots as $gametimeslot)
                @if($gametimeslot->timeslot_id === $timeslot->id )
                    <?php $game = App\Game::find($gametimeslot->game_id);?>
                @endif
            @endforeach     
        @endif
        @if($game)
            <td>
                {!! Form::open(['action' => ['AttendeeScheduleController@update', $attendee->id], 'method' => 'POST']) !!}
                    {{Form::select('game_id', $timeslot->games()->pluck('name', 'game_id'), $game->id, ['placeholder' => 'No Game Selected' , 'class' => 'form-control'])}}
                    {{Form::hidden('timeslot_id',$timeslot->id)}}
                    {{Form::hidden('current_game',$game->id)}}
                    {{Form::hidden('_method', 'PUT')}}
            </td>
            <td>
                    {{Form::button("<i class='material-icons' style='vertical-align: middle;'>refresh</i>", ['type' => 'submit',  'class' => 'btn btn-info btn-sm'])}}
                {!! Form::close() !!}
            </td>
            <td>
                <?php $gamesession = App\GameTimeslot::where('timeslot_id', $timeslot->id)
                    ->where('game_id', $game->id)
                    ->first();
                ?>

                {!!Form::open(['action' => ['AttendeeScheduleController@remove', $attendee->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                    {{Form::hidden('timeslot_id',$timeslot->id)}}
                    {{Form::hidden('game_id',$game->id)}}
                    {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit',  'class' => 'btn btn-danger btn-sm'])}}
                {!!Form::close()!!}
            </td>
        @else
             {!! Form::open(['action' => 'AttendeeScheduleController@store' , 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                <td>{{Form::select('game_id', $timeslot->games()->pluck('name', 'game_id'), null, [  'placeholder' => 'No Game Selected' , 'class' => 'form-control'])}}</td>
                {{Form::hidden('attendee_id',$attendee->id)}}	
                {{Form::hidden('timeslot_id',$timeslot->id)}}	
                <td colspan="2">{{Form::button("<i class='material-icons' style='vertical-align: middle;'>add</i>", ['type' => 'submit',  'class' => 'btn btn-primary btn-sm'])}}</td>
            {!! Form::close() !!}
        @endif 
    </tr>
    
@endforeach 
<tr>
<td colspan="5">
<br>
        <a href="/attendees" class='btn btn-primary'><i class='material-icons' style='vertical-align: middle;'>list</i></a>
    
    </td></tr>
</table>


@endsection