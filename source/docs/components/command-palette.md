---
title: Command Palette
description: Command Palette component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/command-palette.png
metaTitle: Command Palette Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Command Palette

The Command Palette component provides a searchable, keyboard-accessible interface for quick actions, navigation, and commands. Similar to VS Code's Command Palette or Spotlight on macOS.

## Installation

Add the command palette component to your project:

<x-code-tabs
    npm="npx velyx@latest add command-palette"
    pnpm="pnpm dlx velyx@latest add command-palette"
    yarn="yarn dlx velyx@latest add command-palette"
    bun="bunx --bun velyx@latest add command-palette"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The command palette component requires Alpine.js for interactivity. Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Default Command Palette

<x-component-preview component="command-palette">
    <x-ui.command-palette :open="true">
        <ul class="p-2">
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Open settings
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Search components
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Go to dashboard
            </li>
        </ul>
    </x-ui.command-palette>
</x-component-preview>

### Custom Placeholder

<x-component-preview component="command-palette" :props="['placeholder' => 'Search components...']">
    <x-ui.command-palette :open="true" placeholder="Search components...">
        <ul class="p-2">
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Button component
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Alert component
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Dialog component
            </li>
        </ul>
    </x-ui.command-palette>
</x-component-preview>

### With Icons

<x-component-preview component="command-palette">
    <x-ui.command-palette :open="true" placeholder="Search actions...">
        <ul class="p-2">
            <li class="text-foreground hover:bg-muted flex items-center gap-3 rounded-md px-3 py-2 text-sm">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                Open settings
            </li>
            <li class="text-foreground hover:bg-muted flex items-center gap-3 rounded-md px-3 py-2 text-sm">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                Search files
            </li>
            <li class="text-foreground hover:bg-muted flex items-center gap-3 rounded-md px-3 py-2 text-sm">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                Go to dashboard
            </li>
        </ul>
    </x-ui.command-palette>
</x-component-preview>

### With Sections

<x-component-preview component="command-palette">
    <x-ui.command-palette :open="true" placeholder="Type a command or search...">
        <ul class="p-2">
            <li class="text-muted-foreground px-3 py-1.5 text-xs font-semibold">
                General
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Open settings
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                View documentation
            </li>

            <li class="text-muted-foreground px-3 py-1.5 text-xs font-semibold mt-2">
                Navigation
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Go to dashboard
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                View all components
            </li>

            <li class="text-muted-foreground px-3 py-1.5 text-xs font-semibold mt-2">
                Account
            </li>
            <li class="text-foreground hover:bg-muted rounded-md px-3 py-2 text-sm">
                Sign out
            </li>
        </ul>
    </x-ui.command-palette>

</x-component-preview>

### With Keyboard Shortcuts

<x-component-preview component="command-palette">
    <x-ui.command-palette :open="true" placeholder="Search...">
        <ul class="p-2">
            <li class="text-foreground hover:bg-muted flex items-center justify-between rounded-md px-3 py-2 text-sm">
                <span>Open settings</span>
                <kbd class="bg-muted text-muted-foreground border-border rounded border px-1.5 py-0.5 text-xs">⌘S</kbd>
            </li>
            <li class="text-foreground hover:bg-muted flex items-center justify-between rounded-md px-3 py-2 text-sm">
                <span>Save changes</span>
                <kbd class="bg-muted text-muted-foreground border-border rounded border px-1.5 py-0.5 text-xs">⌘K</kbd>
            </li>
            <li class="text-foreground hover:bg-muted flex items-center justify-between rounded-md px-3 py-2 text-sm">
                <span>New project</span>
                <kbd class="bg-muted text-muted-foreground border-border rounded border px-1.5 py-0.5 text-xs">⌘N</kbd>
            </li>
        </ul>
    </x-ui.command-palette>
</x-component-preview>

## Props

| Prop          | Type      | Default                       | Description                           |
| ------------- | --------- | ----------------------------- | ------------------------------------- |
| `open`        | `boolean` | `false`                       | Whether the command palette is open   |
| `placeholder` | `string`  | `'Search commands, files...'` | Placeholder text for the search input |

## Keyboard Shortcuts

The command palette includes built-in keyboard shortcuts:

| Shortcut        | Action                    |
| --------------- | ------------------------- |
| `⌘K` / `Ctrl+K` | Open the command palette  |
| `Escape`        | Close the command palette |
| `↑` / `↓`       | Navigate through items    |
| `Enter`         | Select focused item       |

## Examples

### Basic Usage

```php
<x-ui.command-palette :open="true">
    <ul class="p-2">
        <li class="hover:bg-muted rounded-md px-3 py-2 text-sm">
            Command 1
        </li>
        <li class="hover:bg-muted rounded-md px-3 py-2 text-sm">
            Command 2
        </li>
    </ul>
</x-ui.command-palette>
```

### With Custom Placeholder

```php
<x-ui.command-palette
    :open="true"
    placeholder="Search components..."
>
    <ul class="p-2">
        <li>Button</li>
        <li>Alert</li>
    </ul>
</x-ui.command-palette>
```

### Controlled with Alpine.js

```php
<div x-data="{ open: false }">
    <button @click="open = true">Open (⌘K)</button>

    <x-ui.command-palette :open="open">
        <ul class="p-2">
            <li>Command 1</li>
            <li>Command 2</li>
        </ul>
    </x-ui.command-palette>
</div>
```

### With Livewire Integration

```php
<div x-data="{ open: @entangle($open) }">
    <button @click="open = true">Toggle Palette</button>

    <x-ui.command-palette :open="open">
        <ul class="p-2">
            <li wire:click="handleAction('settings')">
                Settings
            </li>
            <li wire:click="handleAction('logout')">
                Logout
            </li>
        </ul>
    </x-ui.command-palette>
</div>
```

## Accessibility

The Command Palette component includes proper ARIA attributes and keyboard support:

- **Role**: Dialog with `aria-modal="true"`
- **Focus Management**: Auto-focuses search input when opened
- **Keyboard Navigation**: Full keyboard support for navigation and selection
- **Escape Key**: Closes the palette
- **Screen Reader**: Proper labels and roles for assistive technologies

## Notes

- The component uses Alpine.js for state management and interactivity
- The `open` prop controls the visibility - use `x-data` or `@entangle` for dynamic control
- The footer shows helpful keyboard shortcuts by default
- Items can contain any content including icons, descriptions, and keyboard shortcuts
- Maximum height of results area is `320px` with scroll overflow

## Next Steps

- Explore [Dialog component](/docs/components/dialog)
- Learn about [Dropdown component](/docs/components/dropdown)
- View [Input component](/docs/components/input)
