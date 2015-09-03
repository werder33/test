@extends('welcome')
@section('scrips')
    @parent
    <link rel="stylesheet" href="media/css/gallery.css" />
@stop
@section('content')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>{{$projects->title}}</h2>
                    <p>{{$projects->opisanie}}</p>
                </div>
                <div class="col-sm-6">
                    <div class="imgpage">
                        <img src="media/images/hand.jpg"  class="img-circle" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="project">
                        <div class="leftbox">
                            <div id="MainImage" class="centeredContent" style="margin: 0; margin-bottom: 10px;"><img src="media/images/project/{{$projects->img}}" border="0" width="400" height="350" id="base_image" /><br />
                                <div id="NextImage">
                                    @foreach($pages as $page)
                                        <div class="NextImage  centeredContent back"><img src="{{$page->images}}" border="0" width="88px" height="88px" onclick="changeimg(this.src)" /></div>
                                     @endforeach
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="opisanie">
                        <h4>Основные характеристики</h4>
                        <table>
                            <tr>
                                <td>Общая площадь</td>
                                <td>{{$projects->size}}м<sup>2</sup></td>

                            </tr>
                            <tr>
                                <td>Кровля</td>
                                <td>{{$projects->roofing}}</td>
                            </tr>
                            <tr>
                                <td>Покрытие</td>
                                <td>{{$projects->cover}}</td>
                            </tr>
                            <tr>
                                <td>Фундамент</td>
                                <td>{{$projects->fundament}}</td>
                            </tr>
                            <tr>
                                <td>наружные стены</td>
                                <td>{{$projects->wall}}</td>
                            </tr>
                            <tr>
                                <td>Перекрытия</td>
                                <td>{{$projects->overlap}}</td>
                            </tr>
                            <tr>
                                <td>цоколь</td>
                                <td>{{$projects->socle}}</td>
                            </tr>
                            <tr>
                                <td>Количество комнат</td>
                                <td>{{$projects->room}}</td>
                            </tr>
                            <tr>
                                <td>Наружная отделка</td>
                                <td>{{$projects->finishing}}</td>
                            </tr>
                            <tr>
                                <td>Подвал</td>
                                <td>{{$projects->footer}}</td>
                            </tr>
                            <tr>
                                <td>Гараж</td>
                                <td>{{$projects->garage}}</td>
                            </tr>
                            <tr>
                                <td>Сауна\баня</td>
                                <td>{{$projects->sauna}}</td>
                            </tr>
                            <tr>
                                <td>Количество этажей</td>
                                <td>{{$projects->level}}</td>
                            </tr>
                            <tr>
                                <td>Мансардный этаж</td>
                                <td>{{$projects->mansard}}</td>
                            </tr>
                        </table>
                        <button class="btn btn-danger zakaz">заказать</button>
                    </div>
                </div>

            </div>
        </div>

    </section>


@stop





