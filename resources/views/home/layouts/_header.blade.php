<div class="header">
    <div class="wrapper clearfix">
        <div class="logo fl"><a href="{{ route('/') }}"><img src="/images/logonn.png"></a></div>
        <div class="nav fr">
            <img src="/images/home.png" class="home">
            <ul class="clearfix">
                <li class="{{ Route::currentRouteName() == '/' ? "cur" : "" }}"><a href="{{ route('/') }}">首页</a></li>
                <li class="{{ Route::currentRouteName() == 'abouts' ? "cur" : "" }}">
                    <a href="{{ route('pages.show', [$pages[0]['id']]) }}">行知丝路研究院</a>
                    <dl>
                        @foreach($pages as $item)
                            <dd>
                                <a href="{{ !isset($item['_child']) ? route('pages.show', [$item['id']]) : 'javascript:;' }}">{{ $item['title'] }}</a>
                                @if(isset($item['_child']))
                                    <div class="sanji">
                                        @foreach($item['_child'] as $item2)
                                            <a href="{{ route('pages.show', [$item2['id']]) }}">{{ $item2['title'] }}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </dd>
                        @endforeach
                    </dl>
                </li>
                <li class="{{ in_array(Route::currentRouteName(), ['courses', 'courses.show']) ? "cur" : "" }}">
                    <a href="{{ route('courses') }}">课程介绍</a>
                    <dl>
                        @foreach($courses_list as $item)
                            <dd><a href="{{ route('courses.show', [$item->id]) }}"
                                   class="{{ $item->status == 0 ? 'jsz' : '' }}">{{ $item->name }}</a></dd>
                        @endforeach
                    </dl>
                </li>
                <li class="{{ Route::currentRouteName() == 'teachers' ? "cur" : "" }}"><a
                            href="{{ route('teachers') }}">师资力量</a></li>
                <!--<li class="{{ Route::currentRouteName() == 'signs' ? "cur" : "" }}"><a
                            href="{{ route('signs') }}">在线报名</a></li>-->
                <li class="{{ in_array(Route::currentRouteName(), ['alumnus', 'alumnus.show']) ? "cur" : "" }}">
                    <a href="{{ route('alumnus') }}">校友平台</a>
                    <dl>
                        @foreach($alumnus_cate_list as $key=>$item)
                            <dd><a href="{{ route('alumnus', ['cate'=>$key]) }}">{{ $item }}</a></dd>
                        @endforeach
                    </dl>
                </li>
                <li class="{{ Route::currentRouteName() == 'contacts' ? "cur" : "" }}"><a
                            href="{{ route('contacts') }}">联系我们</a></li>
            </ul>
        </div>
        <div class="san fr">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<div class="new-header">
    <div class="new-header-top">
        <div class="wrapper clearfix">
            <div class="logo fl"><a href="{{ route('/') }}"><img src="/images/logon.png"></a></div>
             <div class="fl index-txt">
                    <a href="{{ route('signs') }}">在线报名</a>
                    <a href="{{ route('pages.show', [$pages[0]['id']]) }}">行知丝路研究院</a>
                    <a href="{{ route('courses') }}">课程介绍</a>
                    <a href="{{ route('courses') }}">学员登录</a>
                </div>
            <div class="search fr clearfix">
            	
                <form class="clearfix" method="get" action="{{ route('search') }}">
                    <input type="text" placeholder="" name="keywords" value="{{ $keywords or null }}">
                    <input type="submit">
                </form>
               
            </div>
        </div>
    </div>
    <div class="new-nav">
        <div class="wrapper">
            <ul class="clearfix">
                <li class="{{ Route::currentRouteName() == '/' ? "cur" : "" }}"><a href="{{ route('/') }}">首页</a></li>
                <li class="{{ Route::currentRouteName() == 'pages.show' ? "cur" : "" }}">
                    <a href="{{ route('pages.show', [$pages[0]['id']]) }}">行知丝路研究院</a>
                    <dl>
                        @foreach($pages as $item)
                            <dd><a href="{{ route('pages.show', [$item['id']]) }}">{{ $item['title'] }}</a></dd>
                        @endforeach
                    </dl>
                </li>
                <li class="{{ Route::currentRouteName() == 'courses' ? "cur" : "" }}">
                    <a href="{{ route('courses') }}">课程介绍</a>
                    <dl>
                        @foreach($courses_list as $item)
                            <dd><a href="{{ route('courses.show', [$item->id]) }}"
                                   class="{{ $item->status == 0 ? 'jsz' : '' }}">{{ $item->name }}</a></dd>
                        @endforeach
                    </dl>
                </li>
                <li class="{{ Route::currentRouteName() == 'teachers' ? "cur" : "" }}"><a
                            href="{{ route('teachers') }}">师资力量</a></li>
                <li class="{{ Route::currentRouteName() == 'signs' ? "cur" : "" }}"><a
                            href="{{ route('signs') }}">在线报名</a></li>
                <li class="{{ Route::currentRouteName() == 'alumnus' ? "cur" : "" }}">
                    <a href="{{ route('alumnus') }}">校友平台</a>
                    <dl>
                        @foreach($alumnus_cate_list as $key=>$item)
                            <dd><a href="{{ route('alumnus', ['cate'=>$key]) }}">{{ $item }}</a></dd>
                        @endforeach
                    </dl>
                </li>
                <li class="{{ Route::currentRouteName() == 'contacts' ? "cur" : "" }}"><a
                            href="{{ route('contacts') }}">联系我们</a></li>
            </ul>
        </div>
    </div>
</div>


