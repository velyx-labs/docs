---
title: Input
description: Form input component with validation and variants
extends: _layouts.documentation
section: content
---

# Input

Input components allow users to enter and edit text content.

## Installation

Add the input component to your project:

<x-code-tabs
    npm="npx velyx add input"
    pnpm="pnpm dlx velyx add input"
    yarn="yarn dlx velyx add input"
    bun="bunx --bun velyx add input"
/>

<x-callout type="warning">
<strong>Note:</strong> The input component includes <code>label</code> and other form components. Make sure to add all required dependencies.
</x-callout>

## Usage

### Basic Input

```php
<x-input />
```

### With Label

```php
<x-label for="email">Email Address</x-label>
<x-input id="email" type="email" placeholder="user@example.com" />
```

### With Value

```php
<x-input value="{{ old('title') }}" />
```

### Laravel Form Integration

```php
<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('put')

    <x-label for="name">Name</x-label>
    <x-input
        id="name"
        name="name"
        value="{{ old('name', $user->name) }}"
        required
    />

    @error('name')
        <p class="text-sm text-destructive mt-1">{{ $message }}</p>
    @enderror
</form>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | `string` | `text` | Input type |
| `name` | `string` | - | Input name |
| `id` | `string` | - | Input ID |
| `placeholder` | `string` | - | Placeholder text |
| `value` | `string` | - | Input value |
| `required` | `boolean` | `false` | Required field |
| `disabled` | `boolean` | `false` | Disabled state |
| `readonly` | `boolean` | `false` | Read-only state |

## Input Types

```php
<x-input type="text" />
<x-input type="email" />
<x-input type="password" />
<x-input type="number" />
<x-input type="tel" />
<x-input type="url" />
<x-input type="search" />
```

## Examples

### Login Form

```php
<x-card>
    <x-slot:header>
        <h2 class="text-2xl font-bold">Welcome Back</h2>
        <p class="text-muted-foreground">Sign in to your account</p>
    </x-slot:header>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <x-label for="email">Email</x-label>
            <x-input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            />
            @error('email')
                <p class="text-sm text-destructive mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <x-label for="password">Password</x-label>
            <x-input
                id="password"
                type="password"
                name="password"
                required
            />
            @error('password')
                <p class="text-sm text-destructive mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2">
                <input type="checkbox" name="remember" class="rounded">
                <span class="text-sm">Remember me</span>
            </label>

            <a href="{{ route('password.request') }}" class="text-sm text-primary hover:underline">
                Forgot password?
            </a>
        </div>

        <x-button type="submit" class="w-full">
            Sign In
        </x-button>
    </form>
</x-card>
```

### Search Input

```php
<div class="relative">
    <x-icon name="search" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />
    <x-input
        type="search"
        placeholder="Search..."
        class="pl-10"
    />
</div>
```

### Input with Icon

```php
<div class="relative">
    <x-icon name="mail" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />
    <x-input
        type="email"
        placeholder="your@email.com"
        class="pl-10"
    />
</div>
```

### Disabled Input

```php
<x-label for="disabled">Disabled Input</x-label>
<x-input id="disabled" disabled value="Cannot edit" />
```

### Readonly Input

```php
<x-label for="readonly">Readonly Input</x-label>
<x-input id="readonly" readonly value="john@example.com" />
```

## Validation

Display validation errors with inputs:

```php
<div>
    <x-label for="username">Username</x-label>
    <x-input
        id="username"
        name="username"
        value="{{ old('username') }}"
        class="{{ $errors->has('username') ? 'border-destructive' : '' }}"
    />
    @error('username')
        <p class="text-sm text-destructive mt-1">{{ $message }}</p>
    @enderror
</div>
```

## Helper Text

Add helper text below inputs:

```php
<div>
    <x-label for="password">Password</x-label>
    <x-input id="password" type="password" />
    <p class="text-xs text-muted-foreground mt-1">
        Must be at least 8 characters long.
    </p>
</div>
```

## Customization

### Custom Styling

```php
<x-input class="bg-muted border-0" />
```

### Custom Sizes

```php
<x-input class="px-2 py-1 text-sm" />
<x-input class="px-4 py-3 text-lg" />
```

## Related Components

- **Label** - `<x-label>` for input labels
- **Textarea** - `<x-textarea>` for multi-line input
- **Select** - `<x-select>` for dropdown selection
- **Checkbox** - `<x-checkbox>` for boolean input
- **Toggle** - `<x-toggle>` for switch input

## Next Steps

- Explore [Button component](/docs/components/button)
- Learn about [Card component](/docs/components/card)
- View [Modal component](/docs/components/modal)
