<?php

/**
 * @author    Mauri de Souza Nunes <mauri870@gmail.com>
 * @copyright Copyright (c) 2015, Mauri de Souza Nunes <github.com/mauri870>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace App\Tests;

use Silex\WebTestCase;

class TestCase extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__ . '/../src/app.php';
        require __DIR__ . '/../config/prod.php';
        require __DIR__ . '/../src/controllers.php';
        $app['debug'] = false;
        return $app;
    }
}