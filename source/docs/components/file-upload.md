---
title: File Upload
description: Drag and drop file upload with progress tracking
extends: _layouts.documentation
section: content
---

# File Upload

The File Upload component provides a drag-and-drop zone for uploading files with visual feedback and progress tracking.

## Installation

Add the file upload component to your project:

<x-code-tabs
    npm="npx velyx add file-upload"
    pnpm="pnpm dlx velyx add file-upload"
    yarn="yarn dlx velyx add file-upload"
    bun="bunx --bun velyx add file-upload"
/>

## Usage

### Basic File Upload

<x-component-preview component="file-upload">
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `accept` | `string` | `'*'` | File types to accept (e.g., `'image/*'`, `'.pdf,.doc'`) |
| `multiple` | `boolean` | `false` | Allow multiple file selection |
| `maxSize` | `number` | `null` | Maximum file size in bytes |

## Examples

### Images Only

```blade
<x-ui.file-upload
    accept="image/*"
    label="Upload images"
/>
```

### Multiple Files

```blade
<x-ui.file-upload
    :multiple="true"
    label="Upload documents"
/>
```

### With Size Limit

```blade
<x-ui.file-upload
    :maxSize="5242880"
    label="Upload file (max 5MB)"
/>
```

### Accepted File Types

```blade
<x-ui.file-upload
    accept=".pdf,.doc,.docx"
    label="Upload document"
/>
```

## Notes

The component uses Alpine.js for drag-and-drop functionality and progress tracking.
