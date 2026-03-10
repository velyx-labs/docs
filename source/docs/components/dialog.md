---
title: Dialog
description: Dialog component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/dialog.png
metaTitle: Dialog Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Dialog

Dialogs are overlays that focus the user's attention on a specific task or piece of information.

## Installation

Add the dialog component to your project:

<x-code-tabs
    npm="npx velyx@latest add dialog"
    pnpm="pnpm dlx velyx@latest add dialog"
    yarn="yarn dlx velyx@latest add dialog"
    bun="bunx --bun velyx@latest add dialog"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The dialog component requires Alpine.js for interactivity. Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Basic Dialog

<x-component-preview component="dialog">
    ```php
    <x-dialog id="confirm-dialog" title="Delete project">
        <p>This action cannot be undone. This will permanently delete the project.</p>
    </x-dialog>
</x-component-preview>

### Compact Dialog

<x-component-preview component="dialog" variant="small">
    ```php
    <x-dialog id="small-dialog" title="Quick note" size="sm">
        <p>This is a compact dialog for short confirmations.</p>
    </x-dialog>
</x-component-preview>

### Large Dialog

<x-component-preview component="dialog" variant="large">
    ```php
    <x-dialog id="large-dialog" title="Project settings" size="lg">
        <p>This dialog gives you more room for forms and configuration.</p>
    </x-dialog>
</x-component-preview>

### Full-width Dialog

<x-component-preview component="dialog" variant="fullscreen">
    ```php
    <x-dialog id="fullscreen-dialog" title="Command center" size="full">
        <p>This dialog stretches wide for immersive workflows.</p>
    </x-dialog>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | `dialog` | Unique identifier for the dialog |
| `size` | `string` | `md` | Dialog size (sm, md, lg, xl, 2xl, 3xl, 4xl, full) |
| `closeable` | `boolean` | `true` | Show close button and allow closing |
| `title` | `string` | `null` | Dialog title |
| `footer` | `slot` | `null` | Dialog footer content |

## Accessibility

Dialogs include:

- **Focus trap** - Tab cycles within the dialog
- **Escape key** - Closes modal when `closeable` is true
- **Click outside** - Closes modal when `closeable` is true
- **ARIA attributes** - Proper screen reader support

## Keyboard Interactions

| Key | Action |
|-----|--------|
| `Escape` | Close dialog (when closeable) |
| `Tab` | Move focus within the dialog |
| `Shift + Tab` | Move focus backwards |

## Next Steps

- Explore [Button component](/docs/components/button)
- Learn about [Card component](/docs/components/card)
- View [Input component](/docs/components/input)
