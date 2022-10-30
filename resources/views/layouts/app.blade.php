<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('plugins/materialize/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap.css')}}">
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('css')

</head>
<body>
@yield('content')

<script src="{{asset('plugins/materialize/materialize.min.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>
<script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('js/js.js')}}"></script>
@if(session()->has('message'))
<script>
    M.toast({
        html: '{{session('message')}}',
        classes: '{{session('classes')}}'
    });
</script>
@endif
@stack('js')
</body>
</html>
