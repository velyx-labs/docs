@php
    $hasSearch = $isDocsPage && $page->docsearchApiKey && $page->docsearchIndexName;
@endphp

<header class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/80" style="--header-height: 4rem;">
    <div class="container-wrapper px-4 lg:px-6">
        <div class="flex h-16 items-center gap-4">
            <div class="flex min-w-0 items-center gap-4 lg:gap-8">
                <a
                    href="/"
                    title="{{ $page->siteName }} home"
                    class="group flex items-center gap-2.5 font-bold text-foreground transition-colors hover:text-primary"
                >
                    <img
                        class="h-7 w-7 transition-transform duration-300 group-hover:rotate-6"
                        src="/assets/img/logo.svg"
                        alt="{{ $page->siteName }} logo"
                        width="28"
                        height="28"
                    />
                    <span class="text-[15px] tracking-tight sm:text-[17px]">{{ $page->siteName }}</span>
                    <span class="ml-0.5 hidden rounded-full border border-border bg-muted/70 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-widest text-muted-foreground sm:inline-flex">
                        Copy. Adapt. Ship.
                    </span>
                </a>

                <nav class="hidden items-center gap-1 text-sm font-medium md:flex" role="navigation" aria-label="Main navigation">
                    @php
                        $navLinks = [
                            ['href' => '/docs/installation', 'label' => 'Get Started'],
                            ['href' => '/docs/components',   'label' => 'Component Library'],
                        ];
                    @endphp

                    @foreach ($navLinks as $link)
                        <a
                            href="{{ $link['href'] }}"
                            class="rounded-md px-3 py-1.5 text-muted-foreground transition-colors hover:bg-muted/60 hover:text-foreground"
                        >
                            {{ $link['label'] }}
                        </a>
                    @endforeach

                    <a
                        href="https://github.com/velyx-labs"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-1.5 rounded-md px-3 py-1.5 text-muted-foreground transition-colors hover:bg-muted/60 hover:text-foreground"
                        aria-label="GitHub (opens in new tab)"
                    >
                        <x-icons.github class="h-4 w-4 text-foreground" />
                        GitHub
                    </a>
                </nav>
            </div>

            <div class="ml-auto flex items-center gap-2 md:flex-1 md:justify-end">
                @if ($hasSearch)
                    <div class="hidden w-full flex-1 md:flex md:w-auto md:flex-none">
                        @include('_nav.search-input')
                    </div>
                @endif

                @if ($isDocsPage)
                    <button
                        type="button"
                        class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-border bg-background text-muted-foreground transition-colors hover:bg-muted hover:text-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 md:hidden"
                        aria-label="Toggle navigation"
                        onclick="window.dispatchEvent(new CustomEvent('open-mobile-nav'))"
                    >
                        <x-icon name="menu-01" class="h-4 w-4" />
                    </button>
                @endif

                <button
                    type="button"
                    onclick="
                        const html = document.documentElement;
                        html.classList.toggle('dark');
                        localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
                    "
                    class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-border bg-background text-muted-foreground transition-colors hover:bg-muted hover:text-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring"
                    aria-label="Toggle dark mode"
                >
                    <x-icon name="sun-01" class="sun-icon h-[1.2rem] w-[1.2rem] rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0" />
                    <x-icon name="moon-01" class="moon-icon absolute h-[1.2rem] w-[1.2rem] rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100" />
                </button>

                <a
                    href="/docs/installation"
                    class="inline-flex items-center gap-1.5 rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground shadow-sm ring-1 ring-primary/20 transition-all hover:bg-primary/90 hover:shadow-md hover:ring-primary/40 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hidden md:inline-flex"
                >
                    Start Building
                    <x-icon name="arrow-right-02" class="h-3.5 w-3.5" />
                </a>

                <a
                    href="/docs/installation"
                    class="inline-flex items-center gap-1 rounded-lg bg-primary px-2.5 py-1.5 text-[11px] font-semibold text-primary-foreground shadow-sm transition-all hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 md:hidden"
                >
                    <span>Start</span>
                    <x-icon name="arrow-right-02" class="h-3.5 w-3.5" />
                </a>
            </div>
        </div>

        {{-- Recherche mobile (uniquement sur les pages docs) --}}
        @if ($hasSearch)
            <div class="pb-2 md:hidden">
                @include('_nav.search-input')
            </div>
        @endif
    </div>
</header>

{{-- Script d'initialisation du thème (à placer idéalement dans le <head>) --}}
<script>
    (function () {
        const theme = localStorage.getItem('theme');
        if (theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    })();
</script>
