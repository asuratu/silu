@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '师资资源' : $seos[0]->title )

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
            <span>师资力量</span>
        </div>
    </div>

    <div class="teacher">
        <div class="wrapper">
            <div class="sy-tit">
                <h2>师资力量</h2>
                <img src="../images/titbg.png">
            </div>

            <div class="new-teacher-ul clearfix">
                @foreach($teachers_cates as $key=>$teachers_cate)
                    <div class="fl {{ $key > 1 ? 'ul2' : 'ul1' }}">
                        <h3>{{ $teachers_cate->name }}<span>（部分）</span></h3>
                        <h5>{!! str_replace(PHP_EOL, '<br>', $teachers_cate->name_english) !!}</h5>
                        <ul class="clearfix">
                            @foreach($teachers as $teacher)
                                @if($teacher->cate_id == $teachers_cate->id)
                                    <li>
                                        <div class="img"><img src="{{ '/uploads/'.$teacher->img }}"></div>
                                        <h4>{{ $teacher->name }}</h4>
                                        <p>{!! str_replace(PHP_EOL, '<br>', $teacher->introduction) !!}</p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach

                {{--<div class="fl ul1">--}}
                {{--<h3>顾问委员会<span>（部分）</span></h3>--}}
                {{--<h5>consultative committee<br>xingzhi silkroad institute</h5>--}}
                {{--<ul class="clearfix">--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher07.jpg"></div>--}}
                {{--<h4>屠光绍</h4>--}}
                {{--<p>--}}
                {{--中国投资有限责任公司总经理--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher08.jpg"></div>--}}
                {{--<h4>钱智民</h4>--}}
                {{--<p>--}}
                {{--国家电力投资集团公司董事长、党组书记--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher09.jpg"></div>--}}
                {{--<h4>杨元庆</h4>--}}
                {{--<p>--}}
                {{--联想集团董事长兼CEO--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher10.jpg"></div>--}}
                {{--<h4>张玉良</h4>--}}
                {{--<p>--}}
                {{--上海绿地有限公司董事长、总裁--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher11.jpg"></div>--}}
                {{--<h4>任建新</h4>--}}
                {{--<p>--}}
                {{--中国化工集团原党委书记、董事长--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher12.jpg"></div>--}}
                {{--<h4>沈南鹏</h4>--}}
                {{--<p>--}}
                {{--红杉资本中国基金创始人及执行合伙人--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="fl ul2">--}}
                {{--<h3>师资力量<span>（部分）</span></h3>--}}
                {{--<h5>SCHOOL OF teachers<br>xingzhi silkroad institute</h5>--}}
                {{--<ul class="clearfix">--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher13.jpg"></div>--}}
                {{--<h4>林忠钦<font>院士</font></h4>--}}
                {{--<p>--}}
                {{--上海交通大学校长、党委副书记<br>--}}
                {{--中国工程院院士--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher14.jpg"></div>--}}
                {{--<h4>王利明<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--中国人民大学常务副校长--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher15.jpg"></div>--}}
                {{--<h4>胡 近<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--上海交通大学党委副书记--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher16.jpg"></div>--}}
                {{--<h4>吴晓求<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--中国人民大学副校长--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher26.jpg"></div>--}}
                {{--<h4>楼宇烈<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--当代国学大家、最赋盛名的当代哲学大师北京大学教授、博士生导师--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher17.jpg"></div>--}}
                {{--<h4>陈 宪<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--上海交通大学安泰经济与管理学院<br>--}}
                {{--经济学院执行院长--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher18.jpg"></div>--}}
                {{--<h4>刘世安<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--国海证券股份有限公司总裁--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher19.jpg"></div>--}}
                {{--<h4>王 琦<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--国家级重点学科中医基础理论学科带头人<br>--}}
                {{--北京中医药大学博士生导师--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher20.jpg"></div>--}}
                {{--<h4>王 文<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--中国人民大学重阳金融研究院执行院长--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher21.jpg"></div>--}}
                {{--<h4>张其成<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--北京中医药大学国学院院长--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher22.jpg"></div>--}}
                {{--<h4>刘 统<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--上海交通大学人文学院历史系教授<br>--}}
                {{--中国人民解放军军事科学院研究员--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher23.jpg"></div>--}}
                {{--<h4>孟宪忠<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--上海交通大学安泰经济与管理学院教授--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher24.jpg"></div>--}}
                {{--<h4>李良松<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--北京中医药大学国学院副院长--}}
                {{--</p>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<div class="img"><img src="/images/new/teacher25.jpg"></div>--}}
                {{--<h4>吕 捷<font>教授</font></h4>--}}
                {{--<p>--}}
                {{--中国人民大学丝路学院副院长--}}
                {{--</p>--}}
                {{--</li>--}}

                {{--</ul>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
@endsection
