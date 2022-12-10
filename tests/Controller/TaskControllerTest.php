<?php

namespace App\Tests\Controller;

use App\Tests\Controller\SecurityControllerTest;

class TaskControllerTest extends SecurityControllerTest
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testList(): void
    {
        $this->client->request('GET', '/tasks');
        self::assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testCreate()
    {
        $crawler = $this->client->request('GET', '/tasks/create');
        static::assertSame(200, $this->client->getResponse()->getStatusCode());

        // Test if creation page field exists
        static::assertSame(1, $crawler->filter('input[name="task[title]"]')->count());
        static::assertSame(1, $crawler->filter('textarea[name="task[content]"]')->count());

        $form = $crawler->selectButton('Ajouter')->form();
        $form['task[title]'] = 'Nouvelle tâche';
        $form['task[content]'] = 'Ceci est une tâche créée par un test';
        $this->client->submit($form); 

        $crawler = $this->client->followRedirect();
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        static::assertEquals("Superbe !", $crawler->filter('div.alert.alert-success strong')->text());
    }

    public function testEdit()
    {
        $crawler = $this->client->request('GET', '/tasks/1/edit');
        static::assertSame(200, $this->client->getResponse()->getStatusCode());

        // Test if creation page field exists
        static::assertSame(1, $crawler->filter('input[name="task[title]"]')->count());
        static::assertSame(1, $crawler->filter('textarea[name="task[content]"]')->count());

        $form = $crawler->selectButton('Modifier')->form();
        $form['task[title]'] = 'Modification de tache';
        $form['task[content]'] = 'Je modifie une tache';
        $this->client->submit($form);

        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $crawler = $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    public function testDeleteTask()
    {
        $this->loginWithAdmin();

        $this->client->request('GET', '/tasks/14/delete');
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    public function testDeleteTaskWhenUserIsNotAuthor()
    {
        $this->loginWithUser();

        $this->client->request('GET', '/tasks/20/delete');
        static::assertSame(403, $this->client->getResponse()->getStatusCode());
    }

    public function testDeleteTaskWithAdminrWhereAuthorIsAnonymous()
    {
        $this->loginWithAdmin();

        $this->client->request('GET', '/tasks/25/delete');
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    public function testDeleteTaskWithSimpleUserWhereAuthorIsAnonymous()
    {
        $this->loginWithUser();

        $this->client->request('GET', '/tasks/24/delete');
        static::assertSame(403, $this->client->getResponse()->getStatusCode());
    }

    public function testToggleTask()
    {
        $this->client->request('GET', '/tasks/1/toggle');
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }
}