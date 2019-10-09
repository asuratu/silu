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
<div class="page-indexs">0</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor college-advantage">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>陶行知国际教育基金</span>
            </div>
            <h3>背景</h3>
            <p>
                在经济全球化的背景下，充分利用国内与国际教育资源，优化配合本国人力资源，培养具有国际视野的国际型人才是世界各国政府教 育战略的重要目标。我国《国家中长期教育改革和发展规划纲要（2010-2020 年）》中明确指出要“坚持以开放促改革、促发展，开展多层次、宽领域的教育交流与合作，提高我国教育国际化水平”，适应国家经济社会对外开放的要求，培养大批具有国际视野、通晓国际规则、能够参与国际事务和国际竞争的国际化人才。
                <br><br>
                我国高等教育走上国际化道路，无论是从政治因素、经济因素，还是社会文化因素，都具备了充足的动力条件与有利的时代背景。以《关于做好新时期教育对外开放工作的若干意见》出台为标志，我国教育对外开放开始进入历史发展新时期。2016 年 7 月出台的《推进共建“一带一路”教育行动》,将更深入的参与全球化、推动全球化，实现国内产业转型升级。培养国际化人才是我国参与全球化发展的需要，国际人才应该具备国际视野，既有家国情怀又能放眼全球，立足本国国情，在当下时代环境中，应该以开放的姿态、全球化的思维进行国际教育交流与合作，推动不同国家、民族以及群体间的沟通和理解，为人类谋求更长远的和平发展。国际化是世界教育发展的时代潮流，教育国际化已超越教育政策层面而上升为国家发展战略。加快教育国际化进程，对于我国政治、经济、文化等诸多方面的发展都具有基础性的推动作用与重要的战略意义。
            </p>

        </div>
    </div>
</div>






@endsection

