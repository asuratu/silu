@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '校友平台' : $seos[0]->title )

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
            @if(in_array(@(int)$_GET['cate'], array_keys($alumnus_cates)))
                <span>{{ $alumnus_cates[(int)$_GET['cate']] }}</span>
            @else
                <span>{{ $alumnus_cates[1] }}</span>
            @endif
        </div>
    </div>
<div class="college">
    <div class="wrapper clearfix">
    <!--@include('home.layouts._nav1')-->
    <div class="left-slide fl">
        <div class="item">
            <div class="item-tit">
                <div class="item-left-txt">行知丝路研究院</div>
                <div class="item-right-jia">+</div>
            </div>

            @foreach($pages as $item)
            <div class="item-con" style="display: none">
                <a href="{{ route('pages.show', [$item['id']]) }}"><em>></em>{{ $item['title'] }}</a>
            </div>
            @endforeach
<!--            <div class="item-con" style="display: none">-->
<!--                <a href=""><em>></em> 校长寄语</a>-->
<!--                <a href=""><em>></em> 陶行知国际教育基金</a>-->
<!--                <a href=""><em>></em> 行知丝路研究院介绍</a>-->
<!--            </div> -->
        </div>
         <div class="item">
            <div class="item-tit">
                <div class="item-left-txt">课程介绍</div>
                <div class="item-right-jia">+</div>
            </div>
             @foreach($courses_list as $item)
             <div class="item-con" style="display: none">
                 <a href="{{ route('courses.show', [$item->id]) }}"
                    class="{{ $item->status == 0 ? 'jsz' : '' }}"><em>></em>{{ $item->name }}</a>
             </div>
             @endforeach
        </div>
        <div class="item">
            <div class="item-tit">
                <div class="item-left-txt" ><a
                            href="{{ route('teachers') }}" style="color: white">师资力量</a></div>
                <div class="item-right-jia">+</div>
            </div>
            <!--<div class="item-con" style="display: none">
                <a href=""><em>></em> 校长寄语</a>
                <a href=""><em>></em> 陶行知国际教育基金</a>
                <a href=""><em>></em> 行知丝路研究院介绍</a>
            </div> -->
        </div>
        <div class="item">
            <div class="item-tit">
                <div class="item-left-txt">校友平台</div>
                <div class="item-right-jia">+</div>
            </div>
            @foreach($alumnus_cate_list as $key=>$item)
            <div class="item-con" style="display: none">
                <a href="{{ route('alumnus', ['cate'=>$key]) }}"><em>></em>{{ $item }}</a>
            </div>
            @endforeach
        </div>
        <div class="item">
            <div class="item-tit">
                <div class="item-left-txt">联系我们</div>
                <div class="item-right-jia">+</div>
            </div> 
            <!--<div class="item-con" style="display: none">
                <a href=""><em>></em> 校长寄语</a>
                <a href=""><em>></em> 陶行知国际教育基金</a>
                <a href=""><em>></em> 行知丝路研究院介绍</a>
            </div> -->
        </div>
       
