---
title: CLI Reference
description: Reference for Velyx CLI commands, installation flows, and day-to-day component management in Laravel projects.
metaImage: /assets/images/og/docs/cli-reference.png
metaTitle: Velyx CLI Reference for Laravel Projects | Velyx
extends: _layouts.documentation
section: content
---

# CLI Reference

Complete reference for all Velyx CLI commands.

## Global Options

### `velyx --version`

Display the installed Velyx CLI version.

```bash
velyx --version
```

**Alias:** `velyx -v`

## Commands

### `velyx init`

Initialize Velyx in your Laravel project.

<x-code-tabs
    npm="npx velyx@latest init"
    pnpm="pnpm dlx velyx@latest init"
    yarn="yarn dlx velyx@latest init"
    bun="bunx --bun velyx@latest init"
/>

**What it does:**
- Creates a `velyx.json` file in your project root
- Checks your environment and initializes the UI component setup
- Prompts for setup values unless you use `--defaults`

**Options:**

| Option | Alias | Description | Default |
|--------|-------|-------------|---------|
| `--base-color <base-color>` | `-b` | The base color to use | Prompts if not set |
| `--defaults` | `-d` | Use default configuration | `false` |
| `--force` | `-f` | Force overwrite of existing configuration | `false` |
| `--cwd <path>` | `-c` | The working directory | Current directory |

**Base colors:** `neutral`, `gray`, `zinc`, `stone`, `slate`

---

### `velyx add [components...]`

Add components to your project.

<x-code-tabs
    npm="npx velyx@latest add button"
    pnpm="pnpm dlx velyx@latest add button"
    yarn="yarn dlx velyx@latest add button"
    bun="bunx --bun velyx@latest add button"
/>

<x-code-tabs
    npm="npx velyx@latest add card input dialog"
    pnpm="pnpm dlx velyx@latest add card input dialog"
    yarn="yarn dlx velyx@latest add card input dialog"
    bun="bunx --bun velyx@latest add card input dialog"
/>

<x-code-tabs
    npm="npx velyx@latest add --all"
    pnpm="pnpm dlx velyx@latest add --all"
    yarn="yarn dlx velyx@latest add --all"
    bun="bunx --bun velyx@latest add --all"
/>

**What it does:**
- Copies the component files to your project
- Prompts you to install any required dependencies
- Handles file conflicts if they exist

**Arguments:**
- `components...` - The names of components to add (optional if using `--all`)

**Options:**

| Option | Alias | Description | Default |
|--------|-------|-------------|---------|
| `--cwd <path>` | `-c` | The working directory | Current directory |
| `--all` | `-a` | Add all available components | `false` |

---

### `velyx list`

List all available components from the registry.

<x-code-tabs
    npm="npx velyx@latest list"
    pnpm="pnpm dlx velyx@latest list"
    yarn="yarn dlx velyx@latest list"
    bun="bunx --bun velyx@latest list"
/>

<x-code-tabs
    npm="npx velyx@latest list --query button"
    pnpm="pnpm dlx velyx@latest list --query button"
    yarn="yarn dlx velyx@latest list --query button"
    bun="bunx --bun velyx@latest list --query button"
/>

<x-code-tabs
    npm="npx velyx@latest list --json"
    pnpm="pnpm dlx velyx@latest list --json"
    yarn="yarn dlx velyx@latest list --json"
    bun="bunx --bun velyx@latest list --json"
/>

**What it does:**
- Displays all available components in the registry
- Shows component descriptions and dependencies
- Supports searching and filtering

**Options:**

| Option | Alias | Description | Default |
|--------|-------|-------------|---------|
| `--cwd <path>` | `-c` | The working directory | Current directory |
| `--query <query>` | `-q` | Search query string | - |
| `--limit <number>` | `-l` | Maximum number of items to display | All |
| `--offset <number>` | `-o` | Number of items to skip | `0` |
| `--json` | | Output as JSON | `false` |

**Alias:** `velyx search`

<x-callout type="info">
You must run <code>npx velyx@latest init</code> before using <code>npx velyx@latest add</code>, <code>npx velyx@latest list</code>, or <code>npx velyx@latest search</code>.
</x-callout>

## Configuration File

The `velyx.json` file created by `npx velyx@latest init` contains:

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

You can customize these paths to match your project structure. Learn more in the [configuration guide](/docs/configuration).

## Examples

### Initialize with a custom theme

<x-code-tabs
    npm="npx velyx@latest init --base-color slate"
    pnpm="pnpm dlx velyx@latest init --base-color slate"
    yarn="yarn dlx velyx@latest init --base-color slate"
    bun="bunx --bun velyx@latest init --base-color slate"
/>

### Add multiple components

<x-code-tabs
    npm="npx velyx@latest add button card input dialog"
    pnpm="pnpm dlx velyx@latest add button card input dialog"
    yarn="yarn dlx velyx@latest add button card input dialog"
    bun="bunx --bun velyx@latest add button card input dialog"
/>

### Add all components

<x-code-tabs
    npm="npx velyx@latest add --all"
    pnpm="pnpm dlx velyx@latest add --all"
    yarn="yarn dlx velyx@latest add --all"
    bun="bunx --bun velyx@latest add --all"
/>

### Search for components

<x-code-tabs
    npm="npx velyx@latest list --query button"
    pnpm="pnpm dlx velyx@latest list --query button"
    yarn="yarn dlx velyx@latest list --query button"
    bun="bunx --bun velyx@latest list --query button"
/>

<x-code-tabs
    npm="npx velyx@latest search --query form"
    pnpm="pnpm dlx velyx@latest search --query form"
    yarn="yarn dlx velyx@latest search --query form"
    bun="bunx --bun velyx@latest search --query form"
/>

### Get JSON output

<x-code-tabs
    npm="npx velyx@latest list --json"
    pnpm="pnpm dlx velyx@latest list --json"
    yarn="yarn dlx velyx@latest list --json"
    bun="bunx --bun velyx@latest list --json"
/>

## Next Steps

- Learn about [theming and customization](/docs/theming)
- Explore the [component library](/docs/components)
- Read the [configuration guide](/docs/configuration)
