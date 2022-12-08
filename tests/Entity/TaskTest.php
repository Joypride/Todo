<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    private $task;
    private $date;

    public function setUp(): void
    {
        $this->task = new Task();
        $this->date = new \DateTime();
    }

    public function testCreatedAt(): void
    {
        $this->task->setCreatedAt($this->date);
        $this->assertSame($this->date, $this->task->getCreatedAt());
    }

    public function testId(): void
    {
        $this->assertNull($this->task->getId());
    }

    public function testTitle(): void
    {
        $this->task->setTitle('Test du titre');
        $this->assertSame($this->task->getTitle(), 'Test du titre');
    }

    public function testContent(): void
    {
        $this->task->setContent('Test du contenu');
        $this->assertSame($this->task->getContent(), 'Test du contenu');
    }

    public function testIsDone(): void
    {
        $this->task->toggle(true);
        $this->assertEquals($this->task->isDone(), true);
    }

    public function testUser(): void
    {
        $this->task->setUser(new User());
        $this->assertInstanceOf(User::class, $this->task->getUser());
    }
}