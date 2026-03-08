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

    // Build preview URL directly
    if ($interactive) {
        $previewUrl = "{$registryUrl}/preview/interactive/{$component}";
    } else {
        $previewUrl = "{$registryUrl}/preview/{$component}";
    }

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

    // Generate unique ID for this preview
    $previewId = 'preview-' . uniqid();
@endphp

<div
    x-data="{
        showCode: false,
        loading: true,
        error: false,
        initIframe() {
            const iframe = this.$el.querySelector('iframe');
            if (!iframe) return;

            // Handle iframe load
            iframe.addEventListener('load', () => {
                this.loading = false;
                this.error = false;

                // Send initial dark mode
                this.sendDarkMode(iframe);
            });

            // Handle iframe error
            iframe.addEventListener('error', () => {
                this.loading = false;
                this.error = true;
            });

            // Watch for dark mode changes
            const observer = new MutationObserver(() => {
                if (!this.loading && iframe.contentWindow) {
                    this.sendDarkMode(iframe);
                }
            });

            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['class']
            });
        },
        sendDarkMode(iframe) {
            const isDark = document.documentElement.classList.contains('dark');
            if (!iframe.contentWindow) return;

            iframe.contentWindow.postMessage({
                type: 'darkMode',
                value: isDark
            }, '*');
        }
    }"
    x-init="initIframe()"
    class="my-8 rounded-lg border bg-card overflow-hidden"
    id="{{ $previewId }}"
>
    {{-- Preview Area --}}
    <div class="border-b relative">
        <div class="relative w-full" style="height: {{ $height === 'auto' ? '200px' : $height }}">
            {{-- Loading indicator --}}
            <div
                x-show="loading"
                x-transition:enter="transition-opacity duration-200"
                x-transition:leave="transition-opacity duration-200"
                x-transition:enter-start="opacity-100"
                x-transition:enter-end="opacity-0"
                x-transition:leave-start="opacity-0"
                x-transition:leave-end="opacity-100"
                class="absolute inset-0 flex items-center justify-center bg-muted/20 z-10"
            >
                <div class="flex flex-col items-center gap-3">
                    <div class="size-8 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
                    <p class="text-sm text-muted-foreground">Loading preview...</p>
                </div>
            </div>

            {{-- Error indicator --}}
            <div
                x-show="error"
                x-cloak
                class="absolute inset-0 flex items-center justify-center bg-destructive/10 z-10"
            >
                <div class="text-center">
                    <p class="text-sm text-destructive font-medium">Failed to load preview</p>
                    <button @click="window.location.reload()" class="mt-2 px-3 py-1 text-xs bg-primary text-primary-foreground rounded-md hover:bg-primary/90">
                        Retry
                    </button>
                </div>
            </div>

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
