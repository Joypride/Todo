<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{

    protected function setUp(): void
    {
        $this->client = self::createClient();
    }

    public function testLoginPage(): void
    {
        $crawler = $this->client->request('GET', '/login');
        self::assertEquals(200, $this->client->getResponse()->getStatusCode());
        self::assertCount(2, $crawler->filter('input'));
    }

    public function testLoginWithValidData(): void
    {
        $crawler = $this->client->request('GET', '/login');

        $buttonCrawlerMode = $crawler->filter('form');
        $form = $buttonCrawlerMode->form([
            '_username' => 'Laurie',
            '_password' => 'pomme'
        ]);

        $this->client->submit($form);

        $crawler = $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
        static::assertSame("Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !", $crawler->filter('h1')->text());
    }


    public function testLoginWithInvalidData(): void
    {
        $crawler = $this->client->request('GET', '/login');

        $buttonCrawlerMode = $crawler->filter('form');
        $form = $buttonCrawlerMode->form([
            '_username' => 'test',
            '_password' => 'test'
        ]);

        $this->client->submit($form);

        $crawler = $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
        static::assertSame("Invalid credentials.", $crawler->filter('div.alert.alert-danger')->text());
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