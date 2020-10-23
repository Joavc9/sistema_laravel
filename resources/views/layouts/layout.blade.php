<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatable/datatables.min.css')}}">
</head>
<body>
    <div class="container">
        @include('partials.alert')
        @include('partials.form')
        @include('partials.nav')
        @yield('content')
    </div>
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('js/sweetAlert/sweetAlert.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>