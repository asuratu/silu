$(function () {
    //banner
    var swiper = new Swiper('.banner .pc.swiper-container', {
        pagination: '.banner .pc .swiper-pagination',
        paginationClickable: true,
        nextButton: '.banner .pc .swiper-button-next',
        prevButton: '.banner .pc .swiper-button-prev',
        spaceBetween: 0,
        effect:'fade',
        loop:true,
        speed:600,
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        resistanceRatio:0
    });
    //banner
    var swiper1 = new Swiper('.banner .phone.swiper-container', {
        pagination: '.banner .phone .swiper-pagination',
        paginationClickable: true,
        nextButton: '.banner .phone .swiper-button-next',
        prevButton: '.banner .phone .swiper-button-prev',
        spaceBetween: 0,
        effect:'fade',
        loop:true,
        speed:600,
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        resistanceRatio:0
    });

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

    //创始人介绍
    var swiper3 = new Swiper('.sy-content04 .swiper-container', {
        pagination: '.sy-content04 .swiper-pagination',
        slidesPerView: 2,
        paginationClickable: true,
        resistanceRatio:0,
        speed:500,
        spaceBetween: 120,
        breakpoints: {
            767: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1200: {
                spaceBetween: 50
            }
        }
    });

    //新闻资讯
    var swiper4 = new Swiper('.new-sy-content01 .swiper-container', {
        pagination: '.new-sy-content01 .swiper-pagination',
        paginationClickable: true,
        nextButton: '.new-sy-content01 .swiper-button-next',
        prevButton: '.new-sy-content01 .swiper-button-prev',
        spaceBetween: 20,
        effect:'left',
        //loop:true,
        speed:600,
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        resistanceRatio:0
    });
    //精彩活动
    var swiper5 = new Swiper('.new-sy-content03 .swiper-container', {
        pagination: '.new-sy-content03 .swiper-pagination',
        paginationClickable: true,
        nextButton: '.new-sy-content03 .swiper-button-next',
        prevButton: '.new-sy-content03 .swiper-button-prev',
        spaceBetween: 20,
        effect:'left',
        //loop:true,
        speed:600,
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        resistanceRatio:0
    });
    //精彩活动
    var swiper6 = new Swiper('.new-sy-content04 .swiper-container', {
        pagination: '.new-sy-content04 .swiper-pagination',
        paginationClickable: true,
        nextButton: '.new-sy-content04 .swiper-button-next',
        prevButton: '.new-sy-content04 .swiper-button-prev',
        spaceBetween: 20,
        effect:'left',
        //loop:true,
        speed:600,
        autoplay: 5000,
        autoplayDisableOnInteraction: false,
        resistanceRatio:0
    });
    /*
    $(window).bind('load scroll',function () {
        var _top=$(".sy-content01 .sy-tit h2").offset().top;
        var top = $(document).scrollTop();
        if(top>_top){
            $('.sy-nav').addClass('fixed')
        }
        else{
            $('.sy-nav').removeClass('fixed')
        }
    });

    $(window).scroll(function () {
        var items = $(".content").children("div");
        var menu = $(".sy-nav");
        var top = $(document).scrollTop();
        var currentId = ""; //滚动条现在所在位置的item id
        items.each(function () {
            var m = $(this);
            //注意：m.offset().top代表每一个item的顶部位置
            if (top > m.offset().top - 300) {
                currentId = "#" + m.attr("id");
            } else {
                return false;
            }
        });
        //给相应楼层设置
        var currentLink = menu.find(".cur");
        if (currentId && currentLink.attr("href") != currentId) {
            currentLink.removeClass("cur");
            menu.find("[href=" + currentId + "]").addClass("cur");
        }
    });
    //锚点跳转滑动效果
    $('a[href*=#],area[href*=#]').click(function() {
        console.log(this.pathname);
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({
                    scrollTop: targetOffset
                },500);
                return false;
            }
        }
    });
    */







});
