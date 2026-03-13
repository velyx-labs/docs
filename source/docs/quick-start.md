---
title: Quick Start
description: Add your first Velyx component, understand the workflow, and move from documentation to implementation quickly in Laravel.
metaImage: /assets/images/og/docs/quick-start.png
metaTitle: Quick Start Guide for Velyx Components | Velyx
extends: _layouts.documentation
section: content
---

# Quick Start

Add your first component to your Laravel project in minutes.

## 1. Initialize Velyx

If you haven't already, run the init command:

<x-code-tabs
    npm="npx velyx@latest init"
    pnpm="pnpm dlx velyx@latest init"
    yarn="yarn dlx velyx@latest init"
    bun="bunx --bun velyx@latest init"
/>

If you want a non-interactive setup with defaults:

<x-code-tabs
    npm="npx velyx@latest init --defaults"
    pnpm="pnpm dlx velyx@latest init --defaults"
    yarn="yarn dlx velyx@latest init --defaults"
    bun="bunx --bun velyx@latest init --defaults"
/>

## 2. Add a Component

Use the CLI to add a component:

<x-code-tabs
    npm="npx velyx@latest add button"
    pnpm="pnpm dlx velyx@latest add button"
    yarn="yarn dlx velyx@latest add button"
    bun="bunx --bun velyx@latest add button"
/>

This will:

- Copy the button component files to your project
- Ask if you want to install any dependencies
- Handle any file conflicts

## 3. List or Search Components

<x-code-tabs
    npm="npx velyx@latest list"
    pnpm="pnpm dlx velyx@latest list"
    yarn="yarn dlx velyx@latest list"
    bun="bunx --bun velyx@latest list"
/>

## 4. Use the Component

The component is now available in your project. Use it in your Blade templates:

```php
<x-button>Click me</x-button>

<x-button variant="secondary">Secondary Action</x-button>

<x-button variant="outline" size="sm">Small Button</x-button>
```

## 5. Customize

Components are copied directly into your project, so you can customize them however you want:

```php
<!-- resources/views/components/button.blade.php -->

@props([
    'variant' => 'default',
    'size' => 'default',
])

<button
    class="..."
    {{ $attributes }}
>
    {{ $slot }}
</button>
```

## Next Steps

- Explore more [components](/docs/components)
- Learn about [theming](/docs/theming)
- Read the [CLI reference](/docs/cli-reference)
