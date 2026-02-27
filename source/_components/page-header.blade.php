@props([
    'title' => null,
    'description' => null,
    'prevLink' => null,
    'prevTitle' => null,
    'nextLink' => null,
    'nextTitle' => null,
])

<div class="flex items-center justify-between mb-6 pb-6 border-b border-border">
    {{-- Title & Description --}}
    <div class="flex-1">
        @if($title)
            <h1 class="text-3xl font-bold tracking-tight text-foreground">{{ $title }}</h1>
        @endif
        @if($description)
            <p class="text-lg text-muted-foreground mt-2">{{ $description }}</p>
        @endif
    </div>

    {{-- Action Buttons --}}
    <div class="flex items-center gap-2 ml-4">
        {{-- Navigation Arrows --}}
        @if($prevLink || $nextLink)
            <div class="flex items-center gap-1">
                @if($prevLink)
                    <a href="{{ $prevLink }}"
                       class="inline-flex items-center justify-center w-9 h-9 rounded-md hover:bg-accent transition-colors"
                       title="Previous: {{ $prevTitle ?? 'Previous page' }}">
                        <x-icon name="arrow-left-02" class="h-4 w-4" />
                    </a>
                @endif
                @if($nextLink)
                    <a href="{{ $nextLink }}"
                       class="inline-flex items-center justify-center w-9 h-9 rounded-md hover:bg-accent transition-colors"
                       title="Next: {{ $nextTitle ?? 'Next page' }}">
                        <x-icon name="arrow-right-02" class="h-4 w-4" />
                    </a>
                @endif
            </div>
        @endif

        {{-- Copy Page Button --}}
        <button
            data-page-copy-btn
            class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium text-muted-foreground hover:text-foreground hover:bg-accent rounded-md transition-colors"
            title="Copy this page">
            <x-icon name="copy-01" class="h-4 w-4" />
            <span data-page-copy-text>Copy page</span>
        </button>
    </div>
</div>

@once
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const copyBtn = document.querySelector('[data-page-copy-btn]');
    const copyText = document.querySelector('[data-page-copy-text]');

    if (copyBtn && copyText) {
        copyBtn.addEventListener('click', async function() {
            try {
                const pageContent = document.querySelector('[data-page-content]');
                if (!pageContent) return;

                const markdown = pageContent.getAttribute('data-page-content');
                if (!markdown) return;

                await navigator.clipboard.writeText(markdown);
                copyText.textContent = 'Copied!';

                setTimeout(() => {
                    copyText.textContent = 'Copy page';
                }, 2000);
            } catch (err) {
                console.error('Failed to copy:', err);
                // Fallback for older browsers
                const pageContent = document.querySelector('[data-page-content]');
                if (pageContent) {
                    const textArea = document.createElement('textarea');
                    textArea.value = pageContent.getAttribute('data-page-content') || '';
                    textArea.style.position = 'fixed';
                    textArea.style.left = '-999999px';
                    document.body.appendChild(textArea);
                    textArea.select();
                    try {
                        document.execCommand('copy');
                        copyText.textContent = 'Copied!';
                        setTimeout(() => {
                            copyText.textContent = 'Copy page';
                        }, 2000);
                    } catch (e) {
                        console.error('Copy fallback failed:', e);
                    }
                    document.body.removeChild(textArea);
                }
            }
        });
    }
});
</script>
@endpush
@endonce
