@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '行知丝路研究院' : $seos[0]->title )

@section('meta')
    <meta name="keywords" content="{{ $seos->isEmpty() ? '' : $seos[0]->keywords }}"/>
    <meta name="description" content="{{ $seos->isEmpty() ? '' : $seos[0]->description }}"/>
@endsection

@section('content')
    <div class="bgcolor">

			<div class="huiyuan-main cl">
				<div class="left1-slide fl">
					<div class="item1-top">
						<div class="item1top-tit">
							<div class="item11-lefttop-txt">会员中心</div>
						</div>
					</div>
					<div class="item1 on">
						<div class="item1-tit">
							<div class="item11-right-img"><img src="img/kecheng.png" /></div>
							<div class="item11-right-img"><img src="img/ke2.png" /></div>
							<div class="item1-left-txt">我的课程</div>
						</div>

					</div>
					<div class="item1">
						<div class="item1-tit">
							<div class="item11-right-img"><img src="img/ziliao1.png" /></div>
							<div class="item11-right-img"><img src="img/ziliao.png" /></div>
							<div class="item1-left-txt">学习资料</div>
						</div>

					</div>
					<div class="item1">
						<div class="item1-tit">
							<div class="item11-right-img"><img src="img/xiazai.png" /></div>
							<div class="item11-right-img"><img src="img/xia2.png" /></div>
							<div class="item1-left-txt">课程下载</div>
						</div>

					</div>
					<div class="item1">
						<div class="item1-tit">
							<div class="item11-right-img"><img src="img/xiazai.png" /></div>
							<div class="item11-right-img"><img src="img/xia2.png" /></div>
							
							<div class="item1-left-txt">资料下载</div>
						</div>
					</div>
					<div class="item1">
						<div class="item1-tit">
							<div class="item11-right-img"><img src="img/ziliao1.png" /></div>
							<div class="item11-right-img"><img src="img/ziliao.png" /></div>
							<div class="item1-left-txt">个人资料</div>
						</div>
					</div>

					<div class="item1">
						<div class="item1-tit">
							<div class="item11-right-img"><img src="img/xiugai.png" /></div>
							<div class="item11-right-img"><img src="img/xiu1.png" /></div>
							
							<div class="item1-left-txt">修改密码</div>
						</div>
					</div>
					<div class="item1">
						<div class="item1-tit">
							<div class="item11-right-img"><img src="img/huiyuan.png" /></div>
							<div class="item11-right-img"><img src="img/huiyuan.png" /></div>
							<div class="item1-left-txt">会员中心</div>
						</div>
					</div>
					<div class="item1">
						<div class="item1-tit">
							<div class="item1-left-txt1"></div>
						</div>
					</div>

				</div>
				<div class="right1-sidle fr">
					<div class="right1-txt right02">
						<div class="tou"><img src="img/图层-12_03.png" /></div>
						<div class="hui-xinxi">
							<span>18622651718</span>
							<span>普通会员</span>
							<div class="xiazai">
							<div class="ziliaoxiazai">
								 <a href="" download="download" >
							<div class="ziliaoimg"><img src="img/xia1.png" /></div>
							<div class="ziliao">资料下载</div>
							</a>
						</div>
						<p class="shu">
							|
						</p>
						<div class="ziliaoxiazai kecheng">
							 <a href="" download="download" >
							<div class="ziliaoimg"><img src="img/xia1.png" /></div>
							<div class="ziliao">课程下载</div>
							</a>
						</div>
							</div>
						</div>
						
					</div>
					<div class="mycont">
						<div class="mykecheng xuexi">
							<div class="shu1">
							</div>
							<h4>学习资料</h4>
						</div>
						<div class="xuexi">
							<div class="xuebox1" align="center">
								<div class="xuelogo" align="center">
									<img src="img/zi.png"/>
								</div>
								<h3>课程名称</h3>
								<p>作业简介作业简介作业简介作业简介作业简介作业简介作业简介作业简介</p>
								<div class="ke">
									<a href="" download="download" >
										<div class="kexia">课程下载</div>
								  		<div class="kelogo"><img src="img/xia2.png" /></div>
							  		</a>
								</div>
							</div>
							<div class="xuebox1" align="center">
								<div class="xuelogo" align="center">
									<img src="img/zi.png"/>
								</div>
								<h3>课程名称</h3>
								<p>作业简介作业简介作业简介作业简介作业简介作业简介作业简介作业简介</p>
								<div class="ke">
									<a href="" download="download" >
									
								<div class="kexia">课程下载</div>
							  <div class="kelogo"><img src="img/xia2.png" /></div>
							  </a>
							 
						</div>
							</div>
							<div class="xuebox1" align="center">
								<div class="xuelogo" align="center">
									<img src="img/zi.png"/>
								</div>
								<h3>课程名称</h3>
								<p>作业简介作业简介作业简介作业简介作业简介作业简介作业简介作业简介</p>
								<div class="ke">
									<a href="" download="download" >
								<div class="kexia">课程下载</div>
							  <div class="kelogo"><img src="img/xia2.png" /></div>
							  </a>
							 
						</div>
							</div>
							<div class="xuebox1" align="center">
								<div class="xuelogo" align="center">
									<img src="img/zi.png"/>
								</div>
								<h3>课程名称</h3>
								<p>作业简介作业简介作业简介作业简介作业简介作业简介作业简介作业简介</p>
								<div class="ke">
									<a href="" download="download" >
								<div class="kexia">课程下载</div>
							  <div class="kelogo"><img src="img/xia2.png" /></div>
							  </a>
							 
						</div>
							</div>
							<div class="xuebox1" align="center">
								<div class="xuelogo" align="center">
									<img src="img/zi.png"/>
								</div>
								<h3>课程名称</h3>
								<p>作业简介作业简介作业简介作业简介作业简介作业简介作业简介作业简介</p>
								<div class="ke">
									<a href="" download="download" >
								<div class="kexia">课程下载</div>
							  <div class="kelogo"><img src="img/xia2.png" /></div>
							  </a>
							 
						</div>
							</div>
							<div class="xuebox1" align="center">
								<div class="xuelogo" align="center">
									<img src="img/zi.png"/>
								</div>
								<h3>课程名称</h3>
								<p>作业简介作业简介作业简介作业简介作业简介作业简介作业简介作业简介</p>
								<div class="ke">
							 <a href="" download="download" >
								<div class="kexia">课程下载</div>
							  <div class="kelogo"><img src="img/xia2.png" /></div>
							 </a>
						</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
@endsection

@section('scripts')
   <script type="text/javascript">
		$(".item1").click(function(){
	 	$(this).addClass("on").siblings(".item1").removeClass("on")
	 })

	</script>
@endsection
