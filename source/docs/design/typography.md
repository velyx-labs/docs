---
title: Typography
description: Learn the Velyx typography system, text hierarchy, and font guidance for sharper Laravel product interfaces.
metaImage: /assets/images/og/docs/design/typography.png
metaTitle: Typography Design Guide for Laravel UI | Velyx
extends: _layouts.documentation
section: content
---

# Typography

Velyx provides a complete typography system with consistent sizing, weights, and line heights.

## Font Families

Velyx uses two font families by default:

### Sans Serif

```css
--font-sans: "Raleway", sans-serif;
```

Used for body text, headings, and most UI elements.

### Mono

```css
--font-mono: "Geist Mono", monospace;
```

Used for code, keyboard shortcuts, and technical content.

<x-callout type="info">
The fonts are loaded via Google Fonts. You can customize these in your theme configuration.
</x-callout>

## Tailwind Typography Plugin

Velyx uses the `@tailwindcss/typography` plugin for styling Markdown content. Apply the `prose` class to content containers:

```php
<div class="prose prose-slate max-w-none">
    {{ $markdownContent }}
</div>
```

## Font Sizes

### Text Utilities

| Class       | Size     | Usage                       |
| ----------- | -------- | --------------------------- |
| `text-xs`   | 0.75rem  | Small labels, captions      |
| `text-sm`   | 0.875rem | Secondary text, form labels |
| `text-base` | 1rem     | Body text, default          |
| `text-lg`   | 1.125rem | Emphasized text             |
| `text-xl`   | 1.25rem  | Subheadings                 |
| `text-2xl`  | 1.5rem   | Small section headings      |
| `text-3xl`  | 1.875rem | Section headings            |
| `text-4xl`  | 2.25rem  | Page headings               |
| `text-5xl`  | 3rem     | Hero headings               |

## Font Weights

| Class           | Weight | Usage           |
| --------------- | ------ | --------------- |
| `font-light`    | 300    | Subtle text     |
| `font-normal`   | 400    | Body text       |
| `font-medium`   | 500    | Emphasized text |
| `font-semibold` | 600    | Headings        |
| `font-bold`     | 700    | Strong headings |

## Line Heights

| Class             | Height | Usage               |
| ----------------- | ------ | ------------------- |
| `leading-none`    | 1      | Tight spacing       |
| `leading-tight`   | 1.25   | Headings            |
| `leading-snug`    | 1.375  | Compact text        |
| `leading-normal`  | 1.5    | Body text           |
| `leading-relaxed` | 1.625  | Readable paragraphs |
| `leading-loose`   | 2      | Spaced out text     |

## Examples

### Body Text

```php
<p class="text-base leading-normal text-foreground">
    This is the default body text styling with comfortable line height for readability.
</p>
```

### Heading

```php
<h1 class="text-4xl font-bold tracking-tight text-foreground">
    Page Title
</h1>
```

### Small Text

```php
<p class="text-sm text-muted-foreground">
    Secondary information or helper text
</p>
```

### Code

```php
<code class="font-mono text-sm bg-muted px-1.5 py-0.5 rounded">
    npm install velyx@latest
</code>
```

## Responsive Typography

Use responsive prefixes to adjust text at different breakpoints:

```php
<h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
    Responsive Heading
</h1>
```

## Customizing Fonts

To use custom fonts, update your theme CSS:

```css
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

@theme inline {
  --font-sans: "Inter", sans-serif;
}
```

## Next Steps

- Learn about the [color system](/docs/design/colors)
- Explore [spacing](/docs/design/spacing)
- Read about [theming](/docs/theming)
