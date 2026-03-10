---
title: Spacing
description: Learn the Velyx spacing system and layout rules for building cleaner, more consistent Laravel UI screens.
metaImage: /assets/images/og/docs/design/spacing.png
metaTitle: Spacing Design Guide for Laravel UI | Velyx
extends: _layouts.documentation
section: content
---

# Spacing

Velyx uses Tailwind CSS v4's spacing scale for consistent margins, padding, and gaps throughout your UI.

## Spacing Scale

Tailwind uses a consistent spacing scale where values increment proportionally:

| Scale | Value | Pixels | Usage |
|-------|-------|--------|-------|
| `0` | `0` | `0px` | No spacing |
| `px` | `1px` | `1px` | Hairline |
| `0.5` | `0.125rem` | `2px` | Tight |
| `1` | `0.25rem` | `4px` | Extra tight |
| `1.5` | `0.375rem` | `6px` | Very tight |
| `2` | `0.5rem` | `8px` | Tight |
| `2.5` | `0.625rem` | `10px` | Snug |
| `3` | `0.75rem` | `12px` | Normal |
| `3.5` | `0.875rem` | `14px` | Relaxed |
| `4` | `1rem` | `16px` | Default |
| `5` | `1.25rem` | `20px` | Loose |
| `6` | | `1.5rem` | `24px` | Extra loose |
| `7` | | `1.75rem` | `28px` | Very loose |
| `8` | | `2rem` | `32px` | Wide |
| `9` | | `2.25rem` | `36px` | Extra wide |
| `10` | | `2.5rem` | `40px` | Very wide |
| `12` | | `3rem` | `48px` | Ultra wide |
| `16` | | `4rem` | `64px` | Huge |
| `20` | | `5rem` | `80px` | Extra huge |
| `24` | | `6rem` | `96px` | Massive |

## Padding

### All Sides
```php
<div class="p-4">Equal padding on all sides</div>
```

### Individual Sides
```php
<div class="px-4 py-2">Horizontal and vertical padding</div>
<div class="pt-4 pr-2 pb-4 pl-2">Individual side padding</div>
```

| Class | Description |
|-------|-------------|
| `p-{size}` | Padding all sides |
| `px-{size}` | Padding left and right |
| `py-{size}` | Padding top and bottom |
| `pt-{size}` | Padding top |
| `pr-{size}` | Padding right |
| `pb-{size}` | Padding bottom |
| `pl-{size}` | Padding left |

## Margin

### All Sides
```php
<div class="m-4">Equal margin on all sides</div>
```

### Individual Sides
```php
<div class="mx-auto my-4">Horizontal auto, vertical margin</div>
<div class="mt-4 mr-2 mb-4 ml-2">Individual side margins</div>
```

| Class | Description |
|-------|-------------|
| `m-{size}` | Margin all sides |
| `mx-{size}` | Margin left and right |
| `my-{size}` | Margin top and bottom |
| `mt-{size}` | Margin top |
| `mr-{size}` | Margin right |
| `mb-{size}` | Margin bottom |
| `ml-{size}` | Margin left |
| `mx-auto` | Horizontal centering |

## Gap (Recommended)

Use `gap` utilities for spacing between flex or grid children instead of margins:

```php
<!-- Flexbox with gap -->
<div class="flex gap-4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</div>

<!-- Grid with gap -->
<div class="grid grid-cols-2 gap-6">
    <div>Card 1</div>
    <div>Card 2</div>
</div>

<!-- Responsive gap -->
<div class="flex gap-4 lg:gap-8">
    <div>Item 1</div>
    <div>Item 2</div>
</div>
```

<x-callout type="info">
<strong>Best Practice:</strong> Use <code>gap</code> utilities instead of margins for spacing between siblings. This prevents margin collapse issues and is more predictable.
</x-callout>

## Space Between

For separating elements vertically, use `space-y`:

```php
<div class="space-y-4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</div>
```

For horizontal spacing:

```php
<div class="flex space-x-4">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
</div>
```

## Common Patterns

### Card Spacing
```php
<div class="p-6 space-y-4">
    <h2>Title</h2>
    <p>Description</p>
    <button>Action</button>
</div>
```

### Button Padding
```php
<button class="px-4 py-2">Default Button</button>
<button class="px-3 py-1.5 text-sm">Small Button</button>
<button class="px-6 py-3 text-lg">Large Button</button>
```

### Container Spacing
```php
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Content with responsive horizontal padding -->
</div>
```

### Section Spacing
```php
<section class="py-12 lg:py-20">
    <!-- Content with vertical spacing -->
</section>
```

## Responsive Spacing

Adjust spacing at different breakpoints:

```php
<div class="p-4 md:p-6 lg:p-8">
    Responsive padding
</div>

<div class="gap-4 lg:gap-8">
    Responsive gap
</div>
```

## Negative Margins

For pulling elements out of their container:

```php
<div class="-mt-4">Negative top margin</div>
<div class="-mx-4">Negative horizontal margins</div>
```

## Next Steps

- Learn about [colors](/docs/design/colors)
- Explore [typography](/docs/design/typography)
- Read about [theming](/docs/theming)
