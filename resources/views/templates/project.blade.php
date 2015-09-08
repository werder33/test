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
         <button class="btn btn-danger" id="showFilter">Отобразить \ скрыть фильтр</button>
        <div id="filter">
           <form class ='form-inline filtr-form' method="POST" action="{{asset('project/index')}}">
            {!! csrf_field() !!}
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <label>Площадь м<sup>2</sup>:</label></br>
                           <label>от <input  type="text" name="size1"></label></br>
                           <label>до <input  type="text" name="size2"></label></br>

                    </div>
                    <div class="col-sm-4">
           <label>Количество этажей:</label><select class="form-control filtr" name="level">
                   <option>1</option>
                   <option>2</option>
                   <option>3</option>
               </select>
            <label>Количество комнат:</label> <select class="form-control filtr" name="room">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                    </div>
                    <div class="col-sm-4">
            <label>Гараж:</label><select class="form-control filtr" name="garage">
                <option> </option>
                <option>есть</option>
                <option>нет</option>

             </select>
            <label>Сауна\баня:</label><select class="form-control filtr" name="sauna">
                    <option> </option>
                    <option>есть</option>
                    <option>нет</option>

                </select>

            <input class="btn btn-danger" type ="submit" name="search" value="Применить фильтр" />
                    </div>
                </div>
            </div>
        </form>
     </div>


        <ul class="portfolio-items col-3">
@foreach($projects as $project)
                <li class="portfolio-item  1level ">
                    <div class="item-inner">
                        <img src="media/images/project/{{$project->img}}" alt="">
                        <h5>{{$project->title}}</h5>
                        <div class="overlay">
                            <a class="preview btn btn-danger" href="media/images/project/{{$project->img}}" rel="prettyPhoto" title="{{$project->title}}">Увеличить</a>
                            <a class="preview btn btn-danger" href="/page?id={{$project->id}}">подробнее</a>
                        </div>
                    </div>
                </li><!--/.portfolio-item-->
@endforeach
    </ul>
    </section>
@stop