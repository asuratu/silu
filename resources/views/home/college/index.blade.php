@extends('home.layouts.app')

@section('title', ' - 行知丝路研究院')

@section('content')
    <div class="ny-banner">
        <img src="/images/new/banner1.jpg">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="/images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="/images/jt.png">
            <span>行知丝路研究院</span>
        </div>
    </div>

    <div class="page-index">0</div>
    <div class="college">
        <div class="wrapper clearfix">
            @include('home.layouts._nav')
            <div class="college-con">
                <img src="/images/new/pic11.jpg">
            </div>
        </div>
    </div>






@endsection

