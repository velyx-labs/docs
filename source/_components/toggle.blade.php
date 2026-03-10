@props([
    'checked' => false,
    'disabled' => false,
])

{{-- Placeholder component for documentation purposes --}}
<div {{ $attributes->merge(['class' => 'toggle-placeholder']) }}>
    {{ $slot }}
</div>

@push('scripts')
<script>
console.warn('This is a placeholder component. Install it with: npx velyx@latest add toggle');
</script>
@endpush
