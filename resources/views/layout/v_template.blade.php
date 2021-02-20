<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <title>@yield('title')</title>
</head>

<body>

    @include('layout.v_nav')

    @yield('content')

    <footer class="page-footer font-small bg-dark">
        <div class="container-fluid text-center text-white">
            Zeph University
        </div>
    </footer>

    <script src="{{asset('js/bootstrap.js')}}"></script>
</body>

</html>