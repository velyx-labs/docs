---
permalink: llms.txt
---

# Velyx

> Velyx provides Laravel-first UI components, documentation, and CLI workflows for copying, adapting, and shipping Blade components with Tailwind CSS v4, Alpine.js, and optional Livewire support.

This site is the primary documentation surface for Velyx.

Use this file as a curated entry point. Prefer the core guides and component pages below over site-wide crawling when you need concise, high-signal context.

Important notes:

- Velyx components are copied into user projects; they are not consumed as a closed runtime package.
- The CLI, registry, and docs are related but separate codebases.
- Component preview rendering in the docs is backed by the registry preview system.
- The docs repository uses `pnpm` for repository-level JavaScript workflows.

## Overview

- [Home]({{ rtrim($page->baseUrl, '/') }}/): Product positioning, landing page, and primary calls to action.
- [Installation]({{ rtrim($page->baseUrl, '/') }}/docs/installation): Starting point for setup in a Laravel project.
- [Quick Start]({{ rtrim($page->baseUrl, '/') }}/docs/quick-start): Fast path for initializing Velyx and adding the first component.
- [CLI Reference]({{ rtrim($page->baseUrl, '/') }}/docs/cli-reference): Full command reference for `init`, `add`, `list`, and `search`.
- [Configuration]({{ rtrim($page->baseUrl, '/') }}/docs/configuration): Configuration model and project-level setup details.
- [Theming]({{ rtrim($page->baseUrl, '/') }}/docs/theming): Theme and styling concepts for adapting Velyx components.

## Core Components

- [Button]({{ rtrim($page->baseUrl, '/') }}/docs/components/button): Basic action component and a useful first example.
- [Card]({{ rtrim($page->baseUrl, '/') }}/docs/components/card): Content container patterns.
- [Input]({{ rtrim($page->baseUrl, '/') }}/docs/components/input): Form input patterns with Alpine integration.
- [Dialog]({{ rtrim($page->baseUrl, '/') }}/docs/components/dialog): Modal dialog component.
- [Drawer]({{ rtrim($page->baseUrl, '/') }}/docs/components/drawer): Off-canvas panel component.
- [Dropdown Menu]({{ rtrim($page->baseUrl, '/') }}/docs/components/dropdown-menu): Menu and nested menu interactions.
- [Tabs]({{ rtrim($page->baseUrl, '/') }}/docs/components/tabs): Multi-panel navigation component.
- [Toast]({{ rtrim($page->baseUrl, '/') }}/docs/components/toast): Notification and transient feedback patterns.
- [Tooltip]({{ rtrim($page->baseUrl, '/') }}/docs/components/tooltip): Lightweight contextual hints.
- [Range Slider]({{ rtrim($page->baseUrl, '/') }}/docs/components/range-slider): Example of a kebab-case interactive component with JavaScript.

## Design Guides

- [Colors]({{ rtrim($page->baseUrl, '/') }}/docs/design/colors): Color tokens and semantic usage.
- [Typography]({{ rtrim($page->baseUrl, '/') }}/docs/design/typography): Typography system and documentation styling.
- [Spacing]({{ rtrim($page->baseUrl, '/') }}/docs/design/spacing): Spacing scale and layout guidance.

## Project Surfaces

- [Component Library]({{ rtrim($page->baseUrl, '/') }}/docs/components): Index of documented components.
- [GitHub](https://github.com/velyx-labs): Organization-level source and related repositories.
