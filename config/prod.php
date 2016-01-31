<?php

// Production

$app['twig.path'] = array(__DIR__.'/../resources/views');
$app['twig.options'] = array('cache' => __DIR__.'/../storage/cache/twig');