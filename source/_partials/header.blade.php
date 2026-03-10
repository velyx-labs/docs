{{--
    Header Component — Refactorisé & Amélioré
    - Séparation claire mobile / desktop
    - DocSearch Algolia intégré proprement
    - Dark mode toggle inline (pas de composant externe)
    - Badge "Beta" + navigation cohérente
--}}

@php
    $hasSearch = $isDocsPage && $page->docsearchApiKey && $page->docsearchIndexName;
@endphp

<header
    class="header-root sticky top-0 z-50 w-full"
    role="banner"
>
    <div class="header-backdrop absolute inset-0 border-b border-border/60 bg-background/80 backdrop-blur-xl supports-[backdrop-filter]:bg-background/60" aria-hidden="true"></div>
    <div class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-gradient-to-r from-transparent via-primary/20 to-transparent" aria-hidden="true"></div>

    <div class="relative mx-auto flex max-w-screen-xl flex-col px-4 lg:px-8">

        {{-- ═══════════════════════════════════════════
             DESKTOP LAYOUT (md+)
        ═══════════════════════════════════════════ --}}
        <div class="hidden h-16 md:flex md:items-center md:justify-between">

            {{-- Gauche : Logo + Nav --}}
            <div class="flex items-center gap-8">
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
                    <span class="text-[17px] tracking-tight">{{ $page->siteName }}</span>
                    <span class="ml-0.5 rounded-full border border-border bg-muted/70 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-widest text-muted-foreground">
                        Beta
                    </span>
                </a>

                <nav class="flex items-center gap-1 text-sm font-medium" role="navigation" aria-label="Main navigation">
                    @php
                        $navLinks = [
                            ['href' => '/docs/installation', 'label' => 'Documentation'],
                            ['href' => '/docs/components',   'label' => 'Components'],
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.385-1.335-1.755-1.335-1.755-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.295 24 12c0-6.63-5.37-12-12-12"/>
                        </svg>
                        GitHub
                    </a>
                </nav>
            </div>

            {{-- Droite : Recherche + Dark Mode + CTA --}}
            <div class="flex items-center gap-3">

                @if ($hasSearch)
                    <div class="w-60 xl:w-72">
                        @include('_nav.search-input')
                    </div>
                @endif

                {{-- Dark Mode Toggle inline --}}
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
                    {{-- Icône soleil (mode light) --}}
                    <x-icon name="sun-01" class="sun-icon h-[1.2rem] w-[1.2rem] rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0" />
                    <x-icon name="moon-01" class="moon-icon absolute h-[1.2rem] w-[1.2rem] rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100" />
              
                </button>

                <a
                    href="/docs/installation"
                    class="inline-flex items-center gap-1.5 rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground shadow-sm ring-1 ring-primary/20 transition-all hover:bg-primary/90 hover:shadow-md hover:ring-primary/40 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                >
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- ═══════════════════════════════════════════
             MOBILE LAYOUT (< md)
        ═══════════════════════════════════════════ --}}
        <div class="flex items-center justify-between py-2 md:hidden">

            {{-- Logo --}}
            <a
                href="/"
                title="{{ $page->siteName }} home"
                class="flex items-center gap-2 font-bold text-[17px] tracking-tight text-foreground transition-colors hover:text-primary"
            >
                <img
                    class="h-7 w-7"
                    src="/assets/img/logo.svg"
                    alt="{{ $page->siteName }} logo"
                    width="28"
                    height="28"
                />
                <span>{{ $page->siteName }}</span>
            </a>

            {{-- Actions mobiles --}}
            <div class="flex items-center gap-1.5">

                {{-- Dark Mode Toggle inline (mobile) --}}
                <button
                    type="button"
                    onclick="
                        const html = document.documentElement;
                        html.classList.toggle('dark');
                        localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
                    "
                    class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-border bg-background text-muted-foreground transition-colors hover:bg-muted hover:text-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring"
                    aria-label="Toggle dark mode"
                >
                    <x-icon name="sun-01" class="sun-icon h-[1.2rem] w-[1.2rem] rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0" />
                    <x-icon name="moon-01" class="moon-icon absolute h-[1.2rem] w-[1.2rem] rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100" />
                
                </button>

                <a
                    href="/docs/installation"
                    class="inline-flex items-center rounded-lg bg-primary px-3 py-1.5 text-xs font-semibold text-primary-foreground shadow-sm transition-all hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                >
                    Get Started
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