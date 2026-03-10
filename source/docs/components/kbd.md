---
title: Keyboard
description: Keyboard key shortcuts display component
extends: _layouts.documentation
section: content
---

# Keyboard

The Keyboard component displays keyboard key shortcuts with proper styling. It's useful for showing command shortcuts, keyboard navigation hints, and hotkeys in your UI.

## Installation

Add the keyboard component to your project:

<x-code-tabs
    npm="npx velyx add kbd"
    pnpm="pnpm dlx velyx add kbd"
    yarn="yarn dlx velyx add kbd"
    bun="bunx --bun velyx add kbd"
/>

<x-callout type="info">
<strong>Alpine.js Required:</strong> The keyboard component requires Alpine.js for interactivity. Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Single Key

<x-component-preview component="kbd">
    <x-ui.kbd keys="cmd+k" />
</x-component-preview>

### Multiple Keys

<x-component-preview component="kbd">
    <x-ui.kbd :keys="['ctrl', 'shift', 'right']" variant="outline" />
</x-component-preview>

### Large Size

<x-component-preview component="kbd">
    <x-ui.kbd keys="enter" size="lg" />
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `keys` | `string\|array` | required | The keyboard shortcut(s) to display. Can be a single key (e.g., `'k'`) or an array of keys (e.g., `['ctrl', 'k']`) |
| `size` | `string` | `'md'` | Size of the keyboard keys: `sm`, `md`, or `lg` |
| `variant` | `string` | `'default'` | Visual style variant: `default` or `outline` |

## Examples

### Basic Single Key

```blade
<x-ui.kbd keys="k" />
```

### Command Key Shortcut

```blade
<x-ui.kbd keys="cmd+k" />
```

### Control Key Combination

```blade
<x-ui.kbd :keys="['ctrl', 's']" />
```

### Multi-Key Combination

```blade
<x-ui.kbd :keys="['ctrl', 'shift', 'right']" />
```

### With Different Sizes

```blade
<x-ui.kbd keys="enter" size="sm" />
<x-ui.kbd keys="enter" size="md" />
<x-ui.kbd keys="enter" size="lg" />
```

### Outline Variant

```blade
<x-ui.kbd keys="esc" variant="outline" />
```

### Inline with Text

```blade
<p>
    Press
    <x-ui.kbd keys="cmd+k" class="mx-1" />
    to open command palette
</p>
```

### In Documentation

```blade
<div class="prose">
    <h3>Keyboard Shortcuts</h3>
    <ul>
        <li>
            <strong>Save:</strong>
            <x-ui.kbd :keys="['ctrl', 's']" class="ml-2" />
        </li>
        <li>
            <strong>Find:</strong>
            <x-ui.kbd :keys="['ctrl', 'f']" class="ml-2" />
        </li>
        <li>
            <strong>Quit:</strong>
            <x-ui.kbd keys="ctrl+q" class="ml-2" />
        </li>
    </ul>
</div>
```

### With Action Buttons

```blade
<div class="flex items-center gap-4">
    <span>Press</span>
    <x-ui.kbd :keys="['ctrl', 'k']" />
    <span>to search</span>
</div>
```

### Common Key Combinations

**Navigation:**
- `Tab` - Move focus forward
- `Shift + Tab` - Move focus backward

**Editing:**
- `Ctrl + C` - Copy
- `Ctrl + V` - Paste
- `Ctrl + X` - Cut
- `Ctrl + Z` - Undo
- `Ctrl + Shift + Z` - Redo

**System:**
- `Cmd + K` - Command palette
- `Cmd + /` - Quick search
- `Escape` - Close/Cancel

## Styling

The Keyboard component uses Tailwind CSS utility classes:

- **Container**: Flex layout with gap between keys
- **Keys**: Rounded corners, border, padding based on size
- **Typography**: Monospace font for consistency
- **Colors**: Muted foreground by default, primary for selected state

### Size Variants

| Size | Height | Padding | Font |
|------|--------|---------|------|
| `sm` | `h-6` | `px-1.5 py-0.5` | `text-xs` |
| `md` | `h-7` | `px-2 py-1` | `text-xs` |
| `lg` | `h-8` | `px-2.5 py-1` | `text-sm` |

### Variant Styles

- **Default**: Solid background with border
- **Outline**: Transparent background with visible border

## Accessibility

The Keyboard component includes accessibility features:

- **Semantic HTML**: Proper structure for screen readers
- **ARIA Labels**: Can be added with `aria-label` attribute
- **Visual Clarity**: High contrast for readability
- **Keyboard Focus**: Can receive keyboard focus when interactive

## Notes

- The component automatically formats key combinations with `+` symbols
- Platform-specific keys like `cmd` (macOS) and `ctrl` (Windows/Linux) are supported
- Multiple keys are displayed with proper spacing
- Monospace font ensures consistent key width
- Use descriptive text alongside keyboard shortcuts for better UX

## Next Steps

- Explore [Tooltip component](/docs/components/tooltip)
- Learn about [Command Palette component](/docs/components/command-palette)
- View [Input component](/docs/components/input)
