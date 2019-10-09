<div class="footer">
    <div class="footer-top">
        <div class="wrapper clearfix">
            <div class="footer-nav fl clearfix">
                <dl>
                    <dt class="dt"><a href="/pages/4">行知丝路研究院</a></dt>
                    @foreach($pages as $item)
                        <dd><a href="{{ route('pages.show', [$item['id']]) }}">{{ $item['title'] }} 》</a></dd>
                    @endforeach
                </dl>
                <dl>
                    <dt class="dt"><a href="{{ route('alumnus') }}">校友平台</a></dt>
                    @foreach($alumnus_cate_list as $key=>$item)
                        <dd><a href="{{ route('alumnus', ['cate'=>$key]) }}">{{ $item }} 》</a></dd>
                    @endforeach
                </dl>
                <dl>
                    <dt class="dt"><a href="/courses">课程介绍</a></dt>

                    @foreach($courses_list as $item)
                        <dd><a href="{{ route('courses.show', [$item->id]) }}" class="{{ $item->status == 0 ? 'jsz' : '' }}">{{ $item->name }}</a></dd>
                    @endforeach
                </dl>
                <dl class="footer-contact">
                    <dt class="dt">联系我们</dt>
                    <dd>{{ $settings[0]->phone }}</dd>
                    <dd>
                        {!! str_replace(' ', '<br>', $settings[0]->address) !!}
                    </dd>
                    <dd><a href="mailto:silkroaduni@163.com">{{ $settings[0]->email }}</a></dd>
                </dl>
            </div>
            <div class="footer-code fr">
                <h3 class="dt">关注我们</h3>
                <img src="{{ '/uploads/'.$settings[0]->wechat }}">
            </div>

        </div>
    </div>
    <div class="footer-mid">
        <div class="bdsharebuttonbox">
            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
        </div>
    </div>
    <div class="footer-btm">
        {{ $settings[0]->copyright }}
    </div>
</div>
{{--<a href="javascript:;" class="totop"></a>--}}

<div class="fix-right">
    <ul>
        <li class="clearfix pos_re">
            <div class="img"><img src="/images/new/icon01.png"></div>
            <span>{{ $settings[0]->phone_2 }}</span>
        </li>
        <li class="clearfix pos_re">
            <a href="{{ route('signs') }}"></a>
            <div class="img"><img src="/images/new/icon02.png"></div>
            <span>在线报名</span>
        </li>
    </ul>
</div>
<script>
    $(function () {
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?128ec7a7160bce4f28a51d357b0abaac";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
        $(window).bind('load',function () {
            $('.editor img').each(function () {
                $(this).attr({
                    "title":"",
                    "alt":""
                })
            })
        })
    })
    
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
           // 点击播放视频
 $(".right_box1").click(function() {
  var src= $(this).attr("data-src");
  $(".Popup .content video").attr("src", src);
  $(".Popup").show(50)
  $(".Popup .content video").trigger('play');
 });
 
 $(".page-prev").html("&lt;")
 $(".page-next").html("&gt;")
 
 $('.cuo').click(function() {

  $(".Popup").hide(50)
  	$(".Popup .content video").trigger('pause');
 });
 
 
 $(".right_box1").click(function() {
 	$(this).find(".bofang").toggle()
 })
 
$(".item-con a").click(function(){
	 	$(this).addClass("on1").siblings(".item-con a").removeClass("on1")
	 })
</script>


