<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();


$app['debug'] = true;

require_once __DIR__.'/../config/providers.php';

/*
 * Application Routes
 * */

$app->get('/', function() use($app) {
    return $app['twig']->render('index.html.twig');
});

return $app;