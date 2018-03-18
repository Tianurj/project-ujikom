{{--  <div class="pagination clearfix">                
          <nav class="pagination__nav right clearfix">
            <a href="#" class="pagination__page"><i class="ui-arrow-left"></i></a>
            <span class="pagination__page pagination__page--current">1</span>
            <a href="#" class="pagination__page">2</a>
            <a href="#" class="pagination__page">3</a>
            <a href="#" class="pagination__page">4</a>
            <a href="#" class="pagination__page"><i class="ui-arrow-right"></i></a>
          </nav>
        </div>  --}}
@if ($paginator->hasPages())
    <div class="pagination clearfix">
        <nav class="pagination__nav right clearfix">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <a href="#" class="pagination__page disabled"><i class="ui-arrow-left"></i></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination__page"><i class="ui-arrow-left"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <span class="pagination__page pagination__page--current">{{ $page }}</span>
                    @else
                       <a href="{{ $url }}" class="pagination__page">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="pagination__page"><i class="ui-arrow-right"></i></a>
            {{--  <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>  --}}
        @else
            {{--  <li class="disabled"><span>&raquo;</span></li>  --}}
            <a href="#" class="pagination__page"><i class="ui-arrow-right"></i></a>
        @endif
        </div>
@endif
