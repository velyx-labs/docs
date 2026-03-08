@props([
    'component',
    'variant' => 'default',
    'height' => 'auto',
    'controls' => true,
    'props' => [],
    'interactive' => false,
    'language' => 'php',
])

@php
    // Get registry URL from config or env
    $registryUrl = getenv('PREVIEW_REGISTRY_URL') ?: 'http://localhost:8000';

    // Build preview URL directly without token
    $previewType = $interactive ? 'interactive' : '';
    $previewUrl = "{$registryUrl}/preview/{$previewType}/{$component}";

    // Add variant and props to URL
    if ($variant !== 'default') {
        $previewUrl .= "?variant={$variant}";
    }

    $firstProp = true;
    if (!empty($props)) {
        foreach ($props as $key => $value) {
            $separator = $firstProp && ($variant === 'default') ? '?' : '&';
            $firstProp = false;

            if (is_bool($value)) {
                $previewUrl .= "{$separator}{$key}=" . ($value ? '1' : '0');
            } elseif (is_string($value)) {
                $previewUrl .= "{$separator}{$key}=" . urlencode($value);
            } else {
                $previewUrl .= "{$separator}{$key}={$value}";
            }
        }
    }
@endphp

<div x-data="{ showCode: false }" class="my-8 rounded-lg border bg-card overflow-hidden">
    {{-- Preview Area --}}
    <div class="border-b">
        <div class="relative w-full" style="height: {{ $height === 'auto' ? '200px' : $height }}">
            <iframe
                src="{{ $previewUrl }}"
                class="absolute inset-0 w-full h-full border-0 rounded-md"
                sandbox="allow-scripts allow-same-origin allow-forms allow-popups allow-modals"
                loading="lazy"
                title="Preview of {{ $component }} component"
            ></iframe>
        </div>
    </div>

    {{-- Code Section --}}
    <div>
        {{-- Code Header --}}
        <div class="flex items-center justify-between px-4 py-2 border-t bg-muted/50">
            <span class="text-sm text-muted-foreground">Code</span>
            <button
                @click="showCode = !showCode"
                class="text-sm font-medium text-foreground hover:text-primary transition-colors flex items-center gap-1"
            >
                <template x-if="showCode">
                    <span>Hide code</span>
                </template>
                <template x-if="!showCode">
                    <span>View code</span>
                </template>
                <svg
                    x-transition:enter="transition-transform duration-200"
                    x-transition:enter-start="rotate-0"
                    x-transition:enter-end="rotate-180"
                    x-transition:leave="transition-transform duration=200"
                    x-transition:leave-start="rotate-180"
                    x-transition:leave-end="rotate-0"
                    :class="{ 'rotate-180': showCode }"
                    class="w-4 h-4 transition-transform"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        {{-- Code Content --}}
        <div
            x-show="showCode"
            x-transition:enter="transition-all duration-200 ease-out"
            x-transition:enter-start="opacity-0 max-h-0"
            x-transition:enter-end="opacity-100 max-h-[800px]"
            x-transition:leave="transition-all duration-200 ease-in"
            x-transition:leave-start="opacity-100 max-h-[800px]"
            x-transition:leave-end="opacity-0 max-h-0"
            style="display: none;"
            class="overflow-hidden"
        >
            <div class="prose max-w-none relative group">
                <pre class="!m-0 p-4 bg-muted/30"><code class="language-{{ $language }}">{!! $slot !!}</code></pre>
            </div>
        </div>
    </div>
</div>
