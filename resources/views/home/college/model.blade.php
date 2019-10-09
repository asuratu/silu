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
<div class="page-indexs">2</div>
<div class="college">
    <div class="wrapper clearfix">
        @include('home.layouts._nav')
        <div class="college-con college-sponsor">
            <div class="img college-banner">
                <img src="/images/new/pic13.jpg">
                <span>陶行知国际教育基金</span>
            </div>
            <h3>国内外素质教育及研学旅行模块 </h3>
            <p>
                1).国内国际研学旅行：指导并协助行知丝路研究院打造国际研学旅行交流项目，通过政府、学校、专家及专业机构的共同努力，发掘多种研学资源，打造前端、先进的研学旅行。开发国内及国际教育研学旅行资源，包括商学、教师、青少年、亲子研学项目，提升研学旅行全过程的教育性、实践性、贯通性。
                <br>2).开设综合实践基地：以科技创新、特色体验、素质拓展、专题教育四大模块活动内容为载体，通过学员的创新实践、生存体验、团队砺练、主题感悟等方式，延伸实践素质教育，进一步增强和提高学员创新精神和实践能力。
                <br>国际教育咨询管理模块：
                <br>1).教育综合体与国际教育资产管理及咨询：与院校合作平台合作，协作运营管理输出，师资及教学内容输出，人才输出。
                <br>行知丝路研究院教育品牌专项活动模块：
                <br>1).国际联盟：指导并协助发起“一带一路”商学联盟，创建一个国际化的学习和校友交流平台，推进商业创新，实现企业的持续发展。帮助企业家形成全球的思考、全球的眼光、全球的格局。
                <br>2).国际学术交流论坛：结合陶行知教育基金的公益性，在女性健康知普及、国医佛学文化传播、中华文化交流等领域举办各类交流沙龙于论坛，发挥基金在传播与教育领域在巨大作用，回馈社会。
                3).专项行知丝路研究院奖学金：设立专项行知丝路研究院奖学金，吸引更多“一带一路”沿线国家的高层次、优秀人才学习、交流；积极发挥高等学校和科研院所的学科专业优势，极大地调动和发挥学员学习的积极性、主动性和创造性，培养符合国家 “一带一路”要求的建设者和接班人。
            </p>
        </div>
    </div>
</div>






@endsection

