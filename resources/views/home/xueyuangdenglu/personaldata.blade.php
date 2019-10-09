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
						<h3>个人资料</h3>
					</div>
					<div class="rightmain">
						<form action="" method="post">
							
							
						
						<div class="rightcon">
							<div class="right-left-tou">
								<span>头像：</span>
							</div>

							<div class="touxiang">
								<div class="ab"><img src="img/图层-12_03.png" id='prevView'/></div>
							</div>
							<div class="genghuan">
								<input type="file" name="" class="inp1" value="" placeholder="更改头像" onchange="prev(this)"/>
								<div class="but">更改头像</div>
							</div>
						</div>
						<div class="rightcon">
							<div class="right-left-tou">
								<span>姓名：</span>
							</div>
							<div class="myinp">
								<input type="text" name="" class="name" value="" />
							</div>
						</div>
						<div class="rightcon">
							<div class="right-left-tou">
								<span>性别:</span>
							</div>
							<div class="myinp-sex">
								<div class="boy">
									<input type="radio" name="sex" id="" value="" />男
								</div>
								<div class="qirl">
									<input type="radio" name="sex" id="" value="" />女
								</div>
							</div>
						</div>
						<div class="rightcon">
							<div class="right-left-tou">
								<span>学号：</span>
							</div>
							<div class="myinp">
								<input type="" name="" class="xuehao" value="" />
							</div>
						</div>
						<div class="rightcon">
							<div class="right-left-tou">
								<span>手机号：</span>
							</div>
							<div class="myinp">
								<input type="" name="" class="phone" value="" />
							</div>
						</div>
						<div class="rightcon">
							<div class="right-left-tou">
								<span>所属行业：</span>
							</div>
							<div class="myinp">
								<!--<input type="" name="" class="hangye" value="" />-->
								<select name="">
									<option value="1">教育</option>
									<option value="1">教育1</option>
								</select>
								
							</div>
						</div>
						<div class="rightcon">
							<div class="right-left-tou">
								<span>所在班级：</span>
							</div>
							<div class="myinp">
								<input type="" name="" class="banji" value="" />
							</div>
						</div>
						<div class="rightcon">
							<div class="right-left-tou">
								<span>组别：</span>
							</div>
							<div class="myinp">
								<input type="" name="" class="zubie" value="" />
							</div>
						</div>
						 <input type="button" value="提交" class='butt'>
						</form>
					</div>
            
				</div>
			</div>
		</div>
@endsection

@section('scripts')
   <script type="text/javascript">
		function prev(event){
        //获取展示图片的区域
        var img = document.getElementById("prevView"); 
        //获取文件对象
        let file = event.files[0];
        //获取文件阅读器
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(){
            //给img的src设置图片url
            img.setAttribute("src", this.result);
        }
    }
		
		$('.genghuan .but').click(function(){
			$(this).siblings("input").click()
			
		})
//		
//		
//
//	 $(".genghuan input").on('change',function(){
//	    
//	    var value = $(this).val();
//	    
//	    $(".touxiang .ab img").attr("src",value)
//	    
//	    
//	    })
	 
	 $(".item1").click(function(){
	 	$(this).addClass("on").siblings(".item1").removeClass("on")
	 })
	 
	</script>
@endsection
