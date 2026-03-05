---
title: Button
description: Button component with multiple variants and sizes
extends: _layouts.documentation
section: content
---

# Button

Buttons allow users to perform actions or navigate with a single click.

## Installation

Add the button component to your project:

<x-code-tabs
    npm="npx velyx add button"
    pnpm="pnpm dlx velyx add button"
    yarn="yarn dlx velyx add button"
    bun="bunx --bun velyx add button"
/>

## Usage

### Basic Button

```php
<x-button>Click me</x-button>
```

### Variants

```php
<x-button variant="default">Default</x-button>
<x-button variant="primary">Primary</x-button>
<x-button variant="secondary">Secondary</x-button>
<x-button variant="outline">Outline</x-button>
<x-button variant="ghost">Ghost</x-button>
<x-button variant="destructive">Destructive</x-button>
```

### Sizes

```php
<x-button size="sm">Small</x-button>
<x-button size="default">Default</x-button>
<x-button size="lg">Large</x-button>
```

### With Icons

```php
<x-button>
    <x-icon name="plus" class="mr-2" />
    Add Item
</x-button>

<x-button variant="outline">
    <x-icon name="github" class="mr-2" />
    GitHub
</x-button>
```

### Icon Only

```php
<x-button size="icon">
    <x-icon name="x" />
</x-button>

<x-button variant="outline" size="icon">
    <x-icon name="settings" />
</x-button>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `default` | Button style variant |
| `size` | `string` | `default` | Button size |

### Variants

- `default` - Default styling
- `primary` - Primary action button
- `secondary` - Secondary action button
- `outline` - Outlined button
- `ghost` - Minimal styling, hover only
- `destructive` - Dangerous action (delete, remove)

### Sizes

- `sm` - Small button
- `default` - Default size
- `lg` - Large button
- `icon` - Square button for icons

## Examples

### Submit Form

```php
<form method="POST" action="/submit">
    @csrf
    <x-button type="submit">Submit</x-button>
</form>
```

### Link Button

```php
<a href="{{ route('dashboard') }}">
    <x-button>Go to Dashboard</x-button>
</a>
```

### Disabled State

```php
<x-button disabled>
    Disabled
</x-button>
```

### Full Width

```php
<x-button class="w-full">
    Full Width Button
</x-button>
```

## Customization

The button component uses Tailwind CSS classes. You can customize the appearance by:

1. **Modifying the component directly:**

```php
<!-- resources/views/components/button.blade.php -->

@props([
    'variant' => 'default',
    'size' => 'default',
])

@php
$variants = [
    'default' => 'bg-primary text-primary-foreground hover:bg-primary/90',
    'primary' => 'bg-blue-600 text-white hover:bg-blue-700',
    // ... add your custom variants
];
@endphp

<button {{ $attributes->merge(['class' => $variants[$variant]]) }}>
    {{ $slot }}
</button>
```

2. **Using CSS variables in your theme:**

```css
:root {
    --button-primary: oklch(0.55 0.22 250);
    --button-primary-hover: oklch(0.50 0.22 250);
}
```

## Accessibility

Buttons include proper ARIA attributes and keyboard support:

- **Tab** - Focus button
- **Enter/Space** - Activate button
- **Disabled state** - Automatically applied

## Next Steps

- Explore [Card component](/docs/components/card)
- Learn about [Input component](/docs/components/input)
- View [Modal component](/docs/components/modal)
