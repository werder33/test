<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>{{$site['metas']['title']}}</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @section('style')
        <link rel="stylesheet" href="{{asset('media/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('media/css/prettyPhoto.css')}}"/>
        <link rel="stylesheet" href="{{asset('media/css/fonts.css')}}"/>
        <link rel="stylesheet" href="{{asset('media/css/font-awesome.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('media/css/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('media/css/main.css')}}"/>
        <link rel="stylesheet" href="{{asset('media/css/media.css')}}"/>
    @show
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('templates.header')


@yield('content')
@include('templates.footer')
<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
[endif]-->
@section('scrips')
<script src="{{asset('media/js/jquery.js')}}"></script>
<script src="{{asset('media/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('media/js/bootstrap.min.js')}}"></script>
<script src="{{asset('media/js/main.js')}}"></script>

@show
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>