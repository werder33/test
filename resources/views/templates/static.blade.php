@extends('welcome')
@section('content')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>{{$text->title}}</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href='{{asset('index')}}'>Главная</a></li>
                        <li class="active">{{$text->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->
    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>{{$text->title}}</h4>
                <div class="contact">
                    {!! $text->body!!}

                </div>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
                {!!$text->smallbody!!}
                  </div>

        </div>
    </section>


@endsection