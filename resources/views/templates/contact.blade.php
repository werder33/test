@extends('welcome')
@section('content')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Контакты</h2>

                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Главная</a></li>
                        <li class="active">Контакты</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>Наши контакты</h4>
                <div class="contact">
                    Адрес: Украина г.Запорожье проспект Ленина 33</br>
                    Телефон: +380505030230</br>
                    email: Email@gmail.com
                </div>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
                <h4>Мы на карте</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.258049492981!2d35.147243200000005!3d47.834594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc60b1f1336fc3%3A0xa18ecee7abf7bdea!2z0L_RgNC-0YHQvy4g0JvQtdC90ZbQvdCwLCDQl9Cw0L_QvtGA0ZbQttC20Y8sINCX0LDQv9C-0YDRltC30YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1439974238355" width="100%" height="215" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
    </section>
@endsection