@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
    'disabled' => false,
    'loading' => false,
    'icon' => null,
    'iconRight' => null,
    'iconOnly' => false,
])

{{-- Placeholder component for documentation purposes --}}
<button {{ $attributes->merge(['class' => 'px-4 py-2 rounded-md bg-primary text-primary-foreground']) }}>
    {{ $slot }}
</button>

@push('scripts')
<script>
console.warn('This is a placeholder component. Install it with: npx velyx add button');
</script>
@endpush
