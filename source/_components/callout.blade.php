@props([
    'type' => 'info',
    'title' => null,
])

@php
$types = [
    'info' => [
        'icon' => 'information',
        'bg' => 'bg-blue-50 dark:bg-blue-950/30',
        'border' => 'border-blue-200 dark:border-blue-900',
        'title' => 'text-blue-900 dark:text-blue-100',
        'text' => 'text-blue-800 dark:text-blue-200',
    ],
    'warning' => [
        'icon' => 'warning',
        'bg' => 'bg-yellow-50 dark:bg-yellow-950/30',
        'border' => 'border-yellow-200 dark:border-yellow-900',
        'title' => 'text-yellow-900 dark:text-yellow-100',
        'text' => 'text-yellow-800 dark:text-yellow-200',
    ],
    'success' => [
        'icon' => 'check-circle',
        'bg' => 'bg-green-50 dark:bg-green-950/30',
        'border' => 'border-green-200 dark:border-green-900',
        'title' => 'text-green-900 dark:text-green-100',
        'text' => 'text-green-800 dark:text-green-200',
    ],
    'error' => [
        'icon' => 'x-circle',
        'bg' => 'bg-red-50 dark:bg-red-950/30',
        'border' => 'border-red-200 dark:border-red-900',
        'title' => 'text-red-900 dark:text-red-100',
        'text' => 'text-red-800 dark:text-red-200',
    ],
];

$config = $types[$type] ?? $types['info'];
@endphp

<div class="{{ $config['bg'] }} border {{ $config['border'] }} rounded-lg p-4 my-6">
    <div class="flex items-start gap-3">
        <div class="{{ $config['text'] }} flex-shrink-0 mt-0.5">
            <x-icon name="{{ $config['icon'] }}" class="h-5 w-5" />
        </div>
        <div class="flex-1">
            @if($title)
                <div class="{{ $config['title'] }} font-semibold mb-1">
                    {{ $title }}
                </div>
            @endif
            <div class="{{ $config['text'] }} text-sm">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
