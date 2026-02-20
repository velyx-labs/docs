---
title: Components
description: Browse the available UI components
extends: _layouts.documentation
section: content
---

# Components

Beautiful, accessible components built with Blade, Tailwind CSS v4, and Alpine.js.

## Available Components

### Button

A versatile button component with multiple variants and sizes.

```blade
<x-button>Default</x-button>
<x-button variant="secondary">Secondary</x-button>
<x-button variant="outline">Outline</x-button>
<x-button variant="ghost">Ghost</x-button>
```

**Add it:** `velyx add button`

[View Documentation →](/docs/components/button)

---

### Card

A flexible card component for displaying content.

```blade
<x-card>
    <x-card-header>
        <x-card-title>Card Title</x-card-title>
        <x-card-description>Card description goes here</x-card-description>
    </x-card-header>
    <x-card-content>
        <p>Card content goes here.</p>
    </x-card-content>
    <x-card-footer>
        <x-button>Action</x-button>
    </x-card-footer>
</x-card>
```

**Add it:** `velyx add card`

[View Documentation →](/docs/components/card)

---

### Input

A form input component with validation support.

```blade
<x-input type="email" placeholder="Email" />
<x-input type="password" placeholder="Password" />
```

**Add it:** `velyx add input`

[View Documentation →](/docs/components/input)

---

### Modal

A dialog modal component for overlays and alerts.

```blade
<x-modal>
    <x-modal-trigger>Open Modal</x-modal-trigger>
    <x-modal-content>
        <x-modal-header>
            <x-modal-title>Are you sure?</x-modal-title>
            <x-modal-description>
                This action cannot be undone.
            </x-modal-description>
        </x-modal-header>
        <x-modal-footer>
            <x-button variant="outline">Cancel</x-button>
            <x-button>Confirm</x-button>
        </x-modal-footer>
    </x-modal-content>
</x-modal>
```

**Add it:** `velyx add modal`

[View Documentation →](/docs/components/modal)

---

## Adding Components

Use the CLI to add any component:

```bash
velyx add <component-name>
```

Components are copied directly into your project under `resources/views/components/`, so you can customize them however you want.
