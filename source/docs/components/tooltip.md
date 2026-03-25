---
title: Tooltip
description: Tooltip component documentation for Velyx. Installation, usage examples, positions, timing, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Tooltip Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Tooltip

Tooltips reveal short contextual help without cluttering the surrounding interface.

## Installation

Add the tooltip component to your project:

<x-code-tabs
    npm="npx velyx@latest add tooltip"
    pnpm="pnpm dlx velyx@latest add tooltip"
    yarn="yarn dlx velyx@latest add tooltip"
    bun="bunx --bun velyx@latest add tooltip"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The tooltip component uses Alpine.js to handle delayed show and hide behavior.
</x-callout>

## Usage

### Default Tooltip

<x-component-preview component="tooltip">
    <x-ui.tooltip content="Velyx keeps component APIs sharp and copy-paste friendly.">
        <x-ui.button variant="outline">Hover me</x-ui.button>
    </x-ui.tooltip>
</x-component-preview>

### Positioning

<x-component-preview component="tooltip" :props="['position' => 'bottom']">
    <x-ui.tooltip content="Displayed below the trigger." position="bottom">
        <x-ui.button variant="outline">Bottom tooltip</x-ui.button>
    </x-ui.tooltip>
</x-component-preview>

<x-component-preview component="tooltip" :props="['position' => 'right']">
    <x-ui.tooltip content="Displayed to the right of the trigger." position="right">
        <x-ui.button variant="outline">Right tooltip</x-ui.button>
    </x-ui.tooltip>
</x-component-preview>

### Without Arrow

<x-component-preview component="tooltip" :props="['arrow' => false]">
    <x-ui.tooltip content="A cleaner tooltip without an arrow." :arrow="false">
        <x-ui.button variant="outline">No arrow</x-ui.button>
    </x-ui.tooltip>
</x-component-preview>

### Custom Delay

<x-component-preview component="tooltip" :props="['delay' => 500]">
    <x-ui.tooltip content="This tooltip appears with a longer delay." :delay="500">
        <x-ui.button variant="outline">Delayed tooltip</x-ui.button>
    </x-ui.tooltip>
</x-component-preview>

## Props

| Prop       | Type     | Default | Description                                      |
| ---------- | -------- | ------- | ------------------------------------------------ |
| `content`  | `string` | `''`    | Text shown inside the tooltip                    |
| `position` | `string` | `'top'` | Placement: `top`, `bottom`, `left`, or `right`   |
| `delay`    | `int`    | `200`   | Delay in milliseconds before the tooltip appears |
| `arrow`    | `bool`   | `true`  | Shows or hides the tooltip arrow                 |

## Example Structure

```php
<x-ui.tooltip content="Open project settings" position="right">
    <x-ui.button variant="ghost" size="icon">?</x-ui.button>
</x-ui.tooltip>
```

## Accessibility

- **Role** - Uses `role="tooltip"` for the floating content
- **Pointer and focus support** - Opens on hover and keyboard focus
- **Progressive disclosure** - Best for short guidance, not long-form content

## Next Steps

- Explore [Dialog component](/docs/components/dialog)
- Learn about [Popover component](/docs/components/popover)
- View [Toggle component](/docs/components/toggle)
