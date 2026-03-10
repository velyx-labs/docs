---
title: Markdown Viewer
description: Markdown Viewer component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.
metaImage: /assets/images/og/docs/components/markdown-viewer.png
metaTitle: Markdown Viewer Component for Laravel Blade, Alpine.js & Livewire | Velyx
extends: _layouts.documentation
section: content
---

# Markdown Viewer

The Markdown Viewer component renders markdown content with beautiful typography, syntax highlighting, and automatic styling.

## Installation

Add the markdown viewer component to your project:

<x-code-tabs
    npm="npx velyx@latest add markdown-viewer"
    pnpm="pnpm dlx velyx@latest add markdown-viewer"
    yarn="yarn dlx velyx@latest add markdown-viewer"
    bun="bunx --bun velyx@latest add markdown-viewer"
/>

## Usage

### Basic Markdown

<x-component-preview component="markdown-viewer" variant="default">
    <x-ui.markdown-viewer>
        # Markdown Viewer

        This is a **simple markdown viewer** component.

        ## Features

        - Renders markdown headings and text
        - Supports lists and inline formatting
        - Displays code blocks cleanly

        ```php
        $user = User::query()->first();
        ```

        > Keep it minimal and readable.
    </x-ui.markdown-viewer>
</x-component-preview>

### Headings

<x-component-preview component="markdown-viewer" variant="headings">
    <x-ui.markdown-viewer>
        # Heading 1
        ## Heading 2
        ### Heading 3
        #### Heading 4
        ##### Heading 5
        ###### Heading 6

        Headings help structure your content.
    </x-ui.markdown-viewer>
</x-component-preview>

### Text Formatting

<x-component-preview component="markdown-viewer" variant="formatting">
    <x-ui.markdown-viewer>
        # Text Formatting

        You can write **bold text**, *italic text*, or ***both***.

        You can also ~~strikethrough~~ text.

        You can use `inline code` within sentences.

        ## Emphasis

        - **Bold** for strong emphasis
        - *Italic* for subtle emphasis
        - ***Bold and italic*** for extra emphasis
    </x-ui.markdown-viewer>
</x-component-preview>

### Lists

<x-component-preview component="markdown-viewer" variant="lists">
    <x-ui.markdown-viewer>
        # Lists

        ## Unordered List

        - First item
        - Second item
          - Nested item
          - Another nested item
        - Third item

        ## Ordered List

        1. First step
        2. Second step
        3. Third step

        ## Task List

        - [x] Completed task
        - [ ] Incomplete task
        - [ ] Another task
    </x-ui.markdown-viewer>
</x-component-preview>

### Code Blocks

<x-component-preview component="markdown-viewer" variant="code">
    <x-ui.markdown-viewer>
        # Code Blocks

        ## Inline Code

        You can use `inline code` for small code snippets.

        ## Code Blocks

        ```php
        namespace App\Models;

        class User extends Model
        {
            protected $fillable = ['name', 'email'];

            public function posts()
            {
                return $this->hasMany(Post::class);
            }
        }
        ```

        ```javascript
        function greet(name) {
            return `Hello, ${name}!`;
        }

        console.log(greet('World'));
        ```
    </x-ui.markdown-viewer>
</x-component-preview>

### Blockquotes

<x-component-preview component="markdown-viewer" variant="quotes">
    <x-ui.markdown-viewer>
        # Blockquotes

        > This is a simple blockquote.

        > **Tip:** You can use markdown formatting inside blockquotes.

        > This is a longer blockquote that spans multiple lines.
        > It can contain **formatted text**, `code`, and other elements.

        > ## Even headings!
        >
        > Blockquotes are versatile.

        ---

        Remember: Blockquotes are great for highlighting important information.
    </x-ui.markdown-viewer>
</x-component-preview>

### Links

<x-component-preview component="markdown-viewer" variant="links">
    <x-ui.markdown-viewer>
        # Links

        ## External Links

        Visit [Laravel](https://laravel.com) documentation.

        Check out [Tailwind CSS](https://tailwindcss.com).

        ## Reference-style Links

        I [love Laravel][1].

        [1]: https://laravel.com

        ## Automatic Links

        <https://github.com>

        <user@example.com>
    </x-ui.markdown-viewer>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `content` | `string` | `''` | The markdown content to render. Can be passed as a prop or as slot content. |
| `maxHeight` | `string` | `'420px'` | Maximum height of the content area with overflow scroll. |

## Examples

### Using Content Prop

```blade
<x-ui.markdown-viewer :content="$markdownContent" />
```

### Using Slot Content

```blade
<x-ui.markdown-viewer>
    # Your Title

    Your **markdown** content here...
</x-ui.>

### Custom Height

```blade
<x-ui.markdown-viewer maxHeight="600px">
    # Long Content

    This content can be up to 600px tall before scrolling...
</x-ui.>

### Custom Styling

```blade
<x-ui.markdown-viewer class="shadow-lg">
    # Styled Content

    Add your own Tailwind classes...
</x-ui.>

## Notes

- The component uses Laravel's `Str::markdown()` function for parsing
- HTML input is stripped for security
- Unsafe links are automatically filtered
- The component uses Tailwind Typography (`prose`) classes for styling
- Dark mode is automatically supported via `dark:prose-invert`
