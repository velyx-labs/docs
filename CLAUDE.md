# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Jigsaw-based static documentation site - a Laravel-powered static site generator. The site compiles Markdown content with Blade templates into optimized static HTML.

## Common Commands

```bash
# Development with hot module replacement
pnpm run dev              # Start Vite dev server for assets
composer run dev         # Start Jigsaw local server (http://localhost:8000)

# Build assets
pnpm run build            # Build assets for development
pnpm run prod             # Build assets for production

# Full build workflow
pnpm run build && composer run dev    # Dev: compile assets + serve site
pnpm run prod && vendor/bin/jigsaw build   # Production: compile + build static site
```

## Architecture

### Build System

Jigsaw generates static HTML from two sources:
1. **Markdown content** (`source/docs/`) with YAML frontmatter
2. **Blade templates** (`source/_layouts/`, `source/_/`)

Build outputs:
- `build_local/` - Development build
- `build_production/` - Production-optimized static files

Vite handles asset compilation (Tailwind CSS, JavaScript) via `@tighten/jigsaw-vite-plugin`.

### Content Structure

Documentation pages use YAML frontmatter:
```yaml
---
title: Page Title
description: Meta description
extends: _layouts.documentation
section: content  # Maps to @section('content') in layout
---
```

- `extends`: References a Blade layout in `source/_layouts/`
- `section`: Blade section name where content is injected

### Navigation

Navigation is defined in `navigation.php` as a PHP array:
- Top-level keys are section names
- `url` key defines the link path
- `children` array creates nested navigation

Helper functions in `config.php`:
- `isActive()` - Check if current page matches path
- `isActiveParent()` - Check if page is under a parent section
- `url()` - Resolve relative or absolute URLs

### Layouts

- `_layouts/master.blade.php` - Base HTML shell
- `_layouts/documentation.blade.php` - Docs layout with sidebar navigation
- `_layouts/main.blade.php` - Landing page layout

### Event System

Jigsaw fires events during build. Event listeners in `listeners/`:
- `GenerateSitemap.php` - Auto-generates sitemap.xml after build

Register listeners in `bootstrap/app.php` via `$events->listen()`.

### Asset Organization

- `source/_assets/` - Files compiled by Vite (Tailwind CSS, JS)
- `source/assets/` - Static files copied directly to build output
- `source/_/` - Blade includes/partials (navigation components, etc.)

## Configuration

- `config.php` - Site settings, baseUrl, helpers, DocSearch credentials
- `navigation.php` - Site navigation structure
- Environment variables for Algolia DocSearch: `DOCSEARCH_APP_ID`, `DOCSEARCH_KEY`, `DOCSEARCH_INDEX`

## Icons

Two icon systems are available:

### HugeIcons (General UI Icons)

Use the `<x-icon>` component for general UI icons:

```php
<x-icon name="arrow-right-02" class="ml-2 h-5 w-5" />
<x-icon name="youtube" class="w-6 h-6 text-red-500" />
<x-icon name="code-square" />
```

The component accepts:
- `name` - HugeIcons icon name (find at https://hugeicons.com)
- `class` - Tailwind classes for styling
- All standard SVG attributes (`width`, `height`, `color`, `stroke-width`, etc.)

Icon component location: `source/_components/icon.blade.php`

### Brand/Technology Icons

Use dedicated Blade components for technology stack icons:

```php
<x-icons.laravel />
<x-icons.tailwind />
<x-icons.alpinejs />
<x-icons.livewire />
<x-icons.github />
<x-icons.twitter />
<x-icons.linkedin />
```

These icons have a default `size-5` class and can be customized with the `$attributes` merge:

```blade
<x-icons.laravel class="h-6 w-6" />
```

Icon components location: `source/_components/icons/`

## Tailwind CSS & Design System

Uses Tailwind CSS 4.x with Shadcn integration. **All styling should use utility classes only** - avoid writing custom CSS.

### Design Tokens (available as utility classes)

| Utility | Usage |
|---------|-------|
| `bg-background` / `text-foreground` | Base background/text |
| `bg-primary` / `text-primary` | Primary brand |
| `bg-secondary` / `text-secondary-foreground` | Secondary surfaces |
| `bg-muted` / `text-muted-foreground` | Muted content |
| `bg-accent` / `text-accent-foreground` | Accent highlights |
| `bg-card` / `text-card-foreground` | Card backgrounds |
| `bg-destructive` | Error/danger |
| `border-border` / `bg-input` | Borders/inputs |

### Radius utilities
`rounded-sm`, `rounded-md`, `rounded-lg`, `rounded-xl`, `rounded-2xl`, `rounded-3xl`, `rounded-4xl`

### Dark mode
Add `.dark` class to any element to switch descendants to dark theme.

## Key Conventions

- Content files use `.md` extension
- Blade templates use `.bladeade.php` extension
- Layouts are prefixed with underscore: `_layouts/`
- Include/partial components go in `source/_/`
- Anchor links use `{#anchor-id}` syntax for section linking
