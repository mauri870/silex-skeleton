<?php

namespace App\Tests;

use Silex\Application;
use Silex\WebTestCase;

class BasicSkeletonTest extends WebTestCase
{
    use CreateApplicationTrait;

    public function testApplicationCanBoot()
    {
        $this->assertEquals(Application::class,get_class($this->createApplication()));
    }

    public function testCanViewInitialPage()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isOk());

        $this->assertCount(1, $crawler->filter('h1:contains("Welcome to Silex!")'));
    }
}