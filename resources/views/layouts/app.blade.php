<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <h1 class="text-center text-uppercase mb-2">Sitema de clientes</h1>
    <div class="container">
        @include('partials.alert')
        @include('partials.nav')
        @yield('content')
    </div>
</body>

</html>
