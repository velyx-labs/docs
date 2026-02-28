<footer class="border-t bg-muted/50" role="contentinfo">
    <div class="container max-w-screen-xl mx-auto px-4 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2 text-sm text-muted-foreground">
                <span>&copy; {{ date('Y') }} {{ $page->siteName }}.</span>
                <span class="hidden sm:inline">·</span>
                <span class="hidden sm:inline">Inspired by <a href="https://ui.shadcn.com" target="_blank" rel="noopener noreferrer" class="hover:text-foreground transition-colors">shadcn/ui</a></span>
            </div>

            <div class="flex items-center gap-6 text-sm text-muted-foreground">
                <a href="https://github.com/velyx-labs" target="_blank" rel="noopener noreferrer" class="hover:text-foreground transition-colors">GitHub</a>
                <a href="https://twitter.com/velyxdev" target="_blank" rel="noopener noreferrer" class="hover:text-foreground transition-colors">Twitter</a>
                <a href="https://discord.gg/velyx" target="_blank" rel="noopener noreferrer" class="hover:text-foreground transition-colors">Discord</a>
            </div>
        </div>
    </div>
</footer>
