---
title: Sortable List
description: Sortable List component documentation for Velyx. Installation, drag-and-drop usage examples, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Sortable List Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Sortable List

Sortable lists let users reorder content directly, which is useful for queues, priorities, and editorial workflows.

## Installation

Add the sortable list component to your project:

<x-code-tabs
    npm="npx velyx@latest add sortable-list"
    pnpm="pnpm dlx velyx@latest add sortable-list"
    yarn="yarn dlx velyx@latest add sortable-list"
    bun="bunx --bun velyx@latest add sortable-list"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The sortable list component depends on Alpine.js and a Sortable-compatible drag-and-drop runtime.
</x-callout>

## Usage

### Default List

<x-component-preview component="sortable-list">
    <x-ui.sortable-list :items="[
        ['id' => 1, 'title' => 'Refine hero copy', 'meta' => 'Marketing'],
        ['id' => 2, 'title' => 'Review API docs', 'meta' => 'Docs'],
        ['id' => 3, 'title' => 'Ship component previews', 'meta' => 'Product'],
    ]">
        <template x-if="item">
            <div class="min-w-0">
                <p class="truncate text-sm font-medium text-foreground" x-text="item.title"></p>
                <p class="text-xs text-muted-foreground" x-text="item.meta"></p>
            </div>
        </template>
    </x-ui.sortable-list>
</x-component-preview>

### Without Handle

<x-component-preview component="sortable-list" :props="['handle' => false]">
    <x-ui.sortable-list :items="[
        ['id' => 1, 'title' => 'Refine hero copy', 'meta' => 'Marketing'],
        ['id' => 2, 'title' => 'Review API docs', 'meta' => 'Docs'],
        ['id' => 3, 'title' => 'Ship component previews', 'meta' => 'Product'],
    ]" :handle="false">
        <template x-if="item">
            <div class="min-w-0">
                <p class="truncate text-sm font-medium text-foreground" x-text="item.title"></p>
                <p class="text-xs text-muted-foreground" x-text="item.meta"></p>
            </div>
        </template>
    </x-ui.sortable-list>
</x-component-preview>

## Props

| Prop         | Type     | Default        | Description                            |
| ------------ | -------- | -------------- | -------------------------------------- |
| `items`      | `array`  | `[]`           | Ordered items rendered in the list     |
| `itemKey`    | `string` | `'id'`         | Property used as the unique item key   |
| `handle`     | `bool`   | `true`         | Enables a visible drag handle          |
| `animation`  | `int`    | `150`          | Drag animation duration                |
| `ghostClass` | `string` | `'opacity-50'` | Class applied to the ghost item        |
| `dragClass`  | `string` | `'shadow-lg'`  | Class applied while an item is dragged |
| `disabled`   | `bool`   | `false`        | Disables sorting                       |

## Next Steps

- Explore [Table component](/docs/components/table)
- Learn about [tabs component](/docs/components/tabs)
- View [Toggle component](/docs/components/toggle)
