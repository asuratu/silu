@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '行知丝路研究院' : $seos[0]->title )

@section('meta')
    <meta name="keywords" content="{{ $seos->isEmpty() ? '' : $seos[0]->keywords }}"/>
    <meta name="description" content="{{ $seos->isEmpty() ? '' : $seos[0]->description }}"/>
@endsection

@section('content')
     <div class="content">
        <div class="login">
                <p class='user'>用户登录</p>
               <form action="" class='form'>
                <input type="text" placeholder="学号" class="xuehao">
                <input type="password" placeholder="密码" class='password xuehao'><a class='pwd' href=""><span>忘记密码？</span></a>
                <p class='error'>密码不能为空</p>
                <input type="button" value="登录" class='go xuehao'>
               </form>
        </div>
    </div>
@endsection

@section('scripts')
   <script>
        $('.go').click(function(){
            console.log($("input[type='password']").val())
            if($('.password').val()==''){
                $('.error').css('display','block')
            }else{
                $('.error').css('display','none')
            }
        })
    </script>
@endsection
