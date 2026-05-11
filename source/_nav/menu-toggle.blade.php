<div x-data="{ open: false }"
     x-init="$watch('open', val => document.body.classList.toggle('overflow-hidden', val))"
     @keydown.escape.window="open = false"
     @open-mobile-nav.window="open = true"
>
    {{-- Mobile Overlay --}}
    <div x-show="open"
         x-transition:enter="transition-opacity ease-in-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in-out duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="open = false"
         class="fixed inset-0 z-[60] bg-background/80 backdrop-blur-sm"
         style="display: none;"
         x-cloak
    ></div>

    {{-- Mobile Navigation --}}
    <aside x-show="open"
           x-transition:enter="transition-transform ease-in-out duration-200"
           x-transition:enter-start="-translate-x-full"
           x-transition:enter-end="translate-x-0"
           x-transition:leave="transition-transform ease-in-out duration-200"
           x-transition:leave-start="translate-x-0"
           x-transition:leave-end="-translate-x-full"
           class="fixed inset-y-0 left-0 z-[70] w-72 max-w-[85vw] overflow-y-auto no-scrollbar border-r border-border bg-background shadow-2xl transform -translate-x-full"
           x-bind:class="open ? 'translate-x-0' : '-translate-x-full'"
           style="display: none;"
           @click.stop
           x-cloak
    >
        <div class="flex items-center justify-between px-4 py-3 border-b border-border">
            <span class="font-semibold text-foreground">Navigation</span>
            <button @click="open = false"
                    class="inline-flex items-center justify-center rounded-md text-muted-foreground hover:text-foreground hover:bg-accent p-2 transition-colors">
                <x-icon name="cancel-01" class="h-5 w-5" />
            </button>
        </div>
        <div class="px-4 py-4">
            @include('_nav.menu', ['items' => $page->navigation])
            <div class="mt-4 border-t border-border pt-4">
                <a href="https://gvcjmaad.mychariow.shop/velyx-dev" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-md px-3 py-2 text-red-600 hover:bg-red-50 transition-colors">
                    <x-icons.heart class="h-4 w-4 text-red-600" />
                    Support
                </a>
            </div>
        </div>
    </aside>
</div>
