<?php

class BasicSkeletonTest extends Silex\WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__ . '/../src/app.php';
        $app['debug'] = false;
        return $app;
    }

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
        $this->assertEquals(new Silex\Application(),$app);
    }

}