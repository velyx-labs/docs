<div class="hidden xl:block">
    <div class="sticky top-14 -mt-10 pt-10 self-start">
        <p class="mb-4 text-sm font-medium text-foreground">On This Page</p>
        <ul class="space-y-2 text-sm text-muted-foreground">
            {{-- TOC items will be populated by JavaScript --}}
        </ul>
    </div>
</div>

@push('scripts')
<script>
(function() {
    const initTOC = () => {
        const content = document.querySelector('.DocSearch-content');
        if (!content) return;

        // Find all h2 and h3 headings
        const headings = content.querySelectorAll('h2, h3');
        if (headings.length === 0) return;

        // Generate IDs for headings without them
        headings.forEach((heading, index) => {
            if (!heading.id) {
                const text = heading.textContent.trim();
                const slug = text.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .trim();
                heading.id = slug + (index > 0 ? `-${index}` : '');
            }
        });

        // Build TOC
        const tocContainer = document.querySelector('.table-of-contents ul');
        if (!tocContainer) return;

        tocContainer.innerHTML = '';

        headings.forEach(heading => {
            const level = parseInt(heading.tagName.substring(1));
            const li = document.createElement('li');
            li.className = level === 3 ? 'pl-4' : '';

            const a = document.createElement('a');
            a.href = `#${heading.id}`;
            a.textContent = heading.textContent.trim();
            a.className = 'block transition-colors hover:text-foreground hover:underline';
            a.dataset.target = heading.id;

            li.appendChild(a);
            tocContainer.appendChild(li);
        });

        // Highlight active section on scroll
        const observerOptions = {
            rootMargin: '-100px 0px -66%',
            threshold: 0
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    document.querySelectorAll('.table-of-contents a').forEach(link => {
                        link.classList.remove('text-foreground', 'font-medium');
                        if (link.dataset.target === id) {
                            link.classList.add('text-foreground', 'font-medium');
                        }
                    });
                }
            });
        }, observerOptions);

        headings.forEach(heading => observer.observe(heading));
    };

    // Initialize after DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTOC);
    } else {
        initTOC();
    }
})();
</script>
@endpush
