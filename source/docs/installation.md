---
title: Installation
description: Install Velyx in your Laravel project and start adding Blade components with Tailwind CSS v4, Alpine.js, and Livewire support.
metaImage: /assets/images/og/docs/installation.png
metaTitle: Installation Guide for Laravel UI Components | Velyx
extends: _layouts.documentation
section: content
---

# Installation

Get started with Velyx in your Laravel project.

## Prerequisites

Before using Velyx, make sure you have:

- **Laravel** 10 or higher
- **Livewire** 3 or higher (if using Livewire components)
- **Node.js** 20 or higher
- **PHP** 8.2 or higher
- **Tailwind CSS** v4 installed in your project

<x-callout type="info" title="No Installation Required">
Velyx works via <code>npx</code> — no global installation needed! Just ensure you have Node.js 20+ in your Laravel project.
</x-callout>

## Initialize Velyx

Run the init command in your Laravel project:

<x-code-tabs
    npm="npx velyx@latest add button"
    pnpm="pnpm dlx velyx@latest add button"
    yarn="yarn dlx velyx@latest add button"
    bun="bunx --bun velyx@latest add button"
    default="npm"
/>

This will:

1. Create a `velyx.json` file in your project root
2. Check your project environment
3. Prepare the component setup for your app

## Add Your First Component

Browse the [components library](/docs/components) and add components to your project:

<x-code-tabs
    npm="npx velyx@latest add button"
    pnpm="pnpm dlx velyx@latest add button"
    yarn="yarn dlx velyx@latest add button"
    bun="bunx --bun velyx@latest add button"
/>

Components are copied directly into your project — you own the code and can customize them however you want.

<x-callout type="warning">
<strong>Note:</strong> Make sure to commit your changes before adding components, as Velyx will copy files into your project.
</x-callout>

## What's Next?

- Learn how to [customize components](/docs/theming)
- Explore the [component library](/docs/components)
- Check out the [CLI reference](/docs/cli-reference)
