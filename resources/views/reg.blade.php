@extends('layouts.app_with_title_and_stats', ['title' => 'Регистрация', 'description' => 'Присоединяйтесь к большому сообществу'])

@section('content')
<div class="col-sm-8 blog-main">
    <form id="registrationForm" action="reg" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required pattern=".*\S+.*" maxlength="191" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="name">Имя пользователя</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Имя пользователя" required pattern=".*\S+.*" maxlength="191" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" required pattern=".*\S+.*" minlength="6">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Повторите пароль</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Повторите пароль" required pattern=".*\S+.*" minlength="6">
        </div>

        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>

<script type="text/javascript">
@foreach ($errors->getBags() as $error)
    @foreach ($error->toArray() as $attribute => $messages)
        document.getElementById({!! json_encode($attribute) !!}).setCustomValidity({!! json_encode(implode(" / ", $messages)) !!})
        document.getElementById({!! json_encode($attribute) !!}).oninput = function () { this.setCustomValidity('') }
    @endforeach
@endforeach
@if ($errors->count() !== 0)
document.getElementById('registrationForm').reportValidity()
@endif
var password = document.getElementById("password")
  , password_confirmation = document.getElementById("password_confirmation");

function validatePassword() {
  if(password.value != password_confirmation.value) {
    password_confirmation.setCustomValidity("Пароли не совпадают.");
  } else {
    password_confirmation.setCustomValidity('');
  }
}

password.onchange = validatePassword;
password_confirmation.onkeyup = validatePassword;
</script>
@endsection
