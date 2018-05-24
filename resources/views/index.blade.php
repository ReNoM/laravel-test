@extends('layouts.app_with_title_and_stats', ['title' => 'Стена', 'description' => 'Место, где каждый может высказаться'])

@section('content')
<div class="col-sm-8 blog-main">
    @auth
    <form class="mb-5" action="/" method="post">
        {{ csrf_field() }}
        <h3>Написать на стене</h3>
        <div class="form-group">
            <label for="title">Заголовок сообщения</label>
            <input type="text" class="form-control" id="title" name="title" required pattern=".*\S+.*" maxlength="191">
        </div>
        <div class="form-group">
            <label for="text">Текст сообщения</label>
            <textarea id="text" name="text" class="form-control" rows="5" required oninvalid="this.setCustomValidity('Сообщение не может быть пустым')" oninput="this.setCustomValidity('')"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Написать</button>
    </form>
    
    <script type="text/javascript">
        var text = document.getElementById("text");
        function validateText() {
          if(text.value.trim().length === 0) {
            text.setCustomValidity("Пароли не совпадают.");
          } else {
            text.setCustomValidity('');
          }
        }
        text.onchange = validateText;
        text.onkeyup = validateText;
    </script>
    @endauth
    
    @foreach ($messages as $message)
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $message->title }}</h2>
        <p class="blog-post-meta">Опубликован {{ \Carbon\Carbon::parse($message->created_at)->format('d.m.Y')}}. Автор: {{ $message->user->name }}</p>

        <p>{{ $message->text }}</p>
    </div>
    @endforeach
</div>
@endsection
