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

@viteRefresh()
<link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
<script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

<!-- Alpine.js -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    (function () {
        try {
            var saved = localStorage.getItem('theme');
            var systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            var isDark = saved === 'dark' || (!saved && systemDark);
            if (isDark) document.documentElement.classList.add('dark');
        } catch (e) {}
    })();
</script>
