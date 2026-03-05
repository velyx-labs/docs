# Component Preview System

The documentation now includes live component previews powered by the registry application.

## Setup

### 1. Configure Registry URL

Create a `.env` file in the docs directory (or add to your existing `.env`):

```bash
PREVIEW_REGISTRY_URL=http://localhost:8000
```

For production:
```bash
PREVIEW_REGISTRY_URL=https://registry.yourdomain.com
```

### 2. Start the Registry

Make sure your registry application is running:

```bash
cd ../registry
php artisan serve
```

The registry will be available at `http://localhost:8000`

### 3. Build and Serve Docs

```bash
# Build assets
pnpm run build

# Start Jigsaw dev server
composer run dev
```

## Usage in Documentation

Use the `<x-component-preview>` component in your markdown files:

```blade
<x-component-preview 
    component="button" 
    variant="primary"
    height="400px"
    :props="['size' => 'lg']"
    interactive="false"
>
    ```blade
    <x-button variant="primary" size="lg">Click me</x-button>
    ```
</x-component-preview>
```

### Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `component` | `string` | required | Component name (kebab-case) |
| `variant` | `string` | `default` | Preview variant from preview.json |
| `height` | `string` | `auto` | Iframe height (sm, md, lg, xl, full, or custom px) |
| `props` | `array` | `[]` | Additional props to pass to component |
| `interactive` | `boolean` | `false` | Use interactive preview template |
| `controls` | `boolean` | `true` | Show preview controls badge |

### Interactive Components

For interactive components like modals and drawers, set `interactive="true"`:

```blade
<x-component-preview component="modal" interactive="true">
    ```blade
    <x-modal id="my-modal" title="Example">
        Content here
    </x-modal>
    ```
</x-component-preview>
```

## Available Preview Variants

Each component has predefined variants in its `preview.json` file:

- **button**: primary, secondary, destructive, outline, ghost, link, small, large, disabled, pill, loading, icon
- **alert**: default, success, destructive, warning, info, non-dismissible
- **modal**: small, medium, large, extra-large, fullscreen, no-close
- **drawer**: right, left, top, bottom, small-width, large-width, full-width, no-overlay

## Troubleshooting

### Preview not loading

1. Check that the registry is running at `PREVIEW_REGISTRY_URL`
2. Check browser console for errors
3. Verify the registry API is accessible: `curl http://localhost:8000/api/v1/preview/token`

### CORS errors

If you see CORS errors in the console, make sure the registry allows requests from your docs domain.

### Token generation failing

Check the registry logs for errors. The preview token API endpoint must be accessible.
