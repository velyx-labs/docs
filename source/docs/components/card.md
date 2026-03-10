---
title: Card
description: Card component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/card.png
metaTitle: Card Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Card

Cards are versatile containers used to group related content and actions.

## Installation

Add the card component to your project:

<x-code-tabs
    npm="npx velyx@latest add card"
    pnpm="pnpm dlx velyx@latest add card"
    yarn="yarn dlx velyx@latest add card"
    bun="bunx --bun velyx@latest add card"
/>

## Usage

### Basic Card

```php
<x-card>
    <p>Card content goes here.</p>
</x-card>
```

### Card with Header

```php
<x-card>
    <x-slot:header>
        <h3 class="text-lg font-semibold">Card Title</h3>
        <p class="text-sm text-muted-foreground">Card description</p>
    </x-slot:header>

    <p>Card content goes here.</p>
</x-card>
```

### Card with Footer

```php
<x-card>
    <p>Card content goes here.</p>

    <x-slot:footer>
        <x-button>Action</x-button>
    </x-slot:footer>
</x-card>
```

### Complete Card

```php
<x-card>
    <x-slot:header>
        <h3 class="text-lg font-semibold">Analytics Overview</h3>
        <p class="text-sm text-muted-foreground">Last 30 days</p>
    </x-slot:header>

    <div class="space-y-4">
        <div>
            <p class="text-sm text-muted-foreground">Total Revenue</p>
            <p class="text-2xl font-bold">$45,231.89</p>
        </div>
    </div>

    <x-slot:footer>
        <div class="flex gap-2">
            <x-button variant="outline" size="sm">View Details</x-button>
            <x-button size="sm">Download</x-button>
        </div>
    </x-slot:footer>
</x-card>
```

## Slots

| Slot | Description |
|------|-------------|
| `header` | Card header section |
| `footer` | Card footer section |
| (default) | Main card content |

## Examples

### User Profile Card

```php
<x-card class="max-w-sm">
    <div class="flex flex-col items-center space-y-4">
        <img src="https://ui-avatars.com/api/?name=John+Doe" alt="Avatar" class="w-20 h-20 rounded-full">

        <div class="text-center">
            <h3 class="text-lg font-semibold">John Doe</h3>
            <p class="text-sm text-muted-foreground">Software Engineer</p>
        </div>

        <div class="flex gap-2">
            <x-button variant="outline" size="sm">Follow</x-button>
            <x-button size="sm">Message</x-button>
        </div>
    </div>
</x-card>
```

### Feature Card

```php
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($features as $feature)
    <x-card>
        <div class="space-y-4">
            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                <x-icon name="{{ $feature['icon'] }}" class="w-6 h-6 text-primary" />
            </div>

            <div>
                <h3 class="text-lg font-semibold">{{ $feature['title'] }}</h3>
                <p class="text-sm text-muted-foreground mt-2">
                    {{ $feature['description'] }}
                </p>
            </div>
        </div>
    </x-card>
    @endforeach
</div>
```

### Stats Card

```php
<x-card>
    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm text-muted-foreground">Total Users</p>
            <p class="text-2xl font-bold mt-1">2,341</p>
            <p class="text-xs text-green-600 mt-1">+12% from last month</p>
        </div>

        <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
            <x-icon name="users" class="w-6 h-6 text-green-600 dark:text-green-400" />
        </div>
    </div>
</x-card>
```

### Pricing Card

```php
<x-card class="max-w-sm">
    <x-slot:header>
        <h3 class="text-xl font-bold">Pro Plan</h3>
        <div class="mt-4">
            <span class="text-4xl font-bold">$29</span>
            <span class="text-muted-foreground">/month</span>
        </div>
    </x-slot:header>

    <ul class="space-y-3">
        <li class="flex items-center gap-2">
            <x-icon name="check" class="w-4 h-4 text-green-600" />
            <span>Up to 10 projects</span>
        </li>
        <li class="flex items-center gap-2">
            <x-icon name="check" class="w-4 h-4 text-green-600" />
            <span>Advanced analytics</span>
        </li>
        <li class="flex items-center gap-2">
            <x-icon name="check" class="w-4 h-4 text-green-600" />
            <span>24/7 support</span>
        </li>
    </ul>

    <x-slot:footer>
        <x-button class="w-full">Get Started</x-button>
    </x-slot:footer>
</x-card>
```

## Customization

### Custom Styling

```php
<x-card class="border-2 border-primary shadow-lg">
    <!-- Your content -->
</x-card>
```

### Custom Background

```php
<x-card class="bg-gradient-to-br from-primary/10 to-primary/5">
    <!-- Your content -->
</x-card>
```

## Responsive Grid

Use cards with responsive grids for layouts:

```php
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <x-card>Card 1</x-card>
    <x-card>Card 2</x-card>
    <x-card>Card 3</x-card>
</div>
```

## Next Steps

- Explore [Button component](/docs/components/button)
- Learn about [Input component](/docs/components/input)
- View [Modal component](/docs/components/modal)
