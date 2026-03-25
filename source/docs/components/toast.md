---
title: Toast
description: Toast component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/toast.png
metaTitle: Toast Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Toast

The Toast component displays temporary notification messages that appear and disappear automatically. Perfect for alerts, confirmations, and status updates.

## Installation

Add the toast component to your project:

<x-code-tabs
    npm="npx velyx@latest add toast"
    pnpm="pnpm dlx velyx@latest add toast"
    yarn="yarn dlx velyx@latest add toast"
    bun="bunx --bun velyx@latest add toast"
/>

## Usage

### Toast Notifications

<x-component-preview component="toast">
    <x-ui.toast position="bottom-right" :duration="3500" :max-toasts="4" />

    <div class="flex flex-wrap gap-2">
        <x-ui.button @click="$dispatch('toast', { type: 'success', title: 'Saved', message: 'Your changes were saved.' })">Success</x-ui.button>
        <x-ui.button variant="outline" @click="$dispatch('toast', { type: 'info', title: 'Heads up', message: 'A new update is available.' })">Info</x-ui.button>
        <x-ui.button variant="outline" @click="$dispatch('toast', { type: 'warning', title: 'Careful', message: 'Storage is almost full.' })">Warning</x-ui.button>
        <x-ui.button variant="destructive" @click="$dispatch('toast', { type: 'error', title: 'Failed', message: 'Unable to complete this action.' })">Error</x-ui.button>
    </div>

</x-component-preview>

## Props

| Prop        | Type     | Default          | Description                                                                                               |
| ----------- | -------- | ---------------- | --------------------------------------------------------------------------------------------------------- |
| `position`  | `string` | `'bottom-right'` | Position on screen: `top-left`, `top-right`, `bottom-left`, `bottom-right`, `top-center`, `bottom-center` |
| `duration`  | `number` | `3000`           | Auto-dismiss duration in milliseconds                                                                     |
| `maxToasts` | `number` | `3`              | Maximum number of toasts to display at once                                                               |

## Toast Event

Dispatch a `toast` event with the following properties:

| Property  | Type     | Default  | Description                                       |
| --------- | -------- | -------- | ------------------------------------------------- |
| `type`    | `string` | `'info'` | Toast type: `success`, `info`, `warning`, `error` |
| `title`   | `string` | `null`   | Heading text for the toast                        |
| `message` | `string` | `null`   | Body text for the toast                           |

## Examples

### Basic Toast

```php
<x-ui.toast />

<button x-data @click="$dispatch('toast', {
    type: 'success',
    title: 'Success',
    message: 'Operation completed successfully.'
})">
    Show Toast
</button>
```

### Different Types

```php
<x-ui.toast />

<div class="flex gap-2">
    <button @click="$dispatch('toast', {
        type: 'success',
        title: 'Saved',
        message: 'Your changes were saved.'
    })">
        Success
    </button>

    <button @click="$dispatch('toast', {
        type: 'info',
        title: 'Information',
        message: 'Here is some information.'
    })">
        Info
    </button>

    <button @click="$dispatch('toast', {
        type: 'warning',
        title: 'Warning',
        message: 'Please review this warning.'
    })">
        Warning
    </button>

    <button @click="$dispatch('toast', {
        type: 'error',
        title: 'Error',
        message: 'Something went wrong.'
    })">
        Error
    </button>
</div>
```

### Different Positions

```php
<!-- Top Right -->
<x-ui.toast position="top-right" />

<!-- Top Left -->
<x-ui.toast position="top-left" />

<!-- Bottom Right -->
<x-ui.toast position="bottom-right" />

<!-- Bottom Left -->
<x-ui.toast position="bottom-left" />

<!-- Top Center -->
<x-ui.toast position="top-center" />

<!-- Bottom Center -->
<x-ui.toast position="bottom-center" />
```

### Custom Duration

```php
<!-- Short duration (2 seconds) -->
<x-ui.toast :duration="2000" />

<!-- Long duration (10 seconds) -->
<x-ui.toast :duration="10000" />

<!-- No auto-dismiss (0 = manual close only) -->
<x-ui.toast :duration="0" />
```

### Limit Concurrent Toasts

```php
<!-- Show maximum 5 toasts at once -->
<x-ui.toast :max-toasts="5" />

<!-- Show only 1 toast at a time -->
<x-ui.toast :max-toasts="1" />
```

### Livewire Integration

```php
<!-- In your Blade template -->
<x-ui.toast />

<div>
    <button
        wire:click="save"
        type="button"
    >
        Save Changes
    </button>
</div>

<!-- In your Livewire component -->
public function save()
{
    // Your save logic here

    $this->dispatch('toast', [
        'type' => 'success',
        'title' => 'Saved',
        'message' => 'Your changes were saved successfully.',
    ]);
}
```

### Form Submission Feedback

```php
<x-ui.toast />

<form wire:submit="submit">
    <!-- Form fields -->

    <button type="submit">Submit</button>
</form>

<!-- In your Livewire component -->
public function submit()
{
    $validated = $this->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
    ]);

    // Process form...

    $this->dispatch('toast', [
        'type' => 'success',
        'title' => 'Form Submitted',
        'message' => 'Your form has been submitted successfully.',
    ]);
}
```

