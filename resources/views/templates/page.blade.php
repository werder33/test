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
                    <h2>{{$projects[0]->title}}</h2>
                    <p>{{$projects[0]->opisanie}}</p>
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
                            <div id="MainImage" class="centeredContent" style="margin: 0; margin-bottom: 10px;"><img src="media/images/project/{{$projects[0]->img}}" border="0" width="400" height="350" id="base_image" /><br />
                                <div id="NextImage">
                                    @foreach($pages as $page)
                                        <div class="NextImage  centeredContent back"><img src="media/images/project/{{$page->images}}" border="0" width="88px" height="88px" onclick="changeimg(this.src)" /></div>
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
                                <td>{{$projects[0]->size}}м<sup>2</sup></td>

                            </tr>
                            <tr>
                                <td>Кровля</td>
                                <td>{{$projects[0]->roofing}}</td>
                            </tr>
                            <tr>
                                <td>Покрытие</td>
                                <td>{{$projects[0]->cover}}</td>
                            </tr>
                            <tr>
                                <td>Фундамент</td>
                                <td>{{$projects[0]->fundament}}</td>
                            </tr>
                            <tr>
                                <td>наружные стены</td>
                                <td>{{$projects[0]->wall}}</td>
                            </tr>
                            <tr>
                                <td>Перекрытия</td>
                                <td>{{$projects[0]->overlap}}</td>
                            </tr>
                            <tr>
                                <td>цоколь</td>
                                <td>{{$projects[0]->socle}}</td>
                            </tr>
                            <tr>
                                <td>Количество комнат</td>
                                <td>{{$projects[0]->room}}</td>
                            </tr>
                            <tr>
                                <td>Наружная отделка</td>
                                <td>{{$projects[0]->finishing}}</td>
                            </tr>
                            <tr>
                                <td>Подвал</td>
                                <td>{{$projects[0]->footer}}</td>
                            </tr>
                            <tr>
                                <td>Гараж</td>
                                <td>{{$projects[0]->garage}}</td>
                            </tr>
                            <tr>
                                <td>Сауна\баня</td>
                                <td>{{$projects[0]->sauna}}</td>
                            </tr>
                            <tr>
                                <td>Количество этажей</td>
                                <td>{{$projects[0]->level}}</td>
                            </tr>
                            <tr>
                                <td>Мансардный этаж</td>
                                <td>{{$projects[0]->mansard}}</td>
                            </tr>
                        </table>
                        <button class="btn btn-danger zakaz">заказать</button>
                    </div>
                </div>
             </div>
        </div>

    </section>


@stop





