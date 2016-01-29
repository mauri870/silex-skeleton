<?php

namespace App\Tests;

use Silex\Application;
use Silex\WebTestCase;

class BasicSkeletonTest extends WebTestCase
{
    use CreateApplicationTrait;

    public function testCanViewInitialPage()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isOk());

        $this->assertCount(1, $crawler->filter('h1:contains("Welcome to Silex!")'));
    }

    public function testApplicationCanBoot()
    {
        $app = $this->createApplication();
        $this->assertEquals(new Application(),$app);
    }

}