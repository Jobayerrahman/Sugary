<div class="ie">
    @if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)

        <div class="flex fu _d _g _w">
            <div class="text-sm text-slate-500 gu jo">
                {!! __('Showing') !!}
                <span class="gm gz">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!} <span class="gm gz">{{ $paginator->lastItem() }}</span>
                {!! __('of') !!} <span class="gm gz">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </div>
            <nav class="flex" role="navigation" aria-label="Navigation">
                @if ($paginator->onFirstPage())
                <div class="mr-2">
                    <span class="inline-flex items-center justify-center rounded gj vm vc bg-white border border-slate-200 yd">
                        <span class="tc">{!! __('pagination.previous') !!}</span><wbr>
                        <svg class="sq o_ dd" viewBox="0 0 16 16">
                            <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                        </svg>
                    </span>
                </div>
                @else
                <div class="mr-2">
                    <button wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="inline-flex items-center justify-center rounded gj vm vc bg-white xs border border-slate-200 gz xh bd" aria-label="{{ __('pagination.previous') }}">
                        <span class="tc">{!! __('pagination.previous') !!}</span><wbr>
                        <svg class="sq o_ dd" viewBox="0 0 16 16">
                            <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z"></path>
                        </svg>
                    </button>
                </div>
                @endif
                <ul class="inline-flex text-sm gm fk bd">
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li aria-disabled="true">
                                <span class="inline-flex items-center justify-center gj me vc bg-white border border-slate-200 yt">{{ $element }}</span>
                            </li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                <li wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page{{ $page }}">
                                    @if ($page == $paginator->currentPage())
                                        <span aria-current="page">
                                            <span class="inline-flex items-center justify-center co gj me vc bg-white border border-slate-200 text-indigo-500">{{ $page }}</span>
                                        </span>
                                    @else
                                        <button wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" class="inline-flex items-center justify-center gj me vc bg-white xs border border-slate-200 gz xh" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                            {{ $page }}
                                        </button>
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
                <div class="r_">
                    @if ($paginator->hasMorePages())
                    <button wire:click="nextPage('{{ $paginator->getPageName() }}')" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" rel="next" class="inline-flex items-center justify-center rounded gj vm vc bg-white xs border border-slate-200 gz xh bd" aria-label="{{ __('pagination.next') }}">
                        <span class="tc">Next</span><wbr>
                        <svg class="sq o_ dd" viewBox="0 0 16 16">
                            <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                        </svg>
                    </button>
                    @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="inline-flex items-center justify-center rounded gj vm vc bg-white border border-slate-200 yd">
                        <span class="tc">Next</span><wbr>
                        <svg class="sq o_ dd" viewBox="0 0 16 16">
                            <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z"></path>
                        </svg>
                    </span>
                    @endif
                </div>
            </nav>
        </div>
    @endif
</div>
