@if ($level === 0)
    {{-- Top-level category --}}
    <li class="mt-6 first:mt-0">
        @if ($url = is_string($item) ? $item : $item->url)
            <a href="{{ $page->url($url) }}"
                class="{{ $page->isActive($url) ? 'text-primary font-semibold' : 'text-muted-foreground hover:text-foreground' }} nav-menu__item transition-colors text-sm font-medium block px-2 py-1.5"
            >
                {{ $label }}
            </a>
        @else
            <p class="text-foreground font-semibold mb-2 px-2 text-sm">{{ $label }}</p>
        @endif

        @if (! is_string($item) && $item->children)
            <ul class="space-y-1 border-l border-border ml-3 pl-3">
                @foreach ($item->children as $childLabel => $childItem)
                    <li>
                        @if ($childUrl = is_string($childItem) ? $childItem : ($childItem->url ?? false))
                            <a href="{{ $page->url($childUrl) }}"
                                class="{{ $page->isActive($childUrl) ? 'text-primary font-medium bg-primary/5' : 'text-muted-foreground hover:text-foreground hover:bg-accent/50' }} transition-colors text-sm block px-2 py-1.5 rounded-md"
                            >
                                {{ $childLabel }}
                            </a>
                        @else
                            <span class="text-muted-foreground/60 text-sm block px-2 py-1.5 rounded-md flex items-center justify-between gap-2">
                                <span>{{ $childLabel }}</span>
                                <span class="text-[10px] font-medium bg-muted text-muted-foreground px-1.5 py-0.5 rounded">Coming soon</span>
                            </span>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
@else
    {{-- Nested levels (if needed in future) --}}
    <li class="pl-2">
        @if ($url = is_string($item) ? $item : $item->url)
            <a href="{{ $page->url($url) }}"
                class="{{ $page->isActive($url) ? 'text-primary font-medium bg-primary/5' : 'text-muted-foreground hover:text-foreground hover:bg-accent/50' }} transition-colors text-sm block px-2 py-1.5 rounded-md"
            >
                {{ $label }}
            </a>
        @else
            <p class="nav-menu__item text-muted-foreground text-sm">{{ $label }}</p>
        @endif

        @if (! is_string($item) && $item->children)
            @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
        @endif
    </li>
@endif
