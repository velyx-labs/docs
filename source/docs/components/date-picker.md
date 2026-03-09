---
title: Date Picker
description: Interactive calendar component for selecting dates
extends: _layouts.documentation
section: content
---

# Date Picker

The Date Picker component provides an interactive calendar interface for selecting dates with support for min/max dates, size variations, and clear functionality.

## Installation

Add the date picker component to your project:

<x-code-tabs
    npm="npx velyx add date-picker"
    pnpm="pnpm dlx velyx add date-picker"
    yarn="yarn dlx velyx add date-picker"
    bun="bunx --bun velyx add date-picker"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The date picker component requires Alpine.js for interactivity. Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Default Date Picker

<x-component-preview component="date-picker">
    <x-ui.date-picker />
</x-component-preview>

### With Custom Placeholder

<x-component-preview component="date-picker" :props="['placeholder' => 'Choose your birthday']">
    <x-ui.date-picker placeholder="Choose your birthday" />
</x-component-preview>

### Small Size

<x-component-preview component="date-picker" :props="['size' => 'sm']">
    <x-ui.date-picker size="sm" />
</x-component-preview>

### Large Size

<x-component-preview component="date-picker" :props="['size' => 'lg']">
    <x-ui.date-picker size="lg" />
</x-component-preview>

### Not Clearable

<x-component-preview component="date-picker" :props="['clearable' => false]">
    <x-ui.date-picker :clearable="false" />
</x-component-preview>

### With Min/Max Dates

<x-component-preview component="date-picker">
    <x-ui.date-picker
        placeholder="Select a date in 2026"
        :clearable="true"
        min-date="2026-01-01"
        max-date="2026-12-31"
    />
</x-component-preview>

### Disabled

<x-component-preview component="date-picker" :props="['disabled' => true]">
    <x-ui.date-picker :disabled="true" />
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `placeholder` | `string` | `'Select a date'` | Placeholder text shown when no date is selected |
| `disabled` | `boolean` | `false` | Whether the date picker is disabled |
| `icon` | `string` | `'calendar'` | Icon name to display in the input field |
| `clearable` | `boolean` | `true` | Whether to show a clear button when a date is selected |
| `size` | `string` | `'md'` | Size of the input: `sm`, `md`, or `lg` |
| `minDate` | `string` | `null` | Minimum selectable date (format: YYYY-MM-DD) |
| `maxDate` | `string` | `null` | Maximum selectable date (format: YYYY-MM-DD) |

## Examples

### Basic Usage

```php
<x-ui.date-picker />
```

### With Placeholder

```php
<x-ui.date-picker placeholder="Select your birthdate" />
```

### With Size Variations

```php
<x-ui.date-picker size="sm" />
<x-ui.date-picker size="md" />
<x-ui.date-picker size="lg" />
```

### Without Clear Button

```php
<x-ui.date-picker :clearable="false" />
```

### With Date Range

```php
<x-ui.date-picker
    min-date="2026-01-01"
    max-date="2026-12-31"
    placeholder="Select a date in 2026"
/>
```

### Disabled State

```php
<x-ui.date-picker :disabled="true" />
```

### With Livewire

```php
<x-ui.date-picker wire:model="birthdate" />
```

### Controlled with Alpine.js

```php
<div x-data="{ date: '2026-03-15' }">
    <x-ui.date-picker x-model="date" />

    <p>Selected: <span x-text="date"></span></p>
</div>
```

### Form Integration

```php
<form method="POST" action="{{ route('profile.update') }}">
    @csrf

    <div class="space-y-4">
        <div>
            <label for="birthdate">Birthdate</label>
            <x-ui.date-picker
                id="birthdate"
                name="birthdate"
                placeholder="Select your birthdate"
                max-date="{{ now()->subYears(18)->format('Y-m-d') }}"
            />
        </div>

        <button type="submit">Save</button>
    </div>
</form>
```

## Accessibility

The Date Picker component includes keyboard navigation and ARIA attributes:

- **Tab**: Focus the date picker input
- **Enter/Space**: Open the calendar dropdown
- **Escape**: Close the calendar dropdown
- **Arrow Keys**: Navigate between months (when calendar is open)
- **Click**: Select a date from the calendar
- Proper ARIA roles and labels for screen readers
- Today button for quick navigation to current date

## Styling

The date picker uses Tailwind CSS utility classes and can be customized:

### Input Styling

The input field uses standard form classes:
- Border: `border-input`
- Background: `bg-background`
- Focus ring: `focus:ring-2 focus:ring-ring`
- Sizes: `h-8` (sm), `h-10` (md), `h-12` (lg)

### Calendar Styling

The calendar popup uses:
- Background: `bg-popover`
- Border: `border-border`
- Shadow: `shadow-lg`
- Selected date: `bg-primary text-primary-foreground`
- Today's date: `ring-1 ring-primary`
- Disabled dates: `opacity-30 cursor-not-allowed`

## Notes

- The component uses Alpine.js for state management and interactivity
- Date format is YYYY-MM-DD for min/max dates
- The calendar displays days from Monday to Sunday
- Today's date is highlighted with a ring indicator
- Selected dates use the primary color scheme
- Click outside the calendar to close it
- Press Escape to close the calendar

## Next Steps

- Explore [Input component](/docs/components/input)
- Learn about [Form components](/docs/components/form)
- View [Modal component](/docs/components/modal)
