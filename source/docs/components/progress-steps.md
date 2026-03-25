---
title: Progress Steps
description: Progress Steps component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Progress Steps Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Progress Steps

Progress steps give users a high-level view of where they are inside a multi-step flow.

## Installation

Add the progress steps component to your project:

<x-code-tabs
    npm="npx velyx@latest add progress-steps"
    pnpm="pnpm dlx velyx@latest add progress-steps"
    yarn="yarn dlx velyx@latest add progress-steps"
    bun="bunx --bun velyx@latest add progress-steps"
/>

## Usage

### Default Steps

<x-component-preview component="progress-steps">
    <x-ui.progress-steps :steps="[
        ['label' => 'Planning', 'description' => 'Define scope', 'icon' => 'clipboard-list'],
        ['label' => 'Design', 'description' => 'Review UI', 'icon' => 'palette'],
        ['label' => 'Build', 'description' => 'Ship code', 'icon' => 'code'],
        ['label' => 'Launch', 'description' => 'Go live', 'icon' => 'rocket'],
    ]" :current="2" />
</x-component-preview>

### Success Variant

<x-component-preview component="progress-steps" :props="['variant' => 'success', 'current' => 3]">
    <x-ui.progress-steps :steps="[
        ['label' => 'Planning', 'description' => 'Define scope', 'icon' => 'clipboard-list'],
        ['label' => 'Design', 'description' => 'Review UI', 'icon' => 'palette'],
        ['label' => 'Build', 'description' => 'Ship code', 'icon' => 'code'],
        ['label' => 'Launch', 'description' => 'Go live', 'icon' => 'rocket'],
    ]" :current="3" variant="success" />
</x-component-preview>

## Props

| Prop               | Type     | Default     | Description                                                 |
| ------------------ | -------- | ----------- | ----------------------------------------------------------- |
| `steps`            | `array`  | `[]`        | Ordered steps with optional labels, descriptions, and icons |
| `current`          | `int`    | `1`         | Current step number                                         |
| `variant`          | `string` | `'default'` | Visual style such as `default`, `success`, or `blue`        |
| `showLabels`       | `bool`   | `true`      | Displays step labels                                        |
| `showDescriptions` | `bool`   | `true`      | Displays supporting descriptions                            |
| `clickable`        | `bool`   | `false`     | Allows completed steps to be clicked                        |
| `size`             | `string` | `'md'`      | Size preset: `sm`, `md`, or `lg`                            |

## Example Structure

```php
<x-ui.progress-steps
    :steps="[
        ['label' => 'Account', 'description' => 'Create workspace'],
        ['label' => 'Project', 'description' => 'Define structure'],
        ['label' => 'Launch', 'description' => 'Ship to production'],
    ]"
    :current="2"
/>
```

## Next Steps

- Explore [Stepper component](/docs/components/stepper)
- Learn about [Timeline component](/docs/components/timeline)
- View [Tabs component](/docs/components/tabs)
