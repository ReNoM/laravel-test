<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/">Стена</a>
            @guest
            <a class="nav-link" href="/reg">Зарегистрироваться</a>
            <a class="nav-link" href="/login">Войти</a>
            @endguest
            @auth
            <span class="nav-link ml-auto">{{ '@'.Auth::user()->name }}</span>
            <a class="nav-link" href="/logout">Выйти</a>
            @endauth
        </nav>
    </div>
</div>
