---
title: CLI Reference
description: Complete guide to Velyx CLI commands
extends: _layouts.documentation
section: content
---

# CLI Reference

Complete reference for all Velyx CLI commands.

## Commands

### `velyx init`

Initialize Velyx in your Laravel project.

<x-code-tabs
    npm="npx velyx init"
    pnpm="pnpm dlx velyx init"
    yarn="yarn dlx velyx init"
    bun="bunx --bun velyx init"
/>

**What it does:**
- Creates a `velyx.json` file in your project root
- Checks your environment and initializes the UI component setup
- Prompts for setup values unless you use `--defaults`

**Options:**

| Option | Alias | Description | Default |
|--------|-------|-------------|---------|
| `--base-color <color>` | `-b` | The base color to use | Prompts if not set |
| `--defaults` | `-d` | Use default configuration | `false` |
| `--force` | `-f` | Force overwrite of existing configuration | `false` |
| `--cwd <path>` | `-c` | The working directory | Current directory |

**Base colors:** `neutral`, `gray`, `zinc`, `stone`, `slate`

---

### `velyx add [components...]`

Add components to your project.

<x-code-tabs
    npm="npx velyx add button"
    pnpm="pnpm dlx velyx add button"
    yarn="yarn dlx velyx add button"
    bun="bunx --bun velyx add button"
/>

<x-code-tabs
    npm="npx velyx add card input modal"
    pnpm="pnpm dlx velyx add card input modal"
    yarn="yarn dlx velyx add card input modal"
    bun="bunx --bun velyx add card input modal"
/>

<x-code-tabs
    npm="npx velyx add --all"
    pnpm="pnpm dlx velyx add --all"
    yarn="yarn dlx velyx add --all"
    bun="bunx --bun velyx add --all"
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
    npm="npx velyx list"
    pnpm="pnpm dlx velyx list"
    yarn="yarn dlx velyx list"
    bun="bunx --bun velyx list"
/>

<x-code-tabs
    npm="npx velyx list --query button"
    pnpm="pnpm dlx velyx list --query button"
    yarn="yarn dlx velyx list --query button"
    bun="bunx --bun velyx list --query button"
/>

<x-code-tabs
    npm="npx velyx list --json"
    pnpm="pnpm dlx velyx list --json"
    yarn="yarn dlx velyx list --json"
    bun="bunx --bun velyx list --json"
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
You must run <code>velyx init</code> before using <code>velyx add</code>, <code>velyx list</code>, or <code>velyx search</code>.
</x-callout>

## Configuration File

The `velyx.json` file created by `init` contains:

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
    npm="npx velyx init --base-color slate"
    pnpm="pnpm dlx velyx init --base-color slate"
    yarn="yarn dlx velyx init --base-color slate"
    bun="bunx --bun velyx init --base-color slate"
/>

### Add multiple components

<x-code-tabs
    npm="npx velyx add button card input modal"
    pnpm="pnpm dlx velyx add button card input modal"
    yarn="yarn dlx velyx add button card input modal"
    bun="bunx --bun velyx add button card input modal"
/>

### Add all components

<x-code-tabs
    npm="npx velyx add --all"
    pnpm="pnpm dlx velyx add --all"
    yarn="yarn dlx velyx add --all"
    bun="bunx --bun velyx add --all"
/>

### Search for components

<x-code-tabs
    npm="npx velyx list --query button"
    pnpm="pnpm dlx velyx list --query button"
    yarn="yarn dlx velyx list --query button"
    bun="bunx --bun velyx list --query button"
/>

<x-code-tabs
    npm="npx velyx search --query form"
    pnpm="pnpm dlx velyx search --query form"
    yarn="yarn dlx velyx search --query form"
    bun="bunx --bun velyx search --query form"
/>

### Get JSON output

<x-code-tabs
    npm="npx velyx list --json"
    pnpm="pnpm dlx velyx list --json"
    yarn="yarn dlx velyx list --json"
    bun="bunx --bun velyx list --json"
/>

## Next Steps

- Learn about [theming and customization](/docs/theming)
- Explore the [component library](/docs/components)
- Read the [configuration guide](/docs/configuration)
