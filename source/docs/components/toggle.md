---
title: Toggle
description: Toggle component documentation for Velyx. Installation, usage examples, sizes, states, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Toggle Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Toggle

Toggles handle binary choices without forcing users through a full form submit or dropdown flow.

## Installation

Add the toggle component to your project:

<x-code-tabs
    npm="npx velyx@latest add toggle"
    pnpm="pnpm dlx velyx@latest add toggle"
    yarn="yarn dlx velyx@latest add toggle"
    bun="bunx --bun velyx@latest add toggle"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The toggle component uses Alpine.js for checked state and keyboard interactions.
</x-callout>

## Usage

### Default Toggle

<x-component-preview component="toggle">
    <x-ui.toggle label="Email notifications" />
</x-component-preview>

### Checked State

<x-component-preview component="toggle" :props="['checked' => true]">
    <x-ui.toggle label="Email notifications" checked />
</x-component-preview>

### With Description

<x-component-preview component="toggle" :props="['description' => true]">
    <x-ui.toggle
        label="Product updates"
        description="Get updates about releases, security notices, and team activity."
    />
</x-component-preview>

### Sizes

<x-component-preview component="toggle" :props="['size' => 'sm']">
    <x-ui.toggle label="Compact toggle" size="sm" />
</x-component-preview>

<x-component-preview component="toggle" :props="['size' => 'lg']">
    <x-ui.toggle label="Large toggle" size="lg" />
</x-component-preview>

### Disabled

<x-component-preview component="toggle" :props="['disabled' => true, 'checked' => true]">
    <x-ui.toggle label="Disabled state" checked disabled />
</x-component-preview>

## Props

| Prop          | Type     | Default | Description                                            |
| ------------- | -------- | ------- | ------------------------------------------------------ | ------------------------------------------------- |
| `name`        | `string  | null`   | `null`                                                 | Optional field name for form and Livewire binding |
| `checked`     | `bool`   | `false` | Initial checked state                                  |
| `value`       | `mixed`  | `null`  | Alternate incoming value used to resolve checked state |
| `label`       | `string  | null`   | `null`                                                 | Optional visible label                            |
| `description` | `string  | null`   | `null`                                                 | Supporting text shown below the label             |
| `size`        | `string` | `'md'`  | Toggle size: `sm`, `md`, or `lg`                       |
| `disabled`    | `bool`   | `false` | Disables interaction                                   |
| `required`    | `bool`   | `false` | Marks the field as required in forms                   |

## Example Structure

```php
<x-ui.toggle
    name="notifications"
    label="Email notifications"
    description="Keep me informed about releases and account activity."
    :checked="true"
/>
```

## Accessibility

- **Role** - Uses `role="switch"` with `aria-checked`
- **Keyboard** - Supports `Space` and `Enter`
- **Labels** - Works with visible labels and required indicators
- **Focus states** - Includes visible focus ring styles

## Next Steps

- Explore [Range Slider component](/docs/components/range-slider)
- Learn about [Tooltip component](/docs/components/tooltip)
- View [Input component](/docs/components/input)
