@php
    $navigation = require('navigation.php');
    $components = $navigation['Components']['children'] ?? [];
@endphp

<div class="not-prose grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 mt-8">
    @foreach($components as $name => $url)
    <a href="{{ url($url) }}" class="group relative rounded-lg border p-4 hover:bg-muted/50 transition-colors block">
        <p class="text-sm font-medium">{{ $name }}</p>
    </a>
    @endforeach
</div>
