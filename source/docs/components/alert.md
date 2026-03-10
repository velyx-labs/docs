---
title: Alert
description: Alert component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/alert.png
metaTitle: Alert Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Alert

Alerts display short, important messages in a way that attracts the user's attention without interrupting the user's task.

## Installation

Add the alert component to your project:

<x-code-tabs
    npm="npx velyx@latest add alert"
    pnpm="pnpm dlx velyx@latest add alert"
    yarn="yarn dlx velyx@latest add alert"
    bun="bunx --bun velyx@latest add alert"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The alert component requires Alpine.js for interactivity (dismiss functionality). Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Default Alert

<x-component-preview component="alert" variant="default">
    ```blade
    <x-alert title="Update available">
        A new version is available. Please update to get the latest features.
    </x-alert>
</x-component-preview>

### Success Alert

<x-component-preview component="alert" variant="success">
    ```blade
    <x-alert variant="success" title="Success">
        Your changes have been saved successfully.
    </x-alert>
</x-component-preview>

### Destructive Alert

<x-component-preview component="alert" variant="destructive">
    ```blade
    <x-alert variant="destructive" title="Error">
        Failed to save your changes. Please try again.
    </x-alert>
</x-component-preview>

### Warning Alert

<x-component-preview component="alert" variant="warning">
    ```blade
    <x-alert variant="warning" title="Warning">
        Please review this important warning message.
    </x-alert>
</x-component-preview>

### Info Alert

<x-component-preview component="alert" variant="info">
    ```blade
    <x-alert variant="info" title="Information">
        Here is some useful information for you.
    </x-alert>
</x-component-preview>

### Non-dismissible Alert

<x-component-preview component="alert" variant="default" :props="['dismissible' => false]">
    ```blade
    <x-alert variant="default" title="Important Notice" :dismissible="false">
        This alert cannot be dismissed and requires your attention.
    </x-alert>
</x-component-preview>

### Alert Without Title

<x-component-preview component="alert" variant="default">
    ```blade
    <x-alert variant="default">
        This is an alert message without a title.
    </x-alert>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `default` | Alert style variant (default, success, destructive, warning, info) |
| `dismissible` | `boolean` | `false` | Show dismiss button |
| `title` | `string` | `null` | Alert title |
| `icon` | `string` | `null` | Override default icon |

## Variants

- `default` - Default gray styling
- `success` - Green styling with check icon
- `destructive` - Red styling with alert icon
- `warning` - Amber/yellow styling with warning icon
- `info` - Blue styling with info icon

## Examples

### Form Success Message

<x-component-preview component="alert" variant="success">
    ```blade
    <x-alert variant="success" title="Account Created" dismissible>
        <p>Your account has been successfully created. You can now log in.</p>
        <a href="/login" class="underline">Go to login page →</a>
    </x-alert>
</x-component-preview>

### Form Validation Errors

<x-component-preview component="alert" variant="destructive">
    ```blade
    <x-alert variant="destructive" title="Validation Errors" dismissible>
        <ul class="list-disc list-inside space-y-1">
            <li>Email field is required</li>
            <li>Password must be at least 8 characters</li>
        </ul>
    </x-alert>
</x-component-preview>

### System Status

<x-component-preview component="alert" variant="warning" :props="['dismissible' => false]">
    ```blade
    <x-alert variant="warning" title="Scheduled Maintenance" :dismissible="false">
        <p class="mb-2">System maintenance is scheduled for <strong>March 10, 2026 at 2:00 AM UTC</strong>.</p>
        <p class="text-sm">Expected downtime: approximately 2 hours.</p>
    </x-alert>
</x-component-preview>

### Custom Icon

<x-component-preview component="alert" variant="info">
    ```blade
    <x-alert variant="info" title="Pro Tip" icon="lightbulb">
        You can use keyboard shortcuts to navigate faster. Press <code>?</code> to see all shortcuts.
    </x-alert>
</x-component-preview>

## Customization

You can customize the alert component by modifying the variant classes:

```blade
{{-- resources/views/components/ui/alert.blade.php --}}

@props([
    'variant' => 'default',
    'dismissible' => false,
    'title' => null,
    'icon' => null,
])

@php
$variantClasses = match($variant) {
    'success' => 'bg-emerald-50 dark:bg-emerald-950/30 border-emerald-200 dark:border-emerald-800 text-emerald-900 dark:text-emerald-100',
    'destructive' => 'bg-destructive/10 border-destructive/20 text-destructive',
    // ... add your custom variants
};
@endphp

<div {{ $attributes->class(['relative w-full rounded-lg border p-4', $variantClasses]) }}>
    {{ $slot }}
</div>
```

## Accessibility

Alerts include:

- **ARIA role="alert"** - Screen readers announce alerts immediately
- **Dismissible button** - Properly labeled for screen readers
- **Color contrast** - Meets WCAG AA standards
- **Keyboard accessible** - Dismissible via keyboard

## Animation

Alerts include smooth transitions for dismiss action:

- **Fade in** - Smooth appearance
- **Scale** - Subtle scale effect
- **Fade out** - Smooth dismissal

## Next Steps

- Explore [Button component](/docs/components/button)
- Learn about [Modal component](/docs/components/modal)
- View [Input component](/docs/components/input)
