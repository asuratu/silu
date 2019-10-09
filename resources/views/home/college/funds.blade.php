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
<div class="page-indexs">4</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor college-advantage">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>陶行知国际教育基金</span>
            </div>
            <h3>资金来源</h3>
            <p>
                企业直接捐赠为主，辅以社会爱心企业及人士公益捐赠。具有社会影响力和经济实力的单位，作为基金初始资金的主要捐赠者。同时利用其媒体的影响力，负责基金的社会宣传。
            </p>

        </div>
    </div>
</div>







@endsection

