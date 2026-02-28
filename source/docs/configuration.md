---
title: Configuration
description: Configure Velyx for your Laravel project
extends: _layouts.documentation
section: content
---

# Configuration

Configure Velyx to match your project's structure and preferences.

## velyx.json File

After running `npx velyx init`, a `velyx.json` file is created in your project root:

```json
{
  "version": "x.y.z",
  "theme": "neutral",
  "packageManager": "npm",
  "css": {
    "entry": "resources/css/app.css",
    "velyx": "resources/css/velyx.css"
  },
  "js": {
    "entry": "resources/js/app.js"
  },
  "components": {
    "path": "resources/views/components/ui"
  }
}
```

## Options

### `version`

The Velyx configuration version.

### `theme`

The color theme to use for components.

**Available values:** `neutral`, `gray`, `slate`, `stone`, `zinc`

**Default:** `neutral`

### `packageManager`

The package manager used in your project.

**Available values:** `npm`, `yarn`, `pnpm`, `bun`

**Default:** Auto-detected

### `css.entry`

The path to your main CSS file.

**Default:** Auto-detected from your project

During `velyx init`, Velyx can inject this import if a compatible CSS entry is detected and you confirm (or use `--defaults`):

```css
@import "./velyx.css";
```

### `css.velyx`

The path where Velyx CSS variables and styles are stored.

**Default:** `resources/css/velyx.css`

This file contains design tokens like colors, spacing, and typography.

### `js.entry`

The path to your main JavaScript file.

**Default:** Auto-detected from your project

Used for components that require Alpine.js or other JavaScript.

### `components.path`

The directory where components will be copied.

**Default:** `resources/views/components/ui`

If you organize your components differently, update this path:

```json
{
  "components": {
    "path": "resources/views/ui"
  }
}
```

## Custom Paths

You can manually edit `velyx.json` to work with any directory structure:

```json
{
  "version": "x.y.z",
  "theme": "neutral",
  "packageManager": "npm",
  "css": {
    "entry": "public/css/style.css",
    "velyx": "resources/css/design-tokens.css"
  },
  "js": {
    "entry": "resources/js/main.js"
  },
  "components": {
    "path": "resources/views/ui/components"
  }
}
```

<x-callout type="warning">
<strong>Note:</strong> After changing paths in <code>velyx.json</code>, you may need to manually move existing components or update your imports.
</x-callout>

## Theme Variables

The `css.velyx` file contains CSS variables for styling:

```css
:root {
    --primary: oklch(0.205 0 0);
    --primary-foreground: oklch(0.985 0 0);
    --secondary: oklch(0.97 0 0);
    --secondary-foreground: oklch(0.205 0 0);
    --muted: oklch(0.97 0 0);
    --muted-foreground: oklch(0.556 0 0);
    --accent: oklch(0.97 0 0);
    --accent-foreground: oklch(0.205 0 0);
    --destructive: oklch(0.58 0.22 27);
    --border: oklch(0.922 0 0);
    --input: oklch(0.922 0 0);
    --ring: oklch(0.708 0 0);
    --radius: 0.625rem;
}
```

Learn more about customizing these in the [theming guide](/docs/theming).

## Next Steps

- Learn about [theming and customization](/docs/theming)
- Explore the [component library](/docs/components)
- Check out the [CLI reference](/docs/cli-reference)
