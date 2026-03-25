---
title: File Upload
description: File Upload component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/file-upload.png
metaTitle: File Upload Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# File Upload

The File Upload component provides a drag-and-drop zone for uploading files with visual feedback and progress tracking.

## Installation

Add the file upload component to your project:

<x-code-tabs
    npm="npx velyx@latest add file-upload"
    pnpm="pnpm dlx velyx@latest add file-upload"
    yarn="yarn dlx velyx@latest add file-upload"
    bun="bunx --bun velyx@latest add file-upload"
/>

## Usage

### Basic File Upload

<x-component-preview component="file-upload">
</x-component-preview>

## Props

| Prop       | Type      | Default | Description                                             |
| ---------- | --------- | ------- | ------------------------------------------------------- |
| `accept`   | `string`  | `'*'`   | File types to accept (e.g., `'image/*'`, `'.pdf,.doc'`) |
| `multiple` | `boolean` | `false` | Allow multiple file selection                           |
| `maxSize`  | `number`  | `null`  | Maximum file size in bytes                              |

## Examples

### Images Only

```php
<x-ui.file-upload
    accept="image/*"
    label="Upload images"
/>
```

### Multiple Files

```php
<x-ui.file-upload
    :multiple="true"
    label="Upload documents"
/>
```

### With Size Limit

```php
<x-ui.file-upload
    :maxSize="5242880"
    label="Upload file (max 5MB)"
/>
```

### Accepted File Types

```php
<x-ui.file-upload
    accept=".pdf,.doc,.docx"
    label="Upload document"
/>
```

## Notes

The component uses Alpine.js for drag-and-drop functionality and progress tracking.
