@extends('welcome')
@section('content')
   @foreach($cats as $cat)

       {{$cat->img}}

    @endforeach

@stop

