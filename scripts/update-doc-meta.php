<?php

declare(strict_types=1);

$files = [];
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__ . '/../source/docs'));
foreach ($it as $file) {
    if ($file->isFile() && $file->getExtension() === 'md') {
        $files[] = $file->getPathname();
    }
}
sort($files);

function componentDescription(string $title): string {
    return sprintf(
        '%s component documentation for Velyx. Installation, usage examples, variants, and customization guidance for Laravel Blade, Alpine.js, Livewire, and Tailwind CSS v4.',
        $title
    );
}

function docDescription(string $title): string {
    return match ($title) {
        'Installation' => 'Install Velyx in your Laravel project and start adding Blade components with Tailwind CSS v4, Alpine.js, and Livewire support.',
        'Quick Start' => 'Add your first Velyx component, understand the workflow, and move from documentation to implementation quickly in Laravel.',
        'Configuration' => 'Configure Velyx for your Laravel project, adjust project settings, and align the component workflow with your application structure.',
        'Theming' => 'Customize Velyx components to match your brand with practical theming patterns for colors, spacing, and interface polish.',
        'Components' => 'Browse the Velyx component library for Laravel, including practical UI building blocks for dashboards, forms, overlays, and product screens.',
        'CLI Reference' => 'Reference for Velyx CLI commands, installation flows, and day-to-day component management in Laravel projects.',
        'Algolia DocSearch' => 'Configure Algolia DocSearch for the Velyx documentation experience and improve navigation across your Laravel component docs.',
        'Custom 404 Page' => 'Set up a custom 404 page in the Velyx docs starter and keep your documentation experience polished end to end.',
        'Customizing Your Site' => 'Customize the Velyx docs site structure, content, and presentation so the documentation matches your product and team workflow.',
        'Colors' => 'Learn the Velyx color system, design tokens, and practical guidance for building consistent Laravel interfaces.',
        'Spacing' => 'Learn the Velyx spacing system and layout rules for building cleaner, more consistent Laravel UI screens.',
        'Typography' => 'Learn the Velyx typography system, text hierarchy, and font guidance for sharper Laravel product interfaces.',
        default => $title . ' documentation for Velyx. Learn how to use Laravel-first UI components, design patterns, and setup guides effectively.',
    };
}

foreach ($files as $path) {
    $contents = file_get_contents($path);
    if (!preg_match('/^---\n(.*?)\n---\n/s', $contents, $matches)) {
        continue;
    }

    $frontmatter = $matches[1];
    if (!preg_match('/^title:\s*(.+)$/m', $frontmatter, $titleMatch)) {
        continue;
    }

    $title = trim($titleMatch[1], " \t\n\r\0\x0B\"");
    $relative = str_replace(realpath(__DIR__ . '/..') . '/', '', $path);
    $description = str_contains($relative, 'source/docs/components/') ? componentDescription($title) : docDescription($title);

    if (preg_match('/^description:\s*.*$/m', $frontmatter)) {
        $updatedFrontmatter = preg_replace('/^description:\s*.*$/m', 'description: ' . $description, $frontmatter, 1);
    } else {
        $updatedFrontmatter = preg_replace('/^title:\s*.*$/m', "$0\ndescription: " . $description, $frontmatter, 1);
    }

    $updated = preg_replace('/^---\n.*?\n---\n/s', "---\n" . $updatedFrontmatter . "\n---\n", $contents, 1);
    file_put_contents($path, $updated);
}
