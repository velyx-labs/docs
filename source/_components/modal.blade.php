@props([
    'xModel' => null,
    'id' => 'modal',
])

{{-- Placeholder component for documentation purposes --}}
{{-- In production, users would install the actual component --}}
<div {{ $attributes }} class="modal-placeholder">
    {{ $slot }}
</div>

@push('scripts')
<script>
console.warn('This is a placeholder component. Install it with: npx velyx@latest add modal');
</script>
@endpush
