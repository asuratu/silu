
<div class="college-nav">
    <ul>
        @foreach($alumnus_cate_list as $key=>$item)
            <li class="{{ $key == $_GET['cate'] ? 'cur' : '' }}"><a href="{{ route('alumnus', ['cate'=>$key]) }}">{{ $item }} 》</a></li>
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
