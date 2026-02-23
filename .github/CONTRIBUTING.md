# Contributing to Velyx Docs

Thank you for your interest in contributing to the Velyx documentation! This document provides guidelines and instructions for contributing.

## Table of Contents

- [Code of Conduct](#code-of-conduct)
- [How Can I Contribute?](#how-can-i-contribute)
  - [Reporting Bugs](#reporting-bugs)
  - [Suggesting Enhancements](#suggesting-enhancements)
  - [Pull Requests](#pull-requests)
- [Development Setup](#development-setup)
- [Documentation Standards](#documentation-standards)
- [Style Guidelines](#style-guidelines)

## Code of Conduct

By participating in this project, you agree to abide by the [Code of Conduct](CODE_OF_CONDUCT.md).

## How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check the existing issues to avoid duplicates. When you create a bug report, include as many details as possible:

**Use the Bug Report template and provide:**

- A clear and descriptive title
- Steps to reproduce the issue
- Expected behavior
- Actual behavior
- Screenshots if applicable
- Environment details (OS, browser, etc.)
- Any relevant error messages or logs

### Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues. When creating an enhancement suggestion:

- Use a clear and descriptive title
- Provide a detailed description of the proposed enhancement
- Explain why this enhancement would be useful
- List examples or mockups if applicable
- Consider whether it fits the project's scope and goals

### Pull Requests

1. **Fork the repository** and create your branch from `main`.
2. **Make your changes** following our [Documentation Standards](#documentation-standards).
3. **Test your changes** thoroughly by running the documentation site locally.
4. **Commit your changes** with clear, descriptive commit messages.
5. **Push to your branch** and create a Pull Request.

**Pull Request Checklist:**

- [ ] Title follows the convention (e.g., "Fix: broken link in installation guide")
- [ ] Description clearly explains the changes and their rationale
- [ ] Commits are logically organized and have clear messages
- [ ] Documentation builds successfully
- [ ] Links have been tested and work correctly
- [ ] Spelling and grammar have been checked
- [ ] Code follows the project's style guidelines

## Development Setup

The documentation site uses Jigsaw (PHP static site generator) with Vite for asset building.

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js 18+ and pnpm

### Installation

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
pnpm install
```

### Development

```bash
# Build assets (in one terminal)
pnpm run dev

# Start Jigsaw server (in another terminal)
composer run dev
```

The documentation site will be available at `http://localhost:8000`.

### Building for Production

```bash
pnpm run prod && vendor/bin/jigsaw build
```

## Documentation Standards

### Writing Style

- **Be clear and concise** - Get to the point quickly
- **Use active voice** - It's more direct and engaging
- **Write for your audience** - Assume readers are Laravel developers
- **Include examples** - Code examples help understanding
- **Keep it up to date** - Documentation should match the current version

### Markdown Formatting

- Use ATX-style headings (`# Heading`)
- Leave a blank line after headings
- Use fenced code blocks with language specification
- Include line breaks in paragraphs for readability
- Use bullet points for lists of items

### Code Examples

All code examples should:

- Be accurate and tested
- Follow Laravel and PHP best practices
- Include comments explaining complex logic
- Use proper syntax highlighting
- Show complete, runnable examples when possible

### Front Matter

Each documentation page should include proper YAML front matter:

```yaml
---
title: Page Title
description: A brief description for meta tags
section: Section Name
---
```

## Style Guidelines

### Headings

- Use title case for headings
- Keep headings descriptive but concise
- Avoid skipping heading levels (e.g., don't jump from H2 to H4)

### Links

- Use descriptive link text (not "click here")
- Test all links before submitting
- Use relative links for internal documentation
- Include HTTPS for external links

### Images

- Place images in `source/_assets/images/`
- Use descriptive filenames (e.g., `installation-screenshot.png`)
- Compress images for web
- Include alt text for accessibility
- Keep images relevant and helpful

### Code Blocks

- Specify the language for syntax highlighting
- Include context around code blocks
- Keep code blocks concise
- Use line continuation indicators (`...`) for omitted code

## Getting Help

If you need help contributing:

- Check existing [documentation](https://docs.velyx.dev)
- Search [existing issues](https://github.com/velyx-dev/docs/issues)
- Start a [discussion](https://github.com/velyx-dev/docs/discussions)
- Contact us at [hello@velyx.dev](mailto:hello@velyx.dev)

## License

By contributing, you agree that your contributions will be licensed under the MIT License.
