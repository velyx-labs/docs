---
title: Modal
description: Modal component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/modal.png
metaTitle: Modal Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Modal

Modals are dialog overlays that focus the user's attention on a specific task or piece of information.

## Installation

Add the modal component to your project:

<x-code-tabs
    npm="npx velyx@latest add modal"
    pnpm="pnpm dlx velyx@latest add modal"
    yarn="yarn dlx velyx@latest add modal"
    bun="bunx --bun velyx@latest add modal"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The modal component requires Alpine.js for interactivity. Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Basic Modal

<x-component-preview component="modal" interactive="true">
    ```blade
    <x-modal id="my-modal" title="Modal Title">
        <p>Modal content goes here.</p>
    </x-modal>
</x-component-preview>

### Small Modal

<x-component-preview component="modal" interactive="true" variant="small">
    ```blade
    <x-modal id="small-modal" title="Small Modal" size="sm">
        <p>This is a small modal.</p>
    </x-modal>
</x-component-preview>

### Large Modal

<x-component-preview component="modal" interactive="true" variant="large">
    ```blade
    <x-modal id="large-modal" title="Large Modal" size="lg">
        <p>This is a large modal with more space.</p>
    </x-modal>
</x-component-preview>

### Fullscreen Modal

<x-component-preview component="modal" interactive="true" variant="fullscreen">
    ```blade
    <x-modal id="fullscreen-modal" title="Fullscreen" size="full">
        <p>This modal takes up the full screen.</p>
    </x-modal>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `id` | `string` | `modal` | Unique identifier for the modal |
| `size` | `string` | `md` | Modal size (sm, md, lg, xl, 2xl, 3xl, 4xl, full) |
| `closeable` | `boolean` | `true` | Show close button and allow closing |
| `title` | `string` | `null` | Modal title |
| `footer` | `slot` | `null` | Modal footer content |

## Accessibility

Modals include:

- **Focus trap** - Tab cycles within modal
- **Escape key** - Closes modal when `closeable` is true
- **Click outside** - Closes modal when `closeable` is true
- **ARIA attributes** - Proper screen reader support

## Keyboard Interactions

| Key | Action |
|-----|--------|
| `Escape` | Close modal (when closeable) |
| `Tab` | Move focus within modal |
| `Shift + Tab` | Move focus backwards |

## Next Steps

- Explore [Button component](/docs/components/button)
- Learn about [Card component](/docs/components/card)
- View [Input component](/docs/components/input)
