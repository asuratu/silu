<div class="college-nav">
    <ul>
        @foreach($pages as $item)
            <li class="{{ in_array($item['id'], [$page_id, isset($parent_pages) ? $parent_pages->id : 0 ]) ? 'cur' : '' }}">
                <a href="{{ !isset($item['_child']) ? route('pages.show', [$item['id']]) : 'javascript:;' }}">{{ $item['title'] }}</a>
                @if(isset($item['_child']))
                    <dl>
                        @foreach($item['_child'] as $item2)
                            <dd class="{{ $item2['id'] == $page_id ? 'cur' : '' }}"><a href="{{ route('pages.show', [$item2['id']]) }}">{{ $item2['title'] }}</a></dd>
                        @endforeach
                    </dl>
                @endif
            </li>
        @endforeach
    </ul>
</div>
@section('scripts')
    <script>
        $(function () {
            $('.college-nav li>a').click(function () {
                if ($(this).siblings('dl').length > 0) {
                    $(this).siblings("dl").slideToggle();
                }
            });
            // $(window).bind('load', function () {
            //     var _index = $('.page-index').text();
            //     var _index1 = $('.page-indexs').text();
            //     $('.college-nav li').eq(_index).addClass('cur').siblings().removeClass('cur');
            //     $('.college-nav li').eq(_index).find("dd").eq(_index1).addClass('cur').siblings().removeClass('cur');
            // })
        })
    </script>
@endsection
