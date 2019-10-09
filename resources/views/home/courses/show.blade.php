@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '课程介绍' : $seos[0]->title)

@section('meta')
    <meta name="keywords" content="{{ $seos->isEmpty() ? '' : $seos[0]->keywords }}"/>
    <meta name="description" content="{{ $seos->isEmpty() ? '' : $seos[0]->description }}"/>
@endsection

@section('content')
    <div class="ny-banner">
        <img src="{{ '/uploads/'.$banner[0]->img }}">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="../images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="../images/jt.png">
            <a href="{{ route('courses') }}">课程介绍</a>
            <img src="../images/jt.png">
            <span>{{ $course->name }}</span>
        </div>
    </div>

    <div class="college">
        <div class="wrapper clearfix">
            @include('home.layouts._nav2', ['course_id'=>$course->id])
            <div class="college-con">
                <div class="course2">
                    <div class="wrapper">
                        {!! $course->body !!}
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
                        <img src="/images/icon19.jpg">
                        <h3>上海交通大学</h3>
                    </li>
                    <li>
                        <img src="/images/icon20.jpg">
                        <h3>中国人民大学</h3>
                    </li>
                    <li>
                        <img src="/images/icon18.png">
                        <h3>北京中医药大学</h3>
                    </li>
                    <li>
                        <img src="/images/icon21.jpg">
                        <h3>北京外国语大学</h3>
                    </li>
                </ul>
            </div>
        </div>
        <a href="{{ route('signs', ['id'=>$course->id]) }}" class="ljbm"><img src="../images/ljbm.png"></a>
    </div>
@endsection

