---
title: Modal
description: Modal dialog component for focused interactions
extends: _layouts.documentation
section: content
---

# Modal

Modals are dialog overlays that focus the user's attention on a specific task or piece of information.

## Installation

Add the modal component to your project:

```bash
npx velyx add modal
```

<x-callout type="info">
<strong>Alpine.js Required:</strong> The modal component requires Alpine.js for interactivity. Make sure Alpine.js is installed in your project.
</x-callout>

## Usage

### Basic Modal

```blade
<div x-data="{ open: false }">
    <x-button @click="open = true">Open Modal</x-button>

    <x-modal x-model="open">
        <h2 class="text-lg font-bold">Modal Title</h2>
        <p class="text-muted-foreground">Modal content goes here.</p>

        <div class="flex gap-2 mt-4">
            <x-button @click="open = false">Close</x-button>
        </div>
    </x-modal>
</div>
```

### Modal with Header and Footer

```blade
<div x-data="{ open: false }">
    <x-button @click="open = true">Open Modal</x-button>

    <x-modal x-model="open">
        <x-slot:header>
            <h2 class="text-lg font-semibold">Confirm Action</h2>
            <p class="text-sm text-muted-foreground">This action cannot be undone.</p>
        </x-slot:header>

        <p>Are you sure you want to delete this item?</p>

        <x-slot:footer>
            <x-button variant="outline" @click="open = false">Cancel</x-button>
            <x-button variant="destructive" @click="open = false">Delete</x-button>
        </x-slot:footer>
    </x-modal>
</div>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `x-model` | `string` | - | Alpine.js model for open/close state |

## Slots

| Slot | Description |
|------|-------------|
| `header` | Modal header section |
| `footer` | Modal footer section |
| (default) | Main modal content |

## Examples

### Confirmation Modal

```blade
<div x-data="{ open: false }">
    <x-button variant="destructive" @click="open = true">
        <x-icon name="trash" class="mr-2" />
        Delete Account
    </x-button>

    <x-modal x-model="open">
        <x-slot:header>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                    <x-icon name="alert-triangle" class="w-5 h-5 text-red-600" />
                </div>
                <div>
                    <h2 class="text-lg font-semibold">Delete Account</h2>
                    <p class="text-sm text-muted-foreground">This action cannot be undone.</p>
                </div>
            </div>
        </x-slot:header>

        <div class="space-y-4">
            <p>
                Are you sure you want to delete your account? All of your data will be permanently removed.
            </p>

            <label class="flex items-center gap-2 text-sm">
                <input type="checkbox" class="rounded">
                <span>I understand this action cannot be undone</span>
            </label>
        </div>

        <x-slot:footer>
            <x-button variant="outline" @click="open = false">Cancel</x-button>
            <x-button variant="destructive" @click="open = false">
                Delete Account
            </x-button>
        </x-slot:footer>
    </x-modal>
</div>
```

### Form Modal

```blade
<div x-data="{ open: false }">
    <x-button @click="open = false">Add User</x-button>

    <x-modal x-model="open">
        <x-slot:header>
            <h2 class="text-lg font-semibold">Add New User</h2>
            <p class="text-sm text-muted-foreground">Fill in the user details below.</p>
        </x-slot:header>

        <form method="POST" action="{{ route('users.store') }}" class="space-y-4">
            @csrf

            <div>
                <x-label for="name">Name</x-label>
                <x-input id="name" name="name" required />
            </div>

            <div>
                <x-label for="email">Email</x-label>
                <x-input id="email" type="email" name="email" required />
            </div>

            <div>
                <x-label for="role">Role</x-label>
                <select id="role" name="role" class="w-full rounded-md border border-input bg-background px-3 py-2">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <x-slot:footer>
                <x-button type="button" variant="outline" @click="open = false">Cancel</x-button>
                <x-button type="submit">Create User</x-button>
            </x-slot:footer>
        </form>
    </x-modal>
</div>
```

### Image Preview Modal

```blade
<div x-data="{ open: false, image: null }">
    <button @click="open = true; image = '{{ $image->url }}'" class="block">
        <img src="{{ $image->thumbnail }}" alt="Thumbnail">
    </button>

    <x-modal x-model="open">
        <div class="flex items-center justify-center min-h-[400px]">
            <img :src="image" alt="Full size image" class="max-w-full max-h-[70vh] rounded-lg">
        </div>
    </x-modal>
</div>
```

### Nested Modals

```blade
<div x-data="{ open: false, confirmOpen: false }">
    <x-button @click="open = true">Open Modal</x-button>

    <x-modal x-model="open">
        <h2 class="text-lg font-semibold">First Modal</h2>
        <p class="text-muted-foreground">This is the first modal.</p>

        <x-button @click="confirmOpen = true" class="mt-4">
            Open Second Modal
        </x-button>
    </x-modal>

    <x-modal x-model="confirmOpen">
        <h2 class="text-lg font-semibold">Second Modal</h2>
        <p class="text-muted-foreground">This is a nested modal.</p>
    </x-modal>
</div>
```

## Customization

### Size Variants

```blade
<!-- Small modal -->
<x-modal x-model="open" class="max-w-sm">
    <!-- Content -->
</x-modal>

<!-- Large modal -->
<x-modal x-model="open" class="max-w-2xl">
    <!-- Content -->
</x-modal>

<!-- Full screen modal -->
<x-modal x-model="open" class="max-w-full mx-4">
    <!-- Content -->
</x-modal>
```

### Custom Styling

```blade
<x-modal x-model="open" class="!p-0">
    <!-- Custom padding -->
</x-modal>
```

## Accessibility

Modals include:

- **Focus trap** - Tab cycles within modal
- **Escape key** - Closes modal
- **Click outside** - Closes modal
- **ARIA attributes** - Proper screen reader support

## Keyboard Interactions

| Key | Action |
|-----|--------|
| `Escape` | Close modal |
| `Tab` | Move focus within modal |
| `Shift + Tab` | Move focus backwards |

## Next Steps

- Explore [Button component](/docs/components/button)
- Learn about [Card component](/docs/components/card)
- View [Input component](/docs/components/input)
