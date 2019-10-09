@extends('home.layouts.app')

@section('title', '首页')

@section('content')
    <div class="banner">
        <!--pc banner-->
        <div class="swiper-container pc">
            <div class="swiper-wrapper">
                @foreach($banners as $banner)
                <div class="swiper-slide"><img src="{{ '/uploads/'.$banner->img }}"></div>
                @endforeach
            </div>
            <div class="swiper-button-prev prev2"></div>
            <div class="swiper-button-next next2"></div>
            <div class="swiper-pagination pagination1"></div>
        </div>
        <!--phone banner-->
        <div class="swiper-container phone">
            <div class="swiper-wrapper">
                @foreach($banners as $banner)
                    <div class="swiper-slide"><img src="{{ '/uploads/'.$banner->phone_img }}"></div>
                @endforeach
            </div>
            <div class="swiper-button-prev prev2"></div>
            <div class="swiper-button-next next2"></div>
            <div class="swiper-pagination pagination1"></div>
        </div>
    </div>
    <div class="content">
        <div id="item1">
            <div class="sy-content01">
                <div class="sy-nav">
                    <a href="#item1" class="cur">品牌简介</a>
                    <a href="#item2">特色课程</a>
                    <a href="#item3">创始人介绍</a>
                </div>
                <div class="wrapper">
                    <div class="sy-tit">
                        <h2>品牌简介</h2>
                        <img src="images/titbg.png">
                    </div>
                    <div class="fontp">
                        <h5>丝路规划研究中心</h5>
                        由全国政协办公厅作为业务主管单位，于2016年3月成立，由国家开发银行、清华大学、丝路基金、中国开发性金融促进会、中国金融四十人论坛共同发起。
                        <br><br>
                        <h5>行知丝路研究院</h5>
                        由服务“一带一路”建设的国家顶级智库全国政协丝路规划研究中心拟与清华大学、上海交通大学、中国人民大学、北京中医药大学、北京外国语大学、国家战略研究院等单位联合成立。以进一步丰富丝路规划研究中心的职能，拓展合作领域，推动我国与“一带一路”沿线国家文化、经济的交流。
                    </div>
                </div>
            </div>
            <div class="sy-content02">
                <div class="wrapper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/icon01.png">
                                <h3>行为制度层</h3>
                                <p>
                                    服务理念（品牌口号）<br>
                                    以仁助人、以恕交友、报国为魂、国际担当<br>
                                    人才理念<br>
                                    以才为本，用人才培养通才；<br>
                                    用老师培养大师，以时间培养时代。
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/icon02.png">
                                <h3>经营策略层</h3>
                                <p>
                                    发展理念<br>
                                    国家导向、全球覆盖、市场驱动、师生共建<br>
                                    管理理念（学训）<br>
                                    创新、养德、博学、笃志
                                </p>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/icon03.png">
                                <h3>精神价值层</h3>
                                <p>
                                    核心价值观<br>
                                    天人合一，义利合一，知行合一，人企合一<br>
                                    企业精神<br>
                                    行知丝路研究院，至大至刚。<br>
                                    （《孟子》 :“浩然之气,至大至刚。”,指事业极其正大、正气、骨气。）

                                </p>
                            </div>
                        </div>
                        <div class="swiper-pagination phone pagination1"></div>
                    </div>
                    <center><a href="{{ route('abouts') }}" class="more">查看更多 》</a></center>
                </div>
            </div>
        </div>
        <div id="item2" class="sy-content03">
            <div class="wrapper">
                <div class="sy-tit">
                    <h2>特色课程</h2>
                    <img src="images/titbg.png">
                </div>
                <ul>
                    @foreach($courses_cates as $courses_cate)
                    <li class="clearfix">
                        <div class="pic"><img src="{{ '/uploads/'.$courses_cate->img }}"></div>
                        <div class="wenz">
                            <hr>
                            <h3>{{ $courses_cate->name }}</h3>
                            <p>
                                {!! str_replace(PHP_EOL, '<br>', $courses_cate->introduction) !!}
                            </p>
                            <a href="{{ route('courses') }}" class="more">了解更多 》</a>
                            <a href="{{ route('signs') }}">
                                立即报名
                                <img src="images/icon04.png" class="show">
                                <img src="images/icon05.png" class="hide">
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="sy-content04" id="item3">
            <div class="wrapper">
                <div class="sy-tit">
                    <h2>创始人介绍</h2>
                    <img src="images/titbg.png">
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($founders as $founder)
                        <div class="swiper-slide">
                            <div class="img"><img src="{{ '/uploads/'.$founder->img }}"></div>
                            <div class="wenz">
                                <h3>{{ $founder->job_title }}</h3>
                                <p>
                                    <font color="#c38420">{{ $founder->name }}</font><br>
                                    {!! str_replace(PHP_EOL, '<br>', $founder->introduction) !!}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination phone pagination1"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="js/index.js"></script>
@endsection
