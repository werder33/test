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
        <form class ='form-group' method="POST" action="{{asset('project/index')}}">
            {!! csrf_field() !!}
            <input type="text" name="level" placeholder="этажность"/>
            <input type="text" name="wall" placeholder="стены"/>
            <input type="text" name="size" placeholder="площадь"/>
            <input type="text" name="garage" placeholder="гараж"/>
            <input type="text" name="fundament" placeholder="фундамент"/>
            <input type="text" name="room" placeholder="количество комнат"/>
            <input type="submit" name="search" value="поиск" />
        </form>

        <ul class="portfolio-items col-3">
@foreach($projects as $project)
                <li class="portfolio-item  1level ">
                    <div class="item-inner">
                        <img src="media/images/project/{{$project->img}}" alt="">
                        <h5>{{$project->title}}</h5>
                        <div class="overlay">
                            <a class="preview btn btn-danger" href="media/images/project/{{$project->img}}" rel="prettyPhoto" title="{{$project->title}}">Увеличить</a>
                            <a class="preview btn btn-danger" href="/page">подробнее</a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
@endforeach
    </ul>
    </section>
@stop