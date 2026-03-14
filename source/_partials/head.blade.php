@php
    $isDocsMetaPage = \Illuminate\Support\Str::startsWith(trimPath($page->getPath()), 'docs');
    $isComponentDocPage = \Illuminate\Support\Str::startsWith(trimPath($page->getPath()), 'docs/components/');

    $defaultMetaDescription = $page->siteDescription;

    if ($isComponentDocPage && !empty($page->title)) {
        $defaultMetaDescription = $page->title . ' component documentation for ' . $page->siteName . '. Installation, usage examples, and customization details for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.';
    } elseif ($isDocsMetaPage && !empty($page->title)) {
        $defaultMetaDescription = $page->title . ' documentation for ' . $page->siteName . '. Learn how to use Laravel-first UI components, patterns, and setup guides.';
    }

    $metaTitle = $page->metaTitle ?? ($page->title ? $page->title . ' | ' . $page->siteName : $page->siteName . ' | Laravel UI Components');
    $metaDescription = $page->metaDescription ?? $page->description ?? $defaultMetaDescription;
    $metaImage = $page->metaImage ?? '/assets/images/og.png';
    $metaUrl = $page->getUrl();
    $metaImageUrl = str_starts_with($metaImage, 'http') ? $metaImage : rtrim($page->baseUrl, '/') . $metaImage;
@endphp

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="{{ $metaDescription }}">
<meta name="robots" content="index,follow">

<meta property="og:site_name" content="{{ $page->siteName }}"/>
<meta property="og:title" content="{{ $metaTitle }}"/>
<meta property="og:description" content="{{ $metaDescription }}"/>
<meta property="og:url" content="{{ $metaUrl }}"/>
<meta property="og:image" content="{{ $metaImageUrl }}"/>
<meta property="og:type" content="website"/>

<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $metaImageUrl }}">
<meta name="twitter:image:alt" content="{{ $page->siteName }}">
<meta name="twitter:card" content="summary_large_image">

@if ($page->docsearchApiKey && $page->docsearchIndexName)
    <meta name="generator" content="tighten_jigsaw_doc">
@endif

<title>{{ $metaTitle }}</title>

<link rel="home" href="{{ $page->baseUrl }}">
<link rel="canonical" href="{{ $metaUrl }}">
<link rel="icon" type="image/svg+xml" href="/assets/img/logo.svg" class="dark:hidden">
<link rel="icon" type="image/svg+xml" href="/assets/img/logo-dark.svg" class="hidden dark:block">

@stack('meta')

@if ($page->production)
    <script defer src="https://analytics.jiordiviera.me/script.js" data-website-id="04167809-86e7-4be3-b0ca-72e2b392ee52"></script>
    <meta name="algolia-site-verification"  content="3F0311C1507C6863" />
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
