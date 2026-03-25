---
title: Drawer
description: Drawer component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/drawer.png
metaTitle: Drawer Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Drawer

The Drawer component provides a slide-out panel from the bottom of the screen for displaying additional content, forms, or actions without leaving the current context.

## Installation

Add the drawer component to your project:

<x-code-tabs
    npm="npx velyx@latest add drawer"
    pnpm="pnpm dlx velyx@latest add drawer"
    yarn="yarn dlx velyx@latest add drawer"
    bun="bunx --bun velyx@latest add drawer"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The drawer component requires Alpine.js for interactivity. Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Basic Drawer

<x-component-preview component="drawer">
    <x-ui.drawer id="basic-drawer">
        <x-ui.drawer.trigger as-child="true" target="basic-drawer">
            <x-ui.button>Open Drawer</x-ui.button>
        </x-ui.drawer.trigger>

        <x-ui.drawer.content>
            <div class="mx-auto w-full max-w-sm">
                <x-ui.drawer.header>
                    <x-ui.drawer.title>Account Settings</x-ui.drawer.title>
                    <x-ui.drawer.description>Manage your account preferences.</x-ui.drawer.description>
                </x-ui.drawer.header>

                <div class="p-4 pb-0">
                    <p class="text-sm text-muted-foreground">
                        Make changes to your account here. Click save when you're done.
                    </p>
                </div>

                <x-ui.drawer.footer>
                    <x-ui.drawer.close as-child="true" target="basic-drawer">
                        <x-ui.button>Save Changes</x-ui.button>
                    </x-ui.drawer.close>
                </x-ui.drawer.footer>
            </div>
        </x-ui.drawer.content>
    </x-ui.drawer>

</x-component-preview>

### Without Overlay

<x-component-preview component="drawer">
    <x-ui.drawer id="no-overlay-drawer">
        <x-ui.drawer.trigger as-child="true" target="no-overlay-drawer">
            <x-ui.button variant="outline">Open Without Overlay</x-ui.button>
        </x-ui.drawer.trigger>

        <x-ui.drawer.content :show-overlay="false">
            <div class="mx-auto w-full max-w-sm">
                <x-ui.drawer.header>
                    <x-ui.drawer.title>Quick Actions</x-ui.drawer.title>
                </x-ui.drawer.header>

                <div class="p-4 pb-0 space-y-2">
                    <button class="w-full text-left px-4 py-3 hover:bg-muted rounded-lg">View Profile</button>
                    <button class="w-full text-left px-4 py-3 hover:bg-muted rounded-lg">Edit Settings</button>
                    <button class="w-full text-left px-4 py-3 hover:bg-muted rounded-lg">Logout</button>
                </div>
            </div>
        </x-ui.drawer.content>
    </x-ui.drawer>

</x-component-preview>

### With Form

<x-component-preview component="drawer">
    <x-ui.drawer id="form-drawer">
        <x-ui.drawer.trigger as-child="true" target="form-drawer">
            <x-ui.button variant="secondary">Add Item</x-ui.button>
        </x-ui.drawer.trigger>

        <x-ui.drawer.content>
            <div class="mx-auto w-full max-w-sm">
                <x-ui.drawer.header>
                    <x-ui.drawer.title>Add New Item</x-ui.drawer.title>
                    <x-ui.drawer.description>Fill in the details below.</x-ui.drawer.description>
                </x-ui.drawer.header>

                <form class="space-y-4 p-4">
                    <div>
                        <label class="text-sm font-medium">Name</label>
                        <input type="text" class="w-full mt-1 px-3 py-2 border rounded-md" placeholder="Item name">
                    </div>
                    <div>
                        <label class="text-sm font-medium">Description</label>
                        <textarea class="w-full mt-1 px-3 py-2 border rounded-md" placeholder="Item description" rows="3"></textarea>
                    </div>
                </form>

                <x-ui.drawer.footer>
                    <x-ui.button type="submit">Add Item</x-ui.button>
                    <x-ui.drawer.close as-child="true" target="form-drawer">
                        <x-ui.button variant="outline">Cancel</x-ui.button>
                    </x-ui.drawer.close>
                </x-ui.drawer.footer>
            </div>
        </x-ui.drawer.content>
    </x-ui.drawer>

</x-component-preview>

### Interactive Example

<x-component-preview component="drawer">
    <x-ui.drawer id="interactive-drawer">
        <x-ui.drawer.trigger as-child="true" target="interactive-drawer">
            <x-ui.button variant="outline">Set Goals</x-ui.button>
        </x-ui.drawer.trigger>

        <x-ui.drawer.content>
            <div class="mx-auto w-full max-w-sm">
                <x-ui.drawer.header>
                    <x-ui.drawer.title>Daily Goal</x-ui.drawer.title>
                    <x-ui.drawer.description>Set your activity target.</x-ui.drawer.description>
                </x-ui.drawer.header>

                <div class="p-4 pb-0">
                    <div class="flex items-center justify-center space-x-4">
                        <button class="h-10 w-10 rounded-full border hover:bg-muted flex items-center justify-center">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/></svg>
                        </button>

                        <div class="text-5xl font-bold">250</div>

                        <button class="h-10 w-10 rounded-full border hover:bg-muted flex items-center justify-center">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        </button>
                    </div>

                    <div class="mt-4 text-center text-sm text-muted-foreground">
                        Calories per day
                    </div>
                </div>

                <x-ui.drawer.footer>
                    <x-ui.button>Save Goal</x-ui.button>
                </x-ui.drawer.footer>
            </div>
        </x-ui.drawer.content>
    </x-ui.drawer>

</x-component-preview>

## Components

The Drawer component consists of several sub-components:

