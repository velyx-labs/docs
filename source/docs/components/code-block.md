---
title: Code Block
description: Display code snippets with syntax highlighting
extends: _layouts.documentation
section: content
---

# Code Block

The Code Block component displays code snippets with syntax highlighting using Prism.js.

## Installation

Add the code block component to your project:

<x-code-tabs
    npm="npx velyx add code-block"
    pnpm="pnpm dlx velyx add code-block"
    yarn="yarn dlx velyx add code-block"
    bun="bunx --bun velyx add code-block"
/>

## Usage

### PHP Code

<x-component-preview component="code-block">
    <x-ui.code-block language="php">
        $users = User::all();
        
        foreach ($users as $user) {
            echo $user->name;
        }
    </x-ui.code-block>
</x-component-preview>

### JavaScript Code

<x-component-preview component="code-block">
    <x-ui.code-block language="javascript">
        const greet = (name) => {
            return `Hello, ${name}!`;
        };
        
        console.log(greet('World'));
    </x-ui.code-block>
</x-component-preview>

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `language` | `string` | required | Programming language for syntax highlighting |
| `code` | `string` | `null` | Inline code to display (alternative to slot) |
| `showLineNumbers` | `boolean` | `false` | Whether to display line numbers |
| `startingLineNumber` | `number` | `1` | Starting line number |

## Supported Languages

PHP, JavaScript, TypeScript, JSX, TSX, JSON, YAML, Markdown, Bash, CSS, HTML, Markup, Python, and more via Prism.js.

## Examples

### Using Slot Content

```blade
<x-ui.code-block language="php">
    $user = User::find($id);
    return $user->name;
</x-ui.code-block>
```

### Using Code Prop

```blade
<x-ui.code-block
    :code="$codeSnippet"
    language="php"
/>
```

### With Line Numbers

```blade
<x-ui.code-block
    language="php"
    :show-line-numbers="true"
>
    $user = User::find($id);
    return $user->name;
</x-ui.code-block>
```

### Custom Starting Line

```blade
<x-ui.code-block
    language="php"
    :starting-line-number="10"
>
    // Code here
</x-ui.code-block>
```

## Notes

- The component uses Prism.js for syntax highlighting
- Line numbers are displayed but not selectable
- Code is displayed in a monospace font
- Supports all Prism.js languages
