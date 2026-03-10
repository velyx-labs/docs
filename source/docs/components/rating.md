---
title: Rating
description: Interactive star rating component
extends: _layouts.documentation
section: content
---

# Rating

The Rating component provides an interactive star rating system for collecting user feedback or displaying ratings.

## Installation

Add the rating component to your project:

<x-code-tabs
    npm="npx velyx add rating"
    pnpm="pnpm dlx velyx add rating"
    yarn="yarn dlx velyx add rating"
    bun="bunx --bun velyx add rating"
/>

## Usage

### Interactive Rating

<x-component-preview component="rating">
    <div class="mx-auto grid w-full max-w-xl gap-6">
        <div class="rounded-lg border border-border p-4">
            <p class="mb-3 text-sm text-muted-foreground">Interactive</p>
            <x-ui.rating show-value="true" />
        </div>

        <div class="rounded-lg border border-border p-4">
            <p class="mb-3 text-sm text-muted-foreground">Readonly</p>
            <x-ui.rating :readonly="true" :show-value="true" variant="primary" x-data="{}" />
        </div>
    </div>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `rating` | `number` | `0` | Initial rating value (0-5) |
| `maxRating` | `number` | `5` | Maximum possible rating |
| `readonly` | `boolean` | `false` | Whether the rating is editable |
| `showValue` | `boolean` | `false` | Whether to display the numeric value |
| `variant` | `string` | `'default'` | Color style: `default`, `primary`, `warning`, `success` |
| `size` | `string` | `'md'` | Size of the stars: `sm`, `md`, or `lg` |

## Examples

### Basic Rating

```php
<x-ui.rating />
```

### With Initial Value

```php
<x-ui.rating :rating="4" />
```

### Readonly Display

```php
<x-ui.rating
    :rating="5"
    :readonly="true"
    :show-value="true"
/>
```

### Different Variants

```php
<x-ui.rating
    :rating="4"
    variant="primary"
    :show-value="true"
/>

<x-ui.rating
    :rating="3"
    variant="warning"
    :show-value="true"
/>

<x-ui.rating
    :rating="5"
    variant="success"
    :show-value="true"
/>
```

### Different Sizes

```php
<x-ui.rating
    :rating="4"
    size="sm"
    :show-value="true"
/>

<x-ui.rating
    :rating="4"
    size="md"
    :show-value="true"
/>

<x-ui.rating
    :rating="4"
    size="lg"
    :show-value="true"
/>
```

### Custom Max Rating

```php
<x-ui.rating
    :rating="7"
    :max-rating="10"
    :show-value="true"
/>
```

### Livewire Integration

```php
<div class="space-y-4">
    <x-ui.rating
        :rating="$rating"
        wire:model.live="rating"
        :show-value="true"
        variant="primary"
    />

    <p class="text-sm text-muted-foreground">
        You rated this {{ $rating }}/5 stars
    </p>
</div>
```

### With Label

```php
<div class="space-y-2">
    <x-ui.label>Rate your experience</x-ui.label>
    <x-ui.rating
        :rating="$rating"
        wire:model="rating"
        :show-value="true"
        variant="primary"
    />
</div>
```

### Product Rating

```php
<div class="flex items-center gap-4">
    <div>
        <h3 class="text-lg font-semibold">Product Name</h3>
        <div class="flex items-center gap-2">
            <x-ui.rating
                :rating="4"
                :readonly="true"
                variant="warning"
                size="sm"
            />
            <span class="text-sm text-muted-foreground">(4.0)</span>
        </div>
    </div>
</div>
```

### Review Form

```php
<form>
    <div class="space-y-4">
        <div>
            <x-ui.label for="review">Your Review</x-ui.label>
            <x-ui.rating
                id="review"
                :rating="$rating"
                wire:model="rating"
                :show-value="true"
                variant="primary"
            />
        </div>

        <div>
            <x-ui.label for="comment">Comment</x-ui.label>
            <textarea
                id="comment"
                wire:model="comment"
                class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm"
                rows="3"
            ></textarea>
        </div>

        <button type="submit" class="x-ui.button">
            Submit Review
        </button>
    </div>
</form>
```

