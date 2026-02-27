@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
    @php
    // Read the original markdown file directly for the "Copy page" feature
    $rawMarkdown = '';

    // Get the URL and extract just the path
    $url = $page->getUrl();
    $path = parse_url($url, PHP_URL_PATH) ?: $url;

    // Build the source file path from the path
    // Path like /docs/installation -> source/docs/installation.md
    if (!empty($path)) {
        $sourcePath = __DIR__ . '/../source/' . ltrim($path, '/') . '.md';

        if (file_exists($sourcePath)) {
            $content = file_get_contents($sourcePath);
            // Remove YAML frontmatter
            $rawMarkdown = preg_replace('/^---[\s\S]*?---\s*/', '', $content);
        }
    }
    @endphp

<section class="container max-w-screen-xl mx-auto px-4 lg:px-8 py-8 md:py-12">
    <div class="flex gap-8 lg:gap-12">
        {{-- Sidebar Navigation --}}
        <nav class="hidden lg:block w-60 flex-shrink-0 sticky top-14 self-start">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        {{-- Main Content --}}
        <main class="flex-1 min-w-0">
            {{-- Page Header with Copy Button --}}
            @if($page->title)
                @php
                $adjacent = getAdjacentPages($page);
                @endphp
                <x-page-header
                    :title="$page->title"
                    :description="$page->description"
                    :prevLink="$adjacent['prev'] ? ('/' . $adjacent['prev']['url']) : null"
                    :prevTitle="$adjacent['prev']['title'] ?? null"
                    :nextLink="$adjacent['next'] ? ('/' . $adjacent['next']['url']) : null"
                    :nextTitle="$adjacent['next']['title'] ?? null"
                />
            @endif

            {{-- Content wrapper with markdown source for copy --}}
            <div
                class="DocSearch-content prose prose-zinc dark:prose-invert max-w-none"
                v-pre
                data-page-content="{{ htmlspecialchars($rawMarkdown) }}"
            >
                @yield('content')
            </div>
        </main>

        {{-- Table of Contents --}}
        <aside class="hidden xl:block w-48 flex-shrink-0 sticky top-14 self-start table-of-contents">
            <x-table-of-contents />
        </aside>
    </div>
</section>
@endsection
