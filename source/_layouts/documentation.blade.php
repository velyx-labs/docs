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

<section class="documentation-shell">
    <div class="container-wrapper documentation-grid">
        {{-- Sidebar Navigation --}}
        <nav class="documentation-sidebar" aria-label="Documentation navigation">
            <div class="documentation-sidebar__inner">
                @include('_nav.menu', ['items' => $page->navigation])
            </div>
        </nav>

        {{-- Main Content --}}
        <section class="documentation-main p-4">
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

            <article
                class="documentation-content DocSearch-content prose prose-zinc dark:prose-invert"
                v-pre
                data-page-content="{{ htmlspecialchars($rawMarkdown) }}"
            >
                @yield('content')
            </article>
        </section>

        {{-- Table of Contents --}}
        <aside class="documentation-toc table-of-contents" aria-label="On this page">
            <x-table-of-contents />
        </aside>
    </div>
</section>
@endsection
