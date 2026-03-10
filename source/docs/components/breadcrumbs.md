---
title: Breadcrumbs
description: Breadcrumbs component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/breadcrumbs.png
metaTitle: Breadcrumbs Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Breadcrumbs

Breadcrumbs show users their current location within a website's hierarchy and help them navigate back to parent pages.

## Installation

Add the breadcrumbs component to your project:

<x-code-tabs
    npm="npx velyx@latest add breadcrumbs"
    pnpm="pnpm dlx velyx@latest add breadcrumbs"
    yarn="yarn dlx velyx@latest add breadcrumbs"
    bun="bunx --bun velyx@latest add breadcrumbs"
/>

## Usage

### Default Breadcrumbs

<x-component-preview component="breadcrumbs">
    <x-ui.breadcrumbs :items="[
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'Components', 'url' => '/components'],
        ['label' => 'Navigation', 'url' => '/components/navigation'],
        ['label' => 'Breadcrumbs'],
    ]" />
</x-component-preview>

### Custom Separator

<x-component-preview component="breadcrumbs" :props="['separator' => '>']">
    <x-ui.breadcrumbs
        :items="[
            ['label' => 'Home', 'url' => '/'],
            ['label' => 'Components', 'url' => '/components'],
            ['label' => 'Navigation', 'url' => '/components/navigation'],
        ]"
        separator=">"
    />
</x-component-preview>

<x-component-preview component="breadcrumbs" :props="['separator' => '→']">
    <x-ui.breadcrumbs
        :items="[
            ['label' => 'Home', 'url' => '/'],
            ['label' => 'Docs', 'url' => '/docs'],
            ['label' => 'Components', 'url' => '/docs/components'],
        ]"
        separator="→"
    />
</x-component-preview>

<x-component-preview component="breadcrumbs" :props="['separator' => '•']">
    <x-ui.breadcrumbs
        :items="[
            ['label' => 'Home', 'url' => '/'],
            ['label' => 'Library', 'url' => '/library'],
            ['label' => 'Books', 'url' => '/library/books'],
        ]"
        separator="•"
    />
</x-component-preview>

### With Home Icon

<x-component-preview component="breadcrumbs" :props="['homeIcon' => true]">
    <x-ui.breadcrumbs
        :items="[
            ['label' => 'Home', 'url' => '/'],
            ['label' => 'Products', 'url' => '/products'],
            ['label' => 'Category', 'url' => '/products/category'],
        ]"
        :home-icon="true"
    />
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `items` | `array` | `[]` | Array of breadcrumb items with `label` and optional `url` |
| `separator` | `string` | `'/'` | Separator character between breadcrumb items |
| `homeIcon` | `boolean` | `false` | Show a home icon instead of text for the first item |

### Items Structure

Each breadcrumb item in the `items` array should have:

```php
[
    'label' => 'Display Text',  // Required: Text to show
    'url' => '/path'            // Optional: URL for navigation
]
```

The last item typically doesn't have a URL to indicate the current page.

## Examples

### Simple Navigation

```php
<x-ui.breadcrumbs :items="[
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'Products', 'url' => '/products'],
    ['label' => 'Laptop'],
]" />
```

### Product Hierarchy

```php
<x-ui.breadcrumbs :items="[
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'Shop', 'url' => '/shop'],
    ['label' => 'Computers', 'url' => '/shop/computers'],
    ['label' => 'Laptops', 'url' => '/shop/computers/laptops'],
    ['label' => 'MacBook Pro'],
]" />
```

### Documentation Structure

```php
<x-ui.breadcrumbs :items="[
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'Documentation', 'url' => '/docs'],
    ['label' => 'Components', 'url' => '/docs/components'],
    ['label' => 'Button', 'url' => '/docs/components/button'],
]" />
```

### Blog Categories

```php
<x-ui.breadcrumbs
    :items="[
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'Blog', 'url' => '/blog'],
        ['label' => 'Technology', 'url' => '/blog/tech'],
    ]"
    separator=">"
/>
```

### Custom Styling

```php
<div class="flex items-center gap-2 text-sm">
    <x-ui.breadcrumbs :items="$breadcrumbs" class="text-muted-foreground" />
</div>
```

### With Icons

```php
<x-ui.breadcrumbs
    :items="[
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'Settings', 'url' => '/settings'],
        ['label' => 'Profile', 'url' => '/settings/profile'],
    ]"
    :home-icon="true"
    separator="→"
/>
```

## Accessibility

Breadcrumbs include proper ARIA attributes and semantic HTML:

- `<nav>` element with `aria-label="Breadcrumbs"`
- Ordered list structure
- Proper landmark navigation
- Clear visual hierarchy
- Keyboard navigation support

## Customization

The breadcrumbs component uses Tailwind CSS classes. You can customize the appearance by modifying the component in your project:

```php
{{-- resources/views/components/ui/breadcrumbs.blade.php --}}

@props([
    'items' => [],
    'separator' => '/',
    'homeIcon' => false,
])

// Customize styling, separators, and structure
```

### Separator Options

Common separators you can use:
- `/` (default) - Forward slash
- `>` - Greater than
- `→` - Right arrow
- `»` - Double right arrow
- `•` - Bullet
- `|` - Pipe

### Styling Current Page

The last breadcrumb (current page) is automatically styled differently to indicate it's not clickable:

```php
// Last item gets different styling
<li class="text-foreground font-medium" aria-current="page">
    Current Page
</li>
```

## Best Practices

### Keep It Short

Limit breadcrumbs to show only the most relevant path levels:

```php
{{-- Good - Clear hierarchy --}}
<x-ui.breadcrumbs :items="[
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'Products', 'url' => '/products'],
    ['label' => 'Category'],
]" />

{{-- Avoid - Too many levels --}}
<x-ui.breadcrumbs :items="[
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'Shop', 'url' => '/shop'],
    ['label' => 'Products', 'url' => '/shop/products'],
    ['label' => 'Category', 'url' => '/shop/products/cat'],
    ['label' => 'Subcategory', 'url' => '/shop/products/cat/sub'],
    ['label' => 'Item'],
]" />
```

### Use Meaningful Labels

Keep breadcrumb labels short and descriptive:

```php
{{-- Good --}}
['label' => 'Products', 'url' => '/products']

{{-- Avoid --}}
['label' => 'Click here to view our products', 'url' => '/products']
```

## Next Steps

- Explore [Navigation components](/docs/components/tabs)
- Learn about [Separator component](/docs/components/separator)
- View [Dropdown Menu component](/docs/components/dropdown-menu)
