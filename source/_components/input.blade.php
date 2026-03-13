@props([
    'type' => 'text',
    'id' => null,
    'name' => null,
    'value' => null,
    'placeholder' => null,
    'required' => false,
])

{{-- Placeholder component for documentation purposes --}}
<input {{ $attributes->merge(['type' => $type, 'class' => 'w-full px-3 py-2 rounded-md border border-input']) }}>

@push('scripts')
<script>
console.warn('This is a placeholder component. Install it with: npx velyx@latest add input');
</script>
@endpush
