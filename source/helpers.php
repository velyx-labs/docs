<?php

use Illuminate\Support\Str;

function getAdjacentPages($page)
{
    $navigation = $page->navigation;
    $currentPagePath = trimPath($page->getPath());
    $flatNav = [];

    // Flatten navigation into a linear array
    foreach ($navigation as $sectionTitle => $section) {
        if (isset($section['url'])) {
            $flatNav[] = ['url' => $section['url'], 'title' => $sectionTitle];
        }
        if (isset($section['children'])) {
            foreach ($section['children'] as $title => $url) {
                $flatNav[] = ['url' => $url, 'title' => $title];
            }
        }
    }

    // Find current page index
    $currentIndex = null;
    foreach ($flatNav as $index => $item) {
        if (trimPath($item['url']) === $currentPagePath) {
            $currentIndex = $index;
            break;
        }
    }

    $prev = null;
    $next = null;

    if ($currentIndex !== null) {
        if ($currentIndex > 0) {
            $prev = $flatNav[$currentIndex - 1];
        }
        if ($currentIndex < count($flatNav) - 1) {
            $next = $flatNav[$currentIndex + 1];
        }
    }

    return [
        'prev' => $prev,
        'next' => $next,
    ];
}
