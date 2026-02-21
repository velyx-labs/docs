<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="<?php echo e($page->description ?? $page->siteDescription); ?>">

        <meta property="og:site_name" content="<?php echo e($page->siteName); ?>"/>
        <meta property="og:title" content="<?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?>"/>
        <meta property="og:description" content="<?php echo e($page->description ?? $page->siteDescription); ?>"/>
        <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="<?php echo e($page->siteName); ?>">
        <meta name="twitter:card" content="summary_large_image">

        <?php if($page->docsearchApiKey && $page->docsearchIndexName): ?>
            <meta name="generator" content="tighten_jigsaw_doc">
        <?php endif; ?>

        <title><?php echo e($page->siteName); ?><?php echo e($page->title ? ' | ' . $page->title : ''); ?></title>

        <link rel="home" href="<?php echo e($page->baseUrl); ?>">
        <link rel="icon" href="/favicon.ico">

        <?php echo $__env->yieldPushContent('meta'); ?>

        <?php if($page->production): ?>
            <!-- Insert analytics code here -->
        <?php endif; ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Geist:wght@100..900&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" rel="stylesheet" />

        <?php echo vite_refresh(); ?>
        <link rel="stylesheet" href="<?php echo e(vite('source/_assets/css/main.css')); ?>">
        <script defer type="module" src="<?php echo e(vite('source/_assets/js/main.js')); ?>"></script>

        <?php if($page->docsearchApiKey && $page->docsearchIndexName): ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        <?php endif; ?>
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-background text-foreground leading-normal font-sans antialiased">
        <header class="sticky top-0 z-50 w-full border-b bg-background/80 backdrop-blur-lg supports-[backdrop-filter]:bg-background/60" role="banner">
            <div class="container flex items-center h-14 max-w-screen-xl mx-auto px-4 lg:px-8">
                <div class="flex items-center gap-8">
                    <a href="/" title="<?php echo e($page->siteName); ?> home" class="flex items-center gap-2 font-bold text-lg hover:text-primary transition-colors">
                        <img class="h-7 w-7" src="/assets/img/logo.svg" alt="<?php echo e($page->siteName); ?> logo" />
                        <span><?php echo e($page->siteName); ?></span>
                    </a>

                    <nav class="hidden md:flex items-center gap-6 text-sm font-medium" role="navigation">
                        <a href="/docs/installation" class="text-muted-foreground hover:text-foreground transition-colors">Documentation</a>
                        <a href="/docs/components" class="text-muted-foreground hover:text-foreground transition-colors">Components</a>
                        <a href="https://github.com/velyx-labs" target="_blank" rel="noopener noreferrer" class="text-muted-foreground hover:text-foreground transition-colors">GitHub</a>
                    </nav>
                </div>

                <div class="flex flex-1 justify-end items-center gap-4">
                    <?php if($page->docsearchApiKey && $page->docsearchIndexName): ?>
                        <?php echo $__env->make('_nav.search-input', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endif; ?>

                    <a href="/docs/installation" class="hidden sm:inline-flex items-center justify-center rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-primary-foreground shadow-sm hover:bg-primary/90 transition-all">
                        Get Started
                        <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => '_components.icon','data' => ['name' => 'arrow-right-02','class' => 'ml-1.5 h-4 w-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'arrow-right-02','class' => 'ml-1.5 h-4 w-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
                    </a>
                </div>
            </div>

            <?php echo $__env->yieldContent('nav-toggle'); ?>
        </header>

        <main role="main" class="flex-1">
            <?php echo $__env->yieldContent('body'); ?>
        </main>

        <footer class="border-t bg-muted/50" role="contentinfo">
            <div class="container max-w-screen-xl mx-auto px-4 lg:px-8 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-2 text-sm text-muted-foreground">
                        <span>&copy; <?php echo e(date('Y')); ?> <?php echo e($page->siteName); ?>.</span>
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

        <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/prismjs/plugins/autoloader/prism-autoloader.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>
        <script src="<?php echo e(asset('source/_assets/js/copy-button.js')); ?>"></script>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /home/jiordiviera/workspace/oss/velar/docs/source/_layouts/master.blade.php ENDPATH**/ ?>