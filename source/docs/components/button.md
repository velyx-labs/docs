---
title: Button
description: Button component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/button.png
metaTitle: Button Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Button

Buttons allow users to perform actions or navigate with a single click.

## Installation

Add the button component to your project:

<x-code-tabs
    npm="npx velyx@latest add button"
    pnpm="pnpm dlx velyx@latest add button"
    yarn="yarn dlx velyx@latest add button"
    bun="bunx --bun velyx@latest add button"
/>

## Usage

### Primary Button

<x-component-preview component="button" variant="primary">
    <x-button variant="primary">Click me</x-button>
</x-component-preview>

### Secondary Button

<x-component-preview component="button" variant="secondary">
    <x-button variant="secondary">Secondary</x-button>
</x-component-preview>

### Destructive Button

<x-component-preview component="button" variant="destructive">
    <x-button variant="destructive">Delete</x-button>
</x-component-preview>

### Outline Button

<x-component-preview component="button" variant="outline">
    <x-button variant="outline">Outline</x-button>
</x-component-preview>

### Ghost Button

<x-component-preview component="button" variant="ghost">
    <x-button variant="ghost">Ghost</x-button>
</x-component-preview>

### Sizes

<x-component-preview component="button" variant="primary" :props="['size' => 'sm']">
    <x-button variant="primary" size="sm">Small</x-button>
</x-component-preview>

<x-component-preview component="button" variant="primary" :props="['size' => 'lg']">
    <x-button variant="primary" size="lg">Large</x-button>
</x-component-preview>

### With Icon

<x-component-preview component="button" variant="primary" :props="['icon' => 'arrow-right']">
    <x-button variant="primary" icon="arrow-right">
        Click me
    </x-button>
</x-component-preview>

### Loading State

<x-component-preview component="button" variant="primary" :props="['loading' => true]">
    <x-button variant="primary" loading>Loading...</x-button>
</x-component-preview>

### Disabled

<x-component-preview component="button" variant="primary" :props="['disabled' => true]">
    <x-button variant="primary" disabled>Disabled</x-button>
</x-component-preview>

### Pill Shape

<x-component-preview component="button" variant="primary" :props="['pill' => true]">
    <x-button variant="primary" pill>Pill Button</x-button>
</x-component-preview>

### Icon Button

<x-component-preview component="button" variant="ghost" :props="['iconOnly' => true, 'icon' => 'settings']" height="300px">
    <x-button variant="ghost" icon-only icon="settings" />
</x-component-preview>


## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `primary` | Button style variant |
| `size` | `string` | `md` | Button size (xs, sm, md, lg, xl) |
| `type` | `string` | `button` | Button type (button, submit, reset) |
| `disabled` | `boolean` | `false` | Disable the button |
| `loading` | `boolean` | `false` | Show loading spinner |
| `icon` | `string` | `null` | Icon name (left side) |
| `iconRight` | `string` | `null` | Icon name (right side) |
| `iconOnly` | `boolean` | `false` | Icon-only button |
| `pill` | `boolean` | `false` | Rounded pill shape |
| `block` | `boolean` | `false` | Full width button |
| `href` | `string` | `null` | URL for link buttons |
| `action` | `string` | `null` | Livewire action to target |


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

The button component uses Tailwind CSS classes. You can customize the appearance by modifying the component in your project:

```blade
{{-- resources/views/components/ui/button.blade.php --}}

@props([
    'variant' => 'primary',
    'size' => 'md',
    // ... other props
])

@php
$variantClasses = match($variant) {
    'primary' => 'bg-primary text-primary-foreground hover:bg-primary/90',
    'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
    // ... customize variants here
};
@endphp

<button {{ $attributes->class([$variantClasses]) }}>
    {{ $slot }}
</button>
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
