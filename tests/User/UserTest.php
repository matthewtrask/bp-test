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

    /**
     * @var string
     */
    private $email;

    public function setup()
    {
        $this->name = 'Matt';
        $this->email = 'mjftrask@gmail.com';
        $this->user = new User($this->name, $this->email);
    }

    public function testCanCreateInstanceOfUser()
    {
        $this->assertInstanceOf(User::class, $this->user);
    }

    public function testCanGetName()
    {
        $this->assertEquals('Matt', $this->user->getName());
    }
}
