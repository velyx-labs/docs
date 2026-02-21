@props([
    'name',
    'variant' => null,
    'class' => 'size-5',
])
@php
    $base = dirname(__DIR__, 1) . '/vendor/afatmustafa/blade-hugeicons/resources/svg';

    $path = $variant
        ? $base . '/' . $variant . '/' . $name . '.svg'
        : $base . '/' . $name . '.svg';
@endphp

@if (file_exists($path))
    @php
        $svg = file_get_contents($path);
        // Replace hardcoded colors with currentColor for dark mode support
        $svg = preg_replace('/stroke="black"/i', 'stroke="currentColor"', $svg);
        $svg = preg_replace('/stroke="#000000"/i', 'stroke="currentColor"', $svg);
        $svg = preg_replace('/stroke="#000"/i', 'stroke="currentColor"', $svg);
        $svg = preg_replace('/fill="black"/i', 'fill="currentColor"', $svg);
        $svg = preg_replace('/fill="#000000"/i', 'fill="currentColor"', $svg);
        $svg = preg_replace('/fill="#000"/i', 'fill="currentColor"', $svg);
        // Add class to svg
        $svg = preg_replace(
            '/<svg\b([^>]*)>/',
            '<svg$1 class="' . $class . '">',
            $svg,
            1
        );
    @endphp
    {!! $svg !!}
@endif
