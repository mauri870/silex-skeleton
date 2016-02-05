<?php
/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__ . '/../src/app.php';

// You can disable debug on cli server commenting the line above
$app['debug'] = true;

if(php_sapi_name() === 'cli-server' && $app['debug'] == true){
    require __DIR__.'/../config/dev.php';
}else{
    require __DIR__.'/../config/prod.php';
}

require __DIR__.'/../src/controllers.php';
$app->run();
