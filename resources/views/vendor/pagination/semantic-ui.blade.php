{{--  <div class="pagination clearfix">                
          <nav class="pagination__nav right clearfix">
            <a href="#" class="pagination__page"><i class="ui-arrow-left"></i></a>
            <span class="pagination__page pagination__page--current">1</span>
            <a href="#" class="pagination__page">2</a>
            <a href="#" class="pagination__page">3</a>
            <a href="#" class="pagination__page">4</a>
            <a href="#" class="pagination__page"><i class="ui-arrow-right"></i></a>
          </nav>
        </div>   --}}
@if ($paginator->hasPages())
    <div class="pagination clearfix">
        {{-- Previous Page Link --}}
        <nav class="pagination__nav right clearfix">
        @if ($paginator->onFirstPage())
            <a class="icon item disabled"> <i class="left chevron icon"></i> </a>
        @else
            <a class="icon item" href="{{ $paginator->previousPageUrl() }}" rel="prev"> <i class="left chevron icon"></i> </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="icon item disabled">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="pagination__page pagination__page--current" href="{{ $url }}">{{ $page }}</a>
                    @else
                        <a class="pagination__page" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="icon item" href="{{ $paginator->nextPageUrl() }}" rel="next"> <i class="right chevron icon"></i> </a>
        @else
            <a class="icon item disabled"> <i class="right chevron icon"></i> </a>
        @endif
    </div>
    </nav>
@endif
