<?php
namespace App\Tests\Entity;
use App\Entity\Task;
class TaskTest extends \PHPUnit\Framework\TestCase
{
    public function testDefault()
    {
        $task = new Task('2022-10-31 12:12:050', 'This is the title', 'This is the content', false);
    }
}