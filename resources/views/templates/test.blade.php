@extends('welcome')
@section('content')
  @foreach($news as $new)
    <h2>{{$new -> title }}</h2>
   @endforeach
   {!! $news->render()!!}

@stop

