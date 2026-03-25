---
title: Range Slider
description: Range Slider component documentation for Velyx. Installation, usage examples, single and double handles, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Range Slider Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Range Slider

Range sliders let users adjust numeric values quickly with direct manipulation instead of typing.

## Installation

Add the range slider component to your project:

<x-code-tabs
    npm="npx velyx@latest add range-slider"
    pnpm="pnpm dlx velyx@latest add range-slider"
    yarn="yarn dlx velyx@latest add range-slider"
    bun="bunx --bun velyx@latest add range-slider"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The range slider component uses Alpine.js to manage current values and dual-handle behavior.
</x-callout>

## Usage

### Single Value

<x-component-preview component="range-slider">
    <x-ui.range-slider :min="0" :max="100" :step="5" />
</x-component-preview>

### Double Handle

<x-component-preview component="range-slider" :props="['type' => 'double']">
    <x-ui.range-slider type="double" :min="0" :max="100" :step="5" />
</x-component-preview>

### Compact Size

<x-component-preview component="range-slider" :props="['size' => 'sm']">
    <x-ui.range-slider size="sm" :min="0" :max="100" :step="5" />
</x-component-preview>

### Without Labels

<x-component-preview component="range-slider" :props="['showLabels' => false, 'showValue' => false]">
    <x-ui.range-slider :show-labels="false" :show-value="false" :min="0" :max="100" :step="5" />
</x-component-preview>

## Props

| Prop         | Type     | Default     | Description                                     |
| ------------ | -------- | ----------- | ----------------------------------------------- | -------------------- |
| `min`        | `int     | float`      | `0`                                             | Minimum slider value |
| `max`        | `int     | float`      | `100`                                           | Maximum slider value |
| `step`       | `int     | float`      | `1`                                             | Value increment      |
| `showValue`  | `bool`   | `true`      | Displays the current value above the track      |
| `showLabels` | `bool`   | `true`      | Displays the min and max labels below the track |
| `size`       | `string` | `'md'`      | Slider size: `sm`, `md`, or `lg`                |
| `variant`    | `string` | `'default'` | Track accent color variant                      |
| `type`       | `string` | `'single'`  | Slider mode: `single` or `double`               |

## Example Structure

```php
<x-ui.range-slider
    type="double"
    :min="0"
    :max="100"
    :step="5"
    variant="primary"
/>
```

## Accessibility

- Uses native `input[type=range]` elements under the custom UI
- Keeps keyboard support from the browser range input
- Works well for thresholds, filters, and preference ranges

## Next Steps

- Explore [Toggle component](/docs/components/toggle)
- Learn about [Tabs component](/docs/components/tabs)
- View [Input component](/docs/components/input)
