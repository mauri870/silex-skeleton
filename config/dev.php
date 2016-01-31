<?php
// Dev
// include the prod configuration
require __DIR__.'/prod.php';

$app->register(new Silex\Provider\WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__ . '/../storage/cache/profiler',
    'profiler.mount_prefix' => '/_profiler'
));