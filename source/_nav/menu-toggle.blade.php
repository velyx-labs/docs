<div x-data="{ open: false }"
     x-init="$watch('open', val => document.body.classList.toggle('overflow-hidden', val))"
     @keydown.escape.window="open = false"
>
    <button @click="open = true"
            class="lg:hidden inline-flex items-center justify-center rounded-md text-muted-foreground hover:text-foreground hover:bg-accent transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 p-2"
            aria-label="Toggle navigation"
            x-show="!open"
    >
        <svg xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

    {{-- Mobile Overlay --}}
    <div x-show="open"
         x-transition:enter="transition-opacity ease-in-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in-out duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="open = false"
         class="fixed inset-0 z-40 bg-background/80 backdrop-blur-sm lg:hidden"
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
           class="lg:hidden fixed inset-y-0 left-0 z-50 w-72 bg-background border-r border-border overflow-y-auto transform -translate-x-full"
           x-bind:class="open ? 'translate-x-0' : '-translate-x-full'"
           style="display: none;"
           @click.stop
           x-cloak
    >
        <div class="flex items-center justify-between px-4 py-3 border-b border-border">
            <span class="font-semibold text-foreground">Navigation</span>
            <button @click="open = false"
                    class="inline-flex items-center justify-center rounded-md text-muted-foreground hover:text-foreground hover:bg-accent p-2 transition-colors">
                <x-icon name="x" class="h-5 w-5" />
            </button>
        </div>
        <div class="px-4 py-4">
            @include('_nav.menu', ['items' => $page->navigation])
        </div>
    </aside>
</div>
