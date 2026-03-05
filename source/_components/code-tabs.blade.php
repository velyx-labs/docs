@props([
    'npm' => '',
    'pnpm' => '',
    'yarn' => '',
    'bun' => '',
    'default' => 'npm',
])

<div x-data="{
    activeTab: '{{ $default }}',
    codes: {
        @if($npm) 'npm': @js($npm), @endif
        @if($pnpm) 'pnpm': @js($pnpm), @endif
        @if($yarn) 'yarn': @js($yarn), @endif
        @if($bun) 'bun': @js($bun), @endif
    },
    copied: false,
    async copyCode() {
        const code = this.codes[this.activeTab];
        if (!code) return;

        try {
            await navigator.clipboard.writeText(code);
            this.copied = true;
            setTimeout(() => this.copied = false, 2000);
        } catch (err) {
            console.error('Failed to copy:', err);
        }
    }
}" class="code-tabs bg-muted/50 relative">
    <!-- Tabs header -->
    <div class="flex items-center gap-2 px-3 py-1 mb-0 overflow-x-auto">
        <div class="flex size-4 items-center justify-center rounded-[1px] ">
            <x-icons.terminal  class="size-5 text-foreground" />
        </div>
        <div class="group/tabs-list inline-flex w-fit items-center justify-center text-muted-foreground group-data-[orientation=horizontal]/tabs:h-9 group-data-[orientation=vertical]/tabs:h-fit group-data-[orientation=vertical]/tabs:flex-col data-[variant=line]:rounded-none rounded-none bg-transparent p-0">
        @if($npm)
        <button
            @click="activeTab = 'npm'"
            :class="activeTab === 'npm' ? 'bg-background text-foreground border-input' : 'text-muted-foreground border-transparent hover:text-foreground'"
            class="relative inline-flex items-center justify-center gap-1.5 rounded-md px-2 py-1 text-sm font-medium whitespace-nowrap transition-all h-7 border border-transparent pt-0.5 shadow-none"
        >
            npm
        </button>
        @endif

        @if($pnpm)
        <button
            @click="activeTab = 'pnpm'"
            :class="activeTab === 'pnpm' ? 'bg-background text-foreground border-input' : 'text-muted-foreground border-transparent hover:text-foreground'"
            class="relative inline-flex items-center justify-center gap-1.5 rounded-md px-2 py-1 text-sm font-medium whitespace-nowrap transition-all h-7 border border-transparent pt-0.5 shadow-none"
        >
            pnpm
        </button>
        @endif

        @if($yarn)
        <button
            @click="activeTab = 'yarn'"
            :class="activeTab === 'yarn' ? 'bg-background text-foreground border-input' : 'text-muted-foreground border-transparent hover:text-foreground'"
            class="relative inline-flex items-center justify-center gap-1.5 rounded-md px-2 py-1 text-sm font-medium whitespace-nowrap transition-all h-7 border border-transparent pt-0.5 shadow-none"
        >
            yarn
        </button>
        @endif

        @if($bun)
        <button
            @click="activeTab = 'bun'"
            :class="activeTab === 'bun' ? 'bg-background text-foreground border-input' : 'text-muted-foreground border-transparent hover:text-foreground'"
            class="relative inline-flex items-center justify-center gap-1.5 rounded-md px-2 py-1 text-sm font-medium whitespace-nowrap transition-all h-7 border border-transparent pt-0.5 shadow-none"
        >
            bun
        </button>
        @endif
        </div>

        <button
            @click="copyCode()"
            class="ml-auto inline-flex shrink-0 items-center justify-center gap-2 rounded-md text-sm font-medium whitespace-nowrap transition-all outline-none focus-visible:border-ring focus-visible:ring-[3px] focus-visible:ring-ring/50 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-7 opacity-70 hover:opacity-100 focus-visible:opacity-100"
            :class="copied ? 'text-green-500' : 'text-muted-foreground'"
            aria-label="Copy code"
        >
            <svg x-show="!copied" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path></svg>
            <svg x-show="copied" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </button>
    </div>

    <!-- Code blocks container -->
        @if($npm)
        <div x-show="activeTab === 'npm'" class="prose max-w-none pre-wrapper no-copy-button overflow-x-auto relative group mt-0">
            <pre><code class="language-bash">{{ $npm }}</code></pre>
        </div>
        @endif

        @if($pnpm)
        <div x-show="activeTab === 'pnpm'" class="prose max-w-none pre-wrapper no-copy-button overflow-x-auto relative group mt-0" x-cloak>
            <pre><code class="language-bash">{{ $pnpm }}</code></pre>
        </div>
        @endif

        @if($yarn)
        <div x-show="activeTab === 'yarn'" class="prose max-w-none pre-wrapper no-copy-button overflow-x-auto relative group mt-0" x-cloak>
            <pre><code class="language-bash">{{ $yarn }}</code></pre>
        </div>
        @endif

        @if($bun)
        <div x-show="activeTab === 'bun'" class="prose max-w-none pre-wrapper no-copy-button overflow-x-auto relative group mt-0" x-cloak>
            <pre><code class="language-bash">{{ $bun }}</code></pre>
        </div>
        @endif
</div>
