<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

$app = require __DIR__.'/../bootstrap/app.php';

$app['debug'] = true;

/*
 * Application Routes
 * */

$app->get('/', function() use($app) {
    return $app['twig']->render('index.html.twig');
});


$app->run();
