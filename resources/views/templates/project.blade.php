@extends('welcome')
@section('scrips')
@parent
    <script src="{{asset('media/js/jquery.isotope.min.js')}}"></script>
 @stop
@section('content')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Проекты</h1>
                    <p>Готовые проекты домов</p>
                </div>

            </div>
        </div>
    </section><!--/#title-->
    <section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">все</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".1level">Одноэтажные дома</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".2level">Двухэтажные дома</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".garage">Дома с гаражом</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".terrace">Дома с террасой</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".mansard">Дома с мансардой</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".wood">Деревянные дома</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".silicate">Дома из газосиликатных блоков</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".block">Дома из пеноблоков</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".carcass">каркасные дома</a></li>
        </ul><!--/#portfolio-filter-->

        <ul class="portfolio-items col-3">
@foreach($projects as $project)
                <li class="portfolio-item  1level ">
                    <div class="item-inner">
                        <img src="{{$project->img}}" alt="">
                        <h5>{{$project->title}}</h5>
                        <div class="overlay">
                            <a class="preview btn btn-danger" href="{{$project->img}}" rel="prettyPhoto" title="{{$project->title}}">Увеличить</a>
                            <a class="preview btn btn-danger" href="/page">подробнее</a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
@endforeach
    </ul>
    </section>
@stop