---
title: Avatar Group
description: Grouped avatars with overlap for showing multiple users
extends: _layouts.documentation
section: content
---

# Avatar Group

Avatar groups display multiple avatars stacked together, perfect for showing team members, collaborators, or contributors.

## Installation

Add the avatar group component to your project:

<x-code-tabs
    npm="npx velyx add avatar-group"
    pnpm="pnpm dlx velyx add avatar-group"
    yarn="yarn dlx velyx add avatar-group"
    bun="bunx --bun velyx add avatar-group"
/>

## Usage

### Default Avatar Group

<x-component-preview component="avatar-group">
    <x-ui.avatar-group :avatars="[
        ['src' => 'https://i.pravatar.cc/128?img=11', 'name' => 'Jane Cooper'],
        ['src' => 'https://i.pravatar.cc/128?img=12', 'name' => 'Devon Lane'],
        ['src' => 'https://i.pravatar.cc/128?img=13', 'name' => 'Robert Fox'],
        ['src' => 'https://i.pravatar.cc/128?img=14', 'name' => 'Wade Warren'],
    ]" />
</x-component-preview>

### With Max Visible

<x-component-preview component="avatar-group">
    <x-ui.avatar-group
        :avatars="[
            ['src' => 'https://i.pravatar.cc/128?img=11', 'name' => 'Jane Cooper'],
            ['src' => 'https://i.pravatar.cc/128?img=12', 'name' => 'Devon Lane'],
            ['src' => 'https://i.pravatar.cc/128?img=13', 'name' => 'Robert Fox'],
            ['src' => 'https://i.pravatar.cc/128?img=14', 'name' => 'Wade Warren'],
            ['src' => 'https://i.pravatar.cc/128?img=15', 'name' => 'Darlene Robertson'],
        ]"
        :max="3"
    />
</x-component-preview>

### Sizes

<x-component-preview component="avatar-group">
    <x-ui.avatar-group
        :avatars="[
            ['src' => 'https://i.pravatar.cc/128?img=11', 'name' => 'Jane Cooper'],
            ['src' => 'https://i.pravatar.cc/128?img=12', 'name' => 'Devon Lane'],
            ['src' => 'https://i.pravatar.cc/128?img=13', 'name' => 'Robert Fox'],
        ]"
        size="sm"
    />
</x-component-preview>

<x-component-preview component="avatar-group">
    <x-ui.avatar-group
        :avatars="[
            ['src' => 'https://i.pravatar.cc/128?img=11', 'name' => 'Jane Cooper'],
            ['src' => 'https://i.pravatar.cc/128?img=12', 'name' => 'Devon Lane'],
            ['src' => 'https://i.pravatar.cc/128?img=13', 'name' => 'Robert Fox'],
        ]"
        size="md"
    />
</x-component-preview>

<x-component-preview component="avatar-group">
    <x-ui.avatar-group
        :avatars="[
            ['src' => 'https://i.pravatar.cc/128?img=11', 'name' => 'Jane Cooper'],
            ['src' => 'https://i.pravatar.cc/128?img=12', 'name' => 'Devon Lane'],
            ['src' => 'https://i.pravatar.cc/128?img=13', 'name' => 'Robert Fox'],
        ]"
        size="lg"
    />
</x-component-preview>

<x-component-preview component="avatar-group">
    <x-ui.avatar-group
        :avatars="[
            ['src' => 'https://i.pravatar.cc/128?img=11', 'name' => 'Jane Cooper'],
            ['src' => 'https://i.pravatar.cc/128?img=12', 'name' => 'Devon Lane'],
            ['src' => 'https://i.pravatar.cc/128?img=13', 'name' => 'Robert Fox'],
        ]"
        size="xl"
    />
</x-component-preview>

### With Status

<x-component-preview component="avatar-group">
    <x-ui.avatar-group :avatars="[
        ['src' => 'https://i.pravatar.cc/128?img=11', 'name' => 'Jane Cooper', 'status' => 'online'],
        ['src' => 'https://i.pravatar.cc/128?img=12', 'name' => 'Devon Lane', 'status' => 'online'],
        ['src' => 'https://i.pravatar.cc/128?img=13', 'name' => 'Robert Fox', 'status' => 'away'],
        ['src' => 'https://i.pravatar.cc/128?img=14', 'name' => 'Wade Warren', 'status' => 'busy'],
    ]" />
</x-component-preview>

### Square Shape

<x-component-preview component="avatar-group">
    <x-ui.avatar-group
        :avatars="[
            ['src' => 'https://i.pravatar.cc/128?img=11', 'name' => 'Jane Cooper'],
            ['src' => 'https://i.pravatar.cc/128?img=12', 'name' => 'Devon Lane'],
            ['src' => 'https://i.pravatar.cc/128?img=13', 'name' => 'Robert Fox'],
        ]"
        shape="square"
    />
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `avatars` | `array` | `[]` | Array of avatar data with `src`, `name`, and optional `status` |
| `max` | `int` | `4` | Maximum number of avatars to show before displaying overflow |
| `size` | `string` | `'lg'` | Size of avatars: `xs`, `sm`, `md`, `lg`, `xl` |
| `shape` | `string` | `'circle'` | Shape of avatars: `circle` or `square` |

### Avatar Data Structure

Each avatar in the `avatars` array should have:

```php
[
    'src' => 'https://example.com/avatar.jpg',  // Required: Image URL
    'name' => 'Jane Cooper',                     // Required: User's name
    'status' => 'online'                         // Optional: Status indicator
]
```

## Examples

### Team Members

```blade
<div class="flex items-center gap-4">
    <x-ui.avatar-group
        :avatars="[
            ['src' => 'https://i.pravatar.cc/128?img=1', 'name' => 'Alice'],
            ['src' => 'https://i.pravatar.cc/128?img=2', 'name' => 'Bob'],
            ['src' => 'https://i.pravatar.cc/128?img=3', 'name' => 'Charlie'],
        ]"
        :max="3"
    />

    <span class="text-sm text-muted-foreground">
        3 team members
    </span>
</div>
```

### With Counter

```blade
<x-ui.avatar-group
    :avatars="$teamMembers"
    :max="4"
/>

<span class="text-xs text-muted-foreground">
    +{{ count($teamMembers) - 4 }} more
</span>
```

### Collaborators Section

```blade
<div class="flex items-center justify-between p-4 border rounded-lg">
    <div>
        <p class="font-medium">Collaborators</p>
        <p class="text-sm text-muted-foreground">{{ count($collaborators) }} people</p>
    </div>

    <x-ui.avatar-group
        :avatars="$collaborators"
        :max="5"
        size="sm"
    />
</div>
```

## Accessibility

Avatar group components include proper accessibility features:

- Alt text generated from avatar names
- Semantic HTML structure
- Visual separation with overlapping layers
- Clear visual hierarchy

## Customization

The avatar group component uses Tailwind CSS classes. You can customize the appearance by modifying the component in your project:

```blade
{{-- resources/views/components/ui/avatar-group.blade.php --}}

@props([
    'avatars' => [],
    'max' => 4,
    'size' => 'lg',
    'shape' => 'circle',
])

// Customize overlap amount, counter display, and styles
```

### Overlap Amount

Avatars overlap by default to create a compact grouping. The overlap is controlled using negative margins in Tailwind:

```blade
-x-2  // Overlap by 8px
-x-3  // Overlap by 12px
-x-4  // Overlap by 16px
```

## Next Steps

- Explore [Avatar component](/docs/components/avatar)
- Learn about [Badge component](/docs/components/badge)
- View [Card component](/docs/components/card)
