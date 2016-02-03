<?php

namespace App\Tests;

use Silex\Application;
use Silex\WebTestCase;

class BasicSkeletonTest extends TestCase
{

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

    public function testCanRender404Page()
    {
        $client = $this->createClient();
        $randomUrl = md5(microtime());
        $crawler = $client->request('GET', '/'.$randomUrl);
        $this->assertEquals('404',$client->getResponse()->getStatusCode());

        $this->assertCount(1, $crawler->filter('h2:contains("Oops, parece que você está perdido!")'));
    }
}