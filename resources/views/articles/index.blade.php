@extends('layouts.app')

@section('content')
    <h1>
        <span>Articles</span>
        <a href="/articles/create" class="btn btn-default btn-sm" style="margin-bottom:6px;">
            <i class="material-icons" style="vertical-align: middle;">add</i>
        </a>
    </h1>
    <h4><small>{{count(App\Article::all())}} articles in library</small></h4>

    @if(count($articles) > 1)
        {{ $articles->links() }}
        @foreach($articles as $article)
            <div class="well">
                <h3><a href='/articles/{{$article->id}}'>{{$article->title}}</a></h3>
                <small>Created {{$article->created_at}} by {{$article->user->name}}</small>
            </div>
        @endforeach

        {{ $articles->links() }}

    @else
        <p>No Articles Found</p>
    @endif


@endsection