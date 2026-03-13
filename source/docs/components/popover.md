---
title: Popover
description: Popover component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/popover.png
metaTitle: Popover Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Popover

The Popover component displays floating content that appears when users interact with a trigger element. Perfect for additional information, menus, or interactive content.

## Installation

Add the popover component to your project:

<x-code-tabs
    npm="npx velyx@latest add popover"
    pnpm="pnpm dlx velyx@latest add popover"
    yarn="yarn dlx velyx@latest add popover"
    bun="bunx --bun velyx@latest add popover"
/>

## Usage

### Default Popover

<x-component-preview component="popover">
    <div class="flex min-h-[240px] items-center justify-center">
        <x-ui.popover position="bottom" align="center" width="md">
            <x-slot:trigger_slot>
                <x-ui.button variant="outline">Open Popover</x-ui.button>
            </x-slot:trigger_slot>

            <x-slot:content>
                <div class="space-y-2">
                    <h4 class="text-sm font-semibold text-foreground">Dimensions</h4>
                    <p class="text-sm text-muted-foreground">Set dimensions for the layer.</p>
                </div>
            </x-slot:content>
        </x-ui.popover>
    </div>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `position` | `string` | `'bottom'` | Vertical position: `top`, `bottom` |
| `align` | `string` | `'center'` | Horizontal alignment: `start`, `center`, `end` |
| `width` | `string` | `'auto'` | Width of popover: `auto`, `sm`, `md`, `lg` |
| `offset` | `number` | `8` | Distance in pixels from trigger element |

## Slots

| Slot | Description |
|------|-------------|
| `trigger_slot` | The element that triggers the popover (usually a button) |
| `content` | The content displayed inside the popover |

## Examples

### Basic Popover

```php
<x-ui.popover>
    <x-slot:trigger_slot>
        <x-ui.button>Click Me</x-ui.button>
    </x-slot:trigger_slot>

    <x-slot:content>
        <p class="text-sm">This is the popover content.</p>
    </x-slot:content>
</x-ui.popover>
```

### Different Positions

```php
<!-- Top position -->
<x-ui.popover position="top">
    <x-slot:trigger_slot>
        <x-ui.button>Top</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Popover appears above</p>
    </x-slot:content>
</x-ui.popover>

<!-- Bottom position -->
<x-ui.popover position="bottom">
    <x-slot:trigger_slot>
        <x-ui.button>Bottom</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Popover appears below</p>
    </x-slot:content>
</x-ui.popover>
```

### Different Alignments

```php
<!-- Left aligned -->
<x-ui.popover align="start">
    <x-slot:trigger_slot>
        <x-ui.button>Start</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Left aligned popover</p>
    </x-slot:content>
</x-ui.popover>

<!-- Center aligned -->
<x-ui.popover align="center">
    <x-slot:trigger_slot>
        <x-ui.button>Center</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Center aligned popover</p>
    </x-slot:content>
</x-ui.popover>

<!-- Right aligned -->
<x-ui.popover align="end">
    <x-slot:trigger_slot>
        <x-ui.button>End</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Right aligned popover</p>
    </x-slot:content>
</x-ui.popover>
```

### Different Widths

```php
<!-- Small width -->
<x-ui.popover width="sm">
    <x-slot:trigger_slot>
        <x-ui.button>Small</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Small popover content</p>
    </x-slot:content>
</x-ui.popover>

<!-- Medium width -->
<x-ui.popover width="md">
    <x-slot:trigger_slot>
        <x-ui.button>Medium</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Medium popover content</p>
    </x-slot:content>
</x-ui.popover>

<!-- Large width -->
<x-ui.popover width="lg">
    <x-slot:trigger_slot>
        <x-ui.button>Large</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Large popover content</p>
    </x-slot:content>
</x-ui.popover>
```

### Rich Content

```php
<x-ui.popover width="md">
    <x-slot:trigger_slot>
        <x-ui.button>Settings</x-ui.button>
    </x-slot:trigger_slot>

    <x-slot:content>
        <div class="space-y-3">
            <h4 class="text-sm font-semibold">Display Settings</h4>
            <p class="text-sm text-muted-foreground">
                Customize how content is displayed.
            </p>
            <hr class="border-border">
            <div class="space-y-2">
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded">
                    <span class="text-sm">Show grid lines</span>
                </label>
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded">
                    <span class="text-sm">Enable snap to grid</span>
                </label>
            </div>
        </div>
    </x-slot:content>
</x-ui.popover>
```

### With Actions

```php
<x-ui.popover>
    <x-slot:trigger_slot>
        <x-ui.button variant="outline">Actions</x-ui.button>
    </x-slot:trigger_slot>

    <x-slot:content>
        <div class="space-y-1">
            <button class="w-full text-left px-3 py-2 text-sm hover:bg-accent rounded-md">
                Edit
            </button>
            <button class="w-full text-left px-3 py-2 text-sm hover:bg-accent rounded-md">
                Duplicate
            </button>
            <button class="w-full text-left px-3 py-2 text-sm hover:bg-accent rounded-md">
                Share
            </button>
            <hr class="border-border my-1">
            <button class="w-full text-left px-3 py-2 text-sm text-destructive hover:bg-accent rounded-md">
                Delete
            </button>
        </div>
    </x-slot:content>
</x-ui.popover>
```

### Help Tooltip

