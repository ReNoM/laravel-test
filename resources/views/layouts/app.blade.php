<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>

    @include('layouts.menu')

    @yield('header')

        <div class="container">

            <div class="row mb-5">

                @yield('content')
                <!-- /.blog-main -->

                @yield('sidebar')

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        @section('footer')
        <footer class="blog-footer">
            <p>Тестовое задание на должность PHP разработчика.</p>
            <p>
                <a href="#">Наверх</a>
            </p>
        </footer>
        @show

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
