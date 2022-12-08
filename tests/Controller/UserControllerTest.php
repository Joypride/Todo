<?php

namespace App\Tests\Controller;

use App\Tests\Controller\SecurityControllerTest;

class UserControllerTest extends SecurityControllerTest
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testList()
    {
        $this->client->request('GET', '/users');
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $this->loginWithAdmin();

        $crawler = $this->client->request('GET', '/users');
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
        static::assertSame("Liste des utilisateurs", $crawler->filter('h1')->text());
    }

    public function testEdit()
    {
        $crawler = $this->client->request('GET', '/users/2/edit');
        static::assertSame(200, $this->client->getResponse()->getStatusCode());

        // Test if edit page field exists
        static::assertSame(1, $crawler->filter('input[name="user[username]"]')->count());
        static::assertSame(1, $crawler->filter('input[name="user[password][first]"]')->count());
        static::assertSame(1, $crawler->filter('input[name="user[password][second]"]')->count());
        static::assertSame(1, $crawler->filter('input[name="user[email]"]')->count());

        $form = $crawler->selectButton('Modifier')->form();
        $form['user[username]'] = 'user';
        $form['user[password][first]'] = 'test';
        $form['user[password][second]'] = 'test';
        $form['user[email]'] = 'editedUser@example.org';
        $this->client->submit($form);
        static::assertSame(302, $this->client->getResponse()->getStatusCode());
    }

    public function testCreate()
    {        
        $crawler = $this->client->request('GET', '/users/create');
        static::assertSame(200, $this->client->getResponse()->getStatusCode());

        // Test if creation page field exists
        static::assertSame(1, $crawler->filter('input[name="user[username]"]')->count());
        static::assertSame(1, $crawler->filter('input[name="user[password][first]"]')->count());
        static::assertSame(1, $crawler->filter('input[name="user[password][second]"]')->count());
        static::assertSame(1, $crawler->filter('input[name="user[email]"]')->count());

        $form = $crawler->selectButton('Ajouter')->form();
        $form['user[username]'] = 'newuser';
        $form['user[password][first]'] = 'test';
        $form['user[password][second]'] = 'test';
        $form['user[email]'] = 'newUser@example.org';
        $this->client->submit($form);
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }
}