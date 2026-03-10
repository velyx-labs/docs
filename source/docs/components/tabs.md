---
title: Tabs
description: Tabs component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Tabs Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Tabs

Tabs organize related content into focusable panels so users can switch context without leaving the page.

## Installation

Add the tabs component to your project:

<x-code-tabs
    npm="npx velyx@latest add tabs"
    pnpm="pnpm dlx velyx@latest add tabs"
    yarn="yarn dlx velyx@latest add tabs"
    bun="bunx --bun velyx@latest add tabs"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The tabs component uses Alpine.js for active state and keyboard interactions.
</x-callout>

## Usage

### Underline Tabs

<x-component-preview component="tabs">
    <x-ui.tabs.tabs default="overview" variant="underline">
        <x-ui.tabs.list variant="underline">
            <x-ui.tabs.trigger tab="overview" variant="underline" icon="layout-grid">Overview</x-ui.tabs.trigger>
            <x-ui.tabs.trigger tab="activity" variant="underline" icon="activity">Activity</x-ui.tabs.trigger>
            <x-ui.tabs.trigger tab="settings" variant="underline" icon="settings">Settings</x-ui.tabs.trigger>
        </x-ui.tabs.list>

        <x-ui.tabs.content tab="overview">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                Project overview with key metrics and latest highlights.
            </div>
        </x-ui.tabs.content>

        <x-ui.tabs.content tab="activity">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                Recent activity stream from collaborators and system events.
            </div>
        </x-ui.tabs.content>

        <x-ui.tabs.content tab="settings">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                Configuration panel for notifications and preferences.
            </div>
        </x-ui.tabs.content>
    </x-ui.tabs.tabs>
</x-component-preview>

### Pills Variant

<x-component-preview component="tabs" :props="['variant' => 'pills']">
    <x-ui.tabs.tabs default="overview" variant="pills">
        <x-ui.tabs.list variant="pills">
            <x-ui.tabs.trigger tab="overview" variant="pills" icon="layout-grid">Overview</x-ui.tabs.trigger>
            <x-ui.tabs.trigger tab="activity" variant="pills" icon="activity">Activity</x-ui.tabs.trigger>
            <x-ui.tabs.trigger tab="settings" variant="pills" icon="settings">Settings</x-ui.tabs.trigger>
        </x-ui.tabs.list>

        <x-ui.tabs.content tab="overview">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                A softer tab style for dashboards, settings pages, and app surfaces.
            </div>
        </x-ui.tabs.content>

        <x-ui.tabs.content tab="activity">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                Pills work well when tab switches need stronger visual separation.
            </div>
        </x-ui.tabs.content>

        <x-ui.tabs.content tab="settings">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                Use them for preference groups, workspace controls, or content modes.
            </div>
        </x-ui.tabs.content>
    </x-ui.tabs.tabs>
</x-component-preview>

### Enclosed Variant

<x-component-preview component="tabs" :props="['variant' => 'enclosed']">
    <x-ui.tabs.tabs default="activity" variant="enclosed">
        <x-ui.tabs.list variant="enclosed">
            <x-ui.tabs.trigger tab="overview" variant="enclosed" icon="layout-grid">Overview</x-ui.tabs.trigger>
            <x-ui.tabs.trigger tab="activity" variant="enclosed" icon="activity">Activity</x-ui.tabs.trigger>
            <x-ui.tabs.trigger tab="settings" variant="enclosed" icon="settings">Settings</x-ui.tabs.trigger>
        </x-ui.tabs.list>

        <x-ui.tabs.content tab="overview">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                Enclosed tabs are useful when you want a stronger boundary with the content area.
            </div>
        </x-ui.tabs.content>

        <x-ui.tabs.content tab="activity">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                This variant keeps the active tab visually attached to the panel below it.
            </div>
        </x-ui.tabs.content>

        <x-ui.tabs.content tab="settings">
            <div class="rounded-lg border border-border bg-card p-4 text-sm text-card-foreground">
                It works well for account pages, admin panels, and structured settings screens.
            </div>
        </x-ui.tabs.content>
    </x-ui.tabs.tabs>
</x-component-preview>

## Props

### Tabs Root

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `default` | `string|null` | `null` | The tab that should be active on initial render |
| `variant` | `string` | `'underline'` | Visual style for the tabs: `underline`, `pills`, or `enclosed` |

### Tabs Trigger

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `tab` | `string` | required | Unique identifier for the tab and its matching panel |
| `icon` | `string|null` | `null` | Optional Lucide icon shown before the label |
| `variant` | `string` | `'underline'` | Matches the list/root variant for consistent styling |

### Tabs Content

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `tab` | `string` | required | The tab id this panel belongs to |

## Example Structure

```php
<x-ui.tabs.tabs default="overview" variant="underline">
    <x-ui.tabs.list variant="underline">
        <x-ui.tabs.trigger tab="overview" variant="underline">Overview</x-ui.tabs.trigger>
        <x-ui.tabs.trigger tab="activity" variant="underline">Activity</x-ui.tabs.trigger>
        <x-ui.tabs.trigger tab="settings" variant="underline">Settings</x-ui.tabs.trigger>
    </x-ui.tabs.list>

    <x-ui.tabs.content tab="overview">
        Overview content
    </x-ui.tabs.content>

    <x-ui.tabs.content tab="activity">
        Activity content
    </x-ui.tabs.content>

    <x-ui.tabs.content tab="settings">
        Settings content
    </x-ui.tabs.content>
</x-ui.tabs.tabs>
```

## Accessibility

Tabs include accessible roles and keyboard navigation:

- **Arrow Left / Arrow Right** - Move focus between tab triggers
- **Enter / Space** - Activate the focused tab
- **ARIA roles** - Uses `tablist`, `tab`, and `tabpanel`
- **Focus states** - Visible focus ring for keyboard users

## Next Steps

- Explore [Accordion component](/docs/components/accordion)
- Learn about [Dialog component](/docs/components/dialog)
- View [Drawer component](/docs/components/drawer)
