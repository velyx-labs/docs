@extends('_layouts.master')

@push('meta')
<meta name="keywords" content="Laravel UI components, Blade components, Alpine.js UI, Tailwind CSS v4, Livewire components, Laravel design system">
@endpush

@section('body')

<section class="relative overflow-hidden border-b border-border bg-background">

    <div class="pointer-events-none absolute inset-x-0 top-0 z-10 h-px bg-gradient-to-r from-transparent via-border to-transparent"></div>

    <div class="pointer-events-none absolute inset-0 z-0"
         style="background-image: linear-gradient(to right, var(--border) 1px, transparent 1px), linear-gradient(to bottom, var(--border) 1px, transparent 1px); background-size: 72px 72px; mask-image: radial-gradient(ellipse 85% 55% at 50% 0%, black 10%, transparent 100%); -webkit-mask-image: radial-gradient(ellipse 85% 55% at 50% 0%, black 10%, transparent 100%);"></div>

    <div class="pointer-events-none absolute inset-0 z-0">
        <div class="absolute left-1/2 top-0 h-64 w-[640px] -translate-x-1/2 rounded-full bg-foreground/[0.04] blur-3xl"></div>
        <div class="absolute right-[6%] top-12 h-52 w-52 rounded-full bg-foreground/[0.025] blur-3xl"></div>
    </div>

    <div class="container-wrapper relative z-10 px-4 py-20 lg:px-6 lg:py-28">
        <div class="mx-auto max-w-5xl text-center">

            {{-- Badge --}}
            <div class="animate-fade-in inline-flex items-center gap-2 rounded-full border border-border bg-background/80 px-4 py-1.5 text-[0.625rem] font-bold uppercase tracking-[0.22em] text-muted-foreground backdrop-blur-sm">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-foreground opacity-50"></span>
                Blade Components For Shipping Products
            </div>

            <h1 class="mt-7 animate-fade-in font-serif text-5xl font-normal leading-[1.06] tracking-[-0.03em] text-foreground sm:text-6xl lg:text-[5.25rem]"
                style="animation-delay: 0.08s">
                Copy the UI.<br>
                <em class="italic text-muted-foreground">Keep the leverage.</em>
            </h1>

            <p class="mx-auto mt-6 max-w-[38rem] animate-fade-in text-base font-light leading-[1.85] text-muted-foreground sm:text-lg"
               style="animation-delay: 0.16s">
                Velyx is a Laravel-first component system for teams that want polished interfaces without tying product work to a dependency-owned UI layer. Copy, adapt, ship.
            </p>

            {{-- CTAs --}}
            <div class="mt-9 flex animate-fade-in flex-wrap justify-center gap-3" style="animation-delay: 0.24s">

                <a href="/docs/installation"
                   class="inline-flex items-center justify-center gap-2 rounded-lg bg-foreground px-6 py-3 text-[0.8125rem] font-semibold text-background shadow-sm transition-all duration-150 hover:-translate-y-px hover:opacity-90">
                    Get Started
                    <x-icon name="arrow-right-02" class="h-3.5 w-3.5" />
                </a>

                <a href="/docs/components"
                   class="inline-flex items-center justify-center gap-2 rounded-lg border border-border bg-transparent px-6 py-3 text-[0.8125rem] font-medium text-muted-foreground transition-all duration-150 hover:-translate-y-px hover:border-border/80 hover:text-foreground">
                    Browse Components
                    <x-icon name="arrow-right-02" class="h-3.5 w-3.5" />
                </a>

            </div>

            <div class="mt-14 grid animate-fade-in grid-cols-3 overflow-hidden rounded-[calc(var(--radius)+8px)] border border-border"
                 style="animation-delay: 0.32s">
                <div class="border-r border-border p-5 text-left">
                    <p class="text-[0.625rem] font-bold uppercase tracking-[0.2em] text-muted-foreground">Ownership</p>
                    <p class="mt-2 text-sm font-light leading-[1.75] text-foreground">No runtime UI package between your product and your codebase.</p>
                </div>
                <div class="border-r border-border p-5 text-left">
                    <p class="text-[0.625rem] font-bold uppercase tracking-[0.2em] text-muted-foreground">Stack Fit</p>
                    <p class="mt-2 text-sm font-light leading-[1.75] text-foreground">Blade, Alpine.js, Tailwind CSS v4 and Livewire from day one.</p>
                </div>
                <div class="p-5 text-left">
                    <p class="text-[0.625rem] font-bold uppercase tracking-[0.2em] text-muted-foreground">Ship Faster</p>
                    <p class="mt-2 text-sm font-light leading-[1.75] text-foreground">Sharp baseline, then shape every component around your product.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="border-b border-border bg-muted/20">
    <div class="container-wrapper px-4 py-14 lg:px-6">
        <div class="grid gap-6 lg:grid-cols-3">

            <div class="rounded-[calc(var(--radius)+12px)] border border-border bg-background p-8">
                <div class="inline-flex rounded-[calc(var(--radius)+4px)] bg-primary/10 p-3 text-primary">
                    <x-icon name="copy-01" class="h-[1.375rem] w-[1.375rem]" />
                </div>
                <h2 class="mt-5 text-[1.0625rem] font-semibold leading-snug tracking-tight text-foreground">Copy the component. Keep the control.</h2>
                <p class="mt-3 text-[0.8125rem] font-light leading-7 text-muted-foreground">
                    Pull the markup into your app, inspect every class, and evolve the component with your own product constraints instead of someone else's package roadmap.
                </p>
            </div>

            <div class="rounded-[calc(var(--radius)+12px)] border border-border bg-background p-8">
                <div class="inline-flex rounded-[calc(var(--radius)+4px)] bg-primary/10 p-3 text-primary">
                    <x-icon name="sliders-horizontal" class="h-[1.375rem] w-[1.375rem]" />
                </div>
                <h2 class="mt-5 text-[1.0625rem] font-semibold leading-snug tracking-tight text-foreground">Built to be edited, not protected.</h2>
                <p class="mt-3 text-[0.8125rem] font-light leading-7 text-muted-foreground">
                    Utility classes stay legible, component anatomy stays practical, and your design system can bend the UI without fighting an abstraction wall.
                </p>
            </div>

            <div class="rounded-[calc(var(--radius)+12px)] border border-border bg-background p-8">
                <div class="inline-flex rounded-[calc(var(--radius)+4px)] bg-primary/10 p-3 text-primary">
                    <x-icon name="dashboard-square-03" class="h-[1.375rem] w-[1.375rem]" />
                </div>
                <h2 class="mt-5 text-[1.0625rem] font-semibold leading-snug tracking-tight text-foreground">Made for real Laravel product work.</h2>
                <p class="mt-3 text-[0.8125rem] font-light leading-7 text-muted-foreground">
                    The patterns are aimed at admin panels, SaaS dashboards, settings flows, search-heavy interfaces, and the screens teams actually need to ship.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="border-b border-border bg-background">
    <div class="container-wrapper px-4 py-16 lg:px-6">

        <div class="flex flex-col gap-4 text-center">
            <p class="text-[0.625rem] font-bold uppercase tracking-[0.28em] text-muted-foreground">What You Actually Get</p>
            <h2 class="text-3xl font-semibold tracking-tight text-foreground sm:text-4xl">A Laravel UI baseline that still feels like your product</h2>
            <p class="mx-auto max-w-2xl text-[0.9375rem] leading-7 text-muted-foreground">
                Start from a confident component library, then shape each screen around your brand, data density, and workflow needs.
            </p>
        </div>

        <div class="mt-12 grid gap-5 lg:grid-cols-[minmax(0,1.2fr)_minmax(0,0.8fr)]">

            <div class="border border-border bg-card p-6">
                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="rounded-[calc(var(--radius)+8px)] border border-border bg-background p-5">
                        <p class="text-[0.6rem] font-bold uppercase tracking-[0.22em] text-muted-foreground">Documentation</p>
                        <p class="mt-3 text-base font-semibold text-foreground">Installation guides and usage patterns</p>
                        <p class="mt-2 text-[0.8125rem] leading-6 text-muted-foreground">Clear onboarding paths for adding components into Blade projects without build-process drama.</p>
                    </div>
                    <div class="rounded-[calc(var(--radius)+8px)] border border-border bg-background p-5">
                        <p class="text-[0.6rem] font-bold uppercase tracking-[0.22em] text-muted-foreground">Components</p>
                        <p class="mt-3 text-base font-semibold text-foreground">A practical catalog for common product UI</p>
                        <p class="mt-2 text-[0.8125rem] leading-6 text-muted-foreground">Drawers, cards, tables, popovers, command palettes, modals, markdown viewers and more.</p>
                    </div>
                    <div class="rounded-[calc(var(--radius)+8px)] border border-border bg-background p-5">
                        <p class="text-[0.6rem] font-bold uppercase tracking-[0.22em] text-muted-foreground">Customization</p>
                        <p class="mt-3 text-base font-semibold text-foreground">Classes you can actually reason about</p>
                        <p class="mt-2 text-[0.8125rem] leading-6 text-muted-foreground">No hidden abstraction tax when brand direction, spacing logic, or product states evolve.</p>
                    </div>
                    <div class="rounded-[calc(var(--radius)+8px)] border border-border bg-background p-5">
                        <p class="text-[0.6rem] font-bold uppercase tracking-[0.22em] text-muted-foreground">Workflow</p>
                        <p class="mt-3 text-base font-semibold text-foreground">Faster iteration from docs to interface</p>
                        <p class="mt-2 text-[0.8125rem] leading-6 text-muted-foreground">Pick a component, paste it into the app, wire it to your data, then keep momentum.</p>
                    </div>
                </div>
            </div>

            <div class="border border-border bg-muted/30 p-6">
                <p class="text-[0.6rem] font-bold uppercase tracking-[0.24em] text-muted-foreground">Why Teams Reach For It</p>
                <div class="mt-6 space-y-4">
                    <div class="rounded-[calc(var(--radius)+8px)] border border-border bg-background px-4 py-4">
                        <p class="text-sm font-semibold text-foreground">No package lock-in</p>
                        <p class="mt-1 text-[0.8125rem] leading-6 text-muted-foreground">Your components live in your repository, where product decisions and maintenance already happen.</p>
                    </div>
                    <div class="rounded-[calc(var(--radius)+8px)] border border-border bg-background px-4 py-4">
                        <p class="text-sm font-semibold text-foreground">Consistent visual starting point</p>
                        <p class="mt-1 text-[0.8125rem] leading-6 text-muted-foreground">Useful defaults that still leave room for a brand with sharper visual character.</p>
                    </div>
                    <div class="rounded-[calc(var(--radius)+8px)] border border-border bg-background px-4 py-4">
                        <p class="text-sm font-semibold text-foreground">Laravel-native ergonomics</p>
                        <p class="mt-1 text-[0.8125rem] leading-6 text-muted-foreground">It feels like building in Laravel instead of translating a foreign component philosophy.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="border-t border-border bg-background">
    <div class="container-wrapper px-4 py-20 lg:px-6 lg:py-24">

        <div class="relative overflow-hidden rounded-[calc(var(--radius)+12px)] border border-border bg-card px-8 py-16 text-center md:px-16">

            <div class="pointer-events-none absolute inset-0 z-0"
                 style="background-image: linear-gradient(to right, var(--border) 1px, transparent 1px), linear-gradient(to bottom, var(--border) 1px, transparent 1px); background-size: 52px 52px; mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, transparent 18%, black 100%); -webkit-mask-image: radial-gradient(ellipse 85% 85% at 50% 50%, transparent 18%, black 100%);"></div>

            <div class="pointer-events-none absolute inset-0 z-0">
                <div class="absolute -left-20 -top-20 h-72 w-72 rounded-full bg-foreground/[0.035] blur-3xl"></div>
                <div class="absolute -bottom-20 -right-20 h-72 w-72 rounded-full bg-foreground/[0.025] blur-3xl"></div>
            </div>

            <div class="relative z-10">

                <span class="inline-block rounded-full border border-border px-3.5 py-1 text-[0.625rem] font-bold uppercase tracking-[0.24em] text-muted-foreground">
                    Start Building
                </span>

                <h2 class="mx-auto mt-6 max-w-2xl font-serif text-4xl font-normal leading-[1.1] tracking-[-0.03em] text-foreground sm:text-5xl">
                    Build the first serious screen faster,
                    <em class="italic text-muted-foreground">then make it unmistakably yours.</em>
                </h2>

                <p class="mx-auto mt-5 max-w-md text-sm font-light leading-[1.85] text-muted-foreground">
                    Explore the docs, pull in the components you need, and turn Velyx into an interface layer that belongs to your product, not ours.
                </p>

                <div class="mx-auto mt-8 flex max-w-[200px] items-center gap-3">
                    <div class="h-px flex-1 bg-gradient-to-r from-transparent to-border"></div>
                    <div class="flex gap-1">
                        <span class="inline-block h-[3px] w-[3px] rounded-full bg-muted-foreground opacity-35"></span>
                        <span class="inline-block h-[3px] w-[3px] rounded-full bg-muted-foreground opacity-35"></span>
                        <span class="inline-block h-[3px] w-[3px] rounded-full bg-muted-foreground opacity-35"></span>
                    </div>
                    <div class="h-px flex-1 bg-gradient-to-l from-transparent to-border"></div>
                </div>

                <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">

                    <a href="/docs/installation"
                       class="inline-flex items-center justify-center gap-2 rounded-lg bg-foreground px-6 py-3 text-[0.8125rem] font-semibold text-background shadow-sm transition-all duration-150 hover:-translate-y-px hover:opacity-90">
                        Read the Docs
                        <x-icon name="arrow-right-02" class="h-3.5 w-3.5" />
                    </a>

                    <a  href="https://github.com/velyx-labs" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 rounded-lg border border-border bg-transparent px-6 py-3 text-[0.8125rem] font-medium text-muted-foreground transition-all duration-150 hover:-translate-y-px hover:border-border/80 hover:text-foreground">
                        <x-icons.github class="h-4 w-4" />
                        View on GitHub
                    </a>

                </div>

                <p class="mt-8 text-[0.6875rem] font-light tracking-wide text-muted-foreground/60">
                    No package required —
                    <span class="font-medium text-muted-foreground/80">components live in your repo.</span>
                </p>

            </div>
        </div>

    </div>
</section>

@endsection
