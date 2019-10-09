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

<div class="page-index">2</div>
<div class="page-indexs">1</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor college-advantage">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>行知丝路研究院介绍</span>
            </div>
            <h3>战略目标</h3>
            <p>
                · 对内培养千名国际创业领袖<br>
                · 对外培养万名国际经营管理与技能人才<br>
                · 弘扬中华文明<br>
                · 努力打造为国家战略发展作出突出贡献的创新型实战派院校
            </p>

        </div>
    </div>
</div>






@endsection

