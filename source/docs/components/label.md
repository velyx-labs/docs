---
title: Label
description: Label component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/label.png
metaTitle: Label Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Label

The Label component provides accessible form labels with optional descriptions and required indicators. It should be used with form inputs to improve usability and accessibility.

## Installation

Add the label component to your project:

<x-code-tabs
    npm="npx velyx@latest add label"
    pnpm="pnpm dlx velyx@latest add label"
    yarn="yarn dlx velyx@latest add label"
    bun="bunx --bun velyx@latest add label"
/>

## Usage

### Default Label

<x-component-preview component="label">
    <div class="grid gap-2 max-w-sm">
        <x-ui.label for="email">Email address</x-ui.label>
        <x-ui.input id="email" type="email" placeholder="name@example.com" class="w-full" />
    </div>
</x-component-preview>

### With Description

<x-component-preview component="label">
    <div class="grid gap-2 max-w-sm">
        <x-ui.label for="email" description="We will only use this email for account-related updates.">
            Email address
        </x-ui.label>
        <x-ui.input id="email" type="email" placeholder="name@example.com" class="w-full" />
    </div>
</x-component-preview>

### Required Label

<x-component-preview component="label">
    <div class="grid gap-2 max-w-sm">
        <x-ui.label for="password" required="true">
            Password
        </x-ui.label>
        <x-ui.input id="password" type="password" placeholder="Enter your password" class="w-full" />
    </div>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `for` | `string` | `null` | The ID of the form input this label is associated with |
| `required` | `boolean` | `false` | Whether to display a required indicator (*) |
| `description` | `string` | `null` | Additional helper text to display below the label |

## Examples

### Basic Label

```php
<x-ui.label for="email">
    Email address
</x-ui.label>
<x-ui.input id="email" type="email" />
```

### With Helper Text

```php
<x-ui.label for="username" description="Choose a unique username for your account.">
    Username
</x-ui.label>
<x-ui.input id="username" type="text" />
```

### Required Field

```php
<x-ui.label for="password" required="true">
    Password
</x-ui.label>
<x-ui.input id="password" type="password" required />
```

### With Placeholder

```php
<x-ui.label for="name">
    Full name
</x-ui.label>
<x-ui.input id="name" type="text" placeholder="John Doe" />
```

### In a Form

```php
<form>
    <div class="space-y-4">
        <div class="grid gap-2">
            <x-ui.label for="email" required="true">
                Email
            </x-ui.label>
            <x-ui.input id="email" type="email" placeholder="name@example.com" required />
        </div>

        <div class="grid gap-2">
            <x-ui.label for="password" required="true" description="Must be at least 8 characters.">
                Password
            </x-ui.label>
            <x-ui.input id="password" type="password" required />
        </div>

        <button type="submit" class="x-ui.button">
            Submit
        </button>
    </div>
</form>
```

### With Checkbox

```php
<div class="flex items-center gap-2">
    <input type="checkbox" id="terms" class="h-4 w-4 rounded border-border" />
    <x-ui.label for="terms" class="cursor-pointer">
        I agree to the terms and conditions
    </x-ui.label>
</div>
```

### With Radio Group

```php
<div class="space-y-2">
    <x-ui.label>Preferred contact method</x-ui.label>

    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
            <input type="radio" name="contact" id="email" value="email" class="h-4 w-4" />
            <x-ui.label for="email" class="cursor-pointer">Email</x-ui.label>
        </div>

        <div class="flex items-center gap-2">
            <input type="radio" name="contact" id="phone" value="phone" class="h-4 w-4" />
            <x-ui.label for="phone" class="cursor-pointer">Phone</x-ui.label>
        </div>
    </div>
</div>
```

### Livewire Integration

```php
<div class="grid gap-2">
    <x-ui.label for="title" required="true">
        Post Title
    </x-ui.label>
    <x-ui.input
        id="title"
        wire:model.live="title"
        placeholder="Enter post title"
        class="w-full"
    />
    @error('title') <span class="text-sm text-destructive">{{ $message }}</span>
</div>
```

## Styling

The Label component uses Tailwind CSS utility classes:

- **Base**: `text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70`
- **Required indicator**: `text-destructive`
- **Description**: `text-xs text-muted-foreground`

## Accessibility

The Label component includes proper accessibility features:

- **HTML5 `<label>` element**: Provides semantic label for form inputs
- **`for` attribute**: Associates label with specific input by ID
- **Required indicator**: Visual indicator for required fields
- **Description**: Additional context for screen readers
- **Keyboard navigation**: Labels are focusable when associated with checkboxes/radios

### Best Practices

- Always provide a `for` attribute that matches the input's `id`
- Use clear, concise text that describes the input purpose
- Place labels above their associated inputs for better scanning
- Include helper text for complex inputs
- Don't use placeholders as replacements for labels
- Mark required fields with the `required` prop

## Notes

- The label automatically adds the required (*) indicator when `required="true"`
- Descriptions appear below the label in muted text
- The component uses peer-placeholder CSS for styling (use with `peer` class on parent)
- When used with checkboxes/radios, add `cursor-pointer` class to make the entire label clickable
- The required indicator uses the destructive color by default

## Next Steps

- Explore [Input component](/docs/components/input)
- Learn about [Form components](/docs/components/form)
- View [Checkbox component](/docs/components/checkbox)
