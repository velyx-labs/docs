@extends('_layouts.master')

@section('body')
<section class="relative overflow-hidden border-b border-border/60 bg-background">
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(24,24,27,0.06),_transparent_34%),linear-gradient(180deg,rgba(24,24,27,0.04),transparent_38%)] dark:bg-[radial-gradient(circle_at_top_left,_rgba(255,255,255,0.08),_transparent_28%),linear-gradient(180deg,rgba(255,255,255,0.03),transparent_36%)]"></div>
        <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-border to-transparent"></div>
        <div class="absolute left-[8%] top-24 h-48 w-48 rounded-full bg-foreground/5 blur-3xl dark:bg-white/6"></div>
        <div class="absolute right-[10%] top-40 h-64 w-64 rounded-full bg-primary/10 blur-3xl"></div>
    </div>

    <div class="container-wrapper px-4 py-16 lg:px-6 lg:py-24">
        <div class="grid items-center gap-14 lg:grid-cols-[minmax(0,1.05fr)_minmax(0,0.95fr)]">
            <div class="max-w-3xl">
                <div class="animate-fade-in inline-flex items-center gap-2 rounded-full border border-border/70 bg-background/80 px-4 py-2 text-xs font-semibold uppercase tracking-[0.24em] text-muted-foreground backdrop-blur">
                    <span class="inline-flex h-2 w-2 rounded-full bg-primary"></span>
                    Blade Components For Shipping Products
                </div>

                <h1 class="mt-6 max-w-4xl animate-fade-in text-5xl font-semibold tracking-[-0.05em] text-foreground sm:text-6xl lg:text-7xl" style="animation-delay: 0.08s">
                    Copy the UI. Keep the leverage.
                </h1>

                <p class="mt-6 max-w-2xl animate-fade-in text-lg leading-8 text-muted-foreground sm:text-xl" style="animation-delay: 0.16s">
                    Velyx is a Laravel-first component system for teams that want polished interfaces without tying product work to a dependency-owned UI layer. Use the docs, copy the component, adapt the markup, ship faster.
                </p>

                <div class="mt-8 flex animate-fade-in flex-col gap-3 sm:flex-row" style="animation-delay: 0.24s">
                    <a href="/docs/installation" class="inline-flex items-center justify-center gap-2 rounded-2xl bg-primary px-6 py-3.5 text-sm font-semibold text-primary-foreground shadow-lg shadow-primary/20 transition-all hover:bg-primary/90 hover:shadow-xl">
                        Get Started
                        <x-icon name="arrow-right-02" class="h-4 w-4" />
                    </a>

                    <a href="/docs/components" class="inline-flex items-center justify-center gap-2 rounded-2xl border border-border bg-background/90 px-6 py-3.5 text-sm font-semibold text-foreground transition-colors hover:bg-muted">
                        Browse Components
                        <x-icon name="arrow-right-02" class="h-4 w-4" />
                    </a>
                </div>

                <div class="mt-8 grid animate-fade-in gap-4 sm:grid-cols-3" style="animation-delay: 0.32s">
                    <div class="rounded-2xl border border-border/70 bg-muted/30 p-4">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-muted-foreground">Ownership</p>
                        <p class="mt-2 text-sm leading-6 text-foreground">No runtime UI package sitting between your product and your codebase.</p>
                    </div>
                    <div class="rounded-2xl border border-border/70 bg-muted/30 p-4">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-muted-foreground">Stack Fit</p>
                        <p class="mt-2 text-sm leading-6 text-foreground">Made around Blade, Alpine.js, Tailwind CSS v4 and Livewire from day one.</p>
                    </div>
                    <div class="rounded-2xl border border-border/70 bg-muted/30 p-4">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-muted-foreground">Ship Faster</p>
                        <p class="mt-2 text-sm leading-6 text-foreground">Start with a sharp baseline, then shape every component around your product.</p>
                    </div>
                </div>
            </div>

            <div class="animate-fade-in lg:justify-self-end" style="animation-delay: 0.2s">
                <div class="relative overflow-hidden rounded-[2rem] border border-border/70 bg-card shadow-[0_24px_80px_rgba(0,0,0,0.08)] dark:shadow-[0_24px_80px_rgba(0,0,0,0.3)]">
                    <div class="absolute inset-x-0 top-0 h-24 bg-gradient-to-b from-muted/60 to-transparent"></div>
                    <div class="border-b border-border/60 px-5 py-4">
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-primary text-primary-foreground">
                                    <x-icon name="sparkles" class="h-5 w-5" />
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-foreground">Component Preview Stack</p>
                                    <p class="text-xs text-muted-foreground">Drawer, table, command palette, cards</p>
                                </div>
                            </div>
                            <div class="rounded-full border border-border bg-background/80 px-3 py-1 text-[11px] font-medium text-muted-foreground">
                                Blade + Alpine
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-5 p-5">
                        <div class="rounded-2xl border border-border/60 bg-background p-4">
                            <div class="flex flex-wrap items-center gap-2 text-[11px] font-medium text-muted-foreground">
                                <span class="rounded-full bg-muted px-2.5 py-1">drawer</span>
                                <span class="rounded-full bg-muted px-2.5 py-1">command-palette</span>
                                <span class="rounded-full bg-muted px-2.5 py-1">card</span>
                                <span class="rounded-full bg-muted px-2.5 py-1">table</span>
                            </div>

                            <div class="mt-4 grid gap-4 sm:grid-cols-[1.1fr_0.9fr]">
                                <div class="rounded-2xl border border-border/60 bg-muted/20 p-4">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <p class="text-xs uppercase tracking-[0.24em] text-muted-foreground">Admin Card</p>
                                            <p class="mt-3 text-3xl font-semibold tracking-tight text-foreground">$48.2k</p>
                                        </div>
                                        <div class="rounded-full bg-primary/10 px-2.5 py-1 text-xs font-semibold text-primary">+12.4%</div>
                                    </div>
                                    <div class="mt-6 flex h-24 items-end gap-2">
                                        <span class="h-10 w-full rounded-t-xl bg-muted"></span>
                                        <span class="h-16 w-full rounded-t-xl bg-muted"></span>
                                        <span class="h-20 w-full rounded-t-xl bg-primary/35"></span>
                                        <span class="h-14 w-full rounded-t-xl bg-muted"></span>
                                        <span class="h-24 w-full rounded-t-xl bg-primary"></span>
                                        <span class="h-18 w-full rounded-t-xl bg-primary/45"></span>
                                    </div>
                                </div>

                                <div class="rounded-2xl border border-border/60 bg-muted/20 p-4">
                                    <div class="flex items-center justify-between">
                                        <p class="text-xs uppercase tracking-[0.24em] text-muted-foreground">Command Palette</p>
                                        <div class="inline-flex items-center gap-1 rounded-full border border-border bg-background px-2 py-1 text-[10px] text-muted-foreground">
                                            <span class="rounded bg-muted px-1.5 py-0.5">⌘</span>
                                            <span class="rounded bg-muted px-1.5 py-0.5">K</span>
                                        </div>
                                    </div>
                                    <div class="mt-3 rounded-xl border border-border bg-background px-3 py-2 text-sm text-muted-foreground">
                                        Search components, blocks, or docs...
                                    </div>
                                    <div class="mt-3 space-y-2">
                                        <div class="flex items-center justify-between rounded-xl bg-background px-3 py-2 text-sm">
                                            <span class="text-foreground">Drawer</span>
                                            <span class="text-muted-foreground">Open side panel</span>
                                        </div>
                                        <div class="flex items-center justify-between rounded-xl bg-background px-3 py-2 text-sm">
                                            <span class="text-foreground">Popover</span>
                                            <span class="text-muted-foreground">Layered actions</span>
                                        </div>
                                        <div class="flex items-center justify-between rounded-xl bg-background px-3 py-2 text-sm">
                                            <span class="text-foreground">Table</span>
                                            <span class="text-muted-foreground">Dense data UI</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-[0.94fr_1.06fr]">
                            <div class="rounded-2xl border border-border/60 bg-background p-4">
                                <div class="flex items-center justify-between">
                                    <p class="text-xs uppercase tracking-[0.24em] text-muted-foreground">Drawer Example</p>
                                    <span class="rounded-full bg-primary/10 px-2.5 py-1 text-[11px] font-semibold text-primary">Account Settings</span>
                                </div>
                                <div class="mt-4 space-y-3">
                                    <div class="space-y-1">
                                        <div class="h-3 w-24 rounded-full bg-muted"></div>
                                        <div class="h-9 rounded-xl border border-border bg-muted/40"></div>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="h-3 w-20 rounded-full bg-muted"></div>
                                        <div class="h-9 rounded-xl border border-border bg-muted/40"></div>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="h-3 w-32 rounded-full bg-muted"></div>
                                        <div class="h-20 rounded-2xl border border-border bg-muted/40"></div>
                                    </div>
                                </div>
                                <div class="mt-4 flex gap-2">
                                    <span class="inline-flex rounded-xl border border-border bg-background px-3 py-2 text-xs text-foreground">Cancel</span>
                                    <span class="inline-flex rounded-xl bg-primary px-3 py-2 text-xs font-semibold text-primary-foreground">Save changes</span>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-border/60 bg-background p-4">
                                <div class="flex items-center justify-between">
                                    <p class="text-xs uppercase tracking-[0.24em] text-muted-foreground">Table Example</p>
                                    <span class="text-xs text-muted-foreground">3 rows</span>
                                </div>
                                <div class="mt-4 overflow-hidden rounded-2xl border border-border">
                                    <div class="grid grid-cols-[1.3fr_0.8fr_0.8fr] border-b border-border bg-muted/50 px-3 py-2 text-[11px] font-semibold uppercase tracking-[0.18em] text-muted-foreground">
                                        <span>Component</span>
                                        <span>Status</span>
                                        <span>Usage</span>
                                    </div>
                                    <div class="grid grid-cols-[1.3fr_0.8fr_0.8fr] px-3 py-3 text-sm">
                                        <span class="text-foreground">Drawer</span>
                                        <span class="text-foreground">Ready</span>
                                        <span class="text-muted-foreground">High</span>
                                    </div>
                                    <div class="grid grid-cols-[1.3fr_0.8fr_0.8fr] border-t border-border px-3 py-3 text-sm">
                                        <span class="text-foreground">Popover</span>
                                        <span class="text-foreground">Ready</span>
                                        <span class="text-muted-foreground">Medium</span>
                                    </div>
                                    <div class="grid grid-cols-[1.3fr_0.8fr_0.8fr] border-t border-border px-3 py-3 text-sm">
                                        <span class="text-foreground">Command</span>
                                        <span class="text-foreground">Ready</span>
                                        <span class="text-muted-foreground">High</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-dashed border-border/70 bg-background/70 p-4">
                            <div class="flex flex-wrap items-center gap-4 text-sm text-muted-foreground">
                                <span class="inline-flex items-center gap-2"><x-icons.laravel /> Blade-first</span>
                                <span class="inline-flex items-center gap-2"><x-icons.tailwind /> Tailwind CSS v4</span>
                                <span class="inline-flex items-center gap-2"><x-icons.alpinejs /> Alpine.js</span>
                                <span class="inline-flex items-center gap-2"><x-icons.livewire /> Livewire ready</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-b border-border/60 bg-muted/20">
    <div class="container-wrapper px-4 py-14 lg:px-6">
        <div class="grid gap-6 lg:grid-cols-3">
            <div class="rounded-3xl border border-border/70 bg-background p-8">
                <div class="inline-flex rounded-2xl bg-primary/10 p-3 text-primary">
                    <x-icon name="copy-01" class="h-6 w-6" />
                </div>
                <h2 class="mt-5 text-2xl font-semibold tracking-tight text-foreground">Copy the component. Keep the control.</h2>
                <p class="mt-3 text-sm leading-7 text-muted-foreground">
                    Pull the markup into your app, inspect every class, and evolve the component with your own product constraints instead of someone else’s package roadmap.
                </p>
            </div>

            <div class="rounded-3xl border border-border/70 bg-background p-8">
                <div class="inline-flex rounded-2xl bg-primary/10 p-3 text-primary">
                    <x-icon name="sliders-horizontal" class="h-6 w-6" />
                </div>
                <h2 class="mt-5 text-2xl font-semibold tracking-tight text-foreground">Built to be edited, not protected.</h2>
                <p class="mt-3 text-sm leading-7 text-muted-foreground">
                    Utility classes stay legible, component anatomy stays practical, and your design system can bend the UI without fighting an abstraction wall.
                </p>
            </div>

            <div class="rounded-3xl border border-border/70 bg-background p-8">
                <div class="inline-flex rounded-2xl bg-primary/10 p-3 text-primary">
                    <x-icon name="dashboard-square-03" class="h-6 w-6" />
                </div>
                <h2 class="mt-5 text-2xl font-semibold tracking-tight text-foreground">Made for real Laravel product work.</h2>
                <p class="mt-3 text-sm leading-7 text-muted-foreground">
                    The patterns are aimed at admin panels, SaaS dashboards, settings flows, search-heavy interfaces, and the screens teams actually need to ship.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="border-b border-border/60 bg-background">
    <div class="container-wrapper px-4 py-16 lg:px-6">
        <div class="flex flex-col gap-4 text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.28em] text-muted-foreground">What You Actually Get</p>
            <h2 class="text-3xl font-semibold tracking-tight text-foreground sm:text-4xl">A Laravel UI baseline that still feels like your product</h2>
            <p class="mx-auto max-w-2xl text-base leading-7 text-muted-foreground">
                Start from a confident component library, then shape each screen around your brand, data density, and workflow needs.
            </p>
        </div>

        <div class="mt-12 grid gap-5 lg:grid-cols-[minmax(0,1.2fr)_minmax(0,0.8fr)]">
            <div class="rounded-[2rem] border border-border/70 bg-card p-6">
                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="rounded-2xl border border-border/60 bg-background p-5">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-muted-foreground">Documentation</p>
                        <p class="mt-3 text-lg font-semibold text-foreground">Installation guides and usage patterns</p>
                        <p class="mt-2 text-sm leading-6 text-muted-foreground">Clear onboarding paths for adding components into Blade projects without build-process drama.</p>
                    </div>
                    <div class="rounded-2xl border border-border/60 bg-background p-5">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-muted-foreground">Components</p>
                        <p class="mt-3 text-lg font-semibold text-foreground">A practical catalog for common product UI</p>
                        <p class="mt-2 text-sm leading-6 text-muted-foreground">Drawers, cards, tables, popovers, command palettes, modals, markdown viewers and more.</p>
                    </div>
                    <div class="rounded-2xl border border-border/60 bg-background p-5">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-muted-foreground">Customization</p>
                        <p class="mt-3 text-lg font-semibold text-foreground">Classes you can actually reason about</p>
                        <p class="mt-2 text-sm leading-6 text-muted-foreground">No hidden abstraction tax when brand direction, spacing logic, or product states evolve.</p>
                    </div>
                    <div class="rounded-2xl border border-border/60 bg-background p-5">
                        <p class="text-xs font-semibold uppercase tracking-[0.22em] text-muted-foreground">Workflow</p>
                        <p class="mt-3 text-lg font-semibold text-foreground">Faster iteration from docs to interface</p>
                        <p class="mt-2 text-sm leading-6 text-muted-foreground">Pick a component, paste it into the app, wire it to your data, then keep momentum.</p>
                    </div>
                </div>
            </div>

            <div class="rounded-[2rem] border border-border/70 bg-muted/30 p-6">
                <p class="text-xs font-semibold uppercase tracking-[0.24em] text-muted-foreground">Why Teams Reach For It</p>
                <div class="mt-6 space-y-4">
                    <div class="rounded-2xl border border-border/60 bg-background px-4 py-4">
                        <p class="text-sm font-semibold text-foreground">No package lock-in</p>
                        <p class="mt-1 text-sm leading-6 text-muted-foreground">Your components live in your repository, where product decisions and maintenance already happen.</p>
                    </div>
                    <div class="rounded-2xl border border-border/60 bg-background px-4 py-4">
                        <p class="text-sm font-semibold text-foreground">Consistent visual starting point</p>
                        <p class="mt-1 text-sm leading-6 text-muted-foreground">Useful defaults that still leave room for a brand with sharper visual character.</p>
                    </div>
                    <div class="rounded-2xl border border-border/60 bg-background px-4 py-4">
                        <p class="text-sm font-semibold text-foreground">Laravel-native ergonomics</p>
                        <p class="mt-1 text-sm leading-6 text-muted-foreground">It feels like building in Laravel instead of translating a foreign component philosophy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-background">
    <div class="container-wrapper px-4 py-18 lg:px-6 lg:py-22">
        <div class="relative overflow-hidden rounded-[2rem] border border-border/70 bg-foreground px-6 py-10 text-primary-foreground md:px-10 md:py-12">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(255,255,255,0.18),_transparent_24%),radial-gradient(circle_at_bottom_left,_rgba(255,255,255,0.1),_transparent_30%)]"></div>
            <div class="relative flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <p class="text-xs font-semibold uppercase tracking-[0.26em] text-primary-foreground/70">Start Building</p>
                    <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                        Build the first serious screen faster, then make it unmistakably yours.
                    </h2>
                    <p class="mt-4 text-base leading-7 text-primary-foreground/75">
                        Explore the docs, pull in the components you need, and turn Velyx into an interface layer that belongs to your product, not ours.
                    </p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="/docs/installation" class="inline-flex items-center justify-center gap-2 rounded-2xl bg-background px-5 py-3 text-sm font-semibold text-foreground transition-colors hover:bg-background/90">
                        Read the Docs
                        <x-icon name="arrow-right-02" class="h-4 w-4" />
                    </a>
                    <a href="https://github.com/velyx-labs" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 rounded-2xl border border-white/15 px-5 py-3 text-sm font-semibold text-primary-foreground transition-colors hover:bg-white/8">
                        <x-icons.github class="h-4 w-4 text-primary-foreground" />
                        View on GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
