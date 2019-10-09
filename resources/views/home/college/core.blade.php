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

<div class="page-index">3</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor college-advantage">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>学院核心优势</span>
            </div>
            <h3>学院核心优势</h3>
            <p>
                权威法律法规和政策辅导：拥有国家部委核心骨干力量，包括发改委，商务部，外交部等正司级权威专家领导可对国家发展战略和政策法规进行解读。<br>
                国内外顶级学术泰斗梳理专业知识：汇集国际顶级学术泰斗，构建企业人才急需的实战型知识体系，推动企业家携手共迎商机、共同发展、互利互惠、互联互通。<br>
                杰出企业家分享经验：注重采取理论与实践最佳结合的教学培训模式，充分运用我们拥有的国内最上层的央企领导人和各领域最有成果的民营企业家资源，以典型成功案例为牵引，开展“实战化”商业培训。<br>
                弘扬中华文明：包括国学、中医、文化、艺术、历史等特色课程，进一步增强民心相通，向世界讲中国故事、传播中国发展理念。<br>
                提升跨界思维：通过艺术、哲学、历史、体育、公益等内容培养企业家的跨界思维，提升企业家的创造力与创新思维力，培养新时代有社会责任感、有情怀的企业家。<br>
                海外顶尖名校游学：目前已与哈佛，耶鲁，牛津，剑桥等名校达成合作协议并成功举办过多次游学活动。<br>
                顶尖高校校友资源：中国人民大学、上海交通大学、复旦大学、北京中医药大学、北京外国语大学等。<br>
                国际化服务团队：硕士比例占到50%以上且大多来自英美名校，我们将全力以赴为学员做好服务保障工作，包括国际合作，投融资辅导，业务咨询等全方位的资源对接服务
            </p>

        </div>
    </div>
</div>






@endsection

