@if($paginator->hasPages())
    <div class="pagination-wrapper centred">
        <nav>
            <ul class="pagination pagination-rounded justify-content-end">
                {{-- Previous Page Link --}}
                @if($paginator->onFirstPage())
                    <li class="page-link" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                            aria-label="@lang('pagination.previous')">&lsaquo;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if(is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if(is_array($element))
                        @foreach($element as $page => $url)
                            @if($page == $paginator->currentPage())
                                <li class="page-item active"><a href="#" class="active">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                            aria-label="@lang('pagination.next')">&rsaquo;</a>
                    </li>
                @else
                    <li class="fas fa-angle-right" aria-disabled="true" aria-label="@lang('pagination.next')">
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif

