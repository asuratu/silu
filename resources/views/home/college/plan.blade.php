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

<div class="page-index">1</div>
<div class="page-indexs">5</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor college-advantage">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>陶行知国际教育基金</span>
            </div>
            <h3>专项基金主要工作计划</h3>
            <p>
                1. 专项基金成立之后，提交“行知丝路研究院”整套办学方案。<br>
                2. 举行“行知丝路研究院”授牌仪式，专项基金成立 10 个工作日后完成首批 5 个商学培训项目捐赠；<br>
                3. 2018 年下半年，指导并协助“行知丝路研究院”建立学院理念、学院预研、课程开发、寻求合作等工作，并正式启动高端培训项目进行试点招生；<br>
                4. 2019 年，指导并协助“行知丝路研究院”打造创新型国际研学旅行交流项目、建设国际联盟，并有序推进陶行知国际学校各项准备工作。
            </p>

        </div>
    </div>
</div>







@endsection

