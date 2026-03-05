@props([
    'component',
    'variant' => 'default',
    'height' => 'auto',
    'controls' => true,
    'props' => [],
    'interactive' => false,
])

@php
    // Get registry URL from config or env
    $registryUrl = getenv('PREVIEW_REGISTRY_URL') ?: 'http://localhost:8000';

    // In production, tokens should be cached or fetched server-side during build
    // For now, we'll use JavaScript to fetch the token
    $previewType = $interactive ? 'interactive' : 'component';
@endphp

<div class="component-preview my-8" data-component="{{ $component }}" data-variant="{{ $variant }}">
    {{-- Tab: Preview / Code --}}
    <div x-data="componentPreview('{{ $component }}', '{{ $previewType }}', '{{ $registryUrl }}', {{ $interactive ? 'true' : 'false' }})"
         x-init="initPreview()"
         class="border rounded-lg overflow-hidden bg-background">
        {{-- Tabs header --}}
        <div class="flex items-center gap-2 px-3 py-2 border-b bg-muted/30">
            <div class="flex size-4 items-center justify-center rounded-[1px]">
                <x-icon name="eye" class="size-4 text-foreground" />
            </div>

            <div class="flex gap-1">
                <button
                    @click="activeTab = 'preview'"
                    :class="activeTab === 'preview' ? 'bg-background text-foreground border-border shadow-sm' : 'text-muted-foreground border-transparent hover:text-foreground'"
                    class="relative inline-flex items-center justify-center gap-1.5 rounded-md px-3 py-1.5 text-sm font-medium whitespace-nowrap transition-all h-8 border"
                >
                    Preview
                </button>
                <button
                    @click="activeTab = 'code'"
                    :class="activeTab === 'code' ? 'bg-background text-foreground border-border shadow-sm' : 'text-muted-foreground border-transparent hover:text-foreground'"
                    class="relative inline-flex items-center justify-center gap-1.5 rounded-md px-3 py-1.5 text-sm font-medium whitespace-nowrap transition-all h-8 border"
                >
                    Code
                </button>
            </div>

            {{-- Preview controls badge --}}
            @if($controls && $interactive)
            <div class="ml-auto flex items-center gap-1.5 px-2 py-1 rounded-md bg-blue-500/10 text-blue-600 dark:text-blue-400 text-xs font-medium">
                <svg class="size-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                Interactive
            </div>
            @endif
        </div>

        {{-- Content --}}
        <div class="relative">
            {{-- Preview Pane --}}
            <div x-show="activeTab === 'preview'"
                 style="display: none;"
                 class="bg-white dark:bg-gray-950">
                <div class="relative w-full" style="height: {{ $height === 'auto' ? '400px' : $height }}">
                    {{-- Loading indicator --}}
                    <div x-show="loading" class="absolute inset-0 flex items-center justify-center bg-muted/20 z-10">
                        <div class="flex flex-col items-center gap-2">
                            <div class="size-8 border-2 border-primary border-t-transparent rounded-full animate-spin"></div>
                            <p class="text-sm text-muted-foreground">Loading preview...</p>
                        </div>
                    </div>

                    {{-- Error message --}}
                    <div x-show="error" x-cloak class="absolute inset-0 flex items-center justify-center bg-destructive/10 z-10">
                        <div class="text-center">
                            <p class="text-sm text-destructive font-medium">Failed to load preview</p>
                            <p class="text-xs text-muted-foreground mt-1" x-text="error"></p>
                            <button @click="loadPreview()" class="mt-2 px-3 py-1 text-xs bg-primary text-primary-foreground rounded-md hover:bg-primary/90">
                                Retry
                            </button>
                        </div>
                    </div>

                    {{-- Preview iframe --}}
                    <iframe
                        x-ref="previewFrame"
                        :src="previewUrl"
                        class="absolute inset-0 w-full h-full border-0"
                        sandbox="allow-scripts allow-same-origin allow-forms"
                        loading="lazy"
                        :data-preview-url="previewUrl"
                        title="Preview of {{ $component }} component"
                    ></iframe>
                </div>

                {{-- Props info panel (if props are provided) --}}
                @if(!empty($props))
                <div class="px-4 py-2 border-t bg-muted/30 text-xs">
                    <div class="flex flex-wrap gap-x-4 gap-y-1">
                        @foreach($props as $key => $value)
                        <div class="flex items-center gap-1">
                            <span class="font-mono text-muted-foreground">{{ $key }}:</span>
                            <span class="font-mono text-foreground">{{ is_bool($value) ? ($value ? 'true' : 'false') : $value }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            {{-- Code Pane --}}
            <div x-show="activeTab === 'code'"
                 style="display: none;"
                 class="overflow-x-auto">
                <div class="prose max-w-none pre-wrapper">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    {{-- Variant selector (if multiple variants are available) --}}
    @if($controls && $variant !== 'default' && !empty($props))
    <div class="mt-2 flex items-center gap-2 px-2">
        <span class="text-xs text-muted-foreground">Variant:</span>
        <span class="px-2 py-0.5 text-xs font-medium rounded bg-primary/10 text-primary">{{ $variant }}</span>
    </div>
    @endif
</div>

@push('scripts')
<script>
// Preview token cache
const previewTokenCache = new Map();

async function fetchPreviewToken(registryUrl, component) {
    // Check cache first
    const cacheKey = `${registryUrl}:${component}`;
    if (previewTokenCache.has(cacheKey)) {
        return previewTokenCache.get(cacheKey);
    }

    try {
        const response = await fetch(`${registryUrl}/api/v1/preview/token`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({
                component: component,
            }),
        });

        if (!response.ok) {
            throw new Error(`Failed to fetch preview token: ${response.statusText}`);
        }

        const data = await response.json();

        // Cache the token for 50 minutes
        previewTokenCache.set(cacheKey, data.token);
        setTimeout(() => previewTokenCache.delete(cacheKey), 50 * 60 * 1000);

        return data.token;
    } catch (error) {
        console.error('[Preview] Failed to fetch token:', error);
        throw error;
    }
}

function componentPreview(component, previewType, registryUrl, isInteractive) {
    return {
        activeTab: 'preview',
        loading: true,
        error: null,
        previewUrl: '',
        token: null,

        async initPreview() {
            await this.loadPreview();

            // Listen for messages from the preview iframe
            window.addEventListener('message', (event) => {
                if (event.data.type === 'preview:ready') {
                    console.log('[Preview] Ready:', event.data.component);
                    this.loading = false;
                }
            });
        },

        async loadPreview() {
            this.loading = true;
            this.error = null;

            try {
                // Fetch preview token
                this.token = await fetchPreviewToken(registryUrl, component);

                // Build preview URL
                let url = `${registryUrl}/preview/${previewType}/${component}?token=${this.token}`;

                // Add variant if not default
                const variantEl = this.$el.closest('.component-preview').dataset.variant;
                if (variantEl && variantEl !== 'default') {
                    url += `&variant=${variantEl}`;
                }

                this.previewUrl = url;
            } catch (err) {
                this.error = err.message || 'Failed to load preview';
                this.loading = false;
                console.error('[Preview] Error:', err);
            }
        },
    }
}
</script>
@endpush
