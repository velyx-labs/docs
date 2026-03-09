---
title: Badge
description: Labels and status indicators for UI elements
extends: _layouts.documentation
section: content
---

# Badge

Badges are used to highlight status, categories, or small pieces of information.

## Installation

Add the badge component to your project:

<x-code-tabs
    npm="npx velyx add badge"
    pnpm="pnpm dlx velyx add badge"
    yarn="yarn dlx velyx add badge"
    bun="bunx --bun velyx add badge"
/>

## Usage

### Default Badge

<x-component-preview component="badge">
    <x-ui.badge>Badge</x-ui.badge>
</x-component-preview>

### Variants

<x-component-preview component="badge" :props="['variant' => 'default']">
    <x-ui.badge>Default</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['variant' => 'primary']">
    <x-ui.badge variant="primary">Primary</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['variant' => 'secondary']">
    <x-ui.badge variant="secondary">Secondary</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['variant' => 'destructive']">
    <x-ui.badge variant="destructive">Destructive</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['variant' => 'outline']">
    <x-ui.badge variant="outline">Outline</x-ui.badge>
</x-component-preview>

### Sizes

<x-component-preview component="badge" :props="['size' => 'sm']">
    <x-ui.badge size="sm">Small</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['size' => 'default']">
    <x-ui.badge>Default</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['size' => 'lg']">
    <x-ui.badge size="lg">Large</x-ui.badge>
</x-component-preview>

### Pill Shape

<x-component-preview component="badge" :props="['pill' => true]">
    <x-ui.badge pill>Pill Badge</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['variant' => 'primary', 'pill' => true]">
    <x-ui.badge variant="primary" pill>Primary Pill</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['variant' => 'destructive', 'pill' => true]">
    <x-ui.badge variant="destructive" pill>Destructive Pill</x-ui.badge>
</x-component-preview>

### With Icon

<x-component-preview component="badge" :props="['icon' => 'check', 'variant' => 'primary']">
    <x-ui.badge variant="primary" icon="check">Verified</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['icon' => 'sparkles', 'variant' => 'secondary']">
    <x-ui.badge variant="secondary" icon="sparkles">Featured</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['icon' => 'sparkles', 'variant' => 'primary']">
    <x-ui.badge variant="primary" icon="sparkles">New</x-ui.badge>
</x-component-preview>

### Removable

<x-component-preview component="badge" :props="['removable' => true]">
    <x-ui.badge removable>Removable Badge</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['variant' => 'primary', 'removable' => true]">
    <x-ui.badge variant="primary" removable>Filter</x-ui.badge>
</x-component-preview>

### Custom Labels

<x-component-preview component="badge" :props="['label' => 'New']">
    <x-ui.badge>New</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['label' => 'Featured', 'variant' => 'primary']">
    <x-ui.badge variant="primary">Featured</x-ui.badge>
</x-component-preview>

<x-component-preview component="badge" :props="['label' => 'Sold Out', 'variant' => 'error']">
    <x-ui.badge variant="error">Sold Out</x-ui.badge>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `'default'` | Visual style: `default`, `primary`, `secondary`, `destructive`, `outline` |
| `size` | `string` | `'default'` | Size: `sm`, `default`, `lg` |
| `pill` | `boolean` | `false` | Use pill/rounded shape instead of default squared corners |
| `icon` | `string` | `null` | Icon name to display before the text |
| `removable` | `boolean` | `false` | Show remove button (×) to dismiss the badge |
| `label` | `string` | `'Badge'` | Text content to display |

## Examples

### Status Indicators

```blade
<div class="flex items-center gap-2">
    <span>Account Status:</span>
    <x-ui.badge variant="success">Active</x-ui.badge>
</div>

<div class="flex items-center gap-2">
    <span>Payment Status:</span>
    <x-ui.badge variant="destructive">Overdue</x-ui.badge>
</div>

<div class="flex items-center gap-2">
    <span>Verification:</span>
    <x-ui.badge variant="primary" icon="check">Verified</x-ui.badge>
</div>
```

### Filter Tags

```blade
<div class="flex items-center gap-2">
    <x-ui.badge variant="secondary" removable>Category</x-ui.badge>
    <x-ui.badge variant="secondary" removable>Price Range</x-ui.badge>
    <x-ui.badge variant="secondary" removable>Brand</x-ui.badge>
</div>
```

### Product Tags

```blade
<div class="flex items-center gap-2">
    <x-ui.badge variant="primary" pill>New</x-ui.badge>
    <x-ui.badge variant="success" pill>In Stock</x-ui.badge>
    <x-ui.badge variant="outline" pill>On Sale</x-ui.badge>
</div>
```

### Notification Badges

```blade
<div class="relative">
    <button>
        Notifications
    </button>

    <x-ui.badge variant="destructive" class="absolute -top-2 -right-2">3</x-ui.badge>
</div>
```

### Counters

```blade
<div class="flex items-center gap-4">
    <div>
        <p class="text-sm text-muted-foreground">Tasks</p>
        <x-ui.badge size="lg" variant="primary">12</x-ui.badge>
    </div>

    <div>
        <p class="text-sm text-muted-foreground">Messages</p>
        <x-ui.badge size="lg" variant="secondary">5</x-ui.badge>
    </div>

    <div>
        <p class="text-sm text-muted-foreground">Alerts</p>
        <x-ui.badge size="lg" variant="destructive">2</x-ui.badge>
    </div>
</div>
```

## Accessibility

Badge components include proper ARIA attributes:

- Semantic HTML structure
- Clear visual contrast ratios
- Proper text scaling for different sizes
- Accessible color combinations

## Customization

The badge component uses Tailwind CSS classes. You can customize the appearance by modifying the component in your project:

```blade
{{-- resources/views/components/ui/badge.blade.php --}}

@props([
    'variant' => 'default',
    'size' => 'md',
    'pill' => false,
    'icon' => null,
    'removable' => false,
])

// Customize variants, sizes, and styles
```

### Variant Styles

| Variant | Use Case |
|---------|----------|
| `default` | General purpose labels |
| `primary` | Important highlights |
| `secondary` | Subtle information |
| `destructive` | Errors or destructive actions |
| `outline` | Bordered badges |

### Icon Integration

The badge component integrates with your icon system. Any icon name available in your project can be used:

```blade
<x-ui.badge icon="star">Featured</x-ui.badge>
<x-ui.badge icon="heart">Liked</x-ui.badge>
<x-ui.badge icon="bookmark">Saved</x-ui.>

## Next Steps

- Explore [Alert component](/docs/components/alert)
- Learn about [Button component](/docs/components/button)
- View [Breadcrumbs component](/docs/components/breadcrumbs)
