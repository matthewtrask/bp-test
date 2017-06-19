<?php

namespace Trask\BpTest\Tests\User;

use PHPUnit\Framework\TestCase;
use Trask\BpTest\UserLoader;

class UserLoaderTest extends TestCase
{
    private $userLoader;

    public function setup()
    {
        $this->userLoader = new UserLoader;
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(UserLoader::class, $this->userLoader);
    }
}
