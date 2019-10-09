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
<div class="page-indexs">3</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>行知丝路研究院介绍</span>
            </div>
            <h3>办学特色</h3>
            <p>
                行知丝路研究院将构建“1 + U（大学）+ G（研究所）+ C（公司）”多元融合的合作教育平台，即以1所校本部为基础，集聚国内外知名高校优势学科教学资源，共享权威科研机构最新突破性研究成果，强化成功企业实战经营的实践教学功能，以不断创新的进取精神建设新时代国际化、专业性、研究型的“国家战略”学院。
            </p>
        </div>
    </div>
</div>






@endsection