| Component                   | Purpose                                               |
| --------------------------- | ----------------------------------------------------- |
| `<x-ui.drawer>`             | Main drawer container with Alpine.js state management |
| `<x-ui.drawer.trigger>`     | Button that opens the drawer                          |
| `<x-ui.drawer.content>`     | The slide-out panel content                           |
| `<x-ui.drawer.header>`      | Header section with title and description             |
| `<x-ui.drawer.title>`       | Drawer title                                          |
| `<x-ui.drawer.description>` | Optional description below title                      |
| `<x-ui.drawer.footer>`      | Footer section for action buttons                     |
| `<x-ui.drawer.close>`       | Button that closes the drawer                         |

## Props

### Drawer Root

| Prop            | Type      | Default | Description                               |
| --------------- | --------- | ------- | ----------------------------------------- |
| `open`          | `boolean` | `false` | Whether the drawer is initially open      |
| `closeOnEscape` | `boolean` | `true`  | Whether pressing Escape closes the drawer |

### Drawer Content

| Prop          | Type      | Default | Description                               |
| ------------- | --------- | ------- | ----------------------------------------- |
| `showOverlay` | `boolean` | `true`  | Whether to show the dark backdrop overlay |

### Drawer Trigger

| Prop      | Type      | Default  | Description                                          |
| --------- | --------- | -------- | ---------------------------------------------------- |
| `target`  | `string`  | required | ID of the drawer to open                             |
| `asChild` | `boolean` | `false`  | Whether to render as child element instead of button |

### Drawer Close

| Prop      | Type      | Default  | Description                                          |
| --------- | --------- | -------- | ---------------------------------------------------- |
| `target`  | `string`  | required | ID of the drawer to close                            |
| `asChild` | `boolean` | `false`  | Whether to render as child element instead of button |

## Examples

### Basic Drawer Structure

```php
<x-ui.drawer id="my-drawer">
    <x-ui.drawer.trigger target="my-drawer">
        <x-ui.button>Open</x-ui.button>
    </x-ui.drawer.trigger>

    <x-ui.drawer.content>
        <div class="mx-auto w-full max-w-sm">
            <x-ui.drawer.header>
                <x-ui.drawer.title>Title</x-ui.drawer.title>
            </x-ui.drawer.header>

            <div class="p-4">
                Your content here
            </div>
        </div>
    </x-ui.drawer.content>
</x-ui.drawer>
```

### With Custom Trigger

```php
<x-ui.drawer id="settings-drawer">
    <x-ui.drawer.trigger as-child="true" target="settings-drawer">
        <button class="px-4 py-2 bg-blue-500 text-white rounded">
            Open Settings
        </button>
    </x-ui.drawer.trigger>

    <x-ui.drawer.content>
        <!-- content -->
    </x-ui.drawer.content>
</x-ui.drawer>
```

### Controlled with Alpine.js

```php
<div x-data="{ open: false }">
    <button @click="$dispatch('drawer-open', { drawerId: 'my-drawer' })">
        Open Drawer
    </button>

    <x-ui.drawer id="my-drawer">
        <x-ui.drawer.content>
            <div class="p-4">
                Drawer content
            </div>
        </x-ui.drawer.content>
    </x-ui.drawer>
</div>
```

### With Livewire

```php
<div x-data="{ open: @entangle($drawerOpen).live }">
    <button @click="open = true">Toggle</button>

    <x-ui.drawer :open="open" id="livewire-drawer">
        <x-ui.drawer.content>
            <form wire:submit="save">
                <!-- form fields -->
            </form>
        </x-ui.drawer.content>
    </x-ui.drawer>
</div>
```

### Multiple Drawers

```php
<x-ui.drawer id="drawer-1">
    <x-ui.drawer.trigger target="drawer-1">
        <x-ui.button>Open Drawer 1</x-ui.button>
    </x-ui.drawer.trigger>
    <!-- content -->
</x-ui.drawer>

<x-ui.drawer id="drawer-2">
    <x-ui.drawer.trigger target="drawer-2">
        <x-ui.button>Open Drawer 2</x-ui.button>
    </x-ui.drawer.trigger>
    <!-- content -->
</x-ui.drawer>
```

### Without Close on Escape

```php
<x-ui.drawer :close-on-escape="false" id="important-drawer">
    <x-ui.drawer.content>
        <div class="p-4">
            <p>This drawer requires explicit action to close.</p>
            <x-ui.drawer.close target="important-drawer">
                <x-ui.button>Close</x-ui.button>
            </x-ui.drawer.close>
        </div>
    </x-ui.drawer.content>
</x-ui.drawer>
```

## Accessibility

The Drawer component includes proper ARIA attributes and keyboard support:

- **Focus Management**: Focus is trapped within the drawer when open
- **Escape Key**: Closes the drawer by default (can be disabled)
- **Click Outside**: Clicking the overlay closes the drawer
- **Scroll Lock**: Body scroll is locked when drawer is open
- **Screen Reader**: Proper ARIA roles and labels
- **Teleport**: Content is teleported to body for proper z-index layering

## Styling

The drawer uses Tailwind CSS utility classes:

- **Overlay**: `bg-black/50` with fade transitions
- **Content**: `fixed inset-x-0 bottom-0` for bottom sheet style
- **Handle**: `h-2 w-[100px]` drag indicator at top
- **Animation**: Slide up from bottom with `translate-y`

## Notes

- The drawer animates from the bottom of the screen (bottom sheet style)
- Click outside the drawer or press Escape to close
- The handle at the top provides a visual indicator for swipe gestures
- Content is automatically teleported to the body element
- Multiple drawers can be used on the same page with unique IDs
- Body scroll is locked when the drawer is open

## Next Steps

- Explore [Dialog component](/docs/components/dialog)
- Learn about [Dialog component](/docs/components/dialog)
- View [Popover component](/docs/components/popover)
