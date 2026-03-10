---
title: Skeleton
description: Skeleton component documentation for Velyx. Installation, usage examples, loading states, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Skeleton Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Skeleton

Skeletons provide a structured loading state so content feels intentional while real data is still on the way.

## Installation

Add the skeleton component to your project:

<x-code-tabs
    npm="npx velyx@latest add skeleton"
    pnpm="pnpm dlx velyx@latest add skeleton"
    yarn="yarn dlx velyx@latest add skeleton"
    bun="bunx --bun velyx@latest add skeleton"
/>

## Usage

### Text Skeleton

<x-component-preview component="skeleton">
    <x-ui.skeleton variant="text" />
</x-component-preview>

### Repeated Rows

<x-component-preview component="skeleton" :props="['count' => 3]">
    <x-ui.skeleton variant="text" :count="3" />
</x-component-preview>

### Card Placeholder

<x-component-preview component="skeleton" :props="['variant' => 'card']">
    <x-ui.skeleton variant="card" />
</x-component-preview>

### Avatar Placeholder

<x-component-preview component="skeleton" :props="['variant' => 'avatar']">
    <x-ui.skeleton variant="avatar" />
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `'default'` | Preset shape such as `text`, `title`, `avatar`, `button`, `card`, or `image` |
| `rounded` | `string` | `'md'` | Border radius preset from `none` to `full` |
| `count` | `int` | `1` | Number of skeleton items to render |
| `gap` | `string` | `'2'` | Gap size between repeated skeleton items |

## Example Structure

```php
<div class="space-y-3">
    <x-ui.skeleton variant="title" class="w-48" />
    <x-ui.skeleton variant="text" :count="3" />
</div>
```

## Usage Notes

- Use skeletons to preserve layout while data loads
- Match the placeholder shape to the final UI structure
- Prefer short loading periods and replace the skeleton as soon as content is ready

## Next Steps

- Explore [Card component](/docs/components/card)
- Learn about [Empty State component](/docs/components/empty-state)
- View [Table component](/docs/components/table)
