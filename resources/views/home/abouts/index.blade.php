@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '行知丝路研究院' : $seos[0]->title )

@section('meta')
    <meta name="keywords" content="{{ $seos->isEmpty() ? '' : $seos[0]->keywords }}"/>
    <meta name="description" content="{{ $seos->isEmpty() ? '' : $seos[0]->description }}"/>
@endsection

@section('content')
    <div class="ny-banner">
        <img src="{{ '/uploads/'.$banner[0]->img }}">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="../images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="../images/jt.png">
            <span>行知丝路研究院</span>
        </div>
    </div>
    <div class="about">
        <div class="about-con01" id="item1">
            <div class="wrapper">
                <div class="sy-tit">
                    <h2>品牌简介</h2>
                    <img src="../images/titbg.png">
                </div>
                <div class="clearfix">
                    <div class="pic"><img src="../images/nyimg02.jpg"></div>
                    <div class="wenz fontp">
                        <hr>
                        <p>
                            <font color="#c38420">丝路规划研究中心</font>
                            由全国政协办公厅作为业务主管单位，于2016年3月成立，由国家开发银行、清华大学、丝路基金、中国开发性金融促进会、中国金融四十人论坛共同发起。<br>
                            丝路规划研究中心是为服务“一带一路”战略而发起成立的中国特色新型智库，致力于开展国家、区域和行业规划研究，发挥战略研究、政策建言、人才培养、舆论引导、公共外交等功能，为相关方面提供智力服务，推动“一带一路”建设向纵深发展。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sy-content02 about-con02" id="item2">
            <div class="wrapper">
                <div class="sy-tit fff">
                    <h2>理念介绍</h2>
                    <img src="../images/titbg.png">
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../images/icon01.png">
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
                            <img src="../images/icon02.png">
                            <h3>经营策略层</h3>
                            <p>
                                发展理念<br>
                                国家导向、全球覆盖、市场驱动、师生共建<br>
                                管理理念（学训）<br>
                                创新、养德、博学、笃志
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <img src="../images/icon03.png">
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
                <div class="yuanjing">
                    <p>
                        愿景：让当下最有成果的人来培养更优秀的人！！<br>
                        使命：培养国际创业领袖，弘扬中华文明，促进跨文化交流！<br>
                        校训：创新、博学、精进、笃行
                    </p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="about-con03" id="item3">
            <ul class="clearfix wrapper">
                <li>
                    <h3>变革观</h3>
                    <p>
                        光阴如逝，创造不止<br>
                        识变革为常道<br>
                        以发展为信仰
                    </p>
                </li>
                <li>
                    <h3>学习观</h3>
                    <p>
                        知，乃成其新<br>
                        融，乃成其大<br>
                        东西交融，兼容并收<br>
                        以学为宗，以成为旨
                    </p>
                </li>
                <li>
                    <h3>执行观</h3>
                    <p>
                        事在人为<br>
                        顺乎天应乎人<br>
                        不舍昼夜<br>
                        信于心践于行
                    </p>
                </li>
                <li>
                    <h3>绩效观</h3>
                    <p>
                        在校观其志<br>
                        出校观其行<br>
                        有志、有为、有成
                    </p>
                </li>
                <li>
                    <h3>人才观</h3>
                    <p>
                        聚天下英才<br>
                        论天下正道<br>
                        成天下乐事
                    </p>
                </li>
            </ul>
        </div>
        <div class="about-con04" id="item4">
            <div class="wrapper">
                <div class="sy-tit">
                    <h2>创始人介绍</h2>
                    <img src="../images/titbg.png">
                </div>
                <div class="btn-box">
                    <div class="swiper-button-prev prev1"></div>
                    <div class="swiper-button-next next1"></div>
                    <div class="swiper-container fontp">
                        <div class="swiper-wrapper">
                            @foreach($founders as $founder)
                                <div class="swiper-slide">
                                    <img src="{{ '/uploads/'.$founder->img }}">
                                    <hr>
                                    <h3>{{ $founder->job_title }}</h3>
                                    <h4><span>{{ $founder->name }}</span></h4>
                                    <p>
                                        {!! str_replace(PHP_EOL, '<br>', $founder->introduction) !!}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination pagination1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-con05">
            <div class="sy-tit">
                <h2>校园风采</h2>
                <img src="../images/titbg.png">
            </div>
            <ul class="clearfix wrapper">
                @foreach($schools as $school)
                <li class="pic">
                    <img src="{{ '/uploads/'.$school->img }}">
                    <h4>{{ $school->description }}</h4>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            var swiper2 = new Swiper('.sy-content02 .swiper-container', {
                pagination: '.sy-content02 .swiper-pagination',
                slidesPerView: 3,
                paginationClickable: true,
                resistanceRatio:0,
                speed:500,
                spaceBetween: 80,
                breakpoints: {
                    767: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    1023: {
                        spaceBetween: 30
                    }
                }
            });
            var swiper3 = new Swiper('.about-con04 .swiper-container', {
                pagination: '.about-con04 .swiper-pagination',
                nextButton: '.about-con04 .swiper-button-next',
                prevButton: '.about-con04 .swiper-button-prev',
                slidesPerView: 3,
                paginationClickable: true,
                resistanceRatio:0,
                speed:500,
                spaceBetween: 60,
                breakpoints: {
                    767: {
                        slidesPerView: 1.2,
                        spaceBetween: 10
                    },
                    1200: {
                        spaceBetween: 30
                    }
                }
            });
        })
    </script>
@endsection