### Delete Confirmation

```php
<x-ui.toast />

<table>
    <tr>
        <td>User Name</td>
        <td>
            <button
                wire:click="delete({{ $user->id }})"
                wire:confirm="Are you sure?"
                class="text-destructive"
            >
                Delete
            </button>
        </td>
    </tr>
</table>

<!-- In your Livewire component -->
public function delete($userId)
{
    User::find($userId)->delete();

    $this->dispatch('toast', [
        'type' => 'success',
        'title' => 'Deleted',
        'message' => 'User has been deleted.',
    ]);
}
```

### Multiple Toasts

```php
<x-ui.toast :max-toasts="5" />

<div class="flex gap-2">
    <button @click="
        $dispatch('toast', { type: 'success', title: 'First', message: 'First toast' })
        $dispatch('toast', { type: 'info', title: 'Second', message: 'Second toast' })
        $dispatch('toast', { type: 'warning', title: 'Third', message: 'Third toast' })
    ">
        Show Multiple
    </button>
</div>
```

### Auto-Hide After Action

```php
<x-ui.toast :duration="5000" />

<div x-data="{
    copyToClipboard(text) {
        navigator.clipboard.writeText(text);
        $dispatch('toast', {
            type: 'success',
            title: 'Copied',
            message: 'Text copied to clipboard!'
        });
    }
}">
    <button @click="copyToClipboard('Hello, World!')">
        Copy Text
    </button>
</div>
```

### API Response Feedback

```php
<x-ui.toast />

<div x-data="{
    async fetchData() {
        try {
            const response = await fetch('/api/data');
            const data = await response.json();

            $dispatch('toast', {
                type: 'success',
                title: 'Success',
                message: 'Data loaded successfully.',
            });
        } catch (error) {
            $dispatch('toast', {
                type: 'error',
                title: 'Error',
                message: 'Failed to load data.',
            });
        }
    }
}">
    <button @click="fetchData()">Load Data</button>
</div>
```

### Validation Errors

```php
<x-ui.toast />

<!-- In your Livewire component -->
public function update()
{
    try {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
        ]);

        // Update logic...

    } catch (\Illuminate\Validation\ValidationException $e) {
        $this->dispatch('toast', [
            'type' => 'error',
            'title' => 'Validation Error',
            'message' => 'Please check your input and try again.',
        ]);

        throw $e;
    }
}
```

## Common Use Cases

### Success Messages

```php
$this->dispatch('toast', [
    'type' => 'success',
    'title' => 'Success',
    'message' => 'Your changes have been saved.',
]);
```

### Error Alerts

```php
$this->dispatch('toast', [
    'type' => 'error',
    'title' => 'Error',
    'message' => 'Something went wrong. Please try again.',
]);
```

### Informational

```php
$this->dispatch('toast', [
    'type' => 'info',
    'title' => 'New Feature',
    'message' => 'Check out our latest feature!',
]);
```

### Warning Messages

```php
$this->dispatch('toast', [
    'type' => 'warning',
    'title' => 'Storage Full',
    'message' => 'Your storage is almost full. Upgrade now.',
]);
```

## Styling

The Toast component uses Tailwind CSS utility classes:

- **Container**: Fixed position with z-index for stacking
- **Animations**: Slide-in and fade-out transitions
- **Colors**: Variant-specific colors for different types
- **Shadows**: Elevated appearance for visibility
- **Spacing**: Proper padding and margins

### Type Colors

- **success**: Green with checkmark icon
- **info**: Blue with info icon
- **warning**: Amber/orange with warning icon
- **error**: Red with error icon

### Positioning

Positions determine where toasts appear on screen:

- Top positions: Appear below top edge
- Bottom positions: Appear above bottom edge
- Left/Right: Aligned to respective edges
- Center: Horizontally centered

## Accessibility

The Toast component includes accessibility features:

- **ARIA live regions**: Screen readers announce toast messages
- **Role attributes**: Proper ARIA roles for notifications
- **Focus management**: Does not steal focus
- **Auto-dismiss**: Limits screen reader interruption
- **Clear messaging**: Descriptive titles and messages

### Best Practices

- Keep messages short and clear
- Use appropriate types for different situations
- Don't overwhelm users with too many toasts
- Provide clear action indicators
- Consider disabling actions during toast display
- Use success toasts for confirmation
- Use error toasts for failure feedback

## Notes

- The component requires Alpine.js for interactivity
- Toasts are automatically dismissed after duration
- Users can manually close toasts by clicking
- Maximum toasts limit prevents overwhelming users
- Multiple toasts stack vertically
- Livewire integration works seamlessly
- Events are dispatched on the window/document

## Next Steps

- Explore [Alert component](/docs/components/alert)
- Learn about [Dialog component](/docs/components/dialog)
- View [Drawer component](/docs/components/drawer)
