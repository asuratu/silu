
<div class="college-nav">
    <ul>
        @foreach($courses_list as $item)
            <li class="{{ $item->id == $course_id ? 'cur' : '' }}"><a href="{{ route('courses.show', [$item->id]) }}" class="{{ $item->status == 0 ? 'jsz' : '' }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
</div>
@section('scripts')
    <script>
        $(function () {
            $('.college-nav li>a').click(function () {
                if($(this).siblings('dl').length>0){
                    $(this).siblings("dl").slideToggle();
                }
            });
            // $(window).bind('load',function () {
            //     var _index=$('.page-index').text();
            //     var _index1=$('.page-indexs').text();
            //     $('.college-nav li').eq(_index).addClass('cur').siblings().removeClass('cur');
            //     $('.college-nav li').eq(_index).find("dd").eq(_index1).addClass('cur').siblings().removeClass('cur');
            // })
        })
    </script>
@endsection
