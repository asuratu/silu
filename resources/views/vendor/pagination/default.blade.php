@if ($paginator->hasPages())
    <div class="page">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="page-prev">上一页</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="page-prev">上一页</a>
        @endif

            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span>{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span>{{ $page }}</span>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="page-next">下一页</a>
            @else
                <a class="page-next">下一页</a>
            @endif
    </div>
@endif
