---
title: Empty State
description: Placeholder for empty lists and no results
extends: _layouts.documentation
section: content
---

# Empty State

The Empty State component displays a placeholder when there's no data to show. It's useful for empty lists, no results, or initial states in your application.

## Installation

Add the empty state component to your project:

<x-code-tabs
    npm="npx velyx add empty-state"
    pnpm="pnpm dlx velyx add empty-state"
    yarn="yarn dlx velyx add empty-state"
    bun="bunx --bun velyx add empty-state"
/>

## Usage

### Default Empty State

<x-component-preview component="empty-state">
    <div class="rounded-lg border border-border p-4">
        <x-ui.empty-state
            title="No projects yet"
            description="Create your first project to start collaborating with your team."
            icon="folder-open"
        />
    </div>
</x-component-preview>

### With Action Button

<x-component-preview component="empty-state">
    <div class="rounded-lg border border-border p-4">
        <x-ui.empty-state
            title="No projects yet"
            description="Create your first project to start collaborating with your team."
            icon="folder-open"
            action-label="Create project"
            action-url="#"
        />
    </div>
</x-component-preview>

### Ghost Variant

<x-component-preview component="empty-state">
    <div class="rounded-lg border border-border p-4">
        <x-ui.empty-state
            title="No notifications"
            description="You are all caught up for now."
            icon="bell-off"
            variant="ghost"
            size="sm"
        />
    </div>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | `string` | required | The main heading text to display |
| `description` | `string` | `null` | Additional text explaining the empty state |
| `icon` | `string` | `null` | HugeIcons icon name to display (e.g., `folder-open`, `bell-off`) |
| `variant` | `string` | `'default'` | Visual style: `default`, `ghost`, or `outline` |
| `size` | `string` | `'md'` | Size of the content: `sm`, `md`, or `lg` |
| `actionLabel` | `string` | `null` | Text for the action button |
| `actionUrl` | `string` | `null` | URL for the action button link |

## Examples

### Basic Empty State

```blade
<x-ui.empty-state
    title="No results found"
    description="Try adjusting your search terms."
    icon="search"
/>
```

### With Action Button

```blade
<x-ui.empty-state
    title="No projects yet"
    description="Get started by creating your first project."
    icon="folder-open"
    action-label="New Project"
    action-url="/projects/create"
/>
```

### Without Icon

```blade
<x-ui.empty-state
    title="All caught up"
    description="You have no pending tasks."
/>
```

### With Custom Icon

```blade
<x-ui.empty-state
    title="No files uploaded"
    description="Upload files to see them here."
    icon="upload-cloud"
/>
```

### Small Size

```blade
<x-ui.empty-state
    title="No data"
    size="sm"
/>
```

### Large Size

```blade
<x-ui.empty-state
    title="No results"
    size="lg"
    description="Try adjusting your filters."
/>
```

### Outline Variant

```blade
<x-ui.empty-state
    title="Empty list"
    description="This list is currently empty."
    variant="outline"
/>
```

### Ghost Variant (Minimal)

```blade
<x-ui.empty-state
    title="No notifications"
    description="You're all caught up!"
    variant="ghost"
    size="sm"
/>
```

### In a Card

```blade
<div class="rounded-lg border bg-card p-6">
    <h2 class="text-lg font-semibold mb-4">Projects</h2>

    <div class="rounded-lg border border-border p-8">
        <x-ui.empty-state
            title="No projects yet"
            description="Create your first project to get started."
            icon="folder-open"
            action-label="Create Project"
            action-url="/projects/create"
        />
    </div>
</div>
```

### With Conditional Content

```blade
@if ($projects->count() === 0)
    <div class="rounded-lg border border-border p-8">
        <x-ui.empty-state
            title="No projects yet"
            description="Create your first project to get started."
            icon="folder-open"
            action-label="Create Project"
            action-url="/projects/create"
        />
    </div>
@else
    <div class="space-y-2">
        @foreach ($projects as $project)
            <!-- project items -->
        @endforeach
    </div>
@endif
```

