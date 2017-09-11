@extends('layouts.app')

@section('content')
    <h1>
        <span>Events</span>
        @if (!Auth::guest())
            @if(Auth::user()->admin)
            <a href="/events/create" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                <i class="material-icons" style="vertical-align: middle;">add</i>
            </a>
            @endif
        @endif
    </h1>
    <p>All IntrigueCons, {{count(App\Event::all())}} in total</p>
    @if(count($events) > 0)
      {{--    {{ $events->links() }}  --}}
      
        @foreach($events as $event)
            <div class="well">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 text-center hidden-xs">
                        <img style="max-width:100%; max-height:100px;" src="/storage/event_images/{{$event->event_image}}">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <h3><a href="/events/{{$event->id}}">{{$event->title}}</a></h3>
                        @if($event->status['active'])
                            This is the active convention
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
       {{--    {{ $events->links() }}     --}} 
    @else
        <p>No events found</p>
    @endif
@endsection