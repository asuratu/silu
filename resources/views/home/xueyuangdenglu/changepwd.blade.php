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
					<div class="right1-txt">
						<h3>修改密码</h3>
					</div>
					<div class="rightmain rightmain1">
						<form action="" method="post">
							
					
						<div class="rightcon1">
							<div class="right-left-tou1">
								<span>输入原始密码：</span>
							</div>
							<div class="myinp1">
								<input type="password" name="" class="name" value="" />
							</div>
						</div>
						<div class="rightcon1">
							<div class="right-left-tou1">
								<span>设置新密码：</span>
							</div>
							<div class="myinp1">
								<input type="password" name="" class="xuehao" value="" />
							</div>
						</div>
						<div class="rightcon1">
							<div class="right-left-tou1">
								<span>重复新密码：</span>
							</div>
							<div class="myinp1">
								<input type="password" name="" class="phone" value="" />
							</div>
						</div>
						
						 <input type="button" value="提交" class='butt1'>
						 	</form>
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
