@extends('home.layouts.app')

@section('title', $seos->isEmpty() ? '校友平台' : $seos[0]->title )

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
            <img src="/images/homei.png">
            <a href="{{ route('/') }}">首页</a>
            <img src="/images/jt.png">
            <a href="{{ route('alumnus', ['cate'=>$alumnu->cate_id]) }}">{{ $alumnus_cates[$alumnu->cate_id] }}</a>
            <img src="/images/jt.png">
            <span>{{ $alumnu->title }}</span>
        </div>
    </div>
    <div class="alumni-detail">
        <div class="wrapper">
            <div class="sy-tit">
                <h2>{{ $alumnu->title }}</h2>
                <img src="/images/titbg.png">
            </div>
            <div class="editor">
                {!! $alumnu->body !!}
            </div>
            <div class="page-local clearfix">
                @if($prev_page->isEmpty())
                    <a class="fl textover">上一篇：暂无</a>

                @else
                    <a href="{{ route('alumnus.show', [$prev_page[0]->id]) }}" class="fl textover">上一篇：{{ $prev_page[0]->title }}</a>
                @endif

                @if($next_page->isEmpty())
                    <a class="fr textover">下一篇：暂无</a>

                @else
                    <a href="{{ route('alumnus.show', [$next_page[0]->id]) }}" class="fr textover">下一篇：{{ $next_page[0]->title }}</a>
                @endif
            </div>
        </div>

    </div>
@endsection

