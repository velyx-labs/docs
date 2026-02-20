@extends('_layouts.master')

@section('body')
<section class="relative overflow-hidden">
    <!-- Background gradient -->
    <div class="absolute inset-0 -z-10 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-primary/10 via-background to-background"></div>

    <div class="container max-w-screen-2xl mx-auto px-4 lg:px-8 py-24 md:py-32">
        <div class="flex flex-col items-center text-center max-w-3xl mx-auto">
            <!-- Logo/Brand -->
            <div class="mb-8 animate-fade-in">
                <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} logo" class="h-24 w-24 mx-auto" />
            </div>

            <!-- Hero text -->
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold tracking-tight mb-6 animate-fade-in" style="animation-delay: 0.1s">
                {{ $page->siteName }}
            </h1>

            <p class="text-xl md:text-2xl text-muted-foreground mb-4 max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                {{ $page->siteDescription }}
            </p>

            <p class="text-lg text-muted-foreground mb-10 max-w-xl animate-fade-in" style="animation-delay: 0.3s">
                Give your documentation a boost with Jigsaw. Generate elegant, static docs quickly and easily.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 animate-fade-in" style="animation-delay: 0.4s">
                <a href="/docs/getting-started" class="inline-flex items-center justify-center rounded-lg bg-primary px-8 py-3 text-base font-medium text-primary-foreground shadow-lg shadow-primary/25 hover:bg-primary/90 transition-fast">
                    Get Started
                    <x-icon name="arrow-right-02" class="ml-2 h-5 w-5" />
                </a>

                <a href="https://jigsaw.tighten.co" class="inline-flex items-center justify-center rounded-lg border border-input bg-background px-8 py-3 text-base font-medium hover:bg-accent hover:text-accent-foreground transition-fast">
                    About Jigsaw
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="border-t bg-background/50">
    <div class="container max-w-screen-2xl mx-auto px-4 lg:px-8 py-24">
        <div class="grid gap-8 md:grid-cols-3">
            <!-- Feature 1 -->
            <div class="group relative rounded-xl border bg-card p-8 shadow-sm transition-all hover:shadow-md">
                <div class="mb-4 inline-flex rounded-lg bg-primary/10 p-3 text-primary">
                    <x-icon name="code-square" class="h-8 w-8" />
                </div>
                <h3 class="text-xl font-semibold mb-3">Laravel's Blade Engine</h3>
                <p class="text-muted-foreground">
                    Blade is a powerful, simple, and beautiful templating language. Use it for your static sites, not just Laravel apps.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="group relative rounded-xl border bg-card p-8 shadow-sm transition-all hover:shadow-md">
                <div class="mb-4 inline-flex rounded-lg bg-primary/10 p-3 text-primary">
                    <x-icon name="file-attachment" class="h-8 w-8" />
                </div>
                <h3 class="text-xl font-semibold mb-3">Markdown Content</h3>
                <p class="text-muted-foreground">
                    Markdown is the web's leading format for writing documentation. Jigsaw makes it painless to work with Markdown content.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="group relative rounded-xl border bg-card p-8 shadow-sm transition-all hover:shadow-md">
                <div class="mb-4 inline-flex rounded-lg bg-primary/10 p-3 text-primary">
                    <x-icon name="zap" class="h-8 w-8" />
                </div>
                <h3 class="text-xl font-semibold mb-3">Vite for Assets</h3>
                <p class="text-muted-foreground">
                    Jigsaw comes pre-configured with Vite, a simple and powerful build tool. Use the latest frontend tech with ease.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
