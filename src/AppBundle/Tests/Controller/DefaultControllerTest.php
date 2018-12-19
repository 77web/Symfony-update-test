<?php

namespace AppBundle\Tests\Controller;


use Liip\FunctionalTestBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function setUp()
    {
        $this->loadFixtureFiles([
            __DIR__.'/../../Test/Resources/fixtures/customer.yml',
        ]);
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('hello hiromi', $crawler->filter('#message')->text());
    }
}
