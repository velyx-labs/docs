---
title: Components
description: Browse the available UI components
extends: _layouts.documentation
section: content
---

# Components

Beautiful, accessible components built with Blade, Tailwind CSS v4, and Alpine.js.

## Featured Components

### Button

A versatile button component with multiple variants and sizes.

```php
<x-button>Default</x-button>
<x-button variant="secondary">Secondary</x-button>
<x-button variant="outline">Outline</x-button>
<x-button variant="ghost">Ghost</x-button>
```

**Add it:** `npx velyx add button`

[View Documentation →](/docs/components/button)

---

### Card

A flexible card component for displaying content with header and footer slots.

```php
<x-card>
    <x-slot:header>
        <h3 class="text-lg font-semibold">Card Title</h3>
    </x-slot:header>
    <p>Card content goes here.</p>
    <x-slot:footer>
        <x-button>Action</x-button>
    </x-slot:footer>
</x-card>
```

**Add it:** `npx velyx add card`

[View Documentation →](/docs/components/card)

---

### Input

A form input component with validation support.

```php
<x-input type="email" placeholder="Email" />
<x-input type="password" placeholder="Password" />
```

**Add it:** `npx velyx add input`

[View Documentation →](/docs/components/input)

---

### Modal

A dialog modal component for overlays and alerts using Alpine.js.

```php
<div x-data="{ open: false }">
    <x-button @click="open = true">Open Modal</x-button>
    <x-modal x-model="open">
        <h2 class="text-lg font-semibold">Modal Title</h2>
        <p>Modal content goes here.</p>
        <x-button @click="open = false">Close</x-button>
    </x-modal>
</div>
```

**Add it:** `npx velyx add modal`

[View Documentation →](/docs/components/modal)

---

## All Components

### Forms

| Component | Description | Command |
|-----------|-------------|---------|
| Input | Text input fields | `npx velyx add input` |
| Label | Form labels | `npx velyx add label` |
| Toggle | Switch/toggle input | `npx velyx add toggle` |
| File Upload | File upload area | `npx velyx add file-upload` |
| Date Picker | Date selection | `npx velyx add date-picker` |
| Range Slider | Range input slider | `npx velyx add range-slider` |
| Rating | Star rating component | `npx velyx add rating` |

### Layout

| Component | Description | Command |
|-----------|-------------|---------|
| Card | Content containers | `npx velyx add card` |
| Avatar | User avatars | `npx velyx add avatar` |
| Avatar Group | Overlapping avatars | `npx velyx add avatar-group` |
| Separator | Visual divider | `npx velyx add separator` |

### Navigation

| Component | Description | Command |
|-----------|-------------|---------|
| Breadcrumbs | Navigation breadcrumb | `npx velyx add breadcrumbs` |
| Tabs | Tabbed content | `npx velyx add tabs` |
| Dropdown | Dropdown menu | `npx velyx add dropdown` |
| Progress Steps | Step indicator | `npx velyx add progress-steps` |
| Stepper | Multi-step form | `npx velyx add stepper` |

### Overlays

| Component | Description | Command |
|-----------|-------------|---------|
| Modal | Dialog overlay | `npx velyx add modal` |
| Drawer | Side panel | `npx velyx add drawer` |
| Popover | Popover content | `npx velyx add popover` |
| Tooltip | Hover tooltip | `npx velyx add tooltip` |
| Toast | Notifications | `npx velyx add toast` |

### Feedback

| Component | Description | Command |
|-----------|-------------|---------|
| Alert | Alert messages | `npx velyx add alert` |
| Empty State | Empty state display | `npx velyx add empty-state` |
| Progress Bar | Progress indicator | `npx velyx add progress-bar` |
| Skeleton | Loading placeholder | `npx velyx add skeleton` |

### Data Display

| Component | Description | Command |
|-----------|-------------|---------|
| Accordion | Collapsible content | `npx velyx add accordion` |
| Data Table | Data table | `npx velyx add data-table` |
| Code Snippet | Code display | `npx velyx add code-snippet` |
| Timeline | Timeline view | `npx velyx add timeline` |
| Badge | Status badges | `npx velyx add badge` |

### Other

| Component | Description | Command |
|-----------|-------------|---------|
| Button | Action buttons | `npx velyx add button` |
| Command Palette | Command palette | `npx velyx add command-palette` |
| Carousel | Image carousel | `npx velyx add carousel` |
| KBD | Keyboard key | `npx velyx add kbd` |
| Sortable List | Draggable list | `npx velyx add sortable-list` |
| Stat Card | Statistics card | `npx velyx add stat-card` |

## Adding Components

Use the CLI to add any component:

<x-code-tabs
    npm="npx velyx add button"
    pnpm="pnpm dlx velyx add button"
    yarn="yarn dlx velyx add button"
    bun="bunx --bun velyx add button"
/>

<x-code-tabs
    npm="npx velyx add card input modal"
    pnpm="pnpm dlx velyx add card input modal"
    yarn="yarn dlx velyx add card input modal"
    bun="bunx --bun velyx add card input modal"
/>

<x-code-tabs
    npm="npx velyx add --all"
    pnpm="pnpm dlx velyx add --all"
    yarn="yarn dlx velyx add --all"
    bun="bunx --bun velyx add --all"
/>

Components are copied directly into your project under `resources/views/components/`, so you can customize them however you want.

## Searching Components

Search for specific components:

<x-code-tabs
    npm="npx velyx list --query button"
    pnpm="pnpm dlx velyx list --query button"
    yarn="yarn dlx velyx list --query button"
    bun="bunx --bun velyx list --query button"
/>

Or list all available components:

<x-code-tabs
    npm="npx velyx list"
    pnpm="pnpm dlx velyx list"
    yarn="yarn dlx velyx list"
    bun="bunx --bun velyx list"
/>

## Next Steps

- Learn about [theming](/docs/theming)
- Explore [design tokens](/docs/design/colors)
- Check out the [CLI reference](/docs/cli-reference)
