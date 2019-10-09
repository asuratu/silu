@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '课程介绍' : $seos[0]->title )

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
            <a href="../index.html">首页</a>
            <img src="../images/jt.png">
            <span>课程介绍</span>
        </div>
    </div>

    <div class="sy-content03 course">
        <div class="wrapper">
            <div class="sy-tit">
                <h2>特色课程</h2>
                <img src="../images/titbg.png">
            </div>
            <ul>
                @foreach($courses as $item)
                <li class="clearfix {{ $item->status == 0 ? 'jsz' : '' }}">
                    <div class="pic"><a href="{{ route('courses.show', [$item->id]) }}"><img src="{{ '/uploads/'.$item->img }}"></a></div>
                    <div class="wenz">
                        <hr>
                        <h3><a href="{{ route('courses.show', [$item->id]) }}">{{ $item->name }}</a></h3>
                        <p>
                            {{ $item->intro }}
                        </p>
                        <a href="{{ route('courses.show', [$item->id]) }}">了解更多 》</a>
                        <a href="{{ route('signs', ['id'=>$item->id]) }}">
                            立即报名
                            <img src="../images/icon04.png" class="show">
                            <img src="../images/icon05.png" class="hide">
                        </a>
                    </div>
                </li>
                    @endforeach
            </ul>
    {{--<ul>--}}
                {{--@foreach($courses_cates as $courses_cate)--}}
                {{--<li class="clearfix">--}}
                    {{--<div class="pic"><a href=""><img src="{{ '/'.$courses_cate->img }}"></a></div>--}}
                    {{--<div class="wenz">--}}
                        {{--<hr>--}}
                        {{--<h3><a href="">{{ $courses_cate->name }}</a></h3>--}}
                        {{--<p>--}}
                            {{--{!! str_replace(PHP_EOL, '<br>', $courses_cate->introduction) !!}--}}
                        {{--</p>--}}
                        {{--<a href="">了解更多 》</a>--}}
                        {{--<a href="">--}}
                            {{--立即报名--}}
                            {{--<img src="../images/icon04.png" class="show">--}}
                            {{--<img src="../images/icon05.png" class="hide">--}}
                        {{--</a>--}}

                        {{--<dl>--}}
                            {{--@foreach($courses as $course)--}}
                                {{--@if($course->cate_id == $courses_cate->id)--}}
                                    {{--<dd>--}}
                                        {{--<a href="{{ route('courses.show', [$course->id]) }}">{{ $course->name }}</a>--}}
                                        {{--<a href="{{ route('signs', ['id'=>$course->id]) }}">--}}
                                            {{--立即报名--}}
                                            {{--<img src="../images/icon04.png" class="show">--}}
                                            {{--<img src="../images/icon05.png" class="hide">--}}
                                        {{--</a>--}}
                                    {{--</dd>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--</dl>--}}

                    {{--</div>--}}
                {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        </div>
    </div>
    <div class="course-con01">
        <div class="wrapper">
            <div class="sy-tit fff">
                <h2>课程理念</h2>
                <img src="../images/titbg.png">
            </div>
            <h3>国际化 +“一带一路”实战 + 跨界思维培养</h3>
            <p>提供全面系统的理论和实战指导。每个模块的教学都将立足全球化经营，并深入结合“走出去”企业的实战案例分析。</p>
            <img src="../images/nyimg01.png">
        </div>
    </div>

    {{--<div class="course-con02" style="display:none;">--}}
        {{--<div class="wrapper">--}}
            {{--<div class="sy-tit">--}}
                {{--<h2>核心优势</h2>--}}
                {{--<img src="../images/titbg.png">--}}
            {{--</div>--}}
            {{--<ul>--}}
                {{--@foreach($advantages as $advantage)--}}
                    {{--<li class="fontp">--}}
                        {{--<img src="{{ '/'.$advantage->img }}">--}}
                        {{--<h3>{{ $advantage->title }}</h3>--}}
                        {{--<p>--}}
                            {{--{!! $advantage->body !!}--}}
                        {{--</p>--}}
                    {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
            {{--<div class="swiper-container phone">--}}
                {{--<ul class="swiper-wrapper">--}}
                    {{--@foreach($advantages as $advantage)--}}
                    {{--<li class="swiper-slide fontp">--}}
                        {{--<img src="{{ '/'.$advantage->img }}">--}}
                        {{--<h3>{{ $advantage->title }}</h3>--}}
                        {{--<p>--}}
                            {{--{!! $advantage->body !!}--}}
                        {{--</p>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
                {{--<div class="swiper-pagination pagination1"></div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
@endsection

@section('scripts')
    <script>
        $(function () {
            var swiper = new Swiper('.course-con02 .swiper-container', {
                pagination: '.course-con02 .swiper-pagination',
                slidesPerView: 3,
                speed:500,
                //centeredSlides : true,
                paginationClickable: true,
                spaceBetween: 20,
                resistanceRatio:0,
                observer:true,
                observeParents:true,
                breakpoints: {
                    767: {
                        slidesPerView: 1.5,
                        spaceBetween: 10
                    }
                }
            });
        })
    </script>
@endsection
