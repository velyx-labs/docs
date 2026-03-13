@props([
    'variant' => 'default',
    'dismissible' => false,
    'title' => null,
    'icon' => null,
])

{{-- Placeholder component for documentation purposes --}}
<div {{ $attributes->merge(['class' => 'p-4 rounded-lg border bg-muted/30']) }}>
    @if($title)
        <h3 class="font-semibold mb-1">{{ $title }}</h3>
    @endif
    <div class="text-sm">
        {{ $slot }}
    </div>
</div>

@push('scripts')
<script>
console.warn('This is a placeholder component. Install it with: npx velyx@latest add alert');
</script>
@endpush
