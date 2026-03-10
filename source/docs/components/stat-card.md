---
title: Stat Card
description: Stat Card component documentation for Velyx. Installation, dashboard usage examples, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaTitle: Stat Card Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Stat Card

Stat cards surface key metrics in a compact, scannable format for dashboards and reporting views.

## Installation

Add the stat card component to your project:

<x-code-tabs
    npm="npx velyx@latest add stat-card"
    pnpm="pnpm dlx velyx@latest add stat-card"
    yarn="yarn dlx velyx@latest add stat-card"
    bun="bunx --bun velyx@latest add stat-card"
/>

## Usage

### Default Grid

<x-component-preview component="stat-card">
    <x-ui.stat-card title="Monthly revenue" value="$24.5K" icon="dollar-sign" variant="primary" trend="up" trend-value="+12.4%" trend-label="vs last month" />
</x-component-preview>

### Warning Variant

<x-component-preview component="stat-card" :props="['variant' => 'warning', 'trend' => 'down']">
    <x-ui.stat-card title="Churn risk" value="2.4%" icon="triangle-alert" variant="warning" trend="down" trend-value="-1.2%" trend-label="after fixes" />
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | `''` | Metric label |
| `value` | `string` | `'0'` | Main metric value |
| `icon` | `string` | `'activity'` | Lucide icon name |
| `trend` | `string|null` | `null` | Trend direction: `up`, `down`, or `null` |
| `trendValue` | `string` | `''` | Trend metric value |
| `trendLabel` | `string` | `''` | Secondary trend label |
| `variant` | `string` | `'default'` | Visual style such as `default`, `primary`, `success`, `warning`, or `danger` |

## Next Steps

- Explore [Card component](/docs/components/card)
- Learn about [Progress Steps component](/docs/components/progress-steps)
- View [Timeline component](/docs/components/timeline)
