<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

use Symfony\Component\HttpFoundation\Response;

$app->get('/', function() use($app) {
    return $app['twig']->render('index.html.twig');
})->bind('homepage');


// Catch errors
$app->error(function (\Exception $e, $code) use($app){
    switch ($code) {
        case 404:
            return $app['twig']->render('errors/404.html.twig');
        default:
            $message = 'We are sorry, but something went wrong.';
    }

    return new Response($message);
});