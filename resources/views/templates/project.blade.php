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
            <li><a class="btn btn-default" href="#" data-filter=".bootstrap">1 этаж</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".html">2 этажа</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".wordpress">дача</a></li>
        </ul><!--/#portfolio-filter-->

        <ul class="portfolio-items col-3">
            <li class="portfolio-item apps">
                <div class="item-inner">
                    <img src="media/images/popular/dom.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="media/images/popular/dom.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="media/images/popular/dom2.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="media/images/popular/dom2.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
            </li><!--/.portfolio-item-->
            <li class="portfolio-item bootstrap wordpress">
                <div class="item-inner">
                    <img src="media/images/popular/dom3.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="media/images/popular/dom3.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla wordpress apps">
                <div class="item-inner">
                    <img src="media/images/popular/dom4.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="media/images/popular/dom4.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="media/images/popular/dom5.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="media/images/popular/dom5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
            </li><!--/.portfolio-item-->
            <li class="portfolio-item wordpress html">
                <div class="item-inner">
                    <img src="media/images/popular/3d.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="media/images/popular/3d.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                    </div>
                </div>
            </li><!--/.portfolio-item-->
        </ul>
    </section><!--/#portfolio-->

@endsection