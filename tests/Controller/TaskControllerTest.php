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
        $form['task[content]'] = 'Ceci est une tâche crée par un test';
        $this->client->submit($form); 
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $crawler = $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    // Edition d'une tâche par un utilisateur simple
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

    // Suppression d'une tâche crée par un utiliseur simple et supprimé par le même auteur
    public function testDeleteTask()
    {
        $this->loginWithUser();

        $this->client->request('GET', '/tasks/8/delete');
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    public function testDeleteTaskWhereSimpleUserIsNotAuthor()
    {
        $this->client->request('GET', '/tasks/8/delete');
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    public function testDeleteTaskWithSimpleUserWhereAuthorIsAnonymous()
    {
        $this->client->request('GET', '/tasks/24/delete');
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }

    public function testToggleTask()
    {
        $this->client->request('GET', '/tasks/1/toggle');
        static::assertSame(302, $this->client->getResponse()->getStatusCode());

        $this->client->followRedirect();
        static::assertSame(200, $this->client->getResponse()->getStatusCode());
    }
}