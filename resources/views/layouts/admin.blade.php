<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{config('app.name')}}后台管理中心</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}" media="all">
    @yield('css')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
    <script type="application/javascript" src="{{asset('layui/layui.js')}}"></script>
    @yield('js')
</html>