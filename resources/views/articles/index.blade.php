@extends('layouts.app')

@section('content')


    <h1>
        <span>Articles</span>
        @if (!Auth::guest())
            @if(Auth::user()->admin)
            <a href="/articles/create" class="btn btn-default btn-sm" style="margin-bottom:6px;">
                <i class="material-icons" style="vertical-align: middle;">add</i>
            </a>
            @endif
        @endif
    </h1>
    <h4><small>{{count(App\Article::all())}} articles in library</small></h4>

    @if(count($articles) > 1)
        {{ $articles->links() }}
        @foreach($articles as $article)
            <div class="well">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-3 hidden-xs">
                        <img style="max-width:100%; max-height:140px;"src="/storage/article_images/{{$article->article_image}}">
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                        <h3><a href='/articles/{{$article->id}}'>{{$article->title}}</a></h3>
                        <small > by {{$article->user->name}}</small>
                    </div>
                </div> 
            </div>
        @endforeach

        {{ $articles->links() }}

    @else
        <p>No Articles Found</p>
    @endif


@endsection