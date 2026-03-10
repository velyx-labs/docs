@props([
    'component',
    'variant' => 'default',
    'height' => 'auto',
    'controls' => true,
    'props' => [],
    'language' => 'php',
])

@php
    $registryUrl = getenv('PREVIEW_REGISTRY_URL') ?: 'http://localhost:8000';
    $previewUrl = "{$registryUrl}/preview/{$component}";

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

    $previewId = 'preview-' . uniqid();
    $previewHeight = $height === 'auto' ? '280px' : $height;
    $previewLabel = str($component)->replace('-', ' ')->title();
@endphp

<div
    x-data="{
        showCode: false,
        loading: true,
        error: false,
        fullscreen: false,
        initIframe() {
            this.bindIframe(this.$refs.inlineFrame);

            const observer = new MutationObserver(() => {
                this.sendDarkMode(this.$refs.inlineFrame);
                this.sendDarkMode(this.$refs.fullscreenFrame);
            });

            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['class']
            });
        },
        bindIframe(iframe) {
            if (!iframe) return;

            iframe.addEventListener('load', () => {
                this.loading = false;
                this.error = false;
                this.sendDarkMode(iframe);
            });

            iframe.addEventListener('error', () => {
                this.loading = false;
                this.error = true;
            });
        },
        sendDarkMode(iframe) {
            const isDark = document.documentElement.classList.contains('dark');
            if (!iframe.contentWindow) return;

            iframe.contentWindow.postMessage({
                type: 'darkMode',
                value: isDark
            }, '*');
        },
        toggleFullscreen() {
            this.fullscreen = !this.fullscreen;

            this.$nextTick(() => {
                if (this.fullscreen && this.$refs.fullscreenFrame) {
                    this.bindIframe(this.$refs.fullscreenFrame);
                    this.sendDarkMode(this.$refs.fullscreenFrame);
                }
            });
        },
        reloadPreview(frame = 'inline') {
            const iframe = frame === 'fullscreen' ? this.$refs.fullscreenFrame : this.$refs.inlineFrame;
            if (!iframe) return;

            this.loading = true;
            this.error = false;
            iframe.src = iframe.src;
        }
    }"
    x-init="initIframe()"
    @keydown.escape.window="if (fullscreen) fullscreen = false"
    class="my-8 overflow-hidden rounded-[1.25rem] border border-border/70 bg-card shadow-[0_24px_80px_-48px_rgba(15,23,42,0.6)]"
    id="{{ $previewId }}"
