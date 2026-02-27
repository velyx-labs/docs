<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Geist:wght@100..900&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://prismjs.com/plugins/line-numbers/prism-line-numbers.css">
        <link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" rel="stylesheet" />

        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

        <!-- Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>

    @php
        $isDocsPage = \Illuminate\Support\Str::startsWith(trimPath($page->getPath()), 'docs');
    @endphp

    <body class="flex flex-col justify-between min-h-screen bg-background text-foreground leading-normal font-sans antialiased">
        <header class="sticky top-0 z-50 w-full border-b bg-background/80 backdrop-blur-lg supports-[backdrop-filter]:bg-background/60" role="banner">
            <div class="container flex items-center h-14 max-w-screen-xl mx-auto px-4 lg:px-8">
                <div class="flex items-center gap-8">
                    <a href="/" title="{{ $page->siteName }} home" class="flex items-center gap-2 font-bold text-lg hover:text-primary transition-colors">
                        <img class="h-7 w-7" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />
                        <span>{{ $page->siteName }}</span>
                    </a>

                    <nav class="hidden md:flex items-center gap-6 text-sm font-medium" role="navigation">
                        <a href="/docs/installation" class="text-muted-foreground hover:text-foreground transition-colors">Documentation</a>
                        <a href="/docs/components" class="text-muted-foreground hover:text-foreground transition-colors">Components</a>
                        <a href="https://github.com/velyx-labs" target="_blank" rel="noopener noreferrer" class="text-muted-foreground hover:text-foreground transition-colors">GitHub</a>
                    </nav>
                </div>

                <div class="flex flex-1 justify-end items-center gap-4">
                    @if ($isDocsPage && $page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif

                    <button
                        id="dark-mode-toggle"
                        class="inline-flex items-center justify-center rounded-lg p-2 text-primary hover:bg-muted hover:text-foreground transition-all"
                        aria-label="Toggle dark mode"
                    >
                        <x-icon name="moon-01" class="moon-icon" />
                        <x-icon name="sun-01" class="sun-icon" />
                    </button>

                    <a href="/docs/installation" class="hidden sm:inline-flex items-center justify-center rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 transition-all">
                        Get Started
                    </a>
                </div>
            </div>

        </header>

        @yield('nav-toggle')

        <main role="main" class="flex-1">
            @yield('body')
        </main>

        <footer class="border-t bg-muted/50" role="contentinfo">
            <div class="container max-w-screen-xl mx-auto px-4 lg:px-8 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-2 text-sm text-muted-foreground">
                        <span>&copy; {{ date('Y') }} {{ $page->siteName }}.</span>
                        <span class="hidden sm:inline">·</span>
                        <span class="hidden sm:inline">Inspired by <a href="https://ui.shadcn.com" target="_blank" rel="noopener noreferrer" class="hover:text-foreground transition-colors">shadcn/ui</a></span>
                    </div>

                    <div class="flex items-center gap-6 text-sm text-muted-foreground">
                        <a href="https://github.com/velyx-labs" target="_blank" rel="noopener noreferrer" class="hover:text-foreground transition-colors">GitHub</a>
                        <a href="https://twitter.com/velyxdev" target="_blank" rel="noopener noreferrer" class="hover:text-foreground transition-colors">Twitter</a>
                        <a href="https://discord.gg/velyx" target="_blank" rel="noopener noreferrer" class="hover:text-foreground transition-colors">Discord</a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/prismjs/plugins/autoloader/prism-autoloader.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>

        @stack('scripts')
    </body>
</html>
