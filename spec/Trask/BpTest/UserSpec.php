<?php

namespace spec\Trask\BpTest;

use Trask\BpTest\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }

    public function it_gets_a_name()
    {
        $user = new User('Matt', 'mjftrask@gmail.com');
        $user->getName()->shouldBe('Matt');
    }

    public function it_gets_an_email()
    {
        $user = new User('Matt', 'mjftrask@gmail.com');
        $user->getEmail()->shouldBe('mjftrask@gmail.com');
    }
}
