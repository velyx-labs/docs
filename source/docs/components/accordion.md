---
title: Accordion
description: Accordion component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/accordion.png
metaTitle: Accordion Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Accordion

Accordions allow users to expand and collapse content panels, useful for FAQs, documentation, and organizing large amounts of content.

## Installation

Add the accordion component to your project:

<x-code-tabs
    npm="npx velyx@latest add accordion"
    pnpm="pnpm dlx velyx@latest add accordion"
    yarn="yarn dlx velyx@latest add accordion"
    bun="bunx --bun velyx@latest add accordion"
/>

## Usage

### Default Accordion

<x-component-preview component="accordion">
    <x-ui.accordion type="single" collapsible>
        <x-ui.accordion.item value="item-1">
            <x-ui.accordion.trigger>Is it accessible?</x-ui.accordion.trigger>
            <x-ui.accordion.content>
                Yes. It adheres to the WAI-ARIA design pattern.
            </x-ui.accordion.content>
        </x-ui.accordion.item>

        <x-ui.accordion.item value="item-2">
            <x-ui.accordion.trigger>Is it styled?</x-ui.accordion.trigger>
            <x-ui.accordion.content>
                Yes. It comes with default styles that you can customize.
            </x-ui.accordion.content>
        </x-ui.accordion.item>

        <x-ui.accordion.item value="item-3">
            <x-ui.accordion.trigger>Is it animated?</x-ui.accordion.trigger>
            <x-ui.accordion.content>
                Yes. It's animated by default, but you can disable it if you prefer.
            </x-ui.accordion.content>
        </x-ui.accordion.item>
    </x-ui.accordion>

</x-component-preview>

### Multiple Open

<x-component-preview component="accordion" :props="['multiple' => true]">
    <x-ui.accordion type="multiple">
        <x-ui.accordion.item value="item-1">
            <x-ui.accordion.trigger>Is it accessible?</x-ui.accordion.trigger>
            <x-ui.accordion.content>
                Yes. It adheres to the WAI-ARIA design pattern.
            </x-ui.accordion.content>
        </x-ui.accordion.item>

        <x-ui.accordion.item value="item-2">
            <x-ui.accordion.trigger>Is it styled?</x-ui.accordion.trigger>
            <x-ui.accordion.content>
                Yes. It comes with default styles that you can customize.
            </x-ui.accordion.content>
        </x-ui.accordion.item>

        <x-ui.accordion.item value="item-3">
            <x-ui.accordion.trigger>Is it animated?</x-ui.accordion.trigger>
            <x-ui.accordion.content>
                Yes. It's animated by default, but you can disable it if you prefer.
            </x-ui.accordion.content>
        </x-ui.accordion.item>
    </x-ui.accordion>

</x-component-preview>

## Props

### Accordion Root

| Prop           | Type      | Default    | Description                                          |
| -------------- | --------- | ---------- | ---------------------------------------------------- |
| `type`         | `string`  | `'single'` | Type of accordion: `'single'` or `'multiple'`        |
| `collapsible`  | `boolean` | `true`     | Whether items can be collapsed                       |
| `defaultValue` | `string`  | `null`     | The value of the item that should be open by default |

### Accordion Item

| Prop    | Type     | Default  | Description                    |
| ------- | -------- | -------- | ------------------------------ |
| `value` | `string` | required | Unique identifier for the item |

### Usage

Use the `accordion-item`, `accordion-trigger`, and `accordion-content` components to build your accordion:

```php
<x-ui.accordion type="single">
    <x-ui.accordion.item value="item-1">
        <x-ui.accordion.trigger>
            Trigger text
        </x-ui.accordion.trigger>
        <x-ui.accordion.content>
            Content goes here
        </x-ui.accordion.content>
    </x-ui.accordion.item>
</x-ui.>
```

## Examples

### FAQ Section

```php
<x-ui.accordion type="multiple">
    <x-ui.accordion.item value="item-1">
        <x-ui.accordion.trigger>How do I install components?</x-ui.accordion.trigger>
        <x-ui.accordion.content>
            Use the Velyx CLI: <code>npx velyx@latest add button</code>
        </x-ui.accordion.content>
    </x-ui.accordion.item>

    <x-ui.accordion.item value="item-2">
        <x-ui.accordion.trigger>Can I customize styles?</x-ui.accordion.trigger>
        <x-ui.accordion.content>
            Yes, components use Tailwind CSS utilities and can be fully customized.
        </x-ui.accordion.content>
    </x-ui.accordion.item>

    <x-ui.accordion.item value="item-3">
        <x-ui.accordion.trigger>Is it compatible with Livewire?</x-ui.accordion.trigger>
        <x-ui.accordion.content>
            Yes, fully compatible with Livewire 3+ and Alpine.js.
        </x-ui.accordion.content>
    </x-ui.accordion.item>
</x-ui.>
```

### Documentation Sections

```php
<x-ui.accordion type="single" collapsible>
    <x-ui.accordion.item value="getting-started">
        <x-ui.accordion.trigger>Getting Started</x-ui.accordion.trigger>
        <x-ui.accordion.content>
            Begin by installing the CLI tool and running the init command.
        </x-ui.accordion.content>
    </x-ui.accordion.item>

    <x-ui.accordion.item value="configuration">
        <x-ui.accordion.trigger>Configuration</x-ui.accordion.trigger>
        <x-ui.accordion.content>
            Configure your components in <code>config/velyx.php</code>.
        </x-ui.accordion.content>
    </x-ui.accordion.item>

    <x-ui.accordion.item value="advanced">
        <x-ui.accordion.trigger>Advanced Usage</x-ui.accordion.trigger>
        <x-ui.accordion.content>
            Learn about custom variants, props, and theming options.
        </x-ui.accordion.content>
    </x-ui.accordion.item>
</x-ui.>
```

## Accessibility

Accordion components include proper ARIA attributes and keyboard support:

- **Tab** - Focus accordion
- **Enter/Space** - Toggle focused panel
- **Arrow keys** - Navigate between panels
- Proper ARIA roles and states

## Customization

The accordion component uses Tailwind CSS classes. You can customize the appearance by modifying the component in your project:

```php

@props([
    'type' => 'single',
    'collapsible' => true,
    'defaultValue' => null,
])
```

The accordion is built with Alpine.js for state management and follows the WAI-ARIA accordion pattern for accessibility.

## Next Steps

- Explore [Alert component](/docs/components/alert)
- Learn about [Badge component](/docs/components/badge)
- View [Button component](/docs/components/button)
