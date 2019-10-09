@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '联系我们' : $seos[0]->title )

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
            <span>联系我们</span>
        </div>
    </div>

    <div class="contact">

        <div class="contact-con02">
            <div class="wrapper">
                <div class="sy-tit fff">
                    <h2>在线留言</h2>
                    <img src="../images/titbg.png">
                </div>
                <div class="form clearfix">
                    {{ csrf_field() }}
                    <form  method="post" id="board-form">
                        <div class="p">若您有任何问题，请联系我们！</div>
                        <div class="input">
                            <input type="text" class="name_silkroad" name="name" value="{{ old('name') }}" placeholder="您的姓名">
                        </div>
                        <div class="input">
                            <input type="text" class="email_silkroad" name="email" value="{{ old('email') }}" placeholder="您的邮箱地址">
                        </div>
                        <div class="input">
                            <span>* 您的邮箱地址和手机号码可以选填一项</span>
                            <input type="text" class="phone_silkroad" name="phone" value="{{ old('phone') }}" placeholder="您的手机号码">
                        </div>
                        <div class="input">
                            <input type="text" class="address_silkroad" name="address" value="{{ old('address') }}" placeholder="您的地址">
                        </div>
                        <div class="input wid100">
                            <textarea placeholder="您的留言" class="body_silkroad" name="body">{{ old('body') }}</textarea>
                        </div>
                        <div class="submit">
                            <input type="button" value="提交">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-con01">
            <div class="wrapper">
                <div class="sy-tit">
                    <h2>联系我们</h2>
                    <img src="../images/titbg.png">
                </div>
                <dl class="clearfix fontp">
                    <dd><img src="../images/icon22.png">{{ $settings[0]->phone }}</dd>
                    <dd><img src="../images/icon23.png">{{ str_replace(' ', '', $settings[0]->address) }}</dd>
                    <dd><img src="../images/icon24.png">{{ $settings[0]->email }}</dd>
                </dl>
                <div id="dituContent"></div>
            </div>
        </div>
        <div class="contact-con03">
            <div class="wrapper">
                {{--<img src="../images/logo.png">--}}
                <p>
                    {{ $settings[0]->intro }}
                    {{--一代又一代“丝路人”架起了东西方合作的纽带、<br>--}}
                    {{--和平的桥梁,共建人类命运共同体！--}}
                </p>
                {{--<img src="/uploads/images/code.jpg">--}}
                <img src="{{ '/uploads/'.$settings[0]->wechat }}">
            </div>
        </div>

    </div>
@endsection


@section('scripts')
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=9MzNiFoY5oYew3eOWHyOyHNc"></script>
    <script>
        $('.submit').on('click', function () {
            var name = $('.name_silkroad').val();
            var email = $('.email_silkroad').val();
            var phone = $('.phone_silkroad').val();
            var address = $('.address_silkroad').val();
            var body = $('.body_silkroad').val();
            var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
            var reg1 = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;
            if ($.trim(email) == '' && $.trim(phone) == ''){
                layer.alert('您的邮箱地址和手机号码需要选填一项');
                return;
            }
            else if(reg.test( email ) == false && email != ''){
                layer.msg('邮箱格式不正确');
                return false;
            }
            else if(reg1.test( phone ) == false && phone != ''){
                layer.msg('手机号码格式不正确');
                return false;
            }
            $.ajax({
                url : "{{ route('boards.store') }}"
                ,data : {
                    name : name
                    ,email : email
                    ,phone : phone
                    ,address : address
                    ,body : body
                    ,'_token' : $('input[name=_token]').val()
                }
                ,type : "POST"
                ,dataType : "JSON"
                ,success : function (data) {
                    if (data.status == 1){
                        layer.alert(data.msg, function () {
                            location.href = location.href;
                        });
                    }
                }
                ,error : function (msg) {
                    if (msg.status == 422) {
                        var json = JSON.parse(msg.responseText);
                        json = json.errors;
                        var str = '';
                        $.each(json, function (index, value) {
                            str += value[0] + '<br>';
                        })
                        layer.alert(str);
                        return;
                    }
                }
            })
        });
        $(function(){ //地图
            function changeMap(mapx, mapy, mapTit, mapAddr, mapTel) {
                var a = mapx,
                    b = mapy;
                var map = new BMap.Map("dituContent");            // 创建Map实例  一定是id
                var point = new BMap.Point(a, b);    // 创建点坐标
                var sContent ="<div style='margin:0;line-height:1.8;font-size:12px;color:#626776;'><div><span style='color:#000;'>公司：</span>" + mapTit + "</div><div><span style='color:#000;'>地址：</span>" + mapAddr + "</div><div><span style='color:#000;'>电话：</span>" + mapTel + "</div></div></div>";
                var marker = new BMap.Marker(new BMap.Point(a, b));  // 创建标注
                var infoWindow = new BMap.InfoWindow(sContent);      // 创建信息窗口对象
                map.addOverlay(marker);              // 将标注添加到地图中
                marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
                map.centerAndZoom(point, 16);                     // 初始化地图,设置中心点坐标和地图级别。
                map.enableScrollWheelZoom();
                map.panBy(0, 50);
                //绑定标记单击事件
                marker.addEventListener("click", function () {
                    this.openInfoWindow(infoWindow);
                    //图片加载完毕重绘infowindow
                    document.getElementById('dituContent').onload = function () {
                        infoWindow.redraw();   //防止在网速较慢，图片未加载时，生成的信息框高度比图片的总高度小，导致图片部分被隐藏
                    }
                });
                map.openInfoWindow(infoWindow, point); //开启信息窗口
            }
            var lng = "121.439181";
            var lat = "31.205283";
            var title = "行知丝路研究院";
            var address = "{{ $settings[0]->address }}";
            var call = "{{ $settings[0]->phone }}";
            changeMap(lng,lat,title,address,call);

            //focus
            $('.contact-con02 .input').click(function () {
                $(".input span").hide();
                $(this).find('input').focus();
            })
        });
    </script>
@endsection