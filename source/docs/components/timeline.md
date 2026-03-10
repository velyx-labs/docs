---
title: Timeline
description: Timeline component documentation for Velyx. Installation, event stream usage examples, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Timeline Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Timeline

Timelines present ordered events in a way that feels more narrative than a plain list.

## Installation

Add the timeline component to your project:

<x-code-tabs
    npm="npx velyx@latest add timeline"
    pnpm="pnpm dlx velyx@latest add timeline"
    yarn="yarn dlx velyx@latest add timeline"
    bun="bunx --bun velyx@latest add timeline"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The timeline component uses Alpine.js for staged reveal animations.
</x-callout>

## Usage

### Vertical Timeline

<x-component-preview component="timeline">
    <x-ui.timeline :items="[
        ['title' => 'Foundation shipped', 'description' => 'Core components stabilized for production use.', 'date' => 'March 2', 'type' => 'release'],
        ['title' => 'Docs refreshed', 'description' => 'Preview and source code now stay aligned.', 'date' => 'March 6', 'type' => 'feature'],
        ['title' => 'CLI tightened', 'description' => 'Nested component exports and JS imports were fixed.', 'date' => 'March 10', 'type' => 'fix'],
    ]" />
</x-component-preview>

### Horizontal Timeline

<x-component-preview component="timeline" :props="['variant' => 'horizontal']">
    <x-ui.timeline :items="[
        ['title' => 'Foundation shipped', 'description' => 'Core components stabilized for production use.', 'date' => 'March 2', 'type' => 'release'],
        ['title' => 'Docs refreshed', 'description' => 'Preview and source code now stay aligned.', 'date' => 'March 6', 'type' => 'feature'],
        ['title' => 'CLI tightened', 'description' => 'Nested component exports and JS imports were fixed.', 'date' => 'March 10', 'type' => 'fix'],
    ]" variant="horizontal" />
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `items` | `array` | `[]` | Ordered timeline entries |
| `variant` | `string` | `'vertical'` | Layout mode: `vertical` or `horizontal` |
| `size` | `string` | `'md'` | Size preset |
| `lineStyle` | `string` | `'solid'` | Connector style: `solid`, `dashed`, or `dotted` |
| `animated` | `bool` | `true` | Enables staged reveal transitions |
| `alternating` | `bool` | `false` | Alternates sides in vertical mode |

## Next Steps

- Explore [Stat Card component](/docs/components/stat-card)
- Learn about [Progress Steps component](/docs/components/progress-steps)
- View [Stepper component](/docs/components/stepper)
