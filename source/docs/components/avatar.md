---
title: Avatar
description: Avatar component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/avatar.png
metaTitle: Avatar Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Avatar

Avatar components are used to represent a user and can display images, initials, or fallback icons.

## Installation

Add the avatar component to your project:

<x-code-tabs
    npm="npx velyx@latest add avatar"
    pnpm="pnpm dlx velyx@latest add avatar"
    yarn="yarn dlx velyx@latest add avatar"
    bun="bunx --bun velyx@latest add avatar"
/>

## Usage

### Default Avatar

<x-component-preview component="avatar">
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
    />
</x-component-preview>

### Sizes

<x-component-preview component="avatar" :props="['size' => 'xs']">
    <x-ui.avatar
        size="xs"
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
    />
</x-component-preview>

<x-component-preview component="avatar" :props="['size' => 'sm']">
    <x-ui.avatar
        size="sm"
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
    />
</x-component-preview>

<x-component-preview component="avatar" :props="['size' => 'md']">
    <x-ui.avatar
        size="md"
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
    />
</x-component-preview>

<x-component-preview component="avatar" :props="['size' => 'lg']">
    <x-ui.avatar
        size="lg"
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
    />
</x-component-preview>

<x-component-preview component="avatar" :props="['size' => 'xl']">
    <x-ui.avatar
        size="xl"
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
    />
</x-component-preview>

### With Status

<x-component-preview component="avatar" :props="['status' => 'online']">
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
        status="online"
    />
</x-component-preview>

<x-component-preview component="avatar" :props="['status' => 'offline']">
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
        status="offline"
    />
</x-component-preview>

<x-component-preview component="avatar" :props="['status' => 'busy']">
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
        status="busy"
    />
</x-component-preview>

<x-component-preview component="avatar" :props="['status' => 'away']">
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
        status="away"
    />
</x-component-preview>

### Shapes

<x-component-preview component="avatar" :props="['shape' => 'circle']">
    <x-ui.avatar
        shape="circle"
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
    />
</x-component-preview>

<x-component-preview component="avatar" :props="['shape' => 'square']">
    <x-ui.avatar
        shape="square"
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
    />
</x-component-preview>

### Fallback

<x-component-preview component="avatar" :props="['fallbackIcon' => 'user']">
    <x-ui.avatar
        name="John Doe"
        fallback-icon="user"
    />
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `src` | `string` | `null` | Image URL for the avatar |
| `name` | `string` | `null` | User's name (used for initials and alt text) |
| `size` | `string` | `'xl'` | Size of the avatar: `xs`, `sm`, `md`, `lg`, `xl` |
| `shape` | `string` | `'circle'` | Shape of the avatar: `circle` or `square` |
| `status` | `string` | `null` | Status indicator: `online`, `offline`, `busy`, `away` |
| `fallbackIcon` | `string` | `'user'` | Icon name to show when no image is provided |

## Examples

### Avatar Group

```php
<div class="flex -space-x-2">
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=1"
        name="Alice"
        size="sm"
    />
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=2"
        name="Bob"
        size="sm"
    />
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=3"
        name="Charlie"
        size="sm"
    />
    <x-ui.avatar
        name="+5"
        size="sm"
        fallback-icon="plus"
    />
</div>
```

### User Profile Card

```php
<div class="flex items-center gap-4 p-4 border rounded-lg">
    <x-ui.avatar
        src="https://i.pravatar.cc/128?img=12"
        name="Jane Cooper"
        size="lg"
        status="online"
    />

    <div>
        <p class="font-medium">Jane Cooper</p>
        <p class="text-sm text-muted-foreground">Product Designer</p>
    </div>
</div>
```

### With Initials

```php
<x-ui.avatar
    name="Jane Cooper"
    fallback-icon="user"
    size="xl"
/>
```

## Accessibility

Avatar components include proper ARIA attributes:

- Alt text generated from the `name` prop
- Proper semantic HTML structure
- Status indicators with ARIA labels

## Customization

The avatar component uses Tailwind CSS classes. You can customize the appearance by modifying the component in your project:

```php
{{-- resources/views/components/ui/avatar.blade.php --}}

@props([
    'src' => null,
    'name' => null,
    'size' => 'xl',
    'shape' => 'circle',
    'status' => null,
    'fallbackIcon' => 'user',
])

// Customize sizes, colors, and styles here
```

### Size Customization

The avatar supports the following sizes:
- `xs`: 24px
- `sm`: 32px
- `md`: 40px
- `lg`: 48px
- `xl`: 56px

### Status Colors

- `online`: Green
- `offline`: Gray
- `busy`: Red
- `away`: Yellow

## Next Steps

- Explore [Avatar Group component](/docs/components/avatar-group)
- Learn about [Badge component](/docs/components/badge)
- View [Card component](/docs/components/card)
