<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    private $task;

    public function setUp(): void
    {
        $this->user = new User();
        $this->task = new Task();
    }

    public function testUsername(): void
    {
        $this->user->setUsername('Jimmy');
        $this->assertSame('Jimmy', $this->user->getUsername());
    }

    public function testPassword(): void
    {
        $this->user->setPassword('pomme');
        $this->assertSame('pomme', $this->user->getPassword());
    }

    public function testEmail(): void
    {
        $this->user->setEmail('root@root.fr');
        $this->assertSame('root@root.fr', $this->user->getEmail());
    }

    public function testRoles(): void
    {
        $this->user->setRoles(['ROLE_USER']);
        $this->assertSame(['ROLE_USER'], $this->user->getRoles());
    }

    public function testTasks(): void
    {
        $tasks = $this->user->getTasks($this->task->getUser());
        $this->assertSame($this->user->getTasks(), $tasks);

        $this->user->addtask($this->task);
        $this->assertCount(1, $this->user->getTasks());

        $this->user->removeTask($this->task);
        $this->assertCount(0, $this->user->getTasks());
    }

    public function testSalt(): void
    {
        $this->assertEquals(null, $this->user->getSalt());
    }

    public function testEraseCredential(): void
    {
        $this->assertNull($this->user->eraseCredentials());
    }
}