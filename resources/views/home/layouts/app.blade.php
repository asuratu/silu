<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @yield('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link type="text/css" href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" />

    <!-- Styles -->
<!--     <link type="text/css" href="{{ asset('css/base.css') }}" rel="stylesheet" />
 -->    <link type="text/css" href="{{ asset('css/page.css') }}" rel="stylesheet" />
<!--     <link type="text/css" href="{{ asset('css/swiper.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('js/layui/css/layui.css') }}" rel="stylesheet" />
 -->    
    
    @yield('styles')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<!--     <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>

 -->    
     <script type="text/javascript" src="{{ asset('js/layer/layer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/layui/layui.js') }}"></script>

    <title>@yield('title', '首页')</title>

</head>

<body>

    @include('home.layouts._header')

    @include('home.layouts._message')

    @yield('content')

    @include('home.layouts._footer')

</body>

    <!-- Scripts -->
    <script src="{{ asset('js/common.js') }}"></script>
    @yield('scripts')

</html>