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

        <link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" rel="stylesheet" />

        @viteRefresh()
        <link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
        <script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-muted text-foreground leading-normal font-sans antialiased">
        <header class="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60" role="banner">
            <div class="container flex items-center h-16 max-w-screen-2xl mx-auto px-4 lg:px-8">
                <div class="flex items-center gap-6">
                    <a href="/" title="{{ $page->siteName }} home" class="flex items-center gap-2 font-bold text-xl hover:text-primary transition">
                        <img class="h-8 w-8" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />
                        <span>{{ $page->siteName }}</span>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                </div>
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="flex-1">
            @yield('body')
        </main>

        <footer class="border-t bg-background" role="contentinfo">
            <div class="container max-w-screen-2xl mx-auto px-4 lg:px-8 py-6">
                <div class="flex flex-col md:flex-row justify-center items-center gap-2 text-sm text-muted-foreground">
                    <p>
                        &copy; {{ date('Y') }} {{ $page->siteName }}. Built with
                        <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten" class="hover:text-primary underline-offset-4 hover:underline">Jigsaw</a>
                        and
                        <a href="https://tailwindcss.com" title="Tailwind CSS" class="hover:text-primary underline-offset-4 hover:underline">Tailwind CSS</a>.
                    </p>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/prismjs/plugins/autoloader/prism-autoloader.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>

        @stack('scripts')
    </body>
</html>
