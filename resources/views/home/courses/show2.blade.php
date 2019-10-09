@extends('home.layouts.app')

@section('title', ' - 课程详情')

@section('content')
    <div class="page-index">1</div>
    <div class="ny-banner">
        <img src="">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="../images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="../images/jt.png">
            <a href="{{ route('courses') }}">课程介绍</a>
            <img src="../images/jt.png">
            <span>丝路国学讲堂</span>
        </div>
    </div>
    <div class="college">
        <div class="wrapper clearfix">
            @include('home.layouts._nav2')
            <div class="college-con">
                <div class="course2">
                    <div class="wrapper">
                        <img src="/images/new/pic1.jpg">
                        <img src="/images/new/pic2.jpg">
                        <img src="/images/new/pic3.jpg">
                        <img src="/images/new/pic4.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="course-con06">
            <div class="wrapper">
                <h2>四所顶尖高校校友资源</h2>
                <hr>
                <ul class="clearfix">
                    <li>
                        <img src="../images/icon19.jpg">
                        <h3>上海交通大学</h3>
                    </li>
                    <li>
                        <img src="../images/icon20.jpg">
                        <h3>中国人民大学</h3>
                    </li>
                    <li>
                        <img src="../images/icon18.png">
                        <h3>北京中医药大学</h3>
                    </li>
                    <li>
                        <img src="../images/icon21.jpg">
                        <h3>北京外国语大学</h3>
                    </li>
                </ul>
            </div>
        </div>
        <a href="{{ route('signs') }}" class="ljbm"><img src="../images/ljbm.png"></a>
    </div>

@endsection