</div>
        <div class="college-con">
            @if(in_array(@(int)$_GET['cate'], array_keys($alumnus_cates)))
                @if((int)$_GET['cate'] == 1)
                    <div class="alumni">
                        <div class="wrapper">
                            <div class="sy-tit">
                                <h2>校友风采</h2>
                                <img src="../images/titbg.png">
                            </div>
                            <div class="style-ul">
                                <ul>
                                    @foreach($alumnus_list as $alumnus)
                                        <li class="clearfix">
                                            <div class="img">
                                                <div class="pic">
                                                    <a href="{{ route('alumnus.show', [$alumnus->id]) }}"><img src="{{ '/uploads/'.$alumnus->img }}"></a>
                                                </div>
                                                <h3 class="textover">{{ $alumnus->description }}</h3>
                                            </div>
                                            <div class="wenz">
                                                <h3 class="textover"><a href="{{ route('alumnus.show', [$alumnus->id]) }}">{{ $alumnus->title }}</a></h3>
                                                <p class="fontp line5">
                                                    {{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 500) }}
                                                </p>
                                                <a href="{{ route('alumnus.show', [$alumnus->id]) }}" class="more">了解更多 》</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                {!! $alumnus_list->appends(Request::except('page'))->render() !!}
                            </div>
                        </div>

                    </div>
                @elseif((int)$_GET['cate'] == 2)
                    <div class="alumni">
                        <div class="wrapper">
                            <div class="sy-tit">
                                <h2>精彩活动</h2>
                                <img src="../images/titbg.png">
                            </div>
                            <div class="activity-ul">
                                <ul class="clearfix">
                                    @foreach($alumnus_list as $alumnus)
                                        <li>
                                            <div class="pic"><a href="{{ route('alumnus.show', [$alumnus->id]) }}"><img src="{{ '/uploads/'.$alumnus->img }}"></a></div>
                                            <div class="wenz">
                                                <h3 class="line2"><a href="{{ route('alumnus.show', [$alumnus->id]) }}">{{ $alumnus->title }}</a></h3>
                                                <p class="fontp line3">
                                                    {{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 500) }}
                                                </p>
                                                <center><a href="{{ route('alumnus.show', [$alumnus->id]) }}" class="more">了解更多 》</a></center>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                {!! $alumnus_list->appends(Request::except('page'))->render() !!}
                            </div>
                        </div>

                    </div>
                @elseif((int)$_GET['cate'] == 3)
                    <div class="alumni">
                        <div class="wrapper">
                            <div class="sy-tit">
                                <h2>新闻资讯</h2>
                                <img src="../images/news.png">
                            </div>
                            <!--<div class="life-ul">
                                <ul class="clearfix">
                                    @foreach($alumnus_list as $key=>$alumnus)
                                        <li class="clearfix">
                                            @if($key % 2 != 0)
                                                <div class="pic">
                                                    <a href="{{ route('alumnus.show', [$alumnus->id]) }}"><img src="{{ '/uploads/'.$alumnus->img }}"></a>
                                                </div>
                                            @endif
                                            <div class="wenz">
                                                <h3 class="textover"><a href="{{ route('alumnus.show', [$alumnus->id]) }}">{{ $alumnus->title }}</a></h3>
                                                <p class="line3 fontp">
                                                    {{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 200) }}
                                                </p>
                                                <a href="{{ route('alumnus.show', [$alumnus->id]) }}" class="more">了解更多 》</a>
                                            </div>
                                            @if($key % 2 == 0)
                                                <div class="pic">
                                                    <a href="{{ route('alumnus.show', [$alumnus->id]) }}"><img src="{{ '/uploads/'.$alumnus->img }}"></a>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                                {!! $alumnus_list->appends(Request::except('page'))->render() !!}
                            </div>-->
                            
                            <div class="right-cont">
                            	 @foreach($alumnus_list as $key=>$alumnus)
                	<div class="right-box rightbox2">
                	  <a href="{{ route('alumnus.show', [$alumnus->id]) }}"><img src="{{ '/uploads/'.$alumnus->img }}" class="img01">
                <!--	<img src="../images/simg1.png"/ class="img1">-->
                	<div class="box-txt">
                		<b class="line1"><a href="{{ route('alumnus.show', [$alumnus->id]) }}">{{ $alumnus->title }}</a></b>
                		<p class="line2"> {{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 200) }}</p>
                	</div>
                	<div class="box-time">
                		<span{{$alumnus->created_time}}</span>
                		<img src="../images/sdown.png"/>
                	</div>
                	</a>
                	</div>
                	      @endforeach
                	<!--<div class="right-box">
                	<a href="#">
                	<img src="../images/simg2.png"/ class="img1">
                	<div class="box-txt">
                		<b class="line1">李小琳校长出席“2019首届健康长李小琳校长出席“2019首届健康长</b>
                		<p class="line2">5月11日上午，中国医药卫生事业发展基金会“一带一路医疗共享”基金主帆起航</p>
                	</div>
                	<div class="box-time">
                		<span>2019.05.04</span>
                		<img src="../images/sdown.png"/>
                	</div>
                	</a>
                	</div>-->
                	<!--<div class="right-box">
                	<a href="#">
                	<img src="../images/simg3.png"/ class="img1">
                	<div class="box-txt">
                		<b class="line1">西南交通大学与行知丝路研究院举扬帆起航</b>
                		<p class="line2">2019年6月18日下午，行知丝路研究院秘书长王景弘、执行副秘书长周亮航扬帆起航扬帆起航</p>
                	</div>
                	<div class="box-time">
                		<span>2019.05.04</span>
                		<img src="../images/sdown.png"/>
                	</div>
                	</a>
                	</div>-->
                </div>
                        </div>

                    </div>
                     {!! $alumnus_list->appends(Request::except('page'))->render() !!}
                @else
                    <div class="alumni">
                        <div class="wrapper">
                            <div class="sy-tit">
                                <h2>视频展示</h2>
                                <img src="../images/shipin2.png">
                            </div>
                            <ul class="menu_list1">
						<li class="myactive1">宣传视频 </li>
						<li>新闻视频</li>
					</ul>
					<div class="morder_con1">
						<div class="">

							<div class="">
								<div class="right-cont">
                    @foreach($alumnus_list as $key=>$alumnus)
                    @if($alumnus->cate_id == 4)
                	<div class="right-box right_box1" data-src="/../video/ceshi.mp4">
                        <img src="{{'/uploads/'.$alumnus->img}}" class="img1">
