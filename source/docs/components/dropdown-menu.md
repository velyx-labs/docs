---
title: Dropdown Menu
description: Dropdown Menu component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/dropdown-menu.png
metaTitle: Dropdown Menu Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Dropdown Menu

The Dropdown Menu component displays a list of actions or content in a floating panel triggered by a button or other element.

## Installation

Add the dropdown menu component to your project:

<x-code-tabs
    npm="npx velyx@latest add dropdown-menu"
    pnpm="pnpm dlx velyx@latest add dropdown-menu"
    yarn="yarn dlx velyx@latest add dropdown-menu"
    bun="bunx --bun velyx@latest add dropdown-menu"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The dropdown menu component requires Alpine.js for interactivity. Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Basic Dropdown Menu

<x-component-preview component="dropdown-menu">
    <x-ui.dropdown-menu>
        <x-ui.dropdown-menu.trigger as-child="true">
            <x-ui.button>Open Menu</x-ui.button>
        </x-ui.dropdown-menu.trigger>

        <x-ui.dropdown-menu.content align="start">
            <x-ui.dropdown-menu.item>Profile</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.item>Settings</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.separator />
            <x-ui.dropdown-menu.item>Logout</x-ui.dropdown-menu.item>
        </x-ui.dropdown-menu.content>
    </x-ui.dropdown-menu>
</x-component-preview>

### With Keyboard Shortcuts

<x-component-preview component="dropdown-menu">
    <x-ui.dropdown-menu>
        <x-ui.dropdown-menu.trigger as-child="true">
            <x-ui.button variant="outline">Options</x-ui.button>
        </x-ui.dropdown-menu.trigger>

        <x-ui.dropdown-menu.content>
            <x-ui.dropdown-menu.item>
                Profile
                <x-ui.dropdown-menu.shortcut>⌘P</x-ui.dropdown-menu.shortcut>
            </x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.item>
                Settings
                <x-ui.dropdown-menu.shortcut>⌘S</x-ui.dropdown-menu.shortcut>
            </x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.separator />
            <x-ui.dropdown-menu.item>
                Logout
                <x-ui.dropdown-menu.shortcut>⇧⌘Q</x-ui.dropdown-menu.shortcut>
            </x-ui.dropdown-menu.item>
        </x-ui.dropdown-menu.content>
    </x-ui.dropdown-menu>
</x-component-preview>

### With Groups and Labels

<x-component-preview component="dropdown-menu">
    <x-ui.dropdown-menu>
        <x-ui.dropdown-menu.trigger as-child="true">
            <x-ui.button variant="secondary">Account</x-ui.button>
        </x-ui.dropdown-menu.trigger>

        <x-ui.dropdown-menu.content>
            <x-ui.dropdown-menu.group>
                <x-ui.dropdown-menu.label>My Account</x-ui.dropdown-menu.label>
                <x-ui.dropdown-menu.item>Profile</x-ui.dropdown-menu.item>
                <x-ui.dropdown-menu.item>Billing</x-ui.dropdown-menu.item>
                <x-ui.dropdown-menu.item>Settings</x-ui.dropdown-menu.item>
            </x-ui.dropdown-menu.group>

            <x-ui.dropdown-menu.separator />

            <x-ui.dropdown-menu.group>
                <x-ui.dropdown-menu.label>Workspace</x-ui.dropdown-menu.label>
                <x-ui.dropdown-menu.item>Team</x-ui.dropdown-menu.item>
                <x-ui.dropdown-menu.item>Projects</x-ui.dropdown-menu.item>
            </x-ui.dropdown-menu.group>
        </x-ui.dropdown-menu.content>
    </x-ui.dropdown-menu>
</x-component-preview>

### With Nested Submenus

<x-component-preview component="dropdown-menu">
    <x-ui.dropdown-menu>
        <x-ui.dropdown-menu.trigger as-child="true">
            <x-ui.button variant="outline">New</x-ui.button>
        </x-ui.dropdown-menu.trigger>

        <x-ui.dropdown-menu.content>
            <x-ui.dropdown-menu.item>New Tab</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.item>New Window</x-ui.dropdown-menu.item>

            <x-ui.dropdown-menu.sub>
                <x-ui.dropdown-menu.sub-trigger>New File</x-ui.dropdown-menu.sub-trigger>
                <x-ui.dropdown-menu.portal>
                    <x-ui.dropdown-menu.sub-content>
                        <x-ui.dropdown-menu.item>Document</x-ui.dropdown-menu.item>
                        <x-ui.dropdown-menu.item>Spreadsheet</x-ui.dropdown-menu.item>
                        <x-ui.dropdown-menu.item>Presentation</x-ui.dropdown-menu.item>
                        <x-ui.dropdown-menu.separator />
                        <x-ui.dropdown-menu.item>More...</x-ui.dropdown-menu.item>
                    </x-ui.dropdown-menu.sub-content>
                </x-ui.dropdown-menu.portal>
            </x-ui.dropdown-menu.sub>
        </x-ui.dropdown-menu.content>
    </x-ui.dropdown-menu>
