<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => env('APP_URL', 'http://localhost:8000'),
    'production' => false,
    'siteName' => 'Velyx',
    'siteDescription' => 'Deliver beautiful UI components to your Laravel projects',

    // Algolia DocSearch credentials
    'docsearchAppId' => env('DOCSEARCH_APP_ID'),
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    // navigation menu
    'navigation' => require_once ('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/'.trimPath($path);
    },
];