<!--                   <img src="../images/simg7.png"/ class="img1">-->
<!--                	<img src="../images/bo.png"/ class="bofang">-->
                   <!-- <video width="100%" height="" src="../video/ceshi.mp4" controls="controls" poster="../images/simg7.png"></video>-->
                	<div class="box-txt box-txt1">
                		<b class="line1">{{ $alumnus->title }}</b>
                		<!--<p class="line2">仲夏五月，微风和煦。2019年5月10日，行知丝路研究院“丝路一期”开学扬帆起航扬帆起航扬帆起航</p>-->
                	</div>
                	<div class="box-time" style="border: none;">
                		<span>{{$alumnus->created_time}}</span>
                	</div>
                	</div>
                    @endif
                    @endforeach
                                </div>
                            </div>
						</div>
						<div class="" style="display: none;">
							<div class="">
                <div class="right-cont">

                    @foreach($alumnus_list as $key=>$alumnus)
                    @if($alumnus->cate_id == 4)
                	<div class="right-box right_box1" data-src="/../video/ceshi.mp4" >
                        <img src="{{'/uploads/'.$alumnus->img}}" class="img1">
<!--                	<img src="../images/simg9.png"/ class="img1">-->
<!--                		<img src="../images/bo.png"/ class="bofang">-->
                	<div class="box-txt box-txt1">
                		<b class="line1">{{ $alumnus->title }}</b>
                		<!--<p class="line2">2019年6月18日下午，行知丝路研究院秘书长王景弘、执行副秘书长周亮航扬帆起航扬帆起航</p>-->
                	</div>
                	<div class="box-time" style="border: none;">
                		<span>{{$alumnus->created_time}}</span>
                	</div>
                	</div>
                    @endif
                    @endforeach

                </div>
                
                
                </div>
                
							</div>
						</div>
  {!! $alumnus_list->appends(Request::except('page'))->render() !!}
					</div>
                            <!--<div class="vision-ul">
                                <ul>
                                    @foreach($alumnus_list as $alumnus)
                                        <li class="clearfix">
                                            <div class="pic">
                                                <a href="{{ route('alumnus.show', [$alumnus->id]) }}"></a>
                                                <img src="{{ '/uploads/'.$alumnus->img }}">
                                                <div class="date">
                                                    {{ $years[(int)date('m', strtotime($alumnus->created_at))] }}月 {{ date('d', strtotime($alumnus->created_at)) }}th<br>
                                                    {{ date('Y', strtotime($alumnus->created_at)) }}
                                                </div>
                                            </div>
                                            <div class="wenz">
                                                <h3><a href="{{ route('alumnus.show', [$alumnus->id]) }}">{{ $alumnus->title }}</a></h3>
                                                <p class="fontp line3">
                                                    {{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 500) }}
                                                </p>
                                                <a href="{{ route('alumnus.show', [$alumnus->id]) }}" class="more">了解更多 》</a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                {!! $alumnus_list->appends(Request::except('page'))->render() !!}
                            </div>-->
                        </div>

                    </div>
                @endif
            @else
                <div class="alumni">
                    <div class="wrapper">
                        <div class="sy-tit">
                            <h2>校友风采</h2>
                            <img src="../images/titbg.png">
                        </div>
                        <div class="style-ul">
                            <ul>
                                @foreach($alumnus_list as $alumnus)
                                    <li class="clearfix">
                                        <div class="img">
                                            <div class="pic">
                                                <a href="{{ route('alumnus.show', [$alumnus->id]) }}"><img src="{{ '/uploads/'.$alumnus->img }}"></a>
                                            </div>
                                            <h3 class="textover">{{ $alumnus->description }}</h3>
                                        </div>
                                        <div class="wenz">
                                            <h3 class="textover"><a href="{{ route('alumnus.show', [$alumnus->id]) }}">{{ $alumnus->title }}</a></h3>
                                            <p class="fontp line5">
                                                {{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 500) }}
                                            </p>
                                            <a href="{{ route('alumnus.show', [$alumnus->id]) }}" class="more">了解更多 》</a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            {!! $alumnus_list->appends(Request::except('page'))->render() !!}
                        </div>
                    </div>

                </div>
            @endif
        </div>
    </div>



</div>
<!--弹窗-->
<div class="Popup">
	
	<div class="content">
		<video src="" controls="controls"></video>
		<!--<img src="" alt="" />-->
	</div>
	<div class="cuo"><img src="../images/cuo1.png"/></div>
</div>





@endsection

@section('scripts')
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript">
    	$(function() {
		$('.menu_list1>li').click(function() {
			var i = $(this).index();
			$(this).parents(".menu_list1").siblings(".morder_con1").children("div").eq(i).show(500).siblings().hide(500);
		})
	})
	$(function() {
		$('.menu_list1>li').click(function() {
			$(this).addClass('myactive1').siblings().removeClass('myactive1');

		})
	})
    	$(".item-tit").click(function() {
                if($(this).siblings(".item-con").is(":hidden")) {
                    $(this).siblings(".item-con").show();
                    $(this).find(".item-right-jia").html("-");
                } else {
                    $(this).siblings(".item-con").hide();
                    $(this).find(".item-right-jia").html("+");
                }
            })
          
	
    </script>
@endsection