---
title: Installation
description: Get started with Velyx in your Laravel project
extends: _layouts.documentation
section: content
---

# Installation

Get started with Velyx in your Laravel project.

## Prerequisites

Before installing Velyx, make sure you have:

- **Laravel** 11.0 or higher
- **Node.js** 20 or higher
- **PHP** 8.2 or higher
- **Tailwind CSS** v4 installed in your project

## Install the CLI

Install the Velyx CLI globally via npm:

```bash
npm install -g velyx
```

Or use pnpm:

```bash
pnpm add -g velyx
```

## Initialize Velyx

Run the init command in your Laravel project:

```bash
velyx init
```

This will:

1. Create a `velar.config` file in your project root
2. Add the necessary CSS imports to your Tailwind configuration
3. Set up the component paths

## Add Your First Component

Browse the [components library](/docs/components) and add components to your project:

```bash
velyx add button
```

Components are copied directly into your project — you own the code and can customize them however you want.

## What's Next?

- Learn how to [customize components](/docs/theming)
- Explore the [component library](/docs/components)
- Check out the [CLI reference](/docs/cli-reference)
