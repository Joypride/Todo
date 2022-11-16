<?php
namespace App\Tests\Entity;
use App\Entity\User;
class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testDefault()
    {
        $user = new User('John', 'pomme', 'info@mail.com');
        // $this->assertSame('John', $user->username);
    }
}