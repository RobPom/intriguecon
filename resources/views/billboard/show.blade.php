@extends('billboard.layout')

@section('content')
<h1>
<a href='/billboard'><i class="material-icons" style='font-size: 36px;'>schedule</i></a> 
<span>{{$timeslot->name}}</span>
<small>{{date( "g:ia", strtotime( $timeslot->start ) )}} to {{date( "g:ia", strtotime( $timeslot->end ) )}}</small>
</h1>
<div class="section">
    <div class="row">
    @foreach($timeslot->games as $game)
        <div class="col s12 m6 l3">
            <div class="card small waves-effect waves-light modal-trigger" href="#modal{{$game->id}}">
                <div class="card-image">
                    <img class="center-cropped" src="/storage/game_images/{{$game->game_image}}">
                    <span class="card-title absolute-center">{!!$game->name !!}</span>
                </div>
                <div class="card-content">
                    <p>
                    {!!$game->short_description !!}
                    </p>
                </div>
                <?php $gametimeslot = App\GameTimeslot::where('timeslot_id', $timeslot->id)
                    ->where('game_id', $game->id)
                    ->first();
                ?>
                <div class="card-action right-align">
                    <?php 
                        $remaining = $game->max - count($gametimeslot->attendees);
                        switch ($remaining) {
                            case 0:
                                $msg = "No open seats";
                                break;
                            case 1:
                                $msg = "Only 1 seat left!";
                                break;
                            default:
                                $msg = $remaining.' seats remaining';
                                break;
                        }
                    ?>
                    <strong>{{$msg}}</strong>
                </div>
            </div>
        </div>  
    @endforeach
    </div>
</div>

@foreach($timeslot->games as $game)

<!-- Modal Structure -->
    <div id="modal{{$game->id}}" class="modal">
        <div class="modal-action modal-close waves-effect waves-blue">
            <div class="modal-content">
                <div class='row'>
                    <div class="col s4">
                        <img class="responsive-img" src="/storage/game_images/{{$game->game_image}}">        
                    </div>
                    <div class="col s8">
                        <h3>{!!$game->name!!}</h3>
                        <blockquote>{!!$game->tagline!!}</blockquote>
                        <p>{!!$game->description!!}</p>
                        <div class='row'>
                            <div class='col s6'>
                                <strong>Gamemaster: {!!$game->gamemaster!!}</strong>
                            </div>
                            <div class='col s6 right'>
                                <strong>{!!$msg!!}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>  
                
               {{--   <div class='row'>
                    <div class='col s5' style='
                            background-image: url("/storage/game_images/{{$game->game_image}}");
                            height: 550px; 
                            /* Center and scale the image nicely */
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;
                    '>    
                    </div>

                    <div class='col s7'>
                        <h4>{!! $game->name !!}</h4>
                        <blockquote>{!! $game->tagline !!}</blockquote>
                        <p class="flow-text">{!! $game->description !!}</p>
                        <div class='col s12'>
                            <div class="col s6">
                                <br>
                                <h5>Game Master: {!! $game->gamemaster !!}</h5>
                            </div>
                            <div class="col s6">
                                <br>
                                <h5 class='right'><small>{{$msg}}</small></h5>
                            </div>
                        </div>
                    </div>

                </div>--}}
            
            




@endforeach

@endsection