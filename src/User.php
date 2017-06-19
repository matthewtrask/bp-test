<?php

namespace Trask\BpTest;

use Trask\BpTest\Exceptions\InvalidArgumentException;

class User
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->isString($name);
        $this->setName($name);
        $this->setEmail($email);
    }

    private function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    private function setEmail($email)
    {

    }

    private function isString($name)
    {
        if (! is_string($name)) {
            throw new InvalidArgumentException(sprintf('%s is not a string', $name));
        }
    }
}
