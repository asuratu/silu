@extends('home.layouts.app')

@section('title', '搜索结果')

@section('content')

    <div class="search-con">
        <div class="wrapper">
            <h2>搜索结果</h2>
            <h3>搜索关键词：<span>{{ $keywords ?? null }}</span></h3>
            @if(!empty($data))
                <ul>
                    @foreach($data as $item)
                        <li>
                            <h5><a href="{{ $item['url'] }}">{{ $item['url_content'] }}</a></h5>
                            <p>{{ $item['url_intro'] }}</p>
                        </li>
                    @endforeach
                </ul>

                {!! $data->appends(['keywords' => $keywords])->links() !!}
            @endif
        </div>
    </div>

@endsection