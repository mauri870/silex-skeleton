<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

/*
 * Register application Service Providers
 * */



$app->register(new Silex\Provider\ServiceControllerServiceProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../resources/views',
));

// Required for profile routes
if($app['debug'] === true){
    $app->register(new Silex\Provider\UrlGeneratorServiceProvider());

    $app->register(new Silex\Provider\HttpFragmentServiceProvider());

    $app->register(new Silex\Provider\WebProfilerServiceProvider(), array(
        'profiler.cache_dir' => __DIR__.'/../storage/cache/profiler',
        'profiler.mount_prefix' => '/_profiler'
    ));
}