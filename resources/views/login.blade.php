@extends('layouts.app', ['title' => 'Авторизация', 'description' => 'С возвращением в большое сообщество имени великой стены'])

@section('content')
<div class="col-sm-8 blog-main">
    @if ($errors->count() !== 0)
        <p class="alert alert-danger">Вход в систему с указанными данными невозможен.</p>
    @endif
    <form action="/login" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required pattern=".*\S+.*" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" required pattern=".*\S+.*">
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <input type="checkbox" name="remember" class="form-check-input">
            Запомнить меня
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
@endsection
