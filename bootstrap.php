<?php

use App\Listeners\GenerateSitemap;

/**
 * @var \Illuminate\Container\Container $container
 * @var \TightenCo\Jigsaw\Events\EventBus $events
 */

// Load helper functions
require_once __DIR__ . '/source/helpers.php';

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

// Generate sitemap after build
$events->afterBuild(GenerateSitemap::class);
