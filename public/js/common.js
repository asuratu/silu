function tips() {
    layer.alert('东方丽景阿里客服都是煎熬两款发动机萨拉开发建设的连接', {
        icon: 2,
        skin: 'layer-ext-moon'
    });
}

$(function () {
   //导航当前样式
   //  $('.nav li').hover(function () {
   //      var _left=$(this).position().left;
   //      var _ind=$(this).index();
   //      var _wid=$(this).outerWidth();
   //      $('.nav>.home').css({
   //          "left":_left+_wid/2-15,
   //          "opacity":'1'
   //      });
   //  });
   //  $('.nav').mouseleave(function () {
   //      $('.nav>.home').css({
   //          "opacity":0
   //      })
   //  });
    //百度分享
    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
    //返回顶部
    var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body'); //operaFix
    $(".totop").click(function(){
        $body.animate({scrollTop: 0});
    });
    window.onscroll=function(){
        if((document.documentElement.scrollTop + document.body.scrollTop)>200){
            $(".totop").show();
        }else{
            $(".totop").hide();
        }
    };
    //二级导航
    $('.header .san').click(function(){
        if($(this).hasClass('cur')){
            $(this).removeClass('cur');
            $('.nav').slideUp();
        }
        else{
            $(this).addClass('cur');
            $('.nav').slideDown();
        }
    });
    if($(window).width()<1024){
        $('.nav li>a').click(function () {
            if($(this).siblings("dl").length>0){
                $(this).siblings("dl").toggle();
                return false;
            }
        })
    }
    else{
        $('.new-nav li').hover(function () {
            var _wid=$(this).outerWidth();
            var _dlwid=$(this).find("dl").outerWidth();
            console.log(_wid);
            console.log(_dlwid);
            $(this).find("dl").stop().show().css('left',-(_dlwid-_wid)/2);
        },function () {
            $(this).find("dl").stop().hide();
        })
    }
    //右侧
    $(window).bind('load resize',function () {
        var _wid=$(window).outerWidth();
        var _wrapwid=1200;
        var _right=(_wid-_wrapwid)/2;
        console.log(_wid);
        console.log(_wrapwid);
        $('.fix-right').css({
            "opacity":"1",
            "right":_right-80
        })
    });
    //建设中
    $('.jsz').click(function () {
        layer.alert('感谢关注，敬请期待');
        return false;
    });
    if($(window).width()<1024){
        //解决ios 链接两次才跳转
        $('.sy-content03 .wenz a,.ljbm').on('click touchend', function(e) {
            var el = $(this);
            var link = el.attr('href');
            window.location = link;
        });
    }

});
