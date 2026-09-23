@if ($paginator->hasPages())
    <div class="join">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="join-item btn btn-disabled">
                @lang('pagination.previous')
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" 
               class="join-item btn">
                @lang('pagination.previous')
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" 
               class="join-item btn">
                @lang('pagination.next')
            </a>
        @else
            <button class="join-item btn btn-disabled">
                @lang('pagination.next')
            </button>
        @endif

    </div>
@endif