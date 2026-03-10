---
title: Progress Bar
description: Visual indicator for task completion progress
extends: _layouts.documentation
section: content
---

# Progress Bar

The Progress Bar component provides a visual indicator for tracking the completion status of tasks, uploads, or any progress-based operation.

## Installation

Add the progress bar component to your project:

<x-code-tabs
    npm="npx velyx add progress-bar"
    pnpm="pnpm dlx velyx add progress-bar"
    yarn="yarn dlx velyx add progress-bar"
    bun="bunx --bun velyx add progress-bar"
/>

## Usage

### Default Progress Bar

<x-component-preview component="progress-bar">
    <div class="mx-auto grid w-full max-w-xl gap-5">
        <x-ui.progress-bar label="Setup progress" :percentage="25" variant="primary" />
        <x-ui.progress-bar label="Upload status" :percentage="62" variant="info" />
        <x-ui.progress-bar label="Deployment" :percentage="88" variant="success" size="lg" />
    </div>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `label` | `string` | `null` | Text label describing the progress |
| `percentage` | `number` | `0` | Progress value between 0 and 100 |
| `variant` | `string` | `'primary'` | Color style: `primary`, `info`, `success`, `warning`, `destructive` |
| `size` | `string` | `'md'` | Size of the progress bar: `sm`, `md`, or `lg` |

## Examples

### Basic Progress

```php
<x-ui.progress-bar :percentage="45" />
```

### With Label

```php
<x-ui.progress-bar
    label="Upload progress"
    :percentage="67"
/>
```

### Different Variants

```php
<x-ui.progress-bar
    label="Primary"
    :percentage="75"
    variant="primary"
/>

<x-ui.progress-bar
    label="Info"
    :percentage="50"
    variant="info"
/>

<x-ui.progress-bar
    label="Success"
    :percentage="100"
    variant="success"
/>

<x-ui.progress-bar
    label="Warning"
    :percentage="30"
    variant="warning"
/>

<x-ui.progress-bar
    label="Error"
    :percentage="15"
    variant="destructive"
/>
```

### Different Sizes

```php
<x-ui.progress-bar
    label="Small"
    :percentage="40"
    size="sm"
/>

<x-ui.progress-bar
    label="Medium"
    :percentage="60"
    size="md"
/>

<x-ui.progress-bar
    label="Large"
    :percentage="80"
    size="lg"
/>
```

### With Dynamic Progress (Livewire)

```php
<div class="space-y-4">
    <x-ui.progress-bar
        label="Processing files"
        :percentage="$progress"
        variant="primary"
        size="lg"
    />

    <p class="text-sm text-muted-foreground">
        {{ $progress }}% complete
    </p>
</div>
```

### Upload Progress

```php
<x-ui.progress-bar
    label="Uploading file..."
    :percentage="$uploadProgress"
    variant="info"
/>
```

### Multi-Step Progress

```php
<div class="space-y-4">
    <x-ui.progress-bar
        label="Step 1: Uploading"
        :percentage="$step1Progress"
        variant="primary"
    />

    <x-ui.progress-bar
        label="Step 2: Processing"
        :percentage="$step2Progress"
        variant="info"
    />

    <x-ui.progress-bar
        label="Step 3: Downloading"
        :percentage="$step3Progress"
        variant="success"
    />
</div>
```

### Task Completion

```php
<div class="space-y-4">
    <h3 class="text-lg font-semibold">Task Progress</h3>

    <x-ui.progress-bar
        label="Database migration"
        :percentage="$migrationProgress"
        variant="primary"
    />

    <x-ui.progress-bar
        label="Cache warming"
        :percentage="$cacheProgress"
        variant="info"
    />

    <x-ui.progress-bar
        label="Asset optimization"
        :percentage="$assetProgress"
        variant="warning"
    />
</div>
```

### Animated Progress

```php
<div x-data="{ progress: 0 }" x-init="progress = $refs.bar.offsetWidth">
    <x-ui.progress-bar
        label="Loading..."
        :percentage="progress"
        variant="primary"
        x-ref="bar"
        x-on:load="setInterval(() => { if (progress < 100) progress += 1 }, 100)"
    />
</div>
```

## Common Use Cases

### File Upload
```php
<x-ui.progress-bar
    label="Uploading documents.pdf"
    :percentage="$uploadPercent"
    variant="primary"
/>
```

### Form Completion
```php
<x-ui.progress-bar
    label="Profile completion"
    :percentage="$profileComplete"
    variant="success"
/>
```

### Download Status
```php
<x-ui.progress-bar
    label="Downloading update"
    :percentage="$downloadProgress"
    variant="info"
/>
```

### Storage Usage
```php
<x-ui.progress-bar
    label="Storage used: 7.5 GB / 10 GB"
    :percentage="75"
    variant="warning"
/>
```

## Styling

The Progress Bar component uses Tailwind CSS utility classes:

- **Container**: Full-width with rounded corners
- **Track**: Background with muted color
- **Fill**: Animated fill with variant-specific color
- **Label**: Text label above the progress bar
- **Percentage**: Optional percentage display

### Size Variants

| Size | Height | Text Size |
|------|--------|-----------|
| `sm` | `h-1` | `text-xs` |
| `md` | `h-2` | `text-sm` |
| `lg` | `h-3` | `text-base` |

### Variant Colors

- **primary**: Brand primary color
- **info**: Blue/neutral info color
- **success**: Green success color
- **warning**: Amber/orange warning color
- **destructive**: Red error color

## Accessibility

The Progress Bar component includes accessibility features:

- **Semantic HTML**: Uses proper ARIA roles
- **Label association**: Progress is properly labeled
- **Percentage announcement**: Screen readers can announce progress
- **Visual feedback**: Clear visual indication of progress

### Best Practices

- Always provide a descriptive label for context
- Use appropriate variants for different states (success for completion, warning for issues)
- Consider showing exact percentages for precise feedback
- Ensure adequate color contrast for all variants
- Use progress bars for operations that take more than a few seconds

## Notes

- Progress values are automatically clamped between 0 and 100
- The fill bar includes a smooth transition animation
- Labels are optional but recommended for accessibility
- Large sizes are useful for prominent progress indicators
- Consider using different variants to convey status

## Next Steps

- Explore [Rating component](/docs/components/rating)
- Learn about [Stat Card component](/docs/components/stat-card)
- View [Progress Steps component](/docs/components/progress-steps)
