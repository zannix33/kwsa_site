@if (is_object($paginator) && get_class($paginator) == 'Illuminate\Pagination\LengthAwarePaginator')
    @if ($paginator->lastPage() > 1)
        <div class="pagination-module">
            <ul>
                @if ($paginator->previousPageUrl())
                    @if (!empty($appends))
                        <li class="prev"><a href="{{ $paginator->previousPageUrl() }}{{$appends}}">Previous</a></li>
                    @else
                        <li class="prev"><a href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
                    @endif
                    <li class="prev"><a href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
                @else
                    <li class="prev disabled"><a href="#">Previous</a></li>
                @endif

                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                    @if (paginatorFrom($paginator, 7) < $i && $i < paginatorTo($paginator, 7))
                        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                            @if (!empty($appends))
                                <a href="{{ $paginator->url($i) }}{{$appends}}">{{ $i }}</a>
                            @else
                                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                            @endif
                        </li>
                    @endif
                @endfor

                @if ($paginator->nextPageUrl())
                    @if (!empty($appends))
                        <li class="prev"><a href="{{ $paginator->nextPageUrl() }}{{$appends}}">Next</a></li>
                    @else
                        <li class="prev"><a href="{{ $paginator->nextPageUrl() }}">Next</a></li>
                    @endif
                @else
                    <li class="prev disabled"><a href="#">Next</a></li>
                @endif
            </ul>
        </div>
    @endif
@endif
