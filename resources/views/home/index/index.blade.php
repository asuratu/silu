@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '首页' : $seos[0]->title )

@section('meta')
    <meta name="keywords" content="{{ $seos->isEmpty() ? '' : $seos[0]->keywords }}"/>
    <meta name="description" content="{{ $seos->isEmpty() ? '' : $seos[0]->description }}"/>
@endsection
@push('css')
<style type="text/css">
	
</style>
@endpush


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

<div class="index-main clearfix">
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
				<a class="item-left-txt"
						href="{{ route('contacts') }}">联系我们</a>
                <div class="item-right-jia">+</div>
            </div>
        </div>
       
</div>
 <div class="right-sidle fr">
 	    <div class="right-list">
                <div class="sy-tit-new clearfix">
                <span>新闻资讯/News Center</span> 
                    <a href="{{ route('alumnus', ['cate'=>3]) }}" class="new-more fr">更多></a>
                </div>
                <div class="right-cont">

					@foreach($alumnus_list as $key=>$alumnus)
						@if($alumnus->cate_id == 3)
                	<div class="right-box">
						<a href="{{ route('alumnus.show', [$alumnus->id]) }}">
							<img src="{{'/uploads/'.$alumnus->img}}" class="img1">

                	{{--<img src="../images/simg1.png"/ class="img1">--}}
                	<div class="box-txt">
                		<b class="line1">{{ $alumnus->title }}</b>
                		<p class="line2">{{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 200) }}</p>
                	</div>
                	<div class="box-time">
                		<span>{{$alumnus->created_time}}</span>
                		<img src="../images/sdown.png"/>
                	</div>
                	</a>
                	</div>
						@endif
					@endforeach
                	{{--<div class="right-box">--}}
                	{{--<a href="#">--}}
                	{{--<img src="../images/simg2.png"/ class="img1">--}}
                	{{--<div class="box-txt">--}}
                		{{--<b class="line1">李小琳校长出席“2019首届健康长李小琳校长出席“2019首届健康长</b>--}}
                		{{--<p class="line2">5月11日上午，中国医药卫生事业发展基金会“一带一路医疗共享”基金主帆起航</p>--}}
                	{{--</div>--}}
                	{{--<div class="box-time">--}}
                		{{--<span>2019.05.04</span>--}}
                		{{--<img src="../images/sdown.png"/>--}}
                	{{--</div>--}}
                	{{--</a>--}}
                	{{--</div>--}}
                	{{--<div class="right-box">--}}
                	{{--<a href="#">--}}
                	{{--<img src="../images/simg3.png"/ class="img1">--}}
                	{{--<div class="box-txt">--}}
                		{{--<b class="line1">西南交通大学与行知丝路研究院举扬帆起航</b>--}}
                		{{--<p class="line2">2019年6月18日下午，行知丝路研究院秘书长王景弘、执行副秘书长周亮航扬帆起航扬帆起航</p>--}}
                	{{--</div>--}}
                	{{--<div class="box-time">--}}
                		{{--<span>2019.05.04</span>--}}
                		{{--<img src="../images/sdown.png"/>--}}
                	{{--</div>--}}
                	{{--</a>--}}
                	{{--</div>--}}
                </div>
                </div>
                <div class="right-list">
                <div class="sy-tit-new clearfix">
                <span>精彩活动/Wonderful Activities</span> 
                    <a href="{{ route('alumnus', ['cate'=>2]) }}" class="new-more fr">更多></a>
                </div>
                <div class="right-cont">
					@foreach($alumnus_list as $key=>$alumnus)
						@if($alumnus->cate_id == 2)
							<div class="right-box">
								<a href="{{ route('alumnus.show', [$alumnus->id]) }}">
									<img src="{{'/uploads/'.$alumnus->img }}" class="img1">
									{{--<img src="../images/simg1.png"/ class="img1">--}}
									<div class="box-txt">
										<b class="line1">{{ $alumnus->title }}</b>
										<p class="line2">{{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 200) }}</p>
									</div>
									<div class="box-time">
										<span>{{$alumnus->created_time}}</span>
										<img src="../images/sdown.png"/>
									</div>
								</a>
							</div>
						@endif
					@endforeach


                </div>
                </div>
                 <div class="right-list">
                <div class="sy-tit-new clearfix">
                <span>视频展示/Video Display</span> 
                    <a href="{{ route('alumnus', ['cate'=>4]) }}" class="new-more fr">更多></a>
                </div>
                <div class="right-cont">
					@foreach($alumnus_list as $key=>$alumnus)
						@if($alumnus->cate_id == 4)
                	<div class="right-box right_box1" data-src="/../video/ceshi.mp4">
						<img src="{{'/uploads/'.$alumnus->img}}" class="img1">
                   {{--<img src="../images/simg7.png"/ class="img1">--}}
                	{{--<img src="../images/bo.png"/ class="bofang">--}}
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
                 <div class="right-list">
                <div class="sy-tit-new clearfix">
                <span>校友风采/ Our Alumni</span> 
                    <a href="{{ route('alumnus', ['cate'=>1]) }}" class="new-more fr">更多></a>
                </div>
					 @foreach($alumnus_list as $key=>$alumnus)
						 @if($alumnus->cate_id == 1)
                <div class="right-cont">
                	<div class="right-box">
                	<a href="{{ route('alumnus.show', [$alumnus->id]) }}">
                	<img src="{{'/uploads/'.$alumnus->img}}" class="img1">
                	<div class="box-txt">
                		<b class="line1">{{$alumnus->title}}</b>
                		<p class="line2">{{ str_limit(preg_replace("/<[^>]+>/", '', $alumnus->body), 200) }}</p>
                	</div>
                	<div class="box-time">
                		<span>{{$alumnus->created_time}}</span>
                		<img src="../images/sdown.png"/>
                	</div>
                	</a>
                	</div>
				</div>
						 @endif
					 @endforeach

				 </div>
                 <div class="right-list">
                <div class="sy-tit-new clearfix">
                <span>特色课程/Special Course</span> 
                    <a href="{{ route('alumnus', ['cate'=>3]) }}" class="new-more fr">更多></a>
                </div>
                <div class="right-cont">
                	<div class="right-box">
                	<a href="#">
                	<img src="../images/simg13.png"/ class="img1"> 
                	<div class="box-txt">
                		<b class="line1">“丝路一期”扬帆起航——行知丝扬帆起航扬帆起航扬帆起航</b>
                		<p class="line2">仲夏五月，微风和煦。2019年5月10日，行知丝路研究院“丝路一期”开学扬帆起航扬帆起航扬帆起航</p>
                	</div>
                	<div class="box-time">
                		<span>2019.05.04</span>
                		<img src="../images/sdown.png"/>
                	</div>
                	</a>
                	</div>
                	<div class="right-box">
                	<a href="#">
                	<img src="../images/simg14.png"/ class="img1">
                	<div class="box-txt">
                		<b class="line1">李小琳校长出席“2019首届健康长李小琳校长出席“2019首届健康长</b>
                		<p class="line2">5月11日上午，中国医药卫生事业发展基金会“一带一路医疗共享”基金主帆起航</p>
                	</div>
                	<div class="box-time">
                		<span>2019.05.04</span>
                		<img src="../images/sdown.png"/>
                	</div>
                	</a>
                	</div>
                	<div class="right-box">
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
                	</div>
                </div>
                </div>
                
        </div>
</div>
    <!--<div class="new-index clearfix">
        <div class="wrapper clearfix">
            <div class="fl wid620 new-sy-content01">
                <div class="sy-tit-new clearfix">
                    新闻资讯/News Center
                    <a href="{{ route('alumnus', ['cate'=>3]) }}" class="new-more fr">更多></a>
                </div>
                <div class="clearfix">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($column1 as $item)
                            <div class="swiper-slide">
                                <div class="pic"><a href="{{ route('alumnus.show', [$item->id]) }}"><img src="{{ '/uploads/'.$item->recommend_img }}"></a></div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev prev3"></div>
                        <div class="swiper-button-next next3"></div>
                    </div>

                    <div class="wenz">
                        <dl>
                            @foreach($column1 as $item)
                            <dd class="clearfix">
                                <div class="date">
                                    <span>{{ date('d', strtotime($item->created_at)) }}</span><br>
                                    {{ date('Y/m', strtotime($item->created_at)) }}
                                </div>
                                <div class="wz">
                                    <h3 class="textover f18"><a href="{{ route('alumnus.show', [$item->id]) }}">{{ $item->title }}</a></h3>
                                    <p class="line2 f14l20c6">{{ htmlFilterAndLimit($item->body, 50) }}</p>
                                </div>
                            </dd>
                            @endforeach
                        </dl>
                    </div>
                </div>
            </div>
            <div class="fr wid530 new-sy-content02">
                <div class="sy-tit-new clearfix">
                    特色课程/Special course
                    <a href="{{ route('courses') }}" class="new-more fr">更多></a>
                </div>
                <dl>
                    @foreach($column2 as $item)
                    <dd class="clearfix">
                        <div class="pic"><a class="{{ $item->status == 0 ? 'jsz' : '' }}" href="{{ route('courses.show', [$item->id]) }}"><img src="{{ '/uploads/'.$item->recommend_img }}"></a></div>
                        <div class="wenz">
                            <h3 class="f18"><a class="{{ $item->status == 0 ? 'jsz' : '' }}" href="{{ route('courses.show', [$item->id]) }}">{{ $item->name }}</a></h3>
                            <p class="line2 f14l20c6">
                                {{ $item->intro }}
                            </p>
                        </div>
                    </dd>
                    @endforeach
                </dl>
            </div>
            <div class="fl wid620 new-sy-content03">
                <div class="sy-tit-new clearfix">
                    精彩活动/Wonderful activities
                    <a href="{{ route('alumnus', ['cate'=>2]) }}" class="new-more fr">更多></a>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($column3 as $item)
                        <div class="swiper-slide">
                            <div class="pic"><a href="{{ route('alumnus.show', [$item->id]) }}"><img src="{{ '/uploads/'.$item->recommend_img }}"></a></div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev prev3"></div>
                    <div class="swiper-button-next next3"></div>
                </div>
                <ul class="clearfix">
                    @foreach($column3 as $item)
                    <li class="textover"><a href="{{ route('alumnus.show', [$item->id]) }}">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="fr wid530 new-sy-content04">
                <div class="sy-tit-new clearfix">
                    校友风采/Alumni style
                    <a href="{{ route('alumnus', ['cate'=>1]) }}" class="new-more fr">更多></a>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($column4 as $item)
                        <div class="swiper-slide">
                            <div class="pic"><a href="{{ route('alumnus.show', [$item->id]) }}"><img src="{{ '/uploads/'.$item->recommend_img }}"></a></div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-prev prev3"></div>
                    <div class="swiper-button-next next3"></div>
                </div>
                <ul>
                    @foreach($column4 as $item)
                        <li>
                            <h3 class="f18 textover"><a href="{{ route('alumnus.show', [$item->id]) }}">{{ $item->title }}</a></h3>
                            <p class="f14l20c6 textover">{{ htmlFilterAndLimit($item->body, 50) }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>-->

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
  	
  
//
//          // 点击播放视频
// $(".right_box1").click(function() {
//var src= $(this).attr("data-src");
//$(".Popup .content video").attr("src", src);
//$(".Popup").show(50)
//$(".Popup .content video").trigger('play');
// });
// 
// $(".page-prev").html("&lt;")
// $(".page-next").html("&gt;")
// 
// $('.cuo').click(function() {
//
//$(".Popup").hide(50)
//	$(".Popup .content video").trigger('pause');
// });
// 
// 
// $(".right_box1").click(function() {
// 	$(this).find(".bofang").toggle()
// })
    </script>
@endsection
