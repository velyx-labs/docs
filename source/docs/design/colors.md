---
title: Colors
description: Color system and design tokens
extends: _layouts.documentation
section: content
---

# Colors

Velyx uses a modern color system built on OKLCH for consistent, accessible colors across light and dark modes.

## Color Tokens

### Base Colors

```css
:root {
    --background: oklch(1 0 0);
    --foreground: oklch(0.145 0 0);
}
```

- `--background` - Page background
- `--foreground` - Primary text color

### Semantic Colors

#### Primary
```css
--primary: oklch(0.205 0 0);
--primary-foreground: oklch(0.985 0 0);
```

Used for main actions, links, and important elements.

#### Secondary
```css
--secondary: oklch(0.97 0 0);
--secondary-foreground: oklch(0.205 0 0);
```

Used for secondary actions and less prominent elements.

#### Muted
```css
--muted: oklch(0.97 0 0);
--muted-foreground: oklch(0.556 0 0);
```

Used for disabled states and subtle backgrounds.

#### Accent
```css
--accent: oklch(0.97 0 0);
--accent-foreground: oklch(0.205 0 0);
```

Used for hover states and interactive elements.

#### Destructive
```css
--destructive: oklch(0.58 0.22 27);
```

Used for dangerous actions like delete or remove.

### Border Colors

```css
--border: oklch(0.922 0 0);
--input: oklch(0.922 0 0);
--ring: oklch(0.708 0 0);
```

- `--border` - Border color for UI elements
- `--input` - Input field borders
- `--ring` - Focus ring color

### Component Colors

```css
--card: oklch(1 0 0);
--card-foreground: oklch(0.145 0 0);
--popover: oklch(1 0 0);
--popover-foreground: oklch(0.145 0 0);
```

## Using Colors in Components

Components reference these CSS variables:

```php
<button class="bg-primary text-primary-foreground hover:bg-primary/90">
    Click me
</button>

<div class="bg-card text-card-foreground border border-border rounded-lg p-4">
    Card content
</div>
```

## Dark Mode

Dark mode colors are automatically applied when the `.dark` class is present:

```css
.dark {
    --background: oklch(0.145 0 0);
    --foreground: oklch(0.985 0 0);
    --primary: oklch(0.87 0 0);
    --primary-foreground: oklch(0.205 0 0);
    /* ... */
}
```

<x-callout type="info" title="Automatic Dark Mode">
Colors automatically adapt when the <code>.dark</code> class is added to the HTML element. No component changes needed!
</x-callout>

## Customizing Colors

To customize colors, override the CSS variables in your theme file:

```css
:root {
    /* Custom brand color */
    --primary: oklch(0.55 0.22 250);
    --primary-foreground: oklch(0.99 0 0);
}
```

## Chart Colors

Velyx includes a palette for data visualizations:

```css
--chart-1: oklch(0.809 0.105 251.813);
--chart-2: oklch(0.623 0.214 259.815);
--chart-3: oklch(0.546 0.245 262.881);
--chart-4: oklch(0.488 0.243 264.376);
--chart-5: oklch(0.424 0.199 265.638);
```

## Next Steps

- Learn about [typography](/docs/design/typography)
- Explore [spacing system](/docs/design/spacing)
- Read about [theming](/docs/theming)