### Average Rating Display

```php
<div class="rounded-lg border border-border p-4">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-3xl font-bold">4.5</p>
            <p class="text-sm text-muted-foreground">out of 5</p>
        </div>

        <div class="space-y-1">
            <x-ui.rating
                :rating="4.5"
                :readonly="true"
                variant="warning"
                size="lg"
            />
            <p class="text-sm text-muted-foreground">Based on 128 reviews</p>
        </div>
    </div>
</div>
```

### Rating Breakdown

```php
<div class="space-y-3">
    @for($i = 5; $i >= 1; $i--)
        <div class="flex items-center gap-3">
            <span class="text-sm w-3">{{ $i }}</span>
            <x-ui.rating
                :rating="$i"
                :readonly="true"
                variant="warning"
                size="sm"
            />
            <div class="flex-1 h-2 bg-muted rounded-full overflow-hidden">
                <div
                    class="h-full bg-primary"
                    style="width: {{ $breakdown[$i] }}%"
                ></div>
            </div>
            <span class="text-sm text-muted-foreground w-8">
                {{ $breakdown[$i] }}%
            </span>
        </div>
    @endfor
</div>
```

## Common Use Cases

### Product Rating
```php
<x-ui.rating
    :rating="$product->rating"
    :readonly="true"
    variant="warning"
    size="sm"
/>
```

### Service Feedback
```php
<x-ui.label>Rate our service</x-ui.label>
<x-ui.rating
    :rating="$rating"
    wire:model="rating"
    :show-value="true"
    variant="primary"
/>
```

### Content Quality
```php
<x-ui.rating
    :rating="4"
    :readonly="true"
    :show-value="true"
    :max-rating="10"
    variant="success"
/>
```

### Skill Assessment
```php
<div class="space-y-3">
    <div>
        <p class="text-sm font-medium">Laravel</p>
        <x-ui.rating :rating="5" :readonly="true" variant="primary" size="sm" />
    </div>
    <div>
        <p class="text-sm font-medium">JavaScript</p>
        <x-ui.rating :rating="4" :readonly="true" variant="primary" size="sm" />
    </div>
    <div>
        <p class="text-sm font-medium">Python</p>
        <x-ui.rating :rating="3" :readonly="true" variant="primary" size="sm" />
    </div>
</div>
```

## Styling

The Rating component uses Tailwind CSS utility classes:

- **Stars**: SVG icons with proper spacing
- **Interactive**: Hover effects and click handling
- **Colors**: Variant-specific colors for active/inactive states
- **Sizes**: Different sizes for different contexts

### Size Variants

| Size | Star Size | Spacing |
|------|-----------|---------|
| `sm` | `h-4 w-4` | `gap-0.5` |
| `md` | `h-5 w-5` | `gap-1` |
| `lg` | `h-6 w-6` | `gap-1.5` |

### Variant Colors

- **default**: Gray/muted for inactive, yellow for active
- **primary**: Brand primary color
- **warning**: Amber/orange for traditional rating look
- **success**: Green for positive feedback

## Accessibility

The Rating component includes accessibility features:

- **Keyboard navigation**: Navigate and select with arrow keys
- **Screen reader support**: Proper ARIA labels and roles
- **Focus indicators**: Clear focus states for keyboard users
- **Semantic HTML**: Proper form input association

### Best Practices

- Always provide a label when collecting ratings
- Use readonly mode for displaying existing ratings
- Consider showing the numeric value for clarity
- Provide feedback confirmation after rating submission
- Use appropriate sizes for different contexts

## Notes

- The component uses Alpine.js for interactivity
- Ratings are stored as integers or decimals
- Half-star ratings are supported
- The component emits events on rating change
- Consider Livewire integration for persistent ratings

## Next Steps

- Explore [Toast component](/docs/components/toast)
- Learn about [Button component](/docs/components/button)
- View [Label component](/docs/components/label)
