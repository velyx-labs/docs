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
    <script defer src="https://analytics.jiordiviera.me/script.js" data-website-id="04167809-86e7-4be3-b0ca-72e2b392ee52"></script>
@endif


@viteRefresh()
<link rel="stylesheet" href="{{ vite('source/_assets/css/main.css') }}">
<script defer type="module" src="{{ vite('source/_assets/js/main.js') }}"></script>

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
