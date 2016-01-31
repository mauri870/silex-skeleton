<?php
// Dev
// include the prod configuration
require __DIR__.'/prod.php';

// enable the debug mode
$app['debug'] = true;

$app->register(new Silex\Provider\WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__ . '/../storage/cache/profiler',
    'profiler.mount_prefix' => '/_profiler'
));