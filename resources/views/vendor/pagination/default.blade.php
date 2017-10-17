@if ($paginator->hasPages())
    <div class="row">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="disabled"><span>&laquo;&laquo;</span></div>
        @else
            <div class=""><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;&laquo;</a></div>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="disabled"><span>{{ $element }}</span></div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class="active"><span>{{ $page }}</span></div>
                    @else
                        <div class=""><a href="{{ $url }}">{{ $page }}</a></div>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class=""><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;&raquo;</a></div>
        @else
            <div class="disabled"><span>&raquo;&raquo;</span></div>
        @endif
    </div>
@endif
