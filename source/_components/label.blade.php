@props([
    'for' => null,
])

{{-- Placeholder component for documentation purposes --}}
<label {{ $attributes->merge(['for' => $for, 'class' => 'block text-sm font-medium text-foreground']) }}>
    {{ $slot }}
</label>

@push('scripts')
<script>
console.warn('This is a placeholder component. Install it with: npx velyx add label');
</script>
@endpush
