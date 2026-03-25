---
title: Stepper
description: Stepper component documentation for Velyx. Installation, horizontal and vertical usage examples, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Stepper Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Stepper

Steppers combine progress and content structure for guided, multi-step experiences.

## Installation

Add the stepper component to your project:

<x-code-tabs
    npm="npx velyx@latest add stepper"
    pnpm="pnpm dlx velyx@latest add stepper"
    yarn="yarn dlx velyx@latest add stepper"
    bun="bunx --bun velyx@latest add stepper"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The stepper component uses Alpine.js to manage the current step and optional navigation.
</x-callout>

## Usage

### Horizontal Stepper

<x-component-preview component="stepper">
    <x-ui.stepper :steps="[
        ['label' => 'Account', 'description' => 'Create your workspace', 'icon' => 'user-round'],
        ['label' => 'Project', 'description' => 'Define structure', 'icon' => 'folder-kanban'],
        ['label' => 'Deploy', 'description' => 'Ship with confidence', 'icon' => 'rocket'],
    ]" :current-step="2">
        <div class="rounded-lg border border-dashed border-border bg-muted/20 p-4 text-sm text-muted-foreground">
            Current step content stays here while the indicator handles progress and navigation cues.
        </div>
    </x-ui.stepper>
</x-component-preview>

### Vertical Stepper

<x-component-preview component="stepper" :props="['variant' => 'vertical']">
    <x-ui.stepper :steps="[
        ['label' => 'Account', 'description' => 'Create your workspace', 'icon' => 'user-round'],
        ['label' => 'Project', 'description' => 'Define structure', 'icon' => 'folder-kanban'],
        ['label' => 'Deploy', 'description' => 'Ship with confidence', 'icon' => 'rocket'],
    ]" :current-step="2" variant="vertical">
        <div class="rounded-lg border border-dashed border-border bg-muted/20 p-4 text-sm text-muted-foreground">
            Vertical steppers work well when each step needs more descriptive context.
        </div>
    </x-ui.stepper>
</x-component-preview>

## Props

| Prop          | Type     | Default        | Description                                       |
| ------------- | -------- | -------------- | ------------------------------------------------- |
| `steps`       | `array`  | `[]`           | Ordered step definitions                          |
| `currentStep` | `int`    | `1`            | Currently active step                             |
| `variant`     | `string` | `'horizontal'` | Layout orientation: `horizontal` or `vertical`    |
| `size`        | `string` | `'md'`         | Size preset                                       |
| `showNumbers` | `bool`   | `true`         | Shows numeric indicators when no icon is provided |
| `clickable`   | `bool`   | `false`        | Allows navigating back to completed steps         |

## Next Steps

- Explore [Progress Steps component](/docs/components/progress-steps)
- Learn about [Dialog component](/docs/components/dialog)
- View [Timeline component](/docs/components/timeline)
