@extends('_layouts.master')

@section('body')
<!-- Hero Section -->
<section class="relative overflow-hidden">
    <!-- Background gradient with animated glow -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-primary/20 via-background to-background"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="container max-w-screen-xl mx-auto px-4 lg:px-8 py-24 md:py-32 lg:py-40">
        <div class="flex flex-col items-center text-center max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="mb-8 animate-fade-in inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/5 px-4 py-2 text-sm">
                <span class="relative flex h-2 w-2">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-primary"></span>
                </span>
                <span class="text-primary font-medium">Inspired by shadcn/ui</span>
            </div>

            <!-- Hero text -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight mb-6 animate-fade-in" style="animation-delay: 0.1s">
                <span class="bg-gradient-to-br from-foreground via-foreground to-foreground/70 bg-clip-text text-transparent">
                    Beautiful UI for
                </span>
                <br>
                <span class="bg-gradient-to-r from-primary via-primary/80 to-accent bg-clip-text text-transparent">
                    Laravel Projects
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-muted-foreground mb-6 max-w-2xl animate-fade-in leading-relaxed" style="animation-delay: 0.2s">
                {{ $page->siteDescription }}. Copy and paste components into your projects — fully customized with Tailwind CSS v4 and Alpine.js.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 mb-12 animate-fade-in" style="animation-delay: 0.3s">
                <a href="/docs/installation" class="group inline-flex items-center justify-center rounded-xl bg-primary px-8 py-4 text-base font-semibold text-primary-foreground shadow-lg shadow-primary/25 hover:bg-primary/90 hover:shadow-xl hover:shadow-primary/30 transition-all">
                    Get Started
                    <x-icon name="arrow-right-02" class="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform" />
                </a>

                <a href="/docs/components" class="inline-flex items-center justify-center rounded-xl border border-input bg-background px-8 py-4 text-base font-semibold hover:bg-accent hover:text-accent-foreground transition-all">
                    Browse Components
                </a>
            </div>

            <!-- Tech Stack -->
            <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-muted-foreground animate-fade-in" style="animation-delay: 0.4s">
                <span class="flex items-center gap-2">
                    <x-icons.laravel />
                    Blade
                </span>
                <span class="w-1 h-1 rounded-full bg-muted-foreground/50"></span>
                <span class="flex items-center gap-2">
                    <x-icons.tailwind />
                    Tailwind CSS v4
                </span>
                <span class="w-1 h-1 rounded-full bg-muted-foreground/50"></span>
                <span class="flex items-center gap-2">
                    <x-icons.alpinejs />
                    Alpine.js
                </span>
                <span class="w-1 h-1 rounded-full bg-muted-foreground/50"></span>
                <span class="flex items-center gap-2">
                    <x-icons.livewire />
                    Livewire 4
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="border-t bg-background/50 backdrop-blur-sm">
    <div class="container max-w-screen-xl mx-auto px-4 lg:px-8 py-24">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Velyx?</h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                Components you own, fully customized, and ready to ship.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-3">
            <!-- Feature 1 -->
            <div class="group relative rounded-2xl border bg-card p-8 shadow-sm transition-all hover:shadow-lg hover:-translate-y-1">
                <div class="mb-5 inline-flex rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 p-4 text-primary">
                    <x-icon name="copy-01" class="h-8 w-8" />
                </div>
                <h3 class="text-xl font-bold mb-3">Copy & Paste</h3>
                <p class="text-muted-foreground leading-relaxed">
                    No npm installs or package dependencies. Components are copied directly into your project — you own the code.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="group relative rounded-2xl border bg-card p-8 shadow-sm transition-all hover:shadow-lg hover:-translate-y-1">
                <div class="mb-5 inline-flex rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 p-4 text-primary">
                    <x-icon name="sliders-horizontal" class="h-8 w-8" />
                </div>
                <h3 class="text-xl font-bold mb-3">Fully Customizable</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Built with Tailwind CSS v4 utilities. Customize colors, spacing, and styles directly in your markup.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="group relative rounded-2xl border bg-card p-8 shadow-sm transition-all hover:shadow-lg hover:-translate-y-1">
                <div class="mb-5 inline-flex rounded-xl bg-gradient-to-br from-primary/20 to-primary/5 p-4 text-primary">
                    <x-icon name="drooling" class="h-8 w-8" />
                </div>
                <h3 class="text-xl font-bold mb-3">Laravel Native</h3>
                <p class="text-muted-foreground leading-relaxed">
                    Designed for Laravel, Livewire 4, and Alpine.js. Works seamlessly with your existing Laravel stack.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="border-t">
    <div class="container max-w-screen-xl mx-auto px-4 lg:px-8 py-24">
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-primary via-primary/90 to-accent p-12 md:p-16 text-center">
            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-black/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

            <div class="relative">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-foreground mb-4">
                    Ready to build something beautiful?
                </h2>
                <p class="text-lg text-primary-foreground/90 mb-8 max-w-2xl mx-auto">
                    Get started with Velyx and add stunning UI components to your Laravel project in minutes.
                </p>
                <a href="/docs/installation" class="inline-flex items-center justify-center rounded-xl bg-background px-8 py-4 text-base font-semibold text-foreground shadow-xl hover:bg-background/90 transition-all">
                    Read the Documentation
                    <x-icon name="arrow-right-02" class="ml-2 h-5 w-5" />
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
