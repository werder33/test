@extends('welcome')
@section('content')
    <section>
        <div class="container">
            <div class="row">
    <h1>Кабинет</h1>
                @if ( count($errors)>0)
                    <div class="alert alert-danger">
                        <stong>Error!</stong>Найдены ошибки</br>
                        <ul>
                            @foreach($errors -> all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                         </ul>

                        </div>
                @endif

    <form action="{{asset ('cabinet')}}" method="POST" class="form-gorizontal" enctype = "multipart/form-data">
        {!! csrf_field() !!}
        <div>
            <input type ="file" name= "photo">
        </div>
        <div class="form-group">
            <label class="col-sm-2" for = "telefon"> телефон</label>
            <input class = "col-sm-10" type="text" id ="telefon" name="telefon" value = "{{$cabinet -> telefon}}">
        </div>
        <div class="form-group">
            <label class="col-sm-2" for = "address"> адрес</label>
            <input class = "col-sm-10" type="text" id ="address" name="address" value = "{{$cabinet -> address}}">
        </div>
        <div class="form-group">
            <label class="col-sm-2" for = "osebe"> О себе </label>
            <input class = "col-sm-10" type="text" id ="osebe" name="osebe" value = "{{$cabinet -> osebe}}">
        </div>
        <div class="form-group">
            <label class="col-sm-2" for = "update"> Дата рождения </label>
            <input class = "col-sm-10" type="date" id ="update" name="putdate" value = "{{$cabinet -> putdate}}">
        </div>

        <input type ="submit" class = "btn btn-danger col-sm-offset-2 col-sm-10 " value="Отправить">

    </form>
                 </div>
                </div>
    </section>
@endsection
