---
permalink: robots.txt
---

User-agent: *
@if ($page->production)
Allow: /

Sitemap: {{ rtrim($page->baseUrl, '/') }}/sitemap.xml
@else
Disallow: /
@endif