>
    @if ($controls)
        <div class="flex items-center justify-between gap-3 border-b border-border/70 bg-muted/35 px-4 py-3">
            <div class="min-w-0">
                <div class="flex items-center gap-2">
                    <span class="inline-flex h-2.5 w-2.5 rounded-full bg-emerald-500/80"></span>
                    <p class="truncate text-sm font-medium text-foreground">{{ $previewLabel }}</p>
                    @if ($variant !== 'default')
                        <span class="inline-flex items-center rounded-full border border-border/70 bg-background/80 px-2 py-0.5 text-[11px] font-medium uppercase tracking-[0.18em] text-muted-foreground">
                            {{ $variant }}
                        </span>
                    @endif
                </div>
                <p class="mt-1 text-xs text-muted-foreground">
                    Live preview rendered from the registry in an isolated iframe.
                </p>
            </div>

            <div class="flex items-center gap-2">
                <a
                    href="{{ $previewUrl }}"
                    target="_blank"
                    rel="noreferrer"
                    class="inline-flex items-center rounded-md border border-border/70 bg-background/80 px-3 py-1.5 text-xs font-medium text-foreground transition-colors hover:bg-muted"
                >
                    Open preview
                </a>
                <button
                    type="button"
                    @click="toggleFullscreen()"
                    class="inline-flex items-center rounded-md bg-primary px-3 py-1.5 text-xs font-medium text-primary-foreground transition-colors hover:bg-primary/90"
                >
                    Full screen
                </button>
            </div>
        </div>
    @endif

    <div class="border-b border-border/70 bg-[linear-gradient(180deg,hsl(var(--muted)/0.45),transparent_35%)]">
        <div class="relative w-full overflow-hidden bg-background" style="height: {{ $previewHeight }}">
            <div
                x-show="loading"
                x-transition:enter="transition-opacity duration-200"
                x-transition:leave="transition-opacity duration-200"
                x-transition:enter-start="opacity-100"
                x-transition:enter-end="opacity-0"
                x-transition:leave-start="opacity-0"
                x-transition:leave-end="opacity-100"
                class="absolute inset-0 z-10 flex items-center justify-center bg-background/88 backdrop-blur-sm"
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
                class="absolute inset-0 z-10 flex items-center justify-center bg-destructive/10 backdrop-blur-sm"
            >
                <div class="text-center">
                    <p class="text-sm text-destructive font-medium">Failed to load preview</p>
                    <button @click="reloadPreview()" class="mt-2 rounded-md bg-primary px-3 py-1 text-xs text-primary-foreground hover:bg-primary/90">
                        Retry
                    </button>
                </div>
            </div>

            <div class="pointer-events-none absolute inset-x-0 top-0 z-[1] h-14 bg-gradient-to-b from-background/70 to-transparent"></div>
            <iframe
                x-ref="inlineFrame"
                src="{{ $previewUrl }}"
                class="absolute inset-0 h-full w-full border-0"
                sandbox="allow-scripts allow-same-origin allow-forms allow-popups allow-modals"
                loading="lazy"
                title="Preview of {{ $component }} component"
            ></iframe>
        </div>
    </div>

    <div>
        <div class="flex items-center justify-between border-t border-border/70 bg-muted/35 px-4 py-2">
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

    <div
        x-show="fullscreen"
        x-cloak
        x-transition.opacity
        class="fixed inset-0 z-[90] bg-background/80 p-4 backdrop-blur-md md:p-6"
    >
        <div class="mx-auto flex h-full w-full max-w-7xl flex-col overflow-hidden rounded-[1.5rem] border border-border/70 bg-card shadow-2xl">
            <div class="flex items-center justify-between gap-3 border-b border-border/70 bg-muted/30 px-4 py-3">
                <div class="min-w-0">
                    <p class="truncate text-sm font-semibold text-foreground">{{ $previewLabel }}</p>
                    <p class="text-xs text-muted-foreground">Full preview from the registry iframe.</p>
                </div>

                <div class="flex items-center gap-2">
                    <a
                        href="{{ $previewUrl }}"
                        target="_blank"
                        rel="noreferrer"
                        class="inline-flex items-center rounded-md border border-border/70 bg-background/80 px-3 py-1.5 text-xs font-medium text-foreground transition-colors hover:bg-muted"
                    >
                        Open in tab
                    </a>
                    <button
                        type="button"
                        @click="fullscreen = false"
                        class="inline-flex items-center rounded-md bg-primary px-3 py-1.5 text-xs font-medium text-primary-foreground transition-colors hover:bg-primary/90"
                    >
                        Close
                    </button>
                </div>
            </div>

            <div class="relative flex-1 bg-background">
                <div
                    x-show="loading"
                    x-transition.opacity
                    class="absolute inset-0 z-10 flex items-center justify-center bg-background/88 backdrop-blur-sm"
                >
                    <div class="flex flex-col items-center gap-3">
                        <div class="size-8 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
                        <p class="text-sm text-muted-foreground">Loading preview...</p>
                    </div>
                </div>

                <iframe
                    x-ref="fullscreenFrame"
                    x-bind:src="fullscreen ? '{{ $previewUrl }}' : 'about:blank'"
                    class="h-full w-full border-0"
                    sandbox="allow-scripts allow-same-origin allow-forms allow-popups allow-modals"
                    loading="lazy"
                    title="Full preview of {{ $component }} component"
                ></iframe>
            </div>
        </div>
    </div>
</div>
