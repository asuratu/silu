@extends('home.layouts.app')

@section('title', $page->title.' - 行知丝路研究院')

@section('content')
    <div class="ny-banner">
        <img src="/images/new/banner1.jpg">
    </div>
    <div class="crumbs">
        <div class="wrapper">
            <img src="/images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="/images/jt.png">
            <span>行知丝路研究院</span>
        </div>
    </div>

    <div class="page-index">2</div>
    <div class="page-indexs">4</div>
    <div class="college">
        <div class="wrapper clearfix">
            @include('home.layouts._nav', ['page_id'=>$page->id, 'parent_pages'=>$parent_pages])
            <div class="college-con college-sponsor college-advantage">
                @if(!empty($parent_pages->banner))
                    <div class="img college-banner">
                        <img src="{{ '/uploads/'.$parent_pages->banner }}">
                        <span>{{ $parent_pages->title }}</span>
                    </div>
                @endif

                {!! $page->body !!}

            </div>
        </div>
    </div>






@endsection

