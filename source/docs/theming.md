---
title: Theming
description: Customize Velyx components to match your brand with practical theming patterns for colors, spacing, and interface polish.
metaImage: /assets/images/og/docs/theming.png
metaTitle: Theming Guide for Laravel UI Components | Velyx
extends: _layouts.documentation
section: content
---

# Theming

Customize components to match your brand using Tailwind CSS v4 utilities and CSS variables.

## Design Tokens

Velyx uses CSS variables for theming. You can customize these in your Tailwind CSS configuration:

### Colors

```css
@theme {
  --color-background: #ffffff;
  --color-foreground: #0a0a0a;

  --color-primary: #3b82f6;
  --color-primary-foreground: #ffffff;

  --color-secondary: #f1f5f9;
  --color-secondary-foreground: #0f172a;

  --color-accent: #8b5cf6;
  --color-accent-foreground: #ffffff;

  --color-muted: #f1f5f9;
  --color-muted-foreground: #64748b;

  --color-card: #ffffff;
  --color-card-foreground: #0a0a0a;

  --color-border: #e2e8f0;
  --color-input: #e2e8f0;

  --color-destructive: #ef4444;
  --color-destructive-foreground: #ffffff;
}
```

### Border Radius

```css
@theme {
  --radius-sm: 0.25rem;
  --radius-md: 0.375rem;
  --radius-lg: 0.5rem;
  --radius-xl: 0.75rem;
  --radius-2xl: 1rem;
  --radius-3xl: 1.5rem;
}
```

## Dark Mode

Velyx supports dark mode out of the box. Add the `.dark` class to any element to switch its descendants to dark mode:

```php
<html class="dark">
    <!-- Your content here -->
</html>
```

For system-based dark mode, use the `class` strategy in your Tailwind config:

```js
// tailwind.config.js
export default {
  darkMode: "class",
  // ...
};
```

## Customizing Components

Since components are copied directly into your project, you can customize them however you want:

### Example: Custom Button Variant

```php
<!-- resources/views/components/button.blade.php -->

@props([
    'variant' => 'default',
    'size' => 'default',
])

@php
$variants = [
    'default' => 'bg-primary text-primary-foreground hover:bg-primary/90',
    'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
    'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
    'ghost' => 'hover:bg-accent hover:text-accent-foreground',
    'link' => 'text-primary underline-offset-4 hover:underline',
    'gradient' => 'bg-gradient-to-r from-primary to-accent text-white',
];

$sizes = [
    'default' => 'h-10 px-4 py-2',
    'sm' => 'h-9 rounded-md px-3',
    'lg' => 'h-11 rounded-md px-8',
    'icon' => 'h-10 w-10',
];

$classes = implode(' ', [
    'inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50',
    $variants[$variant] ?? $variants['default'],
    $sizes[$size] ?? $sizes['default'],
]);
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
```

## Using Custom Themes

Apply your custom theme to specific components:

```php
<x-button class="bg-gradient-to-r from-purple-500 to-pink-500">
    Custom Gradient Button
</x-button>
```

## Visual Customization Tool

For more advanced theming and visual customization, use [TweakCN](https://tweakcn.com/) — a visual tool for creating and customizing UI component designs.

TweakCN allows you to:

- Visually design and tweak component styles
- Export ready-to-use Tailwind CSS classes
- Create consistent design systems
- Preview changes in real-time

<x-callout type="info" title="Pro Tip">
Use <a href="https://tweakcn.com/?utm_source=velyx.dev&utm_medium=docs&utm_campaign=theming" class="underline hover:text-foreground/80" target="_blank" rel="noopener noreferrer">TweakCN</a> to visually customize your components, then copy the generated classes to your Velyx components.
</x-callout>

## Next Steps

- Learn about [colors](/docs/design/colors)
- Explore [typography](/docs/design/typography)
- Understand [spacing](/docs/design/spacing)
