# Security Policy

## Supported Versions

Security fixes are provided for the current maintained state of the docs site.

| Version | Supported |
| --- | --- |
| Latest | Yes |

## Reporting a Vulnerability

Do not open a public GitHub issue for security problems.

Report vulnerabilities privately at [security@velyx.dev](mailto:security@velyx.dev).

Include:

- a clear description of the issue
- exact steps to reproduce it
- impacted pages, routes, or integrations
- potential impact
- proof of concept if relevant

## Scope

This policy covers issues in this repository, including:

- the docs site and its generated pages
- preview iframe integrations
- search integration and front-end behavior
- metadata, canonical URLs, and social card generation
- client-side scripts shipped by the docs site

## Out of Scope

The following are generally out of scope for this repository:

- vulnerabilities in third-party services themselves
- issues that only exist in a local uncommitted environment
- general Laravel, npm, or browser ecosystem vulnerabilities with no repo-specific exploit path

## What To Expect

- acknowledgement within 48 hours
- triage and validation of impact
- coordinated fix and disclosure when appropriate

## Guidance

- do not publicly disclose the issue before a fix is available
- do not access or alter data you do not own
- keep the proof of concept minimal and targeted

## Contact

- Security: [security@velyx.dev](mailto:security@velyx.dev)
- Fallback: [hello@velyx.dev](mailto:hello@velyx.dev)
