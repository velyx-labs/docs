@props([
    'xModel' => null,
    'id' => 'dialog',
])

{{-- Placeholder component for documentation purposes --}}
{{-- In production, users would install the actual component --}}
<div {{ $attributes }} class="dialog-placeholder">
    {{ $slot }}
</div>

@push('scripts')
<script>
console.warn('This is a placeholder component. Install it with: npx velyx@latest add dialog');
</script>
@endpush
