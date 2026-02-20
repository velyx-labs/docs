@props([
    'name',
    'variant' => null,
    'class' => '',
])
@php
    $base = dirname(__DIR__, 1) . '/vendor/afatmustafa/blade-hugeicons/resources/svg';

    $path = $variant
        ? $base . '/' . $variant . '/' . $name . '.svg'
        : $base . '/' . $name . '.svg';
@endphp

@if (file_exists($path))
    {!! preg_replace(
        '/<svg\b([^>]*)>/',
        '<svg$1 class="' . $class . '">',
        file_get_contents($path),
        1
    ) !!}
@endif