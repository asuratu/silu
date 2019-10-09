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
<div class="page-indexs">0</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor college-advantage">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>行知丝路研究院介绍</span>
            </div>
            <h3>学院简介</h3>
            <p>
                行知丝路研究院是为贯彻国家“一带一路”国际化人才培养战略，由陶行知国际教育基金主席李小琳女士发起倡议成立并兼任校长，与上海交通大学、中国人民大学、北京中医药大学、北京外国语大学、《百年巨匠》制片方等战略合作，以精英企业家培训和公益大健康论坛起步，逐步覆盖国际研学旅行交流、国际青年人才培养、企业咨询等领域，并跨界融合商学、国学、国医、美育、艺术、体育等，为尽早实现民心相通贡献一份力量。
                <br><br>
                知行合一，博求真理，聚才育人。行知丝路研究院将以培养国际创业领袖、弘扬中华文明、促进跨文化交流为使命，以“让当下最有成果的人来培养更优秀的人”为愿景，汇聚海内外政商名流、权威学术泰斗等各行业领军人物为师资，培养忠于祖国，勇于担当，走向国际舞台的政、商、文、教、医等领域国际商业精英，推动中华文化的发展与传播，谱写新时代全球化合作的丝路故事。
            </p>

        </div>
    </div>
</div>






@endsection

