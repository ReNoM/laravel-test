@extends('layouts.app')

@section('content')
<div class="col-sm-12 blog-main">
    <div class="jumbotron">
        <h1 class="display-3">Вы зарегистрированы</h1>
        <p class="lead">Добро пожаловать в огромное сообщество великой стены</p>
        <hr class="my-4">
        <p>Для продолжения работы вам нужно авторизоваться</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Войти</a>
        </p>
    </div>
</div>
@endsection