### After Search

```blade
<div class="rounded-lg border border-border p-6">
    <h2 class="text-lg font-semibold mb-4">Search Results</h2>

    @if ($results->count() > 0)
        <!-- results list -->
    @else
        <x-ui.empty-state
            title="No results found"
            description="No results match your search for '{{ $query }}'."
            icon="search"
        />
    @endif
</div>
```

### With Custom Styling

```blade
<div class="my-12 rounded-xl bg-muted/30 border border-dashed p-12">
    <x-ui.empty-state
        title="No data available"
        description="Select a date range to view data."
        icon="calendar"
        size="lg"
    />
</div>
```

### With Description Only

```blade
<x-ui.empty-state
    title="All done!"
    description="You've completed all your tasks for today."
    icon="check-circle"
    variant="ghost"
/>
```

## Common Use Cases

### Empty Project List
```blade
<x-ui.empty-state
    title="No projects"
    description="Create your first project to get started."
    icon="folder-open"
    action-label="New Project"
    action-url="/projects/new"
/>
```

### No Search Results
```blade
<x-ui.empty-state
    title="No results found"
    description="We couldn't find anything matching '{{ $query }}'."
    icon="search"
/>
```

### No Notifications
```blade
<x-ui.empty-state
    title="No notifications"
    description="You're all caught up!"
    icon="bell-off"
    variant="ghost"
    size="sm"
/>
```

### Empty Folder
```blade
<x-ui.empty-state
    title="This folder is empty"
    description="Upload files to see them here."
    icon="folder-open"
    action-label="Upload Files"
    action-url="/upload"
/>
```

### No Favorites
```blade
<x-ui.empty-state
    title="No favorites yet"
    description="Save items to your favorites to access them quickly."
    icon="heart"
    variant="outline"
/>
```

## Icon Suggestions

Popular HugeIcons for empty states:

| Icon | Use Case |
|------|----------|
| `search` | No search results |
| `folder-open` | Empty folder/list |
| `bell-off` | No notifications |
| `inbox` | Empty inbox |
| `calendar` | No events scheduled |
| `users` | No team members |
| `shopping-bag-02` | Empty cart |
| `document` | No documents |
| `clipboard` | Empty clipboard |
| `check-circle` | Task completed |
| `upload-cloud` | Upload area |

## Styling

The Empty State component uses Tailwind CSS utility classes:

- **Container**: Flexbox with centered content
- **Icon**: Large icon with muted color
- **Title**: Medium font weight for heading
- **Description**: Smaller text with muted color
- **Button**: Primary button for action (if provided)

### Size Variants

| Size | Icon Size | Text Size |
|------|-----------|-----------|
| `sm` | `h-12 w-12` | `text-sm` |
| `md` | `h-16 w-16` | `text-base` |
| `lg` | `h-20 w-20` | `text-lg` |

### Variant Styles

- **default**: Standard styling with icon and text
- **ghost`: Minimal styling, muted colors
- **outline**: Bordered variant for more emphasis

## Accessibility

The Empty State component includes accessibility features:

- **Semantic heading**: Proper heading hierarchy for screen readers
- **Descriptive text**: Clear explanation of the empty state
- **Action links**: Clear call-to-action when available
- **Icon support**: Visual icons enhance understanding
- **ARIA attributes**: Proper labeling for assistive technologies

## Notes

- The component is designed to be self-contained and informative
- Icons are rendered using the HugeIcons component system
- Action buttons use the primary button styling by default
- The ghost variant is great for less prominent empty states
- Consider adding helpful actions or guidance when appropriate
- Use descriptive titles and descriptions to guide users

## Next Steps

- Explore [Card component](/docs/components/card)
- Learn about [Button component](/docs/components/button)
- View [File Upload component](/docs/components/file-upload)
