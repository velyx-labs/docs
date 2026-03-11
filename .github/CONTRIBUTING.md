# Contributing to Velyx Docs

This repository contains the Velyx documentation site, landing pages, component reference pages, shared docs UI, and preview integrations.

## Code of Conduct

Participation in this repository is governed by the [Code of Conduct](CODE_OF_CONDUCT.md).

## Before You Open Work

- Search existing issues, discussions, and pull requests first.
- Keep changes narrow. Do not mix unrelated cleanup with product work.
- If the change affects layout, navigation, search, previews, or metadata, identify the exact pages and components up front.

## Contribution Standard

Useful contributions in this repository include:

- correcting inaccurate or outdated documentation
- improving layout, navigation, or responsive behavior
- aligning examples with actual registry or CLI behavior
- fixing preview rendering or preview/code mismatches
- improving metadata, canonical URLs, or social card behavior

Low-value contributions include placeholder content, cosmetic churn with no user benefit, and documentation that is not backed by the product.

## Local Setup

```bash
pnpm install
pnpm run build
```

A pull request is not ready if the production build fails.

## Required Verification

Run the checks relevant to your change:

```bash
pnpm run build
```

Also verify manually when applicable:

- the affected page renders correctly
- navigation works on desktop and mobile
- search UI still opens and styles correctly
- preview iframes load and match their code/source panels
- updated links, metadata, and canonical tags are correct

## Writing Standard

- Keep copy concrete and direct.
- Do not document behavior that is not implemented.
- Prefer precise examples over generic explanation.
- Keep headings, labels, and terminology consistent.
- Use `php` fences, not `blade`, for snippets.

## Pull Requests

A pull request should state:

- what changed
- why it changed
- which pages or components are affected
- how the result was verified

If the change is visual, include screenshots. If the change affects navigation, previews, or metadata, say so explicitly.

## UI and Content Constraints

When editing the docs UI:

- preserve the established visual direction unless the PR is intentionally a redesign
- verify mobile behavior, not only desktop behavior
- keep preview code aligned with the real registry output
- do not add mock content that looks shippable but is not supported by the product

## Security

Do not report security issues in public issues or discussions. Follow [SECURITY.md](SECURITY.md).
