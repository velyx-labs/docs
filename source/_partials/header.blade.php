<header class="sticky top-0 z-50 w-full border-b bg-background/80 backdrop-blur-lg supports-[backdrop-filter]:bg-background/60 relative after:content-[''] after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-gradient-to-r after:from-transparent after:via-border after:to-transparent" role="banner">
    <div class="container flex flex-col gap-2 max-w-screen-xl mx-auto px-4 lg:px-8 py-1.5 md:py-0 md:h-16 md:flex-row md:items-center md:justify-between">
        <div class="flex items-center justify-between md:justify-start gap-4 md:gap-8">
            <a href="/" title="{{ $page->siteName }} home" class="flex items-center gap-2 font-bold text-lg hover:text-primary transition-colors">
                <img class="h-7 w-7" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />
                <span>{{ $page->siteName }}</span>
                <span class="ml-1 rounded-full border border-border bg-muted/60 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-muted-foreground">Beta</span>
            </a>

            <nav class="hidden md:flex items-center gap-6 text-sm font-medium" role="navigation">
                <a href="/docs/installation" class="text-muted-foreground hover:text-foreground transition-colors">Documentation</a>
                <a href="/docs/components" class="text-muted-foreground hover:text-foreground transition-colors">Components</a>
                <a href="https://github.com/velyx-labs" target="_blank" rel="noopener noreferrer" class="text-muted-foreground hover:text-foreground transition-colors">GitHub</a>
            </nav>

            <div class="flex items-center gap-2 md:hidden">
                <button
                    class="dark-mode-toggle inline-flex items-center justify-center rounded-lg p-2 text-primary hover:bg-muted hover:text-foreground transition-all"
                    aria-label="Toggle dark mode"
                >
                    <x-icon name="sun-01" class="sun-icon h-[1.2rem] w-[1.2rem] rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0" />
                    <x-icon name="moon-01" class="moon-icon absolute h-[1.2rem] w-[1.2rem] rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100" />
                </button>

                <a href="/docs/installation" class="inline-flex items-center justify-center rounded-lg bg-primary px-3 py-1.5 text-xs font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 transition-all">
                    Get Started
                </a>
            </div>
        </div>

        <div class="flex items-center gap-3 md:flex-1 md:justify-end">
            @if ($isDocsPage && $page->docsearchApiKey && $page->docsearchIndexName)
                <div class="w-full md:w-auto md:max-w-md">
                    @include('_nav.search-input')
                </div>
            @endif

            <div class="hidden md:flex items-center gap-4">
                <button
                    class="dark-mode-toggle inline-flex items-center justify-center rounded-lg p-2 text-primary hover:bg-muted hover:text-foreground transition-all"
                    aria-label="Toggle dark mode"
                >
                    <x-icon name="sun-01" class="sun-icon h-[1.2rem] w-[1.2rem] rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0" />
                    <x-icon name="moon-01" class="moon-icon absolute h-[1.2rem] w-[1.2rem] rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100" />
                </button>

                <a href="/docs/installation" class="hidden sm:inline-flex items-center justify-center rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 transition-all">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</header>