</x-component-preview>

### With Disabled Items

<x-component-preview component="dropdown-menu">
    <x-ui.dropdown-menu>
        <x-ui.dropdown-menu.trigger as-child="true">
            <x-ui.button>Actions</x-ui.button>
        </x-ui.dropdown-menu.trigger>

        <x-ui.dropdown-menu.content>
            <x-ui.dropdown-menu.item>Edit</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.item>Duplicate</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.item :disabled="true">Delete</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.separator />
            <x-ui.dropdown-menu.item :disabled="true">Export</x-ui.dropdown-menu.item>
        </x-ui.dropdown-menu.content>
    </x-ui.dropdown-menu>
</x-component-preview>

### Right Aligned

<x-component-preview component="dropdown-menu">
    <x-ui.dropdown-menu>
        <x-ui.dropdown-menu.trigger as-child="true">
            <x-ui.button variant="outline">Align Right</x-ui.button>
        </x-ui.dropdown-menu.trigger>

        <x-ui.dropdown-menu.content align="end">
            <x-ui.dropdown-menu.item>Save</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.item>Share</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.separator />
            <x-ui.dropdown-menu.item>Delete</x-ui.dropdown-menu.item>
        </x-ui.dropdown-menu.content>
    </x-ui.dropdown-menu>
</x-component-preview>

## Components

The Dropdown Menu component consists of several sub-components:

| Component | Purpose |
|-----------|---------|
| `<x-ui.dropdown-menu>` | Root container with Alpine.js state |
| `<x-ui.dropdown-menu.trigger>` | Button that opens the menu |
| `<x-ui.dropdown-menu.content>` | Floating menu panel |
| `<x-ui.dropdown-menu.item>` | Clickable menu item |
| `<x-ui.dropdown-menu.group>` | Groups related items |
| `<x-ui.dropdown-menu.label>` | Non-interactive label for groups |
| `<x-ui.dropdown-menu.separator>` | Visual divider between sections |
| `<x-ui.dropdown-menu.shortcut>` | Keyboard shortcut display |
| `<x-ui.dropdown-menu.sub>` | Nested submenu |
| `<x-ui.dropdown-menu.sub-trigger>` | Trigger for submenu |
| `<x-ui.dropdown-menu.sub-content>` | Content of submenu |
| `<x-ui.dropdown-menu.portal>` | Teleport wrapper for submenu |

## Props

### Dropdown Menu Root

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `open` | `boolean` | `false` | Whether the menu is initially open |

### Dropdown Menu Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `asChild` | `boolean` | `false` | Render as child element instead of button |

### Dropdown Menu Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `align` | `string` | `'start'` | Alignment: `start`, `center`, or `end` |
| `side` | `string` | `'bottom'` | Side to display: `top`, `right`, `bottom`, or `left` |

### Dropdown Menu Item

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `disabled` | `boolean` | `false` | Whether the item is disabled |
| `inset` | `boolean` | `false` | Add inset padding for nested items |

### Dropdown Menu Checkbox

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `checked` | `boolean` | `false` | Whether the checkbox is checked |
| `disabled` | `boolean` | `false` | Whether the checkbox is disabled |

## Examples

### Basic Menu

```php
<x-ui.dropdown-menu>
    <x-ui.dropdown-menu.trigger as-child="true">
        <x-ui.button>Open Menu</x-ui.button>
    </x-ui.dropdown-menu.trigger>

    <x-ui.dropdown-menu.content>
        <x-ui.dropdown-menu.item>Profile</x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.item>Settings</x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.separator />
        <x-ui.dropdown-menu.item>Logout</x-ui.dropdown-menu.item>
    </x-ui.dropdown-menu.content>
</x-ui.dropdown-menu>
```

### With Icons

```php
<x-ui.dropdown-menu>
    <x-ui.dropdown-menu.trigger as-child="true">
        <x-ui.button variant="ghost" size="icon">
            <x-lucide-more-horizontal class="h-5 w-5" />
        </x-ui.button>
    </x-ui.dropdown-menu.trigger>

    <x-ui.dropdown-menu.content>
        <x-ui.dropdown-menu.item>
            <x-lucide-user class="mr-2 h-4 w-4" />
            Profile
        </x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.item>
            <x-lucide-settings class="mr-2 h-4 w-4" />
            Settings
        </x-ui.dropdown-menu.item>
    </x-ui.dropdown-menu.content>
</x-ui.dropdown-menu>
```

### With Checkbox Items

```php
<x-ui.dropdown-menu>
    <x-ui.dropdown-menu.trigger as-child="true">
        <x-ui.button>Filter</x-ui.button>
    </x-ui.dropdown-menu.trigger>

    <x-ui.dropdown-menu.content>
        <x-ui.dropdown-menu.checkbox-item :checked="true">
            Show notifications
        </x-ui.dropdown-menu.checkbox-item>
        <x-ui.dropdown-menu.checkbox-item>
            Enable sounds
        </x-ui.dropdown-menu.checkbox-item>
        <x-ui.dropdown-menu.checkbox-item :disabled="true">
            Auto-save (disabled)
        </x-ui.dropdown-menu.checkbox-item>
    </x-ui.dropdown-menu.content>
</x-ui.dropdown-menu>
```

