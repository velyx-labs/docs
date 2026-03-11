# Contributing to Velyx Docs

This repository contains the Velyx documentation site, landing pages, component reference pages, shared doc UI, and preview integrations.

## Code of Conduct

By participating in this project, you agree to follow the [Code of Conduct](CODE_OF_CONDUCT.md).

## Before Opening Work

- Search existing issues and pull requests first.
- Prefer small, focused changes.
- If the change affects layout, navigation, search, previews, or metadata, describe the impacted pages precisely.

## Good Contributions

Examples of useful contributions:

- Fixing incorrect or outdated documentation
- Improving page structure, layout, or responsive behavior
- Cleaning up navigation, SEO, metadata, or social cards
- Aligning examples with the real registry or CLI behavior
- Improving preview rendering and iframe integration

## Local Setup

```bash
npm install
npm run build
```

For local development, use the repository workflow already used by the team. At minimum, make sure a production build still succeeds before opening a PR.

## What To Test

Choose the checks that match your change:

```bash
npm run build
```

Manual checks that matter in this repo:

- landing page renders correctly
- docs navigation works on desktop and mobile
- search UI still opens and styles correctly
- component previews load and match their code/source panels
- updated links, metadata, and canonical tags are correct

## Writing Standards

- Keep copy direct and precise.
- Do not document behavior that no longer matches the registry or CLI.
- Prefer concrete examples over vague descriptions.
- Keep headings and labels consistent across pages.
- When changing snippets, use `php` fences instead of `blade`.

## Pull Requests

1. Create a focused branch.
2. Keep unrelated formatting churn out of the PR.
3. Include screenshots when the change affects layout or visual behavior.
4. Mention affected pages, components, or templates explicitly.
5. State what you verified locally.

Useful PR content:

- what changed
- why it changed
- which pages or components are affected
- how you verified the result

## Content and UI Notes

When editing documentation UI:

- preserve the visual direction already established in the repo unless the change is intentionally a redesign
- validate mobile behavior, not only desktop
- keep preview/code examples aligned with the real registry output
- avoid adding placeholder content that looks shippable but is not backed by the product

## Security

If you discover a security issue, do not open a public issue. Follow the process in [SECURITY.md](SECURITY.md).
