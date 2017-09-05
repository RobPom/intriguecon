@extends('layouts.app')

@section('content')
    <h1>
        <span>Games</span>
        @if (!Auth::guest())
            @if(Auth::user()->admin)
            <a href="/games/create" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                <i class="material-icons" style="vertical-align: middle;">add</i>
            </a>
            @endif
        @endif
    </h1>
    <p>All of this years games in one spot. {{count(App\Game::all())}} games in total</p4>

    @if(count($games) > 0)
        {{ $games->links() }}
        @foreach($games as $game)
            <div class="well">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 text-center hidden-xs">
                        <img style="max-width:100%; max-height:140px;" src="/storage/game_images/{{$game->game_image}}">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <h3><a href="/games/{{$game->id}}">{{$game->name}}</a></h3>
                        <p>{{$game->short_description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
         {{ $games->links() }}    
    @else
        <p>No games found</p>
    @endif

@endsection