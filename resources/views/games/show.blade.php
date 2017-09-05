@extends('layouts.app')

@section('content') 
    <div class="container" style="padding-bottom:20px";>
    <h1>{{$game->name}}</h1>
    <h3><small>{!!$game->tagline!!}</small></h3>
    <hr>
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                 <img style="width:100%" src="/storage/game_images/{{$game->game_image}}">
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <div class="short-desc">{!!$game->short_description!!}</div>
                <div class="visible-xs"><hr></div>
                <p>{!!$game->description!!}</p>
            </div>
        </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 pull-left">
            <strong>Advisory:</strong> {!!$game->advisory!!}
        </div>
        <div class="col-sm-6 pull-right text-right">
            <p>Seats #/#</p>
        </div>  
    </div> 
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <span><a href="/games" class="btn btn-default btn-sm pull-left">
                <i class="material-icons" style="vertical-align: middle;">keyboard_arrow_left</i>
                </a></span>
            @if(!Auth::guest())
                @if(Auth::user()->admin)           
                    <div class="pull-right">
                        <a href="/games/{{$game->id}}/edit" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                                <i class="material-icons" style="vertical-align: middle;">mode_edit</i>
                        </a>
                        {!!Form::open(['action' => ['GamesController@destroy', $game->id], 'method' => 'POST', 'style' => 'display:inline;' ])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::button("<i class='material-icons' style='vertical-align: middle;'>delete</i>", ['type' => 'submit', 'style' => 'margin-bottom:6px;', 'class' => 'btn btn-danger btn-sm'])}}
                        {!!Form::close()!!}
                    </div>    
                @endif
            @endif
        </div>
    </div>
</div>
@endsection