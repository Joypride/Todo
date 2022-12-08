<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{

    protected function setUp(): void
    {
        $this->client = self::createClient();
    }

    public function testLoginWithValidData(): void
    {
        $crawler = $this->client->request('GET', '/login');
        self::assertEquals(200, $this->client->getResponse()->getStatusCode());
        self::assertCount(2, $crawler->filter('input'));
    }

    public function testLoginWithInvalidData(): void
    {
        $crawler = $this->client->request('GET', '/login');
        self::assertEquals(200, $this->client->getResponse()->getStatusCode());

        $buttonCrawlerMode = $crawler->filter('form');
        $form = $buttonCrawlerMode->form([
            '_username' => 'test',
            '_password' => 'test'
        ]);

        $this->client->submit($form);

        self::assertEquals(302, $this->client->getResponse()->getStatusCode());
        $crawler = $this->client->followRedirect();
    }

    public function loginWithAdmin(): void
    {
        $crawler = $this->client->request('GET', '/login');

        $buttonCrawlerMode = $crawler->filter('form');
        $form = $buttonCrawlerMode->form([
            '_username' => 'Laurie',
            '_password' => 'pomme'
        ]);

        $this->client->submit($form);
    }

    public function loginWithUser(): void
    {
        $crawler = $this->client->request('GET', '/login');

        $buttonCrawlerMode = $crawler->filter('form');
        $form = $buttonCrawlerMode->form([
            '_username' => 'newuser',
            '_password' => 'test'
        ]);

        $this->client->submit($form);
    }
}