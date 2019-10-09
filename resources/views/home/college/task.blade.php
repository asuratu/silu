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
<div class="page-indexs">6</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor college-advantage">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>陶行知国际教育基金</span>
            </div>
            <h3>任务目标</h3>
            <p>
                1、2019 年上半年，指导并协助“行知丝路研究院”形成完善的办学模式、培养模式、评价模式、服务模式和质量保证体系；<br>
                2、2019 年下半年，指导并协助“行知丝路研究院”建成完善的品牌传播机制及国际联盟，以加强国际合作与交流、增强国际影响力。
            </p>

        </div>
    </div>
</div>






@endsection

