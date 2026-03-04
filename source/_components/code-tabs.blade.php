@props([
    'npm' => '',
    'pnpm' => '',
    'yarn' => '',
    'bun' => '',
    'default' => 'npm',
])

<div x-data="{ activeTab: '{{ $default }}' }" class="code-tabs my-6">
    <!-- Tabs -->
    <div class="flex items-center gap-2 mb-2">
        @if($npm)
        <button
            @click="activeTab = 'npm'"
            :class="activeTab === 'npm' ? 'bg-foreground text-background' : 'bg-muted text-muted-foreground hover:bg-muted-foreground/20'"
            class="px-3 py-1.5 text-xs font-medium rounded-md transition-colors"
        >
            npm
        </button>
        @endif

        @if($pnpm)
        <button
            @click="activeTab = 'pnpm'"
            :class="activeTab === 'pnpm' ? 'bg-foreground text-background' : 'bg-muted text-muted-foreground hover:bg-muted-foreground/20'"
            class="px-3 py-1.5 text-xs font-medium rounded-md transition-colors"
        >
            pnpm
        </button>
        @endif

        @if($yarn)
        <button
            @click="activeTab = 'yarn'"
            :class="activeTab === 'yarn' ? 'bg-foreground text-background' : 'bg-muted text-muted-foreground hover:bg-muted-foreground/20'"
            class="px-3 py-1.5 text-xs font-medium rounded-md transition-colors"
        >
            yarn
        </button>
        @endif

        @if($bun)
        <button
            @click="activeTab = 'bun'"
            :class="activeTab === 'bun' ? 'bg-foreground text-background' : 'bg-muted text-muted-foreground hover:bg-muted-foreground/20'"
            class="px-3 py-1.5 text-xs font-medium rounded-md transition-colors"
        >
            bun
        </button>
        @endif
    </div>

    <!-- Code blocks -->
    <div class="relative">
        @if($npm)
        <div x-show="activeTab === 'npm'" class="prose pre-wrapper rounded-xl bg-muted/50 border border-border overflow-x-auto relative group">
            <pre><code class="language-bash">{{ $npm }}</code></pre>
        </div>
        @endif

        @if($pnpm)
        <div x-show="activeTab === 'pnpm'" class="prose pre-wrapper rounded-xl bg-muted/50 border border-border overflow-x-auto relative group" x-cloak>
            <pre><code class="language-bash">{{ $pnpm }}</code></pre>
        </div>
        @endif

        @if($yarn)
        <div x-show="activeTab === 'yarn'" class="prose pre-wrapper rounded-xl bg-muted/50 border border-border overflow-x-auto relative group" x-cloak>
            <pre><code class="language-bash">{{ $yarn }}</code></pre>
        </div>
        @endif

        @if($bun)
        <div x-show="activeTab === 'bun'" class="prose pre-wrapper rounded-xl bg-muted/50 border border-border overflow-x-auto relative group" x-cloak>
            <pre><code class="language-bash">{{ $bun }}</code></pre>
        </div>
        @endif
    </div>
</div>
