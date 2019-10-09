@extends('home.layouts.app')

@section('title', ' - 课程详情')

@section('content')
    <div class="page-index">5</div>
    <div class="ny-banner">
        <img src="">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="../images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="../images/jt.png">
            <a href="{{ route('courses') }}">行知丝路研究院</a>
            <img src="../images/jt.png">
            <span>系列公益课程</span>
        </div>
    </div>
    <div class="college">
        <div class="wrapper clearfix">
            @include('home.layouts._nav2')
            <div class="college-con">
                <div class="course6">
                    <div class="wrapper">
                        <div class="sy-tit">
                            <h2>系列公益课程</h2>
                            <img src="/images/titbg.png">
                        </div>
                        <ul class="clearfix">
                            <li>
                                <h3>系列一：女性</h3>
                                <div class="con">
                                    <p>
                                        1.	<br>
                                        关爱女性 健康美丽<br>
                                        四季养生与女性健康<br>
                                        食疗羹方-女性篇<br>
                                        女性健康 远离癌症<br>
                                        二十四节气之女性养生<br>
                                        《黄帝内经》与现代养生之法<br>
                                        2.	<br>
                                        美育-心灵美与行为美<br>
                                        智慧女性的美学素养<br>
                                        中华雅集鉴赏<br>
                                        形体雕塑<br>
                                        中国艺术与西方艺术
                                    </p>
                                    {{--<a href="">更多 ></a>--}}
                                </div>
                            </li>
                            <li>
                                <h3>系列二：亲子</h3>
                                <div class="con">
                                    <p>
                                        1.<br>
                                        智慧父母<br>
                                        沟通对孩子的重要性<br>
                                        如何给孩子他们需要的爱<br>
                                        如何给孩子安全感和归属感<br>
                                        如何赢得孩子的尊重和信任<br>
                                        如何培养出自律、有责任感、善于解决问题的孩子<br>
                                        人工智能时代 下的创新教育
                                    </p>
                                    {{--<a href="">更多 ></a>--}}
                                </div>
                            </li>
                            <li>
                                <h3>系列三：公益</h3>
                                <div class="con">
                                    <p>
                                        1.	<br>
                                        公益新力量<br>
                                        用“微力量”改变生活<br>
                                        西方公益慈善发展新趋势<br>
                                        社会企业的模式<br>
                                        从西方式环保到中国式<br>
                                        公益
                                    </p>
                                    {{--<a href="">更多 ></a>--}}
                                </div>
                            </li>
                            <li>
                                <h3>系列四：区块链</h3>
                                <div class="con">
                                    <p>
                                        1.
                                        拒绝成为区块链泡沫，实战<br>
                                        给你答案<br>
                                        区块链是什么<br>
                                        从底层揭秘区块链应用<br>
                                        比特币中的机制设计<br>
                                        区块链带来的商业机会

                                    </p>
                                    {{--<a href="">更多 ></a>--}}
                                </div>
                            </li>
                            <li>
                                <h3>系列五：科技</h3>
                                <div class="con">
                                    <p>
                                        1.	<br>
                                        人工智能<br>
                                        什么是人工智能<br>
                                        AI时代下的商业逻辑<br>
                                        机器学习：观点与挑战<br>
                                        AI时代下的创业创新之路<br>
                                        2.	<br>
                                        前沿科技与创新<br>
                                        VR与虚拟世界商业化路径思考<br>
                                        硅谷科技与中国应用结合的创新<br>
                                        小米生态链的创新之路<br>
                                        艺术与科技创新

                                    </p>
                                    {{--<a href="">更多 ></a>--}}
                                </div>
                            </li>
                            <li>
                                <h3>系列六：丝路</h3>
                                <div class="con">
                                    <p>
                                        1.
                                        走近“丝绸之路”<br>
                                        “丝绸之路”的人文变迁<br>
                                        “丝绸之路”国企与民企的总体规划和政策解读<br>
                                        “丝绸之路”的金融挑战和机遇<br>
                                        民企在“丝绸之路”倡议下的投资机会
                                    </p>
                                    {{--<a href="">更多 ></a>--}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course-con06">
        <div class="wrapper">
            <h2>四所顶尖高校校友资源</h2>
            <hr>
            <ul class="clearfix">
                <li>
                    <img src="../images/icon19.jpg">
                    <h3>上海交通大学</h3>
                </li>
                <li>
                    <img src="../images/icon20.jpg">
                    <h3>中国人民大学</h3>
                </li>
                <li>
                    <img src="../images/icon18.png">
                    <h3>北京中医药大学</h3>
                </li>
                <li>
                    <img src="../images/icon21.jpg">
                    <h3>北京外国语大学</h3>
                </li>
            </ul>
        </div>
    </div>
    <a href="{{ route('signs') }}" class="ljbm"><img src="../images/ljbm.png"></a>
@endsection