```php
<x-ui.popover width="sm" position="top">
    <x-slot:trigger_slot>
        <button class="text-muted-foreground hover:text-foreground">
            <x-icon name="information-circle" class="h-4 w-4" />
        </button>
    </x-slot:trigger_slot>

    <x-slot:content>
        <div class="space-y-1">
            <p class="text-sm font-medium">Keyboard Shortcuts</p>
            <p class="text-xs text-muted-foreground">
                Press <kbd>Ctrl</kbd> + <kbd>K</kbd> to open command palette
            </p>
        </div>
    </x-slot:content>
</x-ui.popover>
```

### User Profile

```php
<x-ui.popover align="end" width="md">
    <x-slot:trigger_slot>
        <x-ui.avatar src="{{ $user->avatar }}" />
    </x-slot:trigger_slot>

    <x-slot:content>
        <div class="space-y-3">
            <div class="flex items-center gap-3">
                <x-ui.avatar src="{{ $user->avatar }}" size="lg" />
                <div>
                    <p class="text-sm font-medium">{{ $user->name }}</p>
                    <p class="text-xs text-muted-foreground">{{ $user->email }}</p>
                </div>
            </div>
            <hr class="border-border">
            <div class="space-y-1">
                <a href="/profile" class="block px-3 py-2 text-sm hover:bg-accent rounded-md">
                    Profile
                </a>
                <a href="/settings" class="block px-3 py-2 text-sm hover:bg-accent rounded-md">
                    Settings
                </a>
                <hr class="border-border my-1">
                <button class="w-full text-left px-3 py-2 text-sm hover:bg-accent rounded-md">
                    Sign out
                </button>
            </div>
        </div>
    </x-slot:content>
</x-ui.popover>
```

### Confirmation Dialog

```php
<x-ui.popover width="sm">
    <x-slot:trigger_slot>
        <x-ui.button variant="destructive">Delete</x-ui.button>
    </x-slot:trigger_slot>

    <x-slot:content>
        <div class="space-y-3">
            <h4 class="text-sm font-semibold">Confirm Deletion</h4>
            <p class="text-sm text-muted-foreground">
                Are you sure you want to delete this item? This action cannot be undone.
            </p>
            <div class="flex gap-2">
                <button class="x-ui.button flex-1" x-data="{ popover: $refs.popover }" @click="popover.close()">
                    Cancel
                </button>
                <button class="x-ui.button destructive flex-1">
                    Delete
                </button>
            </div>
        </div>
    </x-slot:content>
</x-ui.popover>
```

### Form in Popover

```php
<x-ui.popover width="md">
    <x-slot:trigger_slot>
        <x-ui.button>Add New</x-ui.button>
    </x-slot:trigger_slot>

    <x-slot:content>
        <form wire:submit="save" class="space-y-3">
            <div>
                <x-ui.label for="name" required="true">Name</x-ui.label>
                <x-ui.input id="name" wire:model="name" />
            </div>

            <div>
                <x-ui.label for="email">Email</x-ui.label>
                <x-ui.input id="email" type="email" wire:model="email" />
            </div>

            <button type="submit" class="x-ui.button w-full">
                Save
            </button>
        </form>
    </x-slot:content>
</x-ui.popover>
```

### With Custom Offset

```php
<!-- More spacing from trigger -->
<x-ui.popover :offset="16">
    <x-slot:trigger_slot>
        <x-ui.button>Custom Offset</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Popover with 16px offset</p>
    </x-slot:content>
</x-ui.popover>

<!-- No spacing (attached) -->
<x-ui.popover :offset="0">
    <x-slot:trigger_slot>
        <x-ui.button>Attached</x-ui.button>
    </x-slot:trigger_slot>
    <x-slot:content>
        <p class="text-sm">Popover attached to trigger</p>
    </x-slot:content>
</x-ui.popover>
```

## Styling

The Popover component uses Tailwind CSS utility classes:

- **Container**: Absolute positioned with proper z-index
- **Content**: Card-like appearance with rounded corners and shadow
- **Animation**: Smooth fade-in/scale animation on open
- **Arrow**: Optional arrow pointing to trigger element

### Width Options

| Width | CSS Width |
|-------|-----------|
| `auto` | `w-auto` (content-based) |
| `sm` | `w-48` (192px) |
|md` | `w-64` (256px) |
| `lg` | `w-80` (320px) |

## Accessibility

The Popover component includes accessibility features:

- **ARIA attributes**: Proper roles and states for screen readers
- **Focus management**: Trap focus within popover when open
- **Keyboard navigation**: ESC to close, Tab to navigate
- **Click outside**: Close popover when clicking outside
- **Trigger labeling**: Proper association with trigger element

### Best Practices

- Use clear, descriptive trigger text
- Keep popover content focused and relevant
- Don't nest popovers (avoid confusion)
- Ensure adequate contrast for readability
- Consider mobile experience (may need different positioning)
- Provide clear close mechanisms
- Don't hide critical actions in popovers

## Notes

- The component uses Alpine.js for interactivity
- Popovers are positioned relative to their trigger
- Click outside to close is enabled by default
- Press ESC to close the popover
- Multiple popovers can be open simultaneously
- The component automatically handles positioning collisions
- Z-index is managed automatically for proper stacking

## Next Steps

- Explore [Tooltip component](/docs/components/tooltip)
- Learn about [Dropdown Menu component](/docs/components/dropdown-menu)
- View [Dialog component](/docs/components/dialog)
