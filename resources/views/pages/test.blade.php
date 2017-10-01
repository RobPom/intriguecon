@extends('layouts.app')

@section('content')


  
<h1>test area</h1>

{{count($files)}} files in directory</br></br>

@foreach($files as $file)

<?php $url = str_replace('public/', 'storage/', $file) ?>
<img src="{{$url}}" class='thumbnail' style='max-height: 150px'>
{{$file}}<br>
{!!str_replace('public/', 'storage/', $file)!!}


@endforeach


@endsection