### With Radio Items

```php
<x-ui.dropdown-menu>
    <x-ui.dropdown-menu.trigger as-child="true">
        <x-ui.button>View</x-ui.button>
    </x-ui.dropdown-menu.trigger>

    <x-ui.dropdown-menu.content>
        <x-ui.dropdown-menu.radio-item value="list" checked>
            List view
        </x-ui.dropdown-menu.radio-item>
        <x-ui.dropdown-menu.radio-item value="grid">
            Grid view
        </x-ui.dropdown-menu.radio-item>
        <x-ui.dropdown-menu.radio-item value="columns">
            Columns view
        </x-ui.dropdown-menu.radio-item>
    </x-ui.dropdown-menu.content>
</x-ui.dropdown-menu>
```

### With Livewire Actions

```php
<x-ui.dropdown-menu>
    <x-ui.dropdown-menu.trigger as-child="true">
        <x-ui.button>Actions</x-ui.button>
    </x-ui.dropdown-menu.trigger>

    <x-ui.dropdown-menu.content>
        <x-ui.dropdown-menu.item wire:click="edit">
            Edit
        </x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.item wire:click="duplicate">
            Duplicate
        </x-ui.dropdown-menu.item>
        <x-ui.dropdown-menu.separator />
        <x-ui.dropdown-menu.item wire:click="delete" class="text-destructive">
            Delete
        </x-ui.dropdown-menu.item>
    </x-ui.dropdown-menu.content>
</x-ui.dropdown-menu>
```

### Full Example with All Features

```php
<x-ui.dropdown-menu>
    <x-ui.dropdown-menu.trigger as-child="true">
        <x-ui.button variant="outline">
            <x-lucide-settings class="mr-2 h-4 w-4" />
            Settings
        </x-ui.button>
    </x-ui.dropdown-menu.trigger>

    <x-ui.dropdown-menu.content align="end">
        <x-ui.dropdown-menu.group>
            <x-ui.dropdown-menu.label>Appearance</x-ui.dropdown-menu.label>
            <x-ui.dropdown-menu.radio-item value="light">Light</x-ui.dropdown-menu.radio-item>
            <x-ui.dropdown-menu.radio-item value="dark">Dark</x-ui.dropdown-menu.radio-item>
            <x-ui.dropdown-menu.radio-item value="system">System</x-ui.dropdown-menu.radio-item>
        </x-ui.dropdown-menu.group>

        <x-ui.dropdown-menu.separator />

        <x-ui.dropdown-menu.group>
            <x-ui.dropdown-menu.label>Account</x-ui.dropdown-menu.label>
            <x-ui.dropdown-menu.item>Profile</x-ui.dropdown-menu.item>
            <x-ui.dropdown-menu.sub>
                <x-ui.dropdown-menu.sub-trigger>Preferences</x-ui.dropdown-menu.sub-trigger>
                <x-ui.dropdown-menu.portal>
                    <x-ui.dropdown-menu.sub-content>
                        <x-ui.dropdown-menu.item>General</x-ui.dropdown-menu.item>
                        <x-ui.dropdown-menu.item>Privacy</x-ui.dropdown-menu.item>
                        <x-ui.dropdown-menu.item>Notifications</x-ui.dropdown-menu.item>
                    </x-ui.dropdown-menu.sub-content>
                </x-ui.dropdown-menu.portal>
            </x-ui.dropdown-menu.sub>
        </x-ui.dropdown-menu.group>
    </x-ui.dropdown-menu.content>
</x-ui.dropdown-menu>
```

## Accessibility

The Dropdown Menu component includes proper ARIA attributes and keyboard support:

- **Enter/Space**: Open menu and select items
- **Arrow Keys**: Navigate between items
- **Escape**: Close menu
- **Tab**: Closes menu and moves focus
- **Home/End**: Jump to first/last item
- **Submenus**: Arrow keys to enter/exit
- Proper ARIA roles and states
- Focus management when opening/closing

## Styling

The dropdown menu uses Tailwind CSS utility classes:

- **Content**: `bg-popover border-border` with shadow
- **Item**: `hover:bg-accent hover:text-accent-foreground`
- **Separator**: `bg-border h-px my-1`
- **Label**: `text-muted-foreground px-2 py-1.5 text-xs font-semibold`
- **Shortcut**: `ml-auto text-muted-foreground text-xs`

## Notes

- Click outside the menu to close it
- Press Escape to close the menu
- Use arrow keys to navigate items
- Submenus open on hover or keyboard navigation
- Disabled items are not clickable and appear faded
- The menu uses teleport for proper z-index layering

## Next Steps

- Explore [Context Menu component](/docs/components/context-menu)
- Learn about [Popover component](/docs/components/popover)
- View [Navigation Menu component](/docs/components/navigation-menu)
