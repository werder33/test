@extends('welcome')
@section('content')
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Registration</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="registration" class="container">
        <form method = "POST" action ="/auth/register" class="center" role="form">
            {!! csrf_field() !!}
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="username" name="name" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="E-mail" class="form-control" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    <input type="password" id="password_confirm" name="password_confirmation" placeholder="Password (Confirm)" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-md btn-block">Register</button>
                </div>
            </fieldset>
        </form>
    </section>
@endsection
