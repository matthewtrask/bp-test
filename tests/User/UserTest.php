<?php

namespace Trask\BpTest\Tests\User;

use Exception;
use PHPUnit\Framework\TestCase;
use Trask\BpTest\Exceptions\InvalidArgumentException;
use Trask\BpTest\User;

class UserTest extends TestCase
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var string
     */
    private $name;

    public function setup()
    {
        $this->name = 'Matt';
        $this->user = new User($this->name);
    }

    public function testCanCreateInstanceOfUser()
    {
        $this->assertInstanceOf(User::class, $this->user);
    }

    public function testCanGetName()
    {
        $this->assertEquals('Matt', $this->user->getName());
    }

    public function testWillThrowExceptionForNonString()
    {
        $this->expectException(InvalidArgumentException::class);
    }

    public function testStringIsReturnType()
    {
        $this->assertTrue(is_string($this->user->getName()));
    }
}